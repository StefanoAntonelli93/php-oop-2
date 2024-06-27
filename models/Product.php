<?php
require_once __DIR__ . '/Category.php';
class Product
{
    // proprietà
    // passo Category attraverso composizione
    protected Category $category;
    protected string $name;
    protected float $price = 0;
    protected  ?string $description = null;
    // costruttore
    public function __construct(string $_name, Category $_category)
    {
        $this->name = $_name;
        $this->category = $_category;
    }
    // setter e getter
    public function setName(string $_name): void
    {
        $this->name = $_name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    // setter e getter
    public function setPrice(float $_price): void
    {
        $this->price = $_price;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    // setter e getter
    public function setDescription(string $_description): void
    {
        $this->description = $_description;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    // setter e getter
    public function setCategory(Category $_category): void
    {
        $this->category = $_category;
    }
    public function getCategory(): Category
    {
        return $this->category;
    }
}

$prodotto1 = new Product('Palla', $dog);
$prodotto2 = new Product('Guinzaglio', $dog);
var_dump($prodotto1);
