<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleVenta;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\Prenda;

class VentaController extends Controller
{
    public function mostrar(){
        $ventas = Venta::join("producto", "venta.detalle_id","=","prenda.venta_id")
        ->join("ventas", "venta.detalle_id","=","prenda.venta_id")
        ->select("ventas.*", "detalle_ventas.talla", "detalle_ventas","color")
        ->get();
        return view("mostrarVenta")
        ->with("reservas",$ventas);
        
    }

    public function registrarProducto(Request $request){
        $ventas = new Reserva();
        $ventas->fecha = $request->input("fecha");
        $ventas->servicio = $request->input("montoToal");
        $ventas->num_personas = $request->input("cantidad");
        $ventas->estado = $request->input("precio");
        $ventas->save();
        return "Producto Registrado";
    }
    
}
