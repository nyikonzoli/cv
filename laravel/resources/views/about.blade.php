@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <script src="{{asset('js/about/modal.js')}}"></script>
    <script src="{{asset('js/about/changeHobbie.js')}}"></script>
@endsection

@section('title', 'Zoltán Nyikon - About')

@section('content')

    <div id="content">
        <div id="upper">
            <div id="upper-content">
                <div class="title-div">
                    <h1 class="title">ABOUT</h1>
                    <h1 class="coloredh1 title">ME</h1>
                </div>
                <div id="text">
                    <img src="https://placekitten.com/450/450" alt="me" width="100%">
                    <p>Since I got into high school, I knew that I wanted to work in the IT industry, because I'm able to use my problem solving skills and creativity. 
                        Finally, that day is here when I'm searching for a job in this field at 19 years old. At the beginning, I wasn't sure what I wanted to choose to do out of the 
                        many possibilities in IT, but throughout the years, I figured out that I wanted to be a web developer. This is why I chose to stay one extra 
                        year in high-school for a software developer course, which gave me a great understanding of several technologies. I will also go to university 
                        this year, here in Budapest. Besides school, I also spent a lot of time on self-improvement, work, and hobbies such as sports or music. 
                        You can check out my hobbies down below.
                    </p>
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
                    <div class="modal-cnt">
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

</div>