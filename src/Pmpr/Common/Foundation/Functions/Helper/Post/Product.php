<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product; use WC_Product_Variable; use WC_Product_Variation; use WP_Taxonomy; class Product extends Common { public function get($aokagokqyuysuksm = null) { $ksaameoqigiaoigg = null; if ($aokagokqyuysuksm instanceof WC_Product) { goto kogcmeyqyokimaqo; } if ($aokagokqyuysuksm) { goto uyagiwoqkikiygme; } global $product; if ($product) { goto sgkksaaokaceycie; } $product = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); goto ouaaoissmeyugeye; sgkksaaokaceycie: $ksaameoqigiaoigg = $product; ouaaoissmeyugeye: uyagiwoqkikiygme: goto iieiwkmcwkocasiq; kogcmeyqyokimaqo: $ksaameoqigiaoigg = $aokagokqyuysuksm; iieiwkmcwkocasiq: if (!(!$ksaameoqigiaoigg && is_numeric($aokagokqyuysuksm))) { goto ucasywwoeiooacwk; } $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->get($aokagokqyuysuksm); ucasywwoeiooacwk: return $ksaameoqigiaoigg; } public function iooowgsqoyqseyuu($product = null) { $aokagokqyuysuksm = null; if (!is_numeric($product)) { goto gkmoqsgamgwkwsas; } $aokagokqyuysuksm = $product; goto kscecowaeuymysgo; gkmoqsgamgwkwsas: $product = $this->get($product); kscecowaeuymysgo: if (!$product) { goto owqsmgycisgmmasg; } $aokagokqyuysuksm = $this->ygwimyogyaqgumam($product, Constants::gouqcwikiiygyasc); owqsmgycisgmmasg: return $aokagokqyuysuksm; } public function mqmocoguqcyymgqu(string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { static $seyqqsmuaiegkeeq = []; if (!empty($seyqqsmuaiegkeeq)) { goto ucwcmgeksyiggaqi; } $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako, $aqykuigiuwmmcieu); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($seyqqsmuaiegkeeq, ["\x70\x72\157\144\165\x63\x74\x5f\x73\150\151\160\160\151\x6e\147\x5f\x63\154\141\x73\x73", "\x70\x72\x6f\144\165\143\x74\x5f\x76\x69\163\151\x62\x69\x6c\151\x74\171", "\160\x72\157\144\165\x63\164\x5f\x74\171\160\145"]); ucwcmgeksyiggaqi: return $seyqqsmuaiegkeeq; } public function ygwimyogyaqgumam($product, string $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = ''; if (!($product = $this->get($product))) { goto moqoommaoiemcoqk; } $qgciuiagkkguykgs = "\x67\x65\164\x5f{$aiowsaccomcoikus}"; if (method_exists($product, $qgciuiagkkguykgs)) { goto sagosckgcimciqya; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->ygwimyogyaqgumam($this->get($product), $aiowsaccomcoikus, $ggauoeuaesiymgee, ...$ywmkwiwkosakssii); goto ysgecwqkekegmywg; sagosckgcimciqya: $ksaameoqigiaoigg = $product->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); ysgecwqkekegmywg: moqoommaoiemcoqk: return $ksaameoqigiaoigg; } public function qqiwsumoyiukmgco($product) { $product = $this->get($product); $umkkkaqkwugkemce = $this->iooowgsqoyqseyuu($product); if ($product instanceof WC_Product_Variation) { goto cqiuouaccqyaiogc; } $omwmuycmeqcqokom = $umkkkaqkwugkemce; goto wcwsogoecyummieu; cqiuouaccqyaiogc: $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce); wcwsogoecyummieu: return $omwmuycmeqcqokom; } public function qcgakseyaikigqco($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::qescuiwgsyuikume, ''); } public function sceuewccmscogies($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, "\163\x68\157\x72\164\x5f\x64\145\x73\x63\162\151\160\x74\x69\x6f\156", '', $mgkceomocowocqyo); } public function owuaywucuaiyocum($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::acymsykymkiewqsy, '', $mgkceomocowocqyo); } public function asaycagaeksiumkw($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\x73\141\x6c\x65\x5f\x70\x72\151\x63\145", '', $mgkceomocowocqyo); } public function scgumisucgwskyqk($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\162\x65\147\165\x6c\141\162\137\x70\162\151\143\145", '', $mgkceomocowocqyo); } public function iimgkucsckeosmmk($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ueasagmikqewqcay, ''); } public function uewkmqiiguwwscwy($product, array $ywmkwiwkosakssii = []) { $aumscagymwyyicag = 0; if (!($product = $this->get($product))) { goto ycaqgqcgsaogwqey; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x71\x74\x79" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->uewkmqiiguwwscwy($product, $ywmkwiwkosakssii); ycaqgqcgsaogwqey: return $aumscagymwyyicag; } public function oeiymaksaoqaeqkk($product, array $ywmkwiwkosakssii = []) : float { $aumscagymwyyicag = 0; if (!($product = $this->get($product))) { goto eugsieawaqqskgam; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\161\x74\x79" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->oeiymaksaoqaeqkk($product, $ywmkwiwkosakssii); eugsieawaqqskgam: return $aumscagymwyyicag; } public function ycqquoiyyuesegsy($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::sauwwsocmukoaayu, ''); } public function weescwwgqgiyumyw($product, $kesssewsiegssiya, $ywmkwiwkosakssii) : array { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->weescwwgqgiyumyw($this->iooowgsqoyqseyuu($product), $kesssewsiegssiya, $ywmkwiwkosakssii); } public function kqoueaayigwkcims($product, $ymkomoccmymcoiea) : array { $qqswgiawgeaeoecu = []; if ($ymkomoccmymcoiea->is_taxonomy()) { goto suussioiakqqoucq; } $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options(); foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $qqswgiawgeaeoecu[$momcykaoccoymeig] = make_clickable(esc_html($eqgoocgaqwqcimie)); mmumoewcwoeqqikq: } yuuweaqskiwsqcma: goto acssgquoaaqsgkoc; suussioiakqqoucq: $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object(); $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($product, $ymkomoccmymcoiea->get_name(), [Constants::ymckmcsiymwqucoq => Constants::ALL]); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name); if ($kesssewsiegssiya->attribute_public) { goto kqykqkseesagqqyq; } $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo; goto scaqkaeuuiukecqw; kqykqkseesagqqyq: $qqswgiawgeaeoecu[] = $swqimwqeweekeusq->yuawgssgauywkiia($ymqmyyeuycgmigyo, $aoskwucuugeuaeus->qmgcisuuikgmqcsu($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), ["\162\x65\154" => Constants::qeueagcuyogwwyky]); scaqkaeuuiukecqw: qqucyysuwawsqsyi: } eawgawckwmwauyoe: acssgquoaaqsgkoc: $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $mmykcgusskuuuace = [Constants::ciyoccqkiamemcmm => $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\157\x6f\x63\x6f\x6d\x6d\145\162\143\x65\137\141\164\x74\162\151\x62\x75\164\145", wptexturize(implode("\x2c\40", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), Constants::uissasisiuymwsmu => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)]; return (array) $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\x6f\157\x63\157\155\x6d\145\x72\143\145\137\141\x74\x74\162\151\x62\x75\x74\x65\137\157\x75\x74\160\x75\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product); } public function yeiguwoaqqcyswmk($isweyuoisomqyaag, $ymkomoccmymcoiea = null) : array { $siquossayskcwkea = $uyeqoqgymiqqcsiq = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($isweyuoisomqyaag instanceof WC_Product_Variation) { goto scmqowwwcamqgmko; } if (!is_array($isweyuoisomqyaag)) { goto qimeociykiaweowe; } $uyeqoqgymiqqcsiq = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, Constants::iikosyqiawkweouo); qimeociykiaweowe: goto cmigmsgqgyquimqk; scmqowwwcamqgmko: $uyeqoqgymiqqcsiq = $isweyuoisomqyaag->get_attributes(); cmigmsgqgyquimqk: if (!$uyeqoqgymiqqcsiq) { goto mwuaakaqmuaoceee; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($uyeqoqgymiqqcsiq as $qmgyyqwkskaiwcqg => $iwewcwusemqaiggk) { $ywwsukisoiguygwm = $yyauwyaeewsickwk->wiecmkiugmyyqiqc(Constants::ATTRIBUTE . "\x5f", '', $qmgyyqwkskaiwcqg); $msekkkskacaysquk = $awewoweukmqomqmi->woimamkkeyoyauoa(Constants::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $ywwsukisoiguygwm); $eeesqcwowcsygqwq = $cqcqsgykasiqwowi->get($ywwsukisoiguygwm); if (!($eeesqcwowcsygqwq && $msekkkskacaysquk)) { goto wiyqcmuawqcaiqii; } $gmcgeogogyqsgawk = [Constants::gouqcwikiiygyasc => $aoskwucuugeuaeus->iooowgsqoyqseyuu($msekkkskacaysquk), Constants::NAME => $ywwsukisoiguygwm, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($msekkkskacaysquk), Constants::ciyoccqkiamemcmm => $aoskwucuugeuaeus->igawqaomowicuayw($msekkkskacaysquk, Constants::ciyoccqkiamemcmm), Constants::kmywkmmykgoyyyoy => $gkyciwoiiisgywcs->get($eeesqcwowcsygqwq, Constants::kmywkmmykgoyyyoy)]; if (!($ymkomoccmymcoiea && $ywwsukisoiguygwm === $ymkomoccmymcoiea)) { goto cmquiwyeuuqiukoq; } return $gmcgeogogyqsgawk; cmquiwyeuuqiukoq: $siquossayskcwkea[$ywwsukisoiguygwm] = $gmcgeogogyqsgawk; wiyqcmuawqcaiqii: ggsmiqmuykwukucu: } qcaquoiwoswywuoq: mwuaakaqmuaoceee: return $siquossayskcwkea; } public function gywsmekygqwieocq($product, array $cqcsaaswaciweiie = [], bool $aqcaekiaqgiaiwiu = true) : array { $uomewyckeuqoqocu = []; if (!($product = $this->get($product))) { goto cmewqmeamawkiigk; } $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $qaiwqwwemmyyqosy = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\x63\x5f\x70\x72\157\144\x75\x63\164\x5f\145\x6e\141\142\x6c\x65\x5f\144\151\x6d\145\x6e\163\151\157\156\163\137\x64\151\x73\160\x6c\141\x79", $product->has_weight() || $product->has_dimensions()); if (!($qaiwqwwemmyyqosy && $product->has_weight())) { goto qkuyaaweimgsaqww; } $uomewyckeuqoqocu["\167\x65\x69\147\150\164"] = [Constants::uissasisiuymwsmu => __("\x57\x65\151\x67\150\x74", "\x77\x6f\x6f\143\x6f\x6d\155\x65\162\143\x65"), Constants::ciyoccqkiamemcmm => wc_format_weight($product->get_weight())]; qkuyaaweimgsaqww: if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) { goto aykqwyescqmocguo; } $uomewyckeuqoqocu["\x64\x69\155\145\156\x73\151\x6f\156\163"] = [Constants::uissasisiuymwsmu => __("\104\x69\155\145\156\x73\151\157\156\x73", "\167\x6f\157\x63\157\x6d\155\x65\162\143\x65"), Constants::ciyoccqkiamemcmm => wc_format_dimensions($product->get_dimensions(false))]; aykqwyescqmocguo: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $siquossayskcwkea = array_filter($this->ccekeuwwqqoiwuwy($product), "\x77\143\137\141\164\164\162\x69\142\x75\164\145\x73\x5f\x61\162\x72\141\171\x5f\x66\x69\154\164\145\162\137\166\x69\163\151\142\x6c\145"); foreach ($siquossayskcwkea as $ymkomoccmymcoiea) { $mmykcgusskuuuace = $this->kqoueaayigwkcims($product, $ymkomoccmymcoiea); $kskgqoywkoawosao = true; if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) { goto swymgyikwmgeocwc; } foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) { $uiymkeeaukcyqqik = $gkyciwoiiisgywcs->get($mmykcgusskuuuace, $tsuauommsquiesmk, false); if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik, true) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) { goto ycmkeyowaosmeqcq; } $kskgqoywkoawosao = false; goto qcococyiuemmqkyy; ycmkeyowaosmeqcq: cycegeagomyaqcyk: } qcococyiuemmqkyy: swymgyikwmgeocwc: if (!$kskgqoywkoawosao) { goto iaawguyeskggqumi; } $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name(); if (!$aqcaekiaqgiaiwiu) { goto umkuoceaqoiucmim; } $ymqmyyeuycgmigyo = $cgceoyqmmwumqyqa->gmeusukogwcamcyc($ymqmyyeuycgmigyo); umkuoceaqoiucmim: $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace; iaawguyeskggqumi: iyuykukkmuayayya: } yaagosqmegoeuayu: $uomewyckeuqoqocu = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\157\157\x63\x6f\155\155\x65\x72\x63\145\137\144\151\x73\x70\x6c\141\x79\137\x70\x72\x6f\144\x75\143\164\x5f\x61\x74\164\162\151\142\165\164\x65\163", $uomewyckeuqoqocu, $product); cmewqmeamawkiigk: return $uomewyckeuqoqocu; } public function waecsyqmwascmqoa($product, string $ymkomoccmymcoiea) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ATTRIBUTE, '', $ymkomoccmymcoiea); } public function ccekeuwwqqoiwuwy($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::iikosyqiawkweouo, ''); } public function muyycecygiagkouk($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x68\141\x73\x5f\143\x68\x69\154\x64", false); } public function eksssooaeasoymyi($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x69\x73\x5f\151\x6e\137\163\164\157\x63\153", false); } public function cmqemkgqoweiwiqu($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\151\163\137\144\157\x77\156\154\157\141\x64\141\x62\154\145", false); } public function muyimmegaeguayya($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x69\x73\137\x73\157\154\x64\x5f\x69\x6e\x64\151\x76\x69\144\165\x61\x6c\154\171", false); } public function eimgmimuuycwqeug($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x61\x64\x64\137\x74\157\x5f\x63\141\162\x74\137\x75\x72\154", ''); } public function gaqgimuwukuyqiie($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\141\144\x64\x5f\164\157\x5f\x63\x61\x72\164\x5f\164\145\x78\164", ''); } public function wwimmekeiimuoecg($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\163\151\x6e\147\x6c\145\x5f\141\x64\x64\137\x74\x6f\137\143\x61\162\x74\137\x74\145\170\164", ''); } public function qaeeusqkgwagwaqc($product, $oiegiwogmwmawkeo = "\167\x6f\x6f\143\157\x6d\155\x65\x72\143\145\137\164\x68\x75\155\142\156\141\151\x6c", array $wisgiwskwawciiee = [], bool $iwiewowoqmoekyqi = true) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::mkousmkiawwousws, '', $oiegiwogmwmawkeo, $wisgiwskwawciiee, $iwiewowoqmoekyqi); } public function ykeiaeskegyyeoau($product) { return $this->ygwimyogyaqgumam($product, "\151\x6d\x61\147\145\x5f\151\144", ''); } public function woamsogakkycsqcc($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::mmeomwsgcemayuuu, [], $mgkceomocowocqyo); } public function mmoaikqueyiwcesm($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::geocwaecmeeskuci, []); } public function ocikkicokkaeyegi() : bool { global $woocommerce_loop; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qgqgaykggoemycsk = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::mcwismemiumceoos, 1); $uuwmqqqiwksuaise = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::uiiqiokqwmccomiu, 1); $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::ausqeuugegoygouq, 1); $gwmokccqwwksmwye = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::iqkeggicywkcieew, 1); return $weyoqgcesqgeusiu * $gwmokccqwwksmwye === $qgqgaykggoemycsk || $qgqgaykggoemycsk === $uuwmqqqiwksuaise; } public function omuogooguicuqewu() : bool { return $this->migkyseymeomymmy() || $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wayckuoqggqsuiys(); } public function kccakwkaqugygwmq() : bool { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && !$this->ucecggciemwuowoi(); } public function wwwwsgwguseauisw() : bool { global $woocommerce_loop; return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && isset($woocommerce_loop[Constants::NAME]) && in_array($woocommerce_loop[Constants::NAME], ["\162\x65\154\x61\164\x65\x64", "\x75\x70\x20\55\x20\163\145\154\154\x73"]); } public function gqmeoioekawuweuo($ymqmyyeuycgmigyo) : bool { global $woocommerce_loop; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($woocommerce_loop, Constants::NAME) === $ymqmyyeuycgmigyo; } public function ucecggciemwuowoi() : bool { return $this->qoiagweqqwqwukog() || $this->aeqcyyqywamikesk() || $this->kicgoeeioiwyuwmq(); } public function aeqcyyqywamikesk() : bool { return $this->gqmeoioekawuweuo("\x72\x65\154\x61\x74\145\144"); } public function qoiagweqqwqwukog() : bool { return $this->gqmeoioekawuweuo("\x75\x70\x2d\x73\145\154\x6c\163"); } public function kicgoeeioiwyuwmq() : bool { return $this->gqmeoioekawuweuo("\143\162\x6f\x73\163\x2d\163\145\154\x6c\x73"); } public function migkyseymeomymmy() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako)); } public function icukmcoiwkgucmqg() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::eycyqsgokewiswum); } public function wyigkiucqmacckiu() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::cmckeoksigiaqykc); } public function yqauycsoymimeise($product = null) { $xgwukwqqaseqagay = 0; $product = $this->get($product); if (!$product) { goto oiksuciayusgwsua; } $eeeyyekmaesysegc = $this->asaycagaeksiumkw($product, false); $iuiwoikawsooqksg = $this->scgumisucgwskyqk($product, false); if (!(is_numeric($iuiwoikawsooqksg) && is_numeric($eeeyyekmaesysegc))) { goto owcacaiiayyowwaq; } $eeeyyekmaesysegc = (float) $eeeyyekmaesysegc; $iuiwoikawsooqksg = (float) $iuiwoikawsooqksg; $xgwukwqqaseqagay = $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->uwueayqeckmkckyc($iuiwoikawsooqksg, $iuiwoikawsooqksg - $eeeyyekmaesysegc, true); owcacaiiayyowwaq: oiksuciayusgwsua: return $xgwukwqqaseqagay; } public function sywcyoouayqkqisk($product) : bool { return $this->oemowqiewwkuiecu($product) <= 0; } public function oemowqiewwkuiecu($product) { $aumscagymwyyicag = 0; $product = $this->get($product); if ($product instanceof WC_Product_Variable) { goto sesewseggywgeamc; } if (!$product instanceof WC_Product) { goto yommcseewkuckumw; } $aumscagymwyyicag = $this->owuaywucuaiyocum($product); yommcseewkuckumw: goto qmcwuyogkcugmqss; sesewseggywgeamc: $aumscagymwyyicag = $this->ygwimyogyaqgumam($product, "\x76\141\162\x69\x61\x74\151\x6f\x6e\137\x70\162\151\x63\x65"); qmcwuyogkcugmqss: return $aumscagymwyyicag; } public function kaugocgyckysqucm($product, string $ksaameoqigiaoigg = Constants::kgmecoswscqqsymg) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if (!$product instanceof WC_Product_Variable) { goto giscewmyyoyggqoc; } $uomewyckeuqoqocu = $product->get_available_variations($ksaameoqigiaoigg); giscewmyyoyggqoc: return $uomewyckeuqoqocu; } public function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if (!$product instanceof WC_Product_Variable) { goto auuoioqaimmmwqaw; } $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag); auuoioqaimmmwqaw: return $uomewyckeuqoqocu; } }
