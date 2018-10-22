<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Registration</title>
 <link rel="stylesheet" href="style.css">
  
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>
  <script  src="sop.js"></script>

</head>

<body>

  <hgroup>
  <h1>Registration Form</h1>
</hgroup>

<form method="post" id="ajax_form" action="" >
<div class="group">
<input type="text" name="name" /><span class="highlight"></span><span class="bar"></span>
<label>Name</label>
</div>
<div class="group">
<input type="text" name="surname" /><span class="highlight"></span><span class="bar"></span>
<label>Surame</label>
</div>
<div class="group">
<input type="password" name="psw"/></span><span class="bar"></span>
<label>Password</label>
</div>
<div class="group">
<input type="password" name="rpsw"/></span><span class="bar"></span>
<label>Repeat password</label>
</div>
<div class="group">
<input type="text" name="email"/></span><span class="bar"></span>
<label>E-mail</label>
</div>
<button class="button buttonBlue" id="btn">Registration
<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
</button>
 
</form>


<div id="result_form" style="display: none;" ></div>
<center><button class="button buttonBlue" id="qwe" href="javascript:void(0)" style="display: none;  width: 250px; " onclick="show('ajax_form')">Back to form</button></center>

<script type="text/javascript">

   function show(ajax_form) {
    if ( document.getElementById(ajax_form).style.display = "none") {
      document.getElementById(ajax_form).style.display = "block";
      $('#result_form').empty();
      $('#result_form').hide();
      $("#qwe").hide();
      $('input[name="name"]').val('');
            $('input[name="surname"]').val('');
             $('input[name="email"]').val('');
              $('input[name="psw"]').val('');
               $('input[name="rpsw"]').val('');
    }
 }
</script>

   


</body>
</html>




  


    


