<?php

namespace App\Models;

use Core\App;

class Equips
{
    protected static $table = 'equipos';

    // Función para que retorne todos los equipos
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Función para buscar un equipo
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(['id' => $id]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Función para crear un equipo
    public static function create($data)
    {
        try {
            $db = App::get('database')->getConnection();
            $statement = $db->prepare('INSERT INTO ' . static::$table . " (nombre, fundado, estadio, ciudad, pais, liga) VALUES (:nombre, :fundado, :estadio, :ciudad, :pais, :liga)");
            $statement->bindValue(':nombre', $data['nombre']);
            $statement->bindValue(':fundado', $data['fundado']);
            $statement->bindValue(':estadio', $data['estadio']);
            $statement->bindValue(':ciudad', $data['ciudad']);
            $statement->bindValue(':pais', $data['pais']);
            $statement->bindValue(':liga', $data['liga']);

            // Debugging: Log the SQL query
            error_log('SQL Query: ' . $statement->queryString);

            $statement->execute();
        } catch (\PDOException $e) {
            // Debugging: Log the error message
            error_log('Database error: ' . $e->getMessage());
            exit;
        }
    }

    // Función para actualizar un equipo
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE " . static::$table . " SET nombre = :nombre, fundado = :fundado, estadio = :estadio, ciudad = :ciudad, pais = :pais, liga = :liga WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':nombre', $data['nombre']);
        $statement->bindValue(':fundado', $data['fundado']);
        $statement->bindValue(':estadio', $data['estadio']);
        $statement->bindValue(':ciudad', $data['ciudad']);
        $statement->bindValue(':pais', $data['pais']);
        $statement->bindValue(':liga', $data['liga']);
        $statement->execute();
    }

    // Función para eliminar un equipo
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}