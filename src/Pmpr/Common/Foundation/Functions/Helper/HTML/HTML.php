<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053bb6ecfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Template; use WP_Post; use WP_Term; class HTML extends Common { public function qykoimeycmqgwkui() : array { return ["\156\157\x66\157\x6c\154\x6f\x77" => __("\116\157\x66\x6f\x6c\x6c\157\167", PR__CMN__FOUNDATION), "\x6e\x6f\157\x70\x65\x6e\x65\x72" => __("\x4e\x6f\x6f\x70\x65\156\x65\x72", PR__CMN__FOUNDATION), "\x6e\157\162\145\146\x65\x72\162\x65\162" => __("\116\157\x72\145\146\145\x72\162\x65\x72", PR__CMN__FOUNDATION)]; } public function eqggmuyywiawyigi($sociqikgoyemqaac) { $ucccueqywigcukcc = "\142\x61\143\x6b\147\162\x6f\165\156\144\55\x69\x6d\x61\x67\x65\134\163\x2a\72\134\x73\52\50\77\x3c\141\164\164\x72\76\134\163\x2a\x75\162\154\134\x73\52\134\x28\50\x3f\x3c\165\x72\x6c\76\x5b\136\51\x5d\x2b\51\134\x29\51\x5c\x73\52\73\77"; if (!preg_match("\43{$ucccueqywigcukcc}\x23\x69\x73", $sociqikgoyemqaac, $meyiiwcswqmuggyg)) { return false; } if (preg_match("\x23\144\141\164\x61\72\x69\x6d\141\x67\x65\43\151\x73", $meyiiwcswqmuggyg[Constants::auqoykcmsiauccao])) { return false; } return esc_url(trim(wp_strip_all_tags(html_entity_decode($meyiiwcswqmuggyg[Constants::auqoykcmsiauccao], ENT_QUOTES | ENT_HTML5)), "\47\42\x20")); } public function memaocoueygwyomc($nsmgceoqaqogqmuw) : string { return (string) mb_encode_numericentity(htmlspecialchars_decode(htmlentities($nsmgceoqaqogqmuw, ENT_NOQUOTES, "\x55\x54\106\x2d\x38", false), ENT_NOQUOTES), [0x80, 0x10ffff, 0, ~0], "\125\x54\106\x2d\x38"); } public function gqeemiaoyceyasme($ymkomoccmymcoiea) : ?string { $aqykuigiuwmmcieu = ''; if (is_array($ymkomoccmymcoiea)) { if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->gogeqwskoiiaocoe($ymkomoccmymcoiea)) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ymkomoccmymcoiea); } else { $aqykuigiuwmmcieu = implode("\40", $ymkomoccmymcoiea); } } else { if (is_string($ymkomoccmymcoiea) || is_numeric($ymkomoccmymcoiea)) { $aqykuigiuwmmcieu = (string) $ymkomoccmymcoiea; } } return esc_attr(trim($aqykuigiuwmmcieu)); } public function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { if ($gcegymooyemmaysk) { foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) { if (isset($gcegymooyemmaysk[$uusmaiomayssaecw])) { $sysgmomuyiiawwcm[$uusmaiomayssaecw] = $this->igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee); unset($gcegymooyemmaysk[$uusmaiomayssaecw]); } } $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk); } return $sysgmomuyiiawwcm; } public function igmaewykumgwoaoy($siquossayskcwkea, ?string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if (is_object($siquossayskcwkea) || is_array($siquossayskcwkea)) { if ($uusmaiomayssaecw) { $wisgiwskwawciiee = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, $uusmaiomayssaecw, ''); } else { $wisgiwskwawciiee = $siquossayskcwkea; } } else { return trim($siquossayskcwkea . "\40" . (is_array($eqgoocgaqwqcimie) ? implode("\x20", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie)); } if (is_array($eqgoocgaqwqcimie)) { $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\x20", $eqgoocgaqwqcimie)); } else { if (is_string($eqgoocgaqwqcimie) || is_numeric($eqgoocgaqwqcimie)) { $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\40" . $eqgoocgaqwqcimie); } } if (is_object($siquossayskcwkea)) { $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee; } else { if (is_array($siquossayskcwkea)) { if ($uusmaiomayssaecw) { $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; } else { $siquossayskcwkea = $wisgiwskwawciiee; } } } return $siquossayskcwkea; } public function sueyawuweyoqyeaq($siquossayskcwkea = [], array $qqswgiawgeaeoecu = []) { foreach ($qqswgiawgeaeoecu as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, $wisgiwskwawciiee, $eqgoocgaqwqcimie); } return $siquossayskcwkea; } public function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $siquossayskcwkea; } public function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ukwmeuiywasikwcu = false; if (is_string($siquossayskcwkea)) { $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea)); } else { if (isset($siquossayskcwkea[$uusmaiomayssaecw])) { $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw]; if (is_string($wisgiwskwawciiee)) { $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee); $ukwmeuiywasikwcu = true; } if (is_array($wisgiwskwawciiee) && in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) { if (($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) !== false) { unset($wisgiwskwawciiee[$ccamueccusigaaio]); } if ($ukwmeuiywasikwcu) { $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee); } $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; } } } return $siquossayskcwkea; } public function asouumsaymkgawie($siquossayskcwkea, string $oswgusmmccauqika = "\42") : string { $aqykuigiuwmmcieu = ''; if (is_string($siquossayskcwkea)) { $aqykuigiuwmmcieu = $siquossayskcwkea; } else { if (is_array($siquossayskcwkea)) { foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (in_array($ymqmyyeuycgmigyo, ["\163\162\x63", "\150\162\145\x66"], true) && $this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = esc_url($eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = $this->gqeemiaoyceyasme($eqgoocgaqwqcimie); } if (preg_replace("\x2f\x5c\x73\53\57", '', $eqgoocgaqwqcimie)) { if (is_numeric($ymqmyyeuycgmigyo)) { $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40"; } else { $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\75{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\40"; } } else { $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x20"; } } } } return rtrim($aqykuigiuwmmcieu, "\40"); } public function yuawgssgauywkiia($ewgwqamkygiqaawc, ?string $geecqyososceumsk = null, array $wwgucssaecqekuek = [], ?string $meqocwsecsywiiqs = '') : string { if ($geecqyososceumsk) { $wwgucssaecqekuek["\150\x72\145\x66"] = $geecqyososceumsk; } if ($meqocwsecsywiiqs) { $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\141\x72\x69\141\55\x6c\x61\x62\x65\x6c"] = $meqocwsecsywiiqs; } return $this->uuccukgasskgimsq("\x61", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function iagmkaeegceggski($uykgysuswksgmwqy, array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = $kakckmgscyiskome = ''; foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) { if (is_array($kmmmiumuegqmksky)) { $nsmgceoqaqogqmuw .= $this->iagmkaeegceggski($kmmmiumuegqmksky, $ywmkwiwkosakssii); } else { $qqsaswuekyewwcea = $this->igmaewykumgwoaoy($ywmkwiwkosakssii["\164\x68\137\x61\164\164\162\163"], "\x64\x61\x74\141\55\153\145\x79", "\x74\150\55{$uusmaiomayssaecw}"); $kakckmgscyiskome .= $this->uuccukgasskgimsq("\x74\150", $qqsaswuekyewwcea, $kmmmiumuegqmksky); } } $nsmgceoqaqogqmuw .= $this->uuccukgasskgimsq("\x74\162", $ywmkwiwkosakssii["\164\162\137\141\x74\x74\162\163"], $kakckmgscyiskome); return $nsmgceoqaqogqmuw; } public function kuumcaywkqiasisk($essikcmqiyqaqoaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gmosckicggqkicim => [], "\164\141\x62\154\x65\137\141\164\164\x72\x73" => [], "\x74\150\145\141\144\137\141\164\x74\x72\163" => [], "\164\142\x6f\144\x79\x5f\x61\x74\x74\162\163" => [], "\x74\x72\x5f\141\x74\164\162\163" => [], "\x74\x68\x5f\x61\x74\164\x72\163" => [], "\164\x64\x5f\141\164\x74\162\163" => []]); $ewgwqamkygiqaawc = ''; $uykgysuswksgmwqy = $ywmkwiwkosakssii[Constants::gmosckicggqkicim]; if ($uykgysuswksgmwqy) { $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\164\x68\145\141\x64", $ywmkwiwkosakssii["\164\150\145\141\x64\x5f\x61\164\x74\162\x73"], $this->iagmkaeegceggski($uykgysuswksgmwqy, $ywmkwiwkosakssii)); } if (is_array($essikcmqiyqaqoaq)) { $ymoekaoqgqmmgoqk = ''; $wiqeoymeogsaguec = count($essikcmqiyqaqoaq); $cykoowuqyugicouc = 1; foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) { $ykaygkcscgyoiiae = ''; $aiaeakmegwmmsygm = count($keuwuekioomqqaey); $uwawqgygmomeekuc = 1; foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) { if ($uwawqgygmomeekuc === 1 && isset($ywmkwiwkosakssii["\146\x69\x72\x73\x74\x5f\164\144\x5f\141\164\x74\x72\x73"])) { $kekeweiayiwuogau = $ywmkwiwkosakssii["\146\x69\162\163\164\137\164\x64\x5f\x61\164\164\x72\163"]; } else { if ($aiaeakmegwmmsygm === $uwawqgygmomeekuc && isset($ywmkwiwkosakssii["\x6c\x61\163\164\x5f\x74\x64\x5f\x61\164\x74\162\163"])) { $kekeweiayiwuogau = $ywmkwiwkosakssii["\154\141\x73\x74\x5f\x74\x64\x5f\x61\x74\x74\x72\x73"]; } else { $kekeweiayiwuogau = $ywmkwiwkosakssii["\164\144\137\141\164\x74\x72\x73"]; } } $kekeweiayiwuogau = $this->igmaewykumgwoaoy($kekeweiayiwuogau, "\144\x61\x74\141\x2d\153\x65\171", "\x74\144\x2d{$uusmaiomayssaecw}\55{$momcykaoccoymeig}"); $ykaygkcscgyoiiae .= $this->uuccukgasskgimsq("\x74\x64", $kekeweiayiwuogau, $yycqiageqkquoioq); $uwawqgygmomeekuc++; } if ($wiqeoymeogsaguec === 1 && isset($ywmkwiwkosakssii["\x66\x69\162\x73\x74\x5f\x74\162\x5f\141\164\164\162\x73"])) { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\146\151\162\163\x74\x5f\x74\162\x5f\x61\164\164\x72\163"]; } else { if ($wiqeoymeogsaguec === $cykoowuqyugicouc && isset($ywmkwiwkosakssii["\154\x61\x73\x74\x5f\x74\x72\x5f\x61\x74\x74\x72\x73"])) { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\154\141\163\x74\137\x74\162\x5f\x61\164\164\x72\x73"]; } else { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x74\x72\137\x61\164\x74\162\163"]; } } $ecuqamumceeoyiui = $this->igmaewykumgwoaoy($ecuqamumceeoyiui, "\144\x61\164\x61\x2d\x6b\145\x79", "\164\x72\x2d{$momcykaoccoymeig}"); $ymoekaoqgqmmgoqk .= $this->uuccukgasskgimsq("\x74\162", $ecuqamumceeoyiui, $ykaygkcscgyoiiae); $cykoowuqyugicouc++; } $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk; } $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\x74\142\157\144\x79", $ywmkwiwkosakssii["\x74\142\157\144\x79\137\x61\x74\164\x72\163"], $essikcmqiyqaqoaq); return $this->uuccukgasskgimsq("\164\x61\x62\x6c\145", $ywmkwiwkosakssii["\x74\x61\142\x6c\x65\137\141\164\x74\x72\x73"], $ewgwqamkygiqaawc); } public function yekemqwyimcqgeuk($ewgwqamkygiqaawc, string $ekasyoagocygouom, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek["\144\x61\164\x65\x74\151\155\x65"] = $ekasyoagocygouom; return $this->uuccukgasskgimsq("\164\151\155\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function gusouagusgyoaeya($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\160", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function ciuuiyckmsygceis($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\164\x72\157\156\147", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function iaaacsuskiakkwui($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x64\x69\x76", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function oieiasyiuoimskgm($waoisqguweoociwe) { $waoisqguweoociwe = preg_replace("\57\74\x21\x2d\x2d\x2e\52\x2d\55\x3e\x2f", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x3c\147\x3e\133\x5c\156\x5c\x72\x5c\163\x5d\52\74\x5c\57\147\76\x2f", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x5c\x6e\57", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x5c\x74\x2f", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x5c\x73\134\x73\x2b\57", "\40", $waoisqguweoociwe); return str_replace(["\76\40\x3c", "\73\42"], ["\76\74", "\x22"], $waoisqguweoociwe); } private function acciigeuywwoauus($ycskuuyucyuqisaq) : string { $wayeqowwwmqyscea = ''; $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq); for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < $eomsgokgyssmwmai; $ciyackuwsqkoqese++) { if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\165") { $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4)); if ($uiymkeeaukcyqqik < 0x7f) { $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik); } else { if ($uiymkeeaukcyqqik < 0x800) { $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); } else { $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); } } $ciyackuwsqkoqese += 5; } else { if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") { $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3)); $ciyackuwsqkoqese += 2; } else { $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese]; } } } return $wayeqowwwmqyscea; } public function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', array $wwgucssaecqekuek = [], array $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = ''; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->qmyusgwkaqieouwi($wkaqekwwgqsqwcoi)) { return $wkaqekwwgqsqwcoi; } if (is_string($wkaqekwwgqsqwcoi) && $wkaqekwwgqsqwcoi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $qawsmigsyysqwmeq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\x6c\x65\x61\156", false); $gskuwmeemyeuwogc = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kicoscymgmgqeqgy, false); $kqywgoqsmuswammk = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ELEMENT, "\163\x70\x61\x6e"); $eooiwamckkkgmykc = true; if ($kqywgoqsmuswammk === "\151\x6d\147") { $gskuwmeemyeuwogc = $eooiwamckkkgmykc = false; } else { $gskuwmeemyeuwogc = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\x63\157\156\x5f\151\x73\x5f\x6d\x61\162\153\x75\160", $gskuwmeemyeuwogc); } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $eygsasmqycagyayw = pr_get_foundation()->miocmcoykayoyyau(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { if ($gskuwmeemyeuwogc) { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); $eooiwamckkkgmykc = false; } else { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); } } else { $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc, Constants::akcccmoeyoywycua => $qawsmigsyysqwmeq, Constants::uociqugwegocyuue => $ywmkwiwkosakssii[Constants::uociqugwegocyuue] ?? Constants::wikgqsqysyuoykse]); } if ($gskuwmeemyeuwogc) { $wkaqekwwgqsqwcoi = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\x63\x6f\156\x5f\155\141\x72\x6b\165\160", $wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc); if ("\142\141\x73\x65\66\64" === ($ywmkwiwkosakssii[Constants::aisguagukaewucii] ?? '')) { return $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($this->acciigeuywwoauus(rawurlencode($this->oieiasyiuoimskgm($wkaqekwwgqsqwcoi))), "\x69\155\141\x67\145\57\163\166\147\x2b\x78\x6d\154"); } } if ($eooiwamckkkgmykc) { $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\x73", "\160\x72\55\151\x63\157\x6e"); } } $wwgucssaecqekuek = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\x63\157\156\137\141\x74\x74\x72\151\142\165\x74\145\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi); if ($kqywgoqsmuswammk === "\x69\x6d\147") { $wwgucssaecqekuek["\x73\162\143"] = $wkaqekwwgqsqwcoi; } else { if (!$gskuwmeemyeuwogc) { $wwgucssaecqekuek["\x64\141\164\141\55\x73\x72\143"] = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = ''; } } if ($gskuwmeemyeuwogc) { $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\x73\x73", "\151\143\x6f\x6e\x2d\154\x6f\x61\144\x65\144"); } $nsmgceoqaqogqmuw = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\143\157\x6e\x5f\150\164\155\154", $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $wkaqekwwgqsqwcoi)); } return $nsmgceoqaqogqmuw; } public function gmqyuaqwgiayskei($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\160\x61\156", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function geegawyigkyiuyqu(string $ymqmyyeuycgmigyo, string $ewgwqamkygiqaawc = '', array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek[Constants::NAME] = $ymqmyyeuycgmigyo; $wwgucssaecqekuek[Constants::ssmskyqgcmeiayco] = $ewgwqamkygiqaawc; return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\155\145\164\x61", $wwgucssaecqekuek); } public function ssqqsemoqaeqcqka($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\x63\162\x69\160\x74", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function qiokaomckmywuwqo($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x74\171\x6c\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function sokmmckycgmeesoa(string $ogomymegcoacqisg, $igegiqwgyeuimuys, $cswemwoyesycwkuq, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\x73\x72\x63" => $ogomymegcoacqisg, Constants::qomookamaskuoswk => $igegiqwgyeuimuys, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]); return $this->qgsekwygcgawekeq("\x69\155\147", $wwgucssaecqekuek); } public function gsamuciwkekemqqi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => Constants::qescuiwgsyuikume, Constants::qwumqqyuasyskkkc => [], Constants::ELEMENT => "\x75\x6c", "\151\x74\145\155\137\x61\164\x74\x72\x73" => [], "\x65\x6c\145\155\x65\156\164\x5f\x61\164\164\x72\x73" => [], Constants::kqgwwgwggqqcccim => false]); $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT]; if (!in_array($kqywgoqsmuswammk, ["\x75\154", "\157\154"])) { $kqywgoqsmuswammk = "\x75\x6c"; } $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $eusockqasqqmoess = 1; $mqyckiwmqigwuicw = []; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $ewgwqamkygiqaawc) { if (is_array($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $ewgwqamkygiqaawc[$ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]] ?? ''; } if ($ewgwqamkygiqaawc) { if ($ywmkwiwkosakssii[Constants::kqgwwgwggqqcccim]) { $ewgwqamkygiqaawc = sprintf("\x25\163\56\x20\45\163", $eusockqasqqmoess, $ewgwqamkygiqaawc); $eusockqasqqmoess++; } $mqyckiwmqigwuicw[$uusmaiomayssaecw] = $this->uuccukgasskgimsq("\x6c\151", $ywmkwiwkosakssii["\x69\x74\145\x6d\x5f\141\164\164\x72\163"], $ewgwqamkygiqaawc); } } return $this->uuccukgasskgimsq($kqywgoqsmuswammk, $ywmkwiwkosakssii["\145\x6c\x65\x6d\145\156\x74\x5f\141\164\164\162\x73"], $mqyckiwmqigwuicw); } public function sykissckqqccoiqs(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { $this->awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function uuccukgasskgimsq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string { return $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function awwqwouuoioauoaw(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') { echo $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc); } public function qgsekwygcgawekeq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string { $ggkaciewmeqmgckg = "\74\x25\x73\x25\x73\76\x25\x73"; if (in_array($kqywgoqsmuswammk, ["\151\156\x70\x75\x74", "\x62\x72", "\150\x72", "\x69\155\147", "\154\151\156\x6b", "\x6d\145\164\141"])) { $ggkaciewmeqmgckg = "\74\45\x73\45\163\76"; $muiegiugiocacqkm = false; } if ($kqywgoqsmuswammk === "\141" && !isset($wwgucssaecqekuek["\x68\162\x65\x66"])) { $wwgucssaecqekuek["\x68\x72\x65\x66"] = "\x23"; } if (is_array($ewgwqamkygiqaawc)) { $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc); } else { $aqykuigiuwmmcieu = $ewgwqamkygiqaawc; } if ($yymmascsusaeumiw = $this->asouumsaymkgawie($wwgucssaecqekuek)) { $yymmascsusaeumiw = "\x20{$yymmascsusaeumiw}"; } $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $yymmascsusaeumiw, $aqykuigiuwmmcieu); if ($muiegiugiocacqkm) { $aqykuigiuwmmcieu = sprintf("\x25\163\74\x2f\45\163\x3e", $aqykuigiuwmmcieu, $kqywgoqsmuswammk); } return $aqykuigiuwmmcieu; } public function qmqccwwiawucockc($oammesyieqmwuwyi, array $ywmkwiwkosakssii = []) : string { $suuagcecoyuweoqk = ''; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ysskgssgwuwmqwym => [], Constants::squoamkioomemiyi => null, Constants::qescuiwgsyuikume => __("\111\164\145\155\x73", PR__CMN__FOUNDATION), Constants::mqmekycwoioigmke => 4, Constants::mikumsayiwgkmoas => Constants::zmmsyimwiiaweocw, Constants::amsgwgsoeogkgayg => __("\111\156\143\x6c\165\x64\x65\40\45\x73\x20\x25\163", PR__CMN__FOUNDATION), Constants::gomimeqaqekuysya => "\54\x20"]); if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { $gaeqamemwmwsyukm = count($oammesyieqmwuwyi); if ($gaeqamemwmwsyukm <= $ywmkwiwkosakssii[Constants::mqmekycwoioigmke]) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $ccamwkygaogkooek = Constants::uouymeyqasaeckso === $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; if ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); } } switch ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { case Constants::eycwiessycciwsao: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek) { $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); } } break; case Constants::zmmsyimwiiaweocw: default: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $migiiksoiymissge = $wgkqagumoowawogg->yyykkcyiksewsoqy($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek) { $migiiksoiymissge = $awewoweukmqomqmi->yyykkcyiksewsoqy($igqsaukqcqscimok); } } } if ($migiiksoiymissge) { $igqsaukqcqscimok = $this->yuawgssgauywkiia($meqocwsecsywiiqs, $migiiksoiymissge, $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], $meqocwsecsywiiqs); } else { $igqsaukqcqscimok = $meqocwsecsywiiqs; } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; } $suuagcecoyuweoqk = implode($ywmkwiwkosakssii[Constants::gomimeqaqekuysya], $oammesyieqmwuwyi); } else { $suuagcecoyuweoqk = sprintf($ywmkwiwkosakssii[Constants::amsgwgsoeogkgayg], $gaeqamemwmwsyukm, $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]); } } return $suuagcecoyuweoqk; } public function yoamscgeuweiugse($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\156\157\163\143\x72\151\x70\164", $ewgwqamkygiqaawc, $wwgucssaecqekuek); } public function kqgwgkuykuumwcgw(string $nsmgceoqaqogqmuw, string $caacssaumiqeaoaw, ?string $aokagokqyuysuksm, string $koaqiaecmascwuyy) : string { $eouekqmooogkoqoo = "\x23\74{$caacssaumiqeaoaw}\134\x73\53\133\x5e\76\135\x25\163\56\52\76\x23\x69\x55"; if ($aokagokqyuysuksm) { $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, "\x2b\151\144\x3d\42" . $aokagokqyuysuksm . "\42"); } else { $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, ''); } $omseiokmycguuaoy = (string) preg_replace($eouekqmooogkoqoo, "{$koaqiaecmascwuyy}\x24\60", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function sggceaqggqqsqaoo(string $nsmgceoqaqogqmuw, string $miisqgccsqqcscia, string $koaqiaecmascwuyy) : string { $ukiaeyumokyqqwky = "\74\x2f{$miisqgccsqqcscia}\76"; $omseiokmycguuaoy = (string) preg_replace("\x23{$ukiaeyumokyqqwky}\x23\x69\125", "{$ukiaeyumokyqqwky}{$koaqiaecmascwuyy}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function cgeyeoimiuyogose(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $uqwgieuqagsgwqqy = "\74\x2f{$omwmuycmeqcqokom}\76"; $omseiokmycguuaoy = (string) preg_replace("\x23{$uqwgieuqagsgwqqy}\43\151\x55", "{$wcgsoqmmciswkmiq}{$uqwgieuqagsgwqqy}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function iukqsuaygeqgeieu(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $omseiokmycguuaoy = (string) preg_replace("\57\74{$omwmuycmeqcqokom}\133\136\76\135\52\76\x2f\x69", "\x24\60{$wcgsoqmmciswkmiq}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function mqyacwaaocgcsyag(string $nsmgceoqaqogqmuw, string $scwiymciagumsuiw, array $siquossayskcwkea = []) : string { foreach ($siquossayskcwkea as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { if (!preg_match("\x7e\74{$scwiymciagumsuiw}\x5c\x73\x2e\52\x3f{$wisgiwskwawciiee}\75\x28\133\x27\x22\135\x29\176\x69", $nsmgceoqaqogqmuw)) { $nsmgceoqaqogqmuw = preg_replace("\x2f\x28\74{$scwiymciagumsuiw}\134\142\x5b\x5e\76\74\135\x2a\51\x3e\57\x69", "\x24\61\40" . $wisgiwskwawciiee . "\75\42" . $eqgoocgaqwqcimie . "\42\76", $nsmgceoqaqogqmuw); } else { $nsmgceoqaqogqmuw = preg_replace("\176\74{$scwiymciagumsuiw}\x5c\x73\56\x2a\77{$wisgiwskwawciiee}\75\x28\x5b\x27\x22\135\51\x7e\151", "\44\61\x20" . $wisgiwskwawciiee . "\x3d\42" . $eqgoocgaqwqcimie . "\42\76", $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } public function sawckkwcugsmokmi(string $yuumukkaswwoywya, array $egkakcquemweqoum) { $ekuqiqmikiicgoss = "{$yuumukkaswwoywya}\40\x7b"; foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if ($oaukocmsckciqaok && $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = rtrim($eqgoocgaqwqcimie); $ekuqiqmikiicgoss .= "{$oaukocmsckciqaok}\72\40{$eqgoocgaqwqcimie}\73"; } } $ekuqiqmikiicgoss .= "\175"; return $ekuqiqmikiicgoss; } }
