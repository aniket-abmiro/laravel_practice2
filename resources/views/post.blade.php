<x-layout>

    <h1>{{ $post->title }}</h1>
    <br>
    <p>
        By {{$post->author->name}} in
        <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    </p>
    <p>{{$post->body}}</p>
    <br>

    <a href="/">Go Back</a>

</x-layout>