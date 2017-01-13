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
    #chartContainer2{
        position: relative;
    }
    </style>

    <!-- scripts -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/canvasjs.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index1.php">TravelSL</a>
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
                        <a href="#">Contact Us</a>
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

<h2> Analytics based on Searches</h2>
<hr>
&nbsp;
&nbsp;

<!-- 2017 search analytics -->
<?php

$query1 = "SELECT name as label, `2017` as y FROM search_count ORDER BY `2017` DESC LIMIT 5";
$data1 = mysqli_query($conn, $query1);
$search1 = array();
while ($row = mysqli_fetch_assoc($data1)) {
    array_push($search1, $row);
}

$query2 = "SELECT name as label, `2016` as y FROM search_count ORDER BY `2016` DESC LIMIT 5";
$data2 = mysqli_query($conn, $query2);
$search2 = array();
while ($row = mysqli_fetch_assoc($data2)) {
    array_push($search2, $row);
}

$query3 = "SELECT name as label, `2015` as y FROM search_count ORDER BY `2015` DESC LIMIT 5";
$data3 = mysqli_query($conn, $query3);
$search3 = array();
while ($row = mysqli_fetch_assoc($data3)) {
    array_push($search3, $row);
}

//print_r($rating);
?>

               
        <!-- charts -->
        <ul>
        <li>
            <div id="chartContainer1">
            
            
            <script type="text/javascript">
                $(function () {
                    var chart1 = new CanvasJS.Chart("chartContainer1", {
                        title: {
                            text: "Most Searches in 2017"
                        },
                        animationEnabled: true,
                        data: [
                        {
                            type: "pie",
                            indexLabelFontFamily: "Garamond",
                            indexLabelFontSize: 20,
                            indexLabel: "{label} {y}%",
                            startAngle: -20,
                            //showInLegend: true,
                            toolTipContent: "{legendText} {y}%",
                            dataPoints: <?php echo json_encode($search1, JSON_NUMERIC_CHECK); ?>
                        }
                        ]
                    })
                    chart1.render();
                    
                    });
            </script>
            </li><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            <li>  
            <div id="chartContainer2">              
            
            <script type="text/javascript">
                $(function () {
                        var chart2 = new CanvasJS.Chart("chartContainer2", {
                            title: {
                                text: "Most Searches in 2016"
                            },
                            animationEnabled: true,
                            data: [
                            {
                                type: "pie",
                                indexLabelFontFamily: "Garamond",
                                indexLabelFontSize: 20,
                                indexLabel: "{label} {y}%",
                                //startAngle: -20,
                                //showInLegend: true,
                                toolTipContent: "{legendText} {y}%",
                                dataPoints: <?php echo json_encode($search2, JSON_NUMERIC_CHECK); ?>
                            }
                            ]
                        });
                        chart2.render();
                        
                    });
                </script>
                </div>
                </li><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <li>  
                <div id="chartContainer3">              
                
                <script type="text/javascript">
                    $(function () {
                            var chart3 = new CanvasJS.Chart("chartContainer3", {
                                title: {
                                    text: "Most Searches in 2015"
                                },
                                animationEnabled: true,
                                data: [
                                {
                                    type: "pie",
                                    indexLabelFontFamily: "Garamond",
                                    indexLabelFontSize: 20,
                                    indexLabel: "{label} {y}%",
                                    //startAngle: -20,
                                    //showInLegend: true,
                                    toolTipContent: "{legendText} {y}%",
                                    dataPoints: <?php echo json_encode($search3, JSON_NUMERIC_CHECK); ?>
                                }
                                ]
                            });
                            chart3.render();
                            
                        });
                    </script>
                    </div>
                    </li>

                </ul>
    

<!-- /.container -->

    
</body>

</html>
