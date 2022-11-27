<?php
class Categories {
    
    /** @var int */
    protected $id;
    
    /** @var string */
    protected $name;


    public function getCategories() {
        $categories = [];

        $db = (new DatabaseConection())->getConection();
        $query = "SELECT * FROM categories;";

        $PDOStatement = $db->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $categories = $PDOStatement->fetchAll();

        return $categories;
    }

    /**
     * Category id getter
     * @return int
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Category name getter
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}