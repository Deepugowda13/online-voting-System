<?php
    include ("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $usn = $_POST['usn'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

    if($password==$cpassword){
        move_uploaded_file($tmp_name, "../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, usn, password, photo, role, status, votes) VALUES ('$name','$mobile','$usn','$password','$image','$role', 0, 0)");

        if($insert){
            echo '
                <script>    
                    alert("Registration successful!");
                    window.location = "../";
                </script>       
            ';
        } 
        else {
            echo '
                <script>    
                    alert("Some error occurred");
                    window.location = "../routes/register.html";                    
                </script>
            ';
        }
    } 
    else {
        echo '
            <script>    
                alert("password and comfim password does not match");
                window.location = "../routes/register.html";
            </script>
        ';
    }
    
   
?>