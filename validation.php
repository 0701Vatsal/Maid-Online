<?php 
  include 'signup.php'; 
  session_start();
  if(isset($_POST['login'])){
    $username =$_POST["username"];
    $password = $_POST["passwords"];
  	
  	$query = "select * from jobseeker where j_username = '$username' AND j_password = '$password'";
  	$result=mysqli_query($conn, $query);
    if(count(mysqli_num_rows($result)))
    {
      $_SESSION['username'] = $username;
      while($user = mysqli_fetch_assoc($result)) 
      {
        $_SESSION['u_id'] = $user['uid'];
      }
      $_SESSION['sess_id'] = session_id();
      header('location:../home.php');
    }else{
      header('location:../headerfooter.html');
    }
			
			/*if(!$result){
    			echo "Error please check the field";
    		}else{//header('location:login.php');
    			echo "THANKS FOR REGISTRATION...";
    			}*/
        
    }
?>