<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-voting system</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    
 

    <nav>
    <a href="../index.php">Home</a>  
        <a href="register.php">Register</a>  
        <a href="login.php">Login </a>
        <a href="faqs.html">FAQs</a> 
        
       
       
       </nav>

 <!-- <div>
     <h1>Welcome!!!</h1><br>
     <h3> Not voting is not a protest <br>
It's a surrender </h3>
Enter the E-mail sent to your Existing E-mail</div> -->
<form action="../api/login.php" method="POST">
    <h1>LOGIN</h1>
    <label for >Enter Phone Number</label>
    <input type="number" name="mobile" id="Enter number" placeholder="Enter Number" required><br>
        <label for="Password"> Enter Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="password" name="password" id="Enter Password" placeholder="Enter Password" required ><br>
       
        Choose Your Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select> <br><br>
                     
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br> <br>
        <p>
    Not Registered??? <a href="register.php">Register Now </a>  </p>
   
</form>



    
</body>
</html>