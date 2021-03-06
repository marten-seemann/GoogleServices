[{include file="headitem.tpl" title="D3_GOOGLEANALYTICS_CFG_TITLE"|oxmultilangassign}]

<script type="text/javascript">
<!--
[{if $updatelist == 1}]
    UpdateList('[{$oxid}]');
[{/if}]

function UpdateList( sID)
{
    var oSearch = parent.list.document.getElementById("search");
    oSearch.oxid.value=sID;
    oSearch.fnc.value='';
    oSearch.submit();
}

function EditThis( sID)
{
    var oTransfer = document.getElementById("transfer");
    oTransfer.oxid.value=sID;
    oTransfer.cl.value='';
    oTransfer.submit();

    var oSearch = parent.list.document.getElementById("search");
    oSearch.actedit.value = 0;
    oSearch.oxid.value=sID;
    oSearch.submit();
}

function _groupExp(el) {
    var _cur = el.parentNode;

    if (_cur.className == "exp") _cur.className = "";
      else _cur.className = "exp";
}

-->
</script>

<style type="text/css">
    <!--
    fieldset {
        border:           1px inset black;
        background-color: #F0F0F0;
    }

    legend {
        font-weight: bold;
    }

    dl dt {
        font-weight: normal;
        width:       55%;
    }

    .ext_edittext {
        padding: 2px;
    }

    td.edittext {
        white-space: normal;
    }

    .servicedesc {
        background-color: #d4ffd4;
        border: 1px solid green;
        margin-bottom: 10px;
        padding: 5px;
        text-align: center;
    }

    .servicedesc a {
        text-decoration: underline;
    }
    -->
</style>

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="actshop" value="[{$shop->id}]">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>

<form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="fnc" value="save">
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="editval[oxid]" value="[{$oxid}]">

<table border="0" width="98%">
    <tr>
        <td valign="top" class="edittext">

            [{if $oView->getValueStatus() == 'error'}]
                    <hr>
                    <span style="font-weight: bold;">[{oxmultilang ident="D3_CFG_MOD_GENERAL_NOCONFIG_DESC"}]</span>
                    <br>
                    <br>
                    <span class="d3modcfg_btn fixed icon status_attention">
                        <input type="submit" value="[{oxmultilang ident="D3_CFG_MOD_GENERAL_NOCONFIG_BTN"}]">
                        <span></span>
                    </span>
                </form>
                </div>
            [{else}]

                [{if $oView->getGaType() == 'universal'}]
                    [{assign var="blUniversalDisabled" value="disabled readonly"}]
                    [{assign var="blAsyncDisabled" value=""}]
                [{elseif  $oView->getGaType() == 'async'}]
                    [{assign var="blUniversalDisabled" value=""}]
                    [{assign var="blAsyncDisabled" value="disabled readonly"}]
                [{else}]
                    [{assign var="blUniversalDisabled" value=""}]
                    [{assign var="blAsyncDisabled" value=""}]
                [{/if}]

                <div class="servicedesc">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDS_DESC"}] [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDS_DESC1"}]</div>

                <div class="groupExp">
                    <div class="">
                        <a class="rc" onclick="_groupExp(this); return false;" href="#">
                            <span style="font-weight: bold;">
                                [{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN"}]
                            </span>
                        </a>
                        <dl>
                            <dt>
                                <label for="blD3GASetAdWordsCampaignTrack">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSCODE_SETCAMPAIGNTRACK"}]</label>
                                [{*  _gaq.push(['_setCampaignTrack', false]);  *}]
                            </dt>
                            <dd>
                                <input type="hidden" name="value[blD3GASetAdWordsCampaignTrack]" value="0">
                                <input id="blD3GASetAdWordsCampaignTrack" class="edittext ext_edittext" type="checkbox" value="1" [{if $edit->getValue('blD3GASetAdWordsCampaignTrack')}]checked[{/if}] name="value[blD3GASetAdWordsCampaignTrack]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSCODE_SETCAMPAIGNTRACK_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="blD3GASetCampNoKey">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPNOKEY"}]</label>
                                [{* _gaq.push(['_setCampNOKey', 'ga_nooverride']);    *}]
                            </dt>
                            <dd>
                                <input type="hidden" name="value[blD3GASetCampNoKey]" value="0">
                                <input id="blD3GASetCampNoKey" class="edittext ext_edittext" type="checkbox" value="1"  [{$blUniversalDisabled}] [{if $edit->getValue('blD3GASetCampNoKey')}]checked[{/if}] name="value[blD3GASetCampNoKey]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPNOKEY_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GASetCampIdKey">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPIDKEY"}]</label>
[{*  _gaq.push(['_setCampId', 'ga_content']);  *}]
                            </dt>
                            <dd>
                                <input id="sD3GASetCampIdKey" class="edittext ext_edittext" type="text" [{$blAsyncDisabled}] size="30" maxlength="100" value="[{$edit->getValue('sD3GASetCampIdKey')}]" name="value[sD3GASetCampIdKey]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPIDKEY_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GASetCampNameKey">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPNAMEKEY"}]</label>
[{*  _gaq.push(['_setCampNameKey', 'ga_campaign']);  *}]
                            </dt>
                            <dd>
                                <input id="sD3GASetCampNameKey" class="edittext ext_edittext" type="text" size="30" maxlength="100" value="[{$edit->getValue('sD3GASetCampNameKey')}]" name="value[sD3GASetCampNameKey]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPNAMEKEY_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GASetCampMediumKey">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPMEDIUMKEY"}]</label>
[{*  _gaq.push(['_setCampMediumKey', 'ga_medium']);  *}]
                            </dt>
                            <dd>
                                <input id="sD3GASetCampMediumKey" class="edittext ext_edittext" type="text" size="30" maxlength="100" value="[{$edit->getValue('sD3GASetCampMediumKey')}]" name="value[sD3GASetCampMediumKey]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPMEDIUMKEY_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GASetCampSourceKey">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPSOURCEKEY"}]</label>
[{*  _gaq.push(['_setCampSourceKey', 'ga_source']);  *}]
                            </dt>
                            <dd>
                                <input id="sD3GASetCampSourceKey" class="edittext ext_edittext" type="text" size="30" maxlength="100" value="[{$edit->getValue('sD3GASetCampSourceKey')}]" name="value[sD3GASetCampSourceKey]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPSOURCEKEY_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GASetCampTermKey">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPTERMKEY"}]</label>
[{* _gaq.push(['_setCampTermKey', 'ga_term']);   *}]
                            </dt>
                            <dd>
                                <input id="sD3GASetCampTermKey" class="edittext ext_edittext" type="text" size="30" maxlength="100" value="[{$edit->getValue('sD3GASetCampTermKey')}]" name="value[sD3GASetCampTermKey]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPTERMKEY_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GASetCampContentKey">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPCONTENTKEY"}]</label>
[{*  _gaq.push(['_setCampContentKey', 'ga_content']);  *}]
                            </dt>
                            <dd>
                                <input id="sD3GASetCampContentKey" class="edittext ext_edittext" type="text" size="30" maxlength="100" value="[{$edit->getValue('sD3GASetCampContentKey')}]" name="value[sD3GASetCampContentKey]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPCONTENTKEY_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GASetCampaignCookieTimeout">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPAIGNCOOKIETIMEOUT"}]</label>
                                [{*  _gaq.push(['_setCampaignCookieTimeout', 31536000000]);  *}]
                            </dt>
                            <dd>
                                <input id="sD3GASetCampaignCookieTimeout" class="edittext ext_edittext" [{$blUniversalDisabled}] type="text" size="30" maxlength="30" value="[{$edit->getValue('sD3GASetCampaignCookieTimeout')}]" name="value[sD3GASetCampaignCookieTimeout]"> [{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPAIGNCOOKIETIMEOUT_MS"}]
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDSMAIN_SETCAMPAIGNCOOKIETIMEOUT_DESC"}]
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="groupExp">
                    <div class="">
                        <a class="rc" onclick="_groupExp(this); return false;" href="#">
                            <span style="font-weight: bold;">
                                [{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSGENERAL"}]
                            </span>
                        </a>
                        <dl>
                            <dt>
                                <label for="blD3GASetConversionTracking">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDS_SETCONVERSIONTRACKING"}]</label>
                                [{*  _gaq.push(['_setCampaignTrack', false]);  *}]
                            </dt>
                            <dd>
                                <input type="hidden" name="value[blD3GASetConversionTracking]" value="0">
                                <input id="blD3GASetConversionTracking" class="edittext ext_edittext" type="checkbox" value="1" [{if $edit->getValue('blD3GASetConversionTracking')}]checked[{/if}] name="value[blD3GASetConversionTracking]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDS_SETCONVERSIONTRACKING_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GAAdWordConversionId">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDS_CONVID"}]</label>
                            </dt>
                            <dd>
                                <input type="text" class="edittext ext_edittext" size="15" maxlength="50" name="value[sD3GAAdWordConversionId]" value="[{$edit->getValue('sD3GAAdWordConversionId')}]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDS_CONVID_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GAAdWordConversionLabel">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDS_CONVLABEL"}]</label>
                            </dt>
                            <dd>
                                <input type="text" class="edittext ext_edittext" size="15" maxlength="50" name="value[sD3GAAdWordConversionLabel]" value="[{$edit->getValue('sD3GAAdWordConversionLabel')}]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDS_CONVLABEL_DESC"}]
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="groupExp">
                    <div class="">
                        <a class="rc" onclick="_groupExp(this); return false;" href="#">
                            <span style="font-weight: bold;">
                                [{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDSREMARKETING"}]
                            </span>
                        </a>
                        <dl>
                            <dt>
                                <label for="blD3GASetRemarketing">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDS_SETREMARKETING"}]</label>
                            </dt>
                            <dd>
                                <input type="hidden" name="value[blD3GASetRemarketing]" value="0">
                                <input id="blD3GASetRemarketing" class="edittext ext_edittext" type="checkbox" value="1" [{if $edit->getValue('blD3GASetRemarketing')}]checked[{/if}] name="value[blD3GASetRemarketing]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDS_SETREMARKETING_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GARemarketingConversionId">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDS_REMARKETINGCONVID"}]</label>
                            </dt>
                            <dd>
                                <input type="text" class="edittext ext_edittext" size="15" maxlength="15" name="value[sD3GARemarketingConversionId]" value="[{$edit->getValue('sD3GARemarketingConversionId')}]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDS_REMARKETINGCONVID_DESC"}]
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <label for="sD3GARemarketingConversionLabel">[{oxmultilang ident="D3_GOOGLEANALYTICS_ADWORDS_REMARKETINGCONVLABEL"}]</label>
                            </dt>
                            <dd>
                                <input type="text" class="edittext ext_edittext" size="15" maxlength="15" name="value[sD3GARemarketingConversionLabel]" value="[{$edit->getValue('sD3GARemarketingConversionLabel')}]">
                                [{oxinputhelp ident="D3_GOOGLEANALYTICS_ADWORDS_REMARKETINGCONVLABEL_DESC"}]
                            </dd>
                        </dl>
                    </div>
                </div>

                <table width="100%">
                    <tr>
                        <td class="edittext ext_edittext" align="left"><br>
                            <span class="d3modcfg_btn icon status_ok">
                                <input type="submit" name="save" value="[{oxmultilang ident="D3_CFG_MOD_GENERAL_SAVE"}]">
                                <span></span>
                            </span>
                        </td>
                    </tr>
                </table>

            [{/if}]
        </td>
    </tr>
</table>

[{include file="d3_cfg_mod_inc.tpl"}]