<?php
	require_once "./php/utils.php";
	require_once "./includes/g-config.php";

	$C = connect();
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	// $_SESSION['gender'] = $userData['gender'];
	// $_SESSION['picture'] = $userData['picture'];
	$uname = $userData['givenName'].' '.$userData['familyName'];
	$_SESSION['username']=$uname;
	// $_SESSION['givenName'] = $userData['givenName'];

   $email_var=$userData['email'];
	$res=mysqli_query($C,"select * from users where email='$email_var'");
	$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
			$_SESSION['userID']=$row['id'];
			$_SESSION['loggedin'] = true;
        // $_SESSION['NAME']=$row['name'];  ******required*******
        
if($check>0){
	header('Location: myaccount.php');

}else{
 $sql="insert into users (name,email,g_login,verified) values('".$uname."','".$userData['email']."','1','1')";
	mysqli_query($C,$sql);

	$res=mysqli_query($C,"select * from users where email='".$userData['email']."'");
	$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
			$_SESSION['userID']=$row['id'];
			$_SESSION['loggedin'] = true;
	if($check>0){
		header('Location: myaccount.php');
		exit();
	}else{
		header('Location: login.php');
		exit();
	}
}
?>