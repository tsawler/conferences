<?php namespace App\Http\Middleware;

use Closure;

class VerifyCsrfMiddleware extends \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken {

    public function handle($request, Closure $next)
    {
        if ($this->isReading($request) || $this->excludedRoutes($request) || $this->tokensMatch($request))
        {
            return $this->addCookieToResponse($request, $next($request));
        }

        throw new TokenMismatchException;
    }


    protected function excludedRoutes($request)
    {
        $routes = [
            '/queue/push'
        ];

        foreach($routes as $route)
            if ($request->is($route))
                return true;

        return false;
    }
}
