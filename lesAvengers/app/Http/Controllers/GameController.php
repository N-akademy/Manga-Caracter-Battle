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
        return view('game.show', compact('game'));
    }

    public function createGame()
    {
        // Permet de stocker tous les teams dans une variable $teams
        $gamer = Gamer::All();

        // Retourne la vue du formulaire de création en pouvant réutiliser la variable $teams
        return view('gamers.create', compact('gamers'));
    }

    public function storeGame(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'attack' => 'required|max:50|string',
            'lifePoint' => 'required|integer',
            'power' => 'required|integer|max:3000',
            'team_id' => 'required|max:50|string'
        ]);

        if ($validator->fails()) {
            return redirect('welcome')
                ->withErrors($validator)
                ->withInput();
        } else {
            // On se crée un objet de type Gamer qui utilisera l'hydratation
            $gamer = new Gamer([
                "name" => $request->name,
                "attack" => $request->attack,
                "lifePoint" => $request->lifePoint,
                "power" => $request->power,
                "team_id" => $request->team_id 
            ]);

            // Hydratation en base de données et donc insertion du film
            $gamer->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('showGame');
        }
    }
}
