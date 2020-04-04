<?php
foreach ($listeNews as $news)
{
?>
<div class="news">
  <h2><a class="titrePrincipalNews" href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
  <p class="contenu"><?= nl2br($news['contenu']) ?></p>
</div>
<?php
}