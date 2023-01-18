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
            bottom: 250px;
            left: 20%;
            border: 2px beige solid;


        }
    </style>

</head>

<body>

    <x-app-layout>

    </x-app-layout>

    @include('admin.navbaradmin')
    <div class="container">
        <div class="row">
            <div class=" col-md-8">
                <table class="table  table-dark table-hover ">
                    <thead>
                        <tr >
                            <th style="color: blue;">ID</th>
                            <th style="color: blue;">NAME</th>
                            <th style="color: blue;">EMAIL</th>
                            <th style="color: blue;">phone</th>
                            <th style="color: blue;">guest</th>
                            <th style="color: blue;">date</th>
                            <th style="color: blue;">time</th>
                            <th style="color: blue;">message</th>
                            <th style="color: blue;">reserve at</th>
                        </tr>
                    </thead>
                    @foreach ($reserva as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->guest }}</td>
                            <td>{{ $reservation->date }}</td>
                            <td>{{ $reservation->time }}</td>
                            <td>{{ $reservation->message }}</td>
                            <td>{{ $reservation->created_at }}</td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>






    @include('admin.adminScript')

</body>

</html>
