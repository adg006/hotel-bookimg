@extends('admin.elements.app')

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sliders</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.slider.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Photo *</label>
                                                <input type="file" class="form-control" name="photo" value="">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Heading</label>
                                                <input type="text" class="form-control" name="heading" value="{{ old('heading') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Sub Heading</label>
                                                <input type="text" class="form-control" name="sub_heading" value="{{ old('sub_heading') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Button Text</label>
                                                <input type="text" class="form-control" name="button_text" value="{{ old('button_text') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Button URL</label>
                                                <input type="text" class="form-control" name="button_url" value="{{ old('button_url') }}">
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