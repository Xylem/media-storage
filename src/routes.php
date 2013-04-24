<?php

return function ($app) {
    $app->get("/hello/:name", function ($name) {
        echo "Hello, " . $name;
    });
};