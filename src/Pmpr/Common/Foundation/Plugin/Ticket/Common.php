<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680156f35b43a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Traits\SettingTrait; abstract class Common extends Container { use SettingTrait; public function umqeyekmoagusaiq($iiwuoccgisuaoaka) : string { $iiwuoccgisuaoaka = (array) $iiwuoccgisuaoaka; if (isset($iiwuoccgisuaoaka[Constants::ckmsuwamgymouaeu])) { $iiwuoccgisuaoaka[Constants::owsgqueosiqycgky] = $this->qaawomkouwoaoqma(Constants::mscgqqsgosmsqygq); } else { $igwimgwceysgwimw = get_custom_logo(); if (!$igwimgwceysgwimw) { $igwimgwceysgwimw = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aeymcyaqkmmukomc(); } $iiwuoccgisuaoaka[Constants::owsgqueosiqycgky] = $igwimgwceysgwimw; } $iiwuoccgisuaoaka[Constants::yqemseykugmsyeqa] = sprintf(__('%s at %s', PR__CMN__FOUNDATION), 'j F Y', 'H:i'); return $this->iuygowkemiiwqmiw('conversation', $iiwuoccgisuaoaka); } }
