<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class AnswerController extends AbstractController
{
    #[Route('/api/answers', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            ['id' => 1, 'answer' => 'First answer'],
            ['id' => 2, 'answer' => 'Second answer'],
        ]);
    }

    #[Route('/api/answers', methods: ['POST'])]
    public function store(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        return $this->json([
            'message' => 'Answer created',
            'data' => $data
        ]);
    }

    #[Route('/api/answers/{id}', methods: ['PATCH'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        return $this->json([
            'message' => 'Answer updated',
            'id' => $id,
            'data' => $data
        ]);
    }

    #[Route('/api/answers/{id}', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Answer deleted',
            'id' => $id
        ]);
    }
}