<?php
include("connection.php");
$useremail = mysqli_real_escape_string($conn,$_POST["useremail"]);
if($conn)
{
    $select = "select * from usersemails where email='$useremail'";
    $queselect = mysqli_query($conn,$select);
    while($show = mysqli_fetch_assoc($queselect))
    {   print("your Are Already Subscribed");
        exit();
    }
    if(!$show = mysqli_fetch_assoc($queselect))
    {
        $inse="insert into usersemails (email) values('$useremail')";
        $que=mysqli_query($conn,$inse);
        if($que){
            print("Thank You. Check your email soon");
        }
        else{
            print("error please try again");
        }
    }
    else{
print("error please try later");
    }
}
else{
  print("unable to connect to the server at the momment");
}
