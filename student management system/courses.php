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
?> 


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>

        <?php
    
    include 'admin_css.php';
    ?>
</head>
<body>

<?php

include 'admin_sidebar.php';

?>

  
    <div class="content">
       <h1> 
        Admin Dashboard
       </h1>
    </div>
    
<center>
<table class="w3-table w3-striped w3-border" cellpadding="10px" cellspacing="5px" border="3">
<h3><a href="guestlecturer.html"><font color=rgb(200,34,14)><Strong>  UG COURSES OFFERED</Strong></font></a></h3>
<tr>
    <th align="center"> <font color="maroon" size="4">PROGRAMME</font></th>
    <th align="center"><font color="maroon" size="4">DURATION</font></th>
    <th align="center"><font color="maroon" size="4">YEAR OF COMMENCEMENT</font></th>
    <th align="center"><font color="maroon" size="4">IN TAKE</font></th>
</tr>
<tr>
<td><a href="#"><strong>B.A. English</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2012</td>
<td><strong>60</td>
</tr>

<tr>
<td><a href="#"><strong>B.B.A.</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2012</td>
<td><strong>60</td>
</tr>
<tr>
<td><a href="#"><strong>B.Com.</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2012</td>
<td><strong>60</td>
</tr>
<tr>
<td><a href="#"><strong>B.Sc. Computer Science</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2012</td>
<td><strong>40</td>
</tr>
<tr>
<td><a href="#"><strong>B.Sc. Mathematics</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2012</td>
<td><strong>60</td>
</tr>
<tr>
<td><a href="#"><strong>B.A. Tamil</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2016</td>
<td><strong>60</td>
</tr>
<tr>
<td><a href="#"><strong>B.Sc. Physics</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2016</td>
<td><strong>40</td>
</tr>
<tr>
<td><a href="#"><strong>B.Sc. Chemistry</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2020</td>
<td><strong>40</td>
</tr>
<tr>
<td><a href="#"><strong>B.Sc. Botany</strong></td>
<td><strong>3 YEARS</strong></td> 
<td><strong>2020</td>
<td><strong>40</td>
</tr>

</table>


<!-- Footer-->
  
<footer>
       <h3 class="footer">All @copyright reserved by Asmithavadivel &#10084</h3>
        
</footer> 
  

</body>
</html> 