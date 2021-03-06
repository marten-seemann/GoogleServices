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

class d3_cfg_googleanalytics extends D3\ModCfg\Application\Controller\Admin\d3_cfg_mod_
{
    /**
     * @return string
     */
    public function render()
    {
        $this->addTplParam('sListClass', 'd3_cfg_googleanalytics_list');
        $this->addTplParam('sMainClass', 'd3_cfg_googleanalytics_main');
        return parent::render();
    }

    public function getAdditionalHeadContent()
    {
        $oViewConf = oxRegistry::getConfig()->getActiveView()->getViewConfig();
        $sScriptUrl = $oViewConf->getModuleUrl('d3_googleanalytics', 'out/src/d3_googleanalytics_test.js');

        return parent::getAdditionalHeadContent().'
            <script src="'.$sScriptUrl.'"></script>
            <script type="text/javascript">
                if(null === document.getElementById("SePiRENuJOBWx")){
                    alert("'.oxRegistry::getLang()->translateString('D3_GOOGLEANALYTICS_ADBLOCKER', null, true).'");
                }
            </script>
        ';
    }
}
