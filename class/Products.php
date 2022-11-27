<?php
require_once "DatabaseConection.php"; 

 class Products {

    /** @var int */
    protected $id;

    /** @var string */
    protected $name;
    
    /** @var int */
    protected $price;

    /** @var string */
    protected $available_date;

    /** @var string */
    protected $product_description;

    /** @var string */
    protected $image;

    /** @var string */
    protected $image_description;
    
    /** @var string */
    protected $product_measurements;

    /**
     * @return Products[]
     */
    public function getProducts(): array {
        $products = [];

        $db = (new DatabaseConection())->getConection();
        $query = "SELECT * FROM products;";

        $PDOStatement = $db->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $products = $PDOStatement->fetchAll();

        return $products;
    }
   

    public function getProductById(int $productId): ?Products
    {
        $query = "SELECT * FROM products WHERE id = $productId";

        $result = $this->executeQuery($query);

        if (!$result) {
            return null;
        }
        return $result;
    }

    public function getProductsByCategory(int $categoryId) {
        $products = [];

        $query = "SELECT category_id, GROUP_CONCAT(product_id) AS productos FROM product_x_category WHERE product_x_category.category_id= $categoryId GROUP BY product_x_category.category_id;";

        $result = $this->executeQuery($query);
        $values = explode(",", $result->productos);
        
        foreach ($values as $productId) {
            array_push($products, $this->getProductById((int)$productId));
        }

        if (!$result) {
            return null;
        }
        
        return $products;
    }
    
    /**
     * Product id getter 
     * @return int
     */
    public function getProductId(): int
    {
        return $this->id;
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
     * Product price getter
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * Product measurements getter
     * @return string
     */
    public function getMeasurements(): string
    {
        return $this->product_measurements;
    }
    
    /**
     * Product description getter
     * @return string
     */
    public function getProductDescription(): string
    {
        return $this->product_description;
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
     * Image description getter
     * @return string
     */
    public function getImageDescription(): string
    {

        return $this->image_description;
    }

    /**
     * Available Date getter
     * @return string
     */
    public function getDate(): string
    {

        return $this->available_date;
    }

    /**
     * Parse the array into an object of type product
     * @param array $json
     */
    // public function parseDataFromArray(array $data) {
    //     $this->setProductId($data['id']);
    //     $this->setName($data['name']);
    //     $this->setPrice($data['price']);
    //     $this->setCategory($data['category']);
    //     $this->setMeasurements($data['measurements']);
    //     $this->setProductDescription($data['productDescription']);
    //     $this->setImage($data['image']);
    //     $this->setImageDescription($data['imageDescription']);
    //     $this->setDate($data['availableDate']);
    // }

    protected function getDatabaseData(string $query): ?Products {
        $result = $this->executeQuery($query);
        return $result != null ? $result : null;
    }

    /**
     * execute Products querys
     * @return Products
     */
    protected function executeQuery(string $query): ?Products
    {
        $db = (new DatabaseConection())->getConection();
        
        $PDOStatement = $db->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();

        $result = $PDOStatement->fetch();

        if (!$result) {
            return null;
        }

        return $result;
    }
 }
 
    /**
     * Get product data by id
     * @param int $productId product identifier
     */

    // public function getProductById(int $productId): ?Products
    // {
    //     $db = (new DatabaseConection())->getConection();
    //     $query = "SELECT * FROM products WHERE id = $productId";

    //     $PDOStatement = $db->prepare($query);
    //     $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    //     $PDOStatement->execute();

    //     $result = $PDOStatement->fetch();

    //     if (!$result) {
    //         return null;
    //     }
    //     return $result;
    // }