<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Captcha Code in Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 


</head>
  <body>

    
  <form action="insert.php" method="post">
    <div class="container">
    <h1>Contact Form with Captcha</h1>
  <div class="alert alert-primary" role="alert">
  <?php 
   if(isset($_REQUEST['msg'])) echo $_REQUEST['msg'];
  ?>
</div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Enter Name</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Address</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="message" name="message" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Enter Captcha Code</label>
  <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter captcha code">
</div>

<div><img src="captcha.php">Unable to Read? Click<a href="">Here</a>to Refresh</div>
<button type="submit" class="btn btn-success">Submit</button>


</div>
</form>




</body>

</html>