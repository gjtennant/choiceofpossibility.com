<?php
	session_start();
	include('new_connection.php');
?>
<!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if !IE]><html><![endif]-->
<html lang="en">
<head>
	<title>Subscriber List</title>
	<?php include('./partials/headtags.php'); ?>
</head>
<body>
	<section id='main' class='wrapper'>

		<table>
			<tr>
				<th>First</th>
				<th>Last</th>
				<th>Email</th>
				<th>Date Joined</th>
			</tr>

			<?php 
				$query = "SELECT * FROM subscribers;";
				$subscribers = fetch_all($query);

				foreach($subscribers as $subscriber)
				{
					echo 
						"<tr>" . 
							"<td>" . $subscriber['firstname'] . "</td>" . 
							"<td>" . $subscriber['lastname'] . "</td>" . 
							"<td>" . $subscriber['email'] . "</td>" . 
							"<td>" . $subscriber['created_at'] . "</td>" . 
					  "</tr>";
				}
			 ?>
		</table>
	</section>
</body>
</html>