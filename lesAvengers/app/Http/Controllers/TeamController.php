<?php
namespace App\Http\Controllers;use Validator;

use App\team;


use Illuminate\Http\Request;class TeamController extends Controller
{


    public function createTeam()
    {
    
        return view('createTeam');
    }    

    public function store(Request $request)
    {
    // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
           
            
        ]); 
        if ($validator->fails()) {
            return redirect('create')
                ->withErrors($validator)
                ->withInput();
        } 
        else {
        // On se crée un objet de type team qui utilisera l'hydratation
            $team = new Team([ 
                "name" => $request->name,
                
               
            ]); 
            // Hydratation en base de données et donc insertion du film

            $team->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire

            return redirect('table');
            }
    }

    public function show()
    {
        $team=Team::All();
        
        return view('table', compact('teams'));
    }

    public function edit($id)
    {
    // On va chercher le film dans notre table teams où l'ID == $id
        $team = Team::find($id); // Les teams sont chargés pour permettre à notre page d'utiliser les teams existants dans un <select>
        return view('edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
    // On va chercher le film dans notre table teams où l'ID == $id
        $team = Team::find($id); // On associe les valeurs des colonnes de notre film avec les valeurs reçues de notre formulaire.
        $team->name = $request->name;
      
        $team->save(); 
        
        return redirect('team');
    } 
    public function delete($id)
    {
        $team = Team::find($id); 
        // Méthode d'Eloquent permettant de supprimer notre film.
        $team->delete(); 
        // Redirection sur la page de films.
        return redirect('team');
    }