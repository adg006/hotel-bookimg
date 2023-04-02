@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Feature</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.features.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.features.update', $feature_data->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Feature icon*</label>
                                                <input type="text" class="form-control" name="feature_icon"
                                                    value="{{ $feature_data->feature_icon }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Feature title*</label>
                                                <input type="text" class="form-control" name="feature_title"
                                                    value="{{ $feature_data->feature_title }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Feature description*</label>
                                                <input type="text" class="form-control" name="feature_description"
                                                    value="{{ $feature_data->feature_description }}">
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
