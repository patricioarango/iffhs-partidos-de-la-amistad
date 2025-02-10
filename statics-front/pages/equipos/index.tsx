import { loadEquipos } from "@/lib/load-equipos"
import { GetStaticProps } from "next"

type Equipo = {
  id: number
  equipo: string
}

type EquiposProps = {
  equipos: Equipo[]
}

export const getStaticProps: GetStaticProps = async () => {
  const equipos = await loadEquipos()
  return {
    props: {
      equipos
    }
  }
}

export default function Jugadores({equipos}: EquiposProps) {
  return (
    <div>
      <h1 className="text-3xl font-bold underline">Jugadores</h1>
      <ul>
        {equipos.map(equipo => (
          <h1>{equipo.equipo}</h1>
        ))}
      </ul>
    </div>
  )
}

