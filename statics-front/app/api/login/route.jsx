"use server";
import { cookies } from "next/headers";
import { encryptSession,getUserSession } from "@/lib/session";

export async function POST(req) {
    return login(req);
}

async function login(req) {
    const { email, password } = await req.json();
    
    const res = await fetch("http://partidos-de-la-amistad.test/api/v1/login", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        credentials: "include",
        body: JSON.stringify({ email, password }),
    });
    
    if (!res.ok) {
        return Response.json({ error: "Invalid credentials" }, { status: res.status });
    }
    const data = await res.json();
    const session = await encryptSession(data);
    const expires = new Date(Date.now() * 1000);
    cookies().set("nextjs_session", session, {expires,httpOnly: true});
    return await getUser()
  }
  
async function getUser() {
    const access_token = await getUserSession();
    const res = await fetch("http://partidos-de-la-amistad.test/api/user", {
        method: "GET",
        credentials: "include", 
        headers: {  
            "Content-Type": "application/json",
            "Authorization": `Bearer ${access_token.access_token}`      
            }
        });
    const user = await res.json();
    return Response.json({ user }, { status: 200 });
}
  
export async function logout() {
    await fetch("http://partidos-de-la-amistad.test/api/v1/logout", {
        method: "POST",
        credentials: "include",
    });
}

export async function getServerSideUser() {
    const cookieStore = cookies();
    const token = cookieStore.get("laravel_session");

    if (!token) return null;

    const res = await fetch("http://partidos-de-la-amistad.test/api/user", {
        headers: { Cookie: `laravel_session=${token.value}` },
        credentials: "include",
    });

    if (!res.ok) return null;

    return res.json();
}