<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6773f9903c56c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Template; use WP_Post; use WP_Term; class HTML extends Common { public function qykoimeycmqgwkui() : array { return ["\156\x6f\146\x6f\x6c\x6c\x6f\x77" => __("\x4e\x6f\x66\x6f\x6c\154\x6f\167", PR__CMN__FOUNDATION), "\x6e\x6f\x6f\x70\x65\156\145\162" => __("\116\157\157\160\x65\x6e\145\x72", PR__CMN__FOUNDATION), "\x6e\x6f\162\x65\146\x65\162\162\x65\162" => __("\x4e\x6f\162\145\x66\x65\162\x72\145\162", PR__CMN__FOUNDATION)]; } public function eqggmuyywiawyigi($sociqikgoyemqaac) { $ucccueqywigcukcc = "\142\x61\x63\153\147\162\x6f\165\156\144\x2d\151\155\x61\147\x65\x5c\163\52\72\x5c\x73\x2a\50\x3f\x3c\x61\164\x74\162\76\x5c\x73\x2a\165\x72\154\134\x73\52\x5c\50\50\x3f\x3c\x75\x72\x6c\76\x5b\x5e\x29\135\x2b\x29\134\x29\51\134\163\52\x3b\x3f"; if (!preg_match("\x23{$ucccueqywigcukcc}\43\x69\163", $sociqikgoyemqaac, $meyiiwcswqmuggyg)) { return false; } if (preg_match("\x23\144\x61\164\x61\x3a\x69\155\141\x67\x65\x23\151\x73", $meyiiwcswqmuggyg[Constants::auqoykcmsiauccao])) { return false; } return esc_url(trim(wp_strip_all_tags(html_entity_decode($meyiiwcswqmuggyg[Constants::auqoykcmsiauccao], ENT_QUOTES | ENT_HTML5)), "\47\42\40")); } public function memaocoueygwyomc($nsmgceoqaqogqmuw) : string { return (string) mb_encode_numericentity(htmlspecialchars_decode(htmlentities($nsmgceoqaqogqmuw, ENT_NOQUOTES, "\x55\124\x46\x2d\70", false), ENT_NOQUOTES), [0x80, 0x10ffff, 0, ~0], "\x55\x54\x46\55\70"); } public function gqeemiaoyceyasme($ymkomoccmymcoiea) : ?string { $aqykuigiuwmmcieu = ''; if (is_array($ymkomoccmymcoiea)) { if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->gogeqwskoiiaocoe($ymkomoccmymcoiea)) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ymkomoccmymcoiea); } else { $aqykuigiuwmmcieu = implode("\40", $ymkomoccmymcoiea); } } else { if (is_string($ymkomoccmymcoiea) || is_numeric($ymkomoccmymcoiea)) { $aqykuigiuwmmcieu = (string) $ymkomoccmymcoiea; } } return esc_attr(trim($aqykuigiuwmmcieu)); } public function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { if ($gcegymooyemmaysk) { foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) { if (isset($gcegymooyemmaysk[$uusmaiomayssaecw])) { $sysgmomuyiiawwcm[$uusmaiomayssaecw] = $this->igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee); unset($gcegymooyemmaysk[$uusmaiomayssaecw]); } } $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk); } return $sysgmomuyiiawwcm; } public function igmaewykumgwoaoy($siquossayskcwkea, ?string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if (is_object($siquossayskcwkea) || is_array($siquossayskcwkea)) { if ($uusmaiomayssaecw) { $wisgiwskwawciiee = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, $uusmaiomayssaecw, ''); } else { $wisgiwskwawciiee = $siquossayskcwkea; } } else { return trim($siquossayskcwkea . "\x20" . (is_array($eqgoocgaqwqcimie) ? implode("\40", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie)); } if (is_array($eqgoocgaqwqcimie)) { $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\40", $eqgoocgaqwqcimie)); } else { if (is_string($eqgoocgaqwqcimie) || is_numeric($eqgoocgaqwqcimie)) { $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\x20", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\x20" . $eqgoocgaqwqcimie); } } if (is_object($siquossayskcwkea)) { $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee; } else { if (is_array($siquossayskcwkea)) { if ($uusmaiomayssaecw) { $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; } else { $siquossayskcwkea = $wisgiwskwawciiee; } } } return $siquossayskcwkea; } public function sueyawuweyoqyeaq($siquossayskcwkea = [], array $qqswgiawgeaeoecu = []) { foreach ($qqswgiawgeaeoecu as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, $wisgiwskwawciiee, $eqgoocgaqwqcimie); } return $siquossayskcwkea; } public function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $siquossayskcwkea; } public function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ukwmeuiywasikwcu = false; if (is_string($siquossayskcwkea)) { $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea)); } else { if (isset($siquossayskcwkea[$uusmaiomayssaecw])) { $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw]; if (is_string($wisgiwskwawciiee)) { $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee); $ukwmeuiywasikwcu = true; } if (is_array($wisgiwskwawciiee) && in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) { if (($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) !== false) { unset($wisgiwskwawciiee[$ccamueccusigaaio]); } if ($ukwmeuiywasikwcu) { $wisgiwskwawciiee = implode("\40", $wisgiwskwawciiee); } $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; } } } return $siquossayskcwkea; } public function asouumsaymkgawie($siquossayskcwkea, string $oswgusmmccauqika = "\x22") : string { $aqykuigiuwmmcieu = ''; if (is_string($siquossayskcwkea)) { $aqykuigiuwmmcieu = $siquossayskcwkea; } else { if (is_array($siquossayskcwkea)) { foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (in_array($ymqmyyeuycgmigyo, ["\x73\x72\x63", "\x68\x72\x65\x66"], true) && $this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = esc_url($eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = $this->gqeemiaoyceyasme($eqgoocgaqwqcimie); } if (preg_replace("\x2f\x5c\x73\53\57", '', $eqgoocgaqwqcimie)) { if (is_numeric($ymqmyyeuycgmigyo)) { $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20"; } else { $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\40"; } } else { $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x20"; } } } } return rtrim($aqykuigiuwmmcieu, "\x20"); } public function yuawgssgauywkiia($ewgwqamkygiqaawc, ?string $geecqyososceumsk = null, array $wwgucssaecqekuek = [], ?string $meqocwsecsywiiqs = '') : string { if ($geecqyososceumsk) { $wwgucssaecqekuek["\x68\x72\145\x66"] = $geecqyososceumsk; } if ($meqocwsecsywiiqs) { $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\141\162\x69\x61\x2d\154\x61\x62\x65\154"] = $meqocwsecsywiiqs; } return $this->uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function iagmkaeegceggski($uykgysuswksgmwqy, array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = $kakckmgscyiskome = ''; foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) { if (is_array($kmmmiumuegqmksky)) { $nsmgceoqaqogqmuw .= $this->iagmkaeegceggski($kmmmiumuegqmksky, $ywmkwiwkosakssii); } else { $qqsaswuekyewwcea = $this->igmaewykumgwoaoy($ywmkwiwkosakssii["\164\150\137\x61\x74\x74\162\163"], "\x64\141\x74\141\55\153\145\171", "\x74\150\55{$uusmaiomayssaecw}"); $kakckmgscyiskome .= $this->uuccukgasskgimsq("\x74\x68", $qqsaswuekyewwcea, $kmmmiumuegqmksky); } } $nsmgceoqaqogqmuw .= $this->uuccukgasskgimsq("\164\x72", $ywmkwiwkosakssii["\164\x72\137\x61\x74\x74\162\x73"], $kakckmgscyiskome); return $nsmgceoqaqogqmuw; } public function kuumcaywkqiasisk($essikcmqiyqaqoaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gmosckicggqkicim => [], "\x74\x61\x62\x6c\145\x5f\x61\x74\164\162\163" => [], "\x74\x68\x65\141\x64\x5f\x61\x74\164\x72\163" => [], "\164\x62\157\x64\171\137\141\x74\x74\x72\163" => [], "\x74\x72\137\x61\x74\x74\162\163" => [], "\164\x68\x5f\141\164\x74\x72\163" => [], "\x74\x64\x5f\141\x74\x74\162\163" => []]); $ewgwqamkygiqaawc = ''; $uykgysuswksgmwqy = $ywmkwiwkosakssii[Constants::gmosckicggqkicim]; if ($uykgysuswksgmwqy) { $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\x74\150\145\x61\x64", $ywmkwiwkosakssii["\x74\150\x65\x61\144\137\x61\x74\x74\162\163"], $this->iagmkaeegceggski($uykgysuswksgmwqy, $ywmkwiwkosakssii)); } if (is_array($essikcmqiyqaqoaq)) { $ymoekaoqgqmmgoqk = ''; $wiqeoymeogsaguec = count($essikcmqiyqaqoaq); $cykoowuqyugicouc = 1; foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) { $ykaygkcscgyoiiae = ''; $aiaeakmegwmmsygm = count($keuwuekioomqqaey); $uwawqgygmomeekuc = 1; foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) { if ($uwawqgygmomeekuc === 1 && isset($ywmkwiwkosakssii["\x66\x69\162\x73\164\137\164\x64\137\x61\164\x74\162\163"])) { $kekeweiayiwuogau = $ywmkwiwkosakssii["\x66\x69\162\163\164\137\164\x64\137\141\164\164\x72\163"]; } else { if ($aiaeakmegwmmsygm === $uwawqgygmomeekuc && isset($ywmkwiwkosakssii["\154\x61\163\x74\x5f\164\x64\x5f\x61\x74\x74\x72\163"])) { $kekeweiayiwuogau = $ywmkwiwkosakssii["\x6c\141\163\164\x5f\x74\x64\x5f\141\x74\164\x72\x73"]; } else { $kekeweiayiwuogau = $ywmkwiwkosakssii["\x74\144\137\141\x74\x74\x72\163"]; } } $kekeweiayiwuogau = $this->igmaewykumgwoaoy($kekeweiayiwuogau, "\x64\x61\164\x61\55\153\145\x79", "\164\144\55{$uusmaiomayssaecw}\x2d{$momcykaoccoymeig}"); $ykaygkcscgyoiiae .= $this->uuccukgasskgimsq("\x74\x64", $kekeweiayiwuogau, $yycqiageqkquoioq); $uwawqgygmomeekuc++; } if ($wiqeoymeogsaguec === 1 && isset($ywmkwiwkosakssii["\x66\x69\x72\163\x74\x5f\164\162\137\141\x74\164\x72\x73"])) { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x66\x69\x72\x73\164\x5f\x74\x72\137\x61\164\164\x72\163"]; } else { if ($wiqeoymeogsaguec === $cykoowuqyugicouc && isset($ywmkwiwkosakssii["\x6c\x61\163\x74\x5f\x74\x72\137\141\x74\164\x72\x73"])) { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\154\x61\163\164\137\x74\162\x5f\x61\x74\x74\162\x73"]; } else { $ecuqamumceeoyiui = $ywmkwiwkosakssii["\164\x72\137\x61\164\x74\162\x73"]; } } $ecuqamumceeoyiui = $this->igmaewykumgwoaoy($ecuqamumceeoyiui, "\x64\x61\x74\x61\x2d\153\x65\171", "\164\x72\55{$momcykaoccoymeig}"); $ymoekaoqgqmmgoqk .= $this->uuccukgasskgimsq("\x74\x72", $ecuqamumceeoyiui, $ykaygkcscgyoiiae); $cykoowuqyugicouc++; } $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk; } $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\164\142\x6f\144\171", $ywmkwiwkosakssii["\164\x62\x6f\144\171\137\141\x74\164\162\x73"], $essikcmqiyqaqoaq); return $this->uuccukgasskgimsq("\x74\x61\x62\x6c\145", $ywmkwiwkosakssii["\164\141\x62\x6c\145\137\141\x74\x74\162\163"], $ewgwqamkygiqaawc); } public function yekemqwyimcqgeuk($ewgwqamkygiqaawc, string $ekasyoagocygouom, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek["\144\x61\164\145\164\151\155\x65"] = $ekasyoagocygouom; return $this->uuccukgasskgimsq("\164\x69\x6d\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function gusouagusgyoaeya($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\160", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function ciuuiyckmsygceis($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\x74\162\157\156\147", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function iaaacsuskiakkwui($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\144\x69\166", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function oieiasyiuoimskgm($waoisqguweoociwe) { $waoisqguweoociwe = preg_replace("\x2f\x3c\41\x2d\55\x2e\52\x2d\x2d\x3e\57", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\74\147\x3e\133\x5c\x6e\134\x72\134\x73\135\x2a\74\x5c\x2f\147\x3e\57", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x5c\x6e\57", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\134\164\x2f", "\40", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\134\163\134\163\x2b\57", "\40", $waoisqguweoociwe); return str_replace(["\76\x20\x3c", "\73\42"], ["\76\x3c", "\x22"], $waoisqguweoociwe); } private function acciigeuywwoauus($ycskuuyucyuqisaq) : string { $wayeqowwwmqyscea = ''; $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq); for ($ciyackuwsqkoqese = 0; $ciyackuwsqkoqese < $eomsgokgyssmwmai; $ciyackuwsqkoqese++) { if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") { $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4)); if ($uiymkeeaukcyqqik < 0x7f) { $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik); } else { if ($uiymkeeaukcyqqik < 0x800) { $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); } else { $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); } } $ciyackuwsqkoqese += 5; } else { if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") { $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3)); $ciyackuwsqkoqese += 2; } else { $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese]; } } } return $wayeqowwwmqyscea; } public function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', array $wwgucssaecqekuek = [], array $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = ''; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->qmyusgwkaqieouwi($wkaqekwwgqsqwcoi)) { return $wkaqekwwgqsqwcoi; } if (is_string($wkaqekwwgqsqwcoi) && $wkaqekwwgqsqwcoi) { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $qawsmigsyysqwmeq = $ywmkwiwkosakssii[Constants::akcccmoeyoywycua] ?? false; $gskuwmeemyeuwogc = $ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy] ?? false; $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT] ?? "\163\x70\x61\x6e"; $eooiwamckkkgmykc = true; if ($kqywgoqsmuswammk === "\x69\155\147") { $gskuwmeemyeuwogc = $eooiwamckkkgmykc = false; } else { $gskuwmeemyeuwogc = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\x63\157\x6e\137\151\x73\137\155\x61\162\x6b\x75\x70", $gskuwmeemyeuwogc); } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { if ($gskuwmeemyeuwogc) { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); $eooiwamckkkgmykc = false; } else { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); } } else { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc, Constants::akcccmoeyoywycua => $qawsmigsyysqwmeq, Constants::uociqugwegocyuue => $ywmkwiwkosakssii[Constants::uociqugwegocyuue] ?? Constants::wikgqsqysyuoykse]); } if ($gskuwmeemyeuwogc) { $wkaqekwwgqsqwcoi = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\143\x6f\156\137\155\141\162\153\165\160", $wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc); if ("\x62\141\163\x65\66\64" === ($ywmkwiwkosakssii[Constants::aisguagukaewucii] ?? '')) { return $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($this->acciigeuywwoauus(rawurlencode($this->oieiasyiuoimskgm($wkaqekwwgqsqwcoi))), "\151\155\141\x67\x65\x2f\x73\x76\x67\x2b\x78\155\154"); } } if ($eooiwamckkkgmykc) { $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\163", "\x70\x72\55\x69\x63\157\x6e"); } } $wwgucssaecqekuek = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\143\x6f\156\x5f\141\164\x74\162\151\x62\x75\164\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi); if ($kqywgoqsmuswammk === "\151\x6d\147") { $wwgucssaecqekuek["\x73\162\143"] = $wkaqekwwgqsqwcoi; } else { if (!$gskuwmeemyeuwogc) { $wwgucssaecqekuek["\144\x61\164\141\x2d\163\162\143"] = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = ''; } } if ($gskuwmeemyeuwogc) { $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\x73", "\x69\x63\157\x6e\55\x6c\157\x61\x64\x65\x64"); } $nsmgceoqaqogqmuw = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\x63\x6f\156\137\150\164\155\x6c", $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $wkaqekwwgqsqwcoi)); } return $nsmgceoqaqogqmuw; } public function gmqyuaqwgiayskei($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\160\x61\156", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function geegawyigkyiuyqu(string $ymqmyyeuycgmigyo, string $ewgwqamkygiqaawc = '', array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek[Constants::NAME] = $ymqmyyeuycgmigyo; $wwgucssaecqekuek[Constants::ssmskyqgcmeiayco] = $ewgwqamkygiqaawc; return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\155\x65\x74\x61", $wwgucssaecqekuek); } public function ssqqsemoqaeqcqka($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x63\x72\x69\x70\164", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function qiokaomckmywuwqo($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\x74\171\154\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function sokmmckycgmeesoa(string $ogomymegcoacqisg, $igegiqwgyeuimuys, $cswemwoyesycwkuq, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\163\x72\143" => $ogomymegcoacqisg, Constants::qomookamaskuoswk => $igegiqwgyeuimuys, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]); return $this->qgsekwygcgawekeq("\x69\155\x67", $wwgucssaecqekuek); } public function gsamuciwkekemqqi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => Constants::qescuiwgsyuikume, Constants::qwumqqyuasyskkkc => [], Constants::ELEMENT => "\x75\154", "\x69\164\x65\x6d\x5f\141\164\164\x72\x73" => [], "\145\154\x65\155\145\x6e\164\137\141\164\x74\162\163" => [], Constants::kqgwwgwggqqcccim => false]); $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT]; if (!in_array($kqywgoqsmuswammk, ["\x75\x6c", "\157\x6c"])) { $kqywgoqsmuswammk = "\x75\x6c"; } $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $eusockqasqqmoess = 1; $mqyckiwmqigwuicw = []; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $ewgwqamkygiqaawc) { if (is_array($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $ewgwqamkygiqaawc[$ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]] ?? ''; } if ($ewgwqamkygiqaawc) { if ($ywmkwiwkosakssii[Constants::kqgwwgwggqqcccim]) { $ewgwqamkygiqaawc = sprintf("\45\x73\x2e\40\x25\163", $eusockqasqqmoess, $ewgwqamkygiqaawc); $eusockqasqqmoess++; } $mqyckiwmqigwuicw[$uusmaiomayssaecw] = $this->uuccukgasskgimsq("\x6c\x69", $ywmkwiwkosakssii["\x69\164\x65\x6d\137\141\x74\x74\x72\x73"], $ewgwqamkygiqaawc); } } return $this->uuccukgasskgimsq($kqywgoqsmuswammk, $ywmkwiwkosakssii["\x65\x6c\x65\x6d\145\x6e\x74\x5f\141\164\164\x72\x73"], $mqyckiwmqigwuicw); } public function sykissckqqccoiqs(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { $this->awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function uuccukgasskgimsq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string { return $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function awwqwouuoioauoaw(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') { echo $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc); } public function qgsekwygcgawekeq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string { $ggkaciewmeqmgckg = "\x3c\x25\163\x25\x73\76\45\163"; if (in_array($kqywgoqsmuswammk, ["\x69\x6e\160\x75\164", "\x62\162", "\x68\x72", "\x69\155\x67", "\154\151\156\x6b", "\155\x65\164\141"])) { $ggkaciewmeqmgckg = "\x3c\x25\163\45\x73\x3e"; $muiegiugiocacqkm = false; } if ($kqywgoqsmuswammk === "\141" && !isset($wwgucssaecqekuek["\x68\162\x65\x66"])) { $wwgucssaecqekuek["\x68\x72\x65\x66"] = "\x23"; } if (is_array($ewgwqamkygiqaawc)) { $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc); } else { $aqykuigiuwmmcieu = $ewgwqamkygiqaawc; } if ($yymmascsusaeumiw = $this->asouumsaymkgawie($wwgucssaecqekuek)) { $yymmascsusaeumiw = "\40{$yymmascsusaeumiw}"; } $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $yymmascsusaeumiw, $aqykuigiuwmmcieu); if ($muiegiugiocacqkm) { $aqykuigiuwmmcieu = sprintf("\x25\163\x3c\x2f\x25\163\x3e", $aqykuigiuwmmcieu, $kqywgoqsmuswammk); } return $aqykuigiuwmmcieu; } public function qmqccwwiawucockc($oammesyieqmwuwyi, array $ywmkwiwkosakssii = []) : string { $suuagcecoyuweoqk = ''; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ysskgssgwuwmqwym => [], Constants::squoamkioomemiyi => null, Constants::qescuiwgsyuikume => __("\111\x74\x65\155\163", PR__CMN__FOUNDATION), Constants::mqmekycwoioigmke => 4, Constants::mikumsayiwgkmoas => Constants::zmmsyimwiiaweocw, Constants::amsgwgsoeogkgayg => __("\x49\x6e\x63\x6c\165\x64\145\x20\45\x73\40\x25\163", PR__CMN__FOUNDATION), Constants::gomimeqaqekuysya => "\x2c\40"]); if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { $gaeqamemwmwsyukm = count($oammesyieqmwuwyi); if ($gaeqamemwmwsyukm <= $ywmkwiwkosakssii[Constants::mqmekycwoioigmke]) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $ccamwkygaogkooek = Constants::uouymeyqasaeckso === $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; if ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); } } switch ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { case Constants::eycwiessycciwsao: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek) { $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); } } break; case Constants::zmmsyimwiiaweocw: default: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { $migiiksoiymissge = $wgkqagumoowawogg->yyykkcyiksewsoqy($igqsaukqcqscimok); } else { if ($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek) { $migiiksoiymissge = $awewoweukmqomqmi->yyykkcyiksewsoqy($igqsaukqcqscimok); } } } if ($migiiksoiymissge) { $igqsaukqcqscimok = $this->yuawgssgauywkiia($meqocwsecsywiiqs, $migiiksoiymissge, $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], $meqocwsecsywiiqs); } else { $igqsaukqcqscimok = $meqocwsecsywiiqs; } } $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; } $suuagcecoyuweoqk = implode($ywmkwiwkosakssii[Constants::gomimeqaqekuysya], $oammesyieqmwuwyi); } else { $suuagcecoyuweoqk = sprintf($ywmkwiwkosakssii[Constants::amsgwgsoeogkgayg], $gaeqamemwmwsyukm, $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]); } } return $suuagcecoyuweoqk; } public function yoamscgeuweiugse($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\156\157\163\x63\x72\x69\x70\164", $ewgwqamkygiqaawc, $wwgucssaecqekuek); } public function kqgwgkuykuumwcgw(string $nsmgceoqaqogqmuw, string $caacssaumiqeaoaw, ?string $aokagokqyuysuksm, string $koaqiaecmascwuyy) : string { $eouekqmooogkoqoo = "\43\x3c{$caacssaumiqeaoaw}\134\x73\53\133\x5e\x3e\135\45\x73\x2e\x2a\x3e\43\x69\125"; if ($aokagokqyuysuksm) { $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, "\53\151\144\75\42" . $aokagokqyuysuksm . "\x22"); } else { $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, ''); } $omseiokmycguuaoy = (string) preg_replace($eouekqmooogkoqoo, "{$koaqiaecmascwuyy}\44\x30", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function sggceaqggqqsqaoo(string $nsmgceoqaqogqmuw, string $miisqgccsqqcscia, string $koaqiaecmascwuyy) : string { $ukiaeyumokyqqwky = "\x3c\57{$miisqgccsqqcscia}\x3e"; $omseiokmycguuaoy = (string) preg_replace("\43{$ukiaeyumokyqqwky}\43\151\125", "{$ukiaeyumokyqqwky}{$koaqiaecmascwuyy}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function cgeyeoimiuyogose(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $uqwgieuqagsgwqqy = "\74\57{$omwmuycmeqcqokom}\x3e"; $omseiokmycguuaoy = (string) preg_replace("\43{$uqwgieuqagsgwqqy}\x23\151\125", "{$wcgsoqmmciswkmiq}{$uqwgieuqagsgwqqy}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function iukqsuaygeqgeieu(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $omseiokmycguuaoy = (string) preg_replace("\x2f\x3c{$omwmuycmeqcqokom}\133\136\x3e\135\52\76\x2f\151", "\44\60{$wcgsoqmmciswkmiq}", $nsmgceoqaqogqmuw, 1); if (!empty($omseiokmycguuaoy)) { $nsmgceoqaqogqmuw = $omseiokmycguuaoy; } return $nsmgceoqaqogqmuw; } public function mqyacwaaocgcsyag(string $nsmgceoqaqogqmuw, string $scwiymciagumsuiw, array $siquossayskcwkea = []) : string { foreach ($siquossayskcwkea as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { if (!preg_match("\176\x3c{$scwiymciagumsuiw}\x5c\x73\56\x2a\77{$wisgiwskwawciiee}\75\50\x5b\x27\x22\135\51\176\x69", $nsmgceoqaqogqmuw)) { $nsmgceoqaqogqmuw = preg_replace("\x2f\x28\74{$scwiymciagumsuiw}\x5c\142\x5b\136\76\x3c\x5d\52\x29\x3e\x2f\151", "\44\61\x20" . $wisgiwskwawciiee . "\x3d\x22" . $eqgoocgaqwqcimie . "\42\76", $nsmgceoqaqogqmuw); } else { $nsmgceoqaqogqmuw = preg_replace("\176\74{$scwiymciagumsuiw}\134\x73\56\x2a\77{$wisgiwskwawciiee}\75\x28\133\47\42\135\51\x7e\151", "\x24\x31\40" . $wisgiwskwawciiee . "\75\42" . $eqgoocgaqwqcimie . "\x22\x3e", $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } public function sawckkwcugsmokmi(string $yuumukkaswwoywya, array $egkakcquemweqoum) { $ekuqiqmikiicgoss = "{$yuumukkaswwoywya}\40\173"; foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if ($oaukocmsckciqaok && $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = rtrim($eqgoocgaqwqcimie); $ekuqiqmikiicgoss .= "{$oaukocmsckciqaok}\72\40{$eqgoocgaqwqcimie}\73"; } } $ekuqiqmikiicgoss .= "\x7d"; return $ekuqiqmikiicgoss; } public function okosscaokmeqkqiq(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::squoamkioomemiyi => Constants::ckcawaoawwioqecq, Constants::uissasisiuymwsmu => '', Constants::ysskgssgwuwmqwym => [], Constants::eqewsqmqmsiocaeg => false, Constants::yeowwkiiyimoykye => []]); $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], "\x63\x6c\141\x73\163", "\x70\x72\55\x70\162\157\x67\x72\145\163\x73"); $uiewakwqscemywuo = is_array($ywmkwiwkosakssii[Constants::yeowwkiiyimoykye]) ? $ywmkwiwkosakssii[Constants::yeowwkiiyimoykye] : []; $wwgucssaecqekuek["\144\141\164\141\55\163\x69\172\145"] = $ywmkwiwkosakssii[Constants::waguuiqqgsysuukq]; $wwgucssaecqekuek["\144\x61\x74\x61\55\x74\171\160\x65"] = $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; $wwgucssaecqekuek["\144\x61\164\141\55\x63\x6f\x6e\146\x69\x67"] = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($uiewakwqscemywuo); if ($ywmkwiwkosakssii[Constants::eqewsqmqmsiocaeg]) { $wwgucssaecqekuek["\x64\x61\x74\x61\55\x61\x63\164\151\x76\145"] = true; } $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym] = $wwgucssaecqekuek; return $ywmkwiwkosakssii; } }
