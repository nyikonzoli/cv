@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/projects.css')}}">
@endsection

@section('title', 'Zoltán Nyikon - Projects')

@section('content')
    <div id="main">
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
@endsection

<template id="card">
    <div class="card-body">
        <div class="card-content">
            
        </div>
        <div class="card-image">
            <img src="" alt="">
        </div>
    </div>
</template>