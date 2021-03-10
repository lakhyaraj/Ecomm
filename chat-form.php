<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
   
    

    
    
    $con=mysqli_connect('localhost','root','','web');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        
        
        $insert="INSERT INTO `chat`(`name`,`mob`,`email`,`msg` ) VALUES ('$name','$mob','$email','$msg')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script>
                 alert("MESSAGE SEND SUCESSFULLY");
                 window.open('done.html','_self');
                </script>
                
                
            <?php
            }
            else{
                echo "error";
            }
        
    }
        
}
?>
    