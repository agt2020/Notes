<?php

function dd($data)
{
        echo '<pre>';
        var_dump($data);
        echo '</pre>';

        die();
}

function uriCheck($uri, $path)
{
        return $uri === $path;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
        if(!$condition)
        {
                return abort($status);
        }
}