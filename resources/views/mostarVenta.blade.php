<table>
    <tr>
        <td>Productos</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        @foreach($ventas as $venta)
        <td>
            Fecha: {{$venta["fecha"]}} <br>
            Total: {{$venta["montoTotal"]}} <br>
            Detalle : {{$venta["detalle_id"]}} <br>
            Talla: {{$venta["talla"]}} <br>
            Cantidad: {{$venta["cantidad"]}} <br>
            Color: {{$venta["color"]}} <br>        

            
        </td>
        <td><a href="/actualizar/{{$venta['id']}}">Actualizar</a></td>
        @endforeach
    </tr>
</table>