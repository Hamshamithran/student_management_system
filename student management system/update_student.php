<?php

session_start();
   
    if(!isset($_SESSION['username']))
    { 
       header("location:login.php");
    }

    elseif($_SESSION['usertype']=='student')
    {

    header("location:login.php");
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="student management system project";

    $data=mysqli_connect($host,$user,$password,$db);

    $id=$_GET['student_id'];

    $sql="SELECT * FROM user WHERE id='$id' ";

    $result=mysqli_query($data,$sql);

    $info=$result->fetch_assoc();

    if(isset($_POST['update']))
    {
       $name=$_POST['name'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $course=$_POST['course'];
       $password=$_POST['password'];
       $Dob=$_POST['Dob'];
       $register=$_POST['register'];
       $father=$_POST['father'];
       $mother=$_POST['mother'];
       $bloodgroup=$_POST['bloodgroup'];
       $adhar=$_POST['adhar'];
       $Gender=$_POST['Gender'];
       $year=$_POST['year'];
       $Address=$_POST['Address'];
       $password=$_POST['password'];

       $query="UPDATE user SET username='$name',register='$register',Dob='$Dob',Gender='$Gender',course='$course',year='$year',father='$father',mother='$mother',bloodgroup='$bloodgroup',adhar='$adhar',Address='$Address',email='$email',phone='$phone',password='password' WHERE id='$id' ";
    
       $result2=mysqli_query($data,$query);

       if($result2)
       {
           header("location:view_student.php");
       }


    
    }


?> 


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update student</title>

        <?php
    
    include 'admin_css.php';
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

include 'admin_sidebar.php';

?>

  
    <div class="content">
        <center>
       <h1>Update student</h1>

       <div class="div_deg">
           <form action="#" method="POST">
            <div>
                <label>Username</label>
                <input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
            </div>

            <div>
                <label>Dob</label>
                <input type="type" name="Dob" value="<?php echo "{$info['DoB']}"; ?>">
            </div>

            <div>
                <label>course</label>
                <input type="type" name="course" value="<?php echo "{$info['course']}"; ?>">
            </div>




            <div>
                <label>year</label>
                <input type="type" name="year" value="<?php echo "{$info['year']}"; ?>">
            </div>


            <div>
                <label>Gender</label>
                <input type="type" name="Gender" value="<?php echo "{$info['Gender']}"; ?>">
            </div>


            <div>
                <label>mother</label>
                <input type="type" name="mother" value="<?php echo "{$info['mother']}"; ?>">
            </div>

            <div>
                <label>father</label>
                <input type="type" name="father" value="<?php echo "{$info['father']}"; ?>">
            </div>


            <div>
                <label>Address</label>
                <input type="type" name="Address" value="<?php echo "{$info['Address']}"; ?>">
            </div>


            <div>
                <label>register</label>
                <input type="type" name="register" value="<?php echo "{$info['register']}"; ?>">
            </div>

          


            <div>
                <label>bloodgroup</label>
                <input type="type" name="bloodgroup" value="<?php echo "{$info['bloodgroup']}"; ?>">
            </div>


            <div>
                <label>adhar</label>
                <input type="type" name="adhar" value="<?php echo "{$info['adhar']}"; ?>">
            </div>

            <div>
                <label>email</label>
                <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
            </div>


            <div>
                <label>Phone</label>
                <input type="number" name="phone" value="<?php echo "{$info['phone']}"; ?>">
            </div>


            <div>
                <label>Password</label>
                <input type="text" name="password" value="<?php echo "{$info['password']}"; ?>">
            </div>

            <div>
        
                <input class="btn btn-success" type="submit" name="update" value="Update">
            </div>
           
           
           </form>

       </div>

    </center>
    </div>

</body>
</html>  