<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebe091cfc2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; class Comment extends Common { public function get($comment) { if ($comment instanceof WP_Comment) { goto gqewqqqogsygmicg; } $comment = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->get($this->iooowgsqoyqseyuu($comment)); gqewqqqogsygmicg: return $comment; } public function ayueggmoqeeukqmq($comment) { $post = null; $comment = $this->get($comment); if (!$comment instanceof WP_Comment) { goto yqewwggigucqaiou; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($comment->comment_post_ID, Constants::ckmqoekmugkggeym, true); yqewwggigucqaiou: return $post; } public function qqiwsumoyiukmgco($comment) : int { if (!is_numeric($comment)) { goto moqsoaomwaeykgei; } $comment = $this->get($comment); moqsoaomwaeykgei: return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($comment, "\x63\157\155\x6d\x65\x6e\x74\x5f\x70\x61\x72\145\156\164", 0); } public function cikwsikikwcmqwou($comment) : int { return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($comment), "\143\157\155\x6d\145\156\x74\x5f\x70\x6f\x73\164\x5f\x49\x44", 0); } public function iooowgsqoyqseyuu($comment) { $aokagokqyuysuksm = null; if ($comment instanceof WP_Comment) { goto aqoumegesyioyyme; } if (!is_numeric($comment)) { goto uiiiomwgksaissoc; } $aokagokqyuysuksm = $comment; uiiiomwgksaissoc: goto uwyayemiakeqosci; aqoumegesyioyyme: $aokagokqyuysuksm = $comment->comment_ID; uwyayemiakeqosci: return $aokagokqyuysuksm; } public function uikgwcuascgeissw($comment) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $this->ayueggmoqeeukqmq($comment); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym)); $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment); $ocogsiouoiuuguym = $this->squyiyimquqicqke($comment); return sprintf("\x25\x73\40\55\x20\45\x73\40\x2d\40\x25\x73\40\x2d\x20\45\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs); } public function msyqmssukoqkqkau($comment) { $ycoeoaakqyskgykq = 0; if (!($comment = $this->get($comment))) { goto sqswqiyeaauwaeui; } $ycoeoaakqyskgykq = $comment->user_id; sqswqiyeaauwaeui: return $ycoeoaakqyskgykq; } public function squyiyimquqicqke($comment, $saqmwwmqiwmkiwaa = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = ''; if (!($comment = $this->get($comment))) { goto gksysyaaaaeasgmg; } if ($saqmwwmqiwmkiwaa) { goto qyemiqcwoyeyeyiw; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); qyemiqcwoyeyeyiw: $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $comment->comment_date, false); if (!$egkeamycaysqsoma) { goto ksiskiqygouakumc; } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x67\145\164\x5f\143\x6f\x6d\x6d\145\156\164\x5f\x64\x61\164\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $comment); ksiskiqygouakumc: gksysyaaaaeasgmg: return $ocogsiouoiuuguym; } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::yayciqueeakqwese => '', Constants::qiyqwyiiwykeccmo => false]); return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function yosyouqyoowwowee($gcqseksiskwueksc, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $gcqseksiskwueksc; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function omkaowmygoqwsywq($ggauoeuaesiymgee = 10) : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga($ggauoeuaesiymgee); } public function uqwgsuysegkweago() : bool { return "\x65\144\151\164\x63\157\155\155\x65\x6e\164" === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); } public function immcwcemcmyosyoo(bool $awqscowmskeuymeu = true) { $comment = ''; if (isset($_GET[Constants::uqgcmmosieyimiku], $_GET["\x63"]) && $_GET[Constants::uqgcmmosieyimiku] == "\x65\x64\151\164\x63\x6f\x6d\155\145\x6e\x74") { goto suycymikusukkyio; } if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST["\143\x6f\x6d\155\145\156\x74\137\x49\x44"]) && $_POST[Constants::uqgcmmosieyimiku] == "\x65\144\x69\x74\x65\x64\x63\x6f\x6d\155\x65\156\x74")) { goto gwauyogieqaqueyu; } $comment = $_POST["\x63\157\155\x6d\x65\x6e\x74\x5f\111\x44"]; gwauyogieqaqueyu: goto mkseiiygswgckuyi; suycymikusukkyio: $comment = $_GET["\x63"]; mkseiiygswgckuyi: if (!$comment) { goto ogksggygiqgccsgs; } $comment = $this->get($comment); ogksggygiqgccsgs: return $comment; } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $comment = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $comment = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->igawqaomowicuayw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $cuyooiakswegosog); } public function kocmoimugqqoeawy(array $ywmkwiwkosakssii = []) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto uokamacqkkiqccku; } if (!(!$mumyimcwkaemyyue->esqicqsuigywkaqw() && ($mumyimcwkaemyyue->qmssqeyayicowkgy() || $mumyimcwkaemyyue->ocwoeosukggumggw() || $mumyimcwkaemyyue->sgayqmgoigoseaoo()))) { goto niiosgywwiykokkq; } global $wp_rewrite; $suaemuyiacqyugsm = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\160\141\x67\145"); if ($suaemuyiacqyugsm) { goto ugwcquomeuagcuma; } $suaemuyiacqyugsm = 1; ugwcquomeuagcuma: $kmsquaeucgusuyio = get_comment_pages_count(); $ycmguuqqaiisymgg = array(Constants::kkwcgeymmoomceyo => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x63\160\141\147\145", "\x25\x23\45"), Constants::qaacaqioeyiuakeu => true, Constants::squoamkioomemiyi => "\x70\x6c\x61\x69\156", Constants::uiiqiokqwmccomiu => $kmsquaeucgusuyio, Constants::yqemseykugmsyeqa => '', Constants::asmooogmgyecqqka => $suaemuyiacqyugsm, "\141\144\x64\137\146\x72\141\147\x6d\145\x6e\164" => "\43\143\x6f\x6d\x6d\145\156\x74\x73"); if (!$wp_rewrite->using_permalinks()) { goto awysggkgocqkkmaq; } $ycmguuqqaiisymgg["\142\x61\163\145"] = user_trailingslashit(trailingslashit($this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($mumyimcwkaemyyue->imgymusqgccqsqqq())) . $wp_rewrite->comments_pagination_base . "\55\x25\x23\x25", "\x63\157\x6d\155\x65\156\x74\x70\141\x67\x65\x64"); awysggkgocqkkmaq: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $egegwkemucseqaaa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wewicgosooacoayq($ywmkwiwkosakssii); if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu] && Constants::kgmecoswscqqsymg !== $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { goto wccqiqisegqowemu; } return $egegwkemucseqaaa; goto pkueqgmoqweqmssi; wccqiqisegqowemu: echo $egegwkemucseqaaa; pkueqgmoqweqmssi: niiosgywwiykokkq: goto gmocwmmyommsqkky; uokamacqkkiqccku: return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->wewicgosooacoayq($ywmkwiwkosakssii); gmocwmmyommsqkky: } }
