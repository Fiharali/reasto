<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin side</title>
    @include('admin.admincss')
</head>

<style>
    body{
        height: 2000px;
    }

    form {
        height: 1000px;
        position: relative;
        top: 32%;
        left: 18%;
    }
    table {
        position: relative;
        top: 38%;
        left: 32%;
    }
</style>

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
    <div class="container-scroller">
        @include('admin.navbaradmin')
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{ url('uploadfood') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">title</label>
                            <br>
                        <span style="color: red; font-weight:bold;">
                            @error('title')
                                 {{ $message }}
                             @enderror
                         </span>
                            <input type="text" style="color: rgb(252, 9, 9);" name="title" class="form-control"
                                placeholder="entre title" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">price</label>
                            <br>
                        <span style="color: red; font-weight:bold;">
                            @error('price')
                                 {{ $message }}
                             @enderror
                         </span>
                            <input type="text" name="price" style="color: rgb(249, 4, 4);" class="form-control"
                                placeholder="entre price" >
                        </div>
                        <div class="mb-3">
                            <br>
                        <span style="color: red; font-weight:bold;">
                            @error('image')
                                 {{ $message }}
                             @enderror
                         </span>
                            <label class="form-label">image</label>
                            <input type="file" name="image" style="color: rgb(251, 5, 5);" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <br>
                            <span style="color: red; font-weight:bold;">
                                @error('image')
                                     {{ $message }}
                                 @enderror
                             </span>
                            <label class="form-label">description</label>
                            <input type="text" name="description" style="color: rgb(249, 3, 3);" class="form-control"
                                placeholder="entre description" >
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
                            <tr>
                                <th style="color: green;">FOOD NAME</th>
                                <th style="color: green;">PRICE</th>
                                <th style="color: green;">DESCRIPTION</th>
                                <th style="color: green;">IMAGE</th>
                                <th style="color: green;">ACTION</th>

                            </tr>
                        </thead>
                        @foreach ($food as $food)
                            <tr align="center">
                                <td>{{ $food->title }}</td>
                                <td>{{ $food->price }}</td>
                                <td>{{ $food->description }}</td>
                                <td><img src="/foodimage/{{ $food->image }}" ></td>
                                <td align="center">
                                    <a class="btn btn-danger" href="{{ url('/deletefood',$food->id) }}" >delete</a>
                                    <a class="btn btn-primary" href="{{ url('/updatefood',$food->id) }} ">update</a>
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
