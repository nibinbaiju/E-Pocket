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





   <tr>
    <th scope="row">Course</th>
    <th scope="row">Duration</th>
    <th scope="row">Fees</th>
    <th></th>
    <th></th>
   

 
   
</tr>

@foreach($adds as $add)

<tr class="table-primary">
   
   

    <td>{{$add->course}}</td>

    <td>{{$add->dur}}</td>

    <td>{{$add->fee}}</td>

    
    <td><a onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger" href="/coursedeleteprocess/{{$add->id}}">DELETE</a></td>
    <td><a class="btn btn-primary" href="/courseeditview/{{$add->id}}">EDIT</a></td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>