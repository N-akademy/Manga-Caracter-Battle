<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gamers=Gamer::All();
        return view('gamer.show', compact('gamers'));
    }

}
