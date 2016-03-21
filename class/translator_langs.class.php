<?php

class TTranslator_langs extends TObjetStd {
    
    
    function __construct(){
        
        
        $this->set_table(MAIN_DB_PREFIX.'translator_langs');    
        $this->add_champs('langue, code_langue','type=chaine;');
        
        $this->_init_vars();
        
        $this->start();
    }
    
}