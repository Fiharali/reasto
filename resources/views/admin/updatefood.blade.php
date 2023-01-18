<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin side</title>
    @include('admin.admincss')
    <style>


    form {
        position: relative;
        top: 20%;
        left: 18%;
        height: 800px;

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



    <div class="container-scroller">
        @include('admin.navbaradmin')
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{ url('update',$food->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">title</label>
                            <br>
                            <span style="color: red; font-weight:bold;">
                                @error('title')
                                     {{ $message }}
                                 @enderror
                             </span>
                            <input type="text"  style="color: rgb(246, 5, 5); " value="{{ $food->title }}" name="title" class="form-control"
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
                            <input type="text" name="price" style="color: rgb(255, 91, 3);"  class="form-control" value="{{ $food->price }}"
                                placeholder="entre price" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">choose a new image</label>
                            <input type="file" name="image" style="color: rgb(255, 0, 0);" class="form-control"  >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">description</label>
                            <br>
                            <span style="color: red; font-weight:bold;">
                                @error('description')
                                     {{ $message }}
                                 @enderror
                             </span>
                            <input type="text" name="description" style="color: rgb(253, 6, 6);" class="form-control"
                                placeholder="entre description"   value="{{ $food->description }}">
                        </div>
                        <input type="submit" class="btn btn-primary form-control" value="update"></input>
                    </form>
                    <img src="/foodimage/{{ $food->image }}" width="100" height="100" style="position: relative;bottom: 48%;">

                </div>
            </div>
        </div>
    </div>







    @include('admin.adminScript')
</body>
</html>
