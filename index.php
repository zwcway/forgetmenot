<?php
// Users Array
$users = array(
	'admin' => 'pass',
	'username' => 'password'
);
/*
session_start();
$_SESSION['auth'] = false;
if (authenticate($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
	$_SESSION['auth'] = true;
	pass;
} else if (!isset($_SERVER['PHP_AUTH_USER']) || !$_SESSION['auth']) {
    header('WWW-Authenticate: Basic realm="Forgetmenot"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Wrong credentials!  Try again!';
    exit;
} else {
	echo 'Wrong credentials!  Try again!';
	exit;
}
function authenticate($user, $pass) {
	global $users;
	foreach ($users as $u => $p) {
		if($user == $u && $pass == $p) {
			return true;
		} else {
			return false;
		}
	}
}
*/
?>

<!doctype html>
<html lang="en">

<head>
  	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

  	<title>forgetmenot todo list | A ToDo List for the common forgetful-but-not-me.</title>
    
    <link rel="stylesheet" href="css/forgetmenot.css?v=1">
	<link rel="stylesheet" media="screen and (max-device-width: 480px)" href="css/forgetmenot-mobile.css?v=1">
	<script src="js/head.load.min.js"></script>
	
	<script src="js/json2.js"></script>
	<script src="js/jquery-1.6.2.min.js"></script>
	<script src="js/underscore-min.js"></script>
	<script src="js/backbone-min.js"></script>
<!--	<script src="js/backbone-localstorage.js"></script> -->
	<script src="js/forgetmenot.js"></script>
	
	<script type="text/javascript">
	/*
	head.js(
		{json2: "js/json2.js"},
		{jquery152: "js/jquery-1.6.2.min.js"},
		{underscore: "js/underscore-min.js"},
		{backbone: "js/backbone.js"},
		{backbonels: "js/backbone-localstorage.js"},
		{forgetmenot: "js/forgetmenot.js?v=0.1"}
	);
	*/
	</script>

</head>
<body>

    <div class="container" id="todoApp">
		<header>
	    	<h1>forgetmenot &weierp; todo list</h1>
			<img src="images/new.png" value="Create New" id="createNew" class="createNew" />
			
			<nav id="stats" class="clearfix">
				<!-- stats go here -->
			</nav>
		</header>
		<nav class="lists ">
			<div class="full">
				<h2>lists &#x2192;</h2>
				<ul id="fmn-lists">
					<li class="active"><a href="">today</a></li>
					<li><a href="">soon</a></li>
					<li><a href="">later</a></li>
				</ul>
			</div>
			<div class="compact">
				<h2><a href="">l<br/>i<br/>s<br/>t<br/>s</a></h2>
			</div>
		</nav>
		
    	<ul class="todoList fmn-todos" id="todoItemsList">
			<!-- #todoApp items go here -->
    	</ul>

    	<footer>
			
		</footer>


    </div>

    <!-- Templates -->
	
	<script type="text/template" id="stats-template">
		<span class="text"><%= done %> / <%= total %></span>
		<span id="clearCompleted">Clear Completed</span>
	</script>

    <script type="text/template" id="item-template">
		<div class="clearfix display <%= done == 1 ? 'done' : '' %>">
			<input type="checkbox" class="done" <%= done == 1 ? 'checked="checked"' : '' %>>
			<div class="content"><%= content %></div>
			<div class="delete">&nbsp;</div>
		</div>
		<div class="edit">
	        <input type="text" value="<%= content %>" class="input">
		</div>
    </script>


</body>
</html>
