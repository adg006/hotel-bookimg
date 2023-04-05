@extends('frontend.elements.app')

@section('title', 'Photo Gallery')

@section('main')

    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Photo Gallery</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="photo-gallery">
                <div class="row">

                    @foreach ($image_data as $image)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="photo-thumb">
                                <img src="{{ asset('admin/uploads/' . $image->photo) }}" alt="">
                                <div class="bg"></div>
                                <div class="icon">
                                    <a href="{{ asset('admin/uploads/' . $image->photo) }}" class="magnific"><i
                                            class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="photo-caption">{{ $image->description }}</div>
                        </div>
                    @endforeach

                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{ $image_data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
