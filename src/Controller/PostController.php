<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostController extends AbstractController{
    #[Route('/post', name: 'app_post')]
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findBy([], ['createdAt' => 'DESC']);

        return $this->render('post/index.html.twig', [
            #'controller_name' => 'PostController',
            'posts' => $posts,

        ]);
    }
}
