<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723ec7e2db2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Foundation; use WC_Cart; use WC_Checkout; use WC_Coupon; use WC_Emails; use WC_Session; use WC_Session_Handler; use WooCommerce as WC; class Woocommerce extends Common { public function wcmmcciyowmqwmyc() : ?WC { $ceigmcuwmccesick = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ceigmcuwmccesick(); if (!$ceigmcuwmccesick) { global $woocommerce; $ceigmcuwmccesick = $woocommerce; } return $ceigmcuwmccesick; } public function msgcoimkwykemoui() : WC_Emails { return $this->wcmmcciyowmqwmyc()->mailer(); } public function yiyqecawioyosoaw(string $qqscaoyqikuyeoaw, array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii); return ob_get_clean(); } public function ggocakcisguuokai() : bool { return class_exists("\x77\x6f\x6f\x63\157\x6d\x6d\x65\x72\143\x65") && $this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\x6f\157\x63\157\155\x6d\145\162\x63\145\x2f\167\x6f\x6f\x63\157\155\155\x65\x72\x63\145\x2e\160\x68\x70"); } public function mkiigkeqaeiwqyua() : bool { return in_array($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->useawgqusasoukqm(), ["\x49\x52\x54", "\x49\x52\x52"]); } public function gmoosossamayqukq() { $gaeqamemwmwsyukm = 0; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $gaeqamemwmwsyukm = $wwcysoksoogyacog->get_cart_contents_count(); } return $gaeqamemwmwsyukm; } public function icsokmyykmuweoco($suaemuyiacqyugsm, $post = null) : bool { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($suaemuyiacqyugsm) == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function ewswusimyeosaogm(?string $uusmaiomayssaecw = null) { $jkmcwmwkaqwqegqq = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ewswusimyeosaogm(); if ($uusmaiomayssaecw) { $jkmcwmwkaqwqegqq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($jkmcwmwkaqwqegqq, $uusmaiomayssaecw, ''); } return $jkmcwmwkaqwqegqq; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\x77\x6f\x6f\143\157\155\x6d\145\162\x63\x65\x5f") { if ($yuwymayicwwqiske) { $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw; } return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco("\x77\x63\x2d\163\145\164\x74\x69\x6e\147\x73"); } public function kccgkwigyyiugcco() : bool { return "\x79\x65\x73" === $this->giiuwsmyumqwwiyq("\x65\156\x61\x62\x6c\x65\137\x6d\171\x61\143\143\x6f\165\x6e\x74\x5f\x72\x65\147\151\x73\164\x72\x61\164\x69\x6f\x6e"); } public function gimisysaiasieees() : bool { $uwqkkwmiiumuukoa = false; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $uwqkkwmiiumuukoa = $ceigmcuwmccesick->is_rest_api_request(); } return $uwqkkwmiiumuukoa; } public function cqgggooocsmkckck() : ?WC_Cart { $wwcysoksoogyacog = null; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $wwcysoksoogyacog = $ceigmcuwmccesick->cart; } return $wwcysoksoogyacog; } public function qmgkumeygiksekck() : ?WC_Checkout { $yogeuygiqackeiky = null; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $yogeuygiqackeiky = $ceigmcuwmccesick->checkout(); } return $yogeuygiqackeiky; } public function ygywcicqqwcumoku() : array { $oammesyieqmwuwyi = []; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $oammesyieqmwuwyi = $wwcysoksoogyacog->get_cart(); } return $oammesyieqmwuwyi; } public function uakuwyoiooeqqiow() : array { $ygwoqcwsaggqoamw = []; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents(); } return $ygwoqcwsaggqoamw; } public function geoemsmuouqcqmei() : ?string { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->geoemsmuouqcqmei(); if (!$eeamcawaiqocomwy && ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { $eeamcawaiqocomwy = $ceigmcuwmccesick->cart->get_cart_url(); } return $eeamcawaiqocomwy; } public function cseyuuekwokecyyw() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\x73\150\x6f\x70"); } public function gauymgyqasaqyqam() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\155\x79\x61\143\x63\157\x75\156\164"); } public function gmeusukogwcamcyc($ymkomoccmymcoiea) : string { $ymqmyyeuycgmigyo = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->gmeusukogwcamcyc($ymkomoccmymcoiea); if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = "\x61\164\x74\162\151\142\165\164\x65\x5f" . $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->wouqysuosmigaggy($ymkomoccmymcoiea); } return $ymqmyyeuycgmigyo; } public function cuwomiomuqqkayoo($ioakeqoosmkukeaa) : bool { $eciuecguuowmeyqg = false; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $ioakeqoosmkukeaa = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($ioakeqoosmkukeaa); $eciuecguuowmeyqg = $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa); } return $eciuecguuowmeyqg; } public function eyqowkegeuiqawos($umkkkaqkwugkemce, int $mkgcaseqyaayywqo = 1, int $ckkqcoeeekoowmok = 0, array $isweyuoisomqyaag = [], array $icwicymcioeyeyek = []) : bool { $eciuecguuowmeyqg = false; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { try { $eciuecguuowmeyqg = $wwcysoksoogyacog->add_to_cart($umkkkaqkwugkemce, $mkgcaseqyaayywqo, $ckkqcoeeekoowmok, $isweyuoisomqyaag, $icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { } } return $eciuecguuowmeyqg; } public function mggqcqmaoaewoqke($umkkkaqkwugkemce, array $icwicymcioeyeyek = [], int $mkgcaseqyaayywqo = 1) : bool { return $this->eyqowkegeuiqawos($umkkkaqkwugkemce, $mkgcaseqyaayywqo, 0, [], $icwicymcioeyeyek); } public function ieiymsuouaseykkq($smwiiesyqsgyisos) : bool { $wgmoysogywicaaiw = false; if ($iqweseqyieuissek = $this->cqgggooocsmkckck()) { $aeqcomiyowaiwgyg = $iqweseqyieuissek->get_applied_coupons(); $wgmoysogywicaaiw = in_array($this->kyycwccmaemgokwu($smwiiesyqsgyisos), $aeqcomiyowaiwgyg, true); } return $wgmoysogywicaaiw; } public function gcqguaaiywkeaisa($smwiiesyqsgyisos) : string { $kqekumyckgkmomos = 0; if (!is_numeric($smwiiesyqsgyisos)) { if ($smwiiesyqsgyisos instanceof WC_Coupon) { $kqekumyckgkmomos = $smwiiesyqsgyisos->get_id(); } } else { $kqekumyckgkmomos = $smwiiesyqsgyisos; } return $kqekumyckgkmomos; } public function kyycwccmaemgokwu($smwiiesyqsgyisos) : string { if (!$smwiiesyqsgyisos instanceof WC_Coupon) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); } return $smwiiesyqsgyisos->get_code(); } public function oeeuywgiaywkimek($smwiiesyqsgyisos) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); if (!$this->kyycwccmaemgokwu($smwiiesyqsgyisos)) { $smwiiesyqsgyisos = false; } return $smwiiesyqsgyisos; } public function kiwwkaakimyikeic() { $cmussoegoauyyguw = null; if ($woocommerce = $this->wcmmcciyowmqwmyc()) { $cmussoegoauyyguw = $woocommerce->session; } return $cmussoegoauyyguw; } public function cmussoegoauyyguw(string $aiamqeawckcsuaou, string $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', bool $kekikiwsckuiyuyo = false) { if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { switch ($aiamqeawckcsuaou) { case "\x73\x65\x74": if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } else { $cmussoegoauyyguw->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie; } break; case Constants::isukcamoimieegam: if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo); } else { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmussoegoauyyguw, $ymqmyyeuycgmigyo, ''); } if ($kekikiwsckuiyuyo) { unset($cmussoegoauyyguw->{$ymqmyyeuycgmigyo}); } break; } } return $eqgoocgaqwqcimie; } public function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $this->cmussoegoauyyguw("\x73\x65\x74", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } public function wugwewwmekuaamos($ymqmyyeuycgmigyo, bool $kekikiwsckuiyuyo = false) { return $this->cmussoegoauyyguw(Constants::isukcamoimieegam, $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo); } public function aakkiwusygocokce($uusmaiomayssaecw) { if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { $cmussoegoauyyguw->__unset($uusmaiomayssaecw); } } public function mawiagaeusgooyuk($uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { $oyuakceioggwckok = $cmussoegoauyyguw->__isset($uusmaiomayssaecw); } return $oyuakceioggwckok; } public function uwyscmkeyeuqyukk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x74\151\x70" => '', Constants::gouqcwikiiygyasc => '', Constants::NAME => '', Constants::ciyoccqkiamemcmm => '']); $wwgucssaecqekuek = ["\x63\154\141\163\x73" => Constants::semqugiuwygamias, Constants::squoamkioomemiyi => Constants::semqugiuwygamias, Constants::NAME => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]]; if ($ywmkwiwkosakssii[Constants::ciyoccqkiamemcmm]) { $wwgucssaecqekuek["\x63\150\x65\x63\x6b\x65\144"] = true; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\x6c\141\142\145\154", ["\x63\154\x61\x73\x73" => "\x74\151\160\x73", "\x64\141\x74\141\x2d\164\x69\x70" => $ywmkwiwkosakssii["\164\x69\x70"]], [$ywmkwiwkosakssii[Constants::NAME], $swqimwqeweekeusq->qgsekwygcgawekeq("\x69\x6e\160\165\x74", $wwgucssaecqekuek)]); } public function ueksgoqcickqeasu($omkysikckkcieckq) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($omkysikckkcieckq)); } public function issqoquscuyykomk($ymqmyyeuycgmigyo) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($ymqmyyeuycgmigyo)); } public function qqwewmuqiukymkoi($suaemuyiacqyugsm) : ?string { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } public function cswsgqkiqaowoamq() : ?string { return $this->ueksgoqcickqeasu("\167\157\x6f\x63\x6f\x6d\155\x65\x72\x63\145\x5f\x6d\x79\141\x63\x63\157\x75\156\x74\137\160\x61\x67\x65\137\x69\144"); } public function ssmeikuayawmweeu() : ?string { return $this->issqoquscuyykomk("\x73\150\x6f\x70"); } public function emmikkmmowqqqsew() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\157\162\144\x65\162\163"); } public function guuoascmyqygwsic() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\x64\141\x73\x68\x62\157\141\x72\144"); } public function wiioyggagqmsykus() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\144\157\167\x6e\x6c\x6f\141\144\163"); } }
