<?php
class Colors {
    
    protected $id;

    protected $color;


    public function getColors() {
        $colors = [];

        $db = DatabaseConection::getConection();
        $query = "SELECT * FROM colors;";

        $PDOStatement = $db->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $colors = $PDOStatement->fetchAll();

        return $colors;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getColor(): string
    {
        return $this->color;
    }

}