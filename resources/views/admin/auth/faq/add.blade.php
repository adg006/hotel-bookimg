@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add FAQ</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.faq') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.faq.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Question*</label>
                                                <input type="text" class="form-control" name="question"
                                                    value="{{ old('question') }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Answer*</label>
                                                <textarea name="answer" class="form-control snote">{{ old('answer') }}</textarea>
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
