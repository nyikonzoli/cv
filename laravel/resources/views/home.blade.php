@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('title', 'Zoltán Nyikon - Home')

@section('content')
    <div id="content">
        <div id="text">
            <h1><b>Hello!</b></h1>
            <p>I'm <strong class="name">Zoltán Nyikon</strong>, Junior Front-end and Back-end developer based in Budapest, Hungary.</p>
            <ul>
                <li><i class="fa fa-linkedin-square icon"></i></li>
                <li><i class="fa fa-github-square icon"></i></li>
            </ul>
        </div>
    </div>
@endsection