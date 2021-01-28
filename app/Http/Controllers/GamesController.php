<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Http\Requests\GamesRequest;
use App\Repositories\GamesRepository;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    private $gameRepository;

    /**
     * Constructor de la clase
     * Inyectamos el patrón mediante el model binding
     *
     * @return void
     */
    public function __construct(GamesRepository $gameRepository)
    {
        // Iniciar patrón
        $this->gameRepository = $gameRepository;

        // Verificar sesión
        $this->middleware(['auth']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\GamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GamesRequest $request)
    {
        // Agregar un juego
        try 
        {
            // Crear datos
            $juego = new Games([
                'nombre_game'      => strtoupper($request->validated()['nombre']),
                'link_game'        => $request->validated()['link'],
                'imagen_game'      => $request->validated()['imagen'],
                'descripcion_game' => $request->validated()['descripcion'],
                'estado_game'      => 1
            ]);
                
            // Guardar
            $this->gameRepository->save($juego);

            return redirect()->route('dashboard')->with('estado',['success','Juego Agregado','El juego se agregó satisfactoriamente.']);
        }
        catch (\Throwable $th)
        {
            return redirect()->route('dashboard')->with('estado',['success','Juego No Agregado','Si el error persiste, contacta al soporte.']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\GamesRequest  $request
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function update(GamesRequest $request, Games $games)
    {
        // Editar un juego
        try 
        {
            // Actualizar Datos
            $games->nombre_game      = strtoupper($request->validated()['nombre']);
            $games->link_game        = $request->validated()['link'];
            $games->imagen_game      = $request->validated()['imagen'];
            $games->descripcion_game = $request->validated()['descripcion'];
            $games->estado_game      = $request->validated()['estado'] ?? 0;
            
            // Guardar
            $this->gameRepository->save($games);

            return redirect()->route('dashboard')->with('estado',['success','Juego Editado','El juego se editó satisfactoriamente.']);
        }
        catch (\Throwable $th)
        {
            return redirect()->route('dashboard')->with('estado',['success','Juego No Editado','Si el error persiste, contacta al soporte.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function destroy(Games $games)
    {
        // Eliminar un juego
        try 
        {
            $this->gameRepository->delete($games);

            return redirect()->route('dashboard')->with('estado',['success','Juego Eliminado','El juego se eliminó satisfactoriamente.']);
        }
        catch (\Throwable $th)
        {
            return redirect()->route('dashboard')->with('estado',['success','Juego No Eliminado','Si el error persiste, contacta al soporte.']);
        }
    }
}
