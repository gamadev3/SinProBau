<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Exception\Auth\InvalidPassword;
use Kreait\Firebase\Exception\Auth\UserNotFound;
use Exception;
use Illuminate\Support\Facades\App;

class FirebaseAuthController extends Controller {
    protected $auth;

    public function __construct() {
        $this->auth = App::make("firebase")->createAuth();
    }

    public function login() {
        return view("auth.login");
    }

    public function system() {
        return view("system.home");
    }

    public function authentication(Request $request) {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6",
        ], [
            "email.required" => "O campo de e-mail é obrigatório.",
            "email.email" => "Por favor, informe um endereço de e-mail válido.",
            "password.required" => "O campo de senha é obrigatório.",
            "password.min" => "A senha deve ter pelo menos 6 caracteres.",
        ]);

        try {
            $user = $this->auth->signInWithEmailAndPassword($request->input("email"), $request->input("password"));

            if ($user) {
                session(["firebase_token" => $user->idToken()]);
                return redirect("/system");
            } else {
                return redirect("/login")->with("error", "Tente realizar o login novamente.");
            }
        } catch (InvalidPassword $error) {
            return redirect("/login")->with("error", "Senha inválida.");
        } catch (UserNotFound $error) {
            return redirect("/login")->with("error", "Usuário não encontrado.");
        } catch (Exception $error) {
            return redirect("/login")->with("error", "Tente realizar o login novamente.");
        }
    }

    public function logout() {
        session()->forget("firebase_token");
        return redirect("/login")->with("success", "Usuário deslogado com sucesso!");
    }
}
