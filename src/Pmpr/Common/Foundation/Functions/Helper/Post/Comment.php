<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; class Comment extends Common { public function get($comment) { if ($comment instanceof WP_Comment) { goto cqokwokkmcecokwi; } $comment = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->get($this->iooowgsqoyqseyuu($comment)); cqokwokkmcecokwi: return $comment; } public function ayueggmoqeeukqmq($comment) { $post = null; $comment = $this->get($comment); if (!$comment instanceof WP_Comment) { goto qgaoikokgokgqaqi; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($comment->comment_post_ID, Constants::ckmqoekmugkggeym, true); qgaoikokgokgqaqi: return $post; } public function qqiwsumoyiukmgco($comment) : int { if (!is_numeric($comment)) { goto ikqwewkaooqqcwmw; } $comment = $this->get($comment); ikqwewkaooqqcwmw: return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($comment, "\143\x6f\x6d\x6d\x65\156\164\137\160\141\162\145\x6e\164", 0); } public function cikwsikikwcmqwou($comment) : int { return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($comment), "\143\157\155\x6d\145\x6e\164\x5f\160\157\163\x74\137\x49\104", 0); } public function iooowgsqoyqseyuu($comment) { $aokagokqyuysuksm = null; if ($comment instanceof WP_Comment) { goto ogmogeeogucogway; } if (!is_numeric($comment)) { goto oyqwymwomuameswa; } $aokagokqyuysuksm = $comment; oyqwymwomuameswa: goto ymcwgkmiysmukacs; ogmogeeogucogway: $aokagokqyuysuksm = $comment->comment_ID; ymcwgkmiysmukacs: return $aokagokqyuysuksm; } public function uikgwcuascgeissw($comment) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $this->ayueggmoqeeukqmq($comment); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym)); $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment); $ocogsiouoiuuguym = $this->squyiyimquqicqke($comment); return sprintf("\45\x73\40\x2d\x20\45\163\40\x2d\40\x25\163\40\x2d\x20\x25\163", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs); } public function msyqmssukoqkqkau($comment) { $ycoeoaakqyskgykq = 0; if (!($comment = $this->get($comment))) { goto auycewyimycgsusg; } $ycoeoaakqyskgykq = $comment->user_id; auycewyimycgsusg: return $ycoeoaakqyskgykq; } public function squyiyimquqicqke($comment, $saqmwwmqiwmkiwaa = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = ''; if (!($comment = $this->get($comment))) { goto mokwmqowycmwwkem; } if ($saqmwwmqiwmkiwaa) { goto eukmaswisycyiwik; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); eukmaswisycyiwik: $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $comment->comment_date, false); if (!$egkeamycaysqsoma) { goto ysgkwckuuwmeqmim; } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\147\145\x74\137\143\x6f\x6d\x6d\x65\156\164\x5f\144\141\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $comment); ysgkwckuuwmeqmim: mokwmqowycmwwkem: return $ocogsiouoiuuguym; } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::yayciqueeakqwese => '', Constants::qiyqwyiiwykeccmo => false]); return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function yosyouqyoowwowee($gcqseksiskwueksc, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $gcqseksiskwueksc; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function omkaowmygoqwsywq($ggauoeuaesiymgee = 10) : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga($ggauoeuaesiymgee); } public function uqwgsuysegkweago() : bool { return "\x65\144\151\x74\143\157\x6d\155\145\x6e\164" === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); } public function immcwcemcmyosyoo(bool $awqscowmskeuymeu = true) { $comment = ''; if (isset($_GET[Constants::uqgcmmosieyimiku], $_GET["\143"]) && $_GET[Constants::uqgcmmosieyimiku] == "\x65\144\151\x74\x63\x6f\155\155\145\x6e\x74") { goto ecyuccaigwwcquoq; } if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST["\x63\x6f\x6d\155\145\156\x74\x5f\x49\104"]) && $_POST[Constants::uqgcmmosieyimiku] == "\x65\x64\151\x74\x65\144\x63\157\155\x6d\x65\x6e\x74")) { goto wiakkcgyggaeaeoa; } $comment = $_POST["\x63\x6f\x6d\x6d\x65\156\164\x5f\x49\104"]; wiakkcgyggaeaeoa: goto oesgammmiwwkggki; ecyuccaigwwcquoq: $comment = $_GET["\x63"]; oesgammmiwwkggki: if (!$comment) { goto iwsckisegswykacc; } $comment = $this->get($comment); iwsckisegswykacc: return $comment; } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $comment = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $comment = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->igawqaomowicuayw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $cuyooiakswegosog); } public function kocmoimugqqoeawy(array $ywmkwiwkosakssii = []) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto suigamkkgmwiaakg; } if (!(!$mumyimcwkaemyyue->esqicqsuigywkaqw() && ($mumyimcwkaemyyue->qmssqeyayicowkgy() || $mumyimcwkaemyyue->ocwoeosukggumggw() || $mumyimcwkaemyyue->sgayqmgoigoseaoo()))) { goto wwwyuwogyaymawes; } global $wp_rewrite; $suaemuyiacqyugsm = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\x70\x61\147\x65"); if ($suaemuyiacqyugsm) { goto aawsuekkqeecmsuu; } $suaemuyiacqyugsm = 1; aawsuekkqeecmsuu: $kmsquaeucgusuyio = get_comment_pages_count(); $ycmguuqqaiisymgg = array(Constants::kkwcgeymmoomceyo => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x63\160\x61\x67\145", "\x25\43\x25"), Constants::qaacaqioeyiuakeu => true, Constants::squoamkioomemiyi => "\160\154\141\151\x6e", Constants::uiiqiokqwmccomiu => $kmsquaeucgusuyio, Constants::yqemseykugmsyeqa => '', Constants::asmooogmgyecqqka => $suaemuyiacqyugsm, "\141\144\x64\x5f\x66\x72\141\x67\x6d\145\x6e\x74" => "\43\x63\x6f\x6d\155\145\x6e\164\x73"); if (!$wp_rewrite->using_permalinks()) { goto uqckgkumgouqgcus; } $ycmguuqqaiisymgg["\142\x61\x73\145"] = user_trailingslashit(trailingslashit($this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($mumyimcwkaemyyue->imgymusqgccqsqqq())) . $wp_rewrite->comments_pagination_base . "\x2d\x25\x23\x25", "\x63\157\155\x6d\x65\x6e\x74\160\141\x67\x65\x64"); uqckgkumgouqgcus: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $egegwkemucseqaaa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wewicgosooacoayq($ywmkwiwkosakssii); if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu] && Constants::kgmecoswscqqsymg !== $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { goto sgiyakiusoqeesgi; } return $egegwkemucseqaaa; goto mmkoaqwkqwweiuco; sgiyakiusoqeesgi: echo $egegwkemucseqaaa; mmkoaqwkqwweiuco: wwwyuwogyaymawes: goto egekcweywqwukqwq; suigamkkgmwiaakg: return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->wewicgosooacoayq($ywmkwiwkosakssii); egekcweywqwukqwq: } }
