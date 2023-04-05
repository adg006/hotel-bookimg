@extends('frontend.elements.app')

@section('title', 'Video Gallery')

@section('main')

    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Video Gallery</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="video-gallery">
                <div class="row">

                    @foreach ($video_data as $video)
                        <div class="col-lg-3 col-md-4">
                            <div class="video-thumb">
                                <img src="http://img.youtube.com/vi/{{ $video->video_id }}/0.jpg" alt="">
                                <div class="bg"></div>
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v={{ $video->video_id }}" class="video-button"><i
                                            class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-caption">
                                {{ $video->description }}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
