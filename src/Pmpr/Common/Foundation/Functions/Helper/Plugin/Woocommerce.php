<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc48145c0e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Foundation; use WC_Cart; use WC_Checkout; use WC_Coupon; use WC_Emails; use WC_Session; use WC_Session_Handler; use WooCommerce as WC; class Woocommerce extends Common { public function wcmmcciyowmqwmyc() : ?WC { $ceigmcuwmccesick = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ceigmcuwmccesick(); if (!$ceigmcuwmccesick) { global $woocommerce; $ceigmcuwmccesick = $woocommerce; } return $ceigmcuwmccesick; } public function omugyqoocwwewimm(string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $msasmemeuceeaska = []; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $msasmemeuceeaska = $ceigmcuwmccesick->payment_gateways()->get_available_payment_gateways(); if ($aqykuigiuwmmcieu === Constants::eoaiagsgqsmskugs) { foreach ($msasmemeuceeaska as $aokagokqyuysuksm => $qgciuiagkkguykgs) { $msasmemeuceeaska[$aokagokqyuysuksm] = $qgciuiagkkguykgs->get_title(); } } } return $msasmemeuceeaska; } public function msgcoimkwykemoui() : WC_Emails { return $this->wcmmcciyowmqwmyc()->mailer(); } public function yiyqecawioyosoaw(string $qqscaoyqikuyeoaw, array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii); return ob_get_clean(); } public function ggocakcisguuokai() : bool { return class_exists("\167\x6f\157\143\157\x6d\155\x65\x72\x63\145") && $this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\157\x63\x6f\x6d\x6d\x65\162\143\x65\57\x77\x6f\x6f\143\x6f\x6d\155\x65\x72\x63\145\56\160\x68\160"); } public function mkiigkeqaeiwqyua() : bool { return in_array($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->useawgqusasoukqm(), ["\111\122\124", "\111\122\x52"]); } public function gmoosossamayqukq() { $gaeqamemwmwsyukm = 0; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $gaeqamemwmwsyukm = $wwcysoksoogyacog->get_cart_contents_count(); } return $gaeqamemwmwsyukm; } public function icsokmyykmuweoco($suaemuyiacqyugsm, $post = null) : bool { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($suaemuyiacqyugsm) == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function ewswusimyeosaogm(?string $uusmaiomayssaecw = null) { $jkmcwmwkaqwqegqq = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ewswusimyeosaogm(); if ($uusmaiomayssaecw) { $jkmcwmwkaqwqegqq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($jkmcwmwkaqwqegqq, $uusmaiomayssaecw, ''); } return $jkmcwmwkaqwqegqq; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\167\157\157\143\157\155\155\145\162\143\x65\x5f") { if ($yuwymayicwwqiske) { $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw; } return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco("\x77\143\x2d\x73\145\x74\x74\x69\x6e\x67\163"); } public function kccgkwigyyiugcco() : bool { return "\x79\145\x73" === $this->giiuwsmyumqwwiyq("\x65\x6e\141\142\x6c\145\x5f\155\171\x61\143\x63\157\165\156\164\137\162\x65\147\151\x73\164\162\x61\164\151\157\156"); } public function gimisysaiasieees() : bool { $uwqkkwmiiumuukoa = false; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $uwqkkwmiiumuukoa = $ceigmcuwmccesick->is_rest_api_request(); } return $uwqkkwmiiumuukoa; } public function cqgggooocsmkckck() : ?WC_Cart { $wwcysoksoogyacog = null; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $wwcysoksoogyacog = $ceigmcuwmccesick->cart; } return $wwcysoksoogyacog; } public function qmgkumeygiksekck() : ?WC_Checkout { $yogeuygiqackeiky = null; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $yogeuygiqackeiky = $ceigmcuwmccesick->checkout(); } return $yogeuygiqackeiky; } public function ygywcicqqwcumoku() : array { $oammesyieqmwuwyi = []; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $oammesyieqmwuwyi = $wwcysoksoogyacog->get_cart(); } return $oammesyieqmwuwyi; } public function uakuwyoiooeqqiow() : array { $ygwoqcwsaggqoamw = []; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents(); } return $ygwoqcwsaggqoamw; } public function geoemsmuouqcqmei() : ?string { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->geoemsmuouqcqmei(); if (!$eeamcawaiqocomwy && ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { $eeamcawaiqocomwy = $ceigmcuwmccesick->cart->get_cart_url(); } return $eeamcawaiqocomwy; } public function cseyuuekwokecyyw() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\163\150\x6f\x70"); } public function gauymgyqasaqyqam() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\x6d\x79\141\x63\143\x6f\x75\x6e\x74"); } public function gmeusukogwcamcyc($ymkomoccmymcoiea) : string { $ymqmyyeuycgmigyo = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->gmeusukogwcamcyc($ymkomoccmymcoiea); if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = "\x61\164\x74\x72\151\142\x75\164\x65\137" . $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->wouqysuosmigaggy($ymkomoccmymcoiea); } return $ymqmyyeuycgmigyo; } public function cuwomiomuqqkayoo($ioakeqoosmkukeaa) : bool { $eciuecguuowmeyqg = false; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $ioakeqoosmkukeaa = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($ioakeqoosmkukeaa); $eciuecguuowmeyqg = $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa); } return $eciuecguuowmeyqg; } public function eyqowkegeuiqawos($umkkkaqkwugkemce, int $mkgcaseqyaayywqo = 1, int $ckkqcoeeekoowmok = 0, array $isweyuoisomqyaag = [], array $icwicymcioeyeyek = []) : bool { $eciuecguuowmeyqg = false; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { try { $eciuecguuowmeyqg = $wwcysoksoogyacog->add_to_cart($umkkkaqkwugkemce, $mkgcaseqyaayywqo, $ckkqcoeeekoowmok, $isweyuoisomqyaag, $icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { } } return $eciuecguuowmeyqg; } public function mggqcqmaoaewoqke($umkkkaqkwugkemce, array $icwicymcioeyeyek = [], int $mkgcaseqyaayywqo = 1) : bool { return $this->eyqowkegeuiqawos($umkkkaqkwugkemce, $mkgcaseqyaayywqo, 0, [], $icwicymcioeyeyek); } public function ieiymsuouaseykkq($smwiiesyqsgyisos) : bool { $wgmoysogywicaaiw = false; if ($iqweseqyieuissek = $this->cqgggooocsmkckck()) { $aeqcomiyowaiwgyg = $iqweseqyieuissek->get_applied_coupons(); $wgmoysogywicaaiw = in_array($this->kyycwccmaemgokwu($smwiiesyqsgyisos), $aeqcomiyowaiwgyg, true); } return $wgmoysogywicaaiw; } public function gcqguaaiywkeaisa($smwiiesyqsgyisos) : string { $kqekumyckgkmomos = 0; if (!is_numeric($smwiiesyqsgyisos)) { if ($smwiiesyqsgyisos instanceof WC_Coupon) { $kqekumyckgkmomos = $smwiiesyqsgyisos->get_id(); } } else { $kqekumyckgkmomos = $smwiiesyqsgyisos; } return $kqekumyckgkmomos; } public function kyycwccmaemgokwu($smwiiesyqsgyisos) : string { if (!$smwiiesyqsgyisos instanceof WC_Coupon) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); } return $smwiiesyqsgyisos->get_code(); } public function oeeuywgiaywkimek($smwiiesyqsgyisos) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); if (!$this->kyycwccmaemgokwu($smwiiesyqsgyisos)) { $smwiiesyqsgyisos = false; } return $smwiiesyqsgyisos; } public function kiwwkaakimyikeic() { $cmussoegoauyyguw = null; if ($woocommerce = $this->wcmmcciyowmqwmyc()) { $cmussoegoauyyguw = $woocommerce->session; } return $cmussoegoauyyguw; } public function cmussoegoauyyguw(string $aiamqeawckcsuaou, string $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', bool $kekikiwsckuiyuyo = false) { if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { switch ($aiamqeawckcsuaou) { case "\163\145\164": if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } else { $cmussoegoauyyguw->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie; } break; case Constants::isukcamoimieegam: if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo); } else { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmussoegoauyyguw, $ymqmyyeuycgmigyo, ''); } if ($kekikiwsckuiyuyo) { unset($cmussoegoauyyguw->{$ymqmyyeuycgmigyo}); } break; } } return $eqgoocgaqwqcimie; } public function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $this->cmussoegoauyyguw("\x73\x65\x74", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } public function wugwewwmekuaamos($ymqmyyeuycgmigyo, bool $kekikiwsckuiyuyo = false) { return $this->cmussoegoauyyguw(Constants::isukcamoimieegam, $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo); } public function aakkiwusygocokce($uusmaiomayssaecw) { if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { $cmussoegoauyyguw->__unset($uusmaiomayssaecw); } } public function mawiagaeusgooyuk($uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { $oyuakceioggwckok = $cmussoegoauyyguw->__isset($uusmaiomayssaecw); } return $oyuakceioggwckok; } public function uwyscmkeyeuqyukk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\164\x69\x70" => '', Constants::gouqcwikiiygyasc => '', Constants::NAME => '', Constants::ciyoccqkiamemcmm => '']); $wwgucssaecqekuek = ["\x63\x6c\x61\x73\x73" => Constants::semqugiuwygamias, Constants::squoamkioomemiyi => Constants::semqugiuwygamias, Constants::NAME => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]]; if ($ywmkwiwkosakssii[Constants::ciyoccqkiamemcmm]) { $wwgucssaecqekuek["\143\x68\x65\143\x6b\x65\144"] = true; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\x6c\141\x62\145\154", ["\x63\154\141\x73\163" => "\164\x69\x70\163", "\x64\141\164\141\55\164\x69\160" => $ywmkwiwkosakssii["\x74\x69\160"]], [$ywmkwiwkosakssii[Constants::NAME], $swqimwqeweekeusq->qgsekwygcgawekeq("\x69\156\x70\165\164", $wwgucssaecqekuek)]); } public function ueksgoqcickqeasu($omkysikckkcieckq) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($omkysikckkcieckq)); } public function issqoquscuyykomk($ymqmyyeuycgmigyo) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($ymqmyyeuycgmigyo)); } public function qqwewmuqiukymkoi($suaemuyiacqyugsm) : ?string { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } public function cswsgqkiqaowoamq() : ?string { return $this->ueksgoqcickqeasu("\167\x6f\157\143\157\155\155\x65\162\143\x65\x5f\x6d\x79\141\x63\143\157\x75\x6e\164\137\160\141\147\145\137\x69\x64"); } public function emmikkmmowqqqsew() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\x6f\x72\144\145\x72\x73"); } public function guuoascmyqygwsic() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\144\x61\163\150\142\157\141\162\x64"); } public function wiioyggagqmsykus() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\x64\x6f\167\156\x6c\x6f\141\144\163"); } }
