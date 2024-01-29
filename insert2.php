<?php 
include("config.php");

if(isset($_POST['save_reg']))
{
	$uid = mysqli_real_escape_string($db, $_POST['uid']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
	
    if($name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	
    $query = "INSERT INTO login (uid,name,pass,email) VALUES('$uid','$name','$pass','$email')";
    $query_run = mysqli_query($db, $query);

       if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res);
        return;
    }
	
}

if(isset($_POST['form_tb']))
{
	$uid = mysqli_real_escape_string($db, $_POST['uid']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $phn = mysqli_real_escape_string($db, $_POST['phn']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $zip = mysqli_real_escape_string($db, $_POST['zip']);
	
    if($name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	
    $query = "INSERT INTO forms (uid,email,dob,phn,address,city,state,zip) VALUES('$uid','$email','$dob','$address','$city','$state','$zip')";
    $query_run = mysqli_query($db, $query);

       if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res);
        return;
    }
	
}
	  
?>