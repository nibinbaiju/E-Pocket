<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!------ Include the above in your HEAD tag ---------->
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

body {
    background-color: #5165ff;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Poppins", sans-serif
}

.modal-body {
    background-color: #fff;
    border-color: #fff
}

.close {
    color: #000;
    cursor: pointer
}

.close:hover {
    color: #000
}

.form-check-input:checked {
    background-color: #8f37aa;
    border-color: #8f37aa
}

.form-check-input:focus {
    border-color: #8bbafe;
    outline: 0;
    box-shadow: none
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 7px 12px;
    border: 2px solid #8f37aa;
    display: inline-block;
    color: #8f37aa;
    border-radius: 3px;
    text-transform: capitalize
}

label.radio input:checked+span {
    border-color: #8f37aa;
    background-color: #8f37aa;
    color: #fff
}

.fee {
    padding: 8px;
    border: 1px solid #eee;
    border-radius: 4px;
    box-shadow: 0px 0px 7px rgba(0, 0, 0, 0.2);
    margin-right: 8px
}

label.radio1 {
    cursor: pointer;
    width: 100%;
    margin-right: 7px
}

label.radio1 input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio1 span {
    padding: 20px 12px;
    border: 2px solid #8f37aa;
    display: inline-block;
    color: #8f37aa;
    border-radius: 3px;
    text-transform: capitalize;
    width: 100%
}

label.radio1 input:checked+span {
    border-color: #8f37aa;
    background-color: #8f37aa;
    color: #fff
}

.form-control {
    border: 2px solid #ced4da
}

.form-control:focus {
    box-shadow: none;
    border-color: #8f37aa
}

.pay {
    color: #fff;
    background-color: #8f37aa;
    border-color: #8f37aa;
    border-radius: 3px;
    padding: 8px
}

.pay:hover {
    color: #fff;
    background-color: #8f37aa;
    border-color: #8f37aa;
    border-radius: 3px;
    padding: 8px
}

.cancel {
    text-decoration: none;
    color: #8f37aa
}
}</style>
</head>
<body>
    


<button type="button" class="btn btn-success launch" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-info"></i> Pay Fee Now </button>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">
                
                <div class="row mt-3">
                    <div class="col-md-6">
                <form action="/paymmm" method="post">
                {{ csrf_field() }}
                        <div class="d-flex flex-column"> <small>Student Name</small><input type="text" class="form-control" name="sname" value="{{$stuviews['0']->fname}}"><span class="font-weight-bold"></span> </div>
                    </div>
                   
                <div class="mt-3 d-flex flex-column"> <small>Course</small><input type="text" class="form-control" name="scourse" value="{{$stuviews['0']->course}}">  <span class="font-weight-bolder"></span> </div>
                
                
                <div class="mt-3 text-center fee align-items-center">
                <div class="inputbox"> <small>Fee</small> <input type="text" class="form-control" name="payamount"> </div>
                </div>
               
                <div class="d-flex flex-row">  <label class="radio1"> <input type="radio" name="payment" value="card"> <br><br><span><i class="fa fa-credit-card-alt"></i> CREDIT CARD/DEBIT CARD</span> </label> </div>
                </div>
                <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="inputbox"> <small>Card Number</small> <input type="text" class="form-control" name=""placeholder="1111-2222-3333-4444"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>Card Name</small> <input type="text" class="form-control" name=""> </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="inputbox"> <small>Date</small> <input type="text" class="form-control" name=""> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputbox"> <small>Month</small> <input type="text" class="form-control" name=""> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>CVV</small> <input type="text" class="form-control" name=""> </div>
                        </div>
                    </div>
                </div>
                <hr class="mr-2 mt-4">
                <div class="mt-3 mr-2 d-flex justify-content-end align-items-center"> <a href="/studentviews" class="cancel">Cancel</a> <button type="submit" class=" ml-2 btn btn-primary pay">PAY NOW</button></div>
            </div>
        </div>
        </form>
    </div>
</div>


<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
</body>
</html>