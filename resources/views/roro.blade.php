<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<style>
 .inf-content
 {
    border:1px solid #DDDDDD;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
    height:376px;
}			
strong 
{ 
  font-weight: bold;
  color: #4CAF50;
}
tr:hover 
{
  background-color:#f5f5f5;
}
td
{
color: white;
}
</style>

<body style="background-color:#203647"> 
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 href aboutusclass="text-white h4">About Us</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>


<br><br><br><br><br><br>
<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    <div class="row">

        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="stud.jpg" data-original-title="Usuario"> 
       
        </div>



       
        <div class="col-md-6">
           
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                @foreach($stuviews as $sview)
                    <tr>    
                        <td>
                            <strong>Name</strong>
                        </td>
                        <td >{{$sview->fname}}</td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>Gaurdian's Name</strong>
                        </td>
                        <td>{{$sview->gname}}</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Date Of Birth</strong>
                        </td>
                        <td>{{$sview->bday}}</td>
                    </tr>

                    <tr>
                    <td>
                            <strong>Course</strong>
                        </td>
                        <td>{{$sview->course}}</td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>Gender</strong>
                        </td>
                        <td>{{$sview->gender}}</td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>Phone No</strong>
                        </td>
                          <td>{{$sview->pno}}</td>
                        </tr>
                    <tr>        
                        <td>
                            <strong>Current Address</strong>
                        </td>
                        <td>{{$sview->cadd}}</td>

                    </tr>
                    <tr>        
                        <td>
                            <strong>Email</strong>
                        </td>
                        <td >{{$sview->lemail}}</td>
                    </tr>   
                    <tr>        
                        <td>
                            <strong>Fee Dues</strong>
                        </td>
                        <td style="color:red;font-size:20px">{{$sview->due}}</td>
                    </tr>   
                    
                   
                    @endforeach    
                    

                </tbody>
            </table>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <td><a class="btn btn-primary" href="/payment">PAY NOW</a></td>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
       
</body>
</html>