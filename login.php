<?php
session_start();
if(isset($_POST['submit']))
{
    
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $con=mysqli_connect('localhost','root','','web');
    if($con==false)
    {
        echo "Error in connection";
    }
    else
    {
        
        $select="SELECT * FROM `check` WHERE `uname`='$uname'  AND `pass`='$pass' ";
        $query=mysqli_query($con,$select);
        $row=mysqli_num_rows($query);
        if($row==1)
        {
            
            // $data=mysqli_fetch_assoc($query);
            // $_SESSION['name']=$data['name'];
            ?>
            <script>
                alert("You have successfully logged in");
                window.open('user.html','_self');
            </script>
             <?php 
        }
        else
        {
            ?>
            <script>
                alert("Wrong Emailid and Password!! Try Again");
                window.open('index.html','_self');
            </script>
            <?php
        }
        
    }
}
?>
