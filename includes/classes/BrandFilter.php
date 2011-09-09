<?php
require_once dirname(__FILE__).'/IFilter.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BrandFilter
 *
 * @author ariel
 */
class BrandFilter implements IFilter{
    
    private $fieldName;
    private $value;
    
    public function __construct($value) {
        $this->fieldName = 'field_vehicle_brand';
        $this->value = $value;
    }
    
    public function meetsCondition($node)
    {
        
        $fieldName = $this->fieldName;
        $field = $node->$fieldName;
        return $field[0]['value'] == $this->value;
    }
    
    
}

?>
