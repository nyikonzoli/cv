@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('title', 'Zoltán Nyikon - Home')

@section('content')
    <div id="content">
        <div id="text">
            <h1 id="greeting">Hello!</h1>
            <p>I'm <strong class="name">Zoltán Nyikon</strong>, Junior Front-end and Back-end developer based in Budapest, Hungary.</p>
            <ul>
                <li><a class="fa fa-linkedin-square icon"></a></li>
                <li><a class="fa fa-github-square icon"></a></li>
            </ul>
        </div>
    </div>
    <script src="{{asset('js/home/typing.js')}}"></script>
@endsection