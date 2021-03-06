<?php
/**
* help.php - Réutilisation de la fonction help() du fichier /includes/help.php . on ne fait que (re)définir des entrées dans le array
 * @package Attaques
 * @author Verité
 * @link http://www.ogsteam.fr
 * @version : 0.8a
 */

//L'appel direct est interdit
if (!defined('IN_SPYOGAME')) die("Hacking attempt");

global $key;
$help["bbcode"] = "Pour insérer vos résultats sur un forum, selectionner le texte ci-dessous, copier le, puis coller le dans votre post.";
$help["ajouter_attaque"] = "Pour ajouter une nouvelle attaque copiez le rapport de combat dans le formulaire ci-dessous, puis cliquez sur envoyer.";
$help["changer_affichage"] = "Ici vous pouvez choisir la période d'affichage en cliquant sur les liens ou en entrant les dates manuellement.";
$help["resultats"] = "Ici vous pouvez consulter les résultats en fonction de l'affichage choisi, et les graphiques correspondants.";
$help["liste_attaques"] = "Ici vous pouvez voir la liste de vos attaques en fonction de l'affichage choisi.";
$help["ajouter_recy"] = "Pour ajouter un nouveau recyclage copiez le rapport de recyclage dans le formulaire ci-dessous, puis cliquer sur envoyer.";
$help["liste_recy"] = "Ici vous pouvez voir la liste de vos recyclages en fonction de l'affichage choisi.";
$help["Administration"] = "Modifiez les paramètres du modules";
$help["layer"] = "Permet d'afficher un fond semi-transparent au cas où l'image de fond de votre skin dimunuerais la lisibilité du module";
$help["transparence"] = "Mettez ici le pourcentage de transparence souhaité.<br>0%= complètement transparent<br>100%= complètement opaque.";
$help["bbcolor"] = "Vous pouvez modifier les couleurs utilisés dans les bbcodes de l'espace bbcode<br>Cliquez sur les roues de couleur pour faire apparaitre un sélecteur.";
$help["diffusion_rapports"] = "Autorise les autres utilisateurs à voir vos rapports";
$help["masquer_coord"] = "Masque les coordonn&eacute;es des attaques pour les autres joueurs";
