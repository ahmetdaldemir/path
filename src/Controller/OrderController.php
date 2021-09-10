<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\ConstraintViolationList;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\Model;

/**
 * Controller used to manage order resource.
 *
 * @Route("/orders")
 *
 */
class OrderController extends AbstractFOSRestController
{

    protected $ordersRepository;

    public function __construct(OrderRepository $ordersRepository)
    {
        $this->orderRepository = $ordersRepository;
    }


    /**
     * @Rest\Get("/", name="order_index")
     * @Rest\View
     * @SWG\Response(
     *     response=200,
     *     description="List all order"
     * )
     */
    public function index(Request $request)
    {
        $auth = $request->headers->get('Authorization');
        $customer = $this->getDoctrine()->getRepository('App\Entity\Customer')->findBy(array('token' => $auth));
        if ($customer) {
            $orders = $this->getDoctrine()->getRepository('App\Entity\Orders')->findAll();
            return $orders;
        } else {
            return new JsonResponse(['status' => 'Hatalı Token !'], Response::HTTP_CREATED);
        }
    }


    /**
     * @Rest\Post("/", name="orders_create")
     * @Rest\View
     * @SWG\Response(
     *     response=200,
     * )
     */
    public function create(Request $request)
    {
        $auth = $request->headers->get('Authorization');
        $customer = $this->getDoctrine()->getRepository('App\Entity\Customer')->findBy(array('token' => $auth));
        if ($customer) {
            $customerid = $request->request->get('customerid');
            $ordersCode = $request->request->get('orderCode');
            $address = $request->request->get('address');
            $shippingDate = $request->request->get('shippingDate');

            if (empty($customerid) || empty($ordersCode) || empty($address) || empty($shippingDate)) {
                throw new NotFoundHttpException('Expecting mandatory parameters!');
            }
            $newOrder = new Orders();
            $newOrder->setCustomerId($customerid);
            $newOrder->setOrderCode($ordersCode);
            $newOrder->setAddress(addslashes($address));
            $newOrder->setShippingDate($shippingDate);

            $this->orderRepository->saveOrder($newOrder);

            return new JsonResponse(['status' => 'ORdeer created!'], Response::HTTP_CREATED);
        } else {
            return new JsonResponse(['status' => 'Hatalı Token !'], Response::HTTP_CREATED);
        }

    }

    /**
     * @Rest\Post ("/", name="order_show")
     * @Rest\View
     * @SWG\Response(
     *     response=200,
     * )
     */
    public function show(Request $request)
    {
        $auth = $request->headers->get('Authorization');
        $customer = $this->getDoctrine()->getRepository('App\Entity\Customer')->findBy(array('token' => $auth));
        if ($customer) {
            $order  = $this->getDoctrine()->getRepository('App\Entity\Orders')->find($request->request->get('id'));
            return $order;
        }else{
            return new JsonResponse(['status' => 'Hatalı Token !'], Response::HTTP_CREATED);
        }
    }

    /**
     * @Rest\Post ("/", name="order_update")
     * @Rest\View
     * @SWG\Response(
     *     response=200,
     * )
     */
    public function update(Request $request)
    {
        $auth = $request->headers->get('Authorization');
        $customer = $this->getDoctrine()->getRepository('App\Entity\Customer')->findBy(array('token' => $auth));
        if ($customer) {

            $customerid = $request->request->get('customerid');
            $ordersCode = $request->request->get('orderCode');
            $address = $request->request->get('address');
            $shippingDate = $request->request->get('shippingDate');

            $date  = new \DateTime();
            $today = $date->format('Y-m-d');
            $order = $this->getDoctrine()->getRepository('App\Entity\Orders')->findBy(array('id' => $request->request->get('id')));
            if($order && $order->shipping_date > $today)
            {
                $order->setCustomerId($customerid);
                $order->setOrderCode($ordersCode);
                $order->setAddress(addslashes($address));
                $order->setShippingDate($shippingDate);
                $this->orderRepository->saveOrder($order);
                return new JsonResponse(['status' => 'Güncelleme Başarılı !'], Response::HTTP_CREATED);
            }else{
                return new JsonResponse(['status' => 'Kargo zamanı Doldu !'], Response::HTTP_CREATED);
            }
        }else{
            return new JsonResponse(['status' => 'Hatalı Token !'], Response::HTTP_CREATED);
        }
    }

    /**
     * @Rest\Delete(
     *     path = "/{id}",
     *     name = "orders_delete",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function delete(Orders $orders)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($orders);
        $em->flush();
        return $this->view("Specified order deleted", Response::HTTP_ACCEPTED);
    }
}
