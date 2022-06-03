<?php

namespace App\Controller;

use App\Entity\Room;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends AbstractController
{
    /**
     * @Route("/rooms", name="rooms")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $rooms = $doctrine->getRepository(Room::class)->findAll();

        return $this->render('room/index.html.twig', compact('rooms'));
    }
}
