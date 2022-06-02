<?php
class Category {
    public $id;
    public $name_room;
    public $description;
    public $quantity;
    public $image;
    public $price;

    public function __construct($id, $name_room, $description, $quantity, $image, $price) {
        $this->id = $id;
        $this->name = $name_room;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->image = $image;
        $this->price = $price;
    }
}