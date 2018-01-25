<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
      $content = "Aqui ira el index";
        return new Response($content);
    }
}
?>
