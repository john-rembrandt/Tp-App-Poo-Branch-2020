<?php

namespace OCFram;

class Cache
{
<<<<<<< HEAD
    public $fichierCache = __DIR__.'/fichierCache.php';
=======
    public $fichierCache = __DIR__.'/../../App/Frontend/News/Views/cache.html';
>>>>>>> 23f60aa43106788e6862a95fb0160c6f18373752
    
    
    public $donnee;
    
    
    public function executerCache()
    {
        
        if($this->dateCreationCache() == true)
        {
            $this->lireCache();
        }
        else
        {
            
             $this->creerCache($fichierCache, $data);
        }
    }

    public function lireCache()
    {
        readfile($this->fichierCache);
    }
    
    public function creerCache($fichierCache, $data)
    {
       file_put_contents($fichierCache, $data);

    }    
    public function dateCreationCache() 
    {
        $expire = time() -30; // valable dix seconde
        if(filemtime($this->fichierCache) > $expire)
        {
            echo date ("F d Y H:i:s.", filemtime($this->fichierCache));
            echo "on lit le cache";
            return true;
           
        }
        else
        {
            echo date("H:i:s.", filemtime($this->fichierCache));
            echo "on lance et on crée le cache en meme temps";
            return false;
        }
        
               
    }
    
    public function effacerCache($fichierCache)
    {
        file_put_contents($fichierCache, '');
    }
    
    public function insererVue($fichierCache)
    {
        
    }
}