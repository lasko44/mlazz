@extends('layouts.web')
@section('title')
    About | Matt Laszkiewicz
@endsection

@section('content')
    <comp-nav></comp-nav>
    <page-title :title="'Projects'"></page-title>
    <div class="page-content">
        <div class="row">
            <p style="margin-left: 4vw;">Here is where I can talk about some stuff about the projects</p>
        </div>
        <div class="row justify-content-center">
            <project-card :image="'{{asset('images/cav.png')}}'" :title="'CAV Leasing'"></project-card>
            <project-card :image="'{{asset('images/dc.png')}}'" :title="'Cultured-DC'"></project-card>
            <project-card :image="'{{asset('images/mkc.png')}}'" :title="'Other Contributions'"></project-card>
        </div>
    </div>
@endsection
