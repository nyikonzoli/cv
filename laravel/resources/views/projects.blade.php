@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/projects.css')}}">
    <script src="{{asset('js/projects/cards.js')}}"></script>
@endsection

@section('title', 'Zoltán Nyikon - Projects')

@section('content')
    <div id="content">
        <div id="all">
            <div id="title-div">
                <h1>MY</h1>
                <h1 class="coloredh1">PROJECTS</h1>
            </div>
            <div id="content">
                <div id="description">

                </div>
                <div id="cards">

                </div>
            </div>
        </div>
    </div>
@endsection

<template id="cardTemplate">
    <div class="card-content">
        <h3>This CV</h3>
        <div class="line"></div>
        <div class="card-text">

        </div>
        <div class="tags">

        </div>
        <div class="card-bottom">
            <div class="visit-div">
            </div>
            <a href="#" class="cardMore">Show more</a>
        </div>
    </div>
</template>