<?php
// class Category figlia di Product , eredita classi e metodi da Product
class Category extends Product
{
    // proprietà
    protected string $name;
    protected string $icon;
    // costruttore
    public function __construct(string $_name, string $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }
    // setter e getter name
    public function setName(string $_name): void
    {
        $this->name = $_name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    // setter e getter icon
    public function setIcon(string $_icon): void
    {
        $this->icon = $_icon;
    }
    public function getIcon(): string
    {
        return $this->icon;
    }
}

$dog = new Category('Cane', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('Gatto', '<i class="fa-solid fa-cat"></i>');
$fish = new Category('Acquario', '<i class="fa-solid fa-fish-fins"></i>');
$bird = new Category('Uccelli', '<i class="fa-solid fa-crow"></i>');
$reptile = new Category('Rettili', '<i class="fa-solid fa-dragon"></i>');

// var_dump($dog);
// var_dump($cat);
// var_dump($fish);
// var_dump($bird);
// var_dump($reptile);

// echo $dog->getName();
