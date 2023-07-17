<?php
error_reporting (0);
    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["file"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $role = $_POST['role'];
   
    // Display status message
    echo $statusMsg;
    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    }
    else{
      
        $insert = mysqli_query($connect, "insert into user (name, mobile, password, address, status, votes, role) values('$name', '$mobile', '$pass', '$add', 0, 0, '$role') ");
       
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
   
        // Allow certain file formats
        //  $allowTypes = array('jpg','png','jpeg','gif','pdf');
        // if(in_array($fileType, $allowTypes)){
        // //     // Upload file to server
        //    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        //        // Insert image file name into database
        //        $insert1 =mysqli_query($connect,"INSERT into images (id,file_name,uploaded_on,status,user_id) VALUES (0,'".$fileName."',NOW(),0,0)");}
        //         if($insert1){
        //             $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
        //         }else{
        //             $statusMsg = "File upload failed, please try again.";
        //         } 
        //     }else{
        //         $statusMsg = "Sorry, there was an error uploading your file.";
        //     }
        // }else{
        //     $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        // }
  
       // }
       if (isset($_POST['submit'])&& isset($_FILES['image'])){
        echo "Hello";
       }
?>