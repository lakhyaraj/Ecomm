<?php
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $pass=$_POST['pass'];
   
    

    
    
    $con=mysqli_connect('localhost','root','','web');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        
        
        $insert="INSERT INTO `upass`(`fname`,`mname`,`lname`,`age`,`email`,`number`,`pass` ) VALUES ('$fname','$mname','$lname','$age','$email','$number','$pass')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script>
                 alert("Your Profile is updated");
                 window.open('login-form.html','_self');
                </script>
                
                
            <?php
            }
            else{
                echo "error";
            }
        
    }
        
}
?>
    