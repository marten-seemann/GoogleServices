<?php

/**
 *    This module is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This module is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    For further informations, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxidmodule.com
 * @link      http://www.shopmodule.com
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'             => 'd3_googleanalytics',
    'title'          => (class_exists(\D3\ModCfg\Application\Model\d3utils::class) ? \D3\ModCfg\Application\Model\d3utils::getInstance()->getD3Logo() : 'D&sup3;').
        ' Google Services Schnittstelle',
    'description'    => array(
        'de' => 'Dieses Modul stellt Ihnen die schnelle und unkomplizierte Einbindung Ihres Google-Analytics-'.
            'Kontos in Ihren Shop zur Verf&uuml;gung. Hierbei werden &uuml;ber standardisierte Schnittstellen die '.
            'Besucherdaten und eCommerce-Daten zu Google &uuml;bertragen. Ebenfalls &uuml;bermittelt werden Daten '.
            'der Website-Suche. Weiterhin k&ouml;nnen &uuml;ber das Modul Shopdaten an Google Adwords und Google '.
            'Trusted Shops &uuml;bertragen werden.',
        'en' => 'Provides a quick and easy integration with your Google Analytics, Google Adwords and Google '.
            'Trusted Shops account to your shop.',
    ),
    'thumbnail'      => 'picture.png',
    'version'        => '4.0.0.2',
    'author'         => 'D&sup3; Data Development (Inh. Thomas Dartsch)',
    'email'          => 'support@shopmodule.com',
    'url'            => 'http://www.oxidmodule.com/',
    'extend'         => array(
        'oxcmp_utils'  => 'd3/d3_googleanalytics/modules/components/d3_oxcmp_utils_googleanalytics',
        'oxbasket'     => 'd3/d3_googleanalytics/modules/models/d3_oxbasket_googleanalytics',
        'oxbasketitem' => 'd3/d3_googleanalytics/modules/models/d3_oxbasketitem_googleanalytics',
        'oxorder'      => 'd3/d3_googleanalytics/modules/models/d3_oxorder_googleanalytics',
        'order'        => 'd3/d3_googleanalytics/modules/controllers/d3_order_googleanalytics',
        'oxutilsview'  => 'd3/d3_googleanalytics/modules/core/d3_oxutilsview_googleanalytics',
        'thankyou'     => 'd3/d3_googleanalytics/modules/controllers/d3_thankyou_googleanalytics',
    ),
    'files'          => array(
        'd3_cfg_googleanalytics'               => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalytics.php',
        'd3_cfg_googleanalytics_adwords'       => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalytics_adwords.php',
        'd3_cfg_googleanalytics_campaigns'     => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalytics_campaigns.php',
        'd3_cfg_googleanalytics_licence'       => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalytics_licence.php',
        'd3_cfg_googleanalytics_list'          => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalytics_list.php',
        'd3_cfg_googleanalytics_main'          => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalytics_main.php',
        'd3_cfg_googleanalytics_trustedstore'  => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalytics_trustedstore.php',
        'd3_cfg_googleanalyticslog'            => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalyticslog.php',
        'd3_cfg_googleanalyticslog_list'       => 'd3/d3_googleanalytics/controllers/admin/d3_cfg_googleanalyticslog_list.php',
        'd3_google_remarketing_articlelister'  => 'd3/d3_googleanalytics/models/d3_google_remarketing_articlelister.php',
        'd3_google_trustedstore_articlelister' => 'd3/d3_googleanalytics/models/d3_google_trustedstore_articlelister.php',
        'd3_googleanalytics_update'            => 'd3/d3_googleanalytics/setup/d3_googleanalytics_update.php',
    ),
    'templates'      => array(
        'd3_googleanalytics.tpl'          => 'd3/d3_googleanalytics/views/tpl/widget/d3_googleanalytics.tpl',
        'd3ga_universal.tpl'              => 'd3/d3_googleanalytics/views/tpl/widget/d3ga_universal.tpl',
        'd3ga_universal_custom.tpl'       => 'd3/d3_googleanalytics/views/tpl/widget/inc/d3ga_universal_custom.tpl',
        'd3ga_universal_ecommerce.tpl'    => 'd3/d3_googleanalytics/views/tpl/widget/inc/d3ga_universal_ecommerce.tpl',
        'd3ga_universal_adwords.tpl'      => 'd3/d3_googleanalytics/views/tpl/widget/inc/d3ga_universal_adwords.tpl',
        'd3ga_universal_adwordscode.tpl'  => 'd3/d3_googleanalytics/views/tpl/widget/inc/d3ga_universal_adwordscode.tpl',
        'd3ga_universal_remarketing.tpl'  => 'd3/d3_googleanalytics/views/tpl/widget/inc/d3ga_universal_remarketing.tpl',
        'd3ga_universal_campaigncode.tpl' => 'd3/d3_googleanalytics/views/tpl/widget/inc/d3ga_universal_campaigncode.tpl',
        'd3ga_universal_trustedstore.tpl' => 'd3/d3_googleanalytics/views/tpl/widget/inc/d3ga_universal_trustedstore.tpl',

        'd3_cfg_googleanalytics_main.tpl'         => 'd3/d3_googleanalytics/views/admin/tpl/d3_cfg_googleanalytics_main.tpl',
        'd3_cfg_googleanalytics_adwords.tpl'      => 'd3/d3_googleanalytics/views/admin/tpl/d3_cfg_googleanalytics_adwords.tpl',
        'd3_cfg_googleanalytics_campaigns.tpl'    => 'd3/d3_googleanalytics/views/admin/tpl/d3_cfg_googleanalytics_campaigns.tpl',
        'd3_cfg_googleanalytics_trustedstore.tpl' => 'd3/d3_googleanalytics/views/admin/tpl/d3_cfg_googleanalytics_trustedstore.tpl',
    ),
    'events'         => array(
        'onActivate' => '\D3\ModCfg\Application\Model\Install\d3install::checkUpdateStart',
    ),
    'blocks'         => array(
        array(
            'template' => 'layout/base.tpl',
            'block'    => 'head_css',
            'file'     => '/views/blocks/layout/d3_base_googleanalytics.tpl',
        ),
        array(
            'template' => 'layout/base.tpl',
            'block'    => 'base_js',
            'file'     => '/views/blocks/layout/d3_base_googleadwordscode.tpl',
        ),
        array(
            'template' => 'layout/footer.tpl',
            'block'    => 'footer_main',
            'file'     => '/views/blocks/layout/d3_base_optout.tpl',
        ),
    ),
    'd3SetupClasses' => array(
        'd3_googleanalytics_update',
    ),
);
