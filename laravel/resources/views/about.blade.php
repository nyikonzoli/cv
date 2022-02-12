@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <script src="{{asset('js/about/modal.js')}}"></script>
    <script src="{{asset('js/about/changeHobbie.js')}}"></script>
@endsection

@section('title', 'Zoltán Nyikon - About')

@section('content')
<div class="title-div">
            <h1 class="title">ABOUT</h1>
            <h1 class="coloredh1 title">ME</h1>
        </div>
    <div id="content">
        <div id="upper">
            <div id="upper-content">
                <div id="text">
                    <img src="https://placekitten.com/450/450" alt="me" width="100%">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat molestias illum labore rerum esse eum in! Cumque maxime voluptate similique. Nostrum quibusdam illo illum labore sint ducimus! Odio nam officiis dicta animi, itaque assumenda magnam tenetur qui tempore ex alias corrupti? Perspiciatis perferendis eos sed deleniti velit voluptatibus mollitia, vero est tempora assumenda quo facilis nobis debitis ducimus qui unde quia distinctio illum dolore repellat veniam, consequatur blanditiis minus itaque? Quam atque provident laudantium possimus saepe labore neque. Fuga consectetur nisi deserunt sunt nemo amet beatae? Quos aliquam quasi quis?</p>
                </div>
            </div>
        </div>
        <div id="lower">
            <button onclick="openModal();"><h3>MY HOBBIES</h3></button>
        </div>
    </div>
@endsection


<div class="modal fade" id="hobbiesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="vertical">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-left">
                        <div class="modal-text">
                            <h1>Music and friends</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio minima perferendis sed libero pariatur totam facere quasi voluptas sequi natus veritatis atque saepe debitis nisi, vel minus hic temporibus quaerat?</p>
                        </div>
                        <div class="pagination">
                            <div class="circles">
                                <ul>
                                    <li><div onclick="change(0);"><div id="pagination1" class="circle activeHobbie"></div></div></li>
                                    <li><div onclick="change(1);"><div id="pagination2" class="circle"></div></div></li>
                                    <li><div onclick="change(2);"><div id="pagination3" class="circle"></div></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-right">
                        <img src="{{asset('img/felho.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>    

</div>