@extends('frontend.elements.app')

@section('title', 'Terms and Conditions')

@section('main')

    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> {{ $tnc_data->title }}</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   {!! $tnc_data->content !!}
                </div>
            </div>
        </div>
    </div>

 @endsection
