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

<h3>WELCOME ADMIN !</h3>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'D5')">D5</button>
  <button class="tablinks" onclick="openCity(event, 'D10')">D10</button>
  <button class="tablinks" onclick="openCity(event, 'D15')">D15</button>
  <button class="tablinks" onclick="openCity(event, 'D20')">D20</button>
</div>

<div id="D5" class="tabcontent">
  <h2>D5 SKILLS LIST</h2>
  <table style="width:50%">
  <tr>
    <th>Nname Of Student</th>
    <th>Phase</th> 
    <th>Current Level</th>
  </tr>
  <tr>
    <td><a href="#">Jatin Smith </a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L1</td>
  </tr>
  <tr>
    <td><a href="#">Eve Jackson</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L1</td>
  </tr>
  <tr>
    <td><a href="#">John Doe</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L2</td>
  </tr>
</table>
</div>

<div id="D10" class="tabcontent">
  <h2>D10 SKILLS LIST</h2>
  <table style="width:50%">
  <tr>
    <th>Nname Of Student</th>
    <th>Phase</th> 
    <th>Current Level</th>
  </tr>
  <tr>
    <td><a href="#">Jill Samrat</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L1</td>
  </tr>
  <tr>
    <td><a href="#">Evan Jackson</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L1</td>
  </tr>
  <tr>
    <td><a href="#">Johan Burg</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L2</td>
  </tr>
</table>
</div>

<div id="D15" class="tabcontent">
  <h2>D15 SKILLS LIST</h2>
  <table style="width:50%">
  <tr>
    <th>Nname Of Student</th>
    <th>Phase</th> 
    <th>Current Level</th>
  </tr>
  <tr>
    <td><a href="#">Inderjeet Saluja</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L1</td>
  </tr>
  <tr>
    <td><a href="#">Nisha Khubchandani</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L1</td>
  </tr>
  <tr>
    <td><a href="#">Joey Deo</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L2</td>
  </tr>
</table>
</div>

<div id="D20" class="tabcontent">
  <h2>D20 SKILLS LIST</h2>
  <table style="width:50%">
  <tr>
    <th>Nname Of Student</th>
    <th>Phase</th> 
    <th>Current Level</th>
  </tr>
  <tr>
    <td><a href="#">Raj Ramchandani</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L2</td>
  </tr>
  <tr>
    <td><a href="#">Raaj Jain</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L1</td>
  </tr>
  <tr>
    <td><a href="#">Johny John</a></td>
    <td><input type="checkbox" name="p_1" value="phase1">&nbsp PHASE 1 &nbsp 
	<input type="checkbox" name="p_2" value="phase2">PHASE 2 &nbsp 
	<input type="checkbox" name="p_3" value="phase3">PHASE 3 &nbsp </td>
    <td>L2</td>
  </tr>
</table>
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
