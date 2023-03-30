@extends('admin.elements.app')

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sliders</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.slider') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.slider.update', $slider_data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Existing Photo</label><br/>
                                                <img src="{{ asset('admin/uploads/' . $slider_data->photo) }}" class="w_200">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">New Photo</label>
                                                <input type="file" class="form-control" name="photo">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Heading</label>
                                                <input type="text" class="form-control" name="heading" value="{{ $slider_data->heading }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Sub Heading</label>
                                                <input type="text" class="form-control" name="sub_heading" value="{{ $slider_data->sub_heading }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Button Text</label>
                                                <input type="text" class="form-control" name="button_text" value="{{ $slider_data->button_text }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Button URL</label>
                                                <input type="text" class="form-control" name="button_url" value="{{ $slider_data->button_url }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label"></label>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection