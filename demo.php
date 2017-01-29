<?php

$a = 3;

function la_fonction_qui_affiche_8 () {
  $b = 8;
  print($b);
}

function la_fonction_qui_affiche_ce_qu_on_lui_donne($paramettre) {
  print($paramettre);
}

function la_fonction_qui_renvoie_3() {
  return 3;
}

la_fonction_qui_affiche_8();
print("\n");
la_fonction_qui_affiche_ce_qu_on_lui_donne($a);
print("\n");
la_fonction_qui_renvoie_3();
print("\n");
la_fonction_qui_affiche_ce_qu_on_lui_donne(la_fonction_qui_renvoie_3());
print("\n");
?>
