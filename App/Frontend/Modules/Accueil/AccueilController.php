<?php

namespace App\Frontend\Modules\Accueil;

use OCFram\BackController;
use OCFram\HTTPRequest;

class AccueilController extends BackController
{
    public function executeIndex(HTTPRequest $request)
    {
        $helloWorld = 'salut le monde';
        $this->page->addVar('Hello-World', $helloWorld);
    }
}