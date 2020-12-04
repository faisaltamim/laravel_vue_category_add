<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue laravel spa</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>
<body>
    
    <div id="app">
        <app_header class="mb-5"></app_header>
        <router-view></router-view>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>