<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin side</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    @include('admin.admincss')
</head>
<body>

    <div class="  mx-auto text-center text-bold">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <x-app-layout>

    </x-app-layout>
    @include('admin.navbaradmin')










    @include('admin.adminScript')
</body>
</html>
