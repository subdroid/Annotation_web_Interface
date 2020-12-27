<?php
session_start();
$imagePath = "DIDEC/images";
$captionsPath = "DIDEC/captions";
?>

<?php include 'utils.php' ?>

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

    <script>
        var filenames = <?php echo json_encode(getImagesList($imagePath)) ?>;
        var captions = <?php echo json_encode(getImageCaptions($captionsPath)) ?>;
        var index = 0;
        var clickCount = 0;

        function loadCaptionsAndImages() {
            clickCount++;
            if (clickCount == 2) {
                document.getElementById("captionCardText").innerText = captions[index];
                index++;
                clickCount = 0;
                document.getElementById("captionWithImage").style.display = 'none';
                document.getElementById("captionOnly").style.display = 'block';

                document.getElementById("captionCardText").innerText = captions[index];
                document.getElementById('captionWithImage').style.display = 'none';
                document.getElementById('captionImageCardText').innerText = captions[index];
                document.getElementById('Image').src = 'DIDEC/images/' + filenames[index] + '.jpg'
            }
            if (clickCount == 1) {
                document.getElementById("captionOnly").style.display = 'none';
                document.getElementById("captionWithImage").style.display = 'block';
            }
        }

        window.onload = function() {
            document.getElementById("captionCardText").innerText = captions[index];
            document.getElementById('captionWithImage').style.display = 'none';
            document.getElementById('captionImageCardText').innerText = captions[index];
            document.getElementById('Image').src = 'DIDEC/images/' + filenames[index] + '.jpg'
        };
    </script>

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
                            <div class="col-md-12" id="captionOnly">
                                <div class="card" style="width: 60%; margin-left:auto; margin-right:auto;">
                                    <div class="card-header card-header-text card-header-primary">
                                        <div class="card-text">
                                            <h4 class="card-title">Caption</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text" id="captionCardText">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" id="captionWithImage">
                                <div class="card" style="width: 60%; margin-left:auto; margin-right:auto;">
                                    <div class="card-header card-header-text card-header-primary">
                                        <div class="card-text">
                                            <h4 class="card-title">Image with caption</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text" id="captionImageCardText"></p>
                                    </div>
                                    <div class="card-body">
                                        <img class='card-img-top' id='Image' src=''>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card" style="width: 60%; margin-left:auto; margin-right:auto;">
                                    <div class="card-header card-header-text card-header-primary">
                                        <div class="card-text">
                                            <h4 class="card-title">Annotations</h4>
                                        </div>
                                    </div>

                                    <div class="card-body" id="annotation">
                                        <form action="annotator.php" method="GET">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputAnnotate">Please Enter the annotations:</label>
                                                    <input type="text" class="form-control" id="inputAnnotate" name="inputAnnotate" placeholder="Annotations">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <button type="button" class="btn btn-primary" style="margin-top: 9%; margin-left:20%;" onclick="loadCaptionsAndImages()">Submit</button>
                                                </div>
                                        </form>
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