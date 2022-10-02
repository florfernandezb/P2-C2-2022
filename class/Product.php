<?php

 class Product {

    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var int */
    protected $price;

    /** @var string */
    protected $category;

    /** @var string */
    protected $productDescription;

    /** @var string */
    protected $image;

    /** @var string */
    protected $imageDescription;

    /**
     * Product id getter 
     * @return int
     */
    public function getProductId(): int
    {
        return $this->id;
    }

    /**
     * Product id setter
     * @param int $id
     */
    public function setProductId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Product name getter
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Product name setter
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

   
    /**
     * Product price getter
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }
    /**
     * Product price setter
     * @param int $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * Product category getter
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    
    /**
     * Product description getter
     * @return string
     */
    public function getProductDescription(): string
    {
        return $this->productDescription;
    }
    /**
     * Product description setter
     * @param string $productDescription
     */
    public function setProductDescription(string $productDescription): void
    {
        $this->productDescription = $productDescription;
    }

    
    /**
     * Product image getter
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * Product image setter
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Image description getter
     * @return string
     */
    public function getImageDescription(): string
    {

        return $this->imageDescription;
    }
    /**
     * Image description setter
     * @param string $imageDescription
     */
    public function setImageDescription(string $imageDescription): void
    {
        
        $this->imageDescription = $imageDescription;
    }

    /**
     * Parse the array into an object of type product
     * @param array $json
     */
    public function parseDataFromArray(array $data) {
        $this->setProductId($data['id']);
        $this->setName($data['name']);
        $this->setPrice($data['price']);
        $this->setCategory($data['category']);
        $this->setProductDescription($data['productDescription']);
        $this->setImage($data['image']);
        $this->setImageDescription($data['imageDescription']);
    }
 }
