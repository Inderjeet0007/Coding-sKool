<!--
 <?php
 $apiurl = 'http://codeforces.com/api/user.rating?handle=rahul.shetty';
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $apiurl);
 curl_setopt($ch, CURLOPT_HEADER, false);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
 $response = curl_exec($ch);
 curl_close($ch);

 $data = json_decode($response);
 $data = $data->result;
 #$data = $data->contestName;
var_dump($data);

?>
-->

<html>
	<head>
		<title>Coding'sKool</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style>
			h1 {color: red; 
			font-family: 'Lato', 
			sans-serif; 
			font-size: 54px; 
			font-weight: 300;
			text-align : center;
			line-height: 58px; 
			margin: 0 0 58px; }
			
			p { color: #adb7bd; 
			font-family: 'Lucida Sans', Arial, sans-serif; 
			font-size: 16px; 
			line-height: 26px; 
			text-indent: 30px; 
			margin: 0; }

			a { color: #fe921f; 
			text-decoration: underline; }

			a:hover { color: #ffffff }
			
			body {
			background-color: white;
			}
			form {
			border: 3px solid #f1f1f1;
		}

		/* Full-width inputs */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		/* Set a style for all buttons */
		button {
			background-color: red;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		/* Add a hover effect for buttons */
		button:hover {
			opacity: 0.8;
		}

		/* Extra style for the cancel button (red) */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Add padding to containers */
		.container {
			padding: 16px;
		}

		/* The "Forgot password" text */
		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
			.cancelbtn {
				width: 100%;
			}
			
		}
		</style>
	</head>
	<body>
		<h1>Coding'sKool</h1>
		<p>LOGIN BELOW</p>
		<div>
		<form method="POST">

			  <div class="container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" id="username" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" id="password" required>

				<button type="submit">Login</button>
			  </div>

			  <div class="container" style="background-color:#f1f1f1">
				<a href="index.html">HOME</a>
				<span class="psw">FORGOT<a href="forgot.php">PASSWORD?</a></span>
			  </div>
		</form>
		
	</body>
</html>