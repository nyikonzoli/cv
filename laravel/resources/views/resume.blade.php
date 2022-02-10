@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/resume.css')}}">
    <script src="{{asset('js/resume/cards.js')}}"></script>
@endsection

@section('title', 'Zoltán Nyikon - Resume')

@section('content')
    <div id="content">
        <section id="work">
            <h1>My previous work experience</h1>
            <div id="work-cards">

            </div>
        </section>
        <section id="education">
            <h1>Education</h1>
            <div id="education-cards">

            </div>
        </section>
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
