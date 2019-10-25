<?php
/**
 * Product
 */
interface Product
{
}

/**
 * Factory
 */
class Factory
{

    /**
     * @var Product
     */
    private $product;

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Returnează produsul nou prin clonare
     * @return Product
     */
    public function getProduct()
    {
        return clone $this->product;
    }
}

/**
 * Product
 */
class SomeProduct implements Product
{
    public $name;
}

// UTILIZAREA PROTOTIPULUI
// --------------------
$prototypeFactory = new Factory(new SomeProduct());

$firstProduct = $prototypeFactory->getProduct();
$firstProduct->name = 'Primul produs';

$secondProduct = $prototypeFactory->getProduct();
$secondProduct->name = 'Al doilea produs';

print_r($firstProduct->name);
// Primul produs
print_r($secondProduct->name);
// Al doilea produs