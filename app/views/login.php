<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INICIO DE SESION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

</head>
    
<?php

echo('

<body style="background-image: url(https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);">

<div class="container">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block" style="background-image: url(https://cdn.shopify.com/s/files/1/0949/7006/files/242.png?36); background-repeat: no-repeat; background-size: contain, cover;"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h2 class="h5 text-gray-900 mb-4">INICIO DE SESION</h2>
                <hr>
              </div>
              <form action="'.Config::getUrl().'/loginmanager" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-4">
                    <input id="nickname" type="text" name="nickname" placeholder="Usuario" class="form-control textbox-nickname">
                  </div>
                 <div class="col-md-4">
                    <input id="password" type="password" name="password" placeholder="Password" class="form-control textbox-password">
                  </div>
                  <div class="col-md-4">
                    <input  type="submit" value="LOGIN" class ="btn btn-block btn-primary btn-login">
                  </div>
                </div>
        	    </form>
                  <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

');

?>

</body>
</html>



