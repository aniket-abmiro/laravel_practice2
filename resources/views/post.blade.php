<x-layout>

    <h1>{{ $post->title }}</h1>
    <br>
    <p>
        <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    </p>
    <p>{{$post->body}}</p>
    <br>

    <a href="/posts">Go Back</a>

</x-layout>
