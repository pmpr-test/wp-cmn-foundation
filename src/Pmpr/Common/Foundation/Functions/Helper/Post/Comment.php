<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581610eed2f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; class Comment extends Common { public function get($comment) { if (!$comment instanceof WP_Comment) { $comment = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->get($this->iooowgsqoyqseyuu($comment)); } return $comment; } public function ayueggmoqeeukqmq($comment) { $post = null; $comment = $this->get($comment); if ($comment instanceof WP_Comment) { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($comment->comment_post_ID, Constants::ckmqoekmugkggeym, true); } return $post; } public function qqiwsumoyiukmgco($comment) : int { if (is_numeric($comment)) { $comment = $this->get($comment); } return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($comment, "\x63\157\x6d\155\145\x6e\164\137\160\x61\162\x65\156\164", 0); } public function cikwsikikwcmqwou($comment) : int { return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($comment), "\x63\x6f\x6d\155\145\156\164\x5f\160\157\163\x74\137\x49\104", 0); } public function iooowgsqoyqseyuu($comment) { $aokagokqyuysuksm = null; if ($comment instanceof WP_Comment) { $aokagokqyuysuksm = $comment->comment_ID; } else { if (is_numeric($comment)) { $aokagokqyuysuksm = $comment; } } return $aokagokqyuysuksm; } public function uikgwcuascgeissw($comment) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $this->ayueggmoqeeukqmq($comment); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym)); $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment); $ocogsiouoiuuguym = $this->squyiyimquqicqke($comment); return sprintf("\x25\x73\40\55\40\x25\163\40\x2d\40\45\163\40\55\40\x25\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs); } public function msyqmssukoqkqkau($comment) { $ycoeoaakqyskgykq = 0; if ($comment = $this->get($comment)) { $ycoeoaakqyskgykq = $comment->user_id; } return $ycoeoaakqyskgykq; } public function squyiyimquqicqke($comment, $saqmwwmqiwmkiwaa = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = ''; if ($comment = $this->get($comment)) { if (!$saqmwwmqiwmkiwaa) { $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); } $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $comment->comment_date, false); if ($egkeamycaysqsoma) { $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\147\x65\x74\x5f\x63\x6f\x6d\x6d\145\x6e\x74\137\x64\x61\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $comment); } } return $ocogsiouoiuuguym; } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::yayciqueeakqwese => '', Constants::qiyqwyiiwykeccmo => false]); return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function yosyouqyoowwowee($gcqseksiskwueksc, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $gcqseksiskwueksc; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function omkaowmygoqwsywq($ggauoeuaesiymgee = 10) : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga($ggauoeuaesiymgee); } public function uqwgsuysegkweago() : bool { return "\145\144\151\x74\143\x6f\155\155\x65\x6e\164" === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); } public function immcwcemcmyosyoo(bool $awqscowmskeuymeu = true) { $comment = ''; if (isset($_GET[Constants::uqgcmmosieyimiku], $_GET["\x63"]) && $_GET[Constants::uqgcmmosieyimiku] == "\x65\x64\x69\164\x63\x6f\x6d\155\x65\x6e\164") { $comment = $_GET["\143"]; } else { if (isset($_POST[Constants::uqgcmmosieyimiku], $_POST["\x63\157\x6d\x6d\x65\156\x74\137\x49\x44"]) && $_POST[Constants::uqgcmmosieyimiku] == "\x65\144\151\164\145\x64\143\157\155\155\145\156\164") { $comment = $_POST["\x63\x6f\x6d\155\145\x6e\x74\x5f\x49\104"]; } } if ($comment) { $comment = $this->get($comment); } return $comment; } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $comment = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $comment = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->igawqaomowicuayw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $cuyooiakswegosog); } public function kocmoimugqqoeawy(array $ywmkwiwkosakssii = []) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->wewicgosooacoayq($ywmkwiwkosakssii); } else { if (!$mumyimcwkaemyyue->esqicqsuigywkaqw() && ($mumyimcwkaemyyue->qmssqeyayicowkgy() || $mumyimcwkaemyyue->ocwoeosukggumggw() || $mumyimcwkaemyyue->sgayqmgoigoseaoo())) { global $wp_rewrite; $suaemuyiacqyugsm = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\160\141\147\145"); if (!$suaemuyiacqyugsm) { $suaemuyiacqyugsm = 1; } $kmsquaeucgusuyio = get_comment_pages_count(); $ycmguuqqaiisymgg = array(Constants::kkwcgeymmoomceyo => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x63\x70\141\x67\x65", "\45\43\45"), Constants::qaacaqioeyiuakeu => true, Constants::squoamkioomemiyi => "\x70\154\x61\x69\156", Constants::uiiqiokqwmccomiu => $kmsquaeucgusuyio, Constants::yqemseykugmsyeqa => '', Constants::asmooogmgyecqqka => $suaemuyiacqyugsm, "\141\144\144\x5f\146\x72\x61\x67\x6d\145\x6e\x74" => "\x23\143\x6f\155\155\145\x6e\164\163"); if ($wp_rewrite->using_permalinks()) { $ycmguuqqaiisymgg["\x62\x61\163\x65"] = user_trailingslashit(trailingslashit($this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($mumyimcwkaemyyue->imgymusqgccqsqqq())) . $wp_rewrite->comments_pagination_base . "\55\x25\43\45", "\x63\157\x6d\155\145\156\x74\x70\141\147\145\144"); } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $egegwkemucseqaaa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wewicgosooacoayq($ywmkwiwkosakssii); if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu] && Constants::kgmecoswscqqsymg !== $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { echo $egegwkemucseqaaa; } else { return $egegwkemucseqaaa; } } } } }
