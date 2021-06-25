<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<?php
include "header.php";                 
?>
<h3>Enquiry</h3>

<div class="container">
  <form method="post" action="/sample/Product/sendenquiry">
    <label for="fname">Name</label>
    <!-- <input type="text" id="name" name="name" placeholder="Your name.."> -->
    <input type="text" class="form-control" name="name" placeholder="Your name.." required="required">

    <label for="country">Phone No </label>
    <input type="text" id="phone_no" name="phone_no" placeholder="Your phone no..">
    

    <label for="subject">Email Id</label>
    <input type="text" id="email_id" name="email_id" placeholder="Your emailid no..">
    

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

