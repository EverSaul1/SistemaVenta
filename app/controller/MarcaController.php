<?php

use App\model\Marca;
use vista\Vista;

class MarcaController
{
    public function index()
    {
        $marcas = Marca::all();
        return Vista::crear("admin.marca.index", array(
            "marcas" => $marcas,
        ));
    }

    public function todos(){
        $marcas = Marca::all();
        echo json_response($marcas);
    }

    public function nuevo()
    {
        return Vista::crear('admin.marca.nuevo');
    }

    public function agregar()
    {
        try {

            $marca = new Marca();
            if (input('marca_id')) {
                $marca = Marca::find(input('marca_id'));
            }

            $marca->marca = input("marca");
            
            $marca->guardar();

            redirecciona()->to("marca");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function editar($id)
    {
        $marca = Marca::find($id);
        if (count($marca)) {
            return Vista::crear('admin.marca.nuevo', array("marca" => $marca));
        }
        return redirecciona()->to('marca');
    }

    public function eliminar($id)
    {
        $marca = Marca::find($id);
        if (count($marca)) {
            $marca->eliminar();
            return redirecciona()->to('marca');
        }
        return redirecciona()->to('marca');
    }
}
