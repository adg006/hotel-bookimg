@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Post</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.posts') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.posts.update', $post_data->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Existing Photo</label><br />
                                                <img src="{{ asset('admin/uploads/' . $post_data->photo) }}" class="w_200">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">New Photo</label>
                                                <input type="file" class="form-control" name="photo">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ $post_data->title }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Short Content</label>
                                                <input type="text" class="form-control" name="short_content"
                                                    value="{{ $post_data->short_content }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Long Content</label>
                                                <textarea class="form-control snote" name="long_content">{!! $post_data->long_content !!}</textarea>
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
