<x-layout>

<?php foreach($posts as $post)
{?>
    <a href="/posts/<?=$post->slug?>"> <?=$post->title?> </a>
    <h3><?=$post->excerpt?></h3>
    <br><hr>
<?php }?>
<br>

</x-layout>

       