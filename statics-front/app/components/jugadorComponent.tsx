export default function JugadorComponent({jugador}) {
    console.log(jugador)
    return (
            <li key={jugador.id}>
            <h1 className="text-3xl font-bold underline">{jugador.nombre} {(jugador.equipo_id > 0) ? ' - ' + jugador.equipo.equipo : ''}</h1>
            </li>
    )

}