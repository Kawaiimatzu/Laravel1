<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            width: 100%;
            background-image: url('banner4.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            height: 100%;
        }
        html {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        /* Add custom styles for transparent navbar */
        .navbar-transparent {
            background-color: transparent !important;
            border: none;
        }

        .navbar-transparent .navbar-nav .nav-link {
            color: white; /* Set the color of navbar links */
        }
    </style>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
        
    <nav class="navbar navbar-expand-lg navbar-transparent">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
            <a class="nav-link" href="aboutus">About Us</a>
            <a class="nav-link" href="services">Services</a>
            <a class="nav-link" href="contactus">Contact Us</a>
          </div>
        </div>
      </div>
    </nav>
    
      
    <!-- End Example Code -->
  </body>
</html>
