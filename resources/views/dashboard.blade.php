<style>
    .content {
        margin-left: 265px;
        background-color: rgb(246, 246, 246);
        z-index: 0;
    }

     @media (max-width: 1200px) {
    .content {
        margin-left: 80px;
    }
    }

    @media (max-width: 765px) {
    .content {
        margin-left: 0;
    }
    }


</style>
@extends('layouts.app')
@section('content')
    <div class="col content">
        <div class="mt-3 ms-2 p-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <h1 class="fs-3">Welcome back {{ Auth::user()->first_name }}</h1>

            <div class="row mt-4">
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="card shadow-sm">
                    <div class="card-body row p-4">
                        <div class="col-xl-5 col-3 mt-1">
                            <i class="bi bi-car-front-fill" style="font-size:50px; color:rgb(19, 119, 67)"></i> 
                        </div>
                        <div class="col-xl-7 col-9 d-flex flex-column">
                            <span class="fs-5">13/15</span>
                            <span class="text-secondary">Available Cars</span>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="card shadow-sm">
                    <div class="card-body row p-4">
                        <div class="col-xl-5 col-md-3 col-3 mt-1">
                            <i class="bi bi-people-fill" style="font-size:50px; color:sandybrown"></i> 
                        </div>
                        <div class="col-xl-7 col-md-9 col-9 d-flex flex-column">
                            <span class="fs-5">5</span>
                            <span class="text-secondary">Total Customers</span>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="card shadow-sm">
                    <div class="card-body row p-4">
                        <div class="col-xl-4 col-md-3 col-3 mt-1">
                            <i class="bi bi-check2-circle" style="font-size:50px; color:blueviolet"></i> 
                        </div>
                        <div class="col-xl-8 col-md-9 col-9 d-flex flex-column">
                            <span class="fs-5">10</span>
                            <span class="text-secondary">Completed Rentals</span>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="card shadow-sm">
                    <div class="card-body row p-4">
                        <div class="col-xl-4 col-md-3 col-3 mt-1">
                            <i class="bi bi-wallet2" style="font-size:50px; color:rgb(88, 152, 236)"></i> 
                        </div>
                        <div class="col-xl-8 col-md-9 col-9 d-flex flex-column">
                            <span class="fs-5">Ksh. 12,500</span>
                            <span class="text-secondary">Revenue Generated</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 col-12 mb-4">
                    <canvas id="barChart" width="400" height="300" class="shadow bg-white border rounded"></canvas>
                </div>

                <div class="col-md-6 col-12 mb-4">
                    <canvas id="lineChart" width="400" height="300" class="shadow bg-white border rounded"></canvas>
                </div>
            </div>

            <div class="row mt-4 border rounded mx-2 p-3 bg-white shadow">
                <table class="table caption-top table-striped">
                    <caption class="fw-bold">New Customers</caption>
                    <thead class="table-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Lawrence</td>
                        <td>Juma</td>
                        <td>+254768273979</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>John</td>
                        <td>Chibin</td>
                        <td>+254738636801</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Ivy</td>
                        <td>Mogire</td>
                        <td>+254721859756</td>
                        </tr>
                    </tbody>
                </table>
            </div>

             <script>
                let barChart = document.getElementById('barChart').getContext('2d');

                let bar = new Chart(barChart, {
                    type:'bar',
                    data:{
                        labels:['Subaru', 'BMW', 'Mercedes', 'R.Rover', 'Harrier'],
                        datasets:[{
                            label:'Bookings',
                            data:[
                                10,
                                12,
                                10,
                                6,
                                7
                            ],
                            backgroundColor: [
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                                'rgb(75, 192, 192)',
                                'rgb(255, 205, 86)',
                                'rgb(153, 102, 255)',
                                'rgb(54, 162, 235)',
                                'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                    }]
                    },
                    options:{
                    plugins: {
                        title: {
                            display: true,
                            text: 'Most Popular Cars',
                            font: {
                                size: 16
                            }
                        }
                    }
                    }
                });

                let lineChart = document.getElementById('lineChart').getContext('2d');

                let line = new Chart(lineChart, {
                    type:'line',
                    data:{
                        labels:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        datasets:[{
                            label:'Bookings',
                            data:[
                                16, 14, 20, 19, 18, 25, 20, 30, 35, 32, 29, 40
                            ],
                            tension: 0.2
                    }]
                    },
                    options:{
                    plugins: {
                        title: {
                            display: true,
                            text: 'Monthly Booking Trends',
                            font: {
                                size: 16
                            }
                        }
                    }
                    }
                });
            </script>


        </div>
    </div>
@endsection
