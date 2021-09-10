<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Hateoas\Configuration\Annotation as Hateoas;
use Swagger\Annotations as SWG;


/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Hateoas\Relation(
 *      "delete",
 *      href = @Hateoas\Route(
 *          "orders_delete",
 *          parameters = { "id" = "expr(object.getId())" },
 *          absolute = true
 *      )
 * )
 */
class Orders {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=50)
     * @Assert\NotBlank()
     *
     */
    private $customerid;


    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     */
    private $order_code;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $address;


    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     */
    private $shippingDate;




    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getOrderCode()
    {
        return $this->order_code;
    }
    /**
     * @param mixed $order_code
     */
    public function setOrderCode($order_code)
    {
        $this->order_code = $order_code;
    }
    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerid;
    }
    /**
     * @param mixed $customerid
     */
    public function setCustomerId($customerid)
    {
        $this->customerid = $customerid;
    }
    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    /**
     * @return mixed
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }
    /**
     * @param mixed $shippingDate
     */
    public function setShippingDate($shippingDate)
    {
        $this->shippingDate = $shippingDate;
    }
}