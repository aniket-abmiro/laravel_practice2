<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First Page</title>

   
       
    </head>
    <body >
        <?php foreach($posts as $post)
        {?>
            <a href="/posts/<?=$post->slug?>"> <?=$post->title?> </a>
            <h3><?=$post->excerpt?></h3>
            <br><hr>
        <?php }?>
        <br>
        
        
    </body>
</html>
