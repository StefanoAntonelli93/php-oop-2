<?php

// creo class AnimalShop
class AnimalShop
{
    protected string $cibo;
    protected string $accessori;
    protected string $igiene;
    protected string $antiparassitari;
}

// creo class Dog che eredita Animal SHop
class Dog extends AnimalShop
{
    private string $cuccia;
}

$dog1 = new Dog();
var_dump($dog1);
echo '<hr>';

// creo class Cat che eredita Animal Shop
class Cat extends AnimalShop
{
    private string $lettiera;
}

$cat1 = new Cat();
var_dump($cat1);
