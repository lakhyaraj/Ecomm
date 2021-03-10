<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
   
    

    
    
    $con=mysqli_connect('localhost','root','','web');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        
        
        $insert="INSERT INTO `check`(`name`, `uname`, `email`,`pass` ) VALUES ('$name','$uname','$email','$pass')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script>
                 alert("Registed Succesfully In SCOTIE");
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
    