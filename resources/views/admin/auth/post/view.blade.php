@extends('admin.elements.app')

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Posts</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.posts.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
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
                                                <th>Photo</th>
                                                <th>Title</th>
                                                <th>Short Content</th>
                                                <th>Long Content</th>
                                                <th>Total View</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($post_data as $post)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('admin/uploads/' . $post->photo) }}" class="w_100"></td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->short_content }}</td>
                                                <td>{{ $post->long_content }}</td>
                                                <td>{{ $post->total_view }}</td>
                                                <td>{{ $post->created_at }}</td>
                                                <td class="pt_10 pb_10">
                                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success">Edit</a>
                                                    <a href="{{ route('admin.posts.delete', $post->id) }}" class="btn btn-danger">Delete</a>
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