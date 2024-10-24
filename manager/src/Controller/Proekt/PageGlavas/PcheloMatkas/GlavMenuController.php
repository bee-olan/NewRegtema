<?php

declare(strict_types=1);

namespace App\Controller\Proekt\PageGlavas\PcheloMatkas;

//use App\Model\Adminka\Entity\Uchasties\Personas\PersonaRepository;
//use App\Model\Adminka\Entity\Uchasties\Personas\Id as PersonaId;
//use App\Model\Adminka\Entity\Uchasties\Uchastie\Id;
//use App\Model\Adminka\Entity\Uchasties\Uchastie\UchastieRepository;
//use App\Model\Mesto\Entity\InfaMesto\MestoNomerRepository;
//use App\Model\Mesto\Entity\InfaMesto\Id as MestoNomerId;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("app/proekts/page_glavas/pchelomatka", name="app.proekts.page_glavas.pchelomatka")
 */
class GlavMenuController extends AbstractController
{

    /**
     * @Route("/show", name=".show")
     * @return Response
     */
    public function show(): Response
    {
        return $this->render('app/proekts/page_glavas/pchelomatka/show.html.twig');
    }

    /**
     * @Route("/spisok-instr", name=".spisok-instr")
     * @return Response
     */
    public function spisok(): Response
    {
        return $this->render('app/proekts/page_glavas/pchelomatka/spisok-instr.html.twig');
    }
}