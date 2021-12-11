<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Successful!</title>
    <style media="screen">
    #mid{padding: 20px;margin-left: 36%;margin-top: 5%;width:300px;;height: auto;}
    h2{text-align: center;}
    p{text-align: center;font-size: 20px;}
    #home{width:60px;height:60px;float: left;position: absolute;top:30px;}
    </style>
  </head>
  <body>
    <a href="homepage.html"><img id="home" src="home-button.svg" alt="home button"></a>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Mysql@1234";
    $database="db";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    $Registration_Number=$_POST['regno'];
    $Name=$_POST['name'];
    $Marks1=$_POST['marks1'];
    $Marks2=$_POST['marks2'];
    $Marks3=$_POST['marks3'];
    //check whether the student with same reg.no exits in database or not, if yes, then delete their data

    $sql= "select * from Student_info where Reg_no='$Registration_Number'";
    if ($result=mysqli_query($conn, $sql)) {
     if(mysqli_num_rows($result)>0)
     {
       $sql= "delete from Student_info where Reg_no='$Registration_Number'";
       if (mysqli_query($conn, $sql))
       {
         echo "";
       }
     }
     }

    $sql = "INSERT INTO Student_info (reg_no,name,Marks1,Marks2,Marks3)
    VALUES ('$Registration_Number','$Name','$Marks1','$Marks2','$Marks3')";

    if (mysqli_query($conn, $sql)) {
     echo "";
    } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
<div id="mid">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREt7BnJg-jZNLZBL0Ij5XMAS82X7oRV17ItQ&usqp=CAU" alt="Thank_You" width="300" height="300"><br>

<h2 >Thank You!</h2>
<p><?php echo $_POST['name']; ?>'s data has been saved.</p>
</div>
  </body>
</html>
