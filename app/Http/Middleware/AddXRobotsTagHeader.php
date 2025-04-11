<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddXRobotsTagHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Apply only for HTML, XML, plain text, etc.
        $contentType = $response->headers->get('Content-Type');

        if (str_contains($contentType, 'text/html') || 
            str_contains($contentType, 'application/xml') || 
            str_contains($contentType, 'text/plain')) {
            $response->headers->set('X-Robots-Tag', 'index, follow');
        }

        return $response;
    }
}
