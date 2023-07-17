<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-voting system</title>
    <link rel="stylesheet" href="../css/contact us.css">
</head>
<body>
    
 

    <nav>
         <a href="../index.php">Home</a>  
        <a href="register.php">Register</a>  
        <a href="login.php">Login </a>
        <a href="">FAQs</a> 
        <a href="contact us .php">Contact</a>
       
       
       </nav>

 
<form action="../api/contact.php" method = POST>
    <div> <img src="../css/logo2.jpg" alt="">
    </div>
    <h1>Get in touch</h1>
    <label for="User"> Enter Username</label>
    <input type="text" name="name" id="User " required><br>
    <label for="Email"> Enter E-mail </label>
        <input type="email" name="Enter Email" id="Enter Email" required><br>
       
       <label for="Message">Message</label>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name= "message" id="message" required><br>
      <label for="submit"></label>
      <input type="submit" value="submit">
     
      

   
</form>



    
</body>
</html>