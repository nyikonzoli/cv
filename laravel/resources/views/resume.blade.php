@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/resume.css')}}">
    <script src="{{asset('js/resume/cards.js')}}"></script>
@endsection

@section('title', 'Zoltán Nyikon - Resume')

@section('content')
    <div id="everything">
        <div id="content">
            <div class="title-div">
                <h1 class="title contenth1">MY</h1>
                <h1 class="coloredh1 title contenth1">RESUME</h1>
            </div>
            <section id="work">
                <h1 class="contenth1 titleh1">My previous work experience</h1>
                <div id="work-cards">

                </div>
            </section>
            <section id="education">
                <h1 class="contenth1 titleh1">Education</h1>
                <div id="education-cards">

                </div>
            </section>
        </div>
    </div>
@endsection

<template id="cardTemplate">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <h5 id="cardTitle" class="card-title"></h5>
            <h6 id="cardSubTitle" class="card-subtitle mb-2"></h6>
        </div>
        <div class="card-body">
            <p id="cardContent" class="card-text"></p>
            <a id="cardLink" href="" class="visit" target="_base">Visit</a>
        </div>
    </div>
</template>
