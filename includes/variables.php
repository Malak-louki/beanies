<?php

$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.";
$beanies = [

    (new Beanie())
        ->setId(45)
        ->setName("bonnet en laine")
        ->setDescription($description)
        ->setPrice(10.0)
        ->setImage("img/bonnet_creme.jpg")
        ->setSizes(['M','L'])
        ->setMaterials(['coton']),

    (new Beanie())
        ->setId(39)
        ->setName("Bonnet en laine bio")
        ->setDescription($description)
        ->setPrice(14.0)
        ->setImage("img/bonnet_rouge.jpg")
        ->setSizes(['S','M','L'])
        ->setMaterials(['cachemire']),

    (new Beanie())
        ->setId(26)
        ->setName("Bonnet en laine et cachemire")
        ->setDescription($description)
        ->setPrice(20.0)
        ->setImage("img/bonnet_teal.jpg")
        ->setSizes(['S', 'M', 'L', 'XL'])
        ->setMaterials(['soie']),

    (new Beanie())
        ->setId(99)
        ->setName("Bonnet arc-en-ciel")
        ->setDescription($description)
        ->setPrice(12.0)
        ->setImage("img/bonnet_vert.jpg")
        ->setSizes(['S', 'M', 'L', 'XL'])
        ->setMaterials(['laine', 'soie']),
];
$password = 'malak123';
?>