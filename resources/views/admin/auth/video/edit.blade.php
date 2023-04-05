@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Video</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.videos') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.videos.update', $video_data->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Video ID</label>
                                                <input type="text" class="form-control" name="video_id"
                                                    value="{{ $video_data->video_id }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Description</label>
                                                <input type="text" class="form-control" name="description"
                                                    value="{{ $video_data->description }}">
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
