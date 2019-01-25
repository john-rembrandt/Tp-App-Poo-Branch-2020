<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : 'Mon super site' ?>
    </title>
    
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
  </head>
  
  <body>
    <div id="wrap">
      <div class="classheader">
      <header>
        <h1><a href="/">Mon super site</a></h1>
        <p>Comment ça, il n'y a presque rien ?</p>
      </header>
      </div>

      <div class="classnav">
      <nav>
        <ul>
          <li><a href="/">Accueil</a></li>
          <?php if ($user->isAuthenticated()) { ?>
          <li><a href="/admin/">Admin</a></li>
          <li><a href="/admin/news-insert.html">Ajouter une news</a></li>
          <?php } ?>
        </ul>
      </nav>
      </div>
      
      <div id="classection">
        <section>
          <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
          
          <?= $content ?>
        </section>
      </div>
    </div>
    <footer>
    </footer>
  </body>
</html>