<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Horizontal Menu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/app.css">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header class="header">
        	<div class="logo">Horizontal Menu</div>
        </header>

        <section class="section">
        	<div class="container">
        		<h1> -- The "What's else?" Menu</h1>
        		<hr>
        		<nav id="hmenu">
        			<ul>
        			<?php
        			for ($i=0; $i < 5; $i++) { 
        			 	?>
        			 	<li><a class="menuCat" href="#">Categorie <?=$i?></a>
        					<ul class="hSubMenu">
        						<?php
        						for ($c=0; $c < 8; $c++) { 
        							?>
        							<li><a href=""><img src="http://lorempicsum.com/simpsons/350/200/<?=$c+$i+1?>" alt=""><span>Du text <?=$i.'-'.$c?></span></a></li>
        							<?php
        						}
        						?>
        					</ul>
        				</li>
        			 	<?php
        			} 
        		    ?>
        			</ul>
        		</nav>
        	</div>
        </section>

        <script src="js/jquery.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>