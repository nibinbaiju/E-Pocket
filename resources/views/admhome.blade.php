<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Home</title>
    <style>
body {
 background-color:#203647;
  color: Black;
}




.card {
  padding: 16px;
  text-align: center;
  margin: 30px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.tab1cards {
  display: flex;
  flex-direction: row;
}
.card:hover {
  box-shadow: 2 8px 16px 2 rgba(0,0,0,0.4);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="test">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course">Add Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admlogin">LogOut</a>
        </li>
        <li class="nav-item">

        </li>
      </ul>
    </div>
  </div>
</nav>

<h2 style="color:white;">Students</h2>


<div class="tab1cards">
  <div class="card">
    <img src="Nibin.jpg" alt="safari" width="250" height="320">
    <h4><b>Nibin Baiju</b></h4>
  </div>
  <div class="card">
    <img src="Athira.jpg" alt="safari" width="250" height="320">
    <h4><b>Athira I</b></h4>
  </div>
  <div class="card">
    <img src="safari.jpg" alt="student" width="250" height="320">
    <h4><b></b></h4>
  </div>
  <div class="card">
    <img src="safari.jpg" alt="student" width="250" height="320">
    <h4><b></b></h4>
  </div>
</div>

<div class="container">

<div class="col col-sm-6 col-md-6 col-lg-6 "></div>

<table class="table">


</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
</body>
</html>