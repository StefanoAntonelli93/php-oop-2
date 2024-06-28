<?php
require_once __DIR__ . '/Product.php';

class Game extends Product
{
    protected ?string $size = null;
    protected ?string $materials = null;
    // richiamno costruttore Product
    public function __construct(string $name, Category $category)
    {
        parent::__construct($name, $category);
    }
    public function setSize(string $_size): void
    {
        $this->size = $_size;
    }
    public function getSize(): string
    {
        return $this->size;
    }
    public function setMaterials(string $_materials): void
    {
        $this->materials = $_materials;
    }
    public function getmaterials(): string
    {
        return $this->materials;
    }
}
// istanze
$peluche = new Game('Peluche', $dog);
$peluche->setBrand('Pedigree');
$peluche->setPrice('5.99');
$peluche->setDescription('gioco per animali');

$frisbee = new Game('Frisbee', $dog);
$frisbee->setBrand('Pedigree');
$frisbee->setPrice('2.99');
$frisbee->setDescription('gioco per animali');

$corda = new Game('Corda', $cat);
$corda->setBrand('Kong');
$corda->setPrice('2.99');
$corda->setDescription('gioco per animali');

$palla = new Game('Palla', $cat);
$palla->setBrand('Royal');
$palla->setPrice('5.99');
$palla->setDescription('gioco per animali');
