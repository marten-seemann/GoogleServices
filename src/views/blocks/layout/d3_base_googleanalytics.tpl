[{$smarty.block.parent}]

[{d3modcfgcheck modid="d3_googleanalytics"}][{/d3modcfgcheck}]

[{if $mod_d3_googleanalytics}]
    [{block name="BaseAnalytics"}]
        [{include file=$sD3GATTpl}]
        [{oxstyle include=$oViewConf->getModuleUrl('d3_googleanalytics', 'out/src/d3_googleanalytics.css')}]
        [{if $blD3GAIsMobile}]
            [{oxstyle include=$oViewConf->getModuleUrl('d3_googleanalytics', 'out/src/d3_googleanalytics_mobile.css')}]
        [{/if}]
    [{/block}]
[{/if}]