<!DOCTYPE html>

<html>
<head>
	<title> Darāmo lietu saraksts </title>
	<script>
			function setURL(url){	// ar setURL tiek pildita funkcija, kas maina adreses, attelotas iFrame rami.
			document.getElementById('iframe').src = url; //adrese tiek ievietota lauka ar defineto id 
			}
	</script>
	<link rel="stylesheet" type="text/css" href="style.css?version=51">
</head>

<body>
	<div class="header">
		<h2> Darāmo lietu saraksts </h2>
	</div>
	<div class="container">
		<iframe  class="iframe" id="iframe" src="task_list.php"></iframe>
	</div >
</body>
</html>