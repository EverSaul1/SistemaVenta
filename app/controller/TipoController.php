<?php

use App\model\Tipo;
use vista\Vista;

class TipoController
{
    public function index()
    {
        $tipos = Tipo::all();
        return Vista::crear("admin.tipo.index", array(
            "tipos" => $tipos,
        ));
    }

    public function todos(){
        $tipos = Tipo::all();
        echo json_response($tipos);
    }

    public function nuevo()
    {
        return Vista::crear('admin.tipo.nuevo');
    }

    public function agregar()
    {
        try {

            $tipo = new Tipo();
            if (input('tipo_id')) {
                $tipo = Tipo::find(input('tipo_id'));
            }

            $tipo->tipo = input("tipo");
            
            $tipo->guardar();

            redirecciona()->to("tipo");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function editar($id)
    {
        $tipo = Tipo::find($id);
        if (count($tipo)) {
            return Vista::crear('admin.tipo.nuevo', array("tipo" => $tipo));
        }
        return redirecciona()->to('tipo');
    }

    public function eliminar($id)
    {
        $tipo = Tipo::find($id);
        if (count($tipo)) {
            $tipo->eliminar();
            return redirecciona()->to('tipo');
        }
        return redirecciona()->to('tipo');
    }
}
