<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; class Comment extends Common { public function get($comment) { if ($comment instanceof WP_Comment) { goto yqewwggigucqaiou; } $comment = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->get($this->iooowgsqoyqseyuu($comment)); yqewwggigucqaiou: return $comment; } public function ayueggmoqeeukqmq($comment) { $post = null; $comment = $this->get($comment); if (!$comment instanceof WP_Comment) { goto moqsoaomwaeykgei; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($comment->comment_post_ID, Constants::ckmqoekmugkggeym, true); moqsoaomwaeykgei: return $post; } public function qqiwsumoyiukmgco($comment) : int { if (!is_numeric($comment)) { goto uiiiomwgksaissoc; } $comment = $this->get($comment); uiiiomwgksaissoc: return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($comment, "\x63\157\x6d\155\x65\x6e\164\x5f\160\x61\162\x65\x6e\x74", 0); } public function cikwsikikwcmqwou($comment) : int { return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($comment), "\143\x6f\x6d\x6d\x65\x6e\x74\x5f\160\157\163\164\137\111\x44", 0); } public function iooowgsqoyqseyuu($comment) { $aokagokqyuysuksm = null; if ($comment instanceof WP_Comment) { goto uwyayemiakeqosci; } if (!is_numeric($comment)) { goto aqoumegesyioyyme; } $aokagokqyuysuksm = $comment; aqoumegesyioyyme: goto sqswqiyeaauwaeui; uwyayemiakeqosci: $aokagokqyuysuksm = $comment->comment_ID; sqswqiyeaauwaeui: return $aokagokqyuysuksm; } public function uikgwcuascgeissw($comment) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $this->ayueggmoqeeukqmq($comment); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym)); $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment); $ocogsiouoiuuguym = $this->squyiyimquqicqke($comment); return sprintf("\x25\x73\40\55\40\45\163\40\55\x20\45\x73\x20\x2d\x20\x25\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs); } public function msyqmssukoqkqkau($comment) { $ycoeoaakqyskgykq = 0; if (!($comment = $this->get($comment))) { goto qyemiqcwoyeyeyiw; } $ycoeoaakqyskgykq = $comment->user_id; qyemiqcwoyeyeyiw: return $ycoeoaakqyskgykq; } public function squyiyimquqicqke($comment, $saqmwwmqiwmkiwaa = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = ''; if (!($comment = $this->get($comment))) { goto gwauyogieqaqueyu; } if ($saqmwwmqiwmkiwaa) { goto ksiskiqygouakumc; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); ksiskiqygouakumc: $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $comment->comment_date, false); if (!$egkeamycaysqsoma) { goto gksysyaaaaeasgmg; } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\147\145\x74\x5f\143\157\155\x6d\x65\x6e\164\137\144\x61\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $comment); gksysyaaaaeasgmg: gwauyogieqaqueyu: return $ocogsiouoiuuguym; } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::yayciqueeakqwese => '', Constants::qiyqwyiiwykeccmo => false]); return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function yosyouqyoowwowee($gcqseksiskwueksc, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $gcqseksiskwueksc; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function omkaowmygoqwsywq($ggauoeuaesiymgee = 10) : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga($ggauoeuaesiymgee); } public function uqwgsuysegkweago() : bool { return "\145\x64\151\164\143\157\x6d\x6d\x65\x6e\164" === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); } public function immcwcemcmyosyoo(bool $awqscowmskeuymeu = true) { $comment = ''; if (isset($_GET[Constants::uqgcmmosieyimiku], $_GET["\143"]) && $_GET[Constants::uqgcmmosieyimiku] == "\x65\144\x69\x74\143\157\x6d\155\145\156\x74") { goto mkseiiygswgckuyi; } if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST["\x63\x6f\x6d\x6d\x65\x6e\164\137\111\x44"]) && $_POST[Constants::uqgcmmosieyimiku] == "\x65\x64\x69\164\x65\144\x63\x6f\155\x6d\145\x6e\164")) { goto suycymikusukkyio; } $comment = $_POST["\x63\x6f\155\155\x65\156\164\137\x49\x44"]; suycymikusukkyio: goto ogksggygiqgccsgs; mkseiiygswgckuyi: $comment = $_GET["\x63"]; ogksggygiqgccsgs: if (!$comment) { goto ugwcquomeuagcuma; } $comment = $this->get($comment); ugwcquomeuagcuma: return $comment; } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $comment = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $comment = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->igawqaomowicuayw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $cuyooiakswegosog); } public function kocmoimugqqoeawy(array $ywmkwiwkosakssii = []) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto gmocwmmyommsqkky; } if (!(!$mumyimcwkaemyyue->esqicqsuigywkaqw() && ($mumyimcwkaemyyue->qmssqeyayicowkgy() || $mumyimcwkaemyyue->ocwoeosukggumggw() || $mumyimcwkaemyyue->sgayqmgoigoseaoo()))) { goto uokamacqkkiqccku; } global $wp_rewrite; $suaemuyiacqyugsm = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\160\141\x67\x65"); if ($suaemuyiacqyugsm) { goto awysggkgocqkkmaq; } $suaemuyiacqyugsm = 1; awysggkgocqkkmaq: $kmsquaeucgusuyio = get_comment_pages_count(); $ycmguuqqaiisymgg = array(Constants::kkwcgeymmoomceyo => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\143\160\x61\147\145", "\45\x23\45"), Constants::qaacaqioeyiuakeu => true, Constants::squoamkioomemiyi => "\160\154\141\x69\x6e", Constants::uiiqiokqwmccomiu => $kmsquaeucgusuyio, Constants::yqemseykugmsyeqa => '', Constants::asmooogmgyecqqka => $suaemuyiacqyugsm, "\x61\144\x64\x5f\146\162\141\x67\x6d\x65\156\x74" => "\x23\143\157\155\x6d\145\x6e\x74\x73"); if (!$wp_rewrite->using_permalinks()) { goto wccqiqisegqowemu; } $ycmguuqqaiisymgg["\x62\x61\x73\x65"] = user_trailingslashit(trailingslashit($this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($mumyimcwkaemyyue->imgymusqgccqsqqq())) . $wp_rewrite->comments_pagination_base . "\x2d\45\43\45", "\x63\157\x6d\155\145\156\x74\160\x61\x67\x65\x64"); wccqiqisegqowemu: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $egegwkemucseqaaa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wewicgosooacoayq($ywmkwiwkosakssii); if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu] && Constants::kgmecoswscqqsymg !== $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { goto pkueqgmoqweqmssi; } return $egegwkemucseqaaa; goto niiosgywwiykokkq; pkueqgmoqweqmssi: echo $egegwkemucseqaaa; niiosgywwiykokkq: uokamacqkkiqccku: goto wmyaoiwaoycgwucw; gmocwmmyommsqkky: return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->wewicgosooacoayq($ywmkwiwkosakssii); wmyaoiwaoycgwucw: } }
