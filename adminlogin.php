<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap.css">  
    <title>Admin Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
  
<body>  
  
<div class="container">  

    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="adminlogin.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >  
  
  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
  
</body>  
  
</html>  
  
<?php  

     
  $servername = "localhost";
$username = "u956915835_admin";
$password = "eminem2883";
$dbname = "u956915835_4ita";

    $dbcon=mysqli_connect($servername,$username,$password);  
    mysqli_select_db($dbcon,$dbname);   
if(isset($_POST['admin_login']))
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where username='$admin_name' AND password='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        session_start();
         $_SESSION['admin']=true;
        echo "<script>window.open('view_users.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>