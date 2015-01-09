<?php
	session_start();
?>
<!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if !IE]><html><![endif]-->
<html lang='en'>
<head>
	<title>San Jose</title>
	<?php include('./partials/headtags.php'); ?>
</head>
<body>
	<header id='secondary-header'>
		<h1>Choose into the space of possibility</h1>
	</header>
	<nav>
		<ul>
			<li><a href="./index.php">Home</a></li>
			<li><a href="./meetRenee.php">Meet Renee</a></li>
			<li><a href="./svc-bars.php">Services</a>
				<ul>
					<li><a href="./svc-bars.php">The Bars<sup>&reg</sup></a></li>
					<li><a href="./svc-body.php">Body Processes</a></li>
					<li><a href="./svc-beach.php">Beach Sessions</a></li>
					<li><a href="./svc-phone.php">Phone Sessions</a></li>
					<li><a href="./svc-SJ.php">San Jose Sessions</a></li>
				</ul>
			</li>
			<li><a href="./svc-phone.php">Contact</a>
				<ul>
					<li><a href="tel:1-408-218-5458">408-218-5458</a></li>
					<li><a href="mailto:renee.tennant@sbcglobal.net">renee.tennant@sbcglobal.net</a></li>
					<li><a href="./sanctuary.php">Secret Sanctuary</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<article>
		<section id='main' class='wrapper'>

			<h2>San Jose Bioenergy Balancing</h2>

			<p>Those of you who have come to know me through my work at the Bioenergy Balancing Center and Priscilla Kapel might appreciate working with a fellow practitioner and me in San Jose.</p>

			<p>Anna Spanjaart graduated with me from the Bioenergy Balancing training program in 2009.  We have come together this year to create our own "Balancing Center" in San Jose out of Anna's house.  The set-up is the same as in Palo Alto.  Anna and I will ask questions utilizing our Bioenergy Balancing training, and muscle test in partnership.</p>

			<p>Major crossroads close to Anna's house: Almaden Expressway and Camden Avenue.</p>

			<hr>

			<section class='pricing'>

				<h5>San Jose Sessions</h5>

				<p>The first hour is $100, the second is $60. We recommend booking for 1.5 hours ($130).</p>

			</section>

		</section>

		<section id='sidebar' class='wrapper'>
			<?php include('./partials/emailform.php'); ?>
		</section>

		<section>
			<?php include('./partials/footer.php'); ?>
		</section>

	</article>
</body>
</html>