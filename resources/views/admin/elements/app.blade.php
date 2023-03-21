<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>  

    @include('admin.elements.styles')
    
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        @include('admin.elements.navbar')

        @include('admin.elements.sidebar')

        @yield('main')

    </div>
</div>

@include('admin.elements.scripts')

</body>
</html>