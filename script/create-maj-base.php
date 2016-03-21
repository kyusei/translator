<?php
/*
 * Script créant et vérifiant que les champs requis s'ajoutent bien
 */

if(!defined('INC_FROM_DOLIBARR')) {
	define('INC_FROM_CRON_SCRIPT', true);

	require('../config.php');

}





dol_include_once('/translator/class/translator.class.php');
dol_include_once('/translator/class/translator_langs.class.php');


$PDOdb=new TPDOdb;

$o=new TTranslator($db);
$o->init_db_by_vars($PDOdb);

$l = new TTranslator_langs($db);
$l->init_db_by_vars($PDOdb);
