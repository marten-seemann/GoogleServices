[{$smarty.block.parent}]

[{d3modcfgcheck modid="d3_googleanalytics"}][{/d3modcfgcheck}]

[{if $mod_d3_googleanalytics}]
    [{block name="BaseAnalytics"}]
        [{include file="d3ga_gtag.tpl"}]
        [{oxstyle include=$oViewConf->getModuleUrl('d3_googleanalytics', 'out/src/d3_googleanalytics.css')}]
    [{/block}]
[{/if}]