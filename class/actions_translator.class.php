<?php
/* <one line to give the program's name and a brief idea of what it does.>
 * Copyright (C) 2015 ATM Consulting <support@atm-consulting.fr>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * \file    class/actions_translator.class.php
 * \ingroup translator
 * \brief   This file is an example hook overload class file
 *          Put some comments here
 */

/**
 * Class Actionstranslator
 */
class Actionstranslator
{
	/**
	 * @var array Hook results. Propagated to $hookmanager->resArray for later reuse
	 */
	public $results = array();

	/**
	 * @var string String displayed by executeHook() immediately after return
	 */
	public $resprints;

	/**
	 * @var array Errors
	 */
	public $errors = array();

	/**
	 * Constructor
	 */
	public function __construct()
	{
	}

	/**
	 * Overloading the doActions function : replacing the parent's function with the one below
	 *
	 * @param   array()         $parameters     Hook metadatas (context, etc...)
	 * @param   CommonObject    &$object        The object to process (an invoice if you are in invoice module, a propale in propale's module, etc...)
	 * @param   string          &$action        Current action (if set). Generally create or edit or null
	 * @param   HookManager     $hookmanager    Hook manager propagated to allow calling another hook
	 * @return  int                             < 0 on error, 0 on success, 1 to replace standard code
	 */

	
    
    function addMoreActionsButtons($parameters, &$object, &$action,$hookmanager){
        ?>
        <div class="">
            <form method="post" name="formTranslator" action="translator.php">
                <table width=100%>
                    <tr class="liste_titre">
                        <td colspan=3>
                            <label>Traducteur :</label>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label>Saisissez langue d'arrivée : </label>
                        </td>
                        <td colspan=2 align="left">

                            <select name="lang">
                                <option name="opt1" value="Anglais">Anglais</option>
                            </select>
                        </td>
                </tr>
                    

                </table>
            </form>
            
            <table width=100%>
                    <tr class="liste_titre">
                        <td>
                            Texte avant traduction :
                        </td>
                        <td>
                            Texte traduit :
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea value='<?php $value_before?>' width="100%">
                            </textarea>
                        </td>
                        <td>
                            <textarea value='<?php $value_after?>' width="100%">
                            </textarea>
                        </td>
                    </tr>

                </table>
        </div>
        </br>
        
        <?php
    }
}