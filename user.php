<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}
h3 {color: blue; 
			font-family: 'Lato', 
			sans-serif; 
			font-size: 30px; 
			font-weight: 300;
			line-height: 58px; 
			margin: 0 0 58px; }
/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
table, th, td {
    border: 1px solid red;
    border-collapse: collapse;
	
</style>
</head>
<body>

<h3>WELCOME USER !</h3>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'L0')">LEVEL 0</button>
  <button class="tablinks" onclick="openCity(event, 'L1')">LEVEL 1</button>
  <button class="tablinks" onclick="openCity(event, 'L2')">LEVEL 2</button>
  <button class="tablinks" onclick="openCity(event, 'L3')">LEVEL 3</button>
</div>

<div id="L0" class="tabcontent">
  <h2>LEVEL 0 REQUIREMENTS</h2>
  <p>Prerequisite</p>
  <p>1. You should have attended and completed any course in any of the programming language's with a valid <strong>certificate</strong>.<br>
	 2. You should have attained <strong>300 or more points</strong> in HackerRank by solving problems fully.<br>
	 <br>
	 If you think u meet the requirement then do as follows:<br>
	 <br>
	 1.UPLOAD YOUR VALID CERTIFICATE OF ANY COURSE YOU HAVE COMPLETED 
	<br></p>
	<input type="file" id="myFile">
	<p><strong>Note that it would be verified</strong><br><br>
	2. Give us the link to your profile on HackerRank to view the points you have scored! 
	<form method="post">
		LINK TO YOUR PROFILE: <input type="text" name="Link" ><br>
	</form></p> 
	<p>By clicking the<strong> SUBMIT</strong> button you agree that all Information and Documents provided by you are valid.<br></p>
	<input type="submit" value="Submit">
	<p>If you click the "Submit" button, the form-data will be sent to a our server !</p>
</div>

<div id="L1" class="tabcontent">
  <h2>LEVEL 1 REQUIREMENTS</h2>
  <p>Prerequisite</p>
  
</div>

<div id="L2" class="tabcontent">
  <h2>LEVEL 2 REQUIREMENTS</h2>
  <p>Prerequisite</p>
  
</div>

<div id="L3" class="tabcontent">
  <h2>LEVEL 3 REQUIREMENTS</h2>
  <p>Prerequisite</p>
  
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 
