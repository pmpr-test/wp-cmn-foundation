<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6af0adcff6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Foundation; use WC_Cart; use WC_Checkout; use WC_Coupon; use WC_Emails; use WC_Session; use WC_Session_Handler; use WooCommerce as WC; class Woocommerce extends Common { public function wcmmcciyowmqwmyc() : ?WC { $ceigmcuwmccesick = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ceigmcuwmccesick(); if ($ceigmcuwmccesick) { goto igeoagaweewiscas; } global $woocommerce; $ceigmcuwmccesick = $woocommerce; igeoagaweewiscas: return $ceigmcuwmccesick; } public function msgcoimkwykemoui() : WC_Emails { return $this->wcmmcciyowmqwmyc()->mailer(); } public function yiyqecawioyosoaw(string $qqscaoyqikuyeoaw, array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii); return ob_get_clean(); } public function ggocakcisguuokai() : bool { return class_exists("\167\157\x6f\x63\x6f\155\155\x65\162\143\x65") && $this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\157\157\x63\x6f\x6d\155\145\162\x63\145\57\167\x6f\157\143\157\155\x6d\x65\x72\143\x65\56\160\150\x70"); } public function mkiigkeqaeiwqyua() : bool { return in_array($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->useawgqusasoukqm(), ["\x49\x52\x54", "\x49\122\x52"]); } public function gmoosossamayqukq() { $gaeqamemwmwsyukm = 0; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto ccqagygkoaagksyw; } $gaeqamemwmwsyukm = $wwcysoksoogyacog->get_cart_contents_count(); ccqagygkoaagksyw: return $gaeqamemwmwsyukm; } public function icsokmyykmuweoco($suaemuyiacqyugsm, $post = null) : bool { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($suaemuyiacqyugsm) == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function ewswusimyeosaogm(?string $uusmaiomayssaecw = null) { $jkmcwmwkaqwqegqq = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ewswusimyeosaogm(); if (!$uusmaiomayssaecw) { goto oguigickaoqigcoi; } $jkmcwmwkaqwqegqq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($jkmcwmwkaqwqegqq, $uusmaiomayssaecw, ''); oguigickaoqigcoi: return $jkmcwmwkaqwqegqq; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\x77\x6f\157\x63\157\155\x6d\145\162\143\x65\x5f") { if (!$yuwymayicwwqiske) { goto qmugciukukckmeiu; } $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw; qmugciukukckmeiu: return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco("\x77\x63\x2d\163\145\164\164\x69\156\x67\x73"); } public function kccgkwigyyiugcco() : bool { return "\171\145\x73" === $this->giiuwsmyumqwwiyq("\145\x6e\141\x62\154\x65\137\x6d\171\x61\143\x63\x6f\x75\156\164\x5f\162\145\x67\151\x73\x74\x72\x61\x74\151\157\156"); } public function aqwquwewocyewasw() : bool { $uwqkkwmiiumuukoa = false; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto akieyasekuwqeugc; } $uwqkkwmiiumuukoa = $ceigmcuwmccesick->is_rest_api_request(); akieyasekuwqeugc: return $uwqkkwmiiumuukoa; } public function cqgggooocsmkckck() : ?WC_Cart { $wwcysoksoogyacog = null; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto gqwcuusyiggisuok; } $wwcysoksoogyacog = $ceigmcuwmccesick->cart; gqwcuusyiggisuok: return $wwcysoksoogyacog; } public function qmgkumeygiksekck() : ?WC_Checkout { $yogeuygiqackeiky = null; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto ikoaokuwokyiigsu; } $yogeuygiqackeiky = $ceigmcuwmccesick->checkout(); ikoaokuwokyiigsu: return $yogeuygiqackeiky; } public function ygywcicqqwcumoku() : array { $oammesyieqmwuwyi = []; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto aouauysuwimgygie; } $oammesyieqmwuwyi = $wwcysoksoogyacog->get_cart(); aouauysuwimgygie: return $oammesyieqmwuwyi; } public function uakuwyoiooeqqiow() : array { $ygwoqcwsaggqoamw = []; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto sqkmkmcmocigewua; } $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents(); sqkmkmcmocigewua: return $ygwoqcwsaggqoamw; } public function geoemsmuouqcqmei() : ?string { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->geoemsmuouqcqmei(); if (!(!$eeamcawaiqocomwy && ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()))) { goto kquqgyygaeiwkeko; } $eeamcawaiqocomwy = $ceigmcuwmccesick->cart->get_cart_url(); kquqgyygaeiwkeko: return $eeamcawaiqocomwy; } public function cseyuuekwokecyyw() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\163\x68\157\x70"); } public function gauymgyqasaqyqam() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\155\x79\141\x63\143\157\x75\x6e\164"); } public function gmeusukogwcamcyc($ymkomoccmymcoiea) : string { $ymqmyyeuycgmigyo = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->gmeusukogwcamcyc($ymkomoccmymcoiea); if ($ymqmyyeuycgmigyo) { goto qogyssukouuesqis; } $ymqmyyeuycgmigyo = "\x61\164\x74\x72\x69\142\x75\x74\145\137" . $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->wouqysuosmigaggy($ymkomoccmymcoiea); qogyssukouuesqis: return $ymqmyyeuycgmigyo; } public function cuwomiomuqqkayoo($ioakeqoosmkukeaa) : bool { $eciuecguuowmeyqg = false; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto kkoukeoyauekomau; } $ioakeqoosmkukeaa = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($ioakeqoosmkukeaa); $eciuecguuowmeyqg = $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa); kkoukeoyauekomau: return $eciuecguuowmeyqg; } public function eyqowkegeuiqawos($umkkkaqkwugkemce, int $mkgcaseqyaayywqo = 1, int $ckkqcoeeekoowmok = 0, array $isweyuoisomqyaag = [], array $icwicymcioeyeyek = []) : bool { $eciuecguuowmeyqg = false; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto wgeqwaisweikegck; } try { $eciuecguuowmeyqg = $wwcysoksoogyacog->add_to_cart($umkkkaqkwugkemce, $mkgcaseqyaayywqo, $ckkqcoeeekoowmok, $isweyuoisomqyaag, $icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { } wgeqwaisweikegck: return $eciuecguuowmeyqg; } public function mggqcqmaoaewoqke($umkkkaqkwugkemce, array $icwicymcioeyeyek = [], int $mkgcaseqyaayywqo = 1) : bool { return $this->eyqowkegeuiqawos($umkkkaqkwugkemce, $mkgcaseqyaayywqo, 0, [], $icwicymcioeyeyek); } public function ieiymsuouaseykkq($smwiiesyqsgyisos) : bool { $wgmoysogywicaaiw = false; if (!($iqweseqyieuissek = $this->cqgggooocsmkckck())) { goto ogaqcigmoyoqcsws; } $aeqcomiyowaiwgyg = $iqweseqyieuissek->get_applied_coupons(); $wgmoysogywicaaiw = in_array($this->kyycwccmaemgokwu($smwiiesyqsgyisos), $aeqcomiyowaiwgyg, true); ogaqcigmoyoqcsws: return $wgmoysogywicaaiw; } public function gcqguaaiywkeaisa($smwiiesyqsgyisos) : string { $kqekumyckgkmomos = 0; if (!is_numeric($smwiiesyqsgyisos)) { goto agwyiymkkwmywcsw; } $kqekumyckgkmomos = $smwiiesyqsgyisos; goto qkeyoeyiuqeyicqa; agwyiymkkwmywcsw: if (!$smwiiesyqsgyisos instanceof WC_Coupon) { goto egmauuemqqqqsgic; } $kqekumyckgkmomos = $smwiiesyqsgyisos->get_id(); egmauuemqqqqsgic: qkeyoeyiuqeyicqa: return $kqekumyckgkmomos; } public function kyycwccmaemgokwu($smwiiesyqsgyisos) : string { if ($smwiiesyqsgyisos instanceof WC_Coupon) { goto mgkaweokcicgiegg; } $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); mgkaweokcicgiegg: return $smwiiesyqsgyisos->get_code(); } public function oeeuywgiaywkimek($smwiiesyqsgyisos) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); if ($this->kyycwccmaemgokwu($smwiiesyqsgyisos)) { goto ukcoymqsgmcwokoq; } $smwiiesyqsgyisos = false; ukcoymqsgmcwokoq: return $smwiiesyqsgyisos; } public function kiwwkaakimyikeic() { $cmussoegoauyyguw = null; if (!($woocommerce = $this->wcmmcciyowmqwmyc())) { goto degewusuggmqqeso; } $cmussoegoauyyguw = $woocommerce->session; degewusuggmqqeso: return $cmussoegoauyyguw; } public function cmussoegoauyyguw(string $aiamqeawckcsuaou, string $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', bool $kekikiwsckuiyuyo = false) { if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto qmawgkeuyyqwcmok; } switch ($aiamqeawckcsuaou) { case "\x73\145\x74": if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { goto goaaoqkgsieiyuqm; } $cmussoegoauyyguw->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie; goto wqiwmousomaigmgm; goaaoqkgsieiyuqm: $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); wqiwmousomaigmgm: goto mogweaaaqocouiug; case Constants::isukcamoimieegam: if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { goto uemgoaamkymwuiko; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmussoegoauyyguw, $ymqmyyeuycgmigyo, ''); goto yqaqgsyaqomgoowq; uemgoaamkymwuiko: $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo); yqaqgsyaqomgoowq: if (!$kekikiwsckuiyuyo) { goto cyomeoyuoqywoysa; } unset($cmussoegoauyyguw->{$ymqmyyeuycgmigyo}); cyomeoyuoqywoysa: goto mogweaaaqocouiug; } aywsyyewoswacqqy: mogweaaaqocouiug: qmawgkeuyyqwcmok: return $eqgoocgaqwqcimie; } public function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $this->cmussoegoauyyguw("\x73\145\164", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } public function wugwewwmekuaamos($ymqmyyeuycgmigyo, bool $kekikiwsckuiyuyo = false) { return $this->cmussoegoauyyguw(Constants::isukcamoimieegam, $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo); } public function aakkiwusygocokce($uusmaiomayssaecw) { if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto mmgqsmogqmouuskw; } $cmussoegoauyyguw->__unset($uusmaiomayssaecw); mmgqsmogqmouuskw: } public function mawiagaeusgooyuk($uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto suycyuwkgakgikqw; } $oyuakceioggwckok = $cmussoegoauyyguw->__isset($uusmaiomayssaecw); suycyuwkgakgikqw: return $oyuakceioggwckok; } public function uwyscmkeyeuqyukk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\164\x69\x70" => '', Constants::gouqcwikiiygyasc => '', Constants::NAME => '', Constants::ciyoccqkiamemcmm => '']); $wwgucssaecqekuek = ["\143\154\x61\x73\x73" => Constants::semqugiuwygamias, Constants::squoamkioomemiyi => Constants::semqugiuwygamias, Constants::NAME => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]]; if (!$ywmkwiwkosakssii[Constants::ciyoccqkiamemcmm]) { goto eseyciuwmwyauuio; } $wwgucssaecqekuek["\x63\150\x65\x63\x6b\145\144"] = true; eseyciuwmwyauuio: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\154\141\x62\x65\154", ["\x63\154\x61\163\x73" => "\x74\x69\160\x73", "\144\141\164\141\55\164\151\x70" => $ywmkwiwkosakssii["\164\151\160"]], [$ywmkwiwkosakssii[Constants::NAME], $swqimwqeweekeusq->qgsekwygcgawekeq("\x69\x6e\x70\x75\x74", $wwgucssaecqekuek)]); } public function ueksgoqcickqeasu($omkysikckkcieckq) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($omkysikckkcieckq)); } public function issqoquscuyykomk($ymqmyyeuycgmigyo) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($ymqmyyeuycgmigyo)); } public function qqwewmuqiukymkoi($suaemuyiacqyugsm) : ?string { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } public function cswsgqkiqaowoamq() : ?string { return $this->ueksgoqcickqeasu("\x77\157\x6f\x63\x6f\155\155\x65\x72\x63\x65\137\x6d\171\x61\143\143\x6f\x75\x6e\164\137\x70\141\x67\145\x5f\x69\x64"); } public function ssmeikuayawmweeu() : ?string { return $this->issqoquscuyykomk("\163\x68\x6f\160"); } public function emmikkmmowqqqsew() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\157\x72\x64\145\x72\x73"); } public function guuoascmyqygwsic() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\144\x61\163\150\x62\x6f\x61\162\144"); } public function wiioyggagqmsykus() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\144\x6f\167\156\x6c\x6f\x61\144\x73"); } }
