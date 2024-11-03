<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\AuthError;

class FirebaseAuthMiddleware {
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
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        $firebaseToken = session("firebase_token");

        if(!$firebaseToken) {
            return redirect("/login")->with("error", "Realize o login primeiro.");
        }

        try {
            $this->auth->verifyIdToken($firebaseToken);
        } catch (AuthError $error) {
            session()->forget("firebase_token");
            return redirect("/login")->with("error", "Token inválido!");
        }

        return $next($request);
    }
}
