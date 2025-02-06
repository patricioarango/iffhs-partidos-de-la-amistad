"use server";
import { cookies } from "next/headers";
import { encryptSession,getUserSession } from "@/lib/session";

export async function login(email, password) {
    const res = await fetch("http://partidos-de-la-amistad.test/api/v1/login", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        credentials: "include",
        body: JSON.stringify({ email, password }),
    });
    const data = await res.json();
    const session = await encryptSession(data.access_token);
    const expires = new Date(Date.now() * 1000);
    cookies().set("nextjs_session", session, {expires,httpOnly: false});
    return data;
  }
  
export async function getUser() {
    const access_token = getUserSession();
    console.log("access_token decrypted");
    console.log(access_token);
    const res = await fetch("http://partidos-de-la-amistad.test/api/user", {
        method: "GET",
        credentials: "include", 
    });

    return res.json();
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