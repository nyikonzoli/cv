@extends('layouts.base')

@section('head')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('title', 'Zoltán Nyikon - Contact')

@section('content')
    <div id="content">
        <h1>I'm looking forward to working together!</h1>
        <div>
            <div class="form">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input class="form-control" type="text" placeholder="Title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Content</label>
                        <textarea class="form-control" id="text" rows="8"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            <div class="cards">
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
    </div>
@endsection