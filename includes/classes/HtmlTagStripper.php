<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HtmlTagStripper
 *
 * @author ariel
 */
class HtmlTagStripper {

    public static function stripHtmlTags($html)
    {
        $regEx = '/(<[a-z A-Z 0-9 ; = " : ]+>)(.*)(</[a-z A-Z 0-9 ; = " : ]+>)/';
        $matches;
        preg_match($regEx, $html, $matches, PREG_OFFSET_CAPTURE);
        return $matches[1];
    }
        
}

?>
