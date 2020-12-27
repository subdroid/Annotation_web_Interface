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
      <div class="col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">Instructions</h4>
            </div>
          </div>
          <div class="card-body" style="text-align: justify;">
            From the inception of the Apache project in 1995 the official documentation stated:[16][17]

            Apache is a cute name which stuck. It was based on some existing code and a series of software patches, a pun on “A PAtCHy” server.

            In an April 2000 interview, Brian Behlendorf, one of the creators of Apache said:[18]

            The name literally came out of the blue. I wish I could say that it was something fantastic, but it was out of the blue. I put it on a page and then a few months later when this project started, I pointed people to this page and said: "Hey, what do you think of that idea?" ... Someone said they liked the name and that it was a really good pun. And I was like, "A pun? What do you mean?" He said, "Well, we're building a server out of a bunch of software patches, right? So it's a patchy Web server." I went, "Oh, all right." ... When I thought of the name, no. It just sort of connotated: "Take no prisoners. Be kind of aggressive and kick some ass."

            Since 2013 the Apache Foundation has explained the origin of the name as:[19]

            The name 'Apache' was chosen from respect for the various Native American nations collectively referred to as Apache, well-known for their superior skills in warfare strategy and their inexhaustible endurance. It also makes a cute pun on "a patchy web server"—a server made from a series of patches—but this was not its origin. The group of developers who released this new software soon started to call themselves the "Apache Group".

            When Apache is running under Unix, its process name is httpd, which is short for "HTTP daemon".[20]

            Feature overview
            Apache supports a variety of features, many implemented as compiled modules which extend the core functionality. These can range from authentication schemes to supporting server-side programming languages such as Perl, Python, Tcl and PHP. Popular authentication modules include mod_access, mod_auth, mod_digest, and mod_auth_digest, the successor to mod_digest. A sample of other features include Secure Sockets Layer and Transport Layer Security support (mod_ssl), a proxy module (mod_proxy), a URL rewriting module (mod_rewrite), custom log files (mod_log_config), and filtering support (mod_include and mod_ext_filter).

            Popular compression methods on Apache include the external extension module, mod_gzip, implemented to help with reduction of the size (weight) of web pages served over HTTP. ModSecurity is an open source intrusion detection and prevention engine for Web applications. Apache logs can be analyzed through a Web browser using free scripts, such as AWStats/W3Perl or Visitors.


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