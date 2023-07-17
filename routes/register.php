<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <nav>
        <a href="../index.php">Home</a>  
        <a href="register.php">Register</a>  
        <a href="login.php">Login </a>
        <a href="faqs.html">FAQs</a> 
        
       
       
       </nav>
    
    <p>
    <b> Instructions</b><br>
     You must be Pakistan's citizen for vote <br>
     <b>How To register to vote</b><br>
     Fill this form carefully.<br>
    Any type of wrong information may leads toward cancellation of Application<br>
    After submitting this from , you will receive the E-mail and password.<br>
     Use this E-mail and password for login<br>
     Don't share this E-mail to anyone, otherwise system is not responsible for anything<br>
     <b>Before filling out the form Kindly check</b><br>
     ...... Are you 18 years or old or not<br>
     .......Are you the citizen of pakistan ??




    
    </p>

    <form action="../api/register.php"    method="post" enctype="multipart/form-data">
        <label>Enter  Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" name="name"  id="Enter your name" placeholder="Enter Name" required>
          
         <label for >Enter Phone Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="number" name="mob" id="Enter number" placeholder="Enter Number" required><br>
        <label for="password">Enter Password</label>
        <input type="password" name="pass" id="password" placeholder="Enter Password" required>
        <label for=" confirm password"> Enter Confrim Password</label>
        <input type="password" name="cpass" id="cpassword" placeholder="Confirm Password" required><br>
        
            Choose Your Role
        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select> 

        <label for="Enter Address">Enter Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input  type="text" name="add" placeholder="add" required>
        
    </div><br>
    
    <label for="">Choose Image </label> <br><br>
        <div class="image">
       
        <input type="file" name="image" id="file" required></div><br>
       <input type="submit" name="submit" value="Upload" id="loginbtn">
                        <!-- <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br> -->
                
                
            
      

    </form>
</body>
</html>