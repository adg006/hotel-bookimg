<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>Reset Password</title>

    @include('admin.elements.styles')

</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <section class="section">
            <div class="container container-login">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="card-header card-header-auth">
                                <h4 class="text-center">Reset Password</h4>
                            </div>

                            <div class="card-body card-body-auth">
                                <form method="POST" action="{{ route('admin.reset_password.submit') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}" />
                                    <input type="hidden" name="email" value="{{ $email }}" />

                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" />
                                        @error('password') 
                                            <div class="text-danger"> {{ $message }} </div> 
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="retype_password" placeholder="Retype Password" />
                                        @error('retype_password') 
                                            <div class="text-danger"> {{ $message }} </div> 
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.elements.scripts')

@if($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}'
            });
        </script>
    @endforeach
@endif

@if(session()->get('error'))
    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}'
        });
    </script>
@endif

@if(session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('success') }}'
        });
    </script>
@endif

</body>
</html>