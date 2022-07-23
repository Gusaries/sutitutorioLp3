<form method="post" action="/registrar">
    @csrf
    <h2>Producto</h2>
    <table>
        <tr>
            <th>&nbsp;</th>
            <th>Habitaciones Disponibles</th>
        </tr>
        @foreach($habitaciones as $habitacion)
            @auth
            <tr>
                <td><input type="radio" name="producto" value="{{$venta['id']}}"></td>
                <td>
                    Fecha: {{$venta['numero']}}<br>
                    Monto Total: {{$mesa['capacidad']}}<br>
                    Cantidad: {{$venta['restaurante_id']}}<br>
                    Precio: {{$venta['reserva_id']}}<br><br>
                    Color: {{$venta['reserva_id']}}<br><br>
                </td>
            </tr>
            @endauth
        @endforeach
    </table>

    <h2>Clientes</h2>
    <select name="producto">
        @foreach($clientes as $cliente)
            <option value="{{$venta['id']}}">{{$venta["nombre"]}}</option>
        @endforeach
    </select>
    <h2>Fecha de Entrada</h2>
    <input type="date" name="fecha">

    <input type="submit" value="Registrar">
</form>