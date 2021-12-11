<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Entry</title>
    <style media="screen">
      body{background-image: linear-gradient(to left, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);font-family: Arial, sans-serif;}
      h1{text-align: center;color:black;opacity: 0.9;padding: 20px;}
      form{margin-left:auto;margin-right:auto;width:600px;height:370px;background-image: linear-gradient(to right top, #2e73da, #9659cc, #d428a1, #f10062, #eb1212);
        padding-top:20px;font-size:18px;}
      table{margin-left:auto;margin-right:auto;}
      td{padding-bottom:30px;}
      input{width:250px;margin-left:30px;height:20px;}
      input:focus{border: none;resize: none;outline: none;border:3px solid DodgerBlue;}
      .submit_button{box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.24);font-size: 18px;
        border: 1px solid black;resize: none;outline: none;background-color: lime;width:150px;height:40px;color:black;opacity: 0.8;
       clear:right;margin-left:38%;margin-right:50%;
      }
      .submit_button:hover{opacity:1}
      .submit_button:focus{color:black;}
      img{width:60px;height:60px;float: left;position: absolute;top:30px;}
    </style>
  </head>
  <body>
    <h1>STUDENT DATA ENTRY</h1>
    <a href="homepage.html"><img src="home-button.svg" alt="home button"></a>
    <form action="http://localhost/Awt/action.php" method="post">
      <table>
        <tr>
          <td>Student Registration Number: </td><td><input type="text" name="regno" value=<?php
           if($_SERVER['REQUEST_METHOD']=='POST')
           {
             $data= $_POST['reg'];
             echo $data;
           }

           ?>></td>
        </tr>
        <tr>
          <td>Student Name: </td><td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
          <td>Computer Networks Marks: </td><td><input type="number" name="marks1" value=""></td>
        </tr>
        <tr>
          <td>Operating System Marks: </td><td><input type="number" name="marks2" value=""></td>
        </tr>
        <tr>
          <td>Software Engineering Marks: </td><td><input type="number" name="marks3" value=""></td>
        </tr>
      </table>
      <br>
      <input class="submit_button" type="submit" name="" value="SUBMIT">
    </form>
  </body>
</html>
