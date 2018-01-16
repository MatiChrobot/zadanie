<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @Route("/export")
     */
    public function exportAction()
    {
        
        return $this->render('default/index.html.php');
    }
}