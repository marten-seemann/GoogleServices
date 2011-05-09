[{if $blD3GoogleAnalyticsActive && $oD3GASettings->getValue('sD3GAId')}]
    [{strip}]
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', '[{ $oD3GASettings->getValue('sD3GAId') }]']);

            [{if $oD3GASettings->getValue('blD3GAAnonymizeIP')}]
                _gaq.push(['_gat._anonymizeIp']);
            [{/if}]

            [{if $oD3GASettings->getValue('blD3GATrackPageLoadTime')}]
                _gaq.push(['_gat._trackPageLoadTime']);
            [{/if}]

            [{if $oD3GASettings->getValue('sD3GASetDomainName')}]
                _gaq.push(['_setDomainName', '[{$oD3GASettings->getValue('sD3GASetDomainName')}]']);
                _gaq.push(['_setAllowHash', false]);
            [{else}]
                _gaq.push(['_setDomainName', 'none']);
            [{/if}]

            [{if $oD3GASettings->getValue('sD3GASetCookiePath')}]
                _gaq.push(['_setCookiePath', '[{$oD3GASettings->getValue('sD3GASetCookiePath')}]']);
            [{/if}]

            [{if $oD3GASettings->getValue('blD3GAAllowDomainLinker')}]
                _gaq.push(['_setAllowLinker', true]);
            [{/if}]

            [{if $oD3GASettings->getValue('blD3GASetClientInfo')}]
                _gaq.push(['_setClientInfo', false]);
            [{else}]
                _gaq.push(['_setClientInfo', true]);
            [{/if}]

            [{if $oD3GASettings->getValue('blD3GASetDetectFlash')}]
                _gaq.push(['_setDetectFlash', false]);
            [{else}]
                _gaq.push(['_setDetectFlash', true]);
            [{/if}]

            [{if $oD3GASettings->getValue('blD3GASetDetectTitle')}]
                _gaq.push(['_setDetectTitle', false]);
            [{else}]
                _gaq.push(['_setDetectTitle', true]);
            [{/if}]

            [{if !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GACampaignCode')}]
                _gaq.push(['_setCampaignTrack', true]);
            [{else}]
                _gaq.push(['_setCampaignTrack', false]);
            [{/if}]

            [{if !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GASetCampaignCookieTimeout')}]
                _gaq.push(['_setCampaignCookieTimeout', [{$oD3GASettings->getValue('sD3GASetCampaignCookieTimeout')}]);
            [{/if}]

            [{if !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GASetCampNameKey')}]
                _gaq.push(['_setCampNameKey', [{$oD3GASettings->getValue('sD3GASetCampNameKey')}]);
            [{/if}]

            [{if !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GASetCampMediumKey')}]
                _gaq.push(['_setCampMediumKey', [{$oD3GASettings->getValue('sD3GASetCampMediumKey')}]);
            [{/if}]

            [{if !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GASetCampSourceKey')}]
                _gaq.push(['_setCampSourceKey', [{$oD3GASettings->getValue('sD3GASetCampSourceKey')}]);
            [{/if}]

            [{if !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GASetCampTermKey')}]
                _gaq.push(['_setCampTermKey', [{$oD3GASettings->getValue('sD3GASetCampTermKey')}]);
            [{/if}]

            [{if !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GASetCampContentKey')}]
                _gaq.push(['_setCampContentKey', [{$oD3GASettings->getValue('sD3GASetCampContentKey')}]);
            [{/if}]

            [{if !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GASetCampContentKey')}]
                _gaq.push(['_setCampNOKey', 'ga_nooverride']);
            [{/if}]

            [{if $oD3GASettings->getValue('blD3GAUseCustomVars')}]
[{* /*** add custom variables here ***/ *}]
                [{if $oxcmp_user}]
                    _gaq.push(['_setCustomVar',
                        1,           [{*// This custom var is set to slot #1.  Required parameter.*}]
                        'Gender',    [{*// The name of the custom variable.  Required parameter.*}]
                        [{if $oxcmp_user->oxuser__oxsal->value == 'MR'}]'male'[{elseif $oxcmp_user->oxuser__oxsal->value == 'MRS'}]'female'[{/if}],
                                     [{*// The value of the custom variable.  Required parameter.*}]
                        1            [{*// Sets the scope to visitor-level.  Optional parameter.*}]
                    ]);
                [{/if}]
            [{/if}]

            _gaq.push(['_trackPageview']);

            [{if $oD3GASettings->getValue('sD3GACookiePathCopy')}]
                _gaq.push(['_cookiePathCopy', '[{$oD3GASettings->getValue('sD3GACookiePathCopy')}]']);
            [{/if}]

            [{if $oD3GASettings->getValue('blD3GASendECommerce') && $oViewConf->getActiveClassName() == 'thankyou'}]
                _gaq.push(['_addTrans',
                    '[{ $order->oxorder__oxordernr->value }]',          [{* // order ID - required *}]
                    '[{ $oxcmp_shop->oxshops__oxname->value}]',         [{* // affiliation or store name *}]
                    [{if $oD3GASettings->getValue('blD3GAUseNetto') }]
                        [{*'[{ $order->getOrderNetSum() }]',                // total - required - has to be gross sum *}]
                        '[{ $order->getTotalOrderSum() }]',               [{* // total - required *}]
                    [{else}]
                        '[{ $order->getTotalOrderSum() }]',             [{* // total - required *}]
                    [{/if}]
                    '',                                                 [{* // tax *}]
                    '[{ $order->oxorder__oxdelcost->value }]',          [{* // shipping *}]
                    '[{ $order->oxorder__oxbillcity->value }]',         [{* // city *}]
                    '[{ $order->oxorder__oxbillstate->value }]',        [{* // state or province *}]
                    '[{ $order->oxorder__oxbillcountry->value }]'       [{* // country *}]
                ]);

                [{foreach from=$order->getOrderArticles() item=oOrderArticle}]
                    _gaq.push(['_addItem',
                        '[{ $order->oxorder__oxordernr->value }]',                      [{* // order ID - required *}]
                        '[{ $oOrderArticle->oxorderarticles__oxartnum->value }]',       [{* // SKU/code *}]
                        '[{ $oOrderArticle->oxorderarticles__oxtitle->value }]',        [{* // product name *}]
                        '[{ $oOrderArticle->oxorderarticles__oxselvariant->value }]',   [{* // category or variation *}]
                        [{if $oD3GASettings->getValue('blD3GAUseNetto') }]
                            [{assign var="oPrice" value=$oOrderArticle->getPrice()}]
                            '[{ $oPrice->getNettoPrice() }]',                           [{* // unit price - required *}]
                        [{else}]
                            '[{ $oOrderArticle->oxorderarticles__oxprice->value }]',    [{* // unit price - required *}]
                        [{/if}]
                        '[{ $oOrderArticle->oxorderarticles__oxamount->value }]'        [{* // quantity - required *}]
                    ]);
                [{/foreach}]

                _gaq.push(['_trackTrans']);

            [{/if}]

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

        [{if (!$oD3GASettings->getValue('blD3GASetCampaignOnThankyouOnly') || $oViewConf->getActiveClassName() == 'thankyou') &&
              !$oD3GASettings->getValue('blD3GASetCampaignTrack') && $oD3GASettings->getValue('sD3GACampaignCode')}]
            [{$oD3GASettings->getValue('sD3GACampaignCode')}]
        [{/if}]
    [{/strip}]
[{/if}]