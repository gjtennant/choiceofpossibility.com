<?php
	include('new_connection.php');
?>

<section style="border:1px solid darkgray;padding:1em;border-radius:5px;">
	Want a healthy brain?
	<figure>
		<iframe width='100%' src="http://www.youtube.com/embed/DgGbFRjqQPk?rel=0&amp;showinfo=0&amp;autohide=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>Dr. Jeffrey Fannin on brain scans taken after a Bars session.</iframe>
		<figcaption>Dr. Jeffrey Fannin was pretty amazed at the results of one Access Bars session on the brain.  The EEG scan showed that Bars calmed the brain activity surprisingly quickly, and brought the brain into a less deviant state of coherence.  He further describes the results as "not only a total physical alignment, but also total alignment with the Universe."   Here is a scientist clearly excited by what he is seeing!</figcaption>
	</figure>
</section>

<br>

<form id='joinEmailList' action="process.php" method="post" style="border:1px solid darkgray;padding:1em;border-radius:5px;">
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

