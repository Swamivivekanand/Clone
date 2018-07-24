<?php include "header.php" ?>

<?php 

$success_message="";
$error_message="";
$error=$first_name_error=$email_error=$password_error=$confrmpass_error=$phone_error=$institute_error=$categories_error="";

$fname=$pass=$cnfrm_password=$email=$phone=$categories="";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $fname=$_POST['fname'];
    $pass=$_POST['pass1'];
    $cnfrm_password=$_POST['cnfrm-pass'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $categories=$_POST['signup_form_select'];
    
   

    if(empty($fname) && empty($pass) && empty($cnfrm_password) && empty($email) && empty($phone))
    {
        
        $error="All fields are mandatory.";
        
    }
    else
    {
        if (empty($_POST["fname"])) 
        {

            $first_name_error="Name is must";
        }
        else
        {
            $fname=test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z]*$/", $fname)) 
            {
              
              $first_name_error="only character are valid"; 
            }
        }
        if($categories==1 || $categories==2 || $categories==3)
        {
            $categories=test_input($_POST["signup_form_select"]);
        }
        else
        {
            $categories_error="Invalid seleection";
        }
        if(empty($_POST["pass1"]))
        {
            $password_error="Password is must";
        }
        else
        { 
            $pass=test_input($_POST["pass1"]);

            if(!preg_match("/^[a-zA-Z@_0-9]{7,16}$/",$pass))
            {
                $password_error="Password must ";
            }
        }

        if(empty($_POST["cnfrm-pass"]))
        {
            $confrmpass_error="Confirm pass must";
        }
        else if($pass!=$cnfrm_password)
        {

            $confrmpass_error="Password must be same";

        }

       if(empty($_POST["email"]))
        {
            $email_error="Email is must";
        }
        else
        {
            $email=test_input($_POST["email"]);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $email_error = "Invalid email format"; 
            } 
        }
        if(empty($phone))
        {
            $phone_error="Phone number is must";
        }
        else
        {
            $phone=test_input($phone);
             if(!preg_match('/^[0-9]{10}$/', $phone))
             {
              $phone_error="only 10 Digits are valid";  
             }
        }
    }
    if( empty($error) && (empty($first_name_error) || empty($institute_error)) && empty($email_error)&& empty($password_error) && empty($confrmpass_error) && empty($phone_error) && empty($categories_error)){
       
        
        include_once('connection.php');
        // print_r("hello");
        // exit();
         
       


        $sql="SELECT email from `clone` where email='$email'";


         
        $result=mysqli_query($conn,$sql);

        
        
        if(mysqli_num_rows($result)>0)
        {
            $error_message="Email id already exists.";
             mysqli_close($conn);
        }
        else
        {     $salt = uniqid(mt_rand(), true);
              $md5=md5($salt.$pass);
              
              $sql="INSERT INTO clone (name,password,contact_no,email,salt,categories)
              values('$fname','$md5','$phone','$email','$salt','$categories')";
              
              
              
              if(mysqli_query($conn,$sql))
              {
                 
               
                //$success_message="Account created succesfully";
                header('Location:home.php');
                $fname="";
                $email="";
                $phone="";
               
              }
              else
              {
                $error_message="Error: ".mysqli_error($conn);
                 
              }

              mysqli_close($conn);

              
        }

      
   }
}



function test_input($data)
{
  $data=trim($data);
  $data=stripslashes($data);
    $data=htmlspecialchars($data);
  return $data;
}

?>
<div class="spacer"></div>
<section class="register-section">

    <div class="register-page-body"></div>
    <div class="spacer"></div>
    <div class="container">
        <div class="row">
           
                <div><span class="error"> <?php echo  $categories_error?></span></div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="register-layout">
                        <div class="success-msz"><?php echo $success_message ?></div>
                        <div class="error-msz"><?php echo $error_message ?></div>
                        <div class="error-msz"><?php echo $error ?></div>
                        <div class="register-content-opacity">
                            <h1 class="text-center register-heading">Sign Up For Free</h1>
                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="inner-body">
                                            <form action=""  method="POST" id="form-register"> 
                                                <label class="register-label ">
                                                    <input type="radio" name="signup_form_select" value="1" id="register_select_student" checked> Student  
                                                </label>
                                                  
                                                <label class="register-label">
                                                    <input type="radio" name="signup_form_select" id="register_select_faculty" value="2">
                                                    Faculty
                                                </label>
                                                  
                                                <label class="register-label">
                                                    <input type="radio" name="signup_form_select" id="register_select_institute" value="3">
                                                    Institute
                                                </label>
                                            
                                                <div class="input--with-icon form-group">
                                                    <div class="column">
                                                        <i class="fa fa-user"></i>
                                                        <input type="text" maxlength="25" class="form-control form-name" name="fname" placeholder=" Name..." id="change_placeholder" value="<?php echo $fname ?>">
                                                    </div> 
                                                    <span class="error"><?php echo  $first_name_error ?></span>
                                                </div>
                                                <div class="input--with-icon form-group">
                                                    <div class="column">
                                                        <i class=" fa fa-phone"></i>
                                                        <input type="tel" class="form-control form-phoneno" name="phone" placeholder="Phone number.." maxlength="10">
                                                    </div>
                                                    <span class="error"><?php echo $phone_error ?></span>   
                                                </div>
                        
                                                <div class="input--with-icon form-group">
                                                    <div class="column">
                                                        <i class="fa fa-envelope"></i>
                                                        <input type="email" class="form-control form-emailid" name="email" placeholder="Email id..." >
                                                    </div>
                                                    
                                                    <span class="error"><?php echo $email_error ?></span>
                                                </div>

                                                <div class="input--with-icon form-group">
                                                    <div class="column ">
                                                        <i class="fa fa-lock"></i>
                                                        <input type="password" class="form-control form-password" name="pass1" placeholder="Password...">
                                                        <span class="tooltip_text" >Enter a password longer than 8 characters include(a-zA-Z@_0-9)</span>
                                                    </div>
                                                    <span class="error"><?php echo $password_error ?></span>   
                                                </div>
                                            
                                                <div class="input--with-icon form-group">
                                                    <div class="column">
                                                        <i class="fa fa-lock"></i>
                                                        <input type="password" class="form-control form-confrmpass" name="cnfrm-pass" placeholder="confirm password...">
                                                    </div>
                                                    <span class="error"><?php echo $confrmpass_error ?></span>   
                                                </div>
                                                
                                                <div class="register-submit form-group">
                                                    <input type="submit" name="" value="Submit" id="register_form_submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php" ?>