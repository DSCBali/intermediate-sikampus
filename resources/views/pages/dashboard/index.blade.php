
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="images/icon.png"/>
    <title>SIKAMPUS</title>
    <link href="bootstrap/css/style.css" rel="stylesheet">

  </head>
  <body style="background-image:url(images/kelas.jpg);background-size:cover">
    <div style="height:85px"></div>
    <center>
      <div class="container" style="width:500px">
            <div class="jumbotron">
              <h2>Sistem Informasi Kampus</h2>
              <br>
              <div class="container" >
                <form class="form-signin" method="POST" action="/proses" method="post">
                  {{csrf_field()}}
                  <input type="text" name="username" class="form-control" placeholder="Username" >
                  <br>
                  <input type="password" name="password" class="form-control" placeholder="Password" >
                  <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="width:100px;margin-right:218px;background:#777777;border:#777777">Login</button>
              </form>
              </div>
            </div>
          </div>
</center>
</body>

</body>
</html>
