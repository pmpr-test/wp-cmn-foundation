<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677d835e37313             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; class Setting extends Common { public function myacgeeekqcmemge(string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return !empty(Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq)); } public function qioweyiqewmsocem(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq || !is_array($qiouiwasaauyaaue)) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iakkeikwceeomgyq, $qiouiwasaauyaaue); } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return Origin::symcgieuakksimmu()->oeqomowmukgkiicw($uusmaiomayssaecw, $iakkeikwceeomgyq); } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, string $iakkeikwceeomgyq = '') { if (!$iakkeikwceeomgyq) { return $ggauoeuaesiymgee; } $eqgoocgaqwqcimie = Origin::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $iakkeikwceeomgyq); if ($eqgoocgaqwqcimie === null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae(string $iakkeikwceeomgyq = '') : array { if (!$iakkeikwceeomgyq) { return []; } return Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq); } public function esoowymaimwcuecq() : bool { return $this->cmaecekuqkwmemms("\127\120\x5f\104\105\102\x55\x47", false) || $this->cmaecekuqkwmemms("\x50\x52\x5f\x44\105\102\x55\x47", false); } public function miqkyauycmkywoka() : bool { return "\146\141\137\111\x52" === $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } public function uyomwmskouyyqyyq() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\144\x61\164\145\137\x66\157\162\155\x61\x74", "\131\40\x4d\40\144"); } public function kaegwckciqoykcya() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\144\x65\146\x61\x75\154\164\137\x63\141\164\x65\147\157\162\x79"); } public function isiuiegyqiomccsw() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x74\x69\x6d\145\137\146\x6f\x72\155\x61\164", "\110\72\x69\x3a\x73"); } public function yoaaussmackoisuw() : string { return sprintf(__("\x25\x73\40\141\164\40\x25\163", PR__CMN__FOUNDATION), $this->uyomwmskouyyqyyq(), $this->isiuiegyqiomccsw()); } public function mgyaomqswwsksuqw() : string { $mqqisesagsuooios = $this->ewswusimyeosaogm(); return substr($mqqisesagsuooios, 0, strpos($mqqisesagsuooios, "\x25")); } public function ewswusimyeosaogm() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\x65\x72\x6d\141\x6c\x69\156\x6b\137\x73\x74\x72\165\143\164\x75\162\145"); } public function qqqooiyuyqmyuwqi() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\x61\x67\x65\137\x66\157\162\x5f\160\x6f\163\164\x73"); } public function weaommwymsyyeoaw() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\x61\147\145\137\x6f\156\137\146\162\x6f\156\x74"); } public function eggqcgqgecgaaaka() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x68\157\155\x65"); } public function yyccecocgwykyaeo() : bool { return (bool) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x75\x73\x65\162\163\x5f\143\141\156\137\x72\145\147\x69\x73\x74\145\x72", false); } public function kasoumcmomkcwwyg($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::goqgcigmiawyauai, $ggauoeuaesiymgee); } public function miggcoaueioaoqga($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\143\x6f\155\x6d\x65\156\x74\x73\137\160\x65\162\x5f\x70\x61\147\x65", $ggauoeuaesiymgee); } public function cemqywcawamksuuq() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x73\150\x6f\x77\137\157\x6e\x5f\146\x72\157\x6e\x74") === Constants::imywcsggckkcywgk; } public function weusokmcememmoec() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x73\x68\157\x77\137\x6f\x6e\137\x66\x72\x6f\x6e\x74") === Constants::qgmuskygocwmouos; } }
