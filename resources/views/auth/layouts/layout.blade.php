<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sistem Persewaan Apartemen</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('templates/assets/img/favicon.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('templates/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templates/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templates/assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/css/forms/switches.css') }}">
</head>
<body class="form">
    
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                    @yield('content')

                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('templates/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('templates/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('templates/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('templates/assets/js/authentication/form-2.js') }}"></script>

</body>
</html>