<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\InvalidPassword;
use Kreait\Firebase\Exception\Auth\UserNotFound;
use Exception;

class FirebaseAuthController extends Controller {
    protected $auth;

    public function __construct() {
        $path = base_path("storage/firebase/firebase-auth.json");

        if(!file_exists($path)) {
            die("The file path ".$path." does not exist");
        }

        $this->auth = (new Factory)
            ->withServiceAccount($path)
            ->createAuth();
    }

    public function authentication(Request $request) {
        try {
            $user = $this->auth->signInWithEmailAndPassword($request->input("email"), $request->input("password"));

            if ($user) {
                session(["firebase_token" => $user->idToken()]);
                return view("system.dashboard")->with("success", "Usuário logado com sucesso!");
            } else {
                return redirect("/login")->with("error", "Tente realizar o login novamente.");
            }
        } catch (InvalidPassword $error) {
            return redirect("/login")->with("error", "Senha inválida.");
        } catch (UserNotFound $error) {
            return redirect("/login")->with("error", "Usuário não encontrado.");
        } catch (Exception $error) {
            return redirect("/login")->width("error", "Tente realizar o login novamente.");
        }
    }
}
