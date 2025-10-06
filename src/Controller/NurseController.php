<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[Route('/nurse')]
final class NurseController extends AbstractController
{
    #[Route('/index', name: 'nurse_getAll')]
public function getAll(): JsonResponse
{
    $json_nurse = file_get_contents('nurses.json');
    $nurse_data = json_decode($json_nurse, associative: true);

    return new JsonResponse(data: $nurse_data, status: Response::HTTP_OK);
}

}