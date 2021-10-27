<?php
include("connection.php");
$one = $_POST["one"];
$two = $_POST["two"];
$three = $_POST["three"];
$four =  $_POST["four"];
$five =  $_POST["five"];
$comment= $_POST["comment"];
$game_day = $_POST["game_type"];
$sql="update lotto_numbers set f_number ='$one', s_number='$two',t_number='$three',fo_number='$four',fi_number='$five',text_comment='$comment',game_day='$game_day' where number_id=2";
$query=mysqli_query($conn,$sql);
if($query)
{
    echo("successfully updated");
}
else{
    echo("unable to update the database");
}