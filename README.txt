choses faites:

1: création d' un cache simple, qui stock le réponse dans un fichier.
2: création de la class Cache.php.
3: Création d'un fichier de réception "fichierCache.php".
4: ajout de la class Cache.php au dossie lib/OCFram.
5: ajout d'une condition pour gérer le cache via la fonction send() de HTTPResponse.php.
6: ajout du fichier "fichierCache.php" dans lib/OCFram.(pour test, à changer d'urgence.).
7: ajout du fichier "fichierCache.php" dans les vues du module news.(pas sur encore du bien fondé).
8: ajout des fichier de définitions .dtd au dossiers Config.


choses a faires:

1: étendre les possibiltés de la class Cache.php.
2: se renseigner sur les system de cache réellement utilisé(celui-ci étant trop basique et pas performant).
3: revenir sur les tests du cache, il est a peine fonctionnel.