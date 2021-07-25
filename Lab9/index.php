<html>
	<head></head> 
	<body>
		<form>
			<input id="uname" onkeyup="viewOutput(this)" type="text" placeholder="Username"><br> 
			<span id="op"></span> <br>
			<input type="password" placeholder="Password"><br>
		</form>
		<button id="btn_g" onclick="viewGoogle()">Login with Google</button>
		<br/><br/>
		<form id="g_form" style="display:none">
			<input type="text" placeholder="gmail"><br>
			<input type="password" placeholder="gmail password"><br>
		</form>
		<button onclick="turnOn()">Turn On</button>
		<img id="bulb" src="pic_bulboff.gif">
		<button onclick="turnOff()">Turn Off</button>
		<br/><br/>
		<span onmouseover="showinfo()" onmouseout="hideinfo()">Aiub</span>
		<p id="info" style="display:none">American International University-Bangladesh, commonly known by its acronym AIUB, is an accredited private university in Dhaka, Bangladesh. The university is an independent organization with own Board of Trustees.</p>
		<script src="index.js"></script>
	</body>
</html>
