<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Ellaisys\Cognito\Exceptions\NoTokenException;
use Ellaisys\Cognito\Exceptions\InvalidTokenException;
use Ellaisys\Cognito\Http\Middleware\BaseMiddleware;

class CognitoAuthenticate extends BaseMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            $this->authenticate($request);
        } catch (NoTokenException $e) {
            return response()->json(['error' => 'No token provided'], 401);
        } catch (InvalidTokenException $e) {
            return response()->json(['error' => 'Invalid token'], 401);
        }

        return $next($request);
    }
}