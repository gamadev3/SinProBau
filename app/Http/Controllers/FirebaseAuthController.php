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
        $serviceAccount = [
            "type" => env("FIREBASE_TYPE"),
            "project_id" => env("FIREBASE_PROJECT_ID"),
            "private_key_id" => env("FIREBASE_PRIVATE_KEY_ID"),
            "private_key" => env("FIREBASE_PRIVATE_KEY"),
            "client_email" => env("FIREBASE_CLIENT_EMAIL"),
            "client_id" => env("FIREBASE_CLIENT_ID"),
            "auth_uri" => env("FIREBASE_AUTH_URI"),
            "token_uri" => env("FIREBASE_TOKEN_URI"),
            "auth_provider_x509_cert_url" => env("FIREBASE_AUTH_PROVIDER_CERT_URL"),
            "client_x509_cert_url" => env("FIREBASE_CLIENT_CERT_URL"),
        ];

        $this->auth = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->createAuth();
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
                return view("system.dashboard")->with("success", "Usuário logado com sucesso!");
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
