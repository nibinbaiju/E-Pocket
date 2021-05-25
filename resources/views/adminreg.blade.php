@extends("admintheme")
@section("content")

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
    <th scope="row">Mailid</th>
    <th scope="row">Password</th></tr>
    
@foreach($registers as $register)

<tr class="table-primary">

    <td>{{$register->lemail}}</td>
   
    <td>{{$register->lpass}}</td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>