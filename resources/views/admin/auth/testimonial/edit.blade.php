@extends('admin.elements.app')

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Testimonial</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.testimonials') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.testimonials.update', $testimonial_data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Existing Photo</label><br/>
                                                <img src="{{ asset('admin/uploads/' . $testimonial_data->photo) }}" class="w_200">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">New Photo</label>
                                                <input type="file" class="form-control" name="photo">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ $testimonial_data->name }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Designation</label>
                                                <input type="text" class="form-control" name="designation" value="{{ $testimonial_data->designation }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Testimonial</label>
                                                <input type="text" class="form-control" name="testimonial" value="{{ $testimonial_data->testimonial }}">
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