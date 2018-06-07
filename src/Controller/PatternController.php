<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatternController extends Controller
{
    /**
     * @Route("/pattern", name="pattern")
     */
    public function index()
    {
        return $this->render('pattern/index.html.twig', [
            'controller_name' => 'PatternController',
        ]);
    }
    /**
     * @Route("/pattern/{id}", name="pattern_show")
     */
    public function show($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Pattern::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('pattern/index.html.twig', ['product' => $product]);
}
}
