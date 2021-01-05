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
          <h2 class="text-center">Ambiguity Annotation for Eye-Tracking Experiments</h2>
          <h4 class="text-center">UFAL, Faculty of Mathematics and Physics, Charles University</h4>
        </div>
      </div>
    </div>
  </div>


  <div class="container">

    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">Instructions</h4>
            </div>
          </div>
          <div class="card-body" style="text-align: justify;">
          <p style="text-align: justified"> <br/><br/> Thank you for helping out in this annotation task! <br/><br/><br/><br/>
        As part of this task, you will be shown a number of English sentences and you have to determine if there is any 
        ambiguity in the presented sentence.<br/><br/>Once the task begins, you will first be presented with the <b>text</b> of an English 
        sentence. Then, along with the same text, you will also be presented with an <b>image</b> corresponding to the sentence. 
        <br/><br/><b>For each case (with and without the image), you are required to annotate the ambiguous words in the sentence.</b><br/><br/>
        As an example, for a sentence like <i>"fine thin red hair"</i>, the word <i>'hair'</i> might mean <u>"vlas"</u> or 
        <u>"chlup"</u>. <br/><br/>You are thus required to 
        spot ambiguities like these and note them down in Czech.<br/><br/><br/>When you spot ambiguituies 
        like these, you are required to annotate them in the text-box in the following format :<br/><br/>
        <i>word_in_english: ambiguous_meaning1, ambiguous_meaning2, ambiguous_meaning3, ... <span style="color:red;text-align: left">;</span> <br/>
        hair:vlas,chlup <span style="color:red;text-align: left">;</span> </i><br/><br/>
        If there are <b>more than one ambiguous word</b> in the sentence, enter the word in the same format right after
        the semicolon like this: <br/><br/>
        <i>word1_in_english: ambiguous_meaning1, ambiguous_meaning2, ambiguous_meaning3, ... <span style="color:red;text-align: left">;</span>
            word2in_english: ambiguous_meaning1, ambiguous_meaning2, ambiguous_meaning3, ... <span style="color:red;text-align: left">;</span> </i><br/><br/>
        If there are no ambiguous words, please leave the field blank!
        <br/><br/><br/><br/>
        If there are any  confusions with the instructions, please write to bhattacharya@ufal.mff.cuni.cz
        <br/><br/>    
        </p>
        

          </div>
        </div>
      </div>
    </div>

    <form action="annotator.php" method="GET">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Please Enter your name:</label>
          <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your name">
        </div>
        <div class="form-group col-md-6">
          <button type="submit" class="btn btn-primary" style="margin-top: 4%; margin-left:20%;">Continue</button>
        </div>
    </form>

  </div>
  </div>
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
</body>

</html>