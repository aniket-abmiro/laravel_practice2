<x-layout>

<?php foreach($posts as $post)
{?>
    <a href="/posts/<?=$post->slug?>"> <?=$post->title?> </a>
    <p ><a href='/categories/{{$post->category->slug}}'>{{$post->category->name}}</a></p>
    <h3><?=$post->excerpt?></h3>
    <br><hr>
<?php }?>
<br>

</x-layout>

       