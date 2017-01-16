<!DOCTYPE html>
<html lang="en">

<?php include("../config/config.php"); ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../views/logo.ico" type="image/x-icon" />

    <title>Analytics - TravelSL</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
    }
    </style>

    <!-- scripts -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
    <script src="js/jspdf.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="../views/index1.php">TravelSL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li>
                        <a href="../views/aboutUs.php">About Us</a>
                    </li>
                    <li>
                        <a href="../views/login.php">Forum</a>
                    </li>
                    <li>
                        <a href="../views/contact.php">Contact Us</a>
                    </li>
                    <li class="active">
                        <a href="analytics.php">Analytics</a>
                    </li>

                    </ul>
            </div> 
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
<div class="container">
    



&nbsp;
&nbsp;

<?php

$query = "SELECT name as label, rating as y FROM places ORDER BY rating DESC LIMIT 15";
$data = mysqli_query($conn, $query);
$rating = array();
while ($row = mysqli_fetch_assoc($data)) {
    array_push($rating, $row);
}

//print_r($rating);
?>

<!-- <p align="right"> 
    <a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #1caf9a;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('print_me')">Print Report</a>
</p> -->

<div id="print_me">

<h2> Analytics based on Ratings</h2> 
<hr>            

            <div class="row">
                <div id="content" class="col-md-12 col-xs-12">

<div id="chartContainer" style="width:100%, height:800px"></div>

<script type="text/javascript">
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "theme2",
        zoomEnabled: true,
        animationEnabled: true,
        data: [
        {
            type: "column",
            dataPoints: <?php echo json_encode($rating, JSON_NUMERIC_CHECK); ?>
        }
        ]
    });
    chart.render();
};
</script>

           
        
    </div>

    
</div>

</div>

</div>
<!-- /.container -->
<script>
    function printPageArea(areaID){
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>

    
</body>

</html>
