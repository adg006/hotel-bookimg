@extends('frontend.elements.app')

@section('title', 'About Us')

@section('main')

    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> {{ $about_data->title }}</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   {!! $about_data->content !!}
                </div>
            </div>
        </div>
    </div>

 @endsection
