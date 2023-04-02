@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Features</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.features.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
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
                                                <th>Icon</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($feature_data as $feature)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><i class="{{ $feature->feature_icon }}"></i></td>
                                                    <td>{{ $feature->feature_title }}</td>
                                                    <td>{{ $feature->feature_description }}</td>
                                                    <td class="pt_10 pb_10">
                                                        <a href="{{ route('admin.features.edit', $feature->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                        <a href="{{ route('admin.features.delete', $feature->id) }}"
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
