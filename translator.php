<?php

require 'config.php';

dol_include_once('/class/translator.class.php');
dol_include_once('/class/translator_langs.class.php');
// Security check
$result=restrictedArea($user,'societe',0,'','','','');

$thirdparty_static = new Societe($db);


/*
 * View
 */
global $db, $user;

llxHeader();
print load_fiche_titre($transAreaType,$linkback);

//var_dump($_REQUEST);
$lang = GETPOST('lang');
$productid = GETPOST('productid');


$form = new Form($db);
$formCore = new TFormCore();
?>
    <div class="">
        <form method="post" name="formTranslator" action="translator.php">
            <table width="100%">
                <tr class="liste_titre">
                    <td colspan=3>
                        <label>Traducteur :</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisissez produit : </label>
                    </td>
                    <td colspan=2>
                        <?php 
                        print $form->select_produits();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisissez langue d'arrivée : </label>
                    </td>
                    <td colspan=2>
                            
                        <select name="lang">
                            <option name="opt1" value="Anglais">Anglais</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="submit">Traduire</button>
                    </td>
                </tr>
            </table>
        </form>
        
        
        
        
        
        <table width="100%">
            <tr class="liste_titre">
                <td width="50%">
                    base :
                </td>
                <td width="50%">
                    traduit :
                </td>
            </tr>
            
            <tr>
                <td width="50%">
                    <textarea value='<?php $value_before?>' width="100%">
                    </textarea>
                </td>
                <td width="50%">
                    <textarea value='<?php $value_after?>' width="100%">
                    </textarea>
                </td>
        </table>
        
    </div>


    <div>
        <form method="post" name="form_add_language" action="translator.php">
            <table width="100%">
                <tr class="ligne_titre">
                    <td colspan=4>
                    Ajout d'une traduction
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        Choisir la langue de départ :
                    </td>
                    <td colspan=2>
                        <?php
                        select_langues('langue_depart');
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        Choisir la langue d'arrivée :
                    </td>
                    <td colspan=2>
                        <?php
                        select_langues('langue_arrivee');
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Choisir le mot à traduire :
                    </td>
                    <td>
                        <input type="text" name="to_translate"></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        Choisir la traduction :
                    </td>
                    <td>
                        <input type="text" name="translated"></input>
                    </td>
                </tr>
                <tr>        
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="submit">Traduire</button>
                    </td>
                </tr>
            </table>
        </form>
        
    </div>

<?php






llxFooter();

