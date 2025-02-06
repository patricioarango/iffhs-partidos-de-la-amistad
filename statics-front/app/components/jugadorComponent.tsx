export default function JugadorComponent({jugador}) {
    return (
            <li key={jugador.id}>
            <h1 className="text-3xl font-bold underline">{jugador.nombre}</h1>
            </li>
    )

}