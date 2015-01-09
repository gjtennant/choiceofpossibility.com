<?php
	include('new_connection.php');
?>

<form id='joinEmailList' action="process.php" method="post">
	<ul>
		<li>
			<legend>Would you like to join my mailing list? I will respect your privacy.</legend>
		</li>
		<?php

			if(isset($_SESSION['errors']))
			{
				foreach ($_SESSION['errors'] as $error)
				{
					echo "<li class='error'> $error </li>";
				}
				unset($_SESSION['errors']);
			}

			if(isset($_SESSION['message']))
			{
				echo "<li class='message'>" . $_SESSION['message'] . "</li>";
				unset($_SESSION['message']);
			}
		?>
		<li>
			<label name='firstname'>First Name:
			<input type='text' name='firstname'>
		</li>
		<li>
			<label name='lastname'>Last Name:
			<input type='text' name='lastname'>
		</li>
		<li>
			<label name='email'>Email:
			<input type='email' name='email'>
		</li>
		<li>
			<input type='hidden' name='action' value='joinEmailList'>
			<input class='send' type='submit' value='Send'>
		</li>
	</ul>
</form>

