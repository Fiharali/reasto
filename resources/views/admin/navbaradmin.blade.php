<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <a href="#" class="logo">
        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
    </a>
    <ul class="nav">
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('users') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account"></i>
                </span>
                <span class="menu-title">users</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('food') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-food"></i>
                </span>
                <span class="menu-title">food</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('reservation') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-room-service"></i>
                </span>
                <span class="menu-title">reservation</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('chefs') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-chef-hat"></i>
                </span>
                <span class="menu-title">chefs</span>
            </a>
        </li>

    </ul>
</nav>

</body>
</html>
