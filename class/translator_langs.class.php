<?php

class TTranslator_langs extends TObjetStd {
    
    
    function __construct(){
        
        
        $this->set_table(MAIN_DB_PREFIX.'translator_langs');    
        $this->add_champs('langue, code_langue','type=chaine;');
        
        $this->_init_vars();
        
        $this->start();
    }
    
    
    /*
    *Fonction qui affichera une listBox avec toutes les langues contenues dans la table translator_langs
    *
    */
    function select_langues($name){
        
        
    }
    
    
    /*
    *Fonction qui permettra d'ajouter un language en base de donnée.
    *
    */
    function add_language($name, $code){
        
    }
    
    
    /*
    *Fonction qui permettra de récupérer les languages en base de donnée.
    *
    */
    function fetch_language($code, $name=""){
        
    }
}