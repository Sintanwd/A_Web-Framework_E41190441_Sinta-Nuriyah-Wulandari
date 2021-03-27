<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
</head>
<body>
    <div class="jumbroton jumbroton-fluid">
        <div class="container">
            @extends('layouts.app')
            @yield('content')
                @section('content')
                    <div class="jumbotron jumbotron-fluide">
                        <div class="container">
                        <h1 class="display-4">Home Page</h1>
                        <p class="lead">This is the Home Page</p>
                        </div>
                    </div>
                @endsection
        </div>
    </div>
</body>
</html>