<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; class Comment extends Common { public function get($comment) { if ($comment instanceof WP_Comment) { goto gyyuyqcmmcsoemkc; } $comment = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->get($this->iooowgsqoyqseyuu($comment)); gyyuyqcmmcsoemkc: return $comment; } public function ayueggmoqeeukqmq($comment) { $post = null; $comment = $this->get($comment); if (!$comment instanceof WP_Comment) { goto ukgemiyqimumoyoa; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($comment->comment_post_ID, Constants::ckmqoekmugkggeym, true); ukgemiyqimumoyoa: return $post; } public function qqiwsumoyiukmgco($comment) : int { if (!is_numeric($comment)) { goto miocgmmkkkksmisy; } $comment = $this->get($comment); miocgmmkkkksmisy: return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($comment, "\x63\x6f\155\155\x65\x6e\164\137\x70\141\162\145\156\164", 0); } public function cikwsikikwcmqwou($comment) : int { return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($comment), "\143\157\x6d\155\x65\156\164\x5f\x70\x6f\163\164\137\111\x44", 0); } public function iooowgsqoyqseyuu($comment) { $aokagokqyuysuksm = null; if ($comment instanceof WP_Comment) { goto weyuusiimkuykwca; } if (!is_numeric($comment)) { goto zsscgecwckmocwqa; } $aokagokqyuysuksm = $comment; zsscgecwckmocwqa: goto eggowcqiawiuwski; weyuusiimkuykwca: $aokagokqyuysuksm = $comment->comment_ID; eggowcqiawiuwski: return $aokagokqyuysuksm; } public function uikgwcuascgeissw($comment) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $this->ayueggmoqeeukqmq($comment); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym)); $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment); $ocogsiouoiuuguym = $this->squyiyimquqicqke($comment); return sprintf("\x25\163\x20\x2d\x20\45\163\x20\55\40\45\x73\40\x2d\40\45\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs); } public function msyqmssukoqkqkau($comment) { $ycoeoaakqyskgykq = 0; if (!($comment = $this->get($comment))) { goto igkameomykgywamu; } $ycoeoaakqyskgykq = $comment->user_id; igkameomykgywamu: return $ycoeoaakqyskgykq; } public function squyiyimquqicqke($comment, $saqmwwmqiwmkiwaa = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = ''; if (!($comment = $this->get($comment))) { goto qaaymsuwqmigcoea; } if ($saqmwwmqiwmkiwaa) { goto awgyiumgyeockqoa; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); awgyiumgyeockqoa: $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $comment->comment_date, false); if (!$egkeamycaysqsoma) { goto ouqgocoygmaiamou; } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\147\x65\x74\x5f\x63\157\x6d\x6d\x65\156\164\x5f\x64\141\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $comment); ouqgocoygmaiamou: qaaymsuwqmigcoea: return $ocogsiouoiuuguym; } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::yayciqueeakqwese => '', Constants::qiyqwyiiwykeccmo => false]); return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function yosyouqyoowwowee($gcqseksiskwueksc, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $gcqseksiskwueksc; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function omkaowmygoqwsywq($ggauoeuaesiymgee = 10) : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga($ggauoeuaesiymgee); } public function uqwgsuysegkweago() : bool { return "\x65\144\151\x74\143\157\155\155\145\156\x74" === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); } public function immcwcemcmyosyoo(bool $awqscowmskeuymeu = true) { $comment = ''; if (isset($_GET[Constants::uqgcmmosieyimiku], $_GET["\x63"]) && $_GET[Constants::uqgcmmosieyimiku] == "\145\x64\x69\x74\143\157\x6d\x6d\x65\156\164") { goto waiwugiowecgeeww; } if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST["\x63\157\155\x6d\x65\x6e\x74\137\111\x44"]) && $_POST[Constants::uqgcmmosieyimiku] == "\145\144\x69\x74\x65\144\x63\157\155\155\145\156\x74")) { goto qkgoiusmuuaqwywu; } $comment = $_POST["\x63\157\x6d\x6d\145\156\164\x5f\111\x44"]; qkgoiusmuuaqwywu: goto oaoggiyikquikqmg; waiwugiowecgeeww: $comment = $_GET["\143"]; oaoggiyikquikqmg: if (!$comment) { goto awcqsekwccegiugq; } $comment = $this->get($comment); awcqsekwccegiugq: return $comment; } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $comment = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $comment = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->igawqaomowicuayw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $cuyooiakswegosog); } public function kocmoimugqqoeawy(array $ywmkwiwkosakssii = []) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto gesseuyackqsekiy; } if (!(!$mumyimcwkaemyyue->esqicqsuigywkaqw() && ($mumyimcwkaemyyue->qmssqeyayicowkgy() || $mumyimcwkaemyyue->ocwoeosukggumggw() || $mumyimcwkaemyyue->sgayqmgoigoseaoo()))) { goto ywosowquuuociuio; } global $wp_rewrite; $suaemuyiacqyugsm = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\x63\160\x61\x67\145"); if ($suaemuyiacqyugsm) { goto wgawqekaeousiwwe; } $suaemuyiacqyugsm = 1; wgawqekaeousiwwe: $kmsquaeucgusuyio = get_comment_pages_count(); $ycmguuqqaiisymgg = array(Constants::kkwcgeymmoomceyo => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\x63\x70\141\147\145", "\45\43\45"), Constants::qaacaqioeyiuakeu => true, Constants::squoamkioomemiyi => "\x70\154\141\x69\156", Constants::uiiqiokqwmccomiu => $kmsquaeucgusuyio, Constants::yqemseykugmsyeqa => '', Constants::asmooogmgyecqqka => $suaemuyiacqyugsm, "\141\x64\x64\x5f\x66\x72\141\x67\x6d\x65\x6e\164" => "\x23\x63\x6f\x6d\155\145\x6e\164\x73"); if (!$wp_rewrite->using_permalinks()) { goto oewsmwkmgiiugcie; } $ycmguuqqaiisymgg["\x62\x61\x73\x65"] = user_trailingslashit(trailingslashit($this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($mumyimcwkaemyyue->imgymusqgccqsqqq())) . $wp_rewrite->comments_pagination_base . "\x2d\45\43\x25", "\143\x6f\155\x6d\x65\156\164\x70\141\147\x65\x64"); oewsmwkmgiiugcie: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $egegwkemucseqaaa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wewicgosooacoayq($ywmkwiwkosakssii); if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu] && Constants::kgmecoswscqqsymg !== $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { goto cuwwggakcukcesmy; } return $egegwkemucseqaaa; goto yukceuoyyusqyiak; cuwwggakcukcesmy: echo $egegwkemucseqaaa; yukceuoyyusqyiak: ywosowquuuociuio: goto eeimccqyqieauwuk; gesseuyackqsekiy: return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->wewicgosooacoayq($ywmkwiwkosakssii); eeimccqyqieauwuk: } }
