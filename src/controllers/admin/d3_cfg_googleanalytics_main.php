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

class d3_cfg_googleanalytics_main extends D3\ModCfg\Application\Controller\Admin\d3_cfg_mod_main
{
    protected $_sThisTemplate = 'd3_cfg_googleanalytics_main.tpl';
    protected $_sModId = 'd3_googleanalytics';
    protected $_blHasDebugSwitch = true;
    protected $_sDebugHelpTextIdent = 'D3_GOOGLEANALYTICS_MAIN_DEBUG';
    protected $_sMenuItemTitle = 'd3mxgoogleanalytics';
    protected $_sMenuSubItemTitle = 'd3tbclgoogleanalytics_main';

    /**
     * @return mixed
     */
    public function getGaType()
    {
        if ($this->d3GetSet()->getValue('sD3GAType') == 'async') {
            return 'async';
        }

        return 'universal';
    }
}
