<?php

class Author
{
    public $name;
    public $description;
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function showAll()
    {
        return[
            'ISBN'=>$this->ISBN,
            'Title'=>$this->title,
            'Description'=>$this->description,
            'Language'=>$this->language,
            "Number Of Page"=>$this->numberOfPage,
            'Author'=>$this->author,
            'Publisher'=>$this->publisher,];
    }

    public function detail ($ISBN) 
    {
        if ($this->ISBN==$ISBN){
            return $this -> showAll();
        }
        return null;
    }
}

class Publisher
{
    public $name;
    public $address;
    private $phone;

    private function setPhone($phone)
    {
        $this->phone = $phone;
    }

    private function getPhone()
    {
        return $this->phone;
    }
}