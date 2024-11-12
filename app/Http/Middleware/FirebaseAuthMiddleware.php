<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\App;
use Kreait\Firebase\Exception\Auth\AuthError;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

class FirebaseAuthMiddleware {
    protected $auth;

    public function __construct() {
        $this->auth = App::make("firebase")->createAuth();
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
        } catch (AuthError | FailedToVerifyToken $error) {
            session()->forget("firebase_token");
            return redirect("/login")->with("error", "Token inválido!");
        }

        return $next($request);
    }
}
