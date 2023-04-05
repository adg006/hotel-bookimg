@extends('frontend.elements.app')

@section('title', 'Home')

@section('main')

    <div class="slider">
        <div class="slide-carousel owl-carousel">

            @foreach ($slider_data as $slider)
                <div class="item" style="background-image:url({{ asset('admin/uploads/' . $slider->photo) }});">
                    <div class="bg"></div>
                    <div class="text">
                        <h2> {{ $slider->heading }} </h2>
                        <p> {!! $slider->sub_heading !!} </p>
                        <div class="button">
                            <a href=" {{ $slider->button_url }} "> {{ $slider->button_text }} </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


    <div class="search-section">
        <div class="container">
            <form action="cart.html" method="post">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <select name="" class="form-select">
                                    <option value="">Select Room</option>
                                    <option value="">Standard Couple Bed Room</option>
                                    <option value="">Delux Couple Bed Room</option>
                                    <option value="">Standard Four Bed Room</option>
                                    <option value="">Delux Four Bed Room</option>
                                    <option value="">VIP Special Room</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" name="checkin_checkout" class="form-control daterange1"
                                    placeholder="Checkin & Checkout">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input type="number" name="" class="form-control" min="1" max="30"
                                    placeholder="Adults">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input type="number" name="" class="form-control" min="1" max="30"
                                    placeholder="Children">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div class="home-feature">
        <div class="container">
            <div class="row">

                @foreach ($feature_data as $feature)
                    <div class="col-md-3">
                        <div class="inner">
                            <div class="icon"><i class="{{ $feature->feature_icon }}"></i></div>
                            <div class="text">
                                <h2>{{ $feature->feature_title }}</h2>
                                <p>{!! $feature->feature_description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>



    <div class="home-rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="main-header">Rooms and Suites</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="inner">
                        <div class="photo">
                            <img src="uploads/1.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="">Standard Couple Bed</a></h2>
                            <div class="price">
                                $100/night
                            </div>
                            <div class="button">
                                <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner">
                        <div class="photo">
                            <img src="uploads/2.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="">Standard Couple Bed</a></h2>
                            <div class="price">
                                $100/night
                            </div>
                            <div class="button">
                                <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner">
                        <div class="photo">
                            <img src="uploads/3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="">Standard Couple Bed</a></h2>
                            <div class="price">
                                $100/night
                            </div>
                            <div class="button">
                                <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner">
                        <div class="photo">
                            <img src="uploads/4.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="">Standard Couple Bed</a></h2>
                            <div class="price">
                                $100/night
                            </div>
                            <div class="button">
                                <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner">
                        <div class="photo">
                            <img src="uploads/5.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="">Standard Couple Bed</a></h2>
                            <div class="price">
                                $100/night
                            </div>
                            <div class="button">
                                <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner">
                        <div class="photo">
                            <img src="uploads/6.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="">Standard Couple Bed</a></h2>
                            <div class="price">
                                $100/night
                            </div>
                            <div class="button">
                                <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner">
                        <div class="photo">
                            <img src="uploads/7.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="">Standard Couple Bed</a></h2>
                            <div class="price">
                                $100/night
                            </div>
                            <div class="button">
                                <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner">
                        <div class="photo">
                            <img src="uploads/1.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="">Standard Couple Bed</a></h2>
                            <div class="price">
                                $100/night
                            </div>
                            <div class="button">
                                <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="big-button">
                        <a href="" class="btn btn-primary">See All Rooms</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial" style="background-image: url({{ asset('frontend/uploads/slide2.jpg)') }}">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="main-header">Our Happy Clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-carousel owl-carousel">

                        @foreach ($testimonial_data as $testimonial)
                            <div class="item">
                                <div class="photo">
                                    <img src="{{ asset('admin/uploads/' . $testimonial->photo) }}" alt="">
                                </div>
                                <div class="text">
                                    <h4>{{ $testimonial->name }}</h4>
                                    <p>{{ $testimonial->designation }}</p>
                                </div>
                                <div class="description">
                                    <p>{!! $testimonial->testimonial !!}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-item">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="main-header">Latest Posts</h2>
                </div>
            </div>
            <div class="row">

                @foreach ($post_data as $post)
                    <div class="col-md-4">
                        <div class="inner">
                            <div class="photo">
                                <img src="{{ asset('admin/uploads/' . $post->photo) }}" alt="">
                            </div>
                            <div class="text">
                                <h2><a href="{{ route('blog.detail', $post->id) }}">{{ $post->title }}</a></h2>
                                <div class="short-des">
                                    <p>{!! $post->short_content !!}</p>
                                </div>
                                <div class="button">
                                    <a href="{{ route('blog.detail', $post->id) }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
