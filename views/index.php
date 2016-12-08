<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page-TourSL</title>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

        <!-- Import Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!--Import Custom CSS -->
        <link href="css/shop-homepage.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fertigo">
        
        <style type="text/css">
            body{
                font-family: 'Fertigo';
                font-weight: bold;
                font-size: 16px;
            }
            .signin{
                border-top-right-radius: 5px 5px;
                border-bottom-right-radius: 5px 5px;
                border-bottom-left-radius: 5px 5px;
                border-top-left-radius: 5px 5px;
                margin: 10;
                padding: 3px 15px;
                outline: none;
                float: right;
                color: #ffffff;
                border: solid 1px #0076a3; border-right:0px;
                background: #0095cd;
                background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
                background: -moz-linear-gradient(top,  #00adee,  #0078a5);
                text-align: center;
                font-size:14px;
            }
        </style>
            <script type="text/javascript">
                function testsearch(){
                if(document.search_form.search.value==''){
                    alert("Please enter a place you want to search");
                    return false;
                    }
                }
            </script>
</head>
<body>

    <!-- Navigation -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">TravelSL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="login.php">Forum</a>
                    </li>
                    <li>
                        <a href="#">Contact US</a>
                    </li>
                    <li>
                        <form action="../php/search.php" method="get" name="search_form" onSubmit="return testsearch()">
                            <input type="text" name="search" placeholder="place your search hear" class="text">
                            <input type="submit" name="go" value="Search" class="button">
                        </form>
                    </li>
                </ul>
               
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
            <!--List of categories-->
            <img src="images/travelSL.png" style="width:300px;height:300px;padding:0 40px 10px -10px;">
                <p class="lead">Categories</p>
                <div class="list-group" style="padding:0 40px 10px 0px;">
                    <a href="adventure.html" class="list-group-item">Adventure</a>
                    <a href="#" class="list-group-item">Historical</a>
                    <a href="#" class="list-group-item">Beaches</a>
                    <a href="#" class="list-group-item">Sightseeing</a>
                    <a href="#" class="list-group-item">Camping</a>
                    <a href="#" class="list-group-item">Waterfall hunting</a>
                    <a href="#" class="list-group-item">Climate</a>
                    <a href="#" class="list-group-item">Cities</a>
                    <a href="#" class="list-group-item">Foods</a>
                    <a href="#" class="list-group-item">Hotels</a>
                </div>
                <!--Calling function(googlemap)-->
                    <a href="http://kanishkanamal.comuf.com/map.html"><img src="images/map.png" style="width:200px;height:200px;">Search from Map</a>
            		</div>

            <div class="col-md-9">
            <!--image slide-->
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/4.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/6.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                <!--popular posts-->

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/stclairs.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4>St.Clairs</h4>
                                <p><button type="button" class="btn btn-info btn-sm" data-target="#myModal_1" data-toggle="modal">See more</button></p>
                            </div>
                            <!--<div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
   <!--Modal-->                 <div class="modal fade" id="myModal_1" role="dialog">
	                	<div class="modal-dialog"></div>
	                		<div class="modal-content">
	                			<div class="modal-header">
	                				<button type="button" class="close" data-dismiss="modal">&times;</button>
	                				<h3>St.Clairs Waterfall</h3>
	                			</div>
	                			<div class="modal-body">
	                			<img src="images/stclairs.jpg" alt="">
	                				<p>St. Clair's Falls is one of the widest waterfalls in Sri Lanka and is commonly known as the "Little Niagara of Sri Lanka". It is one of six waterfalls affected by the Upper Kotmale Hydropower Project</p>
	                			</div>
	                			<div class="modal-footer">
	                				<button type="button" class="btn btn-defaoult" data-dismiss="modal">Close</button>
	                			</div>
	                		</div>
	                </div>
<!--Modal ends-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/sigiriya.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4>Sigiriya</h4>
                                <p><button type="button" class="btn btn-info btn-sm" data-target="#myModal_2" data-toggle="modal">See more</button></p>
                            </div>
                            <!--<div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
                    <!--popoup modal for the article1-->
                    <div class="modal fade" id="myModal_2" role="dialog">
	                	<div class="modal-dialog"></div>
	                		<div class="modal-content">
	                			<div class="modal-header">
	                				<button type="button" class="close" data-dismiss="modal">&times;</button>
	                				<h3>Sigiriya</h3>
	                				<img src="images/sigiriya2.jpg" alt="" style="display:block;margin:auto;width:800px;height:600;">
	                			</div>
	                			<div class="modal-body">
	                				<p> is an ancient rock fortress located in the central Matale District near the town of Dambulla in the Central Province, Sri Lanka. The name refers to a site of historical and archaeological significance that is dominated by a massive column of rock nearly 200 metres (660 ft) high. According to the ancient Sri Lankan chronicle the Culavamsa, this site was selected by King Kasyapa (477 – 495 CE) for his new capital. He built his palace on the top of this rock and decorated its sides with colourful frescoes. On a small plateau about halfway up the side of this rock he built a gateway in the form of an enormous lion. The name of this place is derived from this structure —Sīhāgiri, the Lion Rock. The capital and the royal palace was abandoned after the king's death. It was used as a Buddhist monastery until the 14th century.</p>
	                			</div>
	                			<div class="modal-footer">
	                				<button type="button" class="btn btn-defaoult" data-dismiss="modal">Close</button>
	                			</div>
	                		</div>
	                </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/hortanplains.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4>Horton Plains</h4>
                                <p><button type="button" class="btn btn-info btn-sm" data-target="#myModal_3" data-toggle="modal">See more</button></p>
                            </div>
                            <!--<div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
                    <!--popoup modal for the article2-->
                    <div class="modal fade" id="myModal_3" role="dialog">
	                	<div class="modal-dialog"></div>
	                		<div class="modal-content">
	                			<div class="modal-header">
	                				<button type="button" class="close" data-dismiss="modal">&times;</button>
	                				<h3>Horton Plains</h3>
	                				<img src="images/hortanplains.jpg" alt="">
	                			</div>
	                			<div class="modal-body">
	                				<p>Horton Plains National Park is a protected area in the central highlands of Sri Lanka and is covered by montane grassland and cloud forest. This plateau at an altitude of 2,100–2,300 metres (6,900–7,500 ft) is rich in biodiversity and many species found here are endemic to the region. This region was designated a national park in 1988. It is also a popular tourist destination and is situated 8 kilometres (5.0 mi) from Ohiya, 6 kilometres (3.7 mi) from the world famous Ohiya Gap/Dondra Watch and 32 kilometres (20 mi) from Nuwara Eliya.</p>
	                			</div>
	                			<div class="modal-footer">
	                				<button type="button" class="btn btn-defaoult" data-dismiss="modal">Close</button>
	                			</div>
	                		</div>
	                </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/aukana.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4>Aukana Buddha Statue</h4>
                                <p><button type="button" class="btn btn-info btn-sm" data-target="#myModal_4" data-toggle="modal">See more</button></p>
                            </div>
                            <!--<div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
                    <!--popoup modal for the article3-->
                    <div class="modal fade" id="myModal_4" role="dialog">
	                	<div class="modal-dialog"></div>
	                		<div class="modal-content">
	                			<div class="modal-header">
	                				<button type="button" class="close" data-dismiss="modal">&times;</button>
	                				<h3>Aukana Buddha Statue</h3>
	                				<img src="images/aukana.jpg" alt="">
	                			</div>
	                			<div class="modal-body">
	                				<p>The Avukana statue is a standing statue of the Buddha near Kekirawa in North Central Sri Lanka. The statue, which has a height of more than 40 feet (12 m), has been carved out of a large granite rock face during the 5th century. It depicts a variation of the Abhaya mudra, and the closely worn robe is elaborately carved. Constructed during the reign of Dhatusena, it may have been made as a result of a competition between a master and a pupil. Avukana statue is one of the best examples of a standing statue constructed in ancient Sri Lanka. It is now a popular tourist attraction in the country.</p>
	                			</div>
	                			<div class="modal-footer">
	                				<button type="button" class="btn btn-defaoult" data-dismiss="modal">Close</button>
	                			</div>
	                		</div>
	                </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/yala.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4>Yala National Park</h4>
                                <p><button type="button" class="btn btn-info btn-sm" data-target="#myModal_5" data-toggle="modal">See more</button></p>
                            </div>
                            <!--<div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
                    <!--popoup modal for the article4-->
                    <div class="modal fade" id="myModal_5" role="dialog">
	                	<div class="modal-dialog"></div>
	                		<div class="modal-content">
	                			<div class="modal-header">
	                				<button type="button" class="close" data-dismiss="modal">&times;</button>
	                				<h3>Yala Nationl Park</h3>
	                				<img src="images/yala.jpg" alt="">
	                			</div>
	                			<div class="modal-body">
	                				<p>Yala National Park is the most visited and second largest national park in Sri Lanka. The park consists of five blocks, two of which are now open to the public, and also adjoining parks. The blocks have individual names such as, Ruhuna National Park (block 1) and Kumana National Park or 'Yala East' for the adjoining area. It is situated in the southeast region of the country, and lies in Southern Province and Uva Province. The park covers 979 square kilometres (378 sq mi) and is located about 300 kilometres (190 mi) from Colombo. Yala was designated as a wildlife sanctuary in 1900, and, along with Wilpattu was one of the first two national parks in Sri Lanka, having been designated in 1938. The park is best known for its variety of wild animals. It is important for the conservation of Sri Lankan elephants, Sri Lankan leopards and aquatic birds.</p>
	                			</div>
	                			<div class="modal-footer">
	                				<button type="button" class="btn btn-defaoult" data-dismiss="modal">Close</button>
	                			</div>
	                		</div>
	                </div>
	                <div class="col-sm-4 col-lg-4 col-md-4">
	                        <div class="thumbnail">
	                            <img src="images/pasikuda.jpg" alt="">
	                            <div class="caption">
	                                <h4 class="pull-right"></h4>
	                                <h4>Pasikuda</h4>
	                                <p><button type="button" class="btn btn-info btn-sm" data-target="#myModal_6" data-toggle="modal">See more</button></p>
	                            </div>
	                            <div class="ratings">
	                                
	                               <!-- <p>
	                                    <span class="glyphicon glyphicon-star"></span>
	                                    <span class="glyphicon glyphicon-star"></span>
	                                    <span class="glyphicon glyphicon-star"></span>
	                                    <span class="glyphicon glyphicon-star"></span>
	                                    <span class="glyphicon glyphicon-star-empty"></span>
	                                </p>-->
	                            </div>
	                    	</div>
	                </div>
                    <!--popoup modal for the article5-->    
	                <div class="modal fade" id="myModal_6" role="dialog">
	                	<div class="modal-dialog"></div>
	                		<div class="modal-content">
	                			<div class="modal-header">
	                				<button type="button" class="close" data-dismiss="modal">&times;</button>
	                				<h3>Pasikuda</h3>
	                				<img src="images/pasikuda.jpg" alt="">
	                			</div>
	                			<div class="modal-body">
	                				<p>Pasikudah is easily accessible from Trincomalee and Batticaloa, both of which cities have star class accommodation. Pasikudah is fast becoming an investors hub as foreign and local investors have shown interest in developing tourism along the beach. The Sri Lankan government's strict environmental policies have prevented certain plans for mass development, however at the same time the government's strong economic policies have promoted development to a certain extent.</p>
	                			</div>
	                			<div class="modal-footer">
	                				<button type="button" class="btn btn-defaoult" data-dismiss="modal">Close</button>
	                			</div>
	                		</div>
	                </div>
                    
                </div>

            </div>

        </div>


    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
           <p>Download the TravelSL mobile application to surf through Sri Lanka while travelling!</p>
        </footer>

    </div>
    <!-- /.container -->
  <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control"/>
                <br/>
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control"/>
                <br/>
                <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-defaoult" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>
  
<script type="text/javascript">
        $(document).ready(function(){
            $('#login_button').click(function(){
                var email = $('#email').val();
                var password = $('#password').val();
                console.log(email);
                if(email!='' && password!=''){
                    $.ajax({
                        url:"/project/views/signin.php",
                        method:"POST",
                        data:{email:email,password:password},
                        success:function(data){
                            console.log("sasasasassasas");
                            if(data=='No'){
                                alert("Wrong data");
                            }else{
                                $('#loginModal').hide();
                                
                                
                            }
                        }
                    });
                }else{
                    alert("Both fields are reqiured!");
                }

            });
                
        });
    </script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>
