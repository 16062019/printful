<?php
$conn = mysqli_connect('localhost', 'root', '', 'printful7'); //izveidots savienojums ar mysql

	if (isset($_POST['submit_btn'])) {	//aktivizejot pievienot pogu dati tiek sagatavoti ievadei datu baze
		$task = $_POST['task_input'];
		$descr = $_POST['descr_input'];
		
		if (empty($task) ) {
			$errors = "Ievadiet virsrakstu!";	//tuksa lauka klume, bridinajums
		}else {
			mysqli_query($conn, "INSERT INTO todo (task, description) VALUES ('$task', '$descr')");	//dati tiek ievaditi datu baze
			header('location: task_edit.php');	//tiek atsvaidzinata lapas adrese
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css?version=51">
</head>
	<form class = "forma" method="POST" action="task_edit.php">
	<?php if (isset($errors ) ) { ?>
		<p><?php echo $errors; ?></p>
	<?php } ?>
		<table class="input_table">
			<tr>
				<th><label>Virsraksts</label></th>
				<td><input type="text" name="task_input" class="task_input"><td>
			</tr>
			<tr>
				<th><label>Apraksts</label></th>
				<td><input type="text" name="descr_input" class="descr_input"></td>
			</tr>
		</table> <br>
		<button type="submit" name="submit_btn" class="submit_btn">Pievienot uzdevumu</button> <br>
		</form>
		<button onclick="parent.setURL('task_list.php')" class="back_btn"> Doties atpakal </button>
</html>