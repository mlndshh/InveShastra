<!doctype html>
<html lang="en">
<?
require 'connection.php';
require 'functions.php';

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <title>Pythrons - FinanceShastra</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="searchpage.php">Pythrons</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>



                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
              <div class="menu-list">
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="d-xl-none d-lg-none" href="page.php">Dashboard</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav flex-column">
                              <li class="nav-divider">
                                  Menu
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link active" href="searchpage.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-fw fa-chart-pie"></i>Search<span class="badge badge-success">6</span></a>
                                  <div id="submenu-1" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="subpage.php">Subscriptions<span class="badge badge-secondary">Subscriptions</span></a>
                                          </li>

                                      </ul>
                                  </div>

                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Dashboards</a>
                                  <div id="submenu-2" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="visualizations.php">Visualizations<span class="badge badge-secondary">Visualizations</span></a>
                                          </li>

                                      </ul>
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="substocks.php">Subscribed Stocks<span class="badge badge-secondary">Subscribed Stocks</span></a>
                                          </li>

                                      </ul>
                                  </div>
                              </li>

                              <li class="nav-item">
                                  <a class="nav-link" href="map.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Kibana</a>
                                      <div id="submenu-5" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="kibana.php">Kibana<span class="badge badge-secondary">Kibana/</span></a>
                                              </li>




                                          </ul>
                                      </div>
                              </li>

                              <li class="nav-item">
                                  <a class="nav-link" href="testhousing.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-fw fa-file"></i>Housing</a>
                                      <div id="submenu-4" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="testhousing.php">Search Listings<span class="badge badge-secondary">Search Listings</span></a>
                                              </li>



                                          </ul>
                                      </div>
                              </li>

                          </ul>
                      </div>
                  </nav>
              </div>
          </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Houses available near you</h2>


                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                      <div class="card">
                          <h5 class="card-header">Enter Location: </h5>
                          <div class="card-body">
                              <form name="search" method="get">
                                  <div class="form-group">
                                  <!--    <label for="inputText3" class="col-form-label">Input Text</label>-->
                                      <input id="inputText3" type="text" class="form-control" name="search" placeholder="Location" >
                                      <br>
                                      <input id="inputText3" type="text" class="form-control" name="min" placeholder="Minimum Price">
                                      <br>
                                      <input id="inputText3" type="text" class="form-control" name="max" placeholder="Maximum Price">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Search</button>
                                  <?php
                                    if(isset($_GET["search"])) {
                                      echo "<a class='btn btn-primary' href='visualizations.php'>View Visualizations</a>";
                                    }

                                  ?>
                              </form>
                          </div>
                      </div>
                  </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">




                    <?php



                        $string = "";
                        if(isset($_GET["search"])) {
                          $keyword=$_GET["search"];
                          $min=$_GET["min"];
                          $max=$_GET["max"];
                          $keywordurl=str_replace(" ","+",$keyword);
                          $minurl=str_replace(" ","+",$min);
                          $maxurl=str_replace(" ","+",$max);
                          $json =file_get_contents("https://api.nestoria.in/api?encoding=json&pretty=1&action=search_listings&country=in&listing_type=buy&price_min=" . $minurl . "&price_max=" . $maxurl . "&place_name=" . $keywordurl);
                          $houses = json_decode($json, true);
                          $response=$houses["response"];

                          foreach ($response["listings"] as $i => $listing) {

                            echo "
                            <div class='card'>
                                <div class='card-header'>
                                    " . $listing["title"]  . " - " . $listing["price_formatted"] ."
                                </div>
                                <div class='card-body'>
                                    <blockquote class='blockquote mb-0'>
                                        <img src=". $listing['img_url'] .">
                                        <p>"  . $listing["summary"] .  "</p>

                                        <footer class='blockquote-footer'>

                                            <a href=" . $listing['lister_url'] . ">Link to advert</a>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>";

                          /*    echo '<h2>' . $listing['title'] . '</h2>';
                              echo '<img src="' . $listing['img_url'] . '"width="400px" height="300px"/>';
                              echo '<p>Price: ' . $listing['price_formatted'] . '</p>';
                              echo '<p>Bedrooms: ' . $listing['bedroom_number'] . '</p>';
                              echo '<p>Latitude: ' . $listing['latitude'] . '</p>';
                              echo '<p>Longitude: ' . $listing['longitude'] . '</p>';
                              echo '<p>' . $listing['summary'] . '</p>';
                              echo '<a href="' . $listing['lister_url'] . '">Read more</a>'; */
}
                      }


                        ?>







                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
</body>

</html>
