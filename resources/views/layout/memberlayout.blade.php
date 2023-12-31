<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card layout bg-white" style="width: 90%; height: 650px;">
        <nav class="navbar layoutnav">
            <div class="container-fluid d-flex justify-content-between">
                <div class="d-flex">
                    <img class="navlay" src="CHHLogo.png" alt="CHH Logo">
                </div>
                <div class="containernav d-flex">
                    <div class="navlink d-flex mt-2">
                        <div class="home">
                            <a href="{{ route('member') }}">Home</a>
                        </div>
                        <div class="proposal mx-3">
                            <a href="{{ route('proposal') }}">Proposal</a>
                        </div>
                        <div class="announcement">
                            <a href="{{ route('announcement') }}">Announcement</a>
                        </div>
                        <div class="registration mx-3">
                            <a href="{{ route('registration') }}">Registration</a>
                        </div>
                    </div>
                    <div class="logout">
                        <a href="{{ route('signin') }}" class="logoutbtn"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </div>
                </div>
            </div>
          </nav>
          
          @yield('content')
    </div>
</body>
</html>