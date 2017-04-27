 <?php 
require_once 'views/layouts/header.php';
require_once 'views/layouts/nav.php';

include('config.php');
include('class/userClass.php');

$userClass = new userClass();

if (isset($_POST['registerAdmin'])) 
{

    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $middleName=$_POST['middleName'];
    $userStatus=$_POST['userStatus'];

    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if($username_check && $password_check) 
    {
   $uid=$userClass->adminRegistration($username,$password,$firstName,$lastName,$middleName,$userStatus);
    if($uid)
    {
        // print_r($uid);
        // exit();
        $url='home.php';
        header("Location: $url");
    }
    else
    {
      $errorMsgReg="Username already exits.";
    }
    
    }
}


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Add Admin</title>

   <!--   <style>
          a.button{
            text-decoration: non;
          }
      </style> -->
 	<link rel="stylesheet" href="assets/css/admin.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
     
 </head>
 <body>
    <br>
 	<div class="container">
            <form method="post" name="AddAdmin" class="form-horizontal" role="form">
               <h2>Registration</h2>
               <hr>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" class="form-control" autofocus>
                        <!-- <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="middleName" class="col-sm-3 control-label">Middle Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="middleName" name="middleName" placeholder="Middle Name" class="form-control" autofocus>
                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Status</label>

                    <div class="col-sm-6">
                        <div class="row">
                           
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="active" name="optradio" value="1" >Active
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="inactive" name="optradio" value="0">Inactive
                                    </label>
                                </div>
                            
                        </div>
                    </div>
                </div> 

                 

                   
                   
              

             
             <!--    <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div>  /.form-group --> 

                <div class="form-group">

                    <div class="btn-group button col-sm-5 col-sm-offset-3" role="group">
                        <button type="submit" class="btn btn-primary-outline" name="registerAdmin">Create Admin</button>
                    </div>
                   
                </div>
            </form> 
        </div> 

 </body>
 </html>

 <?php 
require_once 'views/layouts/footer.php'
 ?>