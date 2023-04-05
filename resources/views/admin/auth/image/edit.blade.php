@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Image</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.images') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.images.update', $image_data->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Existing Photo</label><br />
                                                <img src="{{ asset('admin/uploads/' . $image_data->photo) }}"
                                                    class="w_200">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">New Photo</label>
                                                <input type="file" class="form-control" name="photo">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Description</label>
                                                <input type="text" class="form-control" name="description"
                                                    value="{{ $image_data->description }}">
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
