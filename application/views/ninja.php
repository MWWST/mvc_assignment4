<?php 
?>
<html>
<head>
	<title>Ninja Gold</title>
	<link rel="stylesheet" href="./assets/css/skeleton.css">
	<style type="text/css">
	.gold {
		width:100;
		height:150;
		border: 1px solid black;
		padding:20px;
		margin-bottom: 20px;
		text-align: center;
	}

	.countgold {
		width:150px;
		height:50px;
		border: 1px solid black;
		padding:20px;
		margin-bottom: 20px;
	}
	.activities {
		border: 1px solid black;
		height:300px;
		width:900; 
	}

	p.earned {
		color: green;
	}

	p.lost {
		color: red;
	}

	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="countgold">Total Gold<?=$counter;?></div>
		</div>
		<div class="row">
			<div class="three columns gold">Farm <p>(earns 10-20 golds)</p>
				<form action="process_money" method="post">
					<input type="submit" value="Find Gold!">
					<input type="hidden" name="farmgold" value="farmgold">
				</form>
			</div>
			<div class="three columns gold">Cave <p>(earns 5-10 golds)</p>
					<form action="process_money" method="post">
					<input type="submit" value="Find Gold!">
					<input type="hidden" name="cavemgold" value="cavemgold">
			</form>
			</div>
			
			<div class="three columns gold">House <p>(earns 2-5 golds)</p>
					<form action="process_money" method="post">
					<input type="submit" value="Find Gold!">
					<input type="hidden" name="housemgold" value="housemgold">
			</form>
		</div>
			
			<div class="three columns gold">Casino<p>(+ or - 50 golds)</p>
				<form action="process_money" method="post">
					<input type="submit" value="Find Gold!">
					<input type="hidden" name="casinomgold" value="casinomgold">
				</form>
			</div>
				
		</div>
		<div class="row activities"> <h3>Activities</h3>
			<p class="earned"><?php var_dump($this->session->all_userdata());?></p>
			<p class="earned">Earned 15 golds from the farm! (2014/1/29 8:15PM)</p>
			<p class="earned">Earned 15 golds from the farm! (2014/1/29 8:15PM)</p>
			<p class="lost">Earned 50 ouch! (2014/1/29 8:15PM)</p>
			<p class="lost">Earned 30 outch from the farm! (2014/1/29 8:15PM)</p>
			
		</div>
	</div>
</body>
</html>