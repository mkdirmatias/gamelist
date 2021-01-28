<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    // Modelo
    protected $model;

    /**
     * Constructor de la clase
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function __construct(Model $model)
    {
        // Iniciar el modelo
        $this->model = $model;
    }


    /**
     * Guardar Modelo
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function save(Model $model)
    {
        $model->save();

        return $model;
    }


    /**
     * Eliminar Modelo
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function delete(Model $model)
    {
        $model->delete();

        return $model;
    }
}