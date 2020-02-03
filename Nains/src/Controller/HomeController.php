<?php

namespace App\Controller;

use App\Entity\Mine;
use App\Repository\MineRepository;
use App\Repository\NainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/nain", name="nain")
     */
    public function home(NainRepository $repoN)
    {
        $nains = $repoN->getAll();
        return $this->render('home/nain.html.twig', [
            'nains' => $nains,
        ]);
    }

    /**
     * @Route("/mine", name="mine")
     */
    public function mine(MineRepository $repoM)
    {
        $mines = $repoM->getAll();
        return $this->render('home/mine.html.twig', [
            'mines' => $mines,
        ]);
    }
}
