<?php 
    include("dbconfig.php");
?>
<?php
    if(isset($_GET["yesdelete"]))
    {

         $del_id=$_GET["yesdelete"];
         
         $sql1="delete * from notification where post_usr='$uid'";

        
         if($result)
         {       echo '<script>alert("delete is gelukt");<script>';
                 header("location:notification.php");

         }

    }

?>