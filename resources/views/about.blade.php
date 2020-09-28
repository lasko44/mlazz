@extends('layouts.web')
@section('title')
    About | Matt Laszkiewicz
@endsection

@section('content')
    <comp-nav></comp-nav>
    <page-title :title="'About Me'"></page-title>
    <div class="page-content">
        <div class="row justify-content-center">
            <img class="a-1 img-fluid" style="margin-bottom: 10px;" src="{{asset('images/hero.png')}}" alt="about Matt Laszkiewicz" width="700"/>
        </div>
        <div class="about-section dark">
            <h3>My Journey to Programming</h3>
            <p>I wish I discovered that I loved programming sooner in my life. I was always intimidated by it
                and did not think I could do it, so I studied programming adjacent fields. The fields being communications
                and media studies, with an emphasis on marketing. I was creating content for the web like video, photo, and graphics.
                However, I always found myself drawn to building the products that for which I was making content. I started to teach myself
                some basic HTML, CSS and Javascript, but I hit a ceiling. That is when I decided to get another degree in Applied Computing. This
                gave me a strong base in fundamentals and best practices and helped me become better at self teaching.
            </p>
        </div>
        <div class="row justify-content-center" style="margin-top: 25px;">
            <img class=" a-2 img-fluid" src="{{asset('images/plate.png')}}" alt="about Matt Laszkiewicz" width="600"/>
        </div>
        <div class="about-section dark">
            <h3>Outside of Programming</h3>
            <p>Although much of lif is consumed by programming and learning new concepts, my other two passions
                are cooking and fly fishing. Like my journey to programming one lead to another. I enjoyed fishing
                my entire life but only recently started appreciating the art that goes into fishing and fly fishing takes
                a lot patience and attention to detail. The same thing happened with cooking I slowly went from cooking just to eat
                to cooking to make good food and the art form it takes to do that.
            </p>
        </div>
    </div>
    <div class="footer">

    </div>
@endsection
