<?php

/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development - Daniel Seifert <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

class d3_googleanalytics_update extends d3install_updatebase
{
    public $sModKey = 'd3_googleanalytics';

    public $sModName = 'Google Analytics Schnittstelle';

    public $sModVersion = '3.1.0.1';

    public $sModRevision = '139';

    // heredoc syntax using for class members is available from PHP 5.3 up
    public $sBaseConf =
    "JycSFpDSXZYWEpRK1B2dERSbVg5VDVraUJ1VXBIOGpiY0NrY3M4Yzlrc1Q2Z2pPTms4SFRZODhGQTRwN
05QWktLUUozaXhSVVM2eU9VdWdMdklpL2hrV29YMS9lY1BMOUVsYjBiMmJOKzFQSjgzRGlqOGlwMUVVN
UxJY0plT3lBNkptc0VwcXNZT3YzY2hUTTB2QlF6RUIrbTJtVXRmNkppcTJreUJVd0xaUGI1RytmN1VkM
zBaTjNxQkZ5dTg0c05qRUcreDV0WFo0WFZrWjlZd1ltMVpJOTQybDYvQkNDWmVPQzRSdHkrOXpwMld6a
VVFTTBLWjRLTG1uT3k3ZUxXVUYwZlVCR2lQT0ZBWFRVZkd6UmtrOUN0bnFRczdzMnRudHAvMGttaGlhd
EE9";

    public $sRequirements = '';

    public $sBaseValue = 'TyUzQTglM0ElMjJzdGRDbGFzcyUyMiUzQTMwJTNBJTdCcyUzQTIxJTNBJTIyZDNfY2ZnX21vZF9fc0QzR0FUeXBlJTIyJTNCcyUzQTklM0ElMjJ1bml2ZXJzYWwlMjIlM0JzJTNBMTklM0ElMjJkM19jZmdfbW9kX19zRDNHQUlkJTIyJTNCcyUzQTAlM0ElMjIlMjIlM0JzJTNBMjklM0ElMjJkM19jZmdfbW9kX19ibEQzR0FBbm9ueW1pemVJUCUyMiUzQnMlM0ExJTNBJTIyMSUyMiUzQnMlM0EyNyUzQSUyMmQzX2NmZ19tb2RfX2lEM0dBU2FtcGxlUmF0ZSUyMiUzQnMlM0EzJTNBJTIyMTAwJTIyJTNCcyUzQTM1JTNBJTIyZDNfY2ZnX21vZF9fYmxEM0dBVHJhY2tQYWdlTG9hZFRpbWUlMjIlM0JzJTNBMSUzQSUyMjAlMjIlM0JzJTNBMzYlM0ElMjJkM19jZmdfbW9kX19pRDNHQVNpdGVTcGVlZFNhbXBsZVJhdGUlMjIlM0JzJTNBMSUzQSUyMjElMjIlM0JzJTNBMzIlM0ElMjJkM19jZmdfbW9kX19ibEQzR0FVc2VSZW1hcmtldGluZyUyMiUzQnMlM0ExJTNBJTIyMCUyMiUzQnMlM0EzMSUzQSUyMmQzX2NmZ19tb2RfX2JsRDNHQVNlbmRFQ29tbWVyY2UlMjIlM0JzJTNBMSUzQSUyMjAlMjIlM0JzJTNBMjYlM0ElMjJkM19jZmdfbW9kX19ibEQzR0FVc2VOZXR0byUyMiUzQnMlM0ExJTNBJTIyMCUyMiUzQnMlM0EzNSUzQSUyMmQzX2NmZ19tb2RfX2JsRDNHQUFsbG93RG9tYWluTGlua2VyJTIyJTNCcyUzQTElM0ElMjIwJTIyJTNCcyUzQTMwJTNBJTIyZDNfY2ZnX21vZF9fc0QzR0FTZXREb21haW5OYW1lJTIyJTNCcyUzQTAlM0ElMjIlMjIlM0JzJTNBMzAlM0ElMjJkM19jZmdfbW9kX19zRDNHQVNldENvb2tpZVBhdGglMjIlM0JzJTNBMCUzQSUyMiUyMiUzQnMlM0EzMSUzQSUyMmQzX2NmZ19tb2RfX2JsRDNHQVNldENsaWVudEluZm8lMjIlM0JzJTNBMSUzQSUyMjAlMjIlM0JzJTNBMzIlM0ElMjJkM19jZmdfbW9kX19ibEQzR0FTZXREZXRlY3RGbGFzaCUyMiUzQnMlM0ExJTNBJTIyMCUyMiUzQnMlM0EzMiUzQSUyMmQzX2NmZ19tb2RfX2JsRDNHQVNldERldGVjdFRpdGxlJTIyJTNCcyUzQTElM0ElMjIwJTIyJTNCcyUzQTMxJTNBJTIyZDNfY2ZnX21vZF9fYmxEM0dBVXNlQ3VzdG9tVmFycyUyMiUzQnMlM0ExJTNBJTIyMCUyMiUzQnMlM0EzNCUzQSUyMmQzX2NmZ19tb2RfX2JsRDNHQVNldENhbXBhaWduVHJhY2slMjIlM0JzJTNBMSUzQSUyMjAlMjIlM0JzJTNBMzAlM0ElMjJkM19jZmdfbW9kX19ibEQzR0FTZXRDYW1wTm9LZXklMjIlM0JzJTNBMSUzQSUyMjAlMjIlM0JzJTNBMjklM0ElMjJkM19jZmdfbW9kX19zRDNHQVNldENhbXBJZEtleSUyMiUzQnMlM0EwJTNBJTIyJTIyJTNCcyUzQTMxJTNBJTIyZDNfY2ZnX21vZF9fc0QzR0FTZXRDYW1wTmFtZUtleSUyMiUzQnMlM0EwJTNBJTIyJTIyJTNCcyUzQTMzJTNBJTIyZDNfY2ZnX21vZF9fc0QzR0FTZXRDYW1wTWVkaXVtS2V5JTIyJTNCcyUzQTAlM0ElMjIlMjIlM0JzJTNBMzMlM0ElMjJkM19jZmdfbW9kX19zRDNHQVNldENhbXBTb3VyY2VLZXklMjIlM0JzJTNBMCUzQSUyMiUyMiUzQnMlM0EzMSUzQSUyMmQzX2NmZ19tb2RfX3NEM0dBU2V0Q2FtcFRlcm1LZXklMjIlM0JzJTNBMCUzQSUyMiUyMiUzQnMlM0EzNCUzQSUyMmQzX2NmZ19tb2RfX3NEM0dBU2V0Q2FtcENvbnRlbnRLZXklMjIlM0JzJTNBMCUzQSUyMiUyMiUzQnMlM0EzOSUzQSUyMmQzX2NmZ19tb2RfX2JsRDNHQVNldENvbnZlcnNpb25UcmFja2luZyUyMiUzQnMlM0ExJTNBJTIyMCUyMiUzQnMlM0EzNSUzQSUyMmQzX2NmZ19tb2RfX3NEM0dBQWRXb3JkQ29udmVyc2lvbklkJTIyJTNCcyUzQTAlM0ElMjIlMjIlM0JzJTNBMzglM0ElMjJkM19jZmdfbW9kX19zRDNHQUFkV29yZENvbnZlcnNpb25MYWJlbCUyMiUzQnMlM0EwJTNBJTIyJTIyJTNCcyUzQTMyJTNBJTIyZDNfY2ZnX21vZF9fYmxEM0dBU2V0UmVtYXJrZXRpbmclMjIlM0JzJTNBMSUzQSUyMjAlMjIlM0JzJTNBNDAlM0ElMjJkM19jZmdfbW9kX19zRDNHQVJlbWFya2V0aW5nQ29udmVyc2lvbklkJTIyJTNCcyUzQTAlM0ElMjIlMjIlM0JzJTNBNDMlM0ElMjJkM19jZmdfbW9kX19zRDNHQVJlbWFya2V0aW5nQ29udmVyc2lvbkxhYmVsJTIyJTNCcyUzQTAlM0ElMjIlMjIlM0IlN0Q=';

    protected $_aUpdateMethods = array(
        array(
            'check' => 'checkModCfgItemExist',
            'do'    => 'updateModCfgItemExist'
        ),
        array(
            'check' => 'checkContentGANoticeItemExist',
            'do'    => 'updateContentGANoticeItemExist'
        ),
        array(
            'check' => 'checkModCfgSameRevision',
            'do'    => 'updateModCfgSameRevision'
        ),
    );

    protected $_aRefreshMetaModuleIds = array('d3_googleanalytics');

    /**
     * @return bool
     */
    public function checkModCfgItemExist()
    {
        $blRet = false;
        foreach ($this->_getShopList() as $oShop) {
            /** @var $oShop oxshop */
            $aWhere = array(
                'oxmodid'       => $this->sModKey,
                'oxnewrevision' => $this->sModRevision,
                'oxshopid'      => $oShop->getId(),
            );

            $blRet = $this->_checkTableItemNotExist('d3_cfg_mod', $aWhere);

            if ($blRet) {
                return $blRet;
            }
        }

        return $blRet;
    }

    /**
     * @return bool
     */
    public function updateModCfgItemExist()
    {
        $blRet = false;

        if ($this->checkModCfgItemExist()) {
            foreach ($this->_getShopList() as $oShop) {
                /** @var $oShop oxshop */
                $aWhere = array(
                    'oxmodid'       => $this->sModKey,
                    'oxshopid'      => $oShop->getId(),
                    'oxnewrevision' => $this->sModRevision,
                );

                if ($this->_checkTableItemNotExist('d3_cfg_mod', $aWhere)) {
                    // update don't use this property
                    unset($aWhere['oxnewrevision']);

                    $aInsertFields = array(
                        'OXID'           => array(
                            'content'      => "md5('" . $this->sModKey . " " . $oShop->getId() . "')",
                            'force_update' => false,
                        ),
                        'OXSHOPID'       => array(
                            'content'      => "'" . $oShop->getId() . "'",
                            'force_update' => false,
                        ),
                        'OXMODID'        => array(
                            'content'      => "'" . $this->sModKey . "'",
                            'force_update' => true,
                        ),
                        'OXNAME'         => array(
                            'content'      => "'" . $this->sModName . "'",
                            'force_update' => true,
                        ),
                        'OXACTIVE'       => array(
                            'content'      => "0",
                            'force_update' => false,
                        ),
                        'OXBASECONFIG'   => array(
                            'content'      => "'" . $this->sBaseConf . "'",
                            'force_update' => true,
                        ),
                        'OXINSTALLDATE'  => array(
                            'content'      => "NOW()",
                            'force_update' => true,
                        ),
                        'OXVERSION'      => array(
                            'content'      => "'" . $this->sModVersion . "'",
                            'force_update' => true,
                        ),
                        'OXSHOPVERSION'  => array(
                            'content'      => "'" . oxRegistry::getConfig()->getEdition() . "'",
                            'force_update' => true,
                        ),
                        'OXREQUIREMENTS' => array(
                            'content'      => "'" . $this->sRequirements . "'",
                            'force_update' => true,
                        ),
                        'OXVALUE'        => array(
                            'content'      => "'" . $this->sBaseValue . "'",
                            'force_update' => false,
                        ),
                        'OXNEWREVISION'  => array(
                            'content'      => "'" . $this->sModRevision . "'",
                            'force_update' => true,
                        ),
                    );
                    $aRet          = $this->_updateTableItem('d3_cfg_mod', $aInsertFields, $aWhere);
                    $blRet         = $aRet['blRet'];
                    $this->_setActionLog('SQL', $aRet['sql'], __METHOD__);
                    $this->_setUpdateBreak(false);

                    if ($this->getStepByStepMode()) {
                        break;
                    }
                }
            }
        }

        return $blRet;
    }

    /**
     * @return bool
     */
    public function checkContentGANoticeItemExist()
    {
        $blRet = false;
        foreach ($this->_getShopList() as $oShop) {
            /** @var $oShop oxshop */
            $aWhere = array(
                'oxloadid' => 'Analytics_Security_Informations',
                'oxshopid' => $oShop->getId(),
            );

            $blRet = $this->_checkTableItemNotExist('oxcontents', $aWhere);

            if ($blRet) {
                return $blRet;
            }
        }

        return $blRet;
    }

    /**
     * @return bool
     */
    public function updateContentGANoticeItemExist()
    {
        $blRet = false;

        if ($this->checkContentGANoticeItemExist()) {
            foreach ($this->_getShopList() as $oShop) {
                /** @var $oShop oxshop */
                $aWhere = array(
                    'oxloadid' => 'Analytics_Security_Informations',
                    'oxshopid' => $oShop->getId(),
                );

                if ($this->_checkTableItemNotExist('oxcontents', $aWhere)) {
                    $aInsertFields = array(
                        'OXID'       => array(
                            'content'      => "md5(RAND())",
                            'force_update' => false,
                        ),
                        'OXLOADID'   => array(
                            'content'      => "'Analytics_Security_Informations'",
                            'force_update' => true,
                        ),
                        'OXSHOPID'   => array(
                            'content'      => "'" . $oShop->getId() . "'",
                            'force_update' => true,
                        ),
                        'OXSNIPPET'  => array(
                            'content'      => "'1'",
                            'force_update' => false,
                        ),
                        'OXTYPE'     => array(
                            'content'      => "'0'",
                            'force_update' => false,
                        ),
                        'OXACTIVE'   => array(
                            'content'      => "'1'",
                            'force_update' => false,
                        ),
                        'OXACTIVE_1' => array(
                            'content'      => "'1'",
                            'force_update' => false,
                        ),
                        'OXPOSITION' => array(
                            'content'      => "''",
                            'force_update' => false,
                        ),
                        'OXTITLE'    => array(
                            'content'      => "'Analytics Datenschutz Information'",
                            'force_update' => false,
                        ),
                        'OXCONTENT'  => array(
                            'content'      => "'<p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google\r\n\r\nInc. (&quot;Google&quot;). Google Analytics verwendet sog. &quot;Cookies&quot;, Textdateien, die auf\r\n\r\nIhrem Computer gespeichert werden und die eine Analyse der Benutzung der Website\r\n\r\ndurch Sie erm�glichen. Die durch den Cookie erzeugten Informationen �ber Ihre\r\n\r\nBenutzung dieser Website (einschlie�lich Ihrer IP-Adresse<span style=\"color: #800000\">, die jedoch mit der Methode _anonymizeIp() anonymisiert wird, so dass Sie nicht mehr einem Anschluss\r\n\r\nzugeordnet werden kann</span>) wird an einen Server von Google in den USA\r\n\r\n�bertragen und dort gespeichert. Google wird diese Informationen benutzen, um\r\n\r\nIhre Nutzung der Website auszuwerten, um Reports �ber die Websiteaktivit�ten f�r\r\n\r\ndie Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und\r\n\r\nder Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google\r\n\r\ndiese Informationen gegebenenfalls an Dritte �bertragen, sofern dies gesetzlich\r\n\r\nvorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten.\r\n\r\nGoogle wird in keinem Fall Ihre IP-Adresse mit anderen Daten von Google in\r\n\r\nVerbindung bringen. Sie k�nnen die Installation der Cookies durch eine\r\n\r\nentsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie\r\n\r\njedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht s�mtliche\r\n\r\nFunktionen dieser Website vollumf�nglich nutzen k�nnen. Durch die Nutzung dieser\r\n\r\nWebsite erkl�ren Sie sich mit der Bearbeitung der �ber Sie erhobenen Daten durch\r\n\r\nGoogle in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck\r\n\r\neinverstanden.</p>\r\n<p><span style=\"color: #800000\">Sie k�nnen der Erhebung der\r\n\r\nDaten durch Google-Analytics mit Wirkung f�r die Zukunft widersprechen, indem\r\n\r\nsie ein Deaktivierungs-Add-on (<a href=\"http://tools.google.com/dlpage/gaoptout?hl=de\" title=\"\">http://tools.google.com/dlpage/gaoptout?hl=de</a>)\r\n\r\nf�r Ihren Browser installieren.</span></p>'",
                            'force_update' => false,
                        ),
                        'OXCATID'    => array(
                            'content'      => "''",
                            'force_update' => false,
                        ),
                        'OXFOLDER'   => array(
                            'content'      => "'CMSFOLDER_USERINFO'",
                            'force_update' => false,
                        ),
                    );
                    $aRet          = $this->_updateTableItem('oxcontents', $aInsertFields, $aWhere);
                    $blRet         = $aRet['blRet'];

                    $this->_setActionLog('SQL', $aRet['sql'], __METHOD__);
                    $this->_setUpdateBreak(false);

                    if ($this->getStepByStepMode()) {
                        break;
                    }
                }
            }
        }

        return $blRet;
    }

    /**
     * @return bool
     */
    public function checkModCfgSameRevision()
    {
        return $this->_checkModCfgSameRevision($this->sModKey);
    }

    /**
     * @return bool
     */
    public function updateModCfgSameRevision()
    {
        $blRet = false;

        if ($this->checkModCfgSameRevision($this->sModKey)) {
            $aRet = $this->_updateModCfgSameRevision($this->sModKey);

            $this->_setActionLog('SQL', $aRet['sql'], __METHOD__);
            $this->_setUpdateBreak(false);
            $blRet = $aRet['blRet'];
        }

        return $blRet;
    }
}