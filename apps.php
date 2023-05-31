<?PHP
include 'config.php';
session_start();
$id = $_SESSION['id'];
if(!isset($id))
{
header ("location: http://www.faceworld.io/index.php");	
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faceworld | Apps</title>
<link href="css/apps.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Faceworld is an utility that connects you to friends and family by location!">
<meta name="keywords" content="social, social network, network" />
<link rel="shortcut icon" href="http://www.faceworld.io/img/favicon.ico">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


</head>

<body>
<div id="wrapper">
<div id="bx1"></div>
  
  <div id="header">
    <div id="site_logo"><a class="white" href="http://www.faceworld.io/profile.php?id=<?PHP echo $id; ?>">Faceworld</a></div> <form action="http://www.faceworld.io/search_results.php" id="signupForm" method="post">
  <div id="textboxleft"> 
    <label>
      <input type="text" placeholder=" search..." name="search_data" id="search_data" />
    </label>
  </div>
    <div id="txtboxx"><input type="image" src="http://www.faceworld.io/img/find.png" alt="Submit" width="75" height="28"></form></div>
  <div id="rightboxitems"><b><a class="white" href="http://www.faceworld.io/apps.php?id=<?PHP echo $id; ?>"> Apps </a> | <a class="white" href="http://www.faceworld.io/home.php?id=<?PHP echo $id; ?>"> Home</a> | <a class="white" href="http://www.faceworld.io/profile.php?id=<?PHP echo $id; ?>"> Profile</a> | <a class="white" href="http://www.faceworld.io/find_friends.php?id=<?PHP echo $id; ?>">Find Friends</a> | <a class="white" href="http://www.faceworld.io/friends.php?id=<?PHP echo $id; ?>">Friends</a> | <a class="white" href="http://www.faceworld.io/friend_requests.php?id=<?PHP echo $id; ?>">Requests</a> | <a class="white" href="http://www.faceworld.io/log_out.php">Log out</a></b></div></div>
  <div id="cube">
    <div id="center">
      <div id="chat_box">
        <div id="titleline">
          <div id="ppbox"> 
            <p>Apps</p>
            <p>&nbsp;</p>
          </div>
        </div>
        <div id="iconboxs">
          <div id="5050boxes">
            <div id="box1"><a href="http://www.faceworld.io/ad-setup-1.php" target="http://www.faceworld.io/ad-setup-1.php" class="white"><img src="http://www.faceworld.io/img/heart_red.png" alt="" width="50" height="50" /></a></div>
          </div>
          <div id="wordsbox">
            <div id="centertextbox">
              <div id="word1"><b><a class="blue" href="http://www.faceworld.io/ad-setup-1.php">Advertising</a></b></div>
            </div>
          </div>
        </div>
      </div>
     
	  
</div></div>
  </div>
</div>

</body>

</html>

  
