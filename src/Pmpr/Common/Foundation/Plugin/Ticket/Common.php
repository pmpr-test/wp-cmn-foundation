<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Common as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Traits\SettingTrait; abstract class Common extends BaseClass { use SettingTrait; public function umqeyekmoagusaiq($iiwuoccgisuaoaka) : string { $iiwuoccgisuaoaka = (array) $iiwuoccgisuaoaka; if (isset($iiwuoccgisuaoaka[Constants::ckmsuwamgymouaeu])) { goto ykyauiwkesygwwyq; } $igwimgwceysgwimw = get_custom_logo(); if ($igwimgwceysgwimw) { goto aysgkuigyuqqcuae; } $igwimgwceysgwimw = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aeymcyaqkmmukomc(); aysgkuigyuqqcuae: $iiwuoccgisuaoaka[Constants::owsgqueosiqycgky] = $igwimgwceysgwimw; goto kwacykquqegccocg; ykyauiwkesygwwyq: $iiwuoccgisuaoaka[Constants::owsgqueosiqycgky] = $this->qaawomkouwoaoqma(Constants::mscgqqsgosmsqygq); kwacykquqegccocg: $iiwuoccgisuaoaka[Constants::yqemseykugmsyeqa] = sprintf(__("\x25\x73\x20\141\x74\x20\x25\163", PR__CMN__FOUNDATION), "\152\40\x46\40\131", "\110\x3a\151"); return $this->iuygowkemiiwqmiw("\x63\x6f\156\x76\145\162\x73\x61\164\151\x6f\156", $iiwuoccgisuaoaka); } }
