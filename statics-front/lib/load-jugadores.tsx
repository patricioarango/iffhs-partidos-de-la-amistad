export async function loadJugadores() {
    const res = await fetch('http://partidos-de-la-amistad.test/api/v1/jugadores')
    const data = await res.json()
    return data
  }