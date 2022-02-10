@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('title', 'Zoltán Nyikon - Contact')

@section('content')
    <div id="content">
        <h1>I'm looking forward to hear from you!</h1>
        <div>

        </div>
        <div>
            <ul>
                <li>
                    <div class="info-card">
                        <div class="circle">
                            <i class="fa fa-linkedin-square icon"></i>
                        </div>
                        <div class="info">
                            <h5>Check out my LinkedIn porfile!</h5>
                        </div>
                    </div>
                </li>
                <li>
                <div class="info-card">
                        <div class="circle">
                            <i class="fa fa-github-square icon"></i>
                        </div>
                        <div class="info">
                            <h5>Take a look at my projects!</h5>
                        </div>
                    </div>
                </li>
                <li>
                <div class="info-card">
                        <div class="circle">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info">
                            <h5>06308446803</h5>
                        </div>
                    </div>
                </li>
                <li>             
                    <div class="info-card">
                        <div class="circle">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info">
                            <h5>nyikon.zoli@gmail.com</h5>
                        </div>
                    </div></li>
            </ul>
        </div>
    </div>
@endsection