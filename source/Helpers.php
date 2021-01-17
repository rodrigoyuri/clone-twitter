<?php

function url(string $uri = null): string
{  
    if($uri) {
        return BASE_URL . "/$uri";
    }
    return BASE_URL;
}

function urlAssets(string $uri = ''): string
{
    return BASE_URL . "/source/templates/assets/{$uri}";
}