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
        body{
            height: 1500px;
        }

    form {
        position: relative;
        top: 38%;
        left: 18%;
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
                    <form action="{{ url('updatefoodchef',$chef->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">name</label><br>
                            <span style="color: red; font-weight:bold;">
                                @error('name')
                                     {{ $message }}
                                 @enderror
                             </span>
                            <input type="text"  style="color: rgb(246, 5, 5); " value="{{ $chef->name }}" name="name" class="form-control"
                                placeholder="entre title" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">spicialty</label>
                            <br>
                            <span style="color: red; font-weight:bold;">
                                @error('spicialty')
                                     {{ $message }}
                                 @enderror
                             </span>
                            <input type="text" name="spicialty" style="color: rgb(255, 91, 3);" value="{{ $chef->specialty }}" class="form-control"
                                placeholder="spicialty" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">choose a new image</label>
                            <input type="file" name="image" style="color: rgb(255, 0, 0);" class="form-control"  >
                        </div>

                        <input type="submit" class="btn btn-primary form-control" value="update"></input>
                    </form>
                    <img src="/chefimage/{{ $chef->image }}" width="100" height="100">

                </div>
            </div>
        </div>
    </div>







    @include('admin.adminScript')
</body>
</html>
