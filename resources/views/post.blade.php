<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog Page</title>
       
    </head>
    <body >
        <h1><?= $post ?></h1>

        <a href="/posts">Go Back</a>
        
    </body>
</html>