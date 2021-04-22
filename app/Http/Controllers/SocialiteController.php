<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Socialite; // <-- ne pas oublier

class SocialiteController extends Controller
{
    // Les tableaux des providers autorisés
    protected $providers = [ "google", "facebook" ];

    # La vue pour les liens vers les providers
    public function loginRegister () {
    	return view("Socialite.login-register");
    }

    # redirection vers le provider
    public function redirect (Request $request) {

        $provider = $request->provider;

        // On vérifie si le provider est autorisé
        if (in_array($provider, $this->providers)) {
            return Socialite::driver($provider)->redirect(); // On redirige vers le provider
        }
        abort(404); // Si le provider n'est pas autorisé
    }

    // Callback du provider
    public function callback (Request $request) {

        $provider = $request->provider;

        if (in_array($provider, $this->providers)) {

        	// Les informations provenant du provider
        	$data = Socialite::driver($request->provider)->user();


            // token
            $token = $data->token;

            // Les informations de l'utilisateur
            $user = $data->user;
            $id = $data->getId();
            $name = $data->getNickname();
            $nickname = $data->getName();
            $email = $data->getEmail();
            $avatar = $data->getAvatar();

            // voir les informations de l'utilisateur
            dd($user);
         }
         abort(404);
    }
}

