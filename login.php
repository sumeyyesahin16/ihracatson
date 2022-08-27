<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YURTDIŞI KARGO</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <style>

        header{
            padding: 90px;
        }
        .card{
            border-style: none;
            border-radius: 10px;
        }
        body{
            background-color:   #fcf5f8 ;
        }

        #floatingInput{
            font-weight: bold;
            color: #a80055;
            background-color:#fcf5f8  ;
        }
        #floatingPassword{
            font-weight: bold;
            color: #a80055;
            background-color:#fcf5f8  ;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top " style="background-color:#a80055">
    <div class="container-fluid">
        <a href="#">
            <img src="img/icon.png" style="width: 40px" >
        </a>
    </div>
</nav>
<header>

    <div class="row justify-content-center">
        <div class="col-sm-10 col-xl-2 col-md-6 mt-5" >
            <div class="card text-center" style="width: 20rem">
                <div class="row justify-content-center mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" color="#a80055" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </div>
                <div class="card-body">
                    <h3 class="card-title" style="color:#a80055 ">GİRİŞ YAP</h3>
                    <form method="post" action="#"  class="login100-form validate-form" >
                        <div class="form-floating mb-3 mt-6">
                            <input type="email"  class="form-control" id="floatingInput" placeholder="name@example.com" style="border-color:#a80055 ;border-style: solid">
                            <label for="floatingInput">Kullanıcı Adı</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" style="border-color:#a80055 ">
                            <label for="floatingPassword">Şifre</label>
                        </div>
                    </form>
                    <a href="#" class="btn  mt-3" style="background-color:#a80055 "><h6 style="color: white;border-style: none">Giriş Yap</h6></a>
                </div>
            </div>
        </div>
    </div>
</header>

<footer class="footer">
    <div class="jumbotron" style="background-color: #a80055 ;margin-bottom:0px ;height: 50px" >
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12  col-sm-12  text-center text-white " style="margin-top: 10px">
                Copyright © 2021 <a href="#" style="color: #d1bd2d;text-decoration: none">Moda Selvim</a> <a href="#"></a> All rights reserved.
            </div>
        </div>
    </div>
</footer>

<!-- Internal Js -->
<script src="assets/js/index1.js"></script>
<script src="assets/plugins/chart/Chart.bundle.js"></script>
<script src="assets/plugins/chart/utils.js"></script>
<script src="assets/plugins/apexcharts/apexcharts.js"></script>
<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="assets/plugins/peitychart/peitychart.init.js"></script>
<script src="assets/plugins/echarts/echarts.js"></script>



<script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/datatable.js"></script>
<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>



</body>
</html>


