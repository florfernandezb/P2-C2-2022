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

    public function getColorById($id) {

        $db = DatabaseConection::getConection();
        $query = "SELECT * FROM colors WHERE id = $id;";

        $PDOStatement = $db->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $color = $PDOStatement->fetch();

        if (!$color) {
            return null;
        }

        return $color;
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

    public function editColor(
        $id,
        $color,
    ) {
        $db = DatabaseConection::getConection();
        $query = "UPDATE colors SET color = :color  WHERE id = :id";

        $PDOStatement = $db->prepare($query);
        $PDOStatement->execute([
            ':id'=>$id,
            ':color'=>$color
        ]);
    }

    public function deleteColor($id)
    {
        $db = DatabaseConection::getConection();
        $query = "DELETE FROM colors WHERE id = :id";

        $PDOStatement = $db -> prepare($query);
        $PDOStatement -> execute(
            [

                'id' => $id
            ]
        );
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