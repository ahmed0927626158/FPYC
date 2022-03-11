

<?php  include"logindex.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCSE</title>
    
<link rel="stylesheet" type="text/css" href="log.css">
    <style type="text/css">
   
    </style>



    
</head>


<body >
    
    <div class="log" style="margin-left:-200px;" >
        <div class="form-box">
            <!---->
            <div class="button-box">
                <div id="btn">
                 </div>
                <button type="button" name="studmove" class="toggle-btn" onclick="Student()">Student</button>
                <button type="button" name="adminmove" class="toggle-btn" onclick="Administrator()">Administrator</button>
            </div>
            <div class="log-text">
             <h2>LOGIN</h2>

        </div>

        <form id="Student" class="input-group" method="post">
         <p id="notifyStudent" style="color: red;font-size: 20px;font-family:bold"></p>
            <input type="text" name="sname" class="input-field" placeholder="Student Id or Username" required="required" autocomplete="of" >
            <input type="password" name="pass" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remeber Password</span>
            <button type="submit" name="studbutton" class="submit-btn">Login</button>
        </form>

        <form id="Administrator" class="input-group" method="post">
            <p id="notifyAdmin" style="color: red;font-size: 20px;font-family:bold"></p>
        <p id="notifyAdmin" style="color: red;font-size: 20px;font-family:bold"></p>
            <input type="text" name="Aname" class="input-field" placeholder="Username" required>
            <input type="password" name="Apass" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remeber Password</span>
            <button type="submit" name="adminbutton" class="submit-btn">Login</button>
        </form>
        </div>
        >
        
    </div>
    <script>
        var x = document.getElementById("Student");
        var y = document.getElementById("Administrator");
        var z = document.getElementById("btn");

        function Administrator(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function Student(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
        
    </script>
</body>
</html>
