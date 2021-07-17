@extends("admintheme")
@section("content")
<h2></h2>


<div class="container">
<br>
<br>
<br>
<br>
<div class="row">

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" >
<br>
<br>

</div>




<table class="table table table-dark">
<tr><th scope="row">Name</th>
    <th scope="row">Guardians Name</th>
    <th scope="row">DOB</th>
    <th scope="row">Course</th>
    <th scope="row">Gender</th>
    <th scope="row">Phoneno</th>
    <th scope="row">Address</th>
    <th scope="row">Email</th>
    <th scope="row">Due</th>
   <th></th>
   <th></th>
   
</tr>
@foreach($adds as $add)

<tr class="table-primary">
   
    <td >{{$add->fname}}</td>
  
    <td>{{$add->gname}}</td>
   
    <td>{{$add->bday}}</td>

    <td>{{$add->course}}</td>

    <td>{{$add->gender}}</td>

    <td>{{$add->pno}}</td>

    <td>{{$add->cadd}}</td>

    <td>{{$add->lemail}}</td>
   
    <td>{{$add->due}}</td>


    <td><a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger" href="/userdeleteprocess/{{$add->id}}">DELETE</a></td>

    <td><a class="btn btn-primary" href="/usereditview/{{$add->id}}">EDIT</a></td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>