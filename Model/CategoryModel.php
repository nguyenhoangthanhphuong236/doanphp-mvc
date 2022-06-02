<?php
include_once './Model/Category.php';
include_once './Model/Database.php';

class CategoryModel extends Database
{

    public function __construct()
    {
        $this->connect();
    }

    public function find($id)
    {
        $sql = "select * from categories where id=? LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        $category = $stmt->fetch();
        return new Category(
            $category['id'],
            $category['name_room'],
            $category['description'],
            $category['quantity'],
            $category['image'],
            $category['price']
        );
    }

    public function all()
    {
        $sql = "select * from categories";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        $categories = array();

        foreach ($query as $category) {
            $categories[] = new Category(
                $category['id'],
                $category['name_room'],
                $category['description'],
                $category['quantity'],
                $category['image'],
                $category['price']
            );
        }

        return $categories;
    }

    public function delete($id)
    {
        $sql = "delete from categories where id = " . $id;
        $this->pdo->exec($sql);
    }

    public function create($attr = array())
    {
        $name_room = $attr['name_room'];
        $descripton = $attr['description'];
        $sql = "insert into categories(name_room, description) values('$name_room','$descripton')";

        $this->pdo->exec($sql);
    }

    public function update($attr = array())
    {
        $name_room = $attr['name_room'];
        $description = $attr['description'];
        $sql = "UPDATE categories set name= '$name_room', description= '$description' where id=" . $attr['id'];
        var_dump($sql);

        $this->pdo->exec($sql);
    }
}
