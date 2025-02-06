export async function loadEquipos() {
    const fetchOptions: RequestInit = {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': 'Bearer 4|di6RsnFEOrkTxseUg2uBUd2AiGpLrXzCmDhfpAwVd6e4a923',
        }
    }
    const res = await fetch('http://partidos-de-la-amistad.test/api/v1/equipos',fetchOptions)
    const data = await res.json()
    return data
  }

