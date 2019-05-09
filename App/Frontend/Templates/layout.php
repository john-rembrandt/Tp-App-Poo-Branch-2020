<!DOCTYPE html>
<html>
<head>
<title id="title">
      <?= isset($title) ? $title : 'sk8 or die' ?>
</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="/css/styles.css" type="text/css" />
</head>

<body>
	<div id="page">
		<div id="headerNav">
			<div class="elementHeaderNav">
				<header>
					<h1 class="titrePrincipal">
						<a class="titre" href="/">tp-app-poo modif css</a>
					</h1>
					<p class="slogan">"sk8ordie Team"</p>
				</header>
			</div>

			<div class="elementHeaderNav">
				<nav>
					<ul class="classNavUl">
						<li class="accueil"><a href="/">Accueil</a></li>
						<li class="login"><a href="/admin/">Login</a></li>
                        	<?php if ($user->isAuthenticated()) { ?>
          
                        <li><a href="/admin/">Admin</a></li>
						<li><a href="/admin/news-insert.html">Ajouter une news</a></li>
						
                        	<?php } ?>
          
                     </ul>
				</nav>
			</div>
		</div>

		<div id="section">
			<div class="classection">
				<section>
				
          			<?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
          
          			<?= $content ?>
          			
        		</section>
			</div>
		</div>
	</div>
	<footer> </footer>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="/test.js"></script>
</body>
</html>