<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce8e3ee38             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Template; use WP_Post; use WP_Term; class HTML extends Common { public function qykoimeycmqgwkui() : array { return ["\x6e\x6f\146\x6f\154\x6c\157\167" => __("\x4e\x6f\x66\157\x6c\154\157\x77", PR__CMN__FOUNDATION), "\156\x6f\x6f\x70\145\x6e\x65\x72" => __("\x4e\x6f\157\160\145\156\x65\x72", PR__CMN__FOUNDATION), "\x6e\x6f\x72\145\x66\145\x72\x72\145\162" => __("\116\x6f\x72\145\x66\145\x72\x72\x65\162", PR__CMN__FOUNDATION)]; } public function eqggmuyywiawyigi($sociqikgoyemqaac) { $ucccueqywigcukcc = "\x62\x61\143\153\147\162\x6f\x75\156\144\x2d\x69\x6d\141\147\x65\x5c\163\x2a\x3a\134\163\52\50\77\x3c\141\164\164\x72\76\x5c\x73\x2a\165\x72\154\x5c\x73\52\134\x28\x28\x3f\x3c\x75\x72\154\x3e\x5b\136\x29\135\53\x29\x5c\51\x29\x5c\x73\52\73\x3f"; if (!preg_match("\43{$ucccueqywigcukcc}\x23\151\x73", $sociqikgoyemqaac, $meyiiwcswqmuggyg)) { return false; } if (preg_match("\43\x64\141\164\x61\x3a\151\155\x61\147\x65\43\151\163", $meyiiwcswqmuggyg[Constants::auqoykcmsiauccao])) { return false; } return esc_url(trim(wp_strip_all_tags(html_entity_decode($meyiiwcswqmuggyg[Constants::auqoykcmsiauccao], ENT_QUOTES | ENT_HTML5)), "\x27\42\40")); } public function memaocoueygwyomc($nsmgceoqaqogqmuw) : string { return (string) mb_encode_numericentity(htmlspecialchars_decode(htmlentities($nsmgceoqaqogqmuw, ENT_NOQUOTES, "\125\x54\106\x2d\70", false), ENT_NOQUOTES), [0x80, 0x10ffff, 0, ~0], "\125\x54\x46\x2d\x38"); } public function gqeemiaoyceyasme($ymkomoccmymcoiea) : ?string { $aqykuigiuwmmcieu = ''; if (is_array($ymkomoccmymcoiea)) { if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->gogeqwskoiiaocoe($ymkomoccmymcoiea)) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ymkomoccmymcoiea); } else { $aqykuigiuwmmcieu = implode("\x20", $ymkomoccmymcoiea); } } else { if (is_string($ymkomoccmymcoiea) || is_numeric($ymkomoccmymcoiea)) { $aqykuigiuwmmcieu = (string) $ymkomoccmymcoiea; } } return esc_attr(trim($aqykuigiuwmmcieu)); } public function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { if ($gcegymooyemmaysk) { foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) { if (isset($gcegymooyemmaysk[$uusmaiomayssaecw])) { $sysgmomuyiiawwcm[$uusmaiomayssaecw] = $this->igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee); unset($gcegymooyemmaysk[$uusmaiomayssaecw]); } } $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk); } return $sysgmomuyiiawwcm; } public function igmaewykumgwoaoy($siquossayskcwkea, ?string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if (is_object($siquossayskcwkea) || is_array($siquossayskcwkea)) { if ($uusmaiomayssaecw) { $wisgiwskwawciiee = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, $uusmaiomayssaecw, ''); } else { $wisgiwskwawciiee = $siquossayskcwkea; } } else { return trim($siquossayskcwkea . "\40" . (is_array($eqgoocgaqwqcimie) ? implode("\x20", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie)); } if (is_array($eqgoocgaqwqcimie)) { $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\x20", $eqgoocgaqwqcimie)); } else { if (is_string($eqgoocgaqwqcimie) || is_numeric($eqgoocgaqwqcimie)) { $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\x20" . $eqgoocgaqwqcimie); } } if (is_object($siquossayskcwkea)) { $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee; } else { if (is_array($siquossayskcwkea)) { if ($uusmaiomayssaecw) { $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; } else { $siquossayskcwkea = $wisgiwskwawciiee; } } } return $siquossayskcwkea; } public function sueyawuweyoqyeaq($siquossayskcwkea = [], array $qqswgiawgeaeoecu = []) { foreach ($qqswgiawgeaeoecu as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, $wisgiwskwawciiee, $eqgoocgaqwqcimie); } return $siquossayskcwkea; } public function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $siquossayskcwkea; } public function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ukwmeuiywasikwcu = false; if (is_string($siquossayskcwkea)) { $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea)); } else { if (isset($siquossayskcwkea[$uusmaiomayssaecw])) { $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw]; if (is_string($wisgiwskwawciiee)) { $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee); $ukwmeuiywasikwcu = true; } if (is_array($wisgiwskwawciiee) && in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) { if (($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) !== false) { unset($wisgiwskwawciiee[$ccamueccusigaaio]); } if ($ukwmeuiywasikwcu) { $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee); } $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; } } } return $siquossayskcwkea; } public function asouumsaymkgawie($siquossayskcwkea, string $oswgusmmccauqika = "\x22") : string { $aqykuigiuwmmcieu = ''; if (is_string($siquossayskcwkea)) { $aqykuigiuwmmcieu = $siquossayskcwkea; } else { if (is_array($siquossayskcwkea)) { foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (in_array($ymqmyyeuycgmigyo, ["\x73\x72\143", "\x68\x72\145\x66"], true) && $this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = esc_url($eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = $this->gqeemiaoyceyasme($eqgoocgaqwqcimie); } if (preg_replace("\x2f\134\163\53\x2f", '', $eqgoocgaqwqcimie)) { if (is_numeric($ymqmyyeuycgmigyo)) { $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20"; } else { $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\75{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\40"; } } else { $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\40"; } } } } return rtrim($aqykuigiuwmmcieu, "\40"); } public function yuawgssgauywkiia($ewgwqamkygiqaawc, ?string $geecqyososceumsk = null, array $wwgucssaecqekuek = [], ?string $meqocwsecsywiiqs = '') : string { if ($geecqyososceumsk) { $wwgucssaecqekuek["\150\162\145\x66"] = $geecqyososceumsk; } if ($meqocwsecsywiiqs) { $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\x61\x72\151\141\x2d\x6c\x61\142\145\x6c"] = $meqocwsecsywiiqs; } return $this->uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function iagmkaeegceggski($uykgysuswksgmwqy, array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = $kakckmgscyiskome = ''; foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) { if (is_array($kmmmiumuegqmksky)) { $nsmgceoqaqogqmuw .= $this->iagmkaeegceggski($kmmmiumuegqmksky, $ywmkwiwkosakssii); } else { $qqsaswuekyewwcea = $this->igmaewykumgwoaoy($ywmkwiwkosakssii["\x74\x68\137\x61\164\x74\162\x73"], "\144\x61\164\x61\x2d\153\x65\171", "\x74\150\x2d{$uusmaiomayssaecw}"); $kakckmgscyiskome .= $this->uuccukgasskgimsq("\164\x68", $qqsaswuekyewwcea, $kmmmiumuegqmksky); } } $nsmgceoqaqogqmuw .= $this->uuccukgasskgimsq("\164\162", $ywmkwiwkosakssii["\164\162\137\x61\x74\164\x72\x73"], $kakckmgscyiskome); return $nsmgceoqaqogqmuw; } public function kuumcaywkqiasisk($essikcmqiyqaqoaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gmosckicggqkicim => [], "\x74\x61\x62\154\145\137\x61\x74\164\162\163" => [], "\x74\150\x65\x61\x64\x5f\x61\164\164\162\163" => [], "\x74\x62\x6f\x64\171\137\x61\x74\164\162\163" => [], "\x74\162\137\141\164\x74\x72\x73" => [], "\x74\x68\x5f\x61\x74\164\x72\163" => [], "\164\144\137\x61\164\164\x72\x73" => []]); $ewgwqamkygiqaawc = ''; $uykgysuswksgmwqy = $ywmkwiwkosakssii[Constants::gmosckicggqkicim]; if ($uykgysuswksgmwqy) { $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\x74\150\x65\x61\x64", $ywmkwiwkosakssii["\164\150\x65\x61\x64\137\x61\x74\x74\162\163"], $this->iagmkaeegceggski($uykgysuswksgmwqy, $ywmkwiwkosakssii)); } if (is_array($essikcmqiyqaqoaq)) { $ymoekaoqgqmmgoqk = ''; $wiqeoymeogsaguec = count($essikcmqiyqaqoaq); $cykoowuqyugicouc = 1; foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) { $ykaygkcscgyoiiae = ''; $aiaeakmegwmmsygm = count($keuwuekioomqqaey); $uwawqgygmomeekuc = 1; foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) { if ($uwawqgygmomeekuc === 1 && isset($ywmkwiwkosakssii["\x66\x69\162\x73\164\137\164\x64\x5f\141\x74\164\x72\163"])) { $kekeweiayiwuogau = $ywmkwiwkosakssii["\x66\x69\x72\163\x74\137\164\x64\x5f\141\164\164\162\x73"]; } else { if ($aiaeakmegwmmsygm === $uwawqgygmomeekuc && isset($ywmkwiwkosakssii["\154\x61\163\x74\137\164\144\x5f\x61\x74\164\x72\x73"])) { $kekeweiayiwuogau = $ywmkwiwkosakssii["\154\x61\163\164\x5f\x74\x64\x5f\141\164\x74\162\x73"]; } else { $kekeweiayiwuogau = $ywmkwiwkosakssii["\164\x64\137\x61\164\164\162\x73"]; } } $kekeweiayiwuogau = $this->igmaewykumgwoaoy($kekeweiayiwuogau, "\144\x61\164\x61\x2d\153\x65\x79", "\x74\x64\x2d{$uusmaiomayssaecw}\x2d{$momcykaoccoymeig}"); $ykaygkcscgyoiiae .= $this->uuccukgasskgimsq("\x74\144", $kekeweiayiwuogau, $yycqiageqkquoioq); $uwawqgygmomeekuc++; } if ($wiqeoymeogsaguec === 1 && isset($ywmkwiwkosakssii["\x66\x69\162\163\x74\x5f\x74\x72\137\141\x74\x74\162\163"])) { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x66\151\162\163\164\137\164\x72\x5f\x61\x74\x74\162\163"]; } else { if ($wiqeoymeogsaguec === $cykoowuqyugicouc && isset($ywmkwiwkosakssii["\x6c\x61\x73\x74\137\x74\162\137\141\x74\x74\x72\x73"])) { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x6c\141\163\164\137\x74\x72\137\141\x74\x74\x72\163"]; } else { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x74\x72\x5f\141\164\164\x72\x73"]; } } $ecuqamumceeoyiui = $this->igmaewykumgwoaoy($ecuqamumceeoyiui, "\144\x61\x74\141\55\x6b\x65\171", "\164\162\55{$momcykaoccoymeig}"); $ymoekaoqgqmmgoqk .= $this->uuccukgasskgimsq("\x74\162", $ecuqamumceeoyiui, $ykaygkcscgyoiiae); $cykoowuqyugicouc++; } $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk; } $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\164\x62\157\x64\171", $ywmkwiwkosakssii["\164\142\x6f\144\171\137\x61\x74\x74\162\163"], $essikcmqiyqaqoaq); return $this->uuccukgasskgimsq("\164\x61\142\154\145", $ywmkwiwkosakssii["\x74\x61\x62\154\145\x5f\141\x74\x74\162\x73"], $ewgwqamkygiqaawc); } public function yekemqwyimcqgeuk($ewgwqamkygiqaawc, string $ekasyoagocygouom, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek["\x64\141\x74\145\164\151\x6d\x65"] = $ekasyoagocygouom; return $this->uuccukgasskgimsq("\164\151\155\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function gusouagusgyoaeya($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x70", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function ciuuiyckmsygceis($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\x74\x72\157\156\147", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function iaaacsuskiakkwui($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x64\x69\x76", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function oieiasyiuoimskgm($waoisqguweoociwe) { $waoisqguweoociwe = preg_replace("\57\x3c\41\55\x2d\56\x2a\55\x2d\76\x2f", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x3c\147\76\x5b\134\156\134\162\x5c\x73\x5d\x2a\74\x5c\57\147\x3e\x2f", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\134\x6e\x2f", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x5c\x74\x2f", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x5c\163\x5c\x73\53\57", "\40", $waoisqguweoociwe); return str_replace(["\76\x20\x3c", "\73\42"], ["\76\74", "\42"], $waoisqguweoociwe); } private function acciigeuywwoauus($ycskuuyucyuqisaq) : string { $wayeqowwwmqyscea = ''; $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq); for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < $eomsgokgyssmwmai; $ciyackuwsqkoqese++) { if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") { $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4)); if ($uiymkeeaukcyqqik < 0x7f) { $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik); } else { if ($uiymkeeaukcyqqik < 0x800) { $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); } else { $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); } } $ciyackuwsqkoqese += 5; } else { if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") { $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3)); $ciyackuwsqkoqese += 2; } else { $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese]; } } } return $wayeqowwwmqyscea; } public function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', array $wwgucssaecqekuek = [], array $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = ''; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->qmyusgwkaqieouwi($wkaqekwwgqsqwcoi)) { return $wkaqekwwgqsqwcoi; } if (is_string($wkaqekwwgqsqwcoi) && $wkaqekwwgqsqwcoi) { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $qawsmigsyysqwmeq = $ywmkwiwkosakssii[Constants::akcccmoeyoywycua] ?? false; $gskuwmeemyeuwogc = $ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy] ?? false; $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT] ?? "\163\x70\141\156"; $eooiwamckkkgmykc = true; if ($kqywgoqsmuswammk === "\151\x6d\147") { $gskuwmeemyeuwogc = $eooiwamckkkgmykc = false; } else { $gskuwmeemyeuwogc = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\143\x6f\156\137\151\x73\x5f\x6d\x61\162\x6b\x75\160", $gskuwmeemyeuwogc); } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { if ($gskuwmeemyeuwogc) { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); $eooiwamckkkgmykc = false; } else { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); } } else { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc, Constants::akcccmoeyoywycua => $qawsmigsyysqwmeq, Constants::uociqugwegocyuue => $ywmkwiwkosakssii[Constants::uociqugwegocyuue] ?? Constants::wikgqsqysyuoykse]); } if ($gskuwmeemyeuwogc) { $wkaqekwwgqsqwcoi = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\143\157\x6e\137\x6d\141\x72\153\x75\160", $wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc); if ("\x62\141\163\145\x36\x34" === ($ywmkwiwkosakssii[Constants::aisguagukaewucii] ?? '')) { return $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($this->acciigeuywwoauus(rawurlencode($this->oieiasyiuoimskgm($wkaqekwwgqsqwcoi))), "\151\x6d\x61\x67\x65\57\163\x76\x67\53\170\155\x6c"); } } } if ($eooiwamckkkgmykc) { $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\163", "\160\162\x2d\151\x63\157\x6e"); } $wwgucssaecqekuek = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\x63\x6f\156\x5f\141\164\x74\162\151\x62\165\x74\145\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi); if ($kqywgoqsmuswammk === "\x69\155\x67") { $wwgucssaecqekuek["\163\x72\x63"] = $wkaqekwwgqsqwcoi; } else { if (!$gskuwmeemyeuwogc) { $wwgucssaecqekuek["\144\x61\x74\141\55\x73\x72\143"] = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = ''; } } if ($gskuwmeemyeuwogc) { $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", "\151\x63\157\156\55\x6c\157\x61\x64\145\x64"); } $nsmgceoqaqogqmuw = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\143\x6f\x6e\137\x68\164\x6d\x6c", $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $wkaqekwwgqsqwcoi)); } return $nsmgceoqaqogqmuw; } public function gmqyuaqwgiayskei($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x70\141\156", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function geegawyigkyiuyqu(string $ymqmyyeuycgmigyo, string $ewgwqamkygiqaawc = '', array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek[Constants::NAME] = $ymqmyyeuycgmigyo; $wwgucssaecqekuek[Constants::ssmskyqgcmeiayco] = $ewgwqamkygiqaawc; return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\155\x65\164\141", $wwgucssaecqekuek); } public function ssqqsemoqaeqcqka($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\143\162\151\x70\164", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function qiokaomckmywuwqo($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x74\171\x6c\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function sokmmckycgmeesoa(string $ogomymegcoacqisg, $igegiqwgyeuimuys, $cswemwoyesycwkuq, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\163\x72\x63" => $ogomymegcoacqisg, Constants::qomookamaskuoswk => $igegiqwgyeuimuys, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]); return $this->qgsekwygcgawekeq("\151\x6d\147", $wwgucssaecqekuek); } public function gsamuciwkekemqqi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => Constants::qescuiwgsyuikume, Constants::qwumqqyuasyskkkc => [], Constants::ELEMENT => "\x75\x6c", "\x69\164\x65\155\x5f\x61\164\164\162\x73" => [], "\145\154\x65\155\x65\156\164\x5f\141\164\164\162\x73" => [], Constants::kqgwwgwggqqcccim => false]); $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT]; if (!in_array($kqywgoqsmuswammk, ["\165\x6c", "\157\154"])) { $kqywgoqsmuswammk = "\x75\x6c"; } $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $eusockqasqqmoess = 1; $mqyckiwmqigwuicw = []; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $ewgwqamkygiqaawc) { if (is_array($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $ewgwqamkygiqaawc[$ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]] ?? ''; } if ($ewgwqamkygiqaawc) { if ($ywmkwiwkosakssii[Constants::kqgwwgwggqqcccim]) { $ewgwqamkygiqaawc = sprintf("\x25\x73\x2e\x20\x25\163", $eusockqasqqmoess, $ewgwqamkygiqaawc); $eusockqasqqmoess++; } $mqyckiwmqigwuicw[$uusmaiomayssaecw] = $this->uuccukgasskgimsq("\x6c\151", $ywmkwiwkosakssii["\x69\x74\145\155\137\x61\164\x74\x72\163"], $ewgwqamkygiqaawc); } } return $this->uuccukgasskgimsq($kqywgoqsmuswammk, $ywmkwiwkosakssii["\145\x6c\145\x6d\145\x6e\164\x5f\x61\x74\x74\x72\163"], $mqyckiwmqigwuicw); } public function sykissckqqccoiqs(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { $this->awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function uuccukgasskgimsq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string { return $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function awwqwouuoioauoaw(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') { echo $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc); } public function qgsekwygcgawekeq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string { $ggkaciewmeqmgckg = "\74\x25\163\45\163\x3e\45\163"; if (in_array($kqywgoqsmuswammk, ["\x69\156\160\x75\x74", "\142\162", "\x68\x72", "\x69\x6d\x67", "\x6c\x69\x6e\153", "\x6d\x65\x74\x61"])) { $ggkaciewmeqmgckg = "\x3c\45\163\45\x73\76"; $muiegiugiocacqkm = false; } if ($kqywgoqsmuswammk === "\x61" && !isset($wwgucssaecqekuek["\x68\x72\x65\x66"])) { $wwgucssaecqekuek["\150\162\x65\146"] = "\43"; } if (is_array($ewgwqamkygiqaawc)) { $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc); } else { $aqykuigiuwmmcieu = $ewgwqamkygiqaawc; } if ($yymmascsusaeumiw = $this->asouumsaymkgawie($wwgucssaecqekuek)) { $yymmascsusaeumiw = "\x20{$yymmascsusaeumiw}"; } $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $yymmascsusaeumiw, $aqykuigiuwmmcieu); if ($muiegiugiocacqkm) { $aqykuigiuwmmcieu = sprintf("\45\163\x3c\57\45\163\x3e", $aqykuigiuwmmcieu, $kqywgoqsmuswammk); } return $aqykuigiuwmmcieu; } public function qmqccwwiawucockc($oammesyieqmwuwyi, array $ywmkwiwkosakssii = []) : string { $suuagcecoyuweoqk = ''; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ysskgssgwuwmqwym => [], Constants::squoamkioomemiyi => null, Constants::qescuiwgsyuikume => __("\111\x74\145\x6d\163", PR__CMN__FOUNDATION), Constants::mqmekycwoioigmke => 4, Constants::mikumsayiwgkmoas => Constants::zmmsyimwiiaweocw, Constants::amsgwgsoeogkgayg => __("\111\x6e\143\x6c\165\x64\145\40\45\163\40\45\163", PR__CMN__FOUNDATION), Constants::gomimeqaqekuysya => "\54\x20"]); if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { $gaeqamemwmwsyukm = count($oammesyieqmwuwyi); if ($gaeqamemwmwsyukm <= $ywmkwiwkosakssii[Constants::mqmekycwoioigmke]) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $ccamwkygaogkooek = Constants::uouymeyqasaeckso === $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; if ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); } } switch ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { case Constants::eycwiessycciwsao: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek) { $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); } } break; case Constants::zmmsyimwiiaweocw: default: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $migiiksoiymissge = $wgkqagumoowawogg->yyykkcyiksewsoqy($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek) { $migiiksoiymissge = $awewoweukmqomqmi->yyykkcyiksewsoqy($igqsaukqcqscimok); } } } if ($migiiksoiymissge) { $igqsaukqcqscimok = $this->yuawgssgauywkiia($meqocwsecsywiiqs, $migiiksoiymissge, $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], $meqocwsecsywiiqs); } else { $igqsaukqcqscimok = $meqocwsecsywiiqs; } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; } $suuagcecoyuweoqk = implode($ywmkwiwkosakssii[Constants::gomimeqaqekuysya], $oammesyieqmwuwyi); } else { $suuagcecoyuweoqk = sprintf($ywmkwiwkosakssii[Constants::amsgwgsoeogkgayg], $gaeqamemwmwsyukm, $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]); } } return $suuagcecoyuweoqk; } public function yoamscgeuweiugse($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x6e\x6f\163\143\162\x69\160\164", $ewgwqamkygiqaawc, $wwgucssaecqekuek); } public function kqgwgkuykuumwcgw(string $nsmgceoqaqogqmuw, string $caacssaumiqeaoaw, ?string $aokagokqyuysuksm, string $koaqiaecmascwuyy) : string { $eouekqmooogkoqoo = "\43\x3c{$caacssaumiqeaoaw}\x5c\x73\53\x5b\136\76\135\x25\163\x2e\52\x3e\43\x69\125"; if ($aokagokqyuysuksm) { $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, "\x2b\x69\144\75\42" . $aokagokqyuysuksm . "\x22"); } else { $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, ''); } $omseiokmycguuaoy = (string) preg_replace($eouekqmooogkoqoo, "{$koaqiaecmascwuyy}\x24\60", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function sggceaqggqqsqaoo(string $nsmgceoqaqogqmuw, string $miisqgccsqqcscia, string $koaqiaecmascwuyy) : string { $ukiaeyumokyqqwky = "\74\57{$miisqgccsqqcscia}\x3e"; $omseiokmycguuaoy = (string) preg_replace("\x23{$ukiaeyumokyqqwky}\43\x69\x55", "{$ukiaeyumokyqqwky}{$koaqiaecmascwuyy}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function cgeyeoimiuyogose(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $uqwgieuqagsgwqqy = "\74\57{$omwmuycmeqcqokom}\x3e"; $omseiokmycguuaoy = (string) preg_replace("\43{$uqwgieuqagsgwqqy}\x23\x69\125", "{$wcgsoqmmciswkmiq}{$uqwgieuqagsgwqqy}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function iukqsuaygeqgeieu(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $omseiokmycguuaoy = (string) preg_replace("\57\74{$omwmuycmeqcqokom}\133\x5e\x3e\x5d\x2a\x3e\57\x69", "\x24\60{$wcgsoqmmciswkmiq}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function mqyacwaaocgcsyag(string $nsmgceoqaqogqmuw, string $scwiymciagumsuiw, array $siquossayskcwkea = []) : string { foreach ($siquossayskcwkea as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { if (!preg_match("\x7e\74{$scwiymciagumsuiw}\134\163\56\x2a\77{$wisgiwskwawciiee}\75\50\133\x27\x22\135\x29\176\x69", $nsmgceoqaqogqmuw)) { $nsmgceoqaqogqmuw = preg_replace("\57\50\74{$scwiymciagumsuiw}\134\142\x5b\136\x3e\x3c\x5d\x2a\51\x3e\57\151", "\x24\61\x20" . $wisgiwskwawciiee . "\x3d\x22" . $eqgoocgaqwqcimie . "\42\x3e", $nsmgceoqaqogqmuw); } else { $nsmgceoqaqogqmuw = preg_replace("\176\x3c{$scwiymciagumsuiw}\134\x73\x2e\x2a\x3f{$wisgiwskwawciiee}\x3d\x28\133\47\42\x5d\51\x7e\151", "\x24\x31\x20" . $wisgiwskwawciiee . "\x3d\x22" . $eqgoocgaqwqcimie . "\x22\x3e", $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } public function sawckkwcugsmokmi(string $yuumukkaswwoywya, array $egkakcquemweqoum) { $ekuqiqmikiicgoss = "{$yuumukkaswwoywya}\40\x7b"; foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if ($oaukocmsckciqaok && $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = rtrim($eqgoocgaqwqcimie); $ekuqiqmikiicgoss .= "{$oaukocmsckciqaok}\x3a\40{$eqgoocgaqwqcimie}\73"; } } $ekuqiqmikiicgoss .= "\x7d"; return $ekuqiqmikiicgoss; } public function okosscaokmeqkqiq(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::squoamkioomemiyi => Constants::ckcawaoawwioqecq, Constants::uissasisiuymwsmu => '', Constants::ysskgssgwuwmqwym => [], Constants::eqewsqmqmsiocaeg => false, Constants::yeowwkiiyimoykye => []]); $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], "\x63\x6c\141\x73\x73", "\x70\x72\x2d\x70\162\x6f\147\162\145\163\x73"); $uiewakwqscemywuo = is_array($ywmkwiwkosakssii[Constants::yeowwkiiyimoykye]) ? $ywmkwiwkosakssii[Constants::yeowwkiiyimoykye] : []; $wwgucssaecqekuek["\x64\141\x74\141\x2d\163\151\x7a\x65"] = $ywmkwiwkosakssii[Constants::waguuiqqgsysuukq]; $wwgucssaecqekuek["\x64\141\x74\141\x2d\x74\x79\x70\145"] = $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; $wwgucssaecqekuek["\x64\141\164\141\x2d\143\x6f\156\146\151\147"] = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($uiewakwqscemywuo); if ($ywmkwiwkosakssii[Constants::eqewsqmqmsiocaeg]) { $wwgucssaecqekuek["\144\x61\164\x61\x2d\141\x63\x74\151\166\145"] = true; } $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym] = $wwgucssaecqekuek; return $ywmkwiwkosakssii; } }
