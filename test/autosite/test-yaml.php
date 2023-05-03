<?php

#require "Yaml.php";
require_once "Spyc.php";

$yaml=<<<_EOF_
---
Accueil
Guides :
 - Urgence décès
 - Déroulement des obsèques
 - Questions & réponses
Obsèques :
 - Préparation des funérailles
 - Inhumation
 - Crémation
Devis :
 - Obsèques
 - Marbrerie
 - Prévoyance
Avis de décès :
 - Liste des décès
 - Rechercher un décès
 - Rédiger des condoléances
A vos côtés :
 - Notre histoire
 - Nos valeurs
 - Contactez-nous
_EOF_;

$y = <<<_EOF_
---
product: jc
_EOF_;

#$parsed = yaml_parse($yaml);
#$parsed = Spyc::YAMLLoad('spyc.yaml');
$parsed = Spyc::YAMLLoadString($yaml);
var_dump($parsed);

?>
