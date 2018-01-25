<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ProductosController
{
    public function Productos()
    {
      $content = "Aqui iran los productos";
        return new Response($content);
    }
}
?>
