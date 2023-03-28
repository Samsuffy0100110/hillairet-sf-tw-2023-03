<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    public function index(CategoryRepository $categories): Response
    {
        return $this->render('commons/_categories.html.twig', [
            'categories' => $categories->findAll(),
        ]);
    }

    public function gallery(CategoryRepository $categories): Response
    {
        return $this->render('components/_categories_gallery.html.twig', [
            'categories' => $categories->findAll(),
        ]);
    }
}
