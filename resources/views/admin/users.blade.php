<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.admincss')
    <style>
        table {
            position: relative;
            bottom: 300px;
            left: 29%;
            border: 2px beige solid;


        }
    </style>

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
    <div class="container">
            <div class=" col-md-8">
                <table class="table  table-dark table-hover ">
                    <thead>
                        <tr >
                            <th style="color: red;">ID</th>
                            <th style="color: red;">NAME</th>
                            <th style="color: red;">EMAIL</th>
                            <th style="color: red;">created_at</th>
                            <th style="color: red;">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            @if ($user->usertype == '0')
                                <td> <a href="{{ url('deleteuser' , $user->id) }}" class="btn btn-danger"> delete</a></td>
                            @else
                            <td>Not Allowed</td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>






    @include('admin.adminScript')

</body>

</html>
