<?php

/**
* Load the proper language file and return the translated phrase
*
* The language file is JSON encoded and returns an associative array
* Language filename is determined by BCP 47 + RFC 4646
* http://www.rfc-editor.org/rfc/bcp/bcp47.txt
*
* @param string $phrase The phrase that needs to be translated
* @return string
*/

/**
* Define the url path for the resources
*/

define('INCLUDE_PATH', dirname(__FILE__) . '/collections');

/**
* Define the language using language code based on BCP 47 + RFC 4644,
* http://www.rfc-editor.org/rfc/bcp/bcp47.txt
*
* The language files can be found in directory 'lang'
*/
defined('LANGUAGE') or define('LANGUAGE', 'en-us');

function localize($phrase) {
    /* Static keyword is used to ensure the file is loaded only once */
    static $translations = NULL;
    /* If no instance of $translations has occured load the language file */
    if (is_null($translations)) {
        $lang_file = INCLUDE_PATH . '/' . LANGUAGE . '.txt';
        if (!file_exists($lang_file)) {
            $lang_file = INCLUDE_PATH . '/' . 'en-us.txt';
        }

        $lang_file_content = file_get_contents($lang_file, true);
        /* Load the language file as a JSON object and transform it into an associative array */
        $translations = json_decode($lang_file_content, true);
    }
    return $translations[$phrase];
}

?>