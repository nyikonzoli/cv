@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/projects.css')}}">
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
                    <div class="card-body">
                        <div class="card-content">
                            <h4>Projekt neve</h4>
                            <h6>Projekt státusza</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius porro excepturi quasi et? Autem deleniti alias reprehenderit officiis eaque quibusdam, distinctio eveniet placeat. Laborum voluptates saepe neque inventore! Eum, necessitatibus!</p>
                            <div class="tags">
                                <h5><span class="badge badge-secondary">Badge</span></h5>
                                <h5><span class="badge badge-secondary">Badge</span></h5>
                                <h5><span class="badge badge-secondary">Badge</span></h5>
                                <h5><span class="badge badge-secondary">Badge</span></h5>
                                <h5><span class="badge badge-secondary">Badge</span></h5>
                                <h5><span class="badge badge-secondary">Badge</span></h5>
                                <h5><span class="badge badge-secondary">Badge</span></h5>
                                <h5><span class="badge badge-secondary">Badge</span></h5>
                            </div>
                            <button class="btn btn-success">Check out</button>
                        </div>
                        <div class="card-image">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
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