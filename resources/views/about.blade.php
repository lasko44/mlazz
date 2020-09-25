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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id
                est laborum.</p>
        </div>
        <div class="row justify-content-center" style="margin-top: 25px;">
            <img class=" a-2 img-fluid" src="{{asset('images/plate.png')}}" alt="about Matt Laszkiewicz" width="600"/>
        </div>
        <div class="about-section dark">
            <h3>Outside of Programming</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id
                est laborum.</p>
        </div>
    </div>
    <div class="footer">

    </div>
@endsection
