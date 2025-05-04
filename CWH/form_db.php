
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get/Post</a>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<?php
$servername='localhost';
$username='root';
$password="";
$port=3307;
$conn=mysqli_connect($servername, $username,$password,"Students",$port);
 if(!$conn){
    die("Connection failed".mysqli_connect_error());
 }

 if($_SERVER['REQUEST_METHOD']=='POST'){
    $roll=$_POST['roll'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $state=$_POST['state'];
 
 $sql="insert into students(roll,name,gender,state) values('$roll','$name','$gender','$state')";

 $result=mysqli_query($conn,$sql);
 if($result){
    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Details Successfully Added!</strong>
    
  </div>';
 }
 else{
     echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error: We are facing some technical issues, we will be back soon!</strong>
    
  </div>';
 }
}
?>


  <div class="container">
    <h1>Please enter your details: </h1>
  <form action="form_db.php" method=post>
  <div class="mb-3">
    <label for="roll" >Roll Number</label>
    <input type="roll" name="roll" class="form-control" id="roll">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" name="name"  class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <input type="gender" name="gender"  class="form-control" id="gender">
  </div>
  <div class="mb-3">
    <label for="state" class="form-label">State</label>
    <input type="state" name="state"  class="form-control" id="state">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
  </div>
</html>


