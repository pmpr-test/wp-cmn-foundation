<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d172c3f1f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Template; use WP_Post; use WP_Term; class HTML extends Common { public function qykoimeycmqgwkui() : array { return ["\x6e\x6f\146\x6f\154\154\157\167" => __("\x4e\157\x66\157\x6c\154\x6f\167", PR__CMN__FOUNDATION), "\156\x6f\157\160\145\156\145\x72" => __("\x4e\157\157\160\145\156\145\162", PR__CMN__FOUNDATION), "\x6e\157\x72\x65\x66\145\x72\162\145\x72" => __("\116\157\162\145\146\x65\162\162\145\162", PR__CMN__FOUNDATION)]; } public function eqggmuyywiawyigi($sociqikgoyemqaac) { $ucccueqywigcukcc = "\x62\141\x63\x6b\147\x72\157\x75\x6e\x64\55\151\155\141\147\x65\134\163\52\x3a\x5c\163\x2a\x28\x3f\74\141\164\164\x72\x3e\134\163\x2a\x75\x72\154\134\x73\52\134\x28\x28\77\74\x75\x72\x6c\x3e\133\136\x29\135\53\51\134\51\x29\x5c\163\52\73\77"; if (!preg_match("\43{$ucccueqywigcukcc}\x23\x69\x73", $sociqikgoyemqaac, $meyiiwcswqmuggyg)) { return false; } if (preg_match("\43\144\x61\164\141\x3a\x69\155\141\147\145\43\151\163", $meyiiwcswqmuggyg[Constants::auqoykcmsiauccao])) { return false; } return esc_url(trim(wp_strip_all_tags(html_entity_decode($meyiiwcswqmuggyg[Constants::auqoykcmsiauccao], ENT_QUOTES | ENT_HTML5)), "\x27\x22\x20")); } public function memaocoueygwyomc($nsmgceoqaqogqmuw) : string { return (string) mb_encode_numericentity(htmlspecialchars_decode(htmlentities($nsmgceoqaqogqmuw, ENT_NOQUOTES, "\125\x54\x46\x2d\x38", false), ENT_NOQUOTES), [0x80, 0x10ffff, 0, ~0], "\x55\124\106\x2d\x38"); } public function gqeemiaoyceyasme($ymkomoccmymcoiea) : ?string { $aqykuigiuwmmcieu = ''; if (is_array($ymkomoccmymcoiea)) { if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->gogeqwskoiiaocoe($ymkomoccmymcoiea)) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ymkomoccmymcoiea); } else { $aqykuigiuwmmcieu = implode("\40", $ymkomoccmymcoiea); } } else { if (is_string($ymkomoccmymcoiea) || is_numeric($ymkomoccmymcoiea)) { $aqykuigiuwmmcieu = (string) $ymkomoccmymcoiea; } } return esc_attr(trim($aqykuigiuwmmcieu)); } public function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { if ($gcegymooyemmaysk) { foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) { if (isset($gcegymooyemmaysk[$uusmaiomayssaecw])) { $sysgmomuyiiawwcm[$uusmaiomayssaecw] = $this->igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee); unset($gcegymooyemmaysk[$uusmaiomayssaecw]); } } $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk); } return $sysgmomuyiiawwcm; } public function igmaewykumgwoaoy($siquossayskcwkea, ?string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if (is_object($siquossayskcwkea) || is_array($siquossayskcwkea)) { if ($uusmaiomayssaecw) { $wisgiwskwawciiee = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, $uusmaiomayssaecw, ''); } else { $wisgiwskwawciiee = $siquossayskcwkea; } } else { return trim($siquossayskcwkea . "\40" . (is_array($eqgoocgaqwqcimie) ? implode("\40", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie)); } if (is_array($eqgoocgaqwqcimie)) { $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\40", $eqgoocgaqwqcimie)); } else { if (is_string($eqgoocgaqwqcimie) || is_numeric($eqgoocgaqwqcimie)) { $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\40" . $eqgoocgaqwqcimie); } } if (is_object($siquossayskcwkea)) { $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee; } else { if (is_array($siquossayskcwkea)) { if ($uusmaiomayssaecw) { $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; } else { $siquossayskcwkea = $wisgiwskwawciiee; } } } return $siquossayskcwkea; } public function sueyawuweyoqyeaq($siquossayskcwkea = [], array $qqswgiawgeaeoecu = []) { foreach ($qqswgiawgeaeoecu as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, $wisgiwskwawciiee, $eqgoocgaqwqcimie); } return $siquossayskcwkea; } public function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $siquossayskcwkea; } public function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ukwmeuiywasikwcu = false; if (is_string($siquossayskcwkea)) { $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea)); } else { if (isset($siquossayskcwkea[$uusmaiomayssaecw])) { $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw]; if (is_string($wisgiwskwawciiee)) { $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee); $ukwmeuiywasikwcu = true; } if (is_array($wisgiwskwawciiee) && in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) { if (($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) !== false) { unset($wisgiwskwawciiee[$ccamueccusigaaio]); } if ($ukwmeuiywasikwcu) { $wisgiwskwawciiee = implode("\40", $wisgiwskwawciiee); } $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; } } } return $siquossayskcwkea; } public function asouumsaymkgawie($siquossayskcwkea, string $oswgusmmccauqika = "\x22") : string { $aqykuigiuwmmcieu = ''; if (is_string($siquossayskcwkea)) { $aqykuigiuwmmcieu = $siquossayskcwkea; } else { if (is_array($siquossayskcwkea)) { foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (in_array($ymqmyyeuycgmigyo, ["\x73\x72\x63", "\150\162\145\146"], true) && $this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = esc_url($eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = $this->gqeemiaoyceyasme($eqgoocgaqwqcimie); } if (preg_replace("\x2f\x5c\x73\53\57", '', $eqgoocgaqwqcimie)) { if (is_numeric($ymqmyyeuycgmigyo)) { $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20"; } else { $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\x20"; } } else { $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x20"; } } } } return rtrim($aqykuigiuwmmcieu, "\40"); } public function yuawgssgauywkiia($ewgwqamkygiqaawc, ?string $geecqyososceumsk = null, array $wwgucssaecqekuek = [], ?string $meqocwsecsywiiqs = '') : string { if ($geecqyososceumsk) { $wwgucssaecqekuek["\x68\x72\145\x66"] = $geecqyososceumsk; } if ($meqocwsecsywiiqs) { $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\x61\162\x69\x61\x2d\154\141\x62\x65\x6c"] = $meqocwsecsywiiqs; } return $this->uuccukgasskgimsq("\x61", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function iagmkaeegceggski($uykgysuswksgmwqy, array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = $kakckmgscyiskome = ''; foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) { if (is_array($kmmmiumuegqmksky)) { $nsmgceoqaqogqmuw .= $this->iagmkaeegceggski($kmmmiumuegqmksky, $ywmkwiwkosakssii); } else { $qqsaswuekyewwcea = $this->igmaewykumgwoaoy($ywmkwiwkosakssii["\x74\x68\x5f\141\164\164\x72\163"], "\x64\x61\x74\x61\55\x6b\145\171", "\x74\150\x2d{$uusmaiomayssaecw}"); $kakckmgscyiskome .= $this->uuccukgasskgimsq("\x74\150", $qqsaswuekyewwcea, $kmmmiumuegqmksky); } } $nsmgceoqaqogqmuw .= $this->uuccukgasskgimsq("\164\x72", $ywmkwiwkosakssii["\x74\162\137\x61\164\164\x72\163"], $kakckmgscyiskome); return $nsmgceoqaqogqmuw; } public function kuumcaywkqiasisk($essikcmqiyqaqoaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gmosckicggqkicim => [], "\x74\x61\142\154\145\137\x61\164\164\x72\x73" => [], "\x74\150\145\141\x64\x5f\x61\x74\164\162\x73" => [], "\164\142\157\144\x79\137\x61\x74\x74\x72\x73" => [], "\x74\162\137\x61\x74\x74\162\x73" => [], "\x74\150\137\141\x74\164\x72\163" => [], "\x74\144\x5f\x61\x74\x74\162\x73" => []]); $ewgwqamkygiqaawc = ''; $uykgysuswksgmwqy = $ywmkwiwkosakssii[Constants::gmosckicggqkicim]; if ($uykgysuswksgmwqy) { $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\x74\150\145\141\x64", $ywmkwiwkosakssii["\x74\150\145\141\144\137\x61\x74\164\162\x73"], $this->iagmkaeegceggski($uykgysuswksgmwqy, $ywmkwiwkosakssii)); } if (is_array($essikcmqiyqaqoaq)) { $ymoekaoqgqmmgoqk = ''; $wiqeoymeogsaguec = count($essikcmqiyqaqoaq); $cykoowuqyugicouc = 1; foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) { $ykaygkcscgyoiiae = ''; $aiaeakmegwmmsygm = count($keuwuekioomqqaey); $uwawqgygmomeekuc = 1; foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) { if ($uwawqgygmomeekuc === 1 && isset($ywmkwiwkosakssii["\146\151\x72\x73\x74\x5f\164\x64\x5f\141\164\x74\162\163"])) { $kekeweiayiwuogau = $ywmkwiwkosakssii["\x66\x69\x72\163\x74\137\x74\x64\137\141\x74\x74\162\x73"]; } else { if ($aiaeakmegwmmsygm === $uwawqgygmomeekuc && isset($ywmkwiwkosakssii["\x6c\x61\163\x74\x5f\x74\144\x5f\x61\164\164\x72\x73"])) { $kekeweiayiwuogau = $ywmkwiwkosakssii["\x6c\x61\x73\x74\x5f\164\144\137\141\x74\x74\162\163"]; } else { $kekeweiayiwuogau = $ywmkwiwkosakssii["\164\x64\x5f\x61\164\164\x72\163"]; } } $kekeweiayiwuogau = $this->igmaewykumgwoaoy($kekeweiayiwuogau, "\x64\141\164\141\55\x6b\145\x79", "\164\144\55{$uusmaiomayssaecw}\x2d{$momcykaoccoymeig}"); $ykaygkcscgyoiiae .= $this->uuccukgasskgimsq("\164\x64", $kekeweiayiwuogau, $yycqiageqkquoioq); $uwawqgygmomeekuc++; } if ($wiqeoymeogsaguec === 1 && isset($ywmkwiwkosakssii["\146\x69\x72\x73\164\x5f\x74\162\137\141\x74\x74\162\163"])) { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\146\151\x72\163\164\x5f\164\x72\137\141\x74\164\x72\x73"]; } else { if ($wiqeoymeogsaguec === $cykoowuqyugicouc && isset($ywmkwiwkosakssii["\x6c\x61\163\x74\137\x74\162\137\x61\164\x74\162\163"])) { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\154\x61\163\164\x5f\164\x72\x5f\141\164\x74\x72\163"]; } else { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\164\x72\x5f\x61\164\164\162\x73"]; } } $ecuqamumceeoyiui = $this->igmaewykumgwoaoy($ecuqamumceeoyiui, "\x64\x61\164\141\55\153\x65\171", "\x74\162\55{$momcykaoccoymeig}"); $ymoekaoqgqmmgoqk .= $this->uuccukgasskgimsq("\164\162", $ecuqamumceeoyiui, $ykaygkcscgyoiiae); $cykoowuqyugicouc++; } $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk; } $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\x74\x62\x6f\x64\x79", $ywmkwiwkosakssii["\x74\142\x6f\x64\171\137\x61\164\164\162\163"], $essikcmqiyqaqoaq); return $this->uuccukgasskgimsq("\x74\x61\x62\154\x65", $ywmkwiwkosakssii["\x74\x61\142\154\145\x5f\141\x74\164\162\x73"], $ewgwqamkygiqaawc); } public function yekemqwyimcqgeuk($ewgwqamkygiqaawc, string $ekasyoagocygouom, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek["\x64\x61\164\145\164\x69\x6d\x65"] = $ekasyoagocygouom; return $this->uuccukgasskgimsq("\164\x69\155\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function gusouagusgyoaeya($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x70", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function ciuuiyckmsygceis($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x74\x72\x6f\x6e\x67", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function iaaacsuskiakkwui($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\144\151\166", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function oieiasyiuoimskgm($waoisqguweoociwe) { $waoisqguweoociwe = preg_replace("\x2f\74\41\55\x2d\x2e\x2a\x2d\55\x3e\x2f", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x3c\147\76\x5b\134\x6e\134\x72\x5c\163\135\x2a\x3c\134\x2f\x67\x3e\x2f", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x5c\156\57", "\40", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\134\164\x2f", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x5c\x73\134\163\x2b\x2f", "\40", $waoisqguweoociwe); return str_replace(["\x3e\x20\74", "\73\x22"], ["\76\x3c", "\x22"], $waoisqguweoociwe); } private function acciigeuywwoauus($ycskuuyucyuqisaq) : string { $wayeqowwwmqyscea = ''; $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq); for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < $eomsgokgyssmwmai; $ciyackuwsqkoqese++) { if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") { $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4)); if ($uiymkeeaukcyqqik < 0x7f) { $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik); } else { if ($uiymkeeaukcyqqik < 0x800) { $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); } else { $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); } } $ciyackuwsqkoqese += 5; } else { if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45") { $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3)); $ciyackuwsqkoqese += 2; } else { $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese]; } } } return $wayeqowwwmqyscea; } public function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', array $wwgucssaecqekuek = [], array $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = ''; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->qmyusgwkaqieouwi($wkaqekwwgqsqwcoi)) { return $wkaqekwwgqsqwcoi; } if (is_string($wkaqekwwgqsqwcoi) && $wkaqekwwgqsqwcoi) { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $qawsmigsyysqwmeq = $ywmkwiwkosakssii[Constants::akcccmoeyoywycua] ?? false; $gskuwmeemyeuwogc = $ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy] ?? false; $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT] ?? "\163\160\141\156"; $eooiwamckkkgmykc = true; if ($kqywgoqsmuswammk === "\151\x6d\147") { $gskuwmeemyeuwogc = $eooiwamckkkgmykc = false; } else { $gskuwmeemyeuwogc = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\143\157\x6e\x5f\x69\x73\x5f\155\141\162\153\x75\160", $gskuwmeemyeuwogc); } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $eygsasmqycagyayw = pr_get_foundation()->miocmcoykayoyyau(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { if ($gskuwmeemyeuwogc) { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); $eooiwamckkkgmykc = false; } else { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); } } else { $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc, Constants::akcccmoeyoywycua => $qawsmigsyysqwmeq, Constants::uociqugwegocyuue => $ywmkwiwkosakssii[Constants::uociqugwegocyuue] ?? Constants::wikgqsqysyuoykse]); } if ($gskuwmeemyeuwogc) { $wkaqekwwgqsqwcoi = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\x63\x6f\156\137\155\141\x72\x6b\x75\x70", $wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc); if ("\142\x61\163\145\x36\64" === ($ywmkwiwkosakssii[Constants::aisguagukaewucii] ?? '')) { return $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($this->acciigeuywwoauus(rawurlencode($this->oieiasyiuoimskgm($wkaqekwwgqsqwcoi))), "\x69\155\141\x67\x65\57\x73\166\147\53\x78\x6d\154"); } } if ($eooiwamckkkgmykc) { $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\x73\163", "\x70\162\55\x69\x63\157\156"); } } $wwgucssaecqekuek = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\x63\157\156\137\141\164\164\x72\x69\x62\x75\164\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi); if ($kqywgoqsmuswammk === "\151\x6d\x67") { $wwgucssaecqekuek["\163\x72\x63"] = $wkaqekwwgqsqwcoi; } else { if (!$gskuwmeemyeuwogc) { $wwgucssaecqekuek["\144\141\164\141\x2d\x73\x72\x63"] = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = ''; } } if ($gskuwmeemyeuwogc) { $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", "\x69\x63\x6f\156\x2d\x6c\157\141\x64\x65\x64"); } $nsmgceoqaqogqmuw = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\143\157\x6e\x5f\150\164\155\154", $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $wkaqekwwgqsqwcoi)); } return $nsmgceoqaqogqmuw; } public function gmqyuaqwgiayskei($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\160\141\x6e", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function geegawyigkyiuyqu(string $ymqmyyeuycgmigyo, string $ewgwqamkygiqaawc = '', array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek[Constants::NAME] = $ymqmyyeuycgmigyo; $wwgucssaecqekuek[Constants::ssmskyqgcmeiayco] = $ewgwqamkygiqaawc; return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\155\x65\164\141", $wwgucssaecqekuek); } public function ssqqsemoqaeqcqka($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\x63\162\x69\x70\x74", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function qiokaomckmywuwqo($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\164\171\154\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function sokmmckycgmeesoa(string $ogomymegcoacqisg, $igegiqwgyeuimuys, $cswemwoyesycwkuq, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\163\x72\x63" => $ogomymegcoacqisg, Constants::qomookamaskuoswk => $igegiqwgyeuimuys, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]); return $this->qgsekwygcgawekeq("\x69\x6d\147", $wwgucssaecqekuek); } public function gsamuciwkekemqqi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => Constants::qescuiwgsyuikume, Constants::qwumqqyuasyskkkc => [], Constants::ELEMENT => "\x75\x6c", "\151\164\x65\x6d\137\x61\x74\164\162\x73" => [], "\145\x6c\x65\155\x65\x6e\164\x5f\141\164\164\x72\163" => [], Constants::kqgwwgwggqqcccim => false]); $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT]; if (!in_array($kqywgoqsmuswammk, ["\165\x6c", "\157\x6c"])) { $kqywgoqsmuswammk = "\x75\x6c"; } $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $eusockqasqqmoess = 1; $mqyckiwmqigwuicw = []; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $ewgwqamkygiqaawc) { if (is_array($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $ewgwqamkygiqaawc[$ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]] ?? ''; } if ($ewgwqamkygiqaawc) { if ($ywmkwiwkosakssii[Constants::kqgwwgwggqqcccim]) { $ewgwqamkygiqaawc = sprintf("\45\x73\56\40\45\x73", $eusockqasqqmoess, $ewgwqamkygiqaawc); $eusockqasqqmoess++; } $mqyckiwmqigwuicw[$uusmaiomayssaecw] = $this->uuccukgasskgimsq("\x6c\x69", $ywmkwiwkosakssii["\151\164\x65\155\137\141\x74\x74\162\163"], $ewgwqamkygiqaawc); } } return $this->uuccukgasskgimsq($kqywgoqsmuswammk, $ywmkwiwkosakssii["\x65\154\145\155\145\x6e\x74\137\141\x74\164\x72\163"], $mqyckiwmqigwuicw); } public function sykissckqqccoiqs(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { $this->awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function uuccukgasskgimsq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string { return $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function awwqwouuoioauoaw(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') { echo $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc); } public function qgsekwygcgawekeq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string { $ggkaciewmeqmgckg = "\74\x25\163\x25\x73\76\x25\163"; if (in_array($kqywgoqsmuswammk, ["\151\156\160\165\x74", "\x62\162", "\x68\162", "\151\155\147", "\154\151\156\153", "\x6d\x65\x74\x61"])) { $ggkaciewmeqmgckg = "\x3c\x25\163\x25\x73\76"; $muiegiugiocacqkm = false; } if ($kqywgoqsmuswammk === "\141" && !isset($wwgucssaecqekuek["\x68\x72\145\x66"])) { $wwgucssaecqekuek["\x68\x72\145\x66"] = "\x23"; } if (is_array($ewgwqamkygiqaawc)) { $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc); } else { $aqykuigiuwmmcieu = $ewgwqamkygiqaawc; } if ($yymmascsusaeumiw = $this->asouumsaymkgawie($wwgucssaecqekuek)) { $yymmascsusaeumiw = "\40{$yymmascsusaeumiw}"; } $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $yymmascsusaeumiw, $aqykuigiuwmmcieu); if ($muiegiugiocacqkm) { $aqykuigiuwmmcieu = sprintf("\45\163\74\57\45\x73\76", $aqykuigiuwmmcieu, $kqywgoqsmuswammk); } return $aqykuigiuwmmcieu; } public function qmqccwwiawucockc($oammesyieqmwuwyi, array $ywmkwiwkosakssii = []) : string { $suuagcecoyuweoqk = ''; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ysskgssgwuwmqwym => [], Constants::squoamkioomemiyi => null, Constants::qescuiwgsyuikume => __("\111\164\145\155\x73", PR__CMN__FOUNDATION), Constants::mqmekycwoioigmke => 4, Constants::mikumsayiwgkmoas => Constants::zmmsyimwiiaweocw, Constants::amsgwgsoeogkgayg => __("\x49\156\x63\x6c\165\x64\x65\x20\x25\163\x20\45\x73", PR__CMN__FOUNDATION), Constants::gomimeqaqekuysya => "\54\40"]); if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { $gaeqamemwmwsyukm = count($oammesyieqmwuwyi); if ($gaeqamemwmwsyukm <= $ywmkwiwkosakssii[Constants::mqmekycwoioigmke]) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $ccamwkygaogkooek = Constants::uouymeyqasaeckso === $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; if ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); } } switch ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { case Constants::eycwiessycciwsao: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek) { $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); } } break; case Constants::zmmsyimwiiaweocw: default: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $migiiksoiymissge = $wgkqagumoowawogg->yyykkcyiksewsoqy($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek) { $migiiksoiymissge = $awewoweukmqomqmi->yyykkcyiksewsoqy($igqsaukqcqscimok); } } } if ($migiiksoiymissge) { $igqsaukqcqscimok = $this->yuawgssgauywkiia($meqocwsecsywiiqs, $migiiksoiymissge, $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], $meqocwsecsywiiqs); } else { $igqsaukqcqscimok = $meqocwsecsywiiqs; } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; } $suuagcecoyuweoqk = implode($ywmkwiwkosakssii[Constants::gomimeqaqekuysya], $oammesyieqmwuwyi); } else { $suuagcecoyuweoqk = sprintf($ywmkwiwkosakssii[Constants::amsgwgsoeogkgayg], $gaeqamemwmwsyukm, $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]); } } return $suuagcecoyuweoqk; } public function yoamscgeuweiugse($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x6e\157\163\x63\x72\x69\x70\x74", $ewgwqamkygiqaawc, $wwgucssaecqekuek); } public function kqgwgkuykuumwcgw(string $nsmgceoqaqogqmuw, string $caacssaumiqeaoaw, ?string $aokagokqyuysuksm, string $koaqiaecmascwuyy) : string { $eouekqmooogkoqoo = "\x23\x3c{$caacssaumiqeaoaw}\134\x73\53\x5b\x5e\76\x5d\x25\163\56\x2a\76\x23\151\125"; if ($aokagokqyuysuksm) { $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, "\53\151\144\x3d\42" . $aokagokqyuysuksm . "\x22"); } else { $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, ''); } $omseiokmycguuaoy = (string) preg_replace($eouekqmooogkoqoo, "{$koaqiaecmascwuyy}\44\60", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function sggceaqggqqsqaoo(string $nsmgceoqaqogqmuw, string $miisqgccsqqcscia, string $koaqiaecmascwuyy) : string { $ukiaeyumokyqqwky = "\x3c\x2f{$miisqgccsqqcscia}\76"; $omseiokmycguuaoy = (string) preg_replace("\43{$ukiaeyumokyqqwky}\x23\151\125", "{$ukiaeyumokyqqwky}{$koaqiaecmascwuyy}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function cgeyeoimiuyogose(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $uqwgieuqagsgwqqy = "\x3c\x2f{$omwmuycmeqcqokom}\76"; $omseiokmycguuaoy = (string) preg_replace("\x23{$uqwgieuqagsgwqqy}\x23\x69\125", "{$wcgsoqmmciswkmiq}{$uqwgieuqagsgwqqy}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function iukqsuaygeqgeieu(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $omseiokmycguuaoy = (string) preg_replace("\57\x3c{$omwmuycmeqcqokom}\x5b\x5e\76\135\52\76\x2f\x69", "\x24\60{$wcgsoqmmciswkmiq}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function mqyacwaaocgcsyag(string $nsmgceoqaqogqmuw, string $scwiymciagumsuiw, array $siquossayskcwkea = []) : string { foreach ($siquossayskcwkea as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { if (!preg_match("\176\x3c{$scwiymciagumsuiw}\x5c\x73\x2e\x2a\x3f{$wisgiwskwawciiee}\75\x28\133\x27\x22\x5d\51\176\151", $nsmgceoqaqogqmuw)) { $nsmgceoqaqogqmuw = preg_replace("\x2f\50\74{$scwiymciagumsuiw}\x5c\142\133\136\x3e\x3c\135\52\51\x3e\x2f\x69", "\44\61\40" . $wisgiwskwawciiee . "\75\x22" . $eqgoocgaqwqcimie . "\x22\x3e", $nsmgceoqaqogqmuw); } else { $nsmgceoqaqogqmuw = preg_replace("\x7e\x3c{$scwiymciagumsuiw}\134\163\56\x2a\77{$wisgiwskwawciiee}\x3d\50\133\47\42\x5d\x29\176\x69", "\44\61\40" . $wisgiwskwawciiee . "\x3d\x22" . $eqgoocgaqwqcimie . "\x22\x3e", $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } public function sawckkwcugsmokmi(string $yuumukkaswwoywya, array $egkakcquemweqoum) { $ekuqiqmikiicgoss = "{$yuumukkaswwoywya}\40\173"; foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if ($oaukocmsckciqaok && $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = rtrim($eqgoocgaqwqcimie); $ekuqiqmikiicgoss .= "{$oaukocmsckciqaok}\x3a\40{$eqgoocgaqwqcimie}\x3b"; } } $ekuqiqmikiicgoss .= "\x7d"; return $ekuqiqmikiicgoss; } }
