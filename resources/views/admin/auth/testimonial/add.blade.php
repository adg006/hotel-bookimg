@extends('admin.elements.app')

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Testimonial</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.testimonials.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.testimonials.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Photo*</label>
                                                <input type="file" class="form-control" name="photo" value="">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Name*</label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Designation*</label>
                                                <input type="text" class="form-control" name="designation" value="{{ old('designation') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Testimonial*</label>
                                                <input type="text" class="form-control" name="testimonial" value="{{ old('testimonial') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label"></label>
                                                <button type="submit" class="btn btn-primary">Add</button>
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