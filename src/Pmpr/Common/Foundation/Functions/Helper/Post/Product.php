<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product; use WC_Product_Variable; use WC_Product_Variation; use WP_Taxonomy; class Product extends Common { public function get($aokagokqyuysuksm = null) { $ksaameoqigiaoigg = null; if ($aokagokqyuysuksm instanceof WC_Product) { goto wuqqmyecwsmegamk; } if ($aokagokqyuysuksm) { goto ogsmeaeskmkauwwy; } global $product; if ($product) { goto ykuewakwswmuaoqq; } $product = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); goto giykkoouiosqeuqo; ykuewakwswmuaoqq: $ksaameoqigiaoigg = $product; giykkoouiosqeuqo: ogsmeaeskmkauwwy: goto wywaockmiweeueom; wuqqmyecwsmegamk: $ksaameoqigiaoigg = $aokagokqyuysuksm; wywaockmiweeueom: if (!(!$ksaameoqigiaoigg && is_numeric($aokagokqyuysuksm))) { goto cueyocuoyqoygsqk; } $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->get($aokagokqyuysuksm); cueyocuoyqoygsqk: return $ksaameoqigiaoigg; } public function iooowgsqoyqseyuu($product = null) { $aokagokqyuysuksm = null; if (!is_numeric($product)) { goto oieimksmyyeyosik; } $aokagokqyuysuksm = $product; goto qqqecycaqiuckqge; oieimksmyyeyosik: $product = $this->get($product); qqqecycaqiuckqge: if (!$product) { goto uqaymuykyqsuayso; } $aokagokqyuysuksm = $this->ygwimyogyaqgumam($product, Constants::gouqcwikiiygyasc); uqaymuykyqsuayso: return $aokagokqyuysuksm; } public function mqmocoguqcyymgqu(string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { static $seyqqsmuaiegkeeq = []; if (!empty($seyqqsmuaiegkeeq)) { goto imowaciskmueoogo; } $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako, $aqykuigiuwmmcieu); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($seyqqsmuaiegkeeq, ["\x70\x72\157\144\x75\x63\164\x5f\x73\150\151\160\160\x69\156\x67\x5f\143\154\x61\x73\163", "\x70\x72\157\x64\165\143\x74\137\x76\151\x73\151\142\151\x6c\x69\164\171", "\x70\162\x6f\144\x75\143\164\137\x74\171\x70\x65"]); imowaciskmueoogo: return $seyqqsmuaiegkeeq; } public function ygwimyogyaqgumam($product, string $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = ''; if (!($product = $this->get($product))) { goto iguyoiwiuikugekq; } $qgciuiagkkguykgs = "\x67\145\164\x5f{$aiowsaccomcoikus}"; if (method_exists($product, $qgciuiagkkguykgs)) { goto iycouaqccscasucc; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->ygwimyogyaqgumam($this->get($product), $aiowsaccomcoikus, $ggauoeuaesiymgee, ...$ywmkwiwkosakssii); goto uicoowkoscsuucui; iycouaqccscasucc: $ksaameoqigiaoigg = $product->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); uicoowkoscsuucui: iguyoiwiuikugekq: return $ksaameoqigiaoigg; } public function qqiwsumoyiukmgco($product) { $product = $this->get($product); $umkkkaqkwugkemce = $this->iooowgsqoyqseyuu($product); if ($product instanceof WC_Product_Variation) { goto weeosewyimcickoi; } $omwmuycmeqcqokom = $umkkkaqkwugkemce; goto iuwcskswgaeuqumi; weeosewyimcickoi: $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce); iuwcskswgaeuqumi: return $omwmuycmeqcqokom; } public function qcgakseyaikigqco($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::qescuiwgsyuikume, ''); } public function sceuewccmscogies($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, "\163\150\x6f\x72\164\x5f\144\x65\163\143\162\151\160\164\151\x6f\156", '', $mgkceomocowocqyo); } public function owuaywucuaiyocum($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::acymsykymkiewqsy, '', $mgkceomocowocqyo); } public function asaycagaeksiumkw($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\x73\141\x6c\x65\137\x70\x72\151\143\x65", '', $mgkceomocowocqyo); } public function scgumisucgwskyqk($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\x72\145\x67\165\x6c\141\162\137\160\x72\x69\143\145", '', $mgkceomocowocqyo); } public function iimgkucsckeosmmk($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ueasagmikqewqcay, ''); } public function uewkmqiiguwwscwy($product, array $ywmkwiwkosakssii = []) { $aumscagymwyyicag = 0; if (!($product = $this->get($product))) { goto ggaqgegasaaiuacg; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\161\x74\171" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->uewkmqiiguwwscwy($product, $ywmkwiwkosakssii); ggaqgegasaaiuacg: return $aumscagymwyyicag; } public function oeiymaksaoqaeqkk($product, array $ywmkwiwkosakssii = []) : float { $aumscagymwyyicag = 0; if (!($product = $this->get($product))) { goto syoyogomscqcsoyk; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\161\x74\171" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->oeiymaksaoqaeqkk($product, $ywmkwiwkosakssii); syoyogomscqcsoyk: return $aumscagymwyyicag; } public function ycqquoiyyuesegsy($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::sauwwsocmukoaayu, ''); } public function weescwwgqgiyumyw($product, $kesssewsiegssiya, $ywmkwiwkosakssii) : array { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->weescwwgqgiyumyw($this->iooowgsqoyqseyuu($product), $kesssewsiegssiya, $ywmkwiwkosakssii); } public function kqoueaayigwkcims($product, $ymkomoccmymcoiea) : array { $qqswgiawgeaeoecu = []; if ($ymkomoccmymcoiea->is_taxonomy()) { goto somsmcmoyaiiwuyk; } $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options(); foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $qqswgiawgeaeoecu[$momcykaoccoymeig] = make_clickable(esc_html($eqgoocgaqwqcimie)); qmukeceewgmekoae: } iuimkcgcsyemcuei: goto msqmakqaiawgqeau; somsmcmoyaiiwuyk: $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object(); $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($product, $ymkomoccmymcoiea->get_name(), [Constants::ymckmcsiymwqucoq => Constants::ALL]); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name); if ($kesssewsiegssiya->attribute_public) { goto moequykwukcqmiga; } $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo; goto mgkwqmyqgswasocy; moequykwukcqmiga: $qqswgiawgeaeoecu[] = $swqimwqeweekeusq->yuawgssgauywkiia($ymqmyyeuycgmigyo, $aoskwucuugeuaeus->qmgcisuuikgmqcsu($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), ["\162\145\x6c" => Constants::qeueagcuyogwwyky]); mgkwqmyqgswasocy: aycyouisaiokysqw: } aaaicwymgocaseis: msqmakqaiawgqeau: $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $mmykcgusskuuuace = [Constants::ciyoccqkiamemcmm => $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\x6f\157\143\x6f\155\155\145\x72\143\x65\x5f\141\x74\164\162\x69\142\165\164\x65", wptexturize(implode("\54\x20", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), Constants::uissasisiuymwsmu => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)]; return (array) $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\x6f\157\143\x6f\155\155\145\x72\143\x65\137\x61\164\164\162\x69\x62\x75\x74\x65\137\157\165\x74\160\165\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product); } public function yeiguwoaqqcyswmk($isweyuoisomqyaag, $ymkomoccmymcoiea = null) : array { $siquossayskcwkea = $uyeqoqgymiqqcsiq = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($isweyuoisomqyaag instanceof WC_Product_Variation) { goto aaoekkysuimcamyu; } if (!is_array($isweyuoisomqyaag)) { goto iuukukcykqykisaa; } $uyeqoqgymiqqcsiq = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, Constants::iikosyqiawkweouo); iuukukcykqykisaa: goto wugqaoggyqusmaoa; aaoekkysuimcamyu: $uyeqoqgymiqqcsiq = $isweyuoisomqyaag->get_attributes(); wugqaoggyqusmaoa: if (!$uyeqoqgymiqqcsiq) { goto kuusyaqguycoyiia; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($uyeqoqgymiqqcsiq as $qmgyyqwkskaiwcqg => $iwewcwusemqaiggk) { $ywwsukisoiguygwm = $yyauwyaeewsickwk->wiecmkiugmyyqiqc(Constants::ATTRIBUTE . "\137", '', $qmgyyqwkskaiwcqg); $msekkkskacaysquk = $awewoweukmqomqmi->woimamkkeyoyauoa(Constants::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $ywwsukisoiguygwm); $eeesqcwowcsygqwq = $cqcqsgykasiqwowi->get($ywwsukisoiguygwm); if (!($eeesqcwowcsygqwq && $msekkkskacaysquk)) { goto kuwwysummgiakgwo; } $gmcgeogogyqsgawk = [Constants::gouqcwikiiygyasc => $aoskwucuugeuaeus->iooowgsqoyqseyuu($msekkkskacaysquk), Constants::NAME => $ywwsukisoiguygwm, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($msekkkskacaysquk), Constants::ciyoccqkiamemcmm => $aoskwucuugeuaeus->igawqaomowicuayw($msekkkskacaysquk, Constants::ciyoccqkiamemcmm), Constants::kmywkmmykgoyyyoy => $gkyciwoiiisgywcs->get($eeesqcwowcsygqwq, Constants::kmywkmmykgoyyyoy)]; if (!($ymkomoccmymcoiea && $ywwsukisoiguygwm === $ymkomoccmymcoiea)) { goto oaymmkagwocukmyq; } return $gmcgeogogyqsgawk; oaymmkagwocukmyq: $siquossayskcwkea[$ywwsukisoiguygwm] = $gmcgeogogyqsgawk; kuwwysummgiakgwo: oasqosiqcsiyyaye: } qamicqyikayyacok: kuusyaqguycoyiia: return $siquossayskcwkea; } public function gywsmekygqwieocq($product, array $cqcsaaswaciweiie = [], bool $aqcaekiaqgiaiwiu = true) : array { $uomewyckeuqoqocu = []; if (!($product = $this->get($product))) { goto ymcwgkmiysmukacs; } $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $qaiwqwwemmyyqosy = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\x63\x5f\x70\162\x6f\144\x75\x63\164\137\x65\x6e\x61\142\x6c\145\137\x64\151\155\x65\156\163\151\x6f\156\x73\x5f\x64\x69\163\160\154\141\171", $product->has_weight() || $product->has_dimensions()); if (!($qaiwqwwemmyyqosy && $product->has_weight())) { goto imiqucuaiyoaeaka; } $uomewyckeuqoqocu["\167\x65\151\x67\150\164"] = [Constants::uissasisiuymwsmu => __("\127\x65\x69\147\x68\164", "\167\157\157\143\x6f\155\x6d\145\x72\143\x65"), Constants::ciyoccqkiamemcmm => wc_format_weight($product->get_weight())]; imiqucuaiyoaeaka: if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) { goto ggiiuoqggyauekgs; } $uomewyckeuqoqocu["\x64\151\155\x65\x6e\x73\151\x6f\x6e\x73"] = [Constants::uissasisiuymwsmu => __("\104\x69\155\145\156\163\151\x6f\x6e\x73", "\167\x6f\157\143\x6f\155\x6d\145\x72\x63\x65"), Constants::ciyoccqkiamemcmm => wc_format_dimensions($product->get_dimensions(false))]; ggiiuoqggyauekgs: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $siquossayskcwkea = array_filter($this->ccekeuwwqqoiwuwy($product), "\167\x63\x5f\141\x74\164\162\151\142\165\164\145\163\x5f\x61\162\162\141\171\x5f\x66\x69\154\x74\145\x72\137\x76\151\x73\151\142\154\145"); foreach ($siquossayskcwkea as $ymkomoccmymcoiea) { $mmykcgusskuuuace = $this->kqoueaayigwkcims($product, $ymkomoccmymcoiea); $kskgqoywkoawosao = true; if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) { goto ikqwewkaooqqcwmw; } foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) { $uiymkeeaukcyqqik = $gkyciwoiiisgywcs->get($mmykcgusskuuuace, $tsuauommsquiesmk, false); if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik, true) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) { goto qgaoikokgokgqaqi; } $kskgqoywkoawosao = false; goto myccwweewiwguqaa; qgaoikokgokgqaqi: cqokwokkmcecokwi: } myccwweewiwguqaa: ikqwewkaooqqcwmw: if (!$kskgqoywkoawosao) { goto ogmogeeogucogway; } $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name(); if (!$aqcaekiaqgiaiwiu) { goto oyqwymwomuameswa; } $ymqmyyeuycgmigyo = $cgceoyqmmwumqyqa->gmeusukogwcamcyc($ymqmyyeuycgmigyo); oyqwymwomuameswa: $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace; ogmogeeogucogway: qqyqygkmkeeuaiss: } yyeiqoiuweqikyyq: $uomewyckeuqoqocu = $mqwwsgggokkiiceo->sscegwueamckwmcy("\x77\157\x6f\x63\x6f\155\155\x65\x72\143\145\x5f\x64\x69\163\160\x6c\x61\x79\137\x70\162\x6f\144\165\x63\164\x5f\141\164\x74\162\x69\142\165\164\x65\163", $uomewyckeuqoqocu, $product); ymcwgkmiysmukacs: return $uomewyckeuqoqocu; } public function waecsyqmwascmqoa($product, string $ymkomoccmymcoiea) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ATTRIBUTE, '', $ymkomoccmymcoiea); } public function ccekeuwwqqoiwuwy($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::iikosyqiawkweouo, ''); } public function muyycecygiagkouk($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x68\x61\x73\137\x63\x68\151\x6c\144", false); } public function eksssooaeasoymyi($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\151\x73\137\151\x6e\x5f\x73\164\x6f\x63\153", false); } public function cmqemkgqoweiwiqu($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\151\163\x5f\x64\157\167\x6e\x6c\157\141\x64\x61\x62\154\x65", false); } public function muyimmegaeguayya($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\151\163\137\163\x6f\x6c\144\137\x69\x6e\144\151\166\x69\x64\x75\x61\x6c\x6c\x79", false); } public function eimgmimuuycwqeug($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\141\144\x64\x5f\x74\157\137\143\x61\162\164\137\165\162\x6c", ''); } public function gaqgimuwukuyqiie($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x61\144\144\x5f\164\x6f\x5f\x63\x61\x72\x74\137\164\145\x78\x74", ''); } public function wwimmekeiimuoecg($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x73\x69\x6e\x67\154\145\x5f\x61\144\x64\x5f\x74\157\x5f\x63\141\x72\x74\137\164\x65\x78\x74", ''); } public function qaeeusqkgwagwaqc($product, $oiegiwogmwmawkeo = "\x77\x6f\x6f\x63\157\155\x6d\145\x72\143\x65\x5f\x74\x68\165\155\x62\156\x61\151\x6c", array $wisgiwskwawciiee = [], bool $iwiewowoqmoekyqi = true) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::mkousmkiawwousws, '', $oiegiwogmwmawkeo, $wisgiwskwawciiee, $iwiewowoqmoekyqi); } public function ykeiaeskegyyeoau($product) { return $this->ygwimyogyaqgumam($product, "\151\155\x61\147\x65\137\151\144", ''); } public function woamsogakkycsqcc($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::mmeomwsgcemayuuu, [], $mgkceomocowocqyo); } public function mmoaikqueyiwcesm($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::geocwaecmeeskuci, []); } public function ocikkicokkaeyegi() : bool { global $woocommerce_loop; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qgqgaykggoemycsk = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::mcwismemiumceoos, 1); $uuwmqqqiwksuaise = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::uiiqiokqwmccomiu, 1); $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::ausqeuugegoygouq, 1); $gwmokccqwwksmwye = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::iqkeggicywkcieew, 1); return $weyoqgcesqgeusiu * $gwmokccqwwksmwye === $qgqgaykggoemycsk || $qgqgaykggoemycsk === $uuwmqqqiwksuaise; } public function omuogooguicuqewu() : bool { return $this->migkyseymeomymmy() || $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wayckuoqggqsuiys(); } public function kccakwkaqugygwmq() : bool { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && !$this->ucecggciemwuowoi(); } public function wwwwsgwguseauisw() : bool { global $woocommerce_loop; return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && isset($woocommerce_loop[Constants::NAME]) && in_array($woocommerce_loop[Constants::NAME], ["\162\145\154\x61\x74\x65\144", "\x75\x70\x20\x2d\x20\x73\x65\x6c\154\x73"]); } public function gqmeoioekawuweuo($ymqmyyeuycgmigyo) : bool { global $woocommerce_loop; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($woocommerce_loop, Constants::NAME) === $ymqmyyeuycgmigyo; } public function ucecggciemwuowoi() : bool { return $this->qoiagweqqwqwukog() || $this->aeqcyyqywamikesk() || $this->kicgoeeioiwyuwmq(); } public function aeqcyyqywamikesk() : bool { return $this->gqmeoioekawuweuo("\x72\x65\x6c\141\164\x65\144"); } public function qoiagweqqwqwukog() : bool { return $this->gqmeoioekawuweuo("\x75\x70\x2d\x73\145\154\x6c\x73"); } public function kicgoeeioiwyuwmq() : bool { return $this->gqmeoioekawuweuo("\x63\x72\157\163\x73\55\163\x65\x6c\154\163"); } public function migkyseymeomymmy() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako)); } public function icukmcoiwkgucmqg() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::eycyqsgokewiswum); } public function wyigkiucqmacckiu() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::cmckeoksigiaqykc); } public function yqauycsoymimeise($product = null) { $xgwukwqqaseqagay = 0; $product = $this->get($product); if (!$product) { goto eukmaswisycyiwik; } $eeeyyekmaesysegc = $this->asaycagaeksiumkw($product, false); $iuiwoikawsooqksg = $this->scgumisucgwskyqk($product, false); if (!(is_numeric($iuiwoikawsooqksg) && is_numeric($eeeyyekmaesysegc))) { goto auycewyimycgsusg; } $eeeyyekmaesysegc = (float) $eeeyyekmaesysegc; $iuiwoikawsooqksg = (float) $iuiwoikawsooqksg; $xgwukwqqaseqagay = $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->uwueayqeckmkckyc($iuiwoikawsooqksg, $iuiwoikawsooqksg - $eeeyyekmaesysegc, true); auycewyimycgsusg: eukmaswisycyiwik: return $xgwukwqqaseqagay; } public function sywcyoouayqkqisk($product) : bool { return $this->oemowqiewwkuiecu($product) <= 0; } public function oemowqiewwkuiecu($product) { $aumscagymwyyicag = 0; $product = $this->get($product); if ($product instanceof WC_Product_Variable) { goto mokwmqowycmwwkem; } if (!$product instanceof WC_Product) { goto ysgkwckuuwmeqmim; } $aumscagymwyyicag = $this->owuaywucuaiyocum($product); ysgkwckuuwmeqmim: goto wiakkcgyggaeaeoa; mokwmqowycmwwkem: $aumscagymwyyicag = $this->ygwimyogyaqgumam($product, "\x76\x61\x72\x69\x61\164\151\157\x6e\x5f\x70\x72\151\143\145"); wiakkcgyggaeaeoa: return $aumscagymwyyicag; } public function kaugocgyckysqucm($product, string $ksaameoqigiaoigg = Constants::kgmecoswscqqsymg) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if (!$product instanceof WC_Product_Variable) { goto ecyuccaigwwcquoq; } $uomewyckeuqoqocu = $product->get_available_variations($ksaameoqigiaoigg); ecyuccaigwwcquoq: return $uomewyckeuqoqocu; } public function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if (!$product instanceof WC_Product_Variable) { goto oesgammmiwwkggki; } $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag); oesgammmiwwkggki: return $uomewyckeuqoqocu; } }
