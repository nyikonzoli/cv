@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
@endsection

@section('title', 'Zoltán Nyikon - About')

@section('content')
    <div id="content">
        <div id="upper">
            <div id="upper-content">
                <h1><b>About Me</b></h1>
                <div>
                    <img src="https://placekitten.com/450/450" alt="me" width="100%">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat molestias illum labore rerum esse eum in! Cumque maxime voluptate similique. Nostrum quibusdam illo illum labore sint ducimus! Odio nam officiis dicta animi, itaque assumenda magnam tenetur qui tempore ex alias corrupti? Perspiciatis perferendis eos sed deleniti velit voluptatibus mollitia, vero est tempora assumenda quo facilis nobis debitis ducimus qui unde quia distinctio illum dolore repellat veniam, consequatur blanditiis minus itaque? Quam atque provident laudantium possimus saepe labore neque. Fuga consectetur nisi deserunt sunt nemo amet beatae? Quos aliquam quasi quis?</p>
                </div>
            </div>
        </div>
        <div id="lower">
            <h3>MY HOBBIES</h3>
        </div>
    </div>
@endsection