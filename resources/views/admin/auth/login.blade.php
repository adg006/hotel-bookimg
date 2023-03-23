<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

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
                                <h4 class="text-center">Login</h4>
                            </div>

                            <div class="card-body card-body-auth">
                                <form method="post" action="{{ route('admin.login.submit') }}">
                                    @csrf

                                    @if(session()->get('success')) 
                                        <div class="text-success"> 
                                            {{ (session()->get('success')) }}
                                        </div>
                                    @endif
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" />

                                        @error('email') 
                                            <div class="text-danger"> 
                                                {{ $message }} 
                                            </div> 
                                        @enderror

                                        @if(session()->get('error')) 
                                            <div class="text-danger"> 
                                                {{ session()->get('error') }} 
                                            </div> 
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" />
                                        @error('password') <div class="text-danger"> {{ $message }} </div> @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Login
                                        </button>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div>
                                            <a href="{{ route('admin.forget_password') }}">
                                                Forget Password?
                                            </a>
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
</div>

@include('admin.elements.scripts')

</body>
</html>