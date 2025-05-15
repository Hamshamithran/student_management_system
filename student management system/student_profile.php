<?php

session_start();
   
    if(!isset($_SESSION['username']))
    { 
       header("location:login.php"); 
    }

    elseif($_SESSION['usertype']=='admin')
    
    {

        header("location:login.php");
    }

$host="localhost";
$user="root";
$password="";
$db="student management system project";


$data=mysqli_connect($host,$user,$password,$db);

$name=$_SESSION['username'];

$sql="SELECT * FROM user WHERE username='$name' ";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);



if(isset($_POST['update_profile']))
{

    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];
    $s_DoB=$_POST['DoB'];
    $s_register=$_POST['register'];
    $s_father=$_POST['father'];
    $s_mother=$_POST['mother'];
    $s_bloodgroup=$_POST['bloodgroup'];
    $s_adhar=$_POST['adhar'];
    $s_Gender=$_POST['Gender'];
    $s_year=$_POST['year'];
    $s_Address=$_POST['Address']; 

    $sql2="UPDATE user SET register='$s_register',DoB='$s_DoB',Gender='$s_Gender',year='$s_year',father='$s_father',mother='$s_mother',bloodgroup='$s_bloodgroup',adhar='$s_adhar',Address='$s_Address',email='$s_email',phone='$s_phone',password='$s_password' WHERE username='$name' ";

    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
        header('location:student_profile.php'); 
    }
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Dashboard</title>

           <?php

           include 'student_css.php'

           ?>

           <style type="text/css">
            label
            {
              display: inline-block;
              text-align: right;
              width: 100px;
              padding-top: 10px;
              padding-bottom: 10px;
            } 

            .div_deg
            {
              background-color: skyblue;
              width: 400px;
              padding-top: 70px;
              padding-bottom: 70px;

            }
            

           </style>
       
    </head>
<body>
 
    <?php

    include 'student_sidebar.php'

    ?>

    <div class="content">
        <center>

        <h1>Update Profile</h1>
        <br></br>

     <form action="#" method="POST">
      <div class="div_deg">
        
        <div>
          <label>Dob</label>
          <input type="text" name="DoB" value="<?php echo "{$info['DoB']}" ?>">
        </div>


        <div>
         <label>year</label>
         <input type="text" name="year" value="<?php echo "{$info['year']}" ?>">
        </div>


        <div>
         <label>Gender</label>
         <input type="text" name="Gender" value="<?php echo "{$info['Gender']}" ?>">
        </div>


        <div>
         <label>mother</label>
         <input type="text" name="mother" value="<?php echo "{$info['mother']}" ?>">
        </div>

        <div>
         <label>father</label>
         <input type="text" name="father" value="<?php echo "{$info['father']}" ?>">
        </div>



        <div>
         <label>Address</label>
         <input type="text" name="Address" 
         value="<?php echo "{$info['Address']}" ?>">
        </div>


        <div>
         <label>register</label>
         <input type="text" name="register" 
         value="<?php echo "{$info['register']}" ?>">
        </div>
     
        

        <div>
          <label>bloodgroup</label>
          <input type="text" name="bloodgroup" 
          value="<?php echo "{$info['bloodgroup']}" ?>">
        </div>


        <div>
          <label>adhar</label>
          <input type="number" name="adhar" 
          value="<?php echo "{$info['adhar']}" ?>">
        </div>

        <div>
         <label>email</label>
         <input type="email" name="email" 
         value="<?php echo "{$info['email']}" ?>">
        </div>


        <div>
           <label>Phone</label>
           <input type="number" name="phone" 
           value="<?php echo "{$info['phone']}" ?>">
        </div>


        <div>
           <label>Password</label>
           <input type="text" name="password" 
           value="<?php echo "{$info['password']}" ?>">
        </div>

        <div>

            <input type="submit" class="btn btn-primary" name="update_profile" value="Update">
        </div>    

        
      </div>
     </form>
        </center>

    </div>
    

</body>
</html>  

