<?php

namespace App\Controllers;

use App\Models\Equips;

class EquipsController
{
    // Función index
    public function index()
    {
        // Obtenemos todos los equipos
        $Equips = Equips::getAll();

        // Pasamos los equipos a la vista
        return view('equips/index', ['Equips' => $Equips]);
    }

    // Función para ir a la vista create
    public function create()
    {
        return view('equips/create');
    }

    // Función para guardar los datos y volver a la vista principal

    public function store($data)
    {
        //cridem funcio create del model
        Equips::create($data);
        //retornar a la vista principal
        header('location: /equips');
        exit;
    }


    // Función para la vista edit
    public function edit($id)
    {
        // Si no nos pasan la id hacemos redirect
        if ($id === null) {
            header('location: /equips');
            exit;
        }

        // Buscamos el equipo
        $Equips = Equips::find($id);

        // Si no encontramos el equipo, mostrar 404
        if (!$Equips) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Retornamos la vista y le pasamos el equipo indicado
        return view('equips/edit', ['Equips' => $Equips]);
    }

    // Función update para modificar el equipo en la base de datos
    public function update($id, $data)
    {
        // Modificamos
        Equips::update($id, $data);

        // Retornamos a la página principal
        header('location: /equips');
        exit;
    }

    // Función para ir a la vista delete
    public function delete($id)
    {
        // Si no nos pasan la id hacemos redirect
        if ($id === null) {
            header('location: /equips');
            exit;
        }

        // Buscamos el equipo
        $Equips = Equips::find($id);
        // Retornamos la vista del equipo
        return view('equips/delete', ['Equips' => $Equips]);
    }

    // Función para eliminar el equipo de la base de datos
    public function destroy($id)
    {
        // Utilizamos la función delete del modelo
        Equips::delete($id);

        // Retornar a la vista
        header('location: /equips');
        exit;
    }
}
