<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product; use WC_Product_Variable; use WC_Product_Variation; use WP_Taxonomy; class Product extends Common { public function get($aokagokqyuysuksm = null) { $ksaameoqigiaoigg = null; if ($aokagokqyuysuksm instanceof WC_Product) { goto qmukeceewgmekoae; } if ($aokagokqyuysuksm) { goto iuimkcgcsyemcuei; } global $product; if ($product) { goto moequykwukcqmiga; } $product = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); goto mgkwqmyqgswasocy; moequykwukcqmiga: $ksaameoqigiaoigg = $product; mgkwqmyqgswasocy: iuimkcgcsyemcuei: goto somsmcmoyaiiwuyk; qmukeceewgmekoae: $ksaameoqigiaoigg = $aokagokqyuysuksm; somsmcmoyaiiwuyk: if (!(!$ksaameoqigiaoigg && is_numeric($aokagokqyuysuksm))) { goto msqmakqaiawgqeau; } $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->get($aokagokqyuysuksm); msqmakqaiawgqeau: return $ksaameoqigiaoigg; } public function iooowgsqoyqseyuu($product = null) { $aokagokqyuysuksm = null; if (!is_numeric($product)) { goto iuukukcykqykisaa; } $aokagokqyuysuksm = $product; goto aaoekkysuimcamyu; iuukukcykqykisaa: $product = $this->get($product); aaoekkysuimcamyu: if (!$product) { goto wugqaoggyqusmaoa; } $aokagokqyuysuksm = $this->ygwimyogyaqgumam($product, Constants::gouqcwikiiygyasc); wugqaoggyqusmaoa: return $aokagokqyuysuksm; } public function mqmocoguqcyymgqu(string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { static $seyqqsmuaiegkeeq = []; if (!empty($seyqqsmuaiegkeeq)) { goto qamicqyikayyacok; } $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako, $aqykuigiuwmmcieu); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($seyqqsmuaiegkeeq, ["\x70\x72\x6f\144\x75\x63\x74\137\163\x68\x69\x70\160\151\156\147\x5f\143\x6c\141\x73\163", "\x70\x72\157\144\165\x63\x74\137\x76\151\163\151\142\x69\x6c\x69\x74\171", "\x70\162\157\x64\165\143\164\137\164\x79\x70\x65"]); qamicqyikayyacok: return $seyqqsmuaiegkeeq; } public function ygwimyogyaqgumam($product, string $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = ''; if (!($product = $this->get($product))) { goto kuwwysummgiakgwo; } $qgciuiagkkguykgs = "\147\x65\164\x5f{$aiowsaccomcoikus}"; if (method_exists($product, $qgciuiagkkguykgs)) { goto oasqosiqcsiyyaye; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->ygwimyogyaqgumam($this->get($product), $aiowsaccomcoikus, $ggauoeuaesiymgee, ...$ywmkwiwkosakssii); goto oaymmkagwocukmyq; oasqosiqcsiyyaye: $ksaameoqigiaoigg = $product->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); oaymmkagwocukmyq: kuwwysummgiakgwo: return $ksaameoqigiaoigg; } public function qqiwsumoyiukmgco($product) { $product = $this->get($product); $umkkkaqkwugkemce = $this->iooowgsqoyqseyuu($product); if ($product instanceof WC_Product_Variation) { goto kuusyaqguycoyiia; } $omwmuycmeqcqokom = $umkkkaqkwugkemce; goto imiqucuaiyoaeaka; kuusyaqguycoyiia: $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce); imiqucuaiyoaeaka: return $omwmuycmeqcqokom; } public function qcgakseyaikigqco($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::qescuiwgsyuikume, ''); } public function sceuewccmscogies($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, "\163\150\x6f\162\x74\x5f\x64\x65\x73\x63\x72\151\x70\x74\x69\x6f\156", '', $mgkceomocowocqyo); } public function owuaywucuaiyocum($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::acymsykymkiewqsy, '', $mgkceomocowocqyo); } public function asaycagaeksiumkw($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\163\x61\154\x65\x5f\x70\162\151\143\x65", '', $mgkceomocowocqyo); } public function scgumisucgwskyqk($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\162\145\x67\x75\154\141\162\137\160\x72\151\x63\x65", '', $mgkceomocowocqyo); } public function iimgkucsckeosmmk($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ueasagmikqewqcay, ''); } public function uewkmqiiguwwscwy($product, array $ywmkwiwkosakssii = []) { $aumscagymwyyicag = 0; if (!($product = $this->get($product))) { goto ggiiuoqggyauekgs; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\161\164\x79" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->uewkmqiiguwwscwy($product, $ywmkwiwkosakssii); ggiiuoqggyauekgs: return $aumscagymwyyicag; } public function oeiymaksaoqaeqkk($product, array $ywmkwiwkosakssii = []) : float { $aumscagymwyyicag = 0; if (!($product = $this->get($product))) { goto yyeiqoiuweqikyyq; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\161\x74\171" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->oeiymaksaoqaeqkk($product, $ywmkwiwkosakssii); yyeiqoiuweqikyyq: return $aumscagymwyyicag; } public function ycqquoiyyuesegsy($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::sauwwsocmukoaayu, ''); } public function weescwwgqgiyumyw($product, $kesssewsiegssiya, $ywmkwiwkosakssii) : array { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->weescwwgqgiyumyw($this->iooowgsqoyqseyuu($product), $kesssewsiegssiya, $ywmkwiwkosakssii); } public function kqoueaayigwkcims($product, $ymkomoccmymcoiea) : array { $qqswgiawgeaeoecu = []; if ($ymkomoccmymcoiea->is_taxonomy()) { goto ogmogeeogucogway; } $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options(); foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $qqswgiawgeaeoecu[$momcykaoccoymeig] = make_clickable(esc_html($eqgoocgaqwqcimie)); oyqwymwomuameswa: } ikqwewkaooqqcwmw: goto ymcwgkmiysmukacs; ogmogeeogucogway: $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object(); $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($product, $ymkomoccmymcoiea->get_name(), [Constants::ymckmcsiymwqucoq => Constants::ALL]); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name); if ($kesssewsiegssiya->attribute_public) { goto cqokwokkmcecokwi; } $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo; goto qgaoikokgokgqaqi; cqokwokkmcecokwi: $qqswgiawgeaeoecu[] = $swqimwqeweekeusq->yuawgssgauywkiia($ymqmyyeuycgmigyo, $aoskwucuugeuaeus->qmgcisuuikgmqcsu($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), ["\162\x65\154" => Constants::qeueagcuyogwwyky]); qgaoikokgokgqaqi: myccwweewiwguqaa: } qqyqygkmkeeuaiss: ymcwgkmiysmukacs: $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $mmykcgusskuuuace = [Constants::ciyoccqkiamemcmm => $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\x6d\x65\x72\143\x65\x5f\141\x74\x74\162\x69\142\165\164\x65", wptexturize(implode("\x2c\40", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), Constants::uissasisiuymwsmu => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)]; return (array) $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\x6f\x6f\x63\157\155\x6d\145\162\x63\x65\137\x61\164\x74\x72\151\x62\x75\164\x65\x5f\157\x75\x74\x70\165\x74", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product); } public function yeiguwoaqqcyswmk($isweyuoisomqyaag, $ymkomoccmymcoiea = null) : array { $siquossayskcwkea = $uyeqoqgymiqqcsiq = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($isweyuoisomqyaag instanceof WC_Product_Variation) { goto eukmaswisycyiwik; } if (!is_array($isweyuoisomqyaag)) { goto auycewyimycgsusg; } $uyeqoqgymiqqcsiq = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, Constants::iikosyqiawkweouo); auycewyimycgsusg: goto ysgkwckuuwmeqmim; eukmaswisycyiwik: $uyeqoqgymiqqcsiq = $isweyuoisomqyaag->get_attributes(); ysgkwckuuwmeqmim: if (!$uyeqoqgymiqqcsiq) { goto iwsckisegswykacc; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($uyeqoqgymiqqcsiq as $qmgyyqwkskaiwcqg => $iwewcwusemqaiggk) { $ywwsukisoiguygwm = $yyauwyaeewsickwk->wiecmkiugmyyqiqc(Constants::ATTRIBUTE . "\x5f", '', $qmgyyqwkskaiwcqg); $msekkkskacaysquk = $awewoweukmqomqmi->woimamkkeyoyauoa(Constants::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $ywwsukisoiguygwm); $eeesqcwowcsygqwq = $cqcqsgykasiqwowi->get($ywwsukisoiguygwm); if (!($eeesqcwowcsygqwq && $msekkkskacaysquk)) { goto oesgammmiwwkggki; } $gmcgeogogyqsgawk = [Constants::gouqcwikiiygyasc => $aoskwucuugeuaeus->iooowgsqoyqseyuu($msekkkskacaysquk), Constants::NAME => $ywwsukisoiguygwm, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($msekkkskacaysquk), Constants::ciyoccqkiamemcmm => $aoskwucuugeuaeus->igawqaomowicuayw($msekkkskacaysquk, Constants::ciyoccqkiamemcmm), Constants::kmywkmmykgoyyyoy => $gkyciwoiiisgywcs->get($eeesqcwowcsygqwq, Constants::kmywkmmykgoyyyoy)]; if (!($ymkomoccmymcoiea && $ywwsukisoiguygwm === $ymkomoccmymcoiea)) { goto ecyuccaigwwcquoq; } return $gmcgeogogyqsgawk; ecyuccaigwwcquoq: $siquossayskcwkea[$ywwsukisoiguygwm] = $gmcgeogogyqsgawk; oesgammmiwwkggki: wiakkcgyggaeaeoa: } mokwmqowycmwwkem: iwsckisegswykacc: return $siquossayskcwkea; } public function gywsmekygqwieocq($product, array $cqcsaaswaciweiie = [], bool $aqcaekiaqgiaiwiu = true) : array { $uomewyckeuqoqocu = []; if (!($product = $this->get($product))) { goto kogcmeyqyokimaqo; } $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $qaiwqwwemmyyqosy = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\143\137\x70\162\x6f\144\165\x63\x74\137\145\x6e\141\142\154\x65\x5f\144\151\x6d\x65\156\x73\151\157\x6e\x73\137\144\x69\x73\x70\154\x61\x79", $product->has_weight() || $product->has_dimensions()); if (!($qaiwqwwemmyyqosy && $product->has_weight())) { goto aawsuekkqeecmsuu; } $uomewyckeuqoqocu["\167\x65\151\147\150\x74"] = [Constants::uissasisiuymwsmu => __("\127\x65\x69\x67\150\x74", "\167\157\x6f\143\x6f\155\x6d\145\x72\x63\x65"), Constants::ciyoccqkiamemcmm => wc_format_weight($product->get_weight())]; aawsuekkqeecmsuu: if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) { goto uqckgkumgouqgcus; } $uomewyckeuqoqocu["\x64\x69\155\145\156\163\x69\x6f\156\x73"] = [Constants::uissasisiuymwsmu => __("\x44\151\155\x65\x6e\x73\x69\157\156\163", "\167\157\x6f\x63\x6f\155\x6d\145\162\143\145"), Constants::ciyoccqkiamemcmm => wc_format_dimensions($product->get_dimensions(false))]; uqckgkumgouqgcus: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $siquossayskcwkea = array_filter($this->ccekeuwwqqoiwuwy($product), "\167\x63\137\x61\x74\164\x72\151\142\x75\x74\x65\163\x5f\x61\162\x72\141\x79\x5f\x66\151\x6c\x74\145\x72\137\166\151\163\151\142\x6c\x65"); foreach ($siquossayskcwkea as $ymkomoccmymcoiea) { $mmykcgusskuuuace = $this->kqoueaayigwkcims($product, $ymkomoccmymcoiea); $kskgqoywkoawosao = true; if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) { goto sgkksaaokaceycie; } foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) { $uiymkeeaukcyqqik = $gkyciwoiiisgywcs->get($mmykcgusskuuuace, $tsuauommsquiesmk, false); if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik, true) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) { goto egekcweywqwukqwq; } $kskgqoywkoawosao = false; goto wwwyuwogyaymawes; egekcweywqwukqwq: suigamkkgmwiaakg: } wwwyuwogyaymawes: sgkksaaokaceycie: if (!$kskgqoywkoawosao) { goto uyagiwoqkikiygme; } $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name(); if (!$aqcaekiaqgiaiwiu) { goto ouaaoissmeyugeye; } $ymqmyyeuycgmigyo = $cgceoyqmmwumqyqa->gmeusukogwcamcyc($ymqmyyeuycgmigyo); ouaaoissmeyugeye: $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace; uyagiwoqkikiygme: mmkoaqwkqwweiuco: } sgiyakiusoqeesgi: $uomewyckeuqoqocu = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\157\x6f\x63\157\x6d\155\x65\162\x63\x65\137\144\x69\163\x70\x6c\141\171\137\160\162\x6f\144\x75\143\x74\x5f\x61\x74\164\162\151\x62\x75\x74\x65\163", $uomewyckeuqoqocu, $product); kogcmeyqyokimaqo: return $uomewyckeuqoqocu; } public function waecsyqmwascmqoa($product, string $ymkomoccmymcoiea) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ATTRIBUTE, '', $ymkomoccmymcoiea); } public function ccekeuwwqqoiwuwy($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::iikosyqiawkweouo, ''); } public function muyycecygiagkouk($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x68\141\x73\x5f\143\150\151\154\144", false); } public function eksssooaeasoymyi($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x69\x73\x5f\x69\156\137\163\x74\x6f\143\153", false); } public function cmqemkgqoweiwiqu($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x69\163\x5f\x64\x6f\x77\156\154\157\x61\x64\141\x62\154\145", false); } public function muyimmegaeguayya($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\151\163\137\x73\x6f\x6c\144\137\151\156\x64\x69\x76\x69\x64\165\141\x6c\154\x79", false); } public function eimgmimuuycwqeug($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x61\144\144\137\x74\157\x5f\x63\141\162\164\137\165\x72\154", ''); } public function gaqgimuwukuyqiie($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\141\144\x64\x5f\164\157\x5f\143\141\x72\x74\x5f\x74\145\x78\x74", ''); } public function wwimmekeiimuoecg($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x73\x69\x6e\x67\x6c\145\137\141\144\144\137\x74\x6f\x5f\143\141\x72\x74\137\164\x65\170\164", ''); } public function qaeeusqkgwagwaqc($product, $oiegiwogmwmawkeo = "\x77\157\157\143\x6f\x6d\x6d\x65\x72\x63\145\x5f\x74\150\165\x6d\x62\156\141\151\x6c", array $wisgiwskwawciiee = [], bool $iwiewowoqmoekyqi = true) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::mkousmkiawwousws, '', $oiegiwogmwmawkeo, $wisgiwskwawciiee, $iwiewowoqmoekyqi); } public function ykeiaeskegyyeoau($product) { return $this->ygwimyogyaqgumam($product, "\x69\155\141\x67\145\137\x69\144", ''); } public function woamsogakkycsqcc($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::mmeomwsgcemayuuu, [], $mgkceomocowocqyo); } public function mmoaikqueyiwcesm($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::geocwaecmeeskuci, []); } public function ocikkicokkaeyegi() : bool { global $woocommerce_loop; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qgqgaykggoemycsk = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::mcwismemiumceoos, 1); $uuwmqqqiwksuaise = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::uiiqiokqwmccomiu, 1); $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::ausqeuugegoygouq, 1); $gwmokccqwwksmwye = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::iqkeggicywkcieew, 1); return $weyoqgcesqgeusiu * $gwmokccqwwksmwye === $qgqgaykggoemycsk || $qgqgaykggoemycsk === $uuwmqqqiwksuaise; } public function omuogooguicuqewu() : bool { return $this->migkyseymeomymmy() || $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wayckuoqggqsuiys(); } public function kccakwkaqugygwmq() : bool { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && !$this->ucecggciemwuowoi(); } public function wwwwsgwguseauisw() : bool { global $woocommerce_loop; return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && isset($woocommerce_loop[Constants::NAME]) && in_array($woocommerce_loop[Constants::NAME], ["\x72\x65\154\x61\x74\x65\144", "\165\x70\x20\55\40\x73\145\154\x6c\163"]); } public function gqmeoioekawuweuo($ymqmyyeuycgmigyo) : bool { global $woocommerce_loop; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($woocommerce_loop, Constants::NAME) === $ymqmyyeuycgmigyo; } public function ucecggciemwuowoi() : bool { return $this->qoiagweqqwqwukog() || $this->aeqcyyqywamikesk() || $this->kicgoeeioiwyuwmq(); } public function aeqcyyqywamikesk() : bool { return $this->gqmeoioekawuweuo("\162\145\x6c\141\164\145\144"); } public function qoiagweqqwqwukog() : bool { return $this->gqmeoioekawuweuo("\x75\x70\55\x73\x65\154\154\x73"); } public function kicgoeeioiwyuwmq() : bool { return $this->gqmeoioekawuweuo("\143\x72\x6f\x73\163\55\x73\145\x6c\154\x73"); } public function migkyseymeomymmy() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako)); } public function icukmcoiwkgucmqg() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::eycyqsgokewiswum); } public function wyigkiucqmacckiu() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::cmckeoksigiaqykc); } public function yqauycsoymimeise($product = null) { $xgwukwqqaseqagay = 0; $product = $this->get($product); if (!$product) { goto ucasywwoeiooacwk; } $eeeyyekmaesysegc = $this->asaycagaeksiumkw($product, false); $iuiwoikawsooqksg = $this->scgumisucgwskyqk($product, false); if (!(is_numeric($iuiwoikawsooqksg) && is_numeric($eeeyyekmaesysegc))) { goto iieiwkmcwkocasiq; } $eeeyyekmaesysegc = (float) $eeeyyekmaesysegc; $iuiwoikawsooqksg = (float) $iuiwoikawsooqksg; $xgwukwqqaseqagay = $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->uwueayqeckmkckyc($iuiwoikawsooqksg, $iuiwoikawsooqksg - $eeeyyekmaesysegc, true); iieiwkmcwkocasiq: ucasywwoeiooacwk: return $xgwukwqqaseqagay; } public function sywcyoouayqkqisk($product) : bool { return $this->oemowqiewwkuiecu($product) <= 0; } public function oemowqiewwkuiecu($product) { $aumscagymwyyicag = 0; $product = $this->get($product); if ($product instanceof WC_Product_Variable) { goto kscecowaeuymysgo; } if (!$product instanceof WC_Product) { goto gkmoqsgamgwkwsas; } $aumscagymwyyicag = $this->owuaywucuaiyocum($product); gkmoqsgamgwkwsas: goto owqsmgycisgmmasg; kscecowaeuymysgo: $aumscagymwyyicag = $this->ygwimyogyaqgumam($product, "\x76\x61\162\151\141\164\151\x6f\x6e\x5f\160\x72\151\143\x65"); owqsmgycisgmmasg: return $aumscagymwyyicag; } public function kaugocgyckysqucm($product, string $ksaameoqigiaoigg = Constants::kgmecoswscqqsymg) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if (!$product instanceof WC_Product_Variable) { goto ucwcmgeksyiggaqi; } $uomewyckeuqoqocu = $product->get_available_variations($ksaameoqigiaoigg); ucwcmgeksyiggaqi: return $uomewyckeuqoqocu; } public function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if (!$product instanceof WC_Product_Variable) { goto sagosckgcimciqya; } $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag); sagosckgcimciqya: return $uomewyckeuqoqocu; } }
