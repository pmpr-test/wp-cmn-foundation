<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ffe229367             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product; use WC_Product_Variable; use WC_Product_Variation; use WP_Taxonomy; class Product extends Common { public function get($aokagokqyuysuksm = null) { $ksaameoqigiaoigg = null; if ($aokagokqyuysuksm instanceof WC_Product) { $ksaameoqigiaoigg = $aokagokqyuysuksm; } else { if (!$aokagokqyuysuksm) { global $product; if ($product) { $ksaameoqigiaoigg = $product; } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); } } } if (!$ksaameoqigiaoigg && is_numeric($aokagokqyuysuksm)) { $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->get($aokagokqyuysuksm); if ($ksaameoqigiaoigg && empty($product)) { $product = $ksaameoqigiaoigg; } } return $ksaameoqigiaoigg; } public function iooowgsqoyqseyuu($product = null) { $aokagokqyuysuksm = null; if (!is_numeric($product)) { $product = $this->get($product); } else { $aokagokqyuysuksm = $product; } if ($product) { $aokagokqyuysuksm = $this->ygwimyogyaqgumam($product, Constants::gouqcwikiiygyasc); } return $aokagokqyuysuksm; } public function mqmocoguqcyymgqu(string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { static $seyqqsmuaiegkeeq = []; if (empty($seyqqsmuaiegkeeq)) { $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako, $aqykuigiuwmmcieu); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($seyqqsmuaiegkeeq, ["\x70\x72\x6f\x64\165\x63\164\x5f\x73\x68\x69\x70\160\151\156\147\x5f\x63\154\x61\x73\x73", "\160\162\x6f\144\x75\143\x74\137\166\x69\163\x69\142\x69\154\151\x74\171", "\160\x72\x6f\144\x75\143\x74\137\x74\x79\160\145"]); } return $seyqqsmuaiegkeeq; } public function ygwimyogyaqgumam($product, string $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = ''; if ($product = $this->get($product)) { $qgciuiagkkguykgs = "\147\x65\x74\x5f{$aiowsaccomcoikus}"; if (method_exists($product, $qgciuiagkkguykgs)) { $ksaameoqigiaoigg = $product->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->ygwimyogyaqgumam($this->get($product), $aiowsaccomcoikus, $ggauoeuaesiymgee, ...$ywmkwiwkosakssii); } } return $ksaameoqigiaoigg; } public function qqiwsumoyiukmgco($product) { $product = $this->get($product); $umkkkaqkwugkemce = $this->iooowgsqoyqseyuu($product); if ($product instanceof WC_Product_Variation) { $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce); } else { $omwmuycmeqcqokom = $umkkkaqkwugkemce; } return $omwmuycmeqcqokom; } public function qcgakseyaikigqco($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::qescuiwgsyuikume, ''); } public function sceuewccmscogies($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, "\163\150\157\162\x74\x5f\x64\145\163\x63\x72\151\160\x74\x69\157\156", '', $mgkceomocowocqyo); } public function owuaywucuaiyocum($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::acymsykymkiewqsy, '', $mgkceomocowocqyo); } public function asaycagaeksiumkw($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\x73\x61\154\x65\137\x70\x72\151\x63\x65", '', $mgkceomocowocqyo); } public function scgumisucgwskyqk($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\162\x65\x67\165\154\141\162\x5f\x70\162\151\x63\x65", '', $mgkceomocowocqyo); } public function iimgkucsckeosmmk($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ueasagmikqewqcay, ''); } public function uewkmqiiguwwscwy($product, array $ywmkwiwkosakssii = []) { $aumscagymwyyicag = 0; if ($product = $this->get($product)) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\161\x74\x79" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->uewkmqiiguwwscwy($product, $ywmkwiwkosakssii); } return $aumscagymwyyicag; } public function oeiymaksaoqaeqkk($product, array $ywmkwiwkosakssii = []) : float { $aumscagymwyyicag = 0; if ($product = $this->get($product)) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x71\164\171" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->oeiymaksaoqaeqkk($product, $ywmkwiwkosakssii); } return $aumscagymwyyicag; } public function ycqquoiyyuesegsy($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::sauwwsocmukoaayu, ''); } public function weescwwgqgiyumyw($product, $kesssewsiegssiya, $ywmkwiwkosakssii) : array { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->weescwwgqgiyumyw($this->iooowgsqoyqseyuu($product), $kesssewsiegssiya, $ywmkwiwkosakssii); } public function kqoueaayigwkcims($product, $ymkomoccmymcoiea) : array { $qqswgiawgeaeoecu = []; if ($ymkomoccmymcoiea->is_taxonomy()) { $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object(); $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($product, $ymkomoccmymcoiea->get_name(), [Constants::ymckmcsiymwqucoq => Constants::ALL]); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name); if ($kesssewsiegssiya->attribute_public) { $qqswgiawgeaeoecu[] = $swqimwqeweekeusq->yuawgssgauywkiia($ymqmyyeuycgmigyo, $aoskwucuugeuaeus->qmgcisuuikgmqcsu($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), ["\162\x65\154" => Constants::qeueagcuyogwwyky]); } else { $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo; } } } else { $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options(); foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $qqswgiawgeaeoecu[$momcykaoccoymeig] = make_clickable(esc_html($eqgoocgaqwqcimie)); } } $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $mmykcgusskuuuace = [Constants::ciyoccqkiamemcmm => $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\157\157\143\157\155\155\x65\x72\143\145\x5f\x61\164\x74\x72\x69\x62\x75\164\x65", wptexturize(implode("\x2c\x20", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), Constants::uissasisiuymwsmu => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)]; return (array) $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\x6f\x6f\143\157\x6d\155\x65\x72\x63\x65\137\x61\x74\x74\162\x69\142\165\164\145\137\157\x75\x74\x70\x75\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product); } public function yeiguwoaqqcyswmk($isweyuoisomqyaag, $ymkomoccmymcoiea = null) : array { $siquossayskcwkea = $uyeqoqgymiqqcsiq = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($isweyuoisomqyaag instanceof WC_Product_Variation) { $uyeqoqgymiqqcsiq = $isweyuoisomqyaag->get_attributes(); } else { if (is_array($isweyuoisomqyaag)) { $uyeqoqgymiqqcsiq = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, Constants::iikosyqiawkweouo); } } if ($uyeqoqgymiqqcsiq) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($uyeqoqgymiqqcsiq as $qmgyyqwkskaiwcqg => $iwewcwusemqaiggk) { $ywwsukisoiguygwm = $yyauwyaeewsickwk->wiecmkiugmyyqiqc(Constants::ATTRIBUTE . "\x5f", '', $qmgyyqwkskaiwcqg); $msekkkskacaysquk = $awewoweukmqomqmi->woimamkkeyoyauoa(Constants::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $ywwsukisoiguygwm); $eeesqcwowcsygqwq = $cqcqsgykasiqwowi->get($ywwsukisoiguygwm); if ($eeesqcwowcsygqwq && $msekkkskacaysquk) { $gmcgeogogyqsgawk = [Constants::gouqcwikiiygyasc => $aoskwucuugeuaeus->iooowgsqoyqseyuu($msekkkskacaysquk), Constants::NAME => $ywwsukisoiguygwm, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($msekkkskacaysquk), Constants::ciyoccqkiamemcmm => $aoskwucuugeuaeus->igawqaomowicuayw($msekkkskacaysquk, Constants::ciyoccqkiamemcmm), Constants::kmywkmmykgoyyyoy => $gkyciwoiiisgywcs->get($eeesqcwowcsygqwq, Constants::kmywkmmykgoyyyoy)]; if ($ymkomoccmymcoiea && $ywwsukisoiguygwm === $ymkomoccmymcoiea) { return $gmcgeogogyqsgawk; } $siquossayskcwkea[$ywwsukisoiguygwm] = $gmcgeogogyqsgawk; } } } return $siquossayskcwkea; } public function gywsmekygqwieocq($product, array $cqcsaaswaciweiie = [], bool $aqcaekiaqgiaiwiu = true) : array { $uomewyckeuqoqocu = []; if ($product = $this->get($product)) { $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $qaiwqwwemmyyqosy = $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\143\137\160\162\157\144\x75\x63\x74\x5f\x65\x6e\x61\142\154\145\x5f\x64\x69\155\145\156\163\x69\x6f\156\163\x5f\x64\x69\x73\160\x6c\141\171", $product->has_weight() || $product->has_dimensions()); if ($qaiwqwwemmyyqosy && $product->has_weight()) { $uomewyckeuqoqocu["\167\145\x69\147\150\164"] = [Constants::uissasisiuymwsmu => __("\127\145\151\147\150\164", "\167\157\157\143\157\x6d\x6d\x65\162\143\x65"), Constants::ciyoccqkiamemcmm => wc_format_weight($product->get_weight())]; } if ($qaiwqwwemmyyqosy && $product->has_dimensions()) { $uomewyckeuqoqocu["\x64\x69\155\145\x6e\x73\151\157\x6e\163"] = [Constants::uissasisiuymwsmu => __("\x44\x69\155\x65\156\x73\151\x6f\156\163", "\x77\x6f\157\143\x6f\x6d\x6d\145\x72\143\145"), Constants::ciyoccqkiamemcmm => wc_format_dimensions($product->get_dimensions(false))]; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $siquossayskcwkea = array_filter($this->ccekeuwwqqoiwuwy($product), "\x77\x63\x5f\141\164\x74\162\x69\x62\165\164\145\163\x5f\x61\x72\162\x61\171\x5f\x66\x69\x6c\x74\x65\x72\x5f\166\x69\163\151\x62\154\x65"); foreach ($siquossayskcwkea as $ymkomoccmymcoiea) { $mmykcgusskuuuace = $this->kqoueaayigwkcims($product, $ymkomoccmymcoiea); $kskgqoywkoawosao = true; if (is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie) { foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) { $uiymkeeaukcyqqik = $gkyciwoiiisgywcs->get($mmykcgusskuuuace, $tsuauommsquiesmk, false); if (is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik, true) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie) { $kskgqoywkoawosao = false; break; } } } if ($kskgqoywkoawosao) { $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name(); if ($aqcaekiaqgiaiwiu) { $ymqmyyeuycgmigyo = $cgceoyqmmwumqyqa->gmeusukogwcamcyc($ymqmyyeuycgmigyo); } $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace; } } $uomewyckeuqoqocu = $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\157\x6f\143\157\x6d\155\145\162\143\x65\137\x64\151\163\x70\154\141\x79\x5f\x70\x72\157\144\x75\x63\x74\137\141\164\164\x72\151\142\x75\x74\145\163", $uomewyckeuqoqocu, $product); } return $uomewyckeuqoqocu; } public function waecsyqmwascmqoa($product, string $ymkomoccmymcoiea) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ATTRIBUTE, '', $ymkomoccmymcoiea); } public function ccekeuwwqqoiwuwy($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::iikosyqiawkweouo, ''); } public function muyycecygiagkouk($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x68\x61\x73\x5f\x63\x68\151\x6c\144", false); } public function eksssooaeasoymyi($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x69\163\137\151\x6e\137\x73\x74\157\143\x6b", false); } public function cmqemkgqoweiwiqu($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\151\x73\137\x64\157\167\156\154\157\141\x64\x61\x62\x6c\145", false); } public function muyimmegaeguayya($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\151\163\x5f\163\157\154\144\137\151\x6e\144\x69\166\x69\x64\165\141\154\154\x79", false); } public function eimgmimuuycwqeug($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\141\x64\144\137\164\157\x5f\x63\141\162\164\x5f\165\162\154", ''); } public function gaqgimuwukuyqiie($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\141\144\x64\x5f\164\x6f\x5f\143\x61\x72\164\137\x74\x65\170\x74", ''); } public function wwimmekeiimuoecg($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x73\151\x6e\x67\154\145\137\x61\144\x64\x5f\x74\157\137\x63\x61\x72\x74\x5f\164\x65\170\164", ''); } public function qaeeusqkgwagwaqc($product, $oiegiwogmwmawkeo = "\167\157\157\x63\157\x6d\x6d\x65\162\143\x65\137\x74\x68\x75\155\x62\156\141\151\x6c", array $wisgiwskwawciiee = [], bool $iwiewowoqmoekyqi = true) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::mkousmkiawwousws, '', $oiegiwogmwmawkeo, $wisgiwskwawciiee, $iwiewowoqmoekyqi); } public function ykeiaeskegyyeoau($product) { return $this->ygwimyogyaqgumam($product, "\151\155\x61\147\145\137\x69\x64", ''); } public function woamsogakkycsqcc($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::mmeomwsgcemayuuu, [], $mgkceomocowocqyo); } public function mmoaikqueyiwcesm($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::geocwaecmeeskuci, []); } public function ocikkicokkaeyegi() : bool { global $woocommerce_loop; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qgqgaykggoemycsk = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::mcwismemiumceoos, 1); $uuwmqqqiwksuaise = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::uiiqiokqwmccomiu, 1); $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::ausqeuugegoygouq, 1); $gwmokccqwwksmwye = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::iqkeggicywkcieew, 1); return $weyoqgcesqgeusiu * $gwmokccqwwksmwye === $qgqgaykggoemycsk || $qgqgaykggoemycsk === $uuwmqqqiwksuaise; } public function omuogooguicuqewu() : bool { return $this->migkyseymeomymmy() || $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wayckuoqggqsuiys(); } public function kccakwkaqugygwmq() : bool { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && !$this->ucecggciemwuowoi(); } public function wwwwsgwguseauisw() : bool { global $woocommerce_loop; return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && isset($woocommerce_loop[Constants::NAME]) && in_array($woocommerce_loop[Constants::NAME], ["\162\x65\154\x61\x74\145\x64", "\x75\x70\40\55\40\x73\145\154\x6c\163"]); } public function gqmeoioekawuweuo($ymqmyyeuycgmigyo) : bool { global $woocommerce_loop; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($woocommerce_loop, Constants::NAME) === $ymqmyyeuycgmigyo; } public function ucecggciemwuowoi() : bool { return $this->qoiagweqqwqwukog() || $this->aeqcyyqywamikesk() || $this->kicgoeeioiwyuwmq(); } public function aeqcyyqywamikesk() : bool { return $this->gqmeoioekawuweuo("\x72\145\x6c\141\x74\x65\144"); } public function qoiagweqqwqwukog() : bool { return $this->gqmeoioekawuweuo("\165\160\55\x73\145\154\x6c\163"); } public function kicgoeeioiwyuwmq() : bool { return $this->gqmeoioekawuweuo("\x63\x72\157\x73\x73\x2d\163\x65\x6c\154\163"); } public function migkyseymeomymmy() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako)); } public function icukmcoiwkgucmqg() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::eycyqsgokewiswum); } public function wyigkiucqmacckiu() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::cmckeoksigiaqykc); } public function eccmmwqkaocgogms($product = null, string $aqykuigiuwmmcieu = "\x70\x65\x72\143\145\156\164\141\x67\145") { $wewsywccwwomowkw = 0; $product = $this->get($product); if ($product) { $eeeyyekmaesysegc = $this->asaycagaeksiumkw($product, false); $iuiwoikawsooqksg = $this->scgumisucgwskyqk($product, false); if (is_numeric($iuiwoikawsooqksg) && is_numeric($eeeyyekmaesysegc)) { $eeeyyekmaesysegc = (float) $eeeyyekmaesysegc; $iuiwoikawsooqksg = (float) $iuiwoikawsooqksg; if ($aqykuigiuwmmcieu === "\x70\145\x72\x63\145\156\164\141\147\145") { $wewsywccwwomowkw = $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->uwueayqeckmkckyc($iuiwoikawsooqksg, $iuiwoikawsooqksg - $eeeyyekmaesysegc, true); } } } return $wewsywccwwomowkw; } public function sywcyoouayqkqisk($product) : bool { return $this->oemowqiewwkuiecu($product) <= 0; } public function oemowqiewwkuiecu($product) { $aumscagymwyyicag = 0; $product = $this->get($product); if ($product instanceof WC_Product_Variable) { $aumscagymwyyicag = $this->ygwimyogyaqgumam($product, "\x76\141\162\151\x61\x74\151\157\156\x5f\160\x72\151\143\x65"); } else { if ($product instanceof WC_Product) { $aumscagymwyyicag = $this->owuaywucuaiyocum($product); } } return $aumscagymwyyicag; } public function kaugocgyckysqucm($product, string $ksaameoqigiaoigg = Constants::kgmecoswscqqsymg) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if ($product instanceof WC_Product_Variable) { $uomewyckeuqoqocu = $product->get_available_variations($ksaameoqigiaoigg); } return $uomewyckeuqoqocu; } public function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if ($product instanceof WC_Product_Variable) { $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag); } return $uomewyckeuqoqocu; } }
