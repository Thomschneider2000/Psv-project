<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Statistics</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="styles-hristo.css">
</head>

<body>
	<header class="header">
		<?php include "nav.php" ?>

		<div class="container">
		<div class="labels">
						<!-- <h5>30 APRIL 2023</h5> -->
						<!-- <h4>VS</h4> -->
						<div class="betLabel">
							<ul class="surrounding">
								<li class="labeltext">Statistics</li>
							</ul>
						</div>
					</div>
			<div class="container">
				<div class="img-container">
					<img class="graphs" src="assets/images/playerstats.svg"/>
					<div class="text-block">
						<h4>Player stats</h4>
					</div>
				</div>
				<div class="img-container">
					<img class="graphs" src="assets/images/matchstats.svg"/>
					<div class="text-block">
						<h4>Match stats</h4>
					</div>
				</div>
				<div class="img-container">
					<img class="graphs" src="assets/images/seasonstats.svg"/>
					<div class="text-block">
						<h4>Season stats</h4>
					</div>
				</div>
			</div>

		</div>
	</header>
</body>
<script src="assets/js/nav.js"></script>

</html>