@extends('admin.elements.app')

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Post</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.posts.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Photo*</label>
                                                <input type="file" class="form-control" name="photo" value="">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Title*</label>
                                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Short Content*</label>
                                                <input type="text" class="form-control" name="short_content" value="{{ old('short_content') }}">
                                            </div>

                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Long Content*</label>
                                                <textarea class="form-control snote" name="long_content" value="{{ old('long_content') }}"></textarea>
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