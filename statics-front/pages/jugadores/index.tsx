import { loadJugadores } from "@/app/lib/load-jugadores"
import { GetStaticProps } from "next"
import JugadorComponent from "@/app/components/jugadorComponent"


type Jugador = {
  id: number
  nombre: string
  apellido: string
}

type JugadoresProps = {
  jugadores: Jugador[]
}

export const getStaticProps: GetStaticProps = async () => {
  const jugadores = await loadJugadores()
  return {
    props: {
      jugadores
    }
  }
}

export default function Jugadores({jugadores}: JugadoresProps) {
  return (
    <div>
      <h1 className="text-3xl font-bold underline">Jugadores</h1>
      <ul>
        {jugadores.map(jugador => (
          <JugadorComponent jugador={jugador} />
        ))}
      </ul>
    </div>
  )
}

