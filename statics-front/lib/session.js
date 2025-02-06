"use server";
import { SignJWT } from 'jose'
import { cookies } from 'next/headers'

// source: https://www.youtube.com/watch?v=gGPpB9ojkWU
const secretKey = "ee7rtf0u6nOaqEc9ewcJz3QOdyp0+QnrR0b3JY52iy4="
const encodedKey = new TextEncoder().encode(secretKey)

export async function encryptSession(payload) {
    return new SignJWT(payload)
    .setProtectedHeader({ alg: "HS256" })
    .setIssuedAt()
    .setExpirationTime("7d")
    .sign(encodedKey)
}

export async function decryptSession(session) {
    try {
        const {payload} = await jwtVerify(session, encodedKey,{algorithms: [ "HS256"]})
        return payload
    } catch (error) {
        console.error(error)
        return null
    }
}

export async function getUserSession() {
    const session = cookies().cookies.nextjs_session
    if (!session) return null
    return await decryptSession(session)
}

export async function setUserSession(payload) {
    const session = await encryptSession(payload);
    cookies().set("nextjs_session", session, {httpOnly: true});
}