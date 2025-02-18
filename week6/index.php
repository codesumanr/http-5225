<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="display-5">All Schools</h1>
        </div>
    </div>
</div>
<div class ="row">
    <?php
    $connect =mysqli_connect(
        'localhost', //URL
        'root', //USERNAME
        '',// Your password 
        'school'//Your database 
    );
  if (!$connect){
    echo'Error Code:' . mysqli_connect_errno();
    echo'Error Message:' .mysqli_connect_error();

    exit;
  }
    ?>
    <?php
    $query ='SELECT *FROM schools';
    $schools =mysqli_query($connect, $query);

    foreach($schools as $record){
    echo '<div class="col-md-3">
    <div class="card" mb-4 style="">
    <div class="card-body">
        <h5 class="card-title">'. $record['Board'].'</h5>
        <span class="badge bg-primary">'.$record['School Type'].'</span>
        <span class="badge bg-secondary">'.$record['Language'].'</span>
    </div>
    </div>
    </div>';

    }

    ?>

</body>
</html>