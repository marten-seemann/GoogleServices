<?php
/**
 * Module information
 */
$sMetadataVersion = '1,.0';
$aModule = array(
    'id'           => 'd3_googleanalytics',
    'title'        => oxLang::getInstance()->translateString('D3_GOOGLEANALYTICS_METADATA_TITLE'),
    'description'  => oxLang::getInstance()->translateString('D3_GOOGLEANALYTICS_METADATA_DESC'),
    'thumbnail'    => 'picture.png',
    'version'      => '2.2.3',
    'author'       => oxLang::getInstance()->translateString('D3_MOD_LIB_METADATA_AUTHOR'),
    'email'        => 'support@shopmodule.com',
    'url'          => 'http://www.oxidmodule.com/',
    'extend'      => array(
        'oxcmp_utils' => 'd3GoogleAnalytics/views/d3_oxcmp_utils_googleanalytics'
    )
);