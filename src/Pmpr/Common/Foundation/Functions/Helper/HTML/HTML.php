<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Template; use WP_Post; use WP_Term; class HTML extends Common { public function qykoimeycmqgwkui() : array { return ["\x6e\157\146\157\154\154\157\x77" => __("\x4e\x6f\146\x6f\x6c\x6c\x6f\167", PR__CMN__FOUNDATION), "\x6e\x6f\157\x70\145\x6e\145\162" => __("\116\157\x6f\x70\x65\156\x65\x72", PR__CMN__FOUNDATION), "\x6e\x6f\x72\145\146\145\x72\x72\145\162" => __("\116\x6f\x72\x65\x66\145\x72\162\x65\x72", PR__CMN__FOUNDATION)]; } public function eqggmuyywiawyigi($sociqikgoyemqaac) { $ucccueqywigcukcc = "\x62\141\143\x6b\147\162\157\x75\156\144\55\151\155\141\x67\145\134\x73\52\x3a\134\x73\x2a\50\77\74\x61\164\164\162\x3e\x5c\x73\x2a\x75\162\154\134\x73\x2a\134\x28\x28\x3f\74\165\162\154\76\133\x5e\51\135\x2b\51\x5c\x29\51\134\x73\52\73\77"; if (preg_match("\x23{$ucccueqywigcukcc}\43\x69\163", $sociqikgoyemqaac, $meyiiwcswqmuggyg)) { goto ymkwkqaswwcwaaog; } return false; ymkwkqaswwcwaaog: if (!preg_match("\43\144\141\x74\141\72\x69\x6d\141\147\145\43\x69\163", $meyiiwcswqmuggyg[Constants::auqoykcmsiauccao])) { goto rwekqsecucoaeyua; } return false; rwekqsecucoaeyua: return esc_url(trim(wp_strip_all_tags(html_entity_decode($meyiiwcswqmuggyg[Constants::auqoykcmsiauccao], ENT_QUOTES | ENT_HTML5)), "\x27\x22\40")); } public function memaocoueygwyomc($nsmgceoqaqogqmuw) : string { return (string) mb_encode_numericentity(htmlspecialchars_decode(htmlentities($nsmgceoqaqogqmuw, ENT_NOQUOTES, "\125\124\x46\x2d\70", false), ENT_NOQUOTES), [0x80, 0x10ffff, 0, ~0], "\125\124\x46\55\70"); } public function gqeemiaoyceyasme($ymkomoccmymcoiea) : ?string { $aqykuigiuwmmcieu = ''; if (is_array($ymkomoccmymcoiea)) { goto oiammieoqaouyioy; } if (!(is_string($ymkomoccmymcoiea) || is_numeric($ymkomoccmymcoiea))) { goto aickummaecoksgec; } $aqykuigiuwmmcieu = (string) $ymkomoccmymcoiea; aickummaecoksgec: goto qcwcskcquoyuesge; oiammieoqaouyioy: if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->gogeqwskoiiaocoe($ymkomoccmymcoiea)) { goto ugiuakmiswagycwy; } $aqykuigiuwmmcieu = implode("\40", $ymkomoccmymcoiea); goto qqywgucwkcwwwika; ugiuakmiswagycwy: $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ymkomoccmymcoiea); qqywgucwkcwwwika: qcwcskcquoyuesge: return esc_attr(trim($aqykuigiuwmmcieu)); } public function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { if (!$gcegymooyemmaysk) { goto camiekmccsgqswwo; } foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) { if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) { goto wckuumkmmocsciqo; } $sysgmomuyiiawwcm[$uusmaiomayssaecw] = $this->igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee); unset($gcegymooyemmaysk[$uusmaiomayssaecw]); wckuumkmmocsciqo: oymoieyokuscmgok: } eqskkyagygyigacm: $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk); camiekmccsgqswwo: return $sysgmomuyiiawwcm; } public function igmaewykumgwoaoy($siquossayskcwkea, ?string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if (is_object($siquossayskcwkea) || is_array($siquossayskcwkea)) { goto usoomsyiqkwkgeyi; } return trim($siquossayskcwkea . "\x20" . (is_array($eqgoocgaqwqcimie) ? implode("\40", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie)); goto geeosccccmmucqce; usoomsyiqkwkgeyi: if ($uusmaiomayssaecw) { goto iokskucgaqiqycmm; } $wisgiwskwawciiee = $siquossayskcwkea; goto sggkkgmeigoqaoky; iokskucgaqiqycmm: $wisgiwskwawciiee = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, $uusmaiomayssaecw, ''); sggkkgmeigoqaoky: geeosccccmmucqce: if (is_array($eqgoocgaqwqcimie)) { goto yecueayusueayyoc; } if (!(is_string($eqgoocgaqwqcimie) || is_numeric($eqgoocgaqwqcimie))) { goto emeaagoguiuyieui; } $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\x20" . $eqgoocgaqwqcimie); emeaagoguiuyieui: goto mkckgwkgugmguwkm; yecueayusueayyoc: $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\40", $eqgoocgaqwqcimie)); mkckgwkgugmguwkm: if (is_object($siquossayskcwkea)) { goto coeqgweisigocqim; } if (!is_array($siquossayskcwkea)) { goto wkgawikcioiuyqme; } if ($uusmaiomayssaecw) { goto qqcwksosioimeaqq; } $siquossayskcwkea = $wisgiwskwawciiee; goto uiuseyqqmuguyckm; qqcwksosioimeaqq: $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; uiuseyqqmuguyckm: wkgawikcioiuyqme: goto gkiwcciigiaeamyi; coeqgweisigocqim: $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee; gkiwcciigiaeamyi: return $siquossayskcwkea; } public function sueyawuweyoqyeaq($siquossayskcwkea = [], array $qqswgiawgeaeoecu = []) { foreach ($qqswgiawgeaeoecu as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, $wisgiwskwawciiee, $eqgoocgaqwqcimie); akuowkgaiuksqwgc: } esaioouuwmeaqiim: return $siquossayskcwkea; } public function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $siquossayskcwkea; } public function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ukwmeuiywasikwcu = false; if (is_string($siquossayskcwkea)) { goto yosikwkgwwawmmeu; } if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) { goto gwoqkkyaeieummsw; } $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw]; if (!is_string($wisgiwskwawciiee)) { goto koioogicyyqwawsy; } $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee); $ukwmeuiywasikwcu = true; koioogicyyqwawsy: if (!(is_array($wisgiwskwawciiee) && in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee, true))) { goto ywowkgmqwokusske; } if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) !== false)) { goto uyoscwugeomiciwq; } unset($wisgiwskwawciiee[$ccamueccusigaaio]); uyoscwugeomiciwq: if (!$ukwmeuiywasikwcu) { goto eaeokigkusweawki; } $wisgiwskwawciiee = implode("\40", $wisgiwskwawciiee); eaeokigkusweawki: $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; ywowkgmqwokusske: gwoqkkyaeieummsw: goto auywcaygigcsqoek; yosikwkgwwawmmeu: $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea)); auywcaygigcsqoek: return $siquossayskcwkea; } public function asouumsaymkgawie($siquossayskcwkea, string $oswgusmmccauqika = "\x22") : string { $aqykuigiuwmmcieu = ''; if (is_string($siquossayskcwkea)) { goto oegoygwicucyeses; } if (!is_array($siquossayskcwkea)) { goto ccgoagogukekkeks; } foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (in_array($ymqmyyeuycgmigyo, ["\x73\162\x63", "\150\162\145\x66"], true) && $this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto guoeosgiowqqmswg; } $eqgoocgaqwqcimie = $this->gqeemiaoyceyasme($eqgoocgaqwqcimie); goto gyqiqmsmeisgcyys; guoeosgiowqqmswg: $eqgoocgaqwqcimie = esc_url($eqgoocgaqwqcimie); gyqiqmsmeisgcyys: if (preg_replace("\57\134\x73\x2b\57", '', $eqgoocgaqwqcimie)) { goto omkwqeiacwosgskq; } $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x20"; goto kimusawigieceeai; omkwqeiacwosgskq: if (is_numeric($ymqmyyeuycgmigyo)) { goto emuyygwqumgmmqei; } $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\x20"; goto kgumycouuweoycwe; emuyygwqumgmmqei: $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40"; kgumycouuweoycwe: kimusawigieceeai: yaskeauwgsusisom: } oogqmueeykigemom: ccgoagogukekkeks: goto gswyigyemukicika; oegoygwicucyeses: $aqykuigiuwmmcieu = $siquossayskcwkea; gswyigyemukicika: return rtrim($aqykuigiuwmmcieu, "\x20"); } public function yuawgssgauywkiia($ewgwqamkygiqaawc, ?string $geecqyososceumsk = null, array $wwgucssaecqekuek = [], ?string $meqocwsecsywiiqs = '') : string { if (!$geecqyososceumsk) { goto mmyiieeusyagswii; } $wwgucssaecqekuek["\x68\x72\145\x66"] = $geecqyososceumsk; mmyiieeusyagswii: if (!$meqocwsecsywiiqs) { goto scwsaugwsiimogui; } $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\141\162\151\x61\x2d\x6c\x61\142\145\154"] = $meqocwsecsywiiqs; scwsaugwsiimogui: return $this->uuccukgasskgimsq("\x61", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function iagmkaeegceggski($uykgysuswksgmwqy, array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = $kakckmgscyiskome = ''; foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) { if (is_array($kmmmiumuegqmksky)) { goto iaywwiisqiumgcma; } $qqsaswuekyewwcea = $this->igmaewykumgwoaoy($ywmkwiwkosakssii["\x74\150\x5f\141\x74\164\162\163"], "\144\x61\x74\x61\55\153\145\x79", "\x74\x68\x2d{$uusmaiomayssaecw}"); $kakckmgscyiskome .= $this->uuccukgasskgimsq("\164\x68", $qqsaswuekyewwcea, $kmmmiumuegqmksky); goto cekkcogkuwsqqyes; iaywwiisqiumgcma: $nsmgceoqaqogqmuw .= $this->iagmkaeegceggski($kmmmiumuegqmksky, $ywmkwiwkosakssii); cekkcogkuwsqqyes: mayckwaigqsiwmem: } cyeqsmcuiukikium: $nsmgceoqaqogqmuw .= $this->uuccukgasskgimsq("\164\162", $ywmkwiwkosakssii["\164\162\x5f\141\x74\164\162\163"], $kakckmgscyiskome); return $nsmgceoqaqogqmuw; } public function kuumcaywkqiasisk($essikcmqiyqaqoaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gmosckicggqkicim => [], "\164\141\x62\154\x65\x5f\141\164\x74\x72\x73" => [], "\164\150\145\141\x64\x5f\x61\164\x74\x72\163" => [], "\x74\x62\157\144\171\x5f\141\x74\164\x72\163" => [], "\x74\162\137\x61\164\164\162\163" => [], "\x74\x68\137\x61\164\x74\x72\163" => [], "\x74\144\x5f\x61\x74\x74\x72\x73" => []]); $ewgwqamkygiqaawc = ''; $uykgysuswksgmwqy = $ywmkwiwkosakssii[Constants::gmosckicggqkicim]; if (!$uykgysuswksgmwqy) { goto yoyeqyywuskoamic; } $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\164\x68\x65\141\144", $ywmkwiwkosakssii["\x74\150\x65\141\144\x5f\141\x74\164\x72\163"], $this->iagmkaeegceggski($uykgysuswksgmwqy, $ywmkwiwkosakssii)); yoyeqyywuskoamic: if (!is_array($essikcmqiyqaqoaq)) { goto assaqeukweemagcm; } $ymoekaoqgqmmgoqk = ''; $wiqeoymeogsaguec = count($essikcmqiyqaqoaq); $cykoowuqyugicouc = 1; foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) { $ykaygkcscgyoiiae = ''; $aiaeakmegwmmsygm = count($keuwuekioomqqaey); $uwawqgygmomeekuc = 1; foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) { if ($uwawqgygmomeekuc === 1 && isset($ywmkwiwkosakssii["\x66\x69\162\163\164\x5f\x74\x64\x5f\x61\x74\x74\162\x73"])) { goto esumwomoiqskweoc; } if ($aiaeakmegwmmsygm === $uwawqgygmomeekuc && isset($ywmkwiwkosakssii["\x6c\x61\x73\164\x5f\164\144\x5f\x61\164\164\162\163"])) { goto cymiwscoawuyaugi; } $kekeweiayiwuogau = $ywmkwiwkosakssii["\164\144\x5f\x61\164\x74\x72\x73"]; goto goiacugaoueamwyk; cymiwscoawuyaugi: $kekeweiayiwuogau = $ywmkwiwkosakssii["\x6c\x61\163\164\x5f\x74\144\x5f\x61\164\x74\x72\163"]; goiacugaoueamwyk: goto uqcuqaucosyymciy; esumwomoiqskweoc: $kekeweiayiwuogau = $ywmkwiwkosakssii["\x66\151\x72\x73\x74\x5f\164\144\137\x61\164\x74\x72\x73"]; uqcuqaucosyymciy: $kekeweiayiwuogau = $this->igmaewykumgwoaoy($kekeweiayiwuogau, "\144\x61\164\x61\x2d\153\145\x79", "\x74\x64\55{$uusmaiomayssaecw}\55{$momcykaoccoymeig}"); $ykaygkcscgyoiiae .= $this->uuccukgasskgimsq("\164\144", $kekeweiayiwuogau, $yycqiageqkquoioq); $uwawqgygmomeekuc++; agewumsacuussmoc: } cggukoegykqeekww: if ($wiqeoymeogsaguec === 1 && isset($ywmkwiwkosakssii["\x66\151\x72\163\164\137\164\162\137\141\x74\164\x72\x73"])) { goto eowgoimkqygwiock; } if ($wiqeoymeogsaguec === $cykoowuqyugicouc && isset($ywmkwiwkosakssii["\x6c\x61\163\164\137\164\x72\137\141\164\x74\x72\x73"])) { goto gcwuuuasqqocoics; } $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x74\162\137\x61\164\164\x72\x73"]; goto mgcimqiiwsciocoy; gcwuuuasqqocoics: $ecuqamumceeoyiui = $ywmkwiwkosakssii["\154\141\163\164\137\x74\162\137\x61\164\x74\162\x73"]; mgcimqiiwsciocoy: goto agemwyemooogsiyc; eowgoimkqygwiock: $ecuqamumceeoyiui = $ywmkwiwkosakssii["\146\151\162\x73\164\x5f\x74\162\x5f\x61\164\x74\162\x73"]; agemwyemooogsiyc: $ecuqamumceeoyiui = $this->igmaewykumgwoaoy($ecuqamumceeoyiui, "\144\x61\x74\x61\x2d\153\145\171", "\164\162\x2d{$momcykaoccoymeig}"); $ymoekaoqgqmmgoqk .= $this->uuccukgasskgimsq("\164\162", $ecuqamumceeoyiui, $ykaygkcscgyoiiae); $cykoowuqyugicouc++; akuwuwcyqewysmym: } eieikkycsmsqumuu: $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk; assaqeukweemagcm: $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\x74\x62\157\x64\x79", $ywmkwiwkosakssii["\164\142\x6f\144\171\x5f\x61\x74\164\162\x73"], $essikcmqiyqaqoaq); return $this->uuccukgasskgimsq("\x74\x61\x62\x6c\x65", $ywmkwiwkosakssii["\x74\141\142\154\x65\x5f\x61\x74\x74\x72\x73"], $ewgwqamkygiqaawc); } public function yekemqwyimcqgeuk($ewgwqamkygiqaawc, string $ekasyoagocygouom, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek["\x64\141\164\145\x74\151\x6d\x65"] = $ekasyoagocygouom; return $this->uuccukgasskgimsq("\x74\151\155\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function gusouagusgyoaeya($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x70", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function ciuuiyckmsygceis($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\164\162\157\156\x67", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function iaaacsuskiakkwui($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x64\x69\166", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function oieiasyiuoimskgm($waoisqguweoociwe) { $waoisqguweoociwe = preg_replace("\57\74\41\55\x2d\x2e\52\x2d\55\x3e\57", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x3c\147\76\x5b\134\x6e\x5c\x72\134\163\x5d\52\x3c\134\x2f\x67\x3e\x2f", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\134\x6e\x2f", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x5c\x74\57", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x5c\163\134\163\53\57", "\x20", $waoisqguweoociwe); return str_replace(["\x3e\40\74", "\x3b\x22"], ["\x3e\74", "\x22"], $waoisqguweoociwe); } private function acciigeuywwoauus($ycskuuyucyuqisaq) : string { $wayeqowwwmqyscea = ''; $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq); $ciyackuwsqkoqese = 0; skiykgkiekmkcmwe: if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) { goto mgkikasuaseesumm; } if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") { goto mgskawmqsikcgaoo; } if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") { goto wcsiyammsoaoeska; } $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese]; goto iwuyueygqsceyguc; wcsiyammsoaoeska: $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3)); $ciyackuwsqkoqese += 2; iwuyueygqsceyguc: goto qegqgskaeckoqaiq; mgskawmqsikcgaoo: $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4)); if ($uiymkeeaukcyqqik < 0x7f) { goto eecukukickgoweyc; } if ($uiymkeeaukcyqqik < 0x800) { goto awkgycqimgayoaiy; } $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); goto ogeeaauygcocqgee; awkgycqimgayoaiy: $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); ogeeaauygcocqgee: goto eagucokgqqgkukew; eecukukickgoweyc: $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik); eagucokgqqgkukew: $ciyackuwsqkoqese += 5; qegqgskaeckoqaiq: uossiqykiaouimca: $ciyackuwsqkoqese++; goto skiykgkiekmkcmwe; mgkikasuaseesumm: return $wayeqowwwmqyscea; } public function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', array $wwgucssaecqekuek = [], array $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = ''; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->qmyusgwkaqieouwi($wkaqekwwgqsqwcoi)) { goto owisiqaowqeemuws; } return $wkaqekwwgqsqwcoi; owisiqaowqeemuws: if (!(is_string($wkaqekwwgqsqwcoi) && $wkaqekwwgqsqwcoi)) { goto wucoiwmyomgymyku; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $qawsmigsyysqwmeq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\x6c\145\x61\x6e", false); $gskuwmeemyeuwogc = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kicoscymgmgqeqgy, false); $kqywgoqsmuswammk = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ELEMENT, "\x73\160\141\156"); $eooiwamckkkgmykc = true; if ($kqywgoqsmuswammk === "\151\155\147") { goto eueowawgacsksksk; } $gskuwmeemyeuwogc = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\x63\157\156\x5f\151\x73\137\155\x61\162\153\x75\160", $gskuwmeemyeuwogc); goto meqygagoeowmwyek; eueowawgacsksksk: $gskuwmeemyeuwogc = $eooiwamckkkgmykc = false; meqygagoeowmwyek: if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { goto agyygqioqggmgawy; } $eygsasmqycagyayw = Template::symcgieuakksimmu()->miocmcoykayoyyau(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { goto owqkeeeamewcmaum; } $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc, Constants::akcccmoeyoywycua => $qawsmigsyysqwmeq, Constants::uociqugwegocyuue => $ywmkwiwkosakssii[Constants::uociqugwegocyuue] ?? Constants::wikgqsqysyuoykse]); goto qggoyqomgwciiigc; owqkeeeamewcmaum: if ($gskuwmeemyeuwogc) { goto emkywookycykucmu; } $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); goto cymcgssycuaakwsu; emkywookycykucmu: $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); $eooiwamckkkgmykc = false; cymcgssycuaakwsu: qggoyqomgwciiigc: if (!$gskuwmeemyeuwogc) { goto icgomugwscaugkgm; } $wkaqekwwgqsqwcoi = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\x63\x6f\x6e\x5f\155\141\x72\153\165\160", $wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc); if (!("\142\141\163\x65\66\x34" === ($ywmkwiwkosakssii[Constants::aisguagukaewucii] ?? ''))) { goto qiusaiuaqusoqcgm; } return $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($this->acciigeuywwoauus(rawurlencode($this->oieiasyiuoimskgm($wkaqekwwgqsqwcoi))), "\151\x6d\141\x67\x65\x2f\163\166\x67\53\x78\x6d\154"); qiusaiuaqusoqcgm: icgomugwscaugkgm: if (!$eooiwamckkkgmykc) { goto gceckcyyeqkgussg; } $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\x73", "\160\x72\55\x69\x63\157\156"); gceckcyyeqkgussg: agyygqioqggmgawy: $wwgucssaecqekuek = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\143\157\156\137\x61\164\164\x72\x69\x62\x75\164\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi); if ($kqywgoqsmuswammk === "\x69\155\x67") { goto qaksccygequmaaku; } if ($gskuwmeemyeuwogc) { goto gowuaykeqimwouio; } $wwgucssaecqekuek["\x64\141\x74\141\55\163\162\x63"] = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = ''; gowuaykeqimwouio: goto emqmissqcckcecsy; qaksccygequmaaku: $wwgucssaecqekuek["\163\x72\143"] = $wkaqekwwgqsqwcoi; emqmissqcckcecsy: if (!$gskuwmeemyeuwogc) { goto vimsegsagoiwywys; } $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", "\151\143\157\x6e\x2d\x6c\x6f\141\144\145\144"); vimsegsagoiwywys: $nsmgceoqaqogqmuw = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\x63\x6f\x6e\137\150\x74\x6d\x6c", $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $wkaqekwwgqsqwcoi)); wucoiwmyomgymyku: return $nsmgceoqaqogqmuw; } public function gmqyuaqwgiayskei($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\160\x61\x6e", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function geegawyigkyiuyqu(string $ymqmyyeuycgmigyo, string $ewgwqamkygiqaawc = '', array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek[Constants::NAME] = $ymqmyyeuycgmigyo; $wwgucssaecqekuek[Constants::ssmskyqgcmeiayco] = $ewgwqamkygiqaawc; return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\155\x65\164\141", $wwgucssaecqekuek); } public function ssqqsemoqaeqcqka($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\x63\x72\x69\x70\164", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function qiokaomckmywuwqo($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\164\171\x6c\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function sokmmckycgmeesoa(string $ogomymegcoacqisg, $igegiqwgyeuimuys, $cswemwoyesycwkuq, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\163\x72\x63" => $ogomymegcoacqisg, Constants::qomookamaskuoswk => $igegiqwgyeuimuys, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]); return $this->qgsekwygcgawekeq("\x69\x6d\x67", $wwgucssaecqekuek); } public function gsamuciwkekemqqi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => Constants::qescuiwgsyuikume, Constants::qwumqqyuasyskkkc => [], Constants::ELEMENT => "\165\x6c", "\x69\x74\145\x6d\x5f\x61\164\164\x72\163" => [], "\145\x6c\x65\x6d\x65\156\x74\x5f\x61\164\164\x72\x73" => [], Constants::kqgwwgwggqqcccim => false]); $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT]; if (in_array($kqywgoqsmuswammk, ["\x75\x6c", "\157\154"])) { goto iywceuecmmmqksuu; } $kqywgoqsmuswammk = "\165\x6c"; iywceuecmmmqksuu: $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $eusockqasqqmoess = 1; $mqyckiwmqigwuicw = []; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $ewgwqamkygiqaawc) { if (!is_array($ewgwqamkygiqaawc)) { goto kwmeeuiuqcaokkye; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc[$ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]] ?? ''; kwmeeuiuqcaokkye: if (!$ewgwqamkygiqaawc) { goto iyomiywaoqgiskcc; } if (!$ywmkwiwkosakssii[Constants::kqgwwgwggqqcccim]) { goto qkukcokaqekkoako; } $ewgwqamkygiqaawc = sprintf("\x25\x73\x2e\x20\x25\163", $eusockqasqqmoess, $ewgwqamkygiqaawc); $eusockqasqqmoess++; qkukcokaqekkoako: $mqyckiwmqigwuicw[$uusmaiomayssaecw] = $this->uuccukgasskgimsq("\154\151", $ywmkwiwkosakssii["\151\x74\x65\155\x5f\x61\x74\164\x72\163"], $ewgwqamkygiqaawc); iyomiywaoqgiskcc: mqseqwqcsesmmuag: } ouowckcwkscikcic: return $this->uuccukgasskgimsq($kqywgoqsmuswammk, $ywmkwiwkosakssii["\145\x6c\145\x6d\145\156\164\137\141\164\x74\162\x73"], $mqyckiwmqigwuicw); } public function sykissckqqccoiqs(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { $this->awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function uuccukgasskgimsq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string { return $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function awwqwouuoioauoaw(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') { echo $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc); } public function qgsekwygcgawekeq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string { $ggkaciewmeqmgckg = "\74\x25\x73\x25\163\x3e\x25\163"; if (!in_array($kqywgoqsmuswammk, ["\x69\156\160\x75\x74", "\x62\x72", "\150\162", "\151\155\x67", "\x6c\151\156\153", "\155\145\x74\x61"])) { goto yemqwgwwogceuekc; } $ggkaciewmeqmgckg = "\74\x25\x73\45\x73\76"; $muiegiugiocacqkm = false; yemqwgwwogceuekc: if (!($kqywgoqsmuswammk === "\x61" && !isset($wwgucssaecqekuek["\150\162\145\146"]))) { goto bowssiaeccamuiiq; } $wwgucssaecqekuek["\x68\162\145\x66"] = "\x23"; bowssiaeccamuiiq: if (is_array($ewgwqamkygiqaawc)) { goto awgqqokeqkaaqsko; } $aqykuigiuwmmcieu = $ewgwqamkygiqaawc; goto ieiwswkoqcqaykik; awgqqokeqkaaqsko: $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc); ieiwswkoqcqaykik: if (!($yymmascsusaeumiw = $this->asouumsaymkgawie($wwgucssaecqekuek))) { goto mgqumoaokymooyou; } $yymmascsusaeumiw = "\x20{$yymmascsusaeumiw}"; mgqumoaokymooyou: $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $yymmascsusaeumiw, $aqykuigiuwmmcieu); if (!$muiegiugiocacqkm) { goto gooymcgycisyuowi; } $aqykuigiuwmmcieu = sprintf("\45\163\74\x2f\45\x73\76", $aqykuigiuwmmcieu, $kqywgoqsmuswammk); gooymcgycisyuowi: return $aqykuigiuwmmcieu; } public function qmqccwwiawucockc($oammesyieqmwuwyi, array $ywmkwiwkosakssii = []) : string { $suuagcecoyuweoqk = ''; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ysskgssgwuwmqwym => [], Constants::squoamkioomemiyi => null, Constants::qescuiwgsyuikume => __("\x49\164\145\155\163", PR__CMN__FOUNDATION), Constants::mqmekycwoioigmke => 4, Constants::mikumsayiwgkmoas => Constants::zmmsyimwiiaweocw, Constants::amsgwgsoeogkgayg => __("\x49\156\x63\x6c\165\144\x65\x20\45\x73\40\45\x73", PR__CMN__FOUNDATION), Constants::gomimeqaqekuysya => "\54\40"]); if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto gwwyoyaqosoggkcu; } $gaeqamemwmwsyukm = count($oammesyieqmwuwyi); if ($gaeqamemwmwsyukm <= $ywmkwiwkosakssii[Constants::mqmekycwoioigmke]) { goto gaagyegguueymiec; } $suuagcecoyuweoqk = sprintf($ywmkwiwkosakssii[Constants::amsgwgsoeogkgayg], $gaeqamemwmwsyukm, $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]); goto sosqqwiqmeqkwcsm; gaagyegguueymiec: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $ccamwkygaogkooek = Constants::uouymeyqasaeckso === $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; if (!$ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { goto cewamoymcqkmsswi; } $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto oqwiceqiyckwgqkw; } if (!$igqsaukqcqscimok instanceof WP_Term) { goto muakuckcsywcyuao; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); muakuckcsywcyuao: goto ukwkqeoyuoageuwg; oqwiceqiyckwgqkw: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); ukwkqeoyuoageuwg: switch ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { case Constants::eycwiessycciwsao: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto qgwcisoeysiwakak; } if (!($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek)) { goto ukeyisqesuoscwke; } $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); ukeyisqesuoscwke: goto wkceacsqeyiimcus; qgwcisoeysiwakak: $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); wkceacsqeyiimcus: goto saosiwmguyawuouy; case Constants::zmmsyimwiiaweocw: default: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto qiayggmakgsuwwsm; } if (!($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek)) { goto acycwqqmgeygymkw; } $migiiksoiymissge = $awewoweukmqomqmi->yyykkcyiksewsoqy($igqsaukqcqscimok); acycwqqmgeygymkw: goto icqkceioeysykgua; qiayggmakgsuwwsm: $migiiksoiymissge = $wgkqagumoowawogg->yyykkcyiksewsoqy($igqsaukqcqscimok); icqkceioeysykgua: } wwsasogecmwwikws: saosiwmguyawuouy: if ($migiiksoiymissge) { goto kqkgwqkwqeokgagk; } $igqsaukqcqscimok = $meqocwsecsywiiqs; goto yaqgciyuusquaeea; kqkgwqkwqeokgagk: $igqsaukqcqscimok = $this->yuawgssgauywkiia($meqocwsecsywiiqs, $migiiksoiymissge, $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], $meqocwsecsywiiqs); yaqgciyuusquaeea: cewamoymcqkmsswi: $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; imciyymqukkwemqa: } ikekioqaccggcwko: $suuagcecoyuweoqk = implode($ywmkwiwkosakssii[Constants::gomimeqaqekuysya], $oammesyieqmwuwyi); sosqqwiqmeqkwcsm: gwwyoyaqosoggkcu: return $suuagcecoyuweoqk; } public function yoamscgeuweiugse($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x6e\x6f\163\143\162\x69\160\164", $ewgwqamkygiqaawc, $wwgucssaecqekuek); } public function kqgwgkuykuumwcgw(string $nsmgceoqaqogqmuw, string $caacssaumiqeaoaw, ?string $aokagokqyuysuksm, string $koaqiaecmascwuyy) : string { $eouekqmooogkoqoo = "\43\74{$caacssaumiqeaoaw}\x5c\163\53\x5b\x5e\76\135\x25\x73\x2e\52\x3e\43\151\x55"; if ($aokagokqyuysuksm) { goto wwwkcwcigkeqiqwo; } $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, ''); goto kkmeaociiyukweka; wwwkcwcigkeqiqwo: $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, "\x2b\151\144\x3d\42" . $aokagokqyuysuksm . "\42"); kkmeaociiyukweka: $omseiokmycguuaoy = (string) preg_replace($eouekqmooogkoqoo, "{$koaqiaecmascwuyy}\x24\x30", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto cuoskwammceoauak; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; cuoskwammceoauak: return $nsmgceoqaqogqmuw; } public function sggceaqggqqsqaoo(string $nsmgceoqaqogqmuw, string $miisqgccsqqcscia, string $koaqiaecmascwuyy) : string { $ukiaeyumokyqqwky = "\74\57{$miisqgccsqqcscia}\x3e"; $omseiokmycguuaoy = (string) preg_replace("\43{$ukiaeyumokyqqwky}\43\151\x55", "{$ukiaeyumokyqqwky}{$koaqiaecmascwuyy}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto cecsiuuukuegaqgq; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; cecsiuuukuegaqgq: return $nsmgceoqaqogqmuw; } public function cgeyeoimiuyogose(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $uqwgieuqagsgwqqy = "\x3c\57{$omwmuycmeqcqokom}\x3e"; $omseiokmycguuaoy = (string) preg_replace("\43{$uqwgieuqagsgwqqy}\x23\151\125", "{$wcgsoqmmciswkmiq}{$uqwgieuqagsgwqqy}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto wkakwguccsqwkiam; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; wkakwguccsqwkiam: return $nsmgceoqaqogqmuw; } public function iukqsuaygeqgeieu(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $omseiokmycguuaoy = (string) preg_replace("\57\74{$omwmuycmeqcqokom}\x5b\x5e\76\135\52\x3e\57\151", "\44\x30{$wcgsoqmmciswkmiq}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto gmwcaekkucsikwye; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; gmwcaekkucsikwye: return $nsmgceoqaqogqmuw; } public function mqyacwaaocgcsyag(string $nsmgceoqaqogqmuw, string $scwiymciagumsuiw, array $siquossayskcwkea = []) : string { foreach ($siquossayskcwkea as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { if (!preg_match("\x7e\x3c{$scwiymciagumsuiw}\134\163\x2e\52\77{$wisgiwskwawciiee}\75\50\x5b\47\42\x5d\x29\x7e\x69", $nsmgceoqaqogqmuw)) { goto wgksasuisoeqasuk; } $nsmgceoqaqogqmuw = preg_replace("\x7e\x3c{$scwiymciagumsuiw}\x5c\163\x2e\x2a\x3f{$wisgiwskwawciiee}\x3d\50\x5b\x27\x22\x5d\x29\176\x69", "\x24\x31\x20" . $wisgiwskwawciiee . "\75\x22" . $eqgoocgaqwqcimie . "\42\x3e", $nsmgceoqaqogqmuw); goto icisiaukqqmgcwci; wgksasuisoeqasuk: $nsmgceoqaqogqmuw = preg_replace("\57\x28\74{$scwiymciagumsuiw}\134\x62\x5b\x5e\76\74\x5d\52\x29\x3e\57\x69", "\44\x31\40" . $wisgiwskwawciiee . "\x3d\42" . $eqgoocgaqwqcimie . "\x22\x3e", $nsmgceoqaqogqmuw); icisiaukqqmgcwci: wksekwiuccskimmu: } ayaiiymgyagsoqia: return $nsmgceoqaqogqmuw; } public function sawckkwcugsmokmi(string $yuumukkaswwoywya, array $egkakcquemweqoum) { $ekuqiqmikiicgoss = "{$yuumukkaswwoywya}\x20\x7b"; foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!($oaukocmsckciqaok && $eqgoocgaqwqcimie)) { goto mookyeaauceccaga; } $eqgoocgaqwqcimie = rtrim($eqgoocgaqwqcimie); $ekuqiqmikiicgoss .= "{$oaukocmsckciqaok}\72\40{$eqgoocgaqwqcimie}\73"; mookyeaauceccaga: qcysssoeueakqowq: } qaggmqequkmcamma: $ekuqiqmikiicgoss .= "\x7d"; return $ekuqiqmikiicgoss; } }
