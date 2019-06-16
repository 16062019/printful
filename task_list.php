<?php
	$conn = mysqli_connect('localhost', 'root', '', 'printful7'); //izveidots savienojums ar mysql

	if (isset($_GET['del_task'])) { 
		$id = $_GET['del_task'];	// tiek ieguta informacija kurs id ir jadzes
		mysqli_query($conn, "DELETE FROM todo WHERE id=$id");
		header('location: task_list.php');
	}
	$todo = mysqli_query($conn, "SELECT * FROM todo");	// datubaze tiek atlasiti visi 'todo' esosie lauki
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css?version=51">
	</head>
	<body>
		<button class="button" onclick="parent.setURL('task_edit.php')"> Pievienot</button> <br>
	<?php while ($row = mysqli_fetch_array($todo)) { ?> <!-- izvada datu bazes elementus, kods tiek atkartoti generets lidz nav ko izvadit-->
	<table class="list">
			<tr>
			<th>
				<td style="font-weight:bold" class="task"><?php echo $row['task']; ?></td> <!-- virsraksts -->
				<td class="date" style="text-align: right;"><?php echo $row['date']; ?></td> <!-- datu ievades datums -->
			</th>
			</tr>
			<tr >
			<th >
				<td class="descr"><?php echo $row['description']; ?></td>	<!-- apraksts -->
				<td class="action">
					<a href="task_list.php?del_task=<?php echo $row['id']; ?>" class="del_btn">x</a> <!-- katrai nakosajai pogai tiek piesaistits datu bazes rindas id -->
				</td>
			</th>
			</tr>
	</table> <br>
			<?php } ?>
	</body>
</html>
