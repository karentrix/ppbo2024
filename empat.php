<?php

require_once "Author.php";
require_once "Book.php";
require_once "Publisher.php";

$author=new Author();
$author->name="Risa Saraswati";
$author->description="Penulis buku";


$book=new Book;
$book->ISBN="9786022202363";
$book->title="Asih";
$book->description="-";
$book->language="Bahasa Indonesia";
$book->numberOfPage="194";
$book->author="Risa Saraswati";
$book->publisher="Bukune";

$publisher=new Publisher;
$publisher->name="Bukune";
$publisher->address="Jl. H. Montong No. 57 Ciganjur Jagakarsa Jakarta Selatan 12630";

print_r($book->showAll());
