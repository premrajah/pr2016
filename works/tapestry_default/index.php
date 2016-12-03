<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tapestry: Welcome to Sunrise</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- user css -->
    <link href="css/base.css" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="page_gradiant">
    
    <!-- start navigation  -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tapestry</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
              </ul>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->

        

        
      </div><!-- /.container -->
    </nav>
    <!-- end navigation -->

    <section class="header-area">
      <div class="container">
         <div class="row">
           
              <div class="header-content">
                  <!--  -->
                <div class="col-xs-4 header-col1">
                  <!-- TEMP -->
                    <!-- <img src="http://placehold.it/400x700"  class="header-col1-logo" alt=""> -->
                    <!-- <img src="http://placehold.it/700x400"  class="header-col1-logo" alt=""> -->
                    <img src="img/logo.png"  class="header-col1-logo" alt="">
                    <!-- <img src="http://bit.ly/1HXUnGq" alt="" class="header-col1-logo"> -->
                  <!-- TEMP -->

                </div>
                  <!--  -->
                <div class="col-xs-2 header-col2">
                  <!--  -->
                </div>
                
                <div class="col-xs-6 header-col3">
                    <!--  -->
                </div>
                
              </div>

         </div>
      </div>
    </section>


    <section class="main-area">
      <div class="container container-full">
        <div class="row">     
          <div class="col-xs-12">

            <div class="main-content">

                <h2>Observations</h2>

                <!-- Temperory Content -->
                <?php include 'temp-content.php'; ?>
                <?php include 'temp-content.php'; ?>
                <?php include 'temp-content.php'; ?>
                <?php include 'temp-content.php'; ?>
                <?php include 'temp-content.php'; ?>
                <?php include 'temp-content.php'; ?>
                <!-- Temperory Content -->
                
                
                <!-- Tapestry logo -->
                <div class="tapestry-logo-bot">
                  Powered by
                  <img src="img/tapestry_logo_150px.png" alt="Tapestry Logo">
                </div>

                 <!-- image for bottom right of the main page -->
                <div class="bot-right-icon-img"></div>
                
                <!-- image for bottom left of the main page -->
                <div class="bot-left-icon-img"></div>
                
                
                <!-- The small image on the main area -->
                <div class="top-left-icon-img"></div>

                

            </div>

          </div>    

        </div>
      </div>
    </section>



  









    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    </div>
  </body>
</html>