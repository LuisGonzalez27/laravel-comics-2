@extends('layouts.app')
@section('content')
<section class="container pt-5 pb-5">
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>        
        @endforeach
    </ul> 
</section>
    
@endsection