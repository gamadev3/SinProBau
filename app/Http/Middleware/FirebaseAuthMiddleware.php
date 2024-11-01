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
        $path = base_path("storage/firebase/firebase-auth.json");

        if(!file_exists($path)) {
            die("The file path ".$path." does not exist");
        }

        $this->auth = (new Factory)
            ->withServiceAccount($path)
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
