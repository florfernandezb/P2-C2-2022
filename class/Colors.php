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

    public function createColor(
        $color
    ) {
        $db = DatabaseConection::getConection();
        $query = "INSERT INTO `colors`
        (`color`) VALUES ('$color');
        SELECT MAX(id) AS id FROM categories";

        $PDOStatement = $db -> prepare($query);
        $PDOStatement -> execute();

        $getId = "SELECT MAX(id) AS id FROM colors";

        $PDOStatement = $db->prepare($getId);
        $PDOStatement -> execute();
        $result = $PDOStatement -> fetch();

        return $result['id'];
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