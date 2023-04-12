<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
        <meta name="description" content="">
        <title> @yield('title') </title>        
		
        @include('frontend.elements.styles')        

    </head>
    <body>
        
        @include('frontend.elements.topbar') 

        @include('frontend.elements.navbar') 

        @yield('main')

        @include('frontend.elements.footer')
		
        @include('frontend.elements.scripts')   
		
   </body>
</html>