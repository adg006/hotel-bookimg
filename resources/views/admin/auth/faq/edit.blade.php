@extends('admin.elements.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit FAQ</h1>

                <div class="ml-auto">
                    <a href="{{ route('admin.faq') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.faq.update', $faq_data->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Question*</label>
                                                <input type="text" class="form-control" name="question"
                                                    value="{{ $faq_data->question }}">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Answer*</label>
                                                <textarea name="answer" class="form-control snote">{{ $faq_data->answer }}</textarea>
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
