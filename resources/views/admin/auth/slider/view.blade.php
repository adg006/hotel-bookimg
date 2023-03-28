@extends('admin.elements.app')

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sliders</h1>
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
                                                <th>Heading</th>
                                                <th>Sub-heading</th>
                                                <th>Button-text</th>
                                                <th>Button-url</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($slider_data as $slider)
                                            <tr>
                                                <td>{{ $iteration }}</td>
                                                <td>{{ $slider->photo }}</td>
                                                <td>{{ $slider->heading }}</td>
                                                <td>{{ $slider->sub-heading }}</td>
                                                <td>{{ $slider->button-text }}</td>
                                                <td>{{ $slider->button-url }}</td>
                                                <td class="pt_10 pb_10">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Detail</button>
                                                    <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                </td>

                                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Item Name</label></div>
                                                                    <div class="col-md-8">Laptop</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Description</label></div>
                                                                    <div class="col-md-8">This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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