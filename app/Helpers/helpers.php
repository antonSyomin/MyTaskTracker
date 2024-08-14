<?php


if (! function_exists('active_link')) {
    function active_link (string $route): string {
        return Route::is($route) ? 'active' : '';
    }
}