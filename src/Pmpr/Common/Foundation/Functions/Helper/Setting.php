<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e84f05bca             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; class Setting extends Common { public function myacgeeekqcmemge(string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return !empty(Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq)); } public function qioweyiqewmsocem(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq || !is_array($qiouiwasaauyaaue)) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iakkeikwceeomgyq, $qiouiwasaauyaaue); } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return Origin::symcgieuakksimmu()->oeqomowmukgkiicw($uusmaiomayssaecw, $iakkeikwceeomgyq); } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, string $iakkeikwceeomgyq = '') { if (!$iakkeikwceeomgyq) { return $ggauoeuaesiymgee; } $eqgoocgaqwqcimie = Origin::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $iakkeikwceeomgyq); if ($eqgoocgaqwqcimie === null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae(string $iakkeikwceeomgyq = '') : array { if (!$iakkeikwceeomgyq) { return []; } return Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq); } public function esoowymaimwcuecq() : bool { return $this->cmaecekuqkwmemms("\x57\x50\137\104\105\102\125\107", false) || $this->cmaecekuqkwmemms("\120\122\137\104\x45\x42\x55\x47", false); } public function miqkyauycmkywoka() : bool { return "\x66\141\x5f\x49\122" === $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } public function uyomwmskouyyqyyq() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x64\x61\164\x65\137\146\x6f\x72\x6d\x61\x74", "\131\x20\115\x20\144"); } public function kaegwckciqoykcya() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x64\x65\146\x61\165\154\x74\137\143\141\164\145\x67\x6f\162\171"); } public function isiuiegyqiomccsw() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\164\151\x6d\x65\137\x66\x6f\x72\155\141\164", "\110\x3a\151\72\163"); } public function yoaaussmackoisuw() : string { return sprintf(__("\x25\163\40\x61\x74\x20\45\x73", PR__CMN__FOUNDATION), $this->uyomwmskouyyqyyq(), $this->isiuiegyqiomccsw()); } public function mgyaomqswwsksuqw() : string { $mqqisesagsuooios = $this->ewswusimyeosaogm(); return substr($mqqisesagsuooios, 0, strpos($mqqisesagsuooios, "\45")); } public function ewswusimyeosaogm() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\x65\162\155\x61\154\151\156\153\137\x73\x74\162\165\143\x74\165\x72\x65"); } public function qqqooiyuyqmyuwqi() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\141\x67\145\137\x66\x6f\162\137\160\x6f\163\x74\163"); } public function weaommwymsyyeoaw() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\141\147\145\137\157\156\x5f\x66\162\x6f\x6e\164"); } public function eggqcgqgecgaaaka() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\150\x6f\155\x65"); } public function yyccecocgwykyaeo() : bool { return (bool) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\165\163\145\162\163\137\143\141\x6e\137\x72\145\x67\151\163\164\x65\x72", false); } public function kasoumcmomkcwwyg($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::goqgcigmiawyauai, $ggauoeuaesiymgee); } public function miggcoaueioaoqga($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x63\157\x6d\155\145\156\164\x73\x5f\x70\x65\x72\137\x70\x61\147\145", $ggauoeuaesiymgee); } public function cemqywcawamksuuq() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x73\150\x6f\x77\x5f\157\x6e\137\x66\x72\x6f\x6e\164") === Constants::imywcsggckkcywgk; } public function weusokmcememmoec() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\163\150\x6f\167\x5f\x6f\x6e\137\x66\x72\x6f\156\164") === Constants::qgmuskygocwmouos; } }
