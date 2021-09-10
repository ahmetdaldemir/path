<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Service\Token;
use Namshi\JOSE\SimpleJWS;
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
use App\Repository\CustomerRepository;

/**
 * Controller used to manage customer resource.
 *
 * @Route("/customers")
 *
 */
class CustomerController extends AbstractFOSRestController
{

    private $customerRepository;

    protected $email;
    protected $password;
    protected $token;


    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }



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
        $customer = $this->getDoctrine()->getRepository('App\Entity\Customer')->findAll();
        return $customer;
    }

    /**
     * @Rest\Get("/", name="customer_login")
     * @Rest\View
     * @SWG\Response(
     *     response=200,
     * )
     */
    public function token(Request $request)
    {
        $this->email = $request->request->get('email');
        $this->password = $request->request->get('email');
        $customer = $this->getDoctrine()->getRepository('App\Entity\Customer')->findOneBy(array('email' => $this->email));
        if(!is_null($customer)){
          $ac = new SimpleJWS();
          $token = $ac->getTokenString();

            $customer->setToken($token);
            $updatedCostumer = $this->customerRepository->updateCustomer($customer);
            return  $token;
        }

    }

    /**
     * @Rest\Post(
     *     path = "/create",
     *     name = "customer_create"
     * )
     * @Rest\View
     * @ParamConverter("customer", class="array", converter="fos_rest.request_body")
     * @SWG\Response(
     *     response=201,
     *     description="Create new customer"
     * )
     */
    public function create(Customer $customer, ConstraintViolationList $violations)
    {
return $customer;
        if (count($violations)) {
           return $this->view($violations, Response::HTTP_BAD_REQUEST);
       }

        $em = $this->getDoctrine()->getManager();
        $em->persist($customer);
        $em->flush();

        return $this->view($customer, Response::HTTP_CREATED, [
          'Location' => $this->generateUrl('customer_show', [
            'id' => $customer->getId(), UrlGeneratorInterface::ABSOLUTE_URL
          ])
        ]);
    }

    /**
     * @Rest\Get(
     *     path = "/{id}",
     *     name = "customer_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     * @SWG\Response(
     *     response=202,
     *     description="Show customer's details"
     * )
     */
    public function show(Customer $customer)
    {
        return $this->view($customer, Response::HTTP_ACCEPTED, [
          'Location' => $this->generateUrl('customer_show', [
            'id' => $customer->getId(), UrlGeneratorInterface::ABSOLUTE_URL
          ])
        ]);
    }


}
