<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; class Setting extends Common { public function myacgeeekqcmemge(string $iakkeikwceeomgyq = '') : bool { if ($iakkeikwceeomgyq) { goto umuseoycuocwmkwq; } return false; umuseoycuocwmkwq: return !empty(Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq)); } public function qioweyiqewmsocem(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $iakkeikwceeomgyq = '') : bool { if ($iakkeikwceeomgyq) { goto cygwqimwgaceaogu; } return false; cygwqimwgaceaogu: Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, string $iakkeikwceeomgyq = '') : bool { if (!(!$iakkeikwceeomgyq || !is_array($qiouiwasaauyaaue))) { goto aakuioygmuqkiueu; } return false; aakuioygmuqkiueu: Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iakkeikwceeomgyq, $qiouiwasaauyaaue); } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, string $iakkeikwceeomgyq = '') : bool { if ($iakkeikwceeomgyq) { goto sceaocsemeoiyuge; } return false; sceaocsemeoiyuge: return Origin::symcgieuakksimmu()->oeqomowmukgkiicw($uusmaiomayssaecw, $iakkeikwceeomgyq); } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, string $iakkeikwceeomgyq = '') { if ($iakkeikwceeomgyq) { goto sugmesswcyyuwame; } return $ggauoeuaesiymgee; sugmesswcyyuwame: $eqgoocgaqwqcimie = Origin::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $iakkeikwceeomgyq); if (!($eqgoocgaqwqcimie === null)) { goto kgkuyiqwqsyqques; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; kgkuyiqwqsyqques: return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae(string $iakkeikwceeomgyq = '') : array { if ($iakkeikwceeomgyq) { goto deigmocesygywwwq; } return []; deigmocesygywwwq: return Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq); } public function esoowymaimwcuecq() : bool { return $this->cmaecekuqkwmemms("\x57\120\137\104\x45\x42\125\x47", false) || $this->cmaecekuqkwmemms("\120\122\x5f\x44\x45\102\x55\107", false); } public function miqkyauycmkywoka() : bool { return "\146\x61\137\x49\122" === $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } public function uyomwmskouyyqyyq() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\144\141\x74\145\x5f\146\157\162\155\x61\164", "\x59\40\x4d\x20\x64"); } public function kaegwckciqoykcya() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x64\x65\x66\141\x75\x6c\x74\x5f\x63\x61\x74\145\x67\157\162\x79"); } public function isiuiegyqiomccsw() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x74\151\155\x65\137\x66\x6f\x72\155\x61\164", "\x48\72\x69\x3a\x73"); } public function yoaaussmackoisuw() : string { return sprintf(__("\x25\x73\x20\x61\164\x20\x25\x73", PR__CMN__FOUNDATION), $this->uyomwmskouyyqyyq(), $this->isiuiegyqiomccsw()); } public function mgyaomqswwsksuqw() : string { $mqqisesagsuooios = $this->ewswusimyeosaogm(); return substr($mqqisesagsuooios, 0, strpos($mqqisesagsuooios, "\45")); } public function ewswusimyeosaogm() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\145\x72\155\141\x6c\151\x6e\x6b\137\163\164\162\165\143\x74\165\162\145"); } public function qqqooiyuyqmyuwqi() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\160\x61\x67\145\137\146\157\162\137\x70\x6f\x73\x74\163"); } public function weaommwymsyyeoaw() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x70\141\147\145\137\157\x6e\137\x66\x72\x6f\156\164"); } public function eggqcgqgecgaaaka() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x68\x6f\x6d\x65"); } public function yyccecocgwykyaeo() : bool { return (bool) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x75\x73\x65\x72\x73\x5f\x63\141\156\x5f\x72\145\x67\x69\x73\x74\x65\162", false); } public function kasoumcmomkcwwyg($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::goqgcigmiawyauai, $ggauoeuaesiymgee); } public function miggcoaueioaoqga($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\143\157\x6d\x6d\x65\156\x74\x73\137\160\145\x72\137\160\x61\147\x65", $ggauoeuaesiymgee); } public function cemqywcawamksuuq() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x73\150\x6f\167\137\157\156\x5f\x66\x72\157\156\x74") === Constants::imywcsggckkcywgk; } public function weusokmcememmoec() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\163\x68\x6f\x77\x5f\157\156\137\x66\162\157\156\x74") === Constants::qgmuskygocwmouos; } }
