<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>

body {
  background-image: url('payment.jpg');
  background-size: cover;
}

</style>
</head>
<body >



<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Studena</a>
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
          <a class="nav-link active" aria-current="page" href="/addview">Home</a>
        </li>
   
        <li class="nav-item">

        </li>
      </ul>
    </div>
  </div>
</nav>







<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
<br><br><br>

<form action="/courseditprocess/{{$add->id}}" method="post">

{{ csrf_field() }}

<table class="table table-borderless">

 
 
 
 <tr>
     <td>Course </td>
     <td>      <input value="{{$add->course}}" name="course" type="text" class="form-control" required>
</td>
 </tr>

 <tr>
     <td>Duration</td>
     <td>      <input value="{{$add->dur}}" name="dur" type="text" class="form-control" required>
</td>
 </tr>

<tr>
     <td>Fee</td>
     <td>      <input value="{{$add->fee}}" name="fee" type="text" class="form-control" required>
</td>
 </tr>

<tr>
    <td></td>
</tr>
 <tr>
 
     <td></td>
     <td><a href="/courseview"> <button onclick="return confirm('Are you sure want to Edit?')" class="btn btn-danger" >   EDIT </button></a></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
