<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; class Comment extends Common { public function get($comment) { if ($comment instanceof WP_Comment) { goto kogcmeyqyokimaqo; } $comment = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->get($this->iooowgsqoyqseyuu($comment)); kogcmeyqyokimaqo: return $comment; } public function ayueggmoqeeukqmq($comment) { $post = null; $comment = $this->get($comment); if (!$comment instanceof WP_Comment) { goto iieiwkmcwkocasiq; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($comment->comment_post_ID, Constants::ckmqoekmugkggeym, true); iieiwkmcwkocasiq: return $post; } public function qqiwsumoyiukmgco($comment) : int { if (!is_numeric($comment)) { goto ucasywwoeiooacwk; } $comment = $this->get($comment); ucasywwoeiooacwk: return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($comment, "\143\157\155\x6d\x65\156\164\x5f\x70\x61\162\x65\x6e\x74", 0); } public function cikwsikikwcmqwou($comment) : int { return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($comment), "\143\157\155\155\x65\156\x74\x5f\x70\x6f\x73\x74\137\111\104", 0); } public function iooowgsqoyqseyuu($comment) { $aokagokqyuysuksm = null; if ($comment instanceof WP_Comment) { goto kscecowaeuymysgo; } if (!is_numeric($comment)) { goto gkmoqsgamgwkwsas; } $aokagokqyuysuksm = $comment; gkmoqsgamgwkwsas: goto owqsmgycisgmmasg; kscecowaeuymysgo: $aokagokqyuysuksm = $comment->comment_ID; owqsmgycisgmmasg: return $aokagokqyuysuksm; } public function uikgwcuascgeissw($comment) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $this->ayueggmoqeeukqmq($comment); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym)); $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment); $ocogsiouoiuuguym = $this->squyiyimquqicqke($comment); return sprintf("\x25\163\40\x2d\40\45\x73\x20\55\40\x25\163\40\x2d\40\45\163", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs); } public function msyqmssukoqkqkau($comment) { $ycoeoaakqyskgykq = 0; if (!($comment = $this->get($comment))) { goto ucwcmgeksyiggaqi; } $ycoeoaakqyskgykq = $comment->user_id; ucwcmgeksyiggaqi: return $ycoeoaakqyskgykq; } public function squyiyimquqicqke($comment, $saqmwwmqiwmkiwaa = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = ''; if (!($comment = $this->get($comment))) { goto moqoommaoiemcoqk; } if ($saqmwwmqiwmkiwaa) { goto sagosckgcimciqya; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); sagosckgcimciqya: $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $comment->comment_date, false); if (!$egkeamycaysqsoma) { goto ysgecwqkekegmywg; } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x67\145\x74\x5f\x63\x6f\x6d\x6d\x65\x6e\x74\x5f\144\141\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $comment); ysgecwqkekegmywg: moqoommaoiemcoqk: return $ocogsiouoiuuguym; } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::yayciqueeakqwese => '', Constants::qiyqwyiiwykeccmo => false]); return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function yosyouqyoowwowee($gcqseksiskwueksc, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $gcqseksiskwueksc; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function omkaowmygoqwsywq($ggauoeuaesiymgee = 10) : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga($ggauoeuaesiymgee); } public function uqwgsuysegkweago() : bool { return "\x65\x64\x69\164\x63\x6f\x6d\x6d\x65\156\x74" === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); } public function immcwcemcmyosyoo(bool $awqscowmskeuymeu = true) { $comment = ''; if (isset($_GET[Constants::uqgcmmosieyimiku], $_GET["\x63"]) && $_GET[Constants::uqgcmmosieyimiku] == "\145\x64\151\x74\143\157\155\155\145\156\164") { goto wcwsogoecyummieu; } if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST["\x63\157\x6d\155\145\x6e\x74\137\x49\104"]) && $_POST[Constants::uqgcmmosieyimiku] == "\145\x64\151\x74\145\144\143\157\155\x6d\x65\156\164")) { goto cqiuouaccqyaiogc; } $comment = $_POST["\x63\x6f\155\x6d\145\156\164\x5f\111\x44"]; cqiuouaccqyaiogc: goto ycaqgqcgsaogwqey; wcwsogoecyummieu: $comment = $_GET["\143"]; ycaqgqcgsaogwqey: if (!$comment) { goto eugsieawaqqskgam; } $comment = $this->get($comment); eugsieawaqqskgam: return $comment; } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $comment = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $comment = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->igawqaomowicuayw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $cuyooiakswegosog); } public function kocmoimugqqoeawy(array $ywmkwiwkosakssii = []) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto mmumoewcwoeqqikq; } if (!(!$mumyimcwkaemyyue->esqicqsuigywkaqw() && ($mumyimcwkaemyyue->qmssqeyayicowkgy() || $mumyimcwkaemyyue->ocwoeosukggumggw() || $mumyimcwkaemyyue->sgayqmgoigoseaoo()))) { goto yuuweaqskiwsqcma; } global $wp_rewrite; $suaemuyiacqyugsm = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\160\x61\x67\x65"); if ($suaemuyiacqyugsm) { goto eawgawckwmwauyoe; } $suaemuyiacqyugsm = 1; eawgawckwmwauyoe: $kmsquaeucgusuyio = get_comment_pages_count(); $ycmguuqqaiisymgg = array(Constants::kkwcgeymmoomceyo => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x63\160\141\147\x65", "\x25\x23\45"), Constants::qaacaqioeyiuakeu => true, Constants::squoamkioomemiyi => "\x70\x6c\x61\151\156", Constants::uiiqiokqwmccomiu => $kmsquaeucgusuyio, Constants::yqemseykugmsyeqa => '', Constants::asmooogmgyecqqka => $suaemuyiacqyugsm, "\x61\144\x64\x5f\146\162\141\x67\x6d\145\156\164" => "\x23\143\x6f\x6d\x6d\x65\x6e\x74\163"); if (!$wp_rewrite->using_permalinks()) { goto qqucyysuwawsqsyi; } $ycmguuqqaiisymgg["\142\141\163\x65"] = user_trailingslashit(trailingslashit($this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($mumyimcwkaemyyue->imgymusqgccqsqqq())) . $wp_rewrite->comments_pagination_base . "\x2d\x25\x23\45", "\143\x6f\155\155\145\x6e\x74\x70\x61\x67\x65\144"); qqucyysuwawsqsyi: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $egegwkemucseqaaa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wewicgosooacoayq($ywmkwiwkosakssii); if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu] && Constants::kgmecoswscqqsymg !== $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { goto kqykqkseesagqqyq; } return $egegwkemucseqaaa; goto scaqkaeuuiukecqw; kqykqkseesagqqyq: echo $egegwkemucseqaaa; scaqkaeuuiukecqw: yuuweaqskiwsqcma: goto suussioiakqqoucq; mmumoewcwoeqqikq: return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->wewicgosooacoayq($ywmkwiwkosakssii); suussioiakqqoucq: } }
