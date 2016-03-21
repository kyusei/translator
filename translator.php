<?php

require 'config.php';


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

<?php






llxFooter();

