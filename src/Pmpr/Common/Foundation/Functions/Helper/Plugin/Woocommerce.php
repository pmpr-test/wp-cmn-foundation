<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Foundation; use WC_Cart; use WC_Checkout; use WC_Coupon; use WC_Emails; use WC_Session; use WC_Session_Handler; use WooCommerce as WC; class Woocommerce extends Common { public function wcmmcciyowmqwmyc() : ?WC { $ceigmcuwmccesick = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ceigmcuwmccesick(); if ($ceigmcuwmccesick) { goto eumaaywogiiuiyao; } global $woocommerce; $ceigmcuwmccesick = $woocommerce; eumaaywogiiuiyao: return $ceigmcuwmccesick; } public function msgcoimkwykemoui() : WC_Emails { return $this->wcmmcciyowmqwmyc()->mailer(); } public function yiyqecawioyosoaw(string $qqscaoyqikuyeoaw, array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii); return ob_get_clean(); } public function ggocakcisguuokai() : bool { return class_exists("\167\157\157\x63\157\155\x6d\x65\x72\x63\x65") && $this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\x6f\157\143\157\155\155\x65\162\143\x65\x2f\x77\x6f\x6f\143\x6f\x6d\x6d\x65\162\143\145\x2e\x70\x68\160"); } public function mkiigkeqaeiwqyua() : bool { return in_array($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->useawgqusasoukqm(), ["\x49\x52\x54", "\x49\122\122"]); } public function gmoosossamayqukq() { $gaeqamemwmwsyukm = 0; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto qcqgacsuskoiskcg; } $gaeqamemwmwsyukm = $wwcysoksoogyacog->get_cart_contents_count(); qcqgacsuskoiskcg: return $gaeqamemwmwsyukm; } public function icsokmyykmuweoco($suaemuyiacqyugsm, $post = null) : bool { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($suaemuyiacqyugsm) == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function ewswusimyeosaogm(?string $uusmaiomayssaecw = null) { $jkmcwmwkaqwqegqq = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ewswusimyeosaogm(); if (!$uusmaiomayssaecw) { goto iweimwuaemaquuse; } $jkmcwmwkaqwqegqq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($jkmcwmwkaqwqegqq, $uusmaiomayssaecw, ''); iweimwuaemaquuse: return $jkmcwmwkaqwqegqq; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\x77\x6f\157\x63\157\x6d\155\145\x72\143\145\137") { if (!$yuwymayicwwqiske) { goto sgsgokmagckcoock; } $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw; sgsgokmagckcoock: return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($uusmaiomayssaecw, $ggauoeuaesiymgee); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco("\167\x63\55\163\x65\x74\164\151\x6e\147\163"); } public function kccgkwigyyiugcco() : bool { return "\171\145\x73" === $this->giiuwsmyumqwwiyq("\145\x6e\x61\142\x6c\x65\137\x6d\x79\x61\x63\x63\157\x75\x6e\x74\x5f\162\x65\147\151\163\x74\162\x61\164\151\157\156"); } public function aqwquwewocyewasw() : bool { $uwqkkwmiiumuukoa = false; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto gmkwekuakoueicws; } $uwqkkwmiiumuukoa = $ceigmcuwmccesick->is_rest_api_request(); gmkwekuakoueicws: return $uwqkkwmiiumuukoa; } public function cqgggooocsmkckck() : ?WC_Cart { $wwcysoksoogyacog = null; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto cyguswquuckqoqcu; } $wwcysoksoogyacog = $ceigmcuwmccesick->cart; cyguswquuckqoqcu: return $wwcysoksoogyacog; } public function qmgkumeygiksekck() : ?WC_Checkout { $yogeuygiqackeiky = null; if (!($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc())) { goto euqaykgiqkmkaack; } $yogeuygiqackeiky = $ceigmcuwmccesick->checkout(); euqaykgiqkmkaack: return $yogeuygiqackeiky; } public function ygywcicqqwcumoku() : array { $oammesyieqmwuwyi = []; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto qwyoggysuwmawqoo; } $oammesyieqmwuwyi = $wwcysoksoogyacog->get_cart(); qwyoggysuwmawqoo: return $oammesyieqmwuwyi; } public function uakuwyoiooeqqiow() : array { $ygwoqcwsaggqoamw = []; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto yegecewiqewskmgm; } $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents(); yegecewiqewskmgm: return $ygwoqcwsaggqoamw; } public function geoemsmuouqcqmei() : ?string { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->geoemsmuouqcqmei(); if (!(!$eeamcawaiqocomwy && ($ceigmcuwmccesick = $this->wcmmcciyowmqwmyc()))) { goto awayeqowmyycaoqs; } $eeamcawaiqocomwy = $ceigmcuwmccesick->cart->get_cart_url(); awayeqowmyycaoqs: return $eeamcawaiqocomwy; } public function cseyuuekwokecyyw() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\163\150\x6f\160"); } public function gauymgyqasaqyqam() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yyauwmoecaeskcae("\155\171\x61\143\143\x6f\x75\x6e\164"); } public function gmeusukogwcamcyc($ymkomoccmymcoiea) : string { $ymqmyyeuycgmigyo = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->gmeusukogwcamcyc($ymkomoccmymcoiea); if ($ymqmyyeuycgmigyo) { goto aquiaqiseuwyomay; } $ymqmyyeuycgmigyo = "\x61\164\x74\x72\151\x62\165\x74\x65\x5f" . $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->wouqysuosmigaggy($ymkomoccmymcoiea); aquiaqiseuwyomay: return $ymqmyyeuycgmigyo; } public function cuwomiomuqqkayoo($ioakeqoosmkukeaa) : bool { $eciuecguuowmeyqg = false; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto kysgsayqeakiwmic; } $ioakeqoosmkukeaa = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($ioakeqoosmkukeaa); $eciuecguuowmeyqg = $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa); kysgsayqeakiwmic: return $eciuecguuowmeyqg; } public function eyqowkegeuiqawos($umkkkaqkwugkemce, int $mkgcaseqyaayywqo = 1, int $ckkqcoeeekoowmok = 0, array $isweyuoisomqyaag = [], array $icwicymcioeyeyek = []) : bool { $eciuecguuowmeyqg = false; if (!($wwcysoksoogyacog = $this->cqgggooocsmkckck())) { goto eeiseascemqaocmo; } try { $eciuecguuowmeyqg = $wwcysoksoogyacog->add_to_cart($umkkkaqkwugkemce, $mkgcaseqyaayywqo, $ckkqcoeeekoowmok, $isweyuoisomqyaag, $icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { } eeiseascemqaocmo: return $eciuecguuowmeyqg; } public function mggqcqmaoaewoqke($umkkkaqkwugkemce, array $icwicymcioeyeyek = [], int $mkgcaseqyaayywqo = 1) : bool { return $this->eyqowkegeuiqawos($umkkkaqkwugkemce, $mkgcaseqyaayywqo, 0, [], $icwicymcioeyeyek); } public function ieiymsuouaseykkq($smwiiesyqsgyisos) : bool { $wgmoysogywicaaiw = false; if (!($iqweseqyieuissek = $this->cqgggooocsmkckck())) { goto iukkuoewgiwcoukw; } $aeqcomiyowaiwgyg = $iqweseqyieuissek->get_applied_coupons(); $wgmoysogywicaaiw = in_array($this->kyycwccmaemgokwu($smwiiesyqsgyisos), $aeqcomiyowaiwgyg, true); iukkuoewgiwcoukw: return $wgmoysogywicaaiw; } public function gcqguaaiywkeaisa($smwiiesyqsgyisos) : string { $kqekumyckgkmomos = 0; if (!is_numeric($smwiiesyqsgyisos)) { goto faeciyigcmyieesm; } $kqekumyckgkmomos = $smwiiesyqsgyisos; goto qakcamuiqmiscugu; faeciyigcmyieesm: if (!$smwiiesyqsgyisos instanceof WC_Coupon) { goto cgamwegmkwmmsoow; } $kqekumyckgkmomos = $smwiiesyqsgyisos->get_id(); cgamwegmkwmmsoow: qakcamuiqmiscugu: return $kqekumyckgkmomos; } public function kyycwccmaemgokwu($smwiiesyqsgyisos) : string { if ($smwiiesyqsgyisos instanceof WC_Coupon) { goto qguqeweisuimgyqk; } $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); qguqeweisuimgyqk: return $smwiiesyqsgyisos->get_code(); } public function oeeuywgiaywkimek($smwiiesyqsgyisos) { $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos); if ($this->kyycwccmaemgokwu($smwiiesyqsgyisos)) { goto eyiigmyweugmgckw; } $smwiiesyqsgyisos = false; eyiigmyweugmgckw: return $smwiiesyqsgyisos; } public function kiwwkaakimyikeic() { $cmussoegoauyyguw = null; if (!($woocommerce = $this->wcmmcciyowmqwmyc())) { goto mgkgeuqasqcaimou; } $cmussoegoauyyguw = $woocommerce->session; mgkgeuqasqcaimou: return $cmussoegoauyyguw; } public function cmussoegoauyyguw(string $aiamqeawckcsuaou, string $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', bool $kekikiwsckuiyuyo = false) { if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto myyuyqequamqekoc; } switch ($aiamqeawckcsuaou) { case "\x73\x65\164": if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { goto qmgwqgkuucwysswc; } $cmussoegoauyyguw->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie; goto aiqskweckwoegquq; qmgwqgkuucwysswc: $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); aiqskweckwoegquq: goto syycscyugcgsquwm; case Constants::isukcamoimieegam: if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) { goto acyuamggaiuqmsoa; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmussoegoauyyguw, $ymqmyyeuycgmigyo, ''); goto oykmqmogcwumacqq; acyuamggaiuqmsoa: $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo); oykmqmogcwumacqq: if (!$kekikiwsckuiyuyo) { goto icmgwewmusucsooy; } unset($cmussoegoauyyguw->{$ymqmyyeuycgmigyo}); icmgwewmusucsooy: goto syycscyugcgsquwm; } wcsicmaoskwcaqou: syycscyugcgsquwm: myyuyqequamqekoc: return $eqgoocgaqwqcimie; } public function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $this->cmussoegoauyyguw("\163\145\x74", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } public function wugwewwmekuaamos($ymqmyyeuycgmigyo, bool $kekikiwsckuiyuyo = false) { return $this->cmussoegoauyyguw(Constants::isukcamoimieegam, $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo); } public function aakkiwusygocokce($uusmaiomayssaecw) { if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto swcqqiyagauaogiy; } $cmussoegoauyyguw->__unset($uusmaiomayssaecw); swcqqiyagauaogiy: } public function mawiagaeusgooyuk($uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if (!($cmussoegoauyyguw = $this->kiwwkaakimyikeic())) { goto psqooaaoocusoyag; } $oyuakceioggwckok = $cmussoegoauyyguw->__isset($uusmaiomayssaecw); psqooaaoocusoyag: return $oyuakceioggwckok; } public function uwyscmkeyeuqyukk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x74\151\x70" => '', Constants::gouqcwikiiygyasc => '', Constants::NAME => '', Constants::ciyoccqkiamemcmm => '']); $wwgucssaecqekuek = ["\x63\154\x61\163\x73" => Constants::semqugiuwygamias, Constants::squoamkioomemiyi => Constants::semqugiuwygamias, Constants::NAME => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]]; if (!$ywmkwiwkosakssii[Constants::ciyoccqkiamemcmm]) { goto mseiksmausoaqecy; } $wwgucssaecqekuek["\x63\150\145\x63\x6b\145\144"] = true; mseiksmausoaqecy: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\x6c\141\142\x65\x6c", ["\x63\154\141\x73\x73" => "\x74\151\x70\x73", "\144\141\164\x61\55\x74\151\160" => $ywmkwiwkosakssii["\164\151\x70"]], [$ywmkwiwkosakssii[Constants::NAME], $swqimwqeweekeusq->qgsekwygcgawekeq("\x69\x6e\x70\x75\x74", $wwgucssaecqekuek)]); } public function ueksgoqcickqeasu($omkysikckkcieckq) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($omkysikckkcieckq)); } public function issqoquscuyykomk($ymqmyyeuycgmigyo) : ?string { return $this->qqwewmuqiukymkoi($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->mgmwqcceikcwyuey($ymqmyyeuycgmigyo)); } public function qqwewmuqiukymkoi($suaemuyiacqyugsm) : ?string { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } public function cswsgqkiqaowoamq() : ?string { return $this->ueksgoqcickqeasu("\x77\157\x6f\143\x6f\155\x6d\x65\162\x63\145\x5f\155\171\x61\x63\143\157\165\156\164\137\x70\141\147\145\x5f\151\x64"); } public function ssmeikuayawmweeu() : ?string { return $this->issqoquscuyykomk("\163\150\x6f\160"); } public function emmikkmmowqqqsew() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\157\x72\144\x65\162\163"); } public function guuoascmyqygwsic() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\x64\141\x73\150\142\157\141\162\x64"); } public function wiioyggagqmsykus() : string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->quiocgkecyewioqa("\x64\157\x77\156\x6c\157\x61\x64\163"); } }
