<?php
session_start()
?>

<!doctype html>
<html lang="en">
<head>
    <title>Neurem-3 dataset annotator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="assets/css/material-dashboard.css">
</head>

<body>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h2 class="text-center">Project Neurem-3 at the Institute of Formal and Applied Linguistics</h2>
                    <h4 class="text-center">Faculty of Mathematics and Physics, Charles University</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary" style="width: 30%; margin-left:auto; margin-right:auto;">
                        <!-- <div class="card-text"> -->
                        <h4 class="card-title text-center">Annotation Web Interface</h4>
                        <!-- </div> -->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Last annotated image -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header card-header-text card-header-primary">
                                        <div class="card-text">
                                            <h4 class="card-title text-center">Previosly Annotated Image</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some annotations<p>
                                    </div>
                                    <img class="card-img-top" src="DIDEC/images/133.jpg">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header card-header-text card-header-primary">
                                        <div class="card-text">
                                            <h4 class="card-title text-center">Current Image</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="annotator.php" method="GET">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputAnnotate">Please Enter the annotations:</label>
                                                    <input type="text" class="form-control" id="inputAnnotate" name="inputAnnotate" placeholder="Annotations">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-primary" style="margin-top: 9%; margin-left:20%;">Submit</button>
                                                </div>
                                        </form>
                                    </div>
                                    <img class="card-img-top" src="DIDEC/images/133.jpg">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
</body>

</html>