<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7a86064f08             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Cart; use WC_Checkout; use WC_Coupon; use WC_Emails; use WC_Session; use WC_Session_Handler; use WooCommerce as WC; class Woocommerce extends Common { public function wcmmcciyowmqwmyc() : ?WC { $ceigmcuwmccesick = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ceigmcuwmccesick(); if (!$ceigmcuwmccesick) { global $woocommerce; $ceigmcuwmccesick = $woocommerce; } return $ceigmcuwmccesick; } public function uqowqskaykgqokso($aumscagymwyyicag, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii['dont-change'] = true; return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii); } public function omugyqoocwwewimm(string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { $msasmemeuceeaska = []; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $msasmemeuceeaska = $ceigmcuwmccesick->payment_gateways()->get_available_payment_gateways(); if ($aqykuigiuwmmcieu === Constants::eoaiagsgqsmskugs) { foreach ($msasmemeuceeaska as $aokagokqyuysuksm => $qgciuiagkkguykgs) { $msasmemeuceeaska[$aokagokqyuysuksm] = $qgciuiagkkguykgs->get_title(); } } } return $msasmemeuceeaska; } public function msgcoimkwykemoui() : WC_Emails { return $this->wcmmcciyowmqwmyc()->mailer(); } public function yiyqecawioyosoaw(string $qqscaoyqikuyeoaw, array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii); return ob_get_clean(); } public function ggocakcisguuokai() : bool { return class_exists('woocommerce') && $this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai('woocommerce/woocommerce.php'); } public function mkiigkeqaeiwqyua() : bool { return in_array($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->useawgqusasoukqm(), ['IRT', 'IRR']); } public function gmoosossamayqukq() { $gaeqamemwmwsyukm = 0; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $gaeqamemwmwsyukm = $wwcysoksoogyacog->get_cart_contents_count(); } return $gaeqamemwmwsyukm; } public function icsokmyykmuweoco($suaemuyiacqyugsm, $post = null) : bool { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($suaemuyiacqyugsm) == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function ewswusimyeosaogm(?string $uusmaiomayssaecw = null) { $jkmcwmwkaqwqegqq = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ewswusimyeosaogm(); if ($uusmaiomayssaecw) { $jkmcwmwkaqwqegqq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($jkmcwmwkaqwqegqq, $uusmaiomayssaecw, ''); } return $jkmcwmwkaqwqegqq; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = 'woocommerce_') { if ($yuwymayicwwqiske) { $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw; } return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco('wc-settings'); } public function kccgkwigyyiugcco() : bool { return 'yes' === $this->giiuwsmyumqwwiyq('enable_myaccount_registration'); } public function gimisysaiasieees() : bool { $uwqkkwmiiumuukoa = false; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $uwqkkwmiiumuukoa = $ceigmcuwmccesick->is_rest_api_request(); } return $uwqkkwmiiumuukoa; } public function cqgggooocsmkckck() : ?WC_Cart { $wwcysoksoogyacog = null; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $wwcysoksoogyacog = $ceigmcuwmccesick->cart; } return $wwcysoksoogyacog; } public function qmgkumeygiksekck() : ?WC_Checkout { $yogeuygiqackeiky = null; if ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()) { $yogeuygiqackeiky = $ceigmcuwmccesick->checkout(); } return $yogeuygiqackeiky; } public function ygywcicqqwcumoku() : array { $oammesyieqmwuwyi = []; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $oammesyieqmwuwyi = $wwcysoksoogyacog->get_cart(); } return $oammesyieqmwuwyi; } public function uakuwyoiooeqqiow() : array { $ygwoqcwsaggqoamw = []; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents(); } return $ygwoqcwsaggqoamw; } public function geoemsmuouqcqmei() : ?string { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->geoemsmuouqcqmei(); if (!$eeamcawaiqocomwy && ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { $eeamcawaiqocomwy = $ceigmcuwmccesick->cart->get_cart_url(); } return $eeamcawaiqocomwy; } public function cseyuuekwokecyyw() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae('shop'); } public function gauymgyqasaqyqam() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae('myaccount'); } public function gmeusukogwcamcyc($ymkomoccmymcoiea) : string { $ymqmyyeuycgmigyo = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->gmeusukogwcamcyc($ymkomoccmymcoiea); if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = 'attribute_' . $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->wouqysuosmigaggy($ymkomoccmymcoiea); } return $ymqmyyeuycgmigyo; } public function cuwomiomuqqkayoo($ioakeqoosmkukeaa) : bool { $eciuecguuowmeyqg = false; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { $ioakeqoosmkukeaa = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($ioakeqoosmkukeaa); $eciuecguuowmeyqg = $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa); } return $eciuecguuowmeyqg; } public function eyqowkegeuiqawos($umkkkaqkwugkemce, int $mkgcaseqyaayywqo = 1, int $ckkqcoeeekoowmok = 0, array $isweyuoisomqyaag = [], array $icwicymcioeyeyek = []) : bool { $eciuecguuowmeyqg = false; if ($wwcysoksoogyacog = $this->cqgggooocsmkckck()) { try { $eciuecguuowmeyqg = $wwcysoksoogyacog->add_to_cart($umkkkaqkwugkemce, $mkgcaseqyaayywqo, $ckkqcoeeekoowmok, $isweyuoisomqyaag, $icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { } } return $eciuecguuowmeyqg; } public function mggqcqmaoaewoqke($umkkkaqkwugkemce, array $icwicymcioeyeyek = [], int $mkgcaseqyaayywqo = 1) : bool { return $this->eyqowkegeuiqawos($umkkkaqkwugkemce, $mkgcaseqyaayywqo, 0, [], $icwicymcioeyeyek); } public function ieiymsuouaseykkq($smwiiesyqsgyisos) : bool { $wgmoysogywicaaiw = false; if ($iqweseqyieuissek = $this->cqgggooocsmkckck()) { $aeqcomiyowaiwgyg = $iqweseqyieuissek->get_applied_coupons(); $wgmoysogywicaaiw = in_array($this->kyycwccmaemgokwu($smwiiesyqsgyisos), $aeqcomiyowaiwgyg, true); } return $wgmoysogywicaaiw; } public function gcqguaaiywkeaisa($smwiiesyqsgyisos) : string { $kqekumyckgkmomos = 0; if (!is_numeric($smwiiesyqsgyisos)) { if ($smwiiesyqsgyisos instanceof WC_Coupon) { $kqekumyckgkmomos = $smwiiesyqsgyisos->get_id(); } } else { $kqekumyckgkmomos = $smwiiesyqsgyisos; } return $kqekumyckgkmomos; } public function kyycwccmaemgokwu($smwiiesyqsgyisos) : string { if (!$smwiiesyqsgyisos instanceof WC_Coupon) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); } return $smwiiesyqsgyisos->get_code(); } public function oeeuywgiaywkimek($smwiiesyqsgyisos) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); if (!$this->kyycwccmaemgokwu($smwiiesyqsgyisos)) { $smwiiesyqsgyisos = false; } return $smwiiesyqsgyisos; } public function kiwwkaakimyikeic() { $cmussoegoauyyguw = null; if ($woocommerce = $this->wcmmcciyowmqwmyc()) { $cmussoegoauyyguw = $woocommerce->session; } return $cmussoegoauyyguw; } public function cmussoegoauyyguw(string $aiamqeawckcsuaou, string $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', bool $kekikiwsckuiyuyo = false) { if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { switch ($aiamqeawckcsuaou) { case 'set': if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } else { $cmussoegoauyyguw->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie; } break; case Constants::isukcamoimieegam: if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo); } else { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmussoegoauyyguw, $ymqmyyeuycgmigyo, ''); } if ($kekikiwsckuiyuyo) { unset($cmussoegoauyyguw->{$ymqmyyeuycgmigyo}); } break; } } return $eqgoocgaqwqcimie; } public function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $this->cmussoegoauyyguw('set', $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } public function wugwewwmekuaamos($ymqmyyeuycgmigyo, bool $kekikiwsckuiyuyo = false) { return $this->cmussoegoauyyguw(Constants::isukcamoimieegam, $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo); } public function aakkiwusygocokce($uusmaiomayssaecw) { if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { $cmussoegoauyyguw->__unset($uusmaiomayssaecw); } } public function mawiagaeusgooyuk($uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if ($cmussoegoauyyguw = $this->kiwwkaakimyikeic()) { $oyuakceioggwckok = $cmussoegoauyyguw->__isset($uusmaiomayssaecw); } return $oyuakceioggwckok; } public function uwyscmkeyeuqyukk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ['tip' => '', Constants::gouqcwikiiygyasc => '', Constants::NAME => '', Constants::ciyoccqkiamemcmm => '']); $wwgucssaecqekuek = ['class' => Constants::semqugiuwygamias, Constants::squoamkioomemiyi => Constants::semqugiuwygamias, Constants::NAME => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]]; if ($ywmkwiwkosakssii[Constants::ciyoccqkiamemcmm]) { $wwgucssaecqekuek['checked'] = true; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq('label', ['class' => 'tips', 'data-tip' => $ywmkwiwkosakssii['tip']], [$ywmkwiwkosakssii[Constants::NAME], $swqimwqeweekeusq->qgsekwygcgawekeq('input', $wwgucssaecqekuek)]); } public function ueksgoqcickqeasu($omkysikckkcieckq) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($omkysikckkcieckq)); } public function issqoquscuyykomk($ymqmyyeuycgmigyo) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($ymqmyyeuycgmigyo)); } public function qqwewmuqiukymkoi($suaemuyiacqyugsm) : ?string { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } public function cswsgqkiqaowoamq() : ?string { return $this->ueksgoqcickqeasu('woocommerce_myaccount_page_id'); } public function emmikkmmowqqqsew() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa('orders'); } public function guuoascmyqygwsic() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa('dashboard'); } public function wiioyggagqmsykus() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa('downloads'); } }
