<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Welcome to login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Themesbrand" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('custom/assets/') }}/images/favicon.ico">

         <link rel="stylesheet" href="{{ asset('custom/assets/') }}/plugins/morris/morris.css">
        <link rel="stylesheet" href="{{ asset('custom/assets/') }}/plugins/chartist/css/chartist.min.css">

        <!-- App css -->
        <link href="{{ asset('custom/assets/') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script defer src="https://use.fontawesome.com/releases/v5.12.0/js/all.js"></script>
        <link href="{{ asset('custom/assets/') }}/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('custom/assets/') }}/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-white">
        
        <div id="app">
        <!-- Log In page -->
          <app-component></app-component>
        <!-- End Log In page -->
        </div>
        <!-- jQuery  -->
        <script src="{{asset('js/app.js')}}"></script>
      {{--   <script src="{{ asset('custom/assets/') }}/js/jquery.min.js"></script>
        <script src="{{ asset('custom/assets/') }}/js/bootstrap.bundle.min.js"></script> --}}
        <script src="{{ asset('custom/assets/') }}/js/waves.min.js"></script>
        <script src="{{ asset('custom/assets/') }}/js/jquery.slimscroll.min.js"></script>
    
        <!-- App js -->
        <script src="{{ asset('custom/assets/') }}/js/app.js"></script>

    </body>
</html>