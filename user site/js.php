<!DOCTYPE html>
<html>
<body>



<p id="demo">JavaScript can change HTML content.</p>
<p id="practice">hello world</p>
<button type="button"onclick='document.getElementById("practice").innerHTML="Hello JavaScript!"'>change</button>
<button type="button" onclick='document.getElementById("demo").innerHTML = "Hello JavaScript!"'>Click Me!</button>
<!--JavaScript Can Change HTML Styles -->
<p id="demo1">JavaScript can change the style of an HTML element.</p>
<!--JavaScript Can Change hide elements-->
<button type="button" onclick="document.getElementById('demo1').style.color='red'">Click Me!</button>
<p id="demo2">JavaScript can hide HTML elements.</p>

<button type="button" onclick="document.getElementById('demo2').style.display='none'">Click Me!</button>
<!--JavaScript Can Change display elements-->
<p id="demo3" style="display:none">diaplay data</p>

<button type="button" onclick="document.getElementById('demo3').style.display='block'">Click Me!</button>
</body>
</html>