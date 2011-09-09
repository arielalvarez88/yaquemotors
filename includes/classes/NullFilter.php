<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NullFilter
 *
 * @author ariel
 */


require_once dirname(__FILE__).'/IFilter.php';
class NullFilter implements IFilter{

    
    public function __construct() {
       
    }
    
    public function meetsCondition($node)
    {
        return true;
    }
    
    
}

?>
