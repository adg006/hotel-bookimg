@extends('frontend.elements.app')

@section('title', 'Blog')

@section('main')

    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $post_data->title }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="featured-photo">
                        <img src="{{ asset('admin/uploads/' . $post_data->photo) }}" alt="">
                    </div>
                    <div class="sub">
                        <div class="item">
                            <b><i class="fa fa-clock"></i></b>
                            {{ date('d M, Y', strtotime($post_data->created_at)) }}
                        </div>
                        <div class="item">
                            <b><i class="fa fa-eye"></i></b>
                            {{ $post_data->total_view }}
                        </div>
                    </div>
                    <div class="main-text">
                        <p>{!! $post_data->long_content !!}</p>
                    </div>
                    <div class="share-content">
                        <h2>Share</h2>
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
