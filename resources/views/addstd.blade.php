<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentAdd</title>





    <style>  
  
  
  body {
 background-color:#203647;
  color: Black;
}

.card {  
 
  background-color: #808080;  
}  
.card-body{ 
  background-color:#203647;

  
   

}
.container {  
    
    padding: 50px;  
  background-color: #203647;  
}  


input[type=text], input[type=password], textarea {  
  width: 100%;  
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
            padding: 2px 2px 2px 2px ;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: .8;  
}  
.registerbtn:hover {  
  opacity: 100;  
} 

.labelf
{
  font-size: 20px;
  font-weight: 600;
}



</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-POCKET</a>
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
<div class="container" style="max-width: 900px;">
<div class="row">
<div class="col col-sm-6 col-md-6 col-lg-6"></div>
<h3><b><centre>ADD STUDENT</centre></b></h3>

<div class="card " style="max-width: 900px;">
  <div class="row g-0">
   
      <!-- The `multiple` attribute lets users select multiple files. -->
      <script>
  const fileSelector = document.getElementById('file-selector');
  fileSelector.addEventListener('change', (event) => {
    const fileList = event.target.files;
    console.log(fileList);
  });
</script>
    </div>

    <form action="/Studentaddread" method="post">
    
  {{csrf_field()}}



    <div class="col-md-8" style="width: 795px;">
      <div class="card-body" >
      

  <div class="container">  
  <centre>  <h1> Student Registeration Form</h1> </centre>  
  <hr>  
  <label class="labelf"> Name </label>   
<input type="text" name="fname" placeholder= "Firstname" size="15" required />   
<label class="labelf"> Guardian's Name </label>    
<input type="text" name="gname" placeholder="Guardian's Name" size="15"required /> 
<br><br>

  <label class="labelf" for="birthday">Date Of Birth:</label>
  <input type="date" id="birthday" name="bday">
 

<br><br>
<div>  
<label class="labelf">Course</label>  
 <input type="text" placeholder="Enter Course" name="course" required>
</div>  
<div>  
<label class="labelf">   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<br>
<label class="labelf">   
Phone :  
</label>  
<input type="tel"  name="pno" placeholder="Country Code"  value="+91" size="30"/>   <br>
<br>
<label class="labelf"> 
Current Address :  
</label>
<textarea cols="80" rows="5" placeholder="Current Address" value="address" name="cadd" required>  
</textarea>  
 <label class="labelf" for="email">Email</label>  
 <input type="text" placeholder="Enter Email" name="lemail" required>  
 <label class="labelf" for="password">Password</label>  
 <input type="password" placeholder="Enter Password" name="lpass" minlength="4" maxlength="8" required>
    <button type="submit" class="registerbtn">Register</button>    
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