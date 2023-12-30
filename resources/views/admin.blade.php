<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- style --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
     
    
</head>
<body class="bg-light">
    
    <div class="container-fluid">

        <nav class="navbar navbar-expand-md navbar-light border-bottom">
          <a class="navbar-brand ms-4" href="#">
            <span class="fw-semibold fs-4">
              <i class="bi bi-car-front-fill"></i>
              Car-Rental
            </span>
          </a>
        </nav>

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand border-end navbar-light" style="max-width: 280px">
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav flex-column ms-3">

                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <i class="bi bi-laptop"></i>
                                <span class="ms-2">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#cars" aria-expanded="false" aria-controls="cars">
                                <i class="bi bi-car-front-fill"></i>
                                <span>Cars</span>
                            </a>
                            <ul id="cars" class="collapse collapse-horizontal">
                                    <a href="#" class="nav-link"> View Cars</a>
                                    <a href="#" class="nav-link"> Manage Cars</a>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="false" aria-controls="users">
                                <i class="bi bi-person-fill"></i>
                                <span>Users</span>
                            </a>
                            <ul id="users" class="collapse collapse-horizontal">
                                    <a href="#" class="nav-link"> View Users</a>
                                    <a href="#" class="nav-link"> Manage Manages</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>