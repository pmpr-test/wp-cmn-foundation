<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Foundation; use WC_Cart; use WC_Checkout; use WC_Coupon; use WC_Emails; use WC_Session; use WC_Session_Handler; use WooCommerce as WC; class Woocommerce extends Common { public function wcmmcciyowmqwmyc() : ?WC { $ceigmcuwmccesick = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ceigmcuwmccesick(); if ($ceigmcuwmccesick) { goto emiugswuagoacakq; } global $woocommerce; $ceigmcuwmccesick = $woocommerce; emiugswuagoacakq: return $ceigmcuwmccesick; } public function msgcoimkwykemoui() : WC_Emails { return $this->wcmmcciyowmqwmyc()->mailer(); } public function yiyqecawioyosoaw(string $qqscaoyqikuyeoaw, array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii); return ob_get_clean(); } public function ggocakcisguuokai() : bool { return class_exists("\167\x6f\157\x63\157\155\x6d\x65\x72\143\145") && $this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\x6f\x6f\143\157\155\155\145\162\x63\x65\57\167\x6f\157\x63\157\x6d\x6d\145\162\x63\145\56\x70\150\x70"); } public function mkiigkeqaeiwqyua() : bool { return in_array($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->useawgqusasoukqm(), ["\111\122\124", "\111\122\x52"]); } public function gmoosossamayqukq() { $gaeqamemwmwsyukm = 0; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto cywmgwogisiyymoi; } $gaeqamemwmwsyukm = $wwcysoksoogyacog->get_cart_contents_count(); cywmgwogisiyymoi: return $gaeqamemwmwsyukm; } public function icsokmyykmuweoco($suaemuyiacqyugsm, $post = null) : bool { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($suaemuyiacqyugsm) == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function ewswusimyeosaogm(?string $uusmaiomayssaecw = null) { $jkmcwmwkaqwqegqq = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ewswusimyeosaogm(); if (!$uusmaiomayssaecw) { goto qkygewgkycsuawgm; } $jkmcwmwkaqwqegqq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($jkmcwmwkaqwqegqq, $uusmaiomayssaecw, ''); qkygewgkycsuawgm: return $jkmcwmwkaqwqegqq; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\167\x6f\x6f\x63\x6f\x6d\x6d\x65\162\143\x65\137") { if (!$yuwymayicwwqiske) { goto omagsowousaeaiou; } $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw; omagsowousaeaiou: return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco("\167\x63\55\163\x65\x74\164\x69\156\147\163"); } public function kccgkwigyyiugcco() : bool { return "\171\x65\x73" === $this->giiuwsmyumqwwiyq("\x65\156\x61\142\x6c\x65\x5f\155\x79\141\x63\x63\157\165\x6e\x74\137\162\145\147\151\x73\164\x72\x61\164\x69\x6f\x6e"); } public function aqwquwewocyewasw() : bool { $uwqkkwmiiumuukoa = false; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto kcesecosoiwocymi; } $uwqkkwmiiumuukoa = $ceigmcuwmccesick->is_rest_api_request(); kcesecosoiwocymi: return $uwqkkwmiiumuukoa; } public function cqgggooocsmkckck() : ?WC_Cart { $wwcysoksoogyacog = null; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto ckyamgmuoswcaiak; } $wwcysoksoogyacog = $ceigmcuwmccesick->cart; ckyamgmuoswcaiak: return $wwcysoksoogyacog; } public function qmgkumeygiksekck() : ?WC_Checkout { $yogeuygiqackeiky = null; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto umosyyqqcuqiscco; } $yogeuygiqackeiky = $ceigmcuwmccesick->checkout(); umosyyqqcuqiscco: return $yogeuygiqackeiky; } public function ygywcicqqwcumoku() : array { $oammesyieqmwuwyi = []; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto qauuogkoosmuggas; } $oammesyieqmwuwyi = $wwcysoksoogyacog->get_cart(); qauuogkoosmuggas: return $oammesyieqmwuwyi; } public function uakuwyoiooeqqiow() : array { $ygwoqcwsaggqoamw = []; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto wwcougcmsuqogqyc; } $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents(); wwcougcmsuqogqyc: return $ygwoqcwsaggqoamw; } public function geoemsmuouqcqmei() : ?string { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->geoemsmuouqcqmei(); if (!(!$eeamcawaiqocomwy && ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()))) { goto mcguyegywqyasmii; } $eeamcawaiqocomwy = $ceigmcuwmccesick->cart->get_cart_url(); mcguyegywqyasmii: return $eeamcawaiqocomwy; } public function cseyuuekwokecyyw() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\163\150\x6f\160"); } public function gauymgyqasaqyqam() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\155\x79\x61\143\x63\157\165\156\x74"); } public function gmeusukogwcamcyc($ymkomoccmymcoiea) : string { $ymqmyyeuycgmigyo = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->gmeusukogwcamcyc($ymkomoccmymcoiea); if ($ymqmyyeuycgmigyo) { goto qgoaooycwyiyycoa; } $ymqmyyeuycgmigyo = "\141\164\x74\162\151\142\x75\164\145\x5f" . $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->wouqysuosmigaggy($ymkomoccmymcoiea); qgoaooycwyiyycoa: return $ymqmyyeuycgmigyo; } public function cuwomiomuqqkayoo($ioakeqoosmkukeaa) : bool { $eciuecguuowmeyqg = false; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto okacwwwygceucqsg; } $ioakeqoosmkukeaa = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($ioakeqoosmkukeaa); $eciuecguuowmeyqg = $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa); okacwwwygceucqsg: return $eciuecguuowmeyqg; } public function eyqowkegeuiqawos($umkkkaqkwugkemce, int $mkgcaseqyaayywqo = 1, int $ckkqcoeeekoowmok = 0, array $isweyuoisomqyaag = [], array $icwicymcioeyeyek = []) : bool { $eciuecguuowmeyqg = false; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto igosooeimygcmois; } try { $eciuecguuowmeyqg = $wwcysoksoogyacog->add_to_cart($umkkkaqkwugkemce, $mkgcaseqyaayywqo, $ckkqcoeeekoowmok, $isweyuoisomqyaag, $icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { } igosooeimygcmois: return $eciuecguuowmeyqg; } public function mggqcqmaoaewoqke($umkkkaqkwugkemce, array $icwicymcioeyeyek = [], int $mkgcaseqyaayywqo = 1) : bool { return $this->eyqowkegeuiqawos($umkkkaqkwugkemce, $mkgcaseqyaayywqo, 0, [], $icwicymcioeyeyek); } public function ieiymsuouaseykkq($smwiiesyqsgyisos) : bool { $wgmoysogywicaaiw = false; if (!($iqweseqyieuissek = $this->cqgggooocsmkckck())) { goto gcykaeaisuqiqyqi; } $aeqcomiyowaiwgyg = $iqweseqyieuissek->get_applied_coupons(); $wgmoysogywicaaiw = in_array($this->kyycwccmaemgokwu($smwiiesyqsgyisos), $aeqcomiyowaiwgyg, true); gcykaeaisuqiqyqi: return $wgmoysogywicaaiw; } public function gcqguaaiywkeaisa($smwiiesyqsgyisos) : string { $kqekumyckgkmomos = 0; if (!is_numeric($smwiiesyqsgyisos)) { goto yomuicigicmugscy; } $kqekumyckgkmomos = $smwiiesyqsgyisos; goto cyssqgqaoaasmogc; yomuicigicmugscy: if (!$smwiiesyqsgyisos instanceof WC_Coupon) { goto swkeqqkqioecmgia; } $kqekumyckgkmomos = $smwiiesyqsgyisos->get_id(); swkeqqkqioecmgia: cyssqgqaoaasmogc: return $kqekumyckgkmomos; } public function kyycwccmaemgokwu($smwiiesyqsgyisos) : string { if ($smwiiesyqsgyisos instanceof WC_Coupon) { goto geqwascicmuguaom; } $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); geqwascicmuguaom: return $smwiiesyqsgyisos->get_code(); } public function oeeuywgiaywkimek($smwiiesyqsgyisos) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); if ($this->kyycwccmaemgokwu($smwiiesyqsgyisos)) { goto qgyeyyagaeyoequw; } $smwiiesyqsgyisos = false; qgyeyyagaeyoequw: return $smwiiesyqsgyisos; } public function kiwwkaakimyikeic() { $cmussoegoauyyguw = null; if (!($woocommerce = $this->wcmmcciyowmqwmyc())) { goto yoeqaicysswwgkmm; } $cmussoegoauyyguw = $woocommerce->session; yoeqaicysswwgkmm: return $cmussoegoauyyguw; } public function cmussoegoauyyguw(string $aiamqeawckcsuaou, string $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', bool $kekikiwsckuiyuyo = false) { if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto gemuuqmegqkkgeua; } switch ($aiamqeawckcsuaou) { case "\163\x65\x74": if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { goto eecyiiwsqomoggmq; } $cmussoegoauyyguw->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie; goto ckaggwgwsyowuuem; eecyiiwsqomoggmq: $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ckaggwgwsyowuuem: goto okaiokeeaqccisaq; case Constants::isukcamoimieegam: if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { goto mumeawggkmqsowae; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmussoegoauyyguw, $ymqmyyeuycgmigyo, ''); goto kwcyggeukmgacqsy; mumeawggkmqsowae: $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo); kwcyggeukmgacqsy: if (!$kekikiwsckuiyuyo) { goto isqokqgukyemmqcg; } unset($cmussoegoauyyguw->{$ymqmyyeuycgmigyo}); isqokqgukyemmqcg: goto okaiokeeaqccisaq; } ugseakwywkuwgyug: okaiokeeaqccisaq: gemuuqmegqkkgeua: return $eqgoocgaqwqcimie; } public function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $this->cmussoegoauyyguw("\163\145\x74", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } public function wugwewwmekuaamos($ymqmyyeuycgmigyo, bool $kekikiwsckuiyuyo = false) { return $this->cmussoegoauyyguw(Constants::isukcamoimieegam, $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo); } public function aakkiwusygocokce($uusmaiomayssaecw) { if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto yeiawaisoceoysau; } $cmussoegoauyyguw->__unset($uusmaiomayssaecw); yeiawaisoceoysau: } public function mawiagaeusgooyuk($uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto kyiewmuguyyccsca; } $oyuakceioggwckok = $cmussoegoauyyguw->__isset($uusmaiomayssaecw); kyiewmuguyyccsca: return $oyuakceioggwckok; } public function uwyscmkeyeuqyukk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\164\x69\x70" => '', Constants::gouqcwikiiygyasc => '', Constants::NAME => '', Constants::ciyoccqkiamemcmm => '']); $wwgucssaecqekuek = ["\143\x6c\x61\163\x73" => Constants::semqugiuwygamias, Constants::squoamkioomemiyi => Constants::semqugiuwygamias, Constants::NAME => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]]; if (!$ywmkwiwkosakssii[Constants::ciyoccqkiamemcmm]) { goto ecimugmwcawqmyaa; } $wwgucssaecqekuek["\x63\150\x65\143\x6b\145\x64"] = true; ecimugmwcawqmyaa: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\x6c\141\142\x65\154", ["\143\x6c\141\x73\x73" => "\164\x69\160\163", "\x64\x61\x74\x61\55\164\151\160" => $ywmkwiwkosakssii["\164\151\160"]], [$ywmkwiwkosakssii[Constants::NAME], $swqimwqeweekeusq->qgsekwygcgawekeq("\151\156\160\165\x74", $wwgucssaecqekuek)]); } public function ueksgoqcickqeasu($omkysikckkcieckq) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($omkysikckkcieckq)); } public function issqoquscuyykomk($ymqmyyeuycgmigyo) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($ymqmyyeuycgmigyo)); } public function qqwewmuqiukymkoi($suaemuyiacqyugsm) : ?string { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } public function cswsgqkiqaowoamq() : ?string { return $this->ueksgoqcickqeasu("\x77\157\157\x63\157\x6d\x6d\x65\162\143\x65\x5f\155\171\141\143\x63\157\x75\x6e\164\137\x70\x61\x67\145\137\151\144"); } public function ssmeikuayawmweeu() : ?string { return $this->issqoquscuyykomk("\x73\x68\x6f\160"); } public function emmikkmmowqqqsew() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\157\x72\144\145\162\x73"); } public function guuoascmyqygwsic() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\x64\x61\x73\150\142\157\x61\162\x64"); } public function wiioyggagqmsykus() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\x64\157\167\156\x6c\x6f\x61\144\x73"); } }
