<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581610eed2f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; class Setting extends Common { public function myacgeeekqcmemge(string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return !empty(Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq)); } public function qioweyiqewmsocem(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq || !is_array($qiouiwasaauyaaue)) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iakkeikwceeomgyq, $qiouiwasaauyaaue); } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return Origin::symcgieuakksimmu()->oeqomowmukgkiicw($uusmaiomayssaecw, $iakkeikwceeomgyq); } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, string $iakkeikwceeomgyq = '') { if (!$iakkeikwceeomgyq) { return $ggauoeuaesiymgee; } $eqgoocgaqwqcimie = Origin::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $iakkeikwceeomgyq); if ($eqgoocgaqwqcimie === null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae(string $iakkeikwceeomgyq = '') : array { if (!$iakkeikwceeomgyq) { return []; } return Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq); } public function esoowymaimwcuecq() : bool { return $this->cmaecekuqkwmemms("\x57\x50\x5f\104\x45\x42\125\107", false) || $this->cmaecekuqkwmemms("\x50\x52\137\104\x45\102\x55\x47", false); } public function miqkyauycmkywoka() : bool { return "\146\x61\137\x49\x52" === $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } public function uyomwmskouyyqyyq() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x64\x61\164\145\137\x66\157\x72\x6d\141\164", "\131\x20\115\40\x64"); } public function kaegwckciqoykcya() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\144\x65\146\x61\x75\x6c\164\137\143\x61\x74\x65\x67\157\x72\171"); } public function isiuiegyqiomccsw() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x74\x69\x6d\x65\x5f\x66\x6f\162\x6d\141\164", "\x48\x3a\151\72\163"); } public function yoaaussmackoisuw() : string { return sprintf(__("\x25\x73\40\141\164\40\45\x73", PR__CMN__FOUNDATION), $this->uyomwmskouyyqyyq(), $this->isiuiegyqiomccsw()); } public function mgyaomqswwsksuqw() : string { $mqqisesagsuooios = $this->ewswusimyeosaogm(); return substr($mqqisesagsuooios, 0, strpos($mqqisesagsuooios, "\x25")); } public function ewswusimyeosaogm() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\145\x72\155\x61\x6c\x69\x6e\x6b\137\x73\164\162\x75\x63\x74\x75\x72\145"); } public function qqqooiyuyqmyuwqi() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\141\x67\x65\137\146\x6f\162\137\160\157\163\164\x73"); } public function weaommwymsyyeoaw() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\141\147\x65\137\157\156\137\146\162\x6f\156\x74"); } public function eggqcgqgecgaaaka() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\150\x6f\x6d\145"); } public function yyccecocgwykyaeo() : bool { return (bool) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x75\x73\x65\162\x73\x5f\x63\141\156\137\x72\x65\147\151\x73\x74\145\x72", false); } public function kasoumcmomkcwwyg($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::goqgcigmiawyauai, $ggauoeuaesiymgee); } public function miggcoaueioaoqga($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\143\x6f\155\155\145\x6e\x74\163\137\x70\x65\162\x5f\x70\141\147\145", $ggauoeuaesiymgee); } public function cemqywcawamksuuq() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\163\x68\157\x77\137\157\x6e\137\146\x72\157\x6e\x74") === Constants::imywcsggckkcywgk; } public function weusokmcememmoec() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x73\x68\x6f\167\x5f\x6f\156\x5f\146\x72\157\156\x74") === Constants::qgmuskygocwmouos; } }
