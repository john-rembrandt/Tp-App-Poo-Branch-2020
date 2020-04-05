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
  <div id="containerBody">
  
    <div id="containerHeader">
    
      <div class="elementHeader">
      
        <header> 
        
          <h1 class="titrePrincipalHeader">
          
          	<a class="titreHeader" href="/">tp-app-poo modif css</a>
          	
          </h1>
          
          	<p class="slogan">"sk8ordie Team"</p>
          	
        </header>
        
       </div>

      <div class="elementHeader">
      
        <nav>
        
          <ul class="NavUl">
          
            <li><a href="/accueil">Accueil</a></li>
            
            <li><a href="/">Accueil News</a></li>
            
            <li><a href="/admin/">Login</a></li>
            
            <?php if ($user->isAuthenticated()) { ?>

              <li><a href="/admin/">Admin</a></li>
              <li><a href="/admin/news-insert.html">Ajouter une news</a></li>

             <?php } ?>

          </ul>
          
        </nav>
        
      </div>
      
    </div>

    <div id="containerSection">
    
      <div class="section">
      
        <section>

          <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>

            <?= $content ?>

        </section>
        
      </div>
      
    </div>
    
  </div>
  
  <footer></footer>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="/test.js"></script>
  
</body>

</html>