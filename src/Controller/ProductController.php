<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
 * Controller used to manage customer resource.
 *
 * @Route("/customers")
 *
 */
class ProductController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/", name="customer_index")
     * @Rest\View
     * @SWG\Response(
     *     response=200,
     *     description="List all customer"
     * )
     */
    public function index()
    {
        $product = $this->getDoctrine()->getRepository('App\Entity\Product')->findAll();
        return $product;
    }

    /**
     * @Rest\Post(
     *     path = "/create",
     *     name = "product_create"
     * )
     * @Rest\View
     * @ParamConverter(
     *     "product",
     *     converter="fos_rest.request_body",
     *     options={
     *         "validator"={ "groups"="Create" }
     *     }
     *)
     * @SWG\Response(
     *     response=201,
     *     description="Create new product"
     * )
     */
    public function create(Product $product, ConstraintViolationList $violations)
    {

        if (count($violations)) {
           return $this->view($violations, Response::HTTP_BAD_REQUEST);
       }

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->view($product, Response::HTTP_CREATED, [
          'Location' => $this->generateUrl('product_show', [
            'id' => $product->getId(), UrlGeneratorInterface::ABSOLUTE_URL
          ])
        ]);
    }

    /**
     * @Rest\Get(
     *     path = "/{id}",
     *     name = "product_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     * @SWG\Response(
     *     response=202,
     *     description="Show product's details"
     * )
     */
    public function show(Product $product)
    {
        return $this->view($product, Response::HTTP_ACCEPTED, [
          'Location' => $this->generateUrl('product_show', [
            'id' => $product->getId(), UrlGeneratorInterface::ABSOLUTE_URL
          ])
        ]);
    }

    /**
     * @Rest\Put(
     *     path = "/{productd}",
     *     name = "product_edit",
     *     requirements = {"productId"="\d+"}
     * )
     * @Rest\View
     * @ParamConverter(
     *     "product",
     *     converter="fos_rest.request_body",
     *     options={
     *         "validator"={ "groups"="Create" }
     *     }
     *)
     */
    public function edit(Product $product, ConstraintViolationList $violations, Request $request)
    {
        // $violations contient toutes les erreurs résultantes de la validation de productt.
        if (count($violations)) {
            return $this->view($violations, Response::HTTP_BAD_REQUEST);
        }

        $productToUpdate = $this->getDoctrine()->getRepository('App\Entity\Product')->find($request->get('productId'));
        if (null === $productToUpdate) {
           return $this->view("Specified product not found", Response::HTTP_NOT_FOUND);
        }

        $productToUpdate->setFirstname($product->getFirstname());
        $productToUpdate->setLastname($product->getLastname());

        $em = $this->getDoctrine()->getManager();
        $em->persist($productToUpdate);
        $em->flush();

        return $this->view($productToUpdate, Response::HTTP_ACCEPTED, [
          'Location' => $this->generateUrl('product_show', ['id' => $productToUpdate->getId(), UrlGeneratorInterface::ABSOLUTE_URL])
        ]);
    }

    /**
     * @Rest\Delete(
     *     path = "/{id}",
     *     name = "product_delete",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function delete(Product $product)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();
        return $this->view("Specified product deleted", Response::HTTP_ACCEPTED);
    }
}
