<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 




    <style>  
  
  
  body {
 background-color:#203647;
  color: Black;
}

.card {  
    
  background-color: #808080;  
  justify-content: center;
  margin-left:auto;
  margin-right:auto;

}  

.container {  
    padding: 1px;  
  background-color: #203647;  
  justify-content: center;
  margin-left:auto;
  margin-right:auto;

}  


input[type=text], input[type=password], textarea {  
  width: 20%;  
  height: 35px;
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 10px 10px 10px;  
         }  
hr {  
  border: 1x solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  margin-left: 2px;
  padding: 16px 50px;  
  margin: 8px 0 ;  
  border: none;  
  cursor: pointer;  
  width: 18%;  
  opacity: 0.9;  
  
  position: relative;
  }
.editbtn 
{  
  background-color: #0000FF;  
  color: white;  
  margin-left: 2px;
  padding: 16px 50px;  
  margin: 8px 0 ;  
  border: none;  
  cursor: pointer;  
  width: 18%;  
  opacity: 0.9;  
  position: relative;
}  
.deletebtn {  
  background-color: red;  
  color: white;  
  margin-left: 2px;
  padding: 16px 50px;  
  margin: 8px 0 ;  
  border: none;  
  cursor: pointer;  
  width: 18%;  
  opacity: 0.9;  
  
  position: relative;
} 
.registerbtn:hover {  
  opacity: 1;  
} 





</style>
</head>
<body>
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
          <a class="nav-link active" aria-current="page" href="addview">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course">Add Course</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="addstd">Add Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">LogOut</a>
        </li>
        <li class="nav-item">

        </li>
      </ul>
    </div>
  </div>
</nav>   
<div class="container">
<div class="row">
<div class="col col-sm-6 col-md-6 col-lg-6"></div>
<h3><b><center>ADD COURSE</center></b></h3>

<div class="card mb-3" style="width: 1000px;"  centre>
  
      <div class="card-body">
      



      <form action="/Courseread" method="post">  
      {{ csrf_field() }}
  <div class="container">  


<div>  
<label>   
Course 
</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
<input type="text" name="course"  size="15" required> 
</div>  
<div>  
 
<label>Course Duration</label> &nbsp;&nbsp;  
<input type="number" id="quantity" name="dur" min="1" max="10" required>  
<br><br>
<label>Course Fee</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
<input type="number" name="fee"  size="15" required>   
   <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="registerbtn">ADD</button> &nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="registerbtn" href="/courseview"> VIEW COURSES  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>  





      </div>
    </div>
  </div>
</div>




</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>
</html>