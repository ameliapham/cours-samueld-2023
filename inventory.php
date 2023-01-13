<?php
header("Access-Control-Allow-Origin: *");

$meubles = '
	[
		{
			"name": "Table",
			"price": 34
		},
		{
			"name": "Chaise",
			"price": 12
		}
    ]
';

$informatique = '
	[
		{
			"name": "Ordinateur",
			"price": 900
		},
		{
			"name": "Souris",
			"price": 9
        },
		{
			"name": "Clavier",
			"price": 80
        }
    ]
';

$decoration = '
	[
		{
			"name": "Tapis",
			"price": 90
		},
		{
			"name": "Lampe",
			"price": 50
        },
		{
			"name": "Tableau de Pablo Picasso",
			"price": 800000000
        },
    ]
';


if( $_GET["type"] == "meubles" ){
        echo $meubles;
}else if( $_GET["type"] == "informatique" ){
        echo $informatique;
}else if( $_GET["type"] == "decoration" ){
        echo $decoration;
}

  echo $json;
?>