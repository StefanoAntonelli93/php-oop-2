<?php
require_once __DIR__ . '/Category.php';
class Product
{
    protected $category;
    protected string $name;
    protected float $price = 0;
    protected  ?string $description = null;
}
