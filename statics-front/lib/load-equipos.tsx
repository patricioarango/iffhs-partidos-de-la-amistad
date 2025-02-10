import { getUserSession } from "@/lib/session";

export async function loadEquipos() {
    const access_token = await getUserSession();
    if (!access_token) {
        return null;
    }
    const fetchOptions: RequestInit = {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${access_token.access_token}`      
        }
    }
    const res = await fetch('http://partidos-de-la-amistad.test/api/v1/equipos',fetchOptions)
    const data = await res.json()
    return data
  }

