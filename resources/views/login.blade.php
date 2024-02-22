<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="login.css">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            width: 100%;
            background-image: url('banner2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            height: 100%;
            margin: 0; /* Remove default margin */
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
            color: black !important; /* Set the color of navbar links */
        }

        /* Additional styling for the form */
        .form {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.8); /* Change the last value for the desired opacity */
    padding: 20px;
    border-radius: 10px;
}


        .form-title {
            color: black;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .title-2 {
            color: black;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .input-container {
            margin-bottom: 20px;
        }

        .input-mail,
        .input-pwd {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .submit {
            background-color: #fff;
            color: #000b;
            padding: 10px 20px;
            cursor: pointer;
        }

        .signup-link {
            color: black;
        }

        .signup-link a {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body class="p-0 m-0 border-0 bd-example m-0 border-0">

<!-- Example Code -->

<form class="form">
     <div class="form-title"><span>LOGIN</span></div>
      <div class="input-container">
        <input class="input-mail" type="email" placeholder="Enter email">
        <span> </span>
      </div>

      <section class="bg-stars">
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
      </section>

      <div class="input-container">
        <input class="input-pwd" type="password" placeholder="Enter password">
      </div>
      <button type="submit" class="submit">
        <span class="sign-text">Sign in</span>
      </button>

       
   </form>


<!-- End Example Code -->
</body>
</html>
