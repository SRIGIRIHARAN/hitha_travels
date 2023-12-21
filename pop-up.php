
<?php
if(isset($_POST['sub']))
{
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $c=$_POST['t3'];

    $con=new mysqli("localhost","root","","hitha_travels");
    $sql="insert into popup(suname,sphone,smsg) values('$a','$b','$c')";

    if($con->query($sql)==TRUE)
    {   
        // $msg="successfully Added";
        // echo "<script> alert('$msg')</script>";
        header("location:index.php");
    }
    else{
        echo "error:" .$sql. "<br>". $con->error;
    }
    $con->close();
}
?>
