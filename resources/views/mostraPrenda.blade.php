<table border= 1>
    <tr>
        <th>Cantidad</th>
        <th>Precio</th>
        
    </tr>
    @foreach($prendas as $prenda)
    <tr>
        <td> {{$prenda["nombre"]}} </td>
        <td> {{$prenda["direccion"]}} </td>
        
    </tr>
        @foreach($venta as $venta)
            @if($venta["detalle_id"] == $prenda["id"])
            <tr>
                <td>
                    Cantidad: {{$prenda['cantidad']}}<br>
                    Color: {{$prenda['color']}}<br>
                    Tipo: {{$prenda['cliente_id']}}<br>
                    precio: {{$prenda['detalle_id']}}<br><br>
                </td>
                
                <td>&nbsp;</td>
            </tr>
            @endif
        @endforeach
    @endforeach
</table>