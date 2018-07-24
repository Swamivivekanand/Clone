<?php include "header.php" ?>

<?php
$email=$pass="";
$error_message="";
$login_error_msz="";
$salt="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	include_once 'connection.php';
	$email=$_POST["email"];
	$pass=$_POST["password"];
	if($email!=''&&$pass!='')
	{
			

		 $sql= "select * from clone where email='$email'";
		 
		 
		  $result=mysqli_query($conn,$sql);
		  
             

		  if(mysqli_num_rows($result)>0)//yadi wo user database me exits karta hai to uska name ka ek row hmko dikhega.
         {
         	
             
             $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
             $password=md5($row['salt'].$pass);

             print_r($password);
             print_r( $row['password'] );
             if($row['password']==$password)
             {
             	header('Location:demo.php');
             }
             $error_message="Username/Password not correct"; 
         }
         else
         {
         	$error_message="Email id doesn't exists";
         }

 	}
 }








// 		  $res=mysql_fetch_row($result);
// 		   if($res)
//    			{
//    				session_start();
// 			    $_SESSION['email']=$email;
// 			    header('location:contact-us.php');
// 			}
// 		   else
// 		   {
// 		   		$login_error_msz="Please enter correct email or password";
// 		   }
//  	}
// 	 else
// 	{
// 	  	$login_error_msz="Please fill email or password";
// 	}
// }


	


// 	if(empty($email) && empty($pass))
// 	{
// 		$error_message="Username/Password not correct";
// 	}

// 	else
// 	{
// 		if(empty($email))
// 		{
// 			$error_message="Username/Password not correct";
// 		}

// 		if (empty($pass)) 
// 		{
// 		$error_message="Username/Password not correct";
// 		}
// 	}


// 	if( empty($email_error) && empty($pass_error) )
// 	{

// 		include 'connection.php';
// 		$sql="SELECT * from `test` where email='$email '";//humlog user ko uske email id through check karte hai ki wo database me exits karta hai ki nh.yadi wo exits karta hai to uska sara info humko milega.
// 		$result=mysqli_query($conn,$sql);
// 		//print_r($result); yaha humlog database me jo query bhejte hai uska answer mila hai.

// 		if(mysqli_num_rows($result)>0)//yadi wo user database me exits karta hai to uska name ka ek row hmko dikhega.
//         {
//             $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//             $password=md5($row['salt'].$pass);
//             //print_r( $password);
//             //print_r($password);
//             // print_r( $row['password'] );
//             if($row['password']==$password)
//             {
//             	header('Location:home.php');
//             }
//             $error_message="Username/Password not correct"; 
//         }
//         else
//         {
//         	$error_message="Email id doesn't exists";
//         }

// 	}





// }

?>
<section class="login-page-section">
	<div class="login-page-background-image"></div>
	<div class="spacer"></div>
		<div class="container">
	   		 <div class="row">
	        	<div class="col-md-7 col-md-offset-3">
	            	<div class=" login-form-container">
	                	<div class="login-form">
	                		<div class="error-msz"><?php echo $error_message ?></div>
	                		
	                   		<form action="" method="post">
	                       		<h2>Login Form</h2>
	                       		<div class="imgcontainer">
	                            	<img src="images/img_avatar2.png" alt="Avatar" class="avatar">
	                        	</div>

	                       		<div class="input--with-icon">
	                            	<i class="fa fa-user"></i>
	                            	<input type="text" class="form-control" name="email" placeholder=" Email Id..">
	                        	</div>

	                        	<div class="input--with-icon">
	                            	<i class="fa fa-lock"></i>
	                            	<input type="password" class="form-control" name="password" placeholder="Password..">
	                            </div>

		                        <div class="login-checkbox">
		                            <label>
		                                <input type="checkbox" checked="checked" name="remember"> Remember me
		                            </label>
		                        </div>
		                        <div class="login-submit">
		                            <input type="submit" value="Login">
		                        </div>
		                       
		                        <div class="login-forgot-password text-center">
		                            <p>Forgot <a href="#">password?</a></p>
		                        </div>
	                    	</form>
	                	</div>
	            	</div>
	        	</div>
	    	</div>
		</div>
	
</section>



<?php include "footer.php"?>