<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c8328069630             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; class Setting extends Common { public function myacgeeekqcmemge(string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return !empty(Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq)); } public function qioweyiqewmsocem(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq); } public function csucgayeuwoeeuuw($qiouiwasaauyaaue, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq || !is_array($qiouiwasaauyaaue)) { return false; } Origin::symcgieuakksimmu()->register($iakkeikwceeomgyq); return Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($iakkeikwceeomgyq, $qiouiwasaauyaaue); } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, string $iakkeikwceeomgyq = '') : bool { if (!$iakkeikwceeomgyq) { return false; } return Origin::symcgieuakksimmu()->oeqomowmukgkiicw($uusmaiomayssaecw, $iakkeikwceeomgyq); } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, string $iakkeikwceeomgyq = '') { if (!$iakkeikwceeomgyq) { return $ggauoeuaesiymgee; } $eqgoocgaqwqcimie = Origin::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $iakkeikwceeomgyq); if ($eqgoocgaqwqcimie === null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function gkwkqmwweiawigae(string $iakkeikwceeomgyq = '') : array { if (!$iakkeikwceeomgyq) { return []; } return Origin::symcgieuakksimmu()->gkwkqmwweiawigae($iakkeikwceeomgyq); } public function esoowymaimwcuecq() : bool { return $this->cmaecekuqkwmemms('WP_DEBUG', false) || $this->cmaecekuqkwmemms('PR_DEBUG', false); } public function miqkyauycmkywoka() : bool { return 'fa_IR' === $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } public function uyomwmskouyyqyyq() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('date_format', 'Y M d'); } public function kaegwckciqoykcya() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('default_category'); } public function isiuiegyqiomccsw() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('time_format', 'H:i:s'); } public function yoaaussmackoisuw() : string { return sprintf(__('%s at %s', PR__CMN__FOUNDATION), $this->uyomwmskouyyqyyq(), $this->isiuiegyqiomccsw()); } public function mgyaomqswwsksuqw() : string { $mqqisesagsuooios = $this->ewswusimyeosaogm(); return substr($mqqisesagsuooios, 0, strpos($mqqisesagsuooios, '%')); } public function ewswusimyeosaogm() : string { return (string) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('permalink_structure'); } public function qqqooiyuyqmyuwqi() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('page_for_posts'); } public function weaommwymsyyeoaw() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('page_on_front'); } public function eggqcgqgecgaaaka() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('home'); } public function yyccecocgwykyaeo() : bool { return (bool) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('users_can_register', false); } public function kasoumcmomkcwwyg($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::goqgcigmiawyauai, $ggauoeuaesiymgee); } public function miggcoaueioaoqga($ggauoeuaesiymgee = 10) : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('comments_per_page', $ggauoeuaesiymgee); } public function cemqywcawamksuuq() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('show_on_front') === Constants::imywcsggckkcywgk; } public function weusokmcememmoec() : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('show_on_front') === Constants::qgmuskygocwmouos; } }
