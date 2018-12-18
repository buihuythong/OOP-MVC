<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="public/style.css">
    <title>Quản lý sinh viên</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Quản lý sinh viên</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
        <li><a href="index.php">Quản lý thí sinh</a></li>
      </ul>
      <form class="navbar-form navbar-left" method="post" action="index.php?controller=index&action=search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="id">
        </div>
        <button type="submit" class="btn btn-default">Tìm kiếm</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bùi Huy Thống <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Trang quản trị</a></li>
            <li><a href="#">Đăng xuất</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </header>
    
    <main>