@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/resume.css')}}">
@endsection

@section('title', 'Zoltán Nyikon - Resume')

@section('content')
    <div id="content">
        <section id="work">

        </section>
        <section id="school">
            
        </section>
    </div>
@endsection

<template id="cardTemplate">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
        </div>
    </div>
</template>