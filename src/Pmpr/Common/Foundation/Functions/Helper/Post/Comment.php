<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; class Comment extends Common { public function get($comment) { if ($comment instanceof WP_Comment) { goto ikuegsumgygqkoiq; } $comment = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->get($this->iooowgsqoyqseyuu($comment)); ikuegsumgygqkoiq: return $comment; } public function ayueggmoqeeukqmq($comment) { $post = null; $comment = $this->get($comment); if (!$comment instanceof WP_Comment) { goto ycsyqeiqmgkqsykm; } $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($comment->comment_post_ID, Constants::ckmqoekmugkggeym, true); ycsyqeiqmgkqsykm: return $post; } public function qqiwsumoyiukmgco($comment) : int { if (!is_numeric($comment)) { goto wquwgeoesiweimsy; } $comment = $this->get($comment); wquwgeoesiweimsy: return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($comment, "\143\x6f\155\x6d\145\156\164\x5f\x70\x61\162\145\x6e\x74", 0); } public function cikwsikikwcmqwou($comment) : int { return (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($comment), "\143\x6f\155\155\145\x6e\x74\x5f\x70\x6f\x73\x74\x5f\111\104", 0); } public function iooowgsqoyqseyuu($comment) { $aokagokqyuysuksm = null; if ($comment instanceof WP_Comment) { goto euoyyamaesgwcumc; } if (!is_numeric($comment)) { goto kmikysaiomgcocuq; } $aokagokqyuysuksm = $comment; kmikysaiomgcocuq: goto iusisyuoomsaqyge; euoyyamaesgwcumc: $aokagokqyuysuksm = $comment->comment_ID; iusisyuoomsaqyge: return $aokagokqyuysuksm; } public function uikgwcuascgeissw($comment) : string { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $this->ayueggmoqeeukqmq($comment); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $useksmwkuswkwcqg = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw($seumokooiykcomco->gueasuouwqysmomu($post, Constants::ckmqoekmugkggeym)); $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment); $ocogsiouoiuuguym = $this->squyiyimquqicqke($comment); return sprintf("\x25\163\x20\x2d\x20\x25\163\40\x2d\40\45\x73\40\55\40\x25\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs); } public function msyqmssukoqkqkau($comment) { $ycoeoaakqyskgykq = 0; if (!($comment = $this->get($comment))) { goto iosumqekeyuyscwm; } $ycoeoaakqyskgykq = $comment->user_id; iosumqekeyuyscwm: return $ycoeoaakqyskgykq; } public function squyiyimquqicqke($comment, $saqmwwmqiwmkiwaa = null, bool $egkeamycaysqsoma = true) { $ocogsiouoiuuguym = ''; if (!($comment = $this->get($comment))) { goto gowseceuccyoykqg; } if ($saqmwwmqiwmkiwaa) { goto nwisymowgiuysywm; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); nwisymowgiuysywm: $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $comment->comment_date, false); if (!$egkeamycaysqsoma) { goto uoukmckqqaewiack; } $ocogsiouoiuuguym = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\147\x65\164\x5f\x63\157\155\x6d\x65\156\x74\137\x64\141\164\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $comment); uoukmckqqaewiack: gowseceuccyoykqg: return $ocogsiouoiuuguym; } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ciywsqoeiymemsys => Constants::eucymkqyykekuymy, Constants::yayciqueeakqwese => '', Constants::qiyqwyiiwykeccmo => false]); return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function yosyouqyoowwowee($gcqseksiskwueksc, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $gcqseksiskwueksc; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function omkaowmygoqwsywq($ggauoeuaesiymgee = 10) : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->miggcoaueioaoqga($ggauoeuaesiymgee); } public function uqwgsuysegkweago() : bool { return "\x65\x64\151\164\x63\157\155\155\145\156\164" === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); } public function immcwcemcmyosyoo(bool $awqscowmskeuymeu = true) { $comment = ''; if (isset($_GET[Constants::uqgcmmosieyimiku], $_GET["\143"]) && $_GET[Constants::uqgcmmosieyimiku] == "\145\144\x69\164\x63\157\x6d\155\145\156\164") { goto sqmgyqqesycegaog; } if (!(isset($_POST[Constants::uqgcmmosieyimiku], $_POST["\143\157\x6d\155\145\x6e\x74\x5f\x49\x44"]) && $_POST[Constants::uqgcmmosieyimiku] == "\x65\x64\x69\x74\145\x64\143\157\155\x6d\x65\156\x74")) { goto wmmymakwgisiiemm; } $comment = $_POST["\x63\157\x6d\155\x65\156\164\x5f\x49\x44"]; wmmymakwgisiiemm: goto auawcgwsgmocyikg; sqmgyqqesycegaog: $comment = $_GET["\x63"]; auawcgwsgmocyikg: if (!$comment) { goto csiywiqqacqiooam; } $comment = $this->get($comment); csiywiqqacqiooam: return $comment; } public function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment, $oyuqkqayqyqysyse = '') { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ksmqawcowkmegigw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $comment = null, bool $omasqoksqewuwwkq = false) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->giwmekimakcaawsq($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $comment = '', $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->smqukgcyacswysqa($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $comment = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->igawqaomowicuayw($this->iooowgsqoyqseyuu($comment), $uusmaiomayssaecw, $cuyooiakswegosog); } public function kocmoimugqqoeawy(array $ywmkwiwkosakssii = []) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto owmcuewayukusqmo; } if (!(!$mumyimcwkaemyyue->esqicqsuigywkaqw() && ($mumyimcwkaemyyue->qmssqeyayicowkgy() || $mumyimcwkaemyyue->ocwoeosukggumggw() || $mumyimcwkaemyyue->sgayqmgoigoseaoo()))) { goto gkswmkowgekmoecu; } global $wp_rewrite; $suaemuyiacqyugsm = $mumyimcwkaemyyue->qaumqeeagueuqkcg("\143\160\x61\147\145"); if ($suaemuyiacqyugsm) { goto ccuemieucuwkaiug; } $suaemuyiacqyugsm = 1; ccuemieucuwkaiug: $kmsquaeucgusuyio = get_comment_pages_count(); $ycmguuqqaiisymgg = array(Constants::kkwcgeymmoomceyo => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo("\143\160\x61\147\x65", "\x25\x23\45"), Constants::qaacaqioeyiuakeu => true, Constants::squoamkioomemiyi => "\x70\x6c\x61\x69\x6e", Constants::uiiqiokqwmccomiu => $kmsquaeucgusuyio, Constants::yqemseykugmsyeqa => '', Constants::asmooogmgyecqqka => $suaemuyiacqyugsm, "\x61\x64\144\x5f\x66\162\x61\x67\155\145\x6e\164" => "\x23\x63\157\155\x6d\145\x6e\164\x73"); if (!$wp_rewrite->using_permalinks()) { goto cgmoawqqgooiomam; } $ycmguuqqaiisymgg["\x62\x61\x73\145"] = user_trailingslashit(trailingslashit($this->caokeucsksukesyo()->kckogqkiycqeumoa()->qmgcisuuikgmqcsu($mumyimcwkaemyyue->imgymusqgccqsqqq())) . $wp_rewrite->comments_pagination_base . "\55\x25\x23\x25", "\143\157\155\x6d\x65\156\x74\160\x61\x67\145\144"); cgmoawqqgooiomam: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ycmguuqqaiisymgg); $egegwkemucseqaaa = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wewicgosooacoayq($ywmkwiwkosakssii); if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu] && Constants::kgmecoswscqqsymg !== $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { goto ckyyiokeqmgokkii; } return $egegwkemucseqaaa; goto igsmwqseogmyegee; ckyyiokeqmgokkii: echo $egegwkemucseqaaa; igsmwqseogmyegee: gkswmkowgekmoecu: goto cueascwqacykggki; owmcuewayukusqmo: return $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->wewicgosooacoayq($ywmkwiwkosakssii); cueascwqacykggki: } }
