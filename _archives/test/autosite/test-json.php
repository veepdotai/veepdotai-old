<?php
	$jsonMenu = <<<_EOF_
[
    {
	"title": "Accueil"
    },
    {
	"title": "Guides",
	"submenu": [
	    {
		"title": "Urgence décès"
	    },
	    {
		"title": "Déroulement des obsèques"
	    }
	]
    },
    {
	"title": "Obsèques",
	"submenu": [
	    {
		"title": "Préparation des funérailles"
	    }
	]
    }
]
_EOF_;

	//echo 'Last error: ', json_last_error_msg(), PHP_EOL, PHP_EOL;

	echo $jsonMenu;

	$menu = json_decode($jsonMenu);
	echo "\n";
	echo "Debugging menu\n";
	foreach($menu as $item) {
		foreach($item as $title => $value) {
			if ($title !== "submenu") {
				echo $title . " => " . $value . PHP_EOL;
			} else {
			}
		}
	}
	echo "\n";


?>
