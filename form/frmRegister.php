<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formregis</title>
</head>
<body>
<?php
include("header.php");
?>
<main>
<div class="container">
<div class="card">
  <div class="card-header">
    RegisterForm
  </div>
  <div class="card-body">
    <form name="form1" action="insert.php" method="post" >
        <div class="row"> <!--row1-->
        <div class="col-md-4">
        <label for="fname" class="form-label">Firstname</label>
        <select class="form-select" id="fname" name="fname" aria-label="Default select example">
         <option value="1">Mr.</option>
        <option value="2">Ms.</option>
        <option value="3">Mrs.</option>
        </select>
</div>
        <div class="col-md-4">
        <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" >
        </div>
        <div class="col-md-4">
        <label for="lname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lname" placeholder="Enter your Lastname" name="lname" >
        </div>
  </div>
  <div class="row"> <!--row2-->
        <div class="col-md-3">
        <label for="sex" class="form-label">Sex</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
         Male
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2">
         Female
        </label>
</div>
</div>
        <div class="col-md-3">
        <label for="BD" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="BD" placeholder="mm/dd/yyyy" name="BD" >
            </div>
        <div class="col-md-6">
        <label for="ad" class="form-label">Address</label>
            <input type="text" class="form-control" id="ad" placeholder="Enter your Address" name="ad" >
        </div>
  </div>
</form>
<a href="insert.php"><button class="btn btn-success btn-primary " type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg> Save </button></a>
<a href="frmRegister.php" ><button class="btn btn-success btn-danger " type="reset"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg> Cancel </button></a>
</div>
</div>
</div>
</div>
</main>
<?php
include("footer.php");
?>
</body>
</html>