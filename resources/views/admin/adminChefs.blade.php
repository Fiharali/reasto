<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.admincss')
    <style>
        form {
            position: relative;
            bottom: 300px;
            left: 29%;



        }
        table {
            position: relative;
            left: 29%;



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
        <div class="row">
            <div class="col-md-8">
                <form action="{{ url('chefshow') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">

                        <label class="form-label">name chef*</label><br>
                        <span style="color: red; font-weight:bold;">
                            @error('name')
                                 {{ $message }}
                             @enderror
                         </span>
                        <input type="text" style="color: rgb(252, 9, 9);" name="name" class="form-control"
                            placeholder=" chef name" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">spicialty*</label>
                        <br>
                        <span style="color: red; font-weight:bold;">
                            @error('spicialty')
                                 {{ $message }}
                             @enderror
                         </span>
                        <input type="text" name="spicialty" style="color: rgb(249, 4, 4);" class="form-control"
                            placeholder="chef spicialty" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">image chef*</label>
                        <br>
                        <span style="color: red; font-weight:bold;">
                            @error('image')
                                 {{ $message }}
                             @enderror
                         </span>
                        <input type="file" name="image" style="color: rgb(251, 5, 5);" class="form-control" >
                    </div>

                    <input type="submit" class="btn btn-primary form-control"></input>
                </form>

            </div>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class=" col-md-8">
                <table class="table  table-dark table-hover ">
                    <thead>
                        <tr >
                            <th style="color: red;">ID</th>
                            <th style="color: red;">NAME</th>
                            <th style="color: red;">spicialty</th>
                            <th style="color: red;">chef pictur</th>
                            <th style="color: red;">joined at</th>
                            <th style="color: red;">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($chef as $chef)
                        <tr>
                            <td>{{ $chef->id }}</td>
                            <td>{{ $chef->name }}</td>
                            <td>{{ $chef->specialty }}</td>
                            <td><img src="/chefimage/{{ $chef->image }}" ></td>
                            <td>{{ $chef->created_at }}</td>
                            <td>
                                <a href="{{ url('/deletechef',$chef->id) }}" class="btn btn-danger">delete</a>
                                <a href="{{ url('/updatechef',$chef->id) }}" class="btn btn-primary">update</a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>






    @include('admin.adminScript')

</body>

</html>
