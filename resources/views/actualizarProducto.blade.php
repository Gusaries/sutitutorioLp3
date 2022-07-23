<form method="post" action="/actualizar">
    @csrf
    Fecha:
    <input type="date" name="fecha" value="{{$venta->fecha}}"><br>
    <input type="montoTotal" name="monto" value="{{$venta->precio}}"><br>
    <input type="cantidad" name="cantidad" value="{{$venta->cantidad_prendas}}"><br>
    <input type="hidden" name="color" value="{{$venta->color}}"><br>
    
</form>