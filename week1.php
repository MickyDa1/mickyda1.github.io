<!DOCTYPE html>
<html>
<head>
<!--  SET THE CHARACTER SET -->
<meta charset="UTF-8">
<!--  SET THE PAGE TITLE (SHOWN IN TAB ON CHROME)-->
<title>Session 1 - Server side programming</title>
<!--  SETUP SOME META DATA FOR THIS PAGE -->
<meta name="keywords" content="HTML,CSS,5230COMP">
<meta name="author" content="Dr Martin Hanneghan">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  INCLUDE OUR CSS STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="stylistic.css">
</head>

<body>

<?php date_default_timezone_set('Europe/London') ?>

<div id="wrapper">
	<header>
		<h1> 5230COMP - Mobile and Web Development </h1>
		<h3> Week 1 Lab practical</h3>
	</header>
	
	<nav>
		<ul>
			<li><a href="week1.php">Section1</a></li>
			<li><a href="../week2/week2.php">Section2</a></li>
			<li><a href="../week3/week3.php">Section3</a></li>
			<li><a href="../week4/week4.php">Section4</a></li>
			<li><a href="../week5/week5.php">Section5</a></li>
			<li><a href="../week6/week6.php">Section6</a></li>
			<li><a href="../week7/week7.php">Section7</a></li>
			<li><a href="../week8/week8.php">Section8</a></li>
			<li><a href="../week9/week9.php">Section9</a></li>
			<li><a href="../week10/week10.php">Section10</a></li>
			<li><a href="../week10/week10.php">Section11</a></li>
		</ul>	
	</nav>
	<?php function dateChecker($day, $month, $year){
		if(checkdate($month, $day, $year) == true){
			echo "that date is correct ". $month . ", " . $day . ", " . $year. "<br>";
		} else {
			echo "that date is incorrect ". $month . ", " . $day . ", " . $year . "<br>";
		}
	}?>

	<div id="main">
		<article id="a1">
			<h2>Task 2</h2>
				<p>
					Lore ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
					nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
					fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
					culpa qui officia deserunt mollit anim id est laborum
				</p>
		</article>
		
		<article>
			<h2>Task 3</h2>
				<p>posted on 14/01/2026 by Michael Norman <br>
				<p>Todays date is : <?php echo date('D, d, F, Y, O'); ?> <br>
				<p>My Birthday was on a <?php echo date('l', mktime(0,0,0,07,29,2003)) ?> </p> 
				
		</article>
		
		<article>
			<h2> Task 4 - Working with strings</h2>
			<?php $s = "AbCdEfGh"; ?>
			<?php echo "1) ".$s ?> <br>
			<?php echo "2) ".strtoupper($s) ?> <br>
			<?php echo "3) ".strToLower($s)?> <br>
			<?php echo "4) ".stripos($s,"d",0)?> <br>
			<?php echo "5) ".stripos($s, "Ef", 0)?> <br>
			<?php echo "6) ".substr($s,3,3)?><br>
			<?php echo "7) ". $s[2]?><br>
			<?php echo "8) ".strlen($s)?><br>
			<?php echo "9) ".bcsqrt("16",null)?> <br>
			<?php echo "10) ".abs(-1)?> <br>
			<?php echo "11) ". floor("4.2")?> <br> 
			<?php echo "12) ".min(9,3,5)?> <br>
			<?php echo "13) ".rand(0, 100)?> <br>
			<?php echo "14) ".pi() * (2*2)?><br>
			<?php echo "15) ".substr(pi(),5,1) ?><br> <br>

		</article>
		
		<article>
			<h2> Task 5 - More on strings</h2>
			<!-- do this in lesson -->
			<p> <?php 	
			    $s1 = "As I was going to Saint Ives, ";
	            $s2 = "I met a man with seven wives";
	            echo $s1.$s2."<br>";
				$s3 = $s1.$s2;


				echo stripos($s3, "seven", 0)."<br>";
				$pieces = explode(" ", $s3);
				for ($i = 0; $i <= 13 ; $i++){
					echo $pieces[$i]." <br>";
				}

				
                ?>

				<?php 
					dateChecker(30, 04, 1992). "<br>";
					dateChecker(31,04,1992). "<br>";
					dateChecker(29,02,1996). "<br>";

				?>

        	</p>
		</article>
		
		<article>
			<h2> Task 6 - Forms</h2>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="$_GET">
				<?php 

				if(!isset($_GET["name"]) || $_GET["name"] == null){
					echo "your name is: bob";				
				} else {
					echo "your name is: " . $_GET["name"];
				};
					?>
				 
				<br> What is your Name?: <input type="text" name="name" value="Fred"><br>
				<input type="submit">
				
			</form>
		</article>
		<?php 
			function lotteryNumbers(){
				$returned = (int)array();
				
				$num = mt_rand(1,59);

				if (!($returned.str_contains($returned, $num))){
					$returned = $num;
					echo $num . " ";
				}
			}
		?>
		<article>
			<h2> Task 8 - Random Lottery Numbers</h2>

			<?php
				for ($i = 0; $i <= 5; $i++){
					echo lotteryNumbers();
				}
			?>
		</article>
	</div>
</div>
</body>
</html>
