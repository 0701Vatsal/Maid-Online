<?php
include("signup.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1 align="center"> Please Enter Your Valuable Review Here</h1>
         <section align="center">
            <h2>Customer Reviews</h2>
            <form method="POST"><div class="button2">
            <textarea name="address"  name="cust_review" placeholder="please enter your review" cols="30" rows="5"></textarea><br>
            <button type="submit">Submit</button></div></form>
            <img src="data:image/png;base64,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" alt="Customer Review image">
        
          </section>
 
</body>
</html>
<?php
include("signup.php");
error_reporting(0);
$cs = $_GET['cust_review'];
$query= "INSERT INTO customerreview  VALUE('$cs')";
$data =mysqli_query($conn,$query);
if($data)
{
echo "Once you signup please go to login page and login.";

}
else
{
echo "Data failed to enter in database";
}
?>