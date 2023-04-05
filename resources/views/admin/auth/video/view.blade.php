@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Videos</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.videos.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example1">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Video ID</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($video_data as $video)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $video->video_id }}</td>
                                                    <td>{{ $video->description }}</td>
                                                    <td class="pt_10 pb_10">
                                                        <a href="{{ route('admin.videos.edit', $video->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                        <a href="{{ route('admin.videos.delete', $video->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
