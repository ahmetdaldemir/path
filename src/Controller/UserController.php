<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationList;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\Model;

/**
 * Controller used to manage user resource.
 *
 * @Route("/users")
 *
 */
class UserController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/", name="users_index")
     * @Rest\View
     * @SWG\Response(
     *     response=200,
     *     description="List all users"
     * )
     */
    public function index()
    {
        $users = $this->getDoctrine()->getRepository('App\Entity\User')->findAll();
        return $users;
    }



}
