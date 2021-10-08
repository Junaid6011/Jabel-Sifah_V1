<?php
   if(isset($_GET['error'])){
     if ($_GET['error'] == 'e341')
     {
       echo '<div style="color:red;height:0px; position:relative; top:-25px;" align="center">You are not authorize to this service.</div>';
     }
     elseif($_GET['error'] == 'e342')
     {
       echo '<div style="color:red;height:0px; position:relative; top:-25px;" align="center">Please enter correct username/password.</div>';
     }
     elseif($_GET['error'] == 'e343')
     {
       echo '<div style="color:red;height:0px; position:relative; top:-25px;" align="center">Your login is expired!</div>';
     }
     elseif($_GET['error'] == 'e344')
     {
       echo '<div style="color:red;height:0px; position:relative; top:-25px;" align="center">Your login time is expired.</div>';
     }
     elseif($_GET['error'] == 'e345')
     {
       echo '<div style="color:red;height:0px; position:relative; top:-25px;" align="center">Your login is expired.</div>';
     }
   }
   ?>
<form action="_login_model-corporate.php" method="post">
  
  
<div class="form-group">
    <label class="sr-only">Password</label>
   <select class="form-control">
   <option>Select Customer</option>
   <option>Metis Internation</option>
   <option>HyperNym</option>
   </select>
  </div>
  
  <div class="form-group">
    <label class="sr-only">Email</label>
    <input name="email" type="email" class="form-control" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only">Password</label>
    <input name="password" type="password" class="form-control" placeholder="Password">
  </div>


  <div class="form-group clearfix">
    <div class="checkbox-custom checkbox-inline pull-left">
      <input type="checkbox" id="inputCheckbox" name="checkbox">
      <label for="inputCheckbox">Remember me</label>
    </div>
    <a class="pull-right" href="">Forgot password?</a>
  </div>
  <button type="submit" class="btn btn-dark btn-round btn-block ">Sign in</button>
</form>