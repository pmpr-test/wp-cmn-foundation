<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0611cd07             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; class Setting extends Common { public function myacgeeekqcmemge(string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return !empty(Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq)); } public function qioweyiqewmsocem(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq || !is_array($qiouiwasaauyaaue)) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iakkeikwceeomgyq, $qiouiwasaauyaaue); } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return Origin::symcgieuakksimmu()->oeqomowmukgkiicw($uusmaiomayssaecw, $iakkeikwceeomgyq); } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, string $iakkeikwceeomgyq = '') { if (!$iakkeikwceeomgyq) { return $ggauoeuaesiymgee; } $eqgoocgaqwqcimie = Origin::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $iakkeikwceeomgyq); if ($eqgoocgaqwqcimie === null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae(string $iakkeikwceeomgyq = '') : array { if (!$iakkeikwceeomgyq) { return []; } return Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq); } public function esoowymaimwcuecq() : bool { return $this->cmaecekuqkwmemms("\127\120\x5f\x44\105\102\125\x47", false) || $this->cmaecekuqkwmemms("\120\122\x5f\104\105\102\125\107", false); } public function miqkyauycmkywoka() : bool { return "\146\141\x5f\x49\x52" === $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } public function uyomwmskouyyqyyq() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\144\x61\x74\145\x5f\x66\x6f\162\155\141\164", "\x59\x20\115\40\144"); } public function kaegwckciqoykcya() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\144\145\x66\x61\x75\154\x74\x5f\x63\x61\x74\x65\147\x6f\x72\171"); } public function isiuiegyqiomccsw() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\164\151\155\145\x5f\x66\157\162\x6d\x61\x74", "\110\x3a\x69\x3a\x73"); } public function yoaaussmackoisuw() : string { return sprintf(__("\x25\163\40\141\x74\40\x25\163", PR__CMN__FOUNDATION), $this->uyomwmskouyyqyyq(), $this->isiuiegyqiomccsw()); } public function mgyaomqswwsksuqw() : string { $mqqisesagsuooios = $this->ewswusimyeosaogm(); return substr($mqqisesagsuooios, 0, strpos($mqqisesagsuooios, "\45")); } public function ewswusimyeosaogm() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\x65\x72\x6d\x61\x6c\x69\x6e\x6b\137\x73\164\162\x75\143\x74\x75\162\x65"); } public function qqqooiyuyqmyuwqi() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\141\x67\x65\x5f\x66\x6f\x72\137\160\x6f\163\164\163"); } public function weaommwymsyyeoaw() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\x61\x67\145\137\x6f\156\x5f\146\162\x6f\x6e\164"); } public function eggqcgqgecgaaaka() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\150\157\x6d\145"); } public function yyccecocgwykyaeo() : bool { return (bool) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\165\163\x65\x72\163\x5f\x63\x61\x6e\x5f\x72\x65\147\151\163\x74\145\x72", false); } public function kasoumcmomkcwwyg($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::goqgcigmiawyauai, $ggauoeuaesiymgee); } public function miggcoaueioaoqga($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x63\x6f\x6d\155\145\156\x74\x73\137\x70\x65\162\x5f\160\141\147\x65", $ggauoeuaesiymgee); } public function cemqywcawamksuuq() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x73\150\157\167\x5f\x6f\156\137\x66\x72\157\x6e\x74") === Constants::imywcsggckkcywgk; } public function weusokmcememmoec() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x73\x68\157\167\x5f\157\x6e\137\x66\x72\x6f\x6e\164") === Constants::qgmuskygocwmouos; } }
