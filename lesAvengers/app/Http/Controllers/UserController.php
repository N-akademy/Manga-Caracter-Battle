<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function getSingup(){
        return view('user.singup');
    }

    public function postSingup(Request $request){
         $this->validate(request(),[
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:4'
        ]);
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user -> save();

        return redirect()->route('product.index');
    }

    public function show()
    {
        $user=User::All();
        return view('user.show', compact('users'));
    }

  

    public function storeUser(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'lastName' => 'required|max:50|string',
            'email' => 'required|email|max:255|',
            'password' => 'required|string|min:8|confirmed',
            
        ]);

        if ($validator->fails()) {
            return redirect('createUser')
                ->withErrors($validator)
                ->withInput();
        } else {
            // On se crée un objet de type user qui utilisera l'hydratation
            $user = new User([
                "name" => $request->name,
                "lastName" => $request->lastName,
                "email" => $request->email,
                "password" => $request->password,
                
            ]);

            // Hydratation en base de données et donc insertion du film
            $user->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('showUser');
        }
    }



    public function deleteUser($id)
    {
        $user = User::find($id);
        
        // Méthode d'Eloquent permettant de supprimer notre film.
        $user->delete();

        // Redirection sur la page de films.
        return redirect('showUser');
    }
}

