<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Product; use WC_Product_Variable; use WC_Product_Variation; use WP_Taxonomy; class Product extends Common { public function get($aokagokqyuysuksm = null) { $ksaameoqigiaoigg = null; if ($aokagokqyuysuksm instanceof WC_Product) { goto aosqacyissiuywmy; } if ($aokagokqyuysuksm) { goto lsgwaumeuqgqgykm; } global $product; if ($product) { goto acwgyguyoswiiayo; } $product = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); goto oqqsaycukyyqkwwa; acwgyguyoswiiayo: $ksaameoqigiaoigg = $product; oqqsaycukyyqkwwa: lsgwaumeuqgqgykm: goto gkaauyqyceyeasym; aosqacyissiuywmy: $ksaameoqigiaoigg = $aokagokqyuysuksm; gkaauyqyceyeasym: if (!(!$ksaameoqigiaoigg && is_numeric($aokagokqyuysuksm))) { goto iyiogqckuesmwgsi; } $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->get($aokagokqyuysuksm); iyiogqckuesmwgsi: return $ksaameoqigiaoigg; } public function iooowgsqoyqseyuu($product = null) { $aokagokqyuysuksm = null; if (!is_numeric($product)) { goto akgikwguwgmkickm; } $aokagokqyuysuksm = $product; goto eickccugyqkeaqqs; akgikwguwgmkickm: $product = $this->get($product); eickccugyqkeaqqs: if (!$product) { goto wecqaqqeqaiwuqmc; } $aokagokqyuysuksm = $this->ygwimyogyaqgumam($product, Constants::gouqcwikiiygyasc); wecqaqqeqaiwuqmc: return $aokagokqyuysuksm; } public function mqmocoguqcyymgqu(string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) : array { static $seyqqsmuaiegkeeq = []; if (!empty($seyqqsmuaiegkeeq)) { goto koayqokgokmcaeou; } $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako, $aqykuigiuwmmcieu); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($seyqqsmuaiegkeeq, ["\x70\x72\x6f\x64\165\x63\164\x5f\163\150\151\x70\x70\151\x6e\147\137\x63\154\141\x73\x73", "\160\162\157\144\165\x63\164\137\166\151\163\x69\x62\151\154\151\x74\171", "\160\x72\x6f\144\165\143\x74\x5f\164\171\160\145"]); koayqokgokmcaeou: return $seyqqsmuaiegkeeq; } public function ygwimyogyaqgumam($product, string $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = ''; if (!($product = $this->get($product))) { goto gusqaksmckugmucc; } $qgciuiagkkguykgs = "\147\x65\164\137{$aiowsaccomcoikus}"; if (method_exists($product, $qgciuiagkkguykgs)) { goto owgquegaygweeuwq; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->ygwimyogyaqgumam($this->get($product), $aiowsaccomcoikus, $ggauoeuaesiymgee, ...$ywmkwiwkosakssii); goto mkeikioeqcuumiga; owgquegaygweeuwq: $ksaameoqigiaoigg = $product->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); mkeikioeqcuumiga: gusqaksmckugmucc: return $ksaameoqigiaoigg; } public function qqiwsumoyiukmgco($product) { $product = $this->get($product); $umkkkaqkwugkemce = $this->iooowgsqoyqseyuu($product); if ($product instanceof WC_Product_Variation) { goto uceqaououkceeiui; } $omwmuycmeqcqokom = $umkkkaqkwugkemce; goto siymqewiegkgsuai; uceqaououkceeiui: $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce); siymqewiegkgsuai: return $omwmuycmeqcqokom; } public function qcgakseyaikigqco($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::qescuiwgsyuikume, ''); } public function sceuewccmscogies($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, "\163\x68\x6f\x72\x74\x5f\x64\145\163\143\162\x69\x70\164\151\x6f\x6e", '', $mgkceomocowocqyo); } public function owuaywucuaiyocum($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::acymsykymkiewqsy, '', $mgkceomocowocqyo); } public function asaycagaeksiumkw($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\163\x61\x6c\145\x5f\x70\162\151\143\x65", '', $mgkceomocowocqyo); } public function scgumisucgwskyqk($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : string { return $this->ygwimyogyaqgumam($product, "\162\145\147\165\x6c\141\162\137\x70\162\151\143\x65", '', $mgkceomocowocqyo); } public function iimgkucsckeosmmk($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ueasagmikqewqcay, ''); } public function uewkmqiiguwwscwy($product, array $ywmkwiwkosakssii = []) { $aumscagymwyyicag = 0; if (!($product = $this->get($product))) { goto useqkkasoyuoecio; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x71\164\x79" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->uewkmqiiguwwscwy($product, $ywmkwiwkosakssii); useqkkasoyuoecio: return $aumscagymwyyicag; } public function oeiymaksaoqaeqkk($product, array $ywmkwiwkosakssii = []) : float { $aumscagymwyyicag = 0; if (!($product = $this->get($product))) { goto kemqmaqgsgueoaye; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\161\x74\171" => 1, Constants::acymsykymkiewqsy => $this->owuaywucuaiyocum($product)]); $aumscagymwyyicag = $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->oeiymaksaoqaeqkk($product, $ywmkwiwkosakssii); kemqmaqgsgueoaye: return $aumscagymwyyicag; } public function ycqquoiyyuesegsy($product) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::sauwwsocmukoaayu, ''); } public function weescwwgqgiyumyw($product, $kesssewsiegssiya, $ywmkwiwkosakssii) : array { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->weescwwgqgiyumyw($this->iooowgsqoyqseyuu($product), $kesssewsiegssiya, $ywmkwiwkosakssii); } public function kqoueaayigwkcims($product, $ymkomoccmymcoiea) : array { $qqswgiawgeaeoecu = []; if ($ymkomoccmymcoiea->is_taxonomy()) { goto mukimwqesmuuceii; } $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options(); foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { $qqswgiawgeaeoecu[$momcykaoccoymeig] = make_clickable(esc_html($eqgoocgaqwqcimie)); gscweoakqmmoeuki: } wqekysuysssisica: goto wumkcikqsegaceuy; mukimwqesmuuceii: $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object(); $uyuaosigqymaqsaa = $this->weescwwgqgiyumyw($product, $ymkomoccmymcoiea->get_name(), [Constants::ymckmcsiymwqucoq => Constants::ALL]); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name); if ($kesssewsiegssiya->attribute_public) { goto smwyssciamywmcwc; } $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo; goto ukyauawycqguowmk; smwyssciamywmcwc: $qqswgiawgeaeoecu[] = $swqimwqeweekeusq->yuawgssgauywkiia($ymqmyyeuycgmigyo, $aoskwucuugeuaeus->qmgcisuuikgmqcsu($aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), ["\x72\145\154" => Constants::qeueagcuyogwwyky]); ukyauawycqguowmk: eaqqgoagskioaooo: } wccugoogysmyisqe: wumkcikqsegaceuy: $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $mmykcgusskuuuace = [Constants::ciyoccqkiamemcmm => $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\155\x65\x72\143\x65\137\141\164\164\162\x69\142\x75\x74\145", wptexturize(implode("\54\40", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), Constants::uissasisiuymwsmu => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)]; return (array) $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\157\x6f\x63\157\x6d\155\145\162\143\x65\x5f\x61\x74\x74\162\151\x62\x75\164\x65\x5f\157\165\164\160\165\x74", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product); } public function yeiguwoaqqcyswmk($isweyuoisomqyaag, $ymkomoccmymcoiea = null) : array { $siquossayskcwkea = $uyeqoqgymiqqcsiq = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($isweyuoisomqyaag instanceof WC_Product_Variation) { goto okyewgwqccwumwew; } if (!is_array($isweyuoisomqyaag)) { goto gmmcayeamkkksegg; } $uyeqoqgymiqqcsiq = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, Constants::iikosyqiawkweouo); gmmcayeamkkksegg: goto gqkaemugiuqsakac; okyewgwqccwumwew: $uyeqoqgymiqqcsiq = $isweyuoisomqyaag->get_attributes(); gqkaemugiuqsakac: if (!$uyeqoqgymiqqcsiq) { goto yygceasikmuigagu; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($uyeqoqgymiqqcsiq as $qmgyyqwkskaiwcqg => $iwewcwusemqaiggk) { $ywwsukisoiguygwm = $yyauwyaeewsickwk->wiecmkiugmyyqiqc(Constants::ATTRIBUTE . "\x5f", '', $qmgyyqwkskaiwcqg); $msekkkskacaysquk = $awewoweukmqomqmi->woimamkkeyoyauoa(Constants::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $ywwsukisoiguygwm); $eeesqcwowcsygqwq = $cqcqsgykasiqwowi->get($ywwsukisoiguygwm); if (!($eeesqcwowcsygqwq && $msekkkskacaysquk)) { goto tawikeiumkmiyomw; } $gmcgeogogyqsgawk = [Constants::gouqcwikiiygyasc => $aoskwucuugeuaeus->iooowgsqoyqseyuu($msekkkskacaysquk), Constants::NAME => $ywwsukisoiguygwm, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($msekkkskacaysquk), Constants::ciyoccqkiamemcmm => $aoskwucuugeuaeus->igawqaomowicuayw($msekkkskacaysquk, Constants::ciyoccqkiamemcmm), Constants::kmywkmmykgoyyyoy => $gkyciwoiiisgywcs->get($eeesqcwowcsygqwq, Constants::kmywkmmykgoyyyoy)]; if (!($ymkomoccmymcoiea && $ywwsukisoiguygwm === $ymkomoccmymcoiea)) { goto yawsicegksimgmco; } return $gmcgeogogyqsgawk; yawsicegksimgmco: $siquossayskcwkea[$ywwsukisoiguygwm] = $gmcgeogogyqsgawk; tawikeiumkmiyomw: gmwgckwgwcswwsys: } kwyqumksiocogsue: yygceasikmuigagu: return $siquossayskcwkea; } public function gywsmekygqwieocq($product, array $cqcsaaswaciweiie = [], bool $aqcaekiaqgiaiwiu = true) : array { $uomewyckeuqoqocu = []; if (!($product = $this->get($product))) { goto esmwwomccacsqywi; } $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $qaiwqwwemmyyqosy = $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\143\x5f\160\162\x6f\144\165\143\164\x5f\x65\156\141\142\x6c\145\137\x64\x69\x6d\x65\156\163\x69\x6f\156\x73\x5f\144\151\163\x70\154\x61\x79", $product->has_weight() || $product->has_dimensions()); if (!($qaiwqwwemmyyqosy && $product->has_weight())) { goto ykssueyoewywagwk; } $uomewyckeuqoqocu["\x77\x65\x69\147\150\164"] = [Constants::uissasisiuymwsmu => __("\x57\145\151\147\x68\164", "\x77\157\x6f\x63\x6f\x6d\155\x65\162\x63\x65"), Constants::ciyoccqkiamemcmm => wc_format_weight($product->get_weight())]; ykssueyoewywagwk: if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) { goto iumwukayaosoaois; } $uomewyckeuqoqocu["\144\x69\155\x65\156\163\151\157\x6e\x73"] = [Constants::uissasisiuymwsmu => __("\104\151\155\145\x6e\x73\151\157\156\163", "\167\x6f\157\x63\x6f\155\155\145\x72\x63\x65"), Constants::ciyoccqkiamemcmm => wc_format_dimensions($product->get_dimensions(false))]; iumwukayaosoaois: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $siquossayskcwkea = array_filter($this->ccekeuwwqqoiwuwy($product), "\x77\x63\x5f\x61\164\164\x72\151\142\x75\164\145\x73\x5f\x61\x72\162\x61\x79\x5f\146\151\x6c\164\145\162\x5f\166\x69\163\x69\142\154\145"); foreach ($siquossayskcwkea as $ymkomoccmymcoiea) { $mmykcgusskuuuace = $this->kqoueaayigwkcims($product, $ymkomoccmymcoiea); $kskgqoywkoawosao = true; if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) { goto aiiskmcymwiakkgc; } foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) { $uiymkeeaukcyqqik = $gkyciwoiiisgywcs->get($mmykcgusskuuuace, $tsuauommsquiesmk, false); if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik, true) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) { goto wugmoiceuaawcoem; } $kskgqoywkoawosao = false; goto agiaqmmawekwgsky; wugmoiceuaawcoem: qqsgiayqyskeisua: } agiaqmmawekwgsky: aiiskmcymwiakkgc: if (!$kskgqoywkoawosao) { goto cgukcskqwgsmumcy; } $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name(); if (!$aqcaekiaqgiaiwiu) { goto moueuekwquacwkok; } $ymqmyyeuycgmigyo = $cgceoyqmmwumqyqa->gmeusukogwcamcyc($ymqmyyeuycgmigyo); moueuekwquacwkok: $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace; cgukcskqwgsmumcy: kkqkiieookquommo: } smoiwyguceomewwy: $uomewyckeuqoqocu = $mqwwsgggokkiiceo->sscegwueamckwmcy("\167\x6f\157\143\157\x6d\155\145\162\x63\x65\137\x64\x69\163\x70\x6c\x61\x79\137\x70\x72\x6f\144\165\143\164\137\x61\x74\x74\x72\x69\x62\165\x74\x65\163", $uomewyckeuqoqocu, $product); esmwwomccacsqywi: return $uomewyckeuqoqocu; } public function waecsyqmwascmqoa($product, string $ymkomoccmymcoiea) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::ATTRIBUTE, '', $ymkomoccmymcoiea); } public function ccekeuwwqqoiwuwy($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::iikosyqiawkweouo, ''); } public function muyycecygiagkouk($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x68\141\163\x5f\143\150\151\x6c\144", false); } public function eksssooaeasoymyi($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\151\163\x5f\151\x6e\137\x73\164\x6f\143\153", false); } public function cmqemkgqoweiwiqu($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x69\163\x5f\144\x6f\x77\x6e\x6c\157\x61\x64\141\x62\154\x65", false); } public function muyimmegaeguayya($product) : bool { return (bool) $this->ygwimyogyaqgumam($product, "\x69\163\137\163\157\x6c\144\x5f\151\x6e\x64\x69\x76\151\144\x75\141\154\x6c\171", false); } public function eimgmimuuycwqeug($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x61\x64\x64\x5f\164\x6f\x5f\x63\141\x72\164\137\165\x72\154", ''); } public function gaqgimuwukuyqiie($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x61\x64\144\137\x74\x6f\x5f\143\141\162\164\137\164\x65\170\x74", ''); } public function wwimmekeiimuoecg($product) : string { return (string) $this->ygwimyogyaqgumam($product, "\x73\151\156\x67\154\x65\x5f\141\144\144\137\x74\x6f\x5f\143\141\x72\x74\137\164\145\x78\x74", ''); } public function qaeeusqkgwagwaqc($product, $oiegiwogmwmawkeo = "\x77\157\x6f\x63\x6f\x6d\x6d\x65\162\x63\145\x5f\x74\150\x75\x6d\x62\x6e\141\151\154", array $wisgiwskwawciiee = [], bool $iwiewowoqmoekyqi = true) : string { return (string) $this->ygwimyogyaqgumam($product, Constants::mkousmkiawwousws, '', $oiegiwogmwmawkeo, $wisgiwskwawciiee, $iwiewowoqmoekyqi); } public function ykeiaeskegyyeoau($product) { return $this->ygwimyogyaqgumam($product, "\151\155\x61\x67\145\x5f\151\144", ''); } public function woamsogakkycsqcc($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::mmeomwsgcemayuuu, [], $mgkceomocowocqyo); } public function mmoaikqueyiwcesm($product) : array { return (array) $this->ygwimyogyaqgumam($product, Constants::geocwaecmeeskuci, []); } public function ocikkicokkaeyegi() : bool { global $woocommerce_loop; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qgqgaykggoemycsk = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::mcwismemiumceoos, 1); $uuwmqqqiwksuaise = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::uiiqiokqwmccomiu, 1); $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::ausqeuugegoygouq, 1); $gwmokccqwwksmwye = $gkyciwoiiisgywcs->get($woocommerce_loop, Constants::iqkeggicywkcieew, 1); return $weyoqgcesqgeusiu * $gwmokccqwwksmwye === $qgqgaykggoemycsk || $qgqgaykggoemycsk === $uuwmqqqiwksuaise; } public function omuogooguicuqewu() : bool { return $this->migkyseymeomymmy() || $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wayckuoqggqsuiys(); } public function kccakwkaqugygwmq() : bool { return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && !$this->ucecggciemwuowoi(); } public function wwwwsgwguseauisw() : bool { global $woocommerce_loop; return $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() && isset($woocommerce_loop[Constants::NAME]) && in_array($woocommerce_loop[Constants::NAME], ["\162\145\x6c\x61\164\x65\144", "\x75\x70\x20\x2d\40\163\x65\154\x6c\x73"]); } public function gqmeoioekawuweuo($ymqmyyeuycgmigyo) : bool { global $woocommerce_loop; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($woocommerce_loop, Constants::NAME) === $ymqmyyeuycgmigyo; } public function ucecggciemwuowoi() : bool { return $this->qoiagweqqwqwukog() || $this->aeqcyyqywamikesk() || $this->kicgoeeioiwyuwmq(); } public function aeqcyyqywamikesk() : bool { return $this->gqmeoioekawuweuo("\x72\x65\154\x61\x74\x65\x64"); } public function qoiagweqqwqwukog() : bool { return $this->gqmeoioekawuweuo("\165\x70\x2d\x73\145\154\x6c\163"); } public function kicgoeeioiwyuwmq() : bool { return $this->gqmeoioekawuweuo("\x63\x72\157\x73\x73\x2d\x73\145\154\154\163"); } public function migkyseymeomymmy() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs(Constants::oguseymmyyoyaako)); } public function icukmcoiwkgucmqg() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::eycyqsgokewiswum); } public function wyigkiucqmacckiu() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::cmckeoksigiaqykc); } public function yqauycsoymimeise($product = null) { $xgwukwqqaseqagay = 0; $product = $this->get($product); if (!$product) { goto kwuiqqycqycswaku; } $eeeyyekmaesysegc = $this->asaycagaeksiumkw($product, false); $iuiwoikawsooqksg = $this->scgumisucgwskyqk($product, false); if (!(is_numeric($iuiwoikawsooqksg) && is_numeric($eeeyyekmaesysegc))) { goto eyecumosyciiiooq; } $eeeyyekmaesysegc = (float) $eeeyyekmaesysegc; $iuiwoikawsooqksg = (float) $iuiwoikawsooqksg; $xgwukwqqaseqagay = $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->uwueayqeckmkckyc($iuiwoikawsooqksg, $iuiwoikawsooqksg - $eeeyyekmaesysegc, true); eyecumosyciiiooq: kwuiqqycqycswaku: return $xgwukwqqaseqagay; } public function sywcyoouayqkqisk($product) : bool { return $this->oemowqiewwkuiecu($product) <= 0; } public function oemowqiewwkuiecu($product) { $aumscagymwyyicag = 0; $product = $this->get($product); if ($product instanceof WC_Product_Variable) { goto soqkyegaguykmcso; } if (!$product instanceof WC_Product) { goto eqwqmiawekysseqe; } $aumscagymwyyicag = $this->owuaywucuaiyocum($product); eqwqmiawekysseqe: goto sciuwmmsmaecigik; soqkyegaguykmcso: $aumscagymwyyicag = $this->ygwimyogyaqgumam($product, "\166\x61\x72\151\141\164\151\157\x6e\x5f\x70\162\x69\x63\x65"); sciuwmmsmaecigik: return $aumscagymwyyicag; } public function kaugocgyckysqucm($product, string $ksaameoqigiaoigg = Constants::kgmecoswscqqsymg) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if (!$product instanceof WC_Product_Variable) { goto umueiqgeckuoywuw; } $uomewyckeuqoqocu = $product->get_available_variations($ksaameoqigiaoigg); umueiqgeckuoywuw: return $uomewyckeuqoqocu; } public function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array { $uomewyckeuqoqocu = []; $product = $this->get($product); if (!$product instanceof WC_Product_Variable) { goto wsyqaoimygmemgay; } $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag); wsyqaoimygmemgay: return $uomewyckeuqoqocu; } }
