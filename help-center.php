<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['msg'];
   
    

    
    
    $con=mysqli_connect('localhost','root','','web');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        
        
        $insert="INSERT INTO `send`(`name`,`email`,`msg` ) VALUES ('$name','$email','$msg')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script>
                 alert("We will solve your problem as soon as possible");
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
    