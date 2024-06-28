<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    protected ?string $type = null;
    protected ?array $ingredients = [];
    protected ?int $data = null;
    // richiamno costruttore Product
    public function __construct(string $name, Category $category)
    {
        parent::__construct($name, $category);
    }
    // setter e getter
    public function setType(string $_type): void
    {
        $this->type = $_type;
    }
    public function getType(): string
    {
        return $this->type;
    }
    // setter e getter
    public function setIngredients(array $_ingredients): void
    {
        $this->ingredients = $_ingredients;
    }
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
    // setter e getter
    public function setData(int $_data): void
    {
        $this->data = $_data;
    }
    public function getData(): int
    {
        return $this->data;
    }
}

$croccantiniDog = new Food('Crocchette per cani', $dog);
$croccantiniDog->setIngredients(['Pollo', 'Manzo', 'Coniglio']);
$croccantiniDog->setPrice('29.99');

$croccantiniCat = new Food('Crocchette per gatti', $cat);
$croccantiniCat->setIngredients(['Verdure', 'Tonno', 'Latte']);
$croccantiniCat->setPrice('29.99');

$snackDog = new Food('Snack per cani', $dog);
$snackDog->setIngredients(['Cereali', 'Carni e derivati']);
$snackDog->setPrice('29.99');

$snackCat = new Food('Snack per gatti ', $cat);
$snackCat->setIngredients(['Cereali', 'Carni e derivati']);
$snackCat->setPrice('29.99');

// var_dump($croccantiniDog);
// var_dump($croccantiniCat);
