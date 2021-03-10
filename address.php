<?php
if(isset($_POST['submit']))
{
    $country=$_POST['country'];
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $pin=$_POST['pin'];
    $ad=$_POST['ad'];
   
    

    
    
    $con=mysqli_connect('localhost','root','','web');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        
        
        $insert="INSERT INTO `address`(`country`,`name`,`mob`,`pin`,`ad` ) VALUES ('$country','$name','$mob','$pin','$ad')";
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
    