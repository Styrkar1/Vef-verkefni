<?php include './includes/title.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Verkefni 2<?php echo "&#8212;{$title}"; ?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>		

	<?php include './includes/header.php' ?>
		
		<div id="wrapper">
		
			<main>
				<div id="content">
					<div class="innertube">
						<h1>The mountains.</h1>
<img src="img/mountain.jpg" alt="tan" style="width:340px;height:230px;"> 
<p><small>img by *name*</small></p>
						<h1>The landscape</h1>
<img src="img/landscape.jpg" alt="tan" style="width:340px;height:230px;"> 
<p><small>img by *name*</small></p>
						<h1>Etc...</h1>
					</div>
				</div>
			</main>
			
			<nav id="nav">
				<div class="Menu">
					
				<?php require './includes/Menu.php' ?>

			</nav>
		
		</div>
		
					<footer id="footer">
			<div class="innertube">
				<?php include './includes/footer.php'  ?>
			</div>
		</footer>
	
	</body>
</html>