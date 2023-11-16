<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                    <h3 class="mt-2">ADMIN</h3>
                </div>
                <div class="containernav d-flex">
                    <div class="navlink d-flex mt-2 mx-3">
                        <div class="home">
                            <a href="{{ route('admin') }}">Home</a>
                        </div>
                        <div class="proposal mx-3">
                            <a href="{{ route('adminproposal') }}">Proposal</a>
                        </div>
                        <div class="management">
                            <a href="{{ route('attendance') }}">Management</a>
                        </div>
                    </div>
                    <div class="logout ms-3">
                        <a href="{{ route('signin') }}" class="logoutbtn"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </div>
                </div>
            </div>
          </nav>

          @yield('content')
          </div>
    </div>
    <script src="script.js"></script>
</body>
</html>