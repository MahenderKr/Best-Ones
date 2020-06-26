 <?php

include "dbConn.php";


if(isset($_POST['submit']))
{   
    $Name = $_POST['Name'];
    $Language= $_POST['Language'];
  
$query="INSERT INTO moviesweb (Name,Language) VALUES ('$Name','$Language')";
    $insert = mysqli_query($db,$query);

    if(!$insert)
    {
        die('A ERROR OCCURED');
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); 
?>