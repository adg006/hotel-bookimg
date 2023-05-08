@extends('frontend.elements.app')

@section('title', 'Contact')

@section('main')

    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $contact_data->title }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <form action="{{ route('send.email') }}" method="post" class="form_contact_ajax">
                        @csrf
                        <div class="contact-form">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                                <span class="text-danger error-text name_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email Address</label>
                                <input type="text" class="form-control" name="email">
                                <span class="text-danger error-text email_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Message</label>
                                <textarea class="form-control" rows="3" name="message"></textarea>
                                <span class="text-danger error-text message_error"></span>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary bg-website">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="map">
                        {!! $contact_data->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="loader"></div>

@endsection
