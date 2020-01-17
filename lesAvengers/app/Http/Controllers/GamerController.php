<?php

namespace App\Http\Controllers;

use Validator;
use App\Gamer;
use App\Team;
use Illuminate\Http\Request;



class GamerController extends Controller
{
    public function show()
    {
        $gamers=Gamer::All();
        return view('gamer.show', compact('gamers'));
    }

    public function createGamer()
    {
        // Permet de stocker tous les teams dans une variable $teams
        $gamer = Gamer::All();

        // Retourne la vue du formulaire de création en pouvant réutiliser la variable $teams
        return view('gamers.create', compact('gamers'));
    }

    public function storeGamer(Request $request)
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
            return redirect('createGamer')
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
            return redirect('showGamer');
        }
    }

    public function editGamer($id)
    {
        // On va chercher le film dans notre table gamers où l'ID == $id 
        $gamer = Gamer::find($id);
        
        // Les teams sont chargés pour permettre à notre page d'utiliser les teams existants dans un <select>
        $teams = Team::All();

        return view('gamer.edit', compact('gamer', 'teams'));
    }

    public function updateGamer(Request $request, $id)
    {
        // On va chercher le film dans notre table gamers où l'ID == $id 
        $gamer = Gamer::find($id);

        // On associe les valeurs des colonnes de notre film avec les valeurs reçues de notre formulaire.
        $gamer->name = $request->name;
        $gamer->attack = $request->attack;
        $gamer->lifePoint = $request->lifePoint;
        $gamer->power = $request->power;
        $gamer->team_id = $request->team_id;

        $gamer->save();

        return redirect('showGamer');
    }

    public function deleteGamer($id)
    {
        $gamer = Gamer::find($id);
        
        // Méthode d'Eloquent permettant de supprimer notre film.
        $gamer->delete();

        // Redirection sur la page de films.
        return redirect('showGamer');
    }
    
}

