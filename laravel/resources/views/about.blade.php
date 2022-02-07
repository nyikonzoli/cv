@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
@endsection

@section('title', 'Zoltán Nyikon - About')

@section('content')
    <div id="content">
        <div id="upper">
            <div id="upper-text">
                <h1><b>About Me</b></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis obcaecati voluptates, exercitationem hic a reprehenderit soluta accusamus consequatur culpa dolorum voluptatibus alias ducimus porro non, maiores odit quas praesentium ad. Asperiores, aperiam ipsum, quasi laboriosam temporibus ut cumque nisi ab facilis pariatur eveniet voluptatibus est corrupti vitae ipsa nemo perferendis natus laborum dolorem beatae rem corporis explicabo sapiente! Id atque iste sit nemo corrupti hic expedita mollitia possimus, sapiente rem illo facere voluptatibus earum provident placeat dolor dignissimos vero itaque.</p>
            </div>
            <div id="upper-image">
            <img src="https://placekitten.com/450/450" alt="me" width="100%">
            </div>
        </div>
        <div id="lower">
            <h2>My hobbies</h2>
        </div>
    </div>
@endsection