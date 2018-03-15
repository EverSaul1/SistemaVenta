<?php

use App\model\Venta;
use App\model\Ventadetalle;
use vista\Vista;

class VentaController
{

    public function index()
    {
        $ventas = Venta::all();
        return Vista::crear('admin.venta.index', array(
            "ventas" => $ventas,
        ));
    }

    public function nuevo()
    {
        return Vista::crear('admin.venta.nuevo');
    }

    public function agregar()
    {
        $venta              = new Venta();
        $venta->cliente     = input('nombre');
        $venta->monto_venta = input('total');
        $venta->fecha       = date('Y-m-d');

        if ($venta->guardar()) {
            $productos = json_decode(input('productos'));

            foreach ($productos as $producto) {
                $ventad              = new Ventadetalle();
                $ventad->producto_id = $producto->id;
                $ventad->venta_id    = $venta->id;
                $ventad->cantidad    = $producto->cantidad;
                $ventad->monto       = $producto->subtotal;
                $ventad->guardar();
            }

            return redirecciona()->to('venta');
        }
        return redirecciona()->to('venta');
    }

}
