@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Feature</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.features.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.features.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Feature icon*</label>
                                                <input type="text" class="form-control" name="feature_icon"
                                                    value="{{ old('feature_icon') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Feature title*</label>
                                                <input type="text" class="form-control" name="feature_title"
                                                    value="{{ old('feature_title') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Feature description*</label>
                                                <input type="text" class="form-control" name="feature_description"
                                                    value="{{ old('feature_description') }}">
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
