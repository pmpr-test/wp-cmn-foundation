<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Template; use WP_Post; use WP_Term; class HTML extends Common { public function qykoimeycmqgwkui() : array { return ["\156\x6f\x66\x6f\154\154\157\167" => __("\116\x6f\146\x6f\154\154\x6f\x77", PR__CMN__FOUNDATION), "\x6e\157\157\x70\145\156\145\162" => __("\116\157\x6f\160\x65\156\x65\162", PR__CMN__FOUNDATION), "\x6e\157\162\145\146\145\x72\162\x65\x72" => __("\116\x6f\162\x65\x66\x65\x72\x72\145\162", PR__CMN__FOUNDATION)]; } public function eqggmuyywiawyigi($sociqikgoyemqaac) { $ucccueqywigcukcc = "\142\x61\x63\x6b\147\162\x6f\165\156\144\55\151\155\x61\x67\145\x5c\x73\x2a\x3a\134\163\52\50\77\x3c\141\x74\164\x72\x3e\x5c\x73\52\x75\162\x6c\x5c\x73\52\x5c\50\x28\x3f\74\x75\162\x6c\x3e\133\x5e\51\x5d\53\x29\134\51\51\134\163\x2a\73\77"; if (preg_match("\x23{$ucccueqywigcukcc}\x23\x69\163", $sociqikgoyemqaac, $meyiiwcswqmuggyg)) { goto uossiqykiaouimca; } return false; uossiqykiaouimca: if (!preg_match("\x23\144\x61\164\141\72\x69\x6d\141\147\145\43\151\163", $meyiiwcswqmuggyg[Constants::auqoykcmsiauccao])) { goto awkgycqimgayoaiy; } return false; awkgycqimgayoaiy: return esc_url(trim(wp_strip_all_tags(html_entity_decode($meyiiwcswqmuggyg[Constants::auqoykcmsiauccao], ENT_QUOTES | ENT_HTML5)), "\x27\42\40")); } public function memaocoueygwyomc($nsmgceoqaqogqmuw) : string { return (string) mb_encode_numericentity(htmlspecialchars_decode(htmlentities($nsmgceoqaqogqmuw, ENT_NOQUOTES, "\x55\x54\x46\x2d\x38", false), ENT_NOQUOTES), [0x80, 0x10ffff, 0, ~0], "\125\124\x46\55\x38"); } public function gqeemiaoyceyasme($ymkomoccmymcoiea) : ?string { $aqykuigiuwmmcieu = ''; if (is_array($ymkomoccmymcoiea)) { goto wcsiyammsoaoeska; } if (!(is_string($ymkomoccmymcoiea) || is_numeric($ymkomoccmymcoiea))) { goto eagucokgqqgkukew; } $aqykuigiuwmmcieu = (string) $ymkomoccmymcoiea; eagucokgqqgkukew: goto iwuyueygqsceyguc; wcsiyammsoaoeska: if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->gogeqwskoiiaocoe($ymkomoccmymcoiea)) { goto ogeeaauygcocqgee; } $aqykuigiuwmmcieu = implode("\x20", $ymkomoccmymcoiea); goto eecukukickgoweyc; ogeeaauygcocqgee: $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ymkomoccmymcoiea); eecukukickgoweyc: iwuyueygqsceyguc: return esc_attr(trim($aqykuigiuwmmcieu)); } public function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { if (!$gcegymooyemmaysk) { goto owisiqaowqeemuws; } foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) { if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) { goto skiykgkiekmkcmwe; } $sysgmomuyiiawwcm[$uusmaiomayssaecw] = $this->igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee); unset($gcegymooyemmaysk[$uusmaiomayssaecw]); skiykgkiekmkcmwe: qegqgskaeckoqaiq: } mgskawmqsikcgaoo: $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk); owisiqaowqeemuws: return $sysgmomuyiiawwcm; } public function igmaewykumgwoaoy($siquossayskcwkea, ?string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if (is_object($siquossayskcwkea) || is_array($siquossayskcwkea)) { goto emkywookycykucmu; } return trim($siquossayskcwkea . "\x20" . (is_array($eqgoocgaqwqcimie) ? implode("\40", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie)); goto cymcgssycuaakwsu; emkywookycykucmu: if ($uusmaiomayssaecw) { goto eueowawgacsksksk; } $wisgiwskwawciiee = $siquossayskcwkea; goto meqygagoeowmwyek; eueowawgacsksksk: $wisgiwskwawciiee = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, $uusmaiomayssaecw, ''); meqygagoeowmwyek: cymcgssycuaakwsu: if (is_array($eqgoocgaqwqcimie)) { goto qggoyqomgwciiigc; } if (!(is_string($eqgoocgaqwqcimie) || is_numeric($eqgoocgaqwqcimie))) { goto owqkeeeamewcmaum; } $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\x20", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\x20" . $eqgoocgaqwqcimie); owqkeeeamewcmaum: goto qiusaiuaqusoqcgm; qggoyqomgwciiigc: $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\40", $eqgoocgaqwqcimie)); qiusaiuaqusoqcgm: if (is_object($siquossayskcwkea)) { goto gowuaykeqimwouio; } if (!is_array($siquossayskcwkea)) { goto agyygqioqggmgawy; } if ($uusmaiomayssaecw) { goto icgomugwscaugkgm; } $siquossayskcwkea = $wisgiwskwawciiee; goto gceckcyyeqkgussg; icgomugwscaugkgm: $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; gceckcyyeqkgussg: agyygqioqggmgawy: goto qaksccygequmaaku; gowuaykeqimwouio: $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee; qaksccygequmaaku: return $siquossayskcwkea; } public function sueyawuweyoqyeaq($siquossayskcwkea = [], array $qqswgiawgeaeoecu = []) { foreach ($qqswgiawgeaeoecu as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, $wisgiwskwawciiee, $eqgoocgaqwqcimie); vimsegsagoiwywys: } emqmissqcckcecsy: return $siquossayskcwkea; } public function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $siquossayskcwkea; } public function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ukwmeuiywasikwcu = false; if (is_string($siquossayskcwkea)) { goto qkukcokaqekkoako; } if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) { goto kwmeeuiuqcaokkye; } $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw]; if (!is_string($wisgiwskwawciiee)) { goto wucoiwmyomgymyku; } $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee); $ukwmeuiywasikwcu = true; wucoiwmyomgymyku: if (!(is_array($wisgiwskwawciiee) && in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee, true))) { goto mqseqwqcsesmmuag; } if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) !== false)) { goto iywceuecmmmqksuu; } unset($wisgiwskwawciiee[$ccamueccusigaaio]); iywceuecmmmqksuu: if (!$ukwmeuiywasikwcu) { goto ouowckcwkscikcic; } $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee); ouowckcwkscikcic: $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; mqseqwqcsesmmuag: kwmeeuiuqcaokkye: goto iyomiywaoqgiskcc; qkukcokaqekkoako: $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea)); iyomiywaoqgiskcc: return $siquossayskcwkea; } public function asouumsaymkgawie($siquossayskcwkea, string $oswgusmmccauqika = "\42") : string { $aqykuigiuwmmcieu = ''; if (is_string($siquossayskcwkea)) { goto oqwiceqiyckwgqkw; } if (!is_array($siquossayskcwkea)) { goto muakuckcsywcyuao; } foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (in_array($ymqmyyeuycgmigyo, ["\163\x72\143", "\150\x72\145\146"], true) && $this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto awgqqokeqkaaqsko; } $eqgoocgaqwqcimie = $this->gqeemiaoyceyasme($eqgoocgaqwqcimie); goto ieiwswkoqcqaykik; awgqqokeqkaaqsko: $eqgoocgaqwqcimie = esc_url($eqgoocgaqwqcimie); ieiwswkoqcqaykik: if (preg_replace("\x2f\134\163\53\57", '', $eqgoocgaqwqcimie)) { goto ikekioqaccggcwko; } $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\40"; goto imciyymqukkwemqa; ikekioqaccggcwko: if (is_numeric($ymqmyyeuycgmigyo)) { goto mgqumoaokymooyou; } $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\x20"; goto gooymcgycisyuowi; mgqumoaokymooyou: $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20"; gooymcgycisyuowi: imciyymqukkwemqa: bowssiaeccamuiiq: } yemqwgwwogceuekc: muakuckcsywcyuao: goto ukwkqeoyuoageuwg; oqwiceqiyckwgqkw: $aqykuigiuwmmcieu = $siquossayskcwkea; ukwkqeoyuoageuwg: return rtrim($aqykuigiuwmmcieu, "\x20"); } public function yuawgssgauywkiia($ewgwqamkygiqaawc, ?string $geecqyososceumsk = null, array $wwgucssaecqekuek = [], ?string $meqocwsecsywiiqs = '') : string { if (!$geecqyososceumsk) { goto saosiwmguyawuouy; } $wwgucssaecqekuek["\150\x72\145\146"] = $geecqyososceumsk; saosiwmguyawuouy: if (!$meqocwsecsywiiqs) { goto wwsasogecmwwikws; } $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\x61\162\x69\141\55\154\141\x62\x65\154"] = $meqocwsecsywiiqs; wwsasogecmwwikws: return $this->uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function iagmkaeegceggski($uykgysuswksgmwqy, array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = $kakckmgscyiskome = ''; foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) { if (is_array($kmmmiumuegqmksky)) { goto wkceacsqeyiimcus; } $qqsaswuekyewwcea = $this->igmaewykumgwoaoy($ywmkwiwkosakssii["\164\x68\137\x61\x74\x74\162\163"], "\144\x61\164\141\55\153\145\171", "\x74\150\55{$uusmaiomayssaecw}"); $kakckmgscyiskome .= $this->uuccukgasskgimsq("\x74\x68", $qqsaswuekyewwcea, $kmmmiumuegqmksky); goto acycwqqmgeygymkw; wkceacsqeyiimcus: $nsmgceoqaqogqmuw .= $this->iagmkaeegceggski($kmmmiumuegqmksky, $ywmkwiwkosakssii); acycwqqmgeygymkw: qgwcisoeysiwakak: } ukeyisqesuoscwke: $nsmgceoqaqogqmuw .= $this->uuccukgasskgimsq("\164\162", $ywmkwiwkosakssii["\164\x72\x5f\x61\164\x74\162\x73"], $kakckmgscyiskome); return $nsmgceoqaqogqmuw; } public function kuumcaywkqiasisk($essikcmqiyqaqoaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gmosckicggqkicim => [], "\164\141\142\x6c\145\x5f\141\164\164\162\163" => [], "\x74\150\145\x61\x64\x5f\141\x74\164\x72\163" => [], "\x74\142\x6f\144\171\137\x61\x74\x74\162\x73" => [], "\x74\x72\x5f\141\x74\164\x72\163" => [], "\164\x68\137\x61\x74\164\x72\x73" => [], "\164\144\x5f\x61\164\x74\162\163" => []]); $ewgwqamkygiqaawc = ''; $uykgysuswksgmwqy = $ywmkwiwkosakssii[Constants::gmosckicggqkicim]; if (!$uykgysuswksgmwqy) { goto qiayggmakgsuwwsm; } $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\164\150\145\141\x64", $ywmkwiwkosakssii["\x74\x68\x65\141\x64\137\x61\164\164\x72\x73"], $this->iagmkaeegceggski($uykgysuswksgmwqy, $ywmkwiwkosakssii)); qiayggmakgsuwwsm: if (!is_array($essikcmqiyqaqoaq)) { goto gmwcaekkucsikwye; } $ymoekaoqgqmmgoqk = ''; $wiqeoymeogsaguec = count($essikcmqiyqaqoaq); $cykoowuqyugicouc = 1; foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) { $ykaygkcscgyoiiae = ''; $aiaeakmegwmmsygm = count($keuwuekioomqqaey); $uwawqgygmomeekuc = 1; foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) { if ($uwawqgygmomeekuc === 1 && isset($ywmkwiwkosakssii["\x66\x69\162\163\x74\137\164\144\x5f\141\164\164\162\163"])) { goto gwwyoyaqosoggkcu; } if ($aiaeakmegwmmsygm === $uwawqgygmomeekuc && isset($ywmkwiwkosakssii["\x6c\x61\163\164\137\164\144\x5f\141\x74\164\x72\x73"])) { goto gaagyegguueymiec; } $kekeweiayiwuogau = $ywmkwiwkosakssii["\164\x64\137\141\x74\164\162\x73"]; goto sosqqwiqmeqkwcsm; gaagyegguueymiec: $kekeweiayiwuogau = $ywmkwiwkosakssii["\154\141\x73\164\x5f\164\144\137\x61\x74\x74\162\163"]; sosqqwiqmeqkwcsm: goto wwwkcwcigkeqiqwo; gwwyoyaqosoggkcu: $kekeweiayiwuogau = $ywmkwiwkosakssii["\x66\151\162\163\164\x5f\164\x64\137\x61\164\164\162\x73"]; wwwkcwcigkeqiqwo: $kekeweiayiwuogau = $this->igmaewykumgwoaoy($kekeweiayiwuogau, "\x64\x61\164\x61\55\x6b\145\171", "\x74\144\55{$uusmaiomayssaecw}\x2d{$momcykaoccoymeig}"); $ykaygkcscgyoiiae .= $this->uuccukgasskgimsq("\x74\144", $kekeweiayiwuogau, $yycqiageqkquoioq); $uwawqgygmomeekuc++; cewamoymcqkmsswi: } yaqgciyuusquaeea: if ($wiqeoymeogsaguec === 1 && isset($ywmkwiwkosakssii["\146\151\162\x73\x74\x5f\164\162\x5f\141\164\164\x72\x73"])) { goto cecsiuuukuegaqgq; } if ($wiqeoymeogsaguec === $cykoowuqyugicouc && isset($ywmkwiwkosakssii["\x6c\x61\x73\164\x5f\164\x72\x5f\141\164\x74\162\163"])) { goto kkmeaociiyukweka; } $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x74\x72\137\141\x74\164\x72\x73"]; goto cuoskwammceoauak; kkmeaociiyukweka: $ecuqamumceeoyiui = $ywmkwiwkosakssii["\154\x61\163\164\137\164\162\137\141\x74\164\x72\163"]; cuoskwammceoauak: goto wkakwguccsqwkiam; cecsiuuukuegaqgq: $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x66\151\x72\163\x74\x5f\x74\162\137\x61\164\164\x72\163"]; wkakwguccsqwkiam: $ecuqamumceeoyiui = $this->igmaewykumgwoaoy($ecuqamumceeoyiui, "\144\141\x74\x61\x2d\x6b\145\171", "\x74\162\55{$momcykaoccoymeig}"); $ymoekaoqgqmmgoqk .= $this->uuccukgasskgimsq("\x74\162", $ecuqamumceeoyiui, $ykaygkcscgyoiiae); $cykoowuqyugicouc++; kqkgwqkwqeokgagk: } icqkceioeysykgua: $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk; gmwcaekkucsikwye: $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\x74\142\x6f\144\171", $ywmkwiwkosakssii["\x74\x62\x6f\x64\171\x5f\141\164\x74\162\x73"], $essikcmqiyqaqoaq); return $this->uuccukgasskgimsq("\x74\141\x62\154\x65", $ywmkwiwkosakssii["\x74\141\x62\x6c\x65\137\141\x74\164\162\x73"], $ewgwqamkygiqaawc); } public function yekemqwyimcqgeuk($ewgwqamkygiqaawc, string $ekasyoagocygouom, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek["\x64\141\164\145\x74\151\x6d\145"] = $ekasyoagocygouom; return $this->uuccukgasskgimsq("\x74\151\155\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function gusouagusgyoaeya($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\160", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function ciuuiyckmsygceis($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x74\x72\x6f\x6e\147", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function iaaacsuskiakkwui($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\144\x69\x76", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function oieiasyiuoimskgm($waoisqguweoociwe) { $waoisqguweoociwe = preg_replace("\57\74\x21\x2d\55\x2e\x2a\x2d\55\76\57", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x3c\x67\x3e\x5b\134\156\x5c\x72\134\x73\x5d\x2a\x3c\x5c\57\147\76\x2f", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x5c\156\x2f", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\134\x74\57", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\x5c\163\x5c\x73\x2b\57", "\x20", $waoisqguweoociwe); return str_replace(["\x3e\40\74", "\x3b\x22"], ["\x3e\x3c", "\x22"], $waoisqguweoociwe); } private function acciigeuywwoauus($ycskuuyucyuqisaq) : string { $wayeqowwwmqyscea = ''; $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq); $ciyackuwsqkoqese = 0; eocusimsawyoyaas: if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) { goto ayaiiymgyagsoqia; } if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\165") { goto yuwiekiseooqagqo; } if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45") { goto mookyeaauceccaga; } $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese]; goto qasccueceswyusgy; mookyeaauceccaga: $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3)); $ciyackuwsqkoqese += 2; qasccueceswyusgy: goto usosooekkcgwmgkq; yuwiekiseooqagqo: $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4)); if ($uiymkeeaukcyqqik < 0x7f) { goto qaggmqequkmcamma; } if ($uiymkeeaukcyqqik < 0x800) { goto wgksasuisoeqasuk; } $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); goto icisiaukqqmgcwci; wgksasuisoeqasuk: $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); icisiaukqqmgcwci: goto qcysssoeueakqowq; qaggmqequkmcamma: $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik); qcysssoeueakqowq: $ciyackuwsqkoqese += 5; usosooekkcgwmgkq: wksekwiuccskimmu: $ciyackuwsqkoqese++; goto eocusimsawyoyaas; ayaiiymgyagsoqia: return $wayeqowwwmqyscea; } public function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', array $wwgucssaecqekuek = [], array $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = ''; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->qmyusgwkaqieouwi($wkaqekwwgqsqwcoi)) { goto seasiecgqussuqkw; } return $wkaqekwwgqsqwcoi; seasiecgqussuqkw: if (!(is_string($wkaqekwwgqsqwcoi) && $wkaqekwwgqsqwcoi)) { goto sooagyoeaycycmke; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $qawsmigsyysqwmeq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x63\154\145\141\x6e", false); $gskuwmeemyeuwogc = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kicoscymgmgqeqgy, false); $kqywgoqsmuswammk = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ELEMENT, "\163\x70\141\x6e"); $eooiwamckkkgmykc = true; if ($kqywgoqsmuswammk === "\151\x6d\147") { goto geacgaisikkgqosu; } $gskuwmeemyeuwogc = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\x63\157\x6e\x5f\x69\x73\137\x6d\141\162\x6b\x75\160", $gskuwmeemyeuwogc); goto aqykwekaooeoqgoa; geacgaisikkgqosu: $gskuwmeemyeuwogc = $eooiwamckkkgmykc = false; aqykwekaooeoqgoa: if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { goto owgsqkkemawskgos; } $eygsasmqycagyayw = Template::symcgieuakksimmu()->miocmcoykayoyyau(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { goto geaeoccyqqkyocuw; } $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc, Constants::akcccmoeyoywycua => $qawsmigsyysqwmeq, Constants::uociqugwegocyuue => $ywmkwiwkosakssii[Constants::uociqugwegocyuue] ?? Constants::wikgqsqysyuoykse]); goto auqyeogymwsekuue; geaeoccyqqkyocuw: if ($gskuwmeemyeuwogc) { goto sacawqskusgwkkyg; } $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); goto uckyuqsuyqwgswaa; sacawqskusgwkkyg: $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); $eooiwamckkkgmykc = false; uckyuqsuyqwgswaa: auqyeogymwsekuue: if (!$gskuwmeemyeuwogc) { goto eiusewmkqqyyoqio; } $wkaqekwwgqsqwcoi = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\x63\157\156\137\155\x61\162\153\165\160", $wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc); if (!("\142\x61\x73\145\66\x34" === ($ywmkwiwkosakssii[Constants::aisguagukaewucii] ?? ''))) { goto owogoeykikyyqmck; } return $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($this->acciigeuywwoauus(rawurlencode($this->oieiasyiuoimskgm($wkaqekwwgqsqwcoi))), "\x69\x6d\141\x67\x65\x2f\163\166\x67\x2b\170\x6d\x6c"); owogoeykikyyqmck: eiusewmkqqyyoqio: if (!$eooiwamckkkgmykc) { goto qkggwaukgmuiwose; } $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\163", "\x70\162\x2d\x69\x63\157\156"); qkggwaukgmuiwose: owgsqkkemawskgos: $wwgucssaecqekuek = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\x63\157\156\137\141\164\164\x72\151\x62\165\164\145\163", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi); if ($kqywgoqsmuswammk === "\x69\x6d\x67") { goto sauwooccoqomkyei; } if ($gskuwmeemyeuwogc) { goto yuouykoggqagseog; } $wwgucssaecqekuek["\144\141\164\141\55\x73\x72\143"] = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = ''; yuouykoggqagseog: goto uecmkwyokqqcysim; sauwooccoqomkyei: $wwgucssaecqekuek["\x73\x72\143"] = $wkaqekwwgqsqwcoi; uecmkwyokqqcysim: if (!$gskuwmeemyeuwogc) { goto aqqwuwmasekigeus; } $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\163", "\x69\143\157\156\x2d\x6c\157\141\x64\x65\x64"); aqqwuwmasekigeus: $nsmgceoqaqogqmuw = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\143\157\x6e\137\150\x74\155\154", $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $wkaqekwwgqsqwcoi)); sooagyoeaycycmke: return $nsmgceoqaqogqmuw; } public function gmqyuaqwgiayskei($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\160\x61\156", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function geegawyigkyiuyqu(string $ymqmyyeuycgmigyo, string $ewgwqamkygiqaawc = '', array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek[Constants::NAME] = $ymqmyyeuycgmigyo; $wwgucssaecqekuek[Constants::ssmskyqgcmeiayco] = $ewgwqamkygiqaawc; return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\155\145\164\x61", $wwgucssaecqekuek); } public function ssqqsemoqaeqcqka($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x63\162\x69\160\164", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function qiokaomckmywuwqo($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\164\x79\x6c\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function sokmmckycgmeesoa(string $ogomymegcoacqisg, $igegiqwgyeuimuys, $cswemwoyesycwkuq, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\163\162\x63" => $ogomymegcoacqisg, Constants::qomookamaskuoswk => $igegiqwgyeuimuys, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]); return $this->qgsekwygcgawekeq("\151\155\x67", $wwgucssaecqekuek); } public function gsamuciwkekemqqi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => Constants::qescuiwgsyuikume, Constants::qwumqqyuasyskkkc => [], Constants::ELEMENT => "\165\x6c", "\151\x74\145\x6d\x5f\x61\164\164\162\163" => [], "\x65\154\x65\x6d\145\156\164\137\x61\x74\164\x72\163" => [], Constants::kqgwwgwggqqcccim => false]); $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT]; if (in_array($kqywgoqsmuswammk, ["\x75\154", "\157\154"])) { goto msmgiksiqawcgkqe; } $kqywgoqsmuswammk = "\165\154"; msmgiksiqawcgkqe: $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $eusockqasqqmoess = 1; $mqyckiwmqigwuicw = []; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $ewgwqamkygiqaawc) { if (!is_array($ewgwqamkygiqaawc)) { goto ccsqcysqesqcmqqc; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc[$ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]] ?? ''; ccsqcysqesqcmqqc: if (!$ewgwqamkygiqaawc) { goto ocuecygeseyssqum; } if (!$ywmkwiwkosakssii[Constants::kqgwwgwggqqcccim]) { goto wgycoeqcyascweia; } $ewgwqamkygiqaawc = sprintf("\45\163\x2e\x20\45\163", $eusockqasqqmoess, $ewgwqamkygiqaawc); $eusockqasqqmoess++; wgycoeqcyascweia: $mqyckiwmqigwuicw[$uusmaiomayssaecw] = $this->uuccukgasskgimsq("\x6c\x69", $ywmkwiwkosakssii["\x69\164\x65\x6d\x5f\x61\x74\164\162\163"], $ewgwqamkygiqaawc); ocuecygeseyssqum: cykouiuweogkyqee: } iqgceguocmwqeowe: return $this->uuccukgasskgimsq($kqywgoqsmuswammk, $ywmkwiwkosakssii["\145\x6c\x65\155\145\x6e\x74\x5f\141\x74\164\x72\163"], $mqyckiwmqigwuicw); } public function sykissckqqccoiqs(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { $this->awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function uuccukgasskgimsq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string { return $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function awwqwouuoioauoaw(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') { echo $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc); } public function qgsekwygcgawekeq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string { $ggkaciewmeqmgckg = "\74\x25\x73\45\x73\76\x25\x73"; if (!in_array($kqywgoqsmuswammk, ["\151\x6e\x70\165\x74", "\142\x72", "\x68\x72", "\151\155\147", "\x6c\x69\156\x6b", "\155\145\164\141"])) { goto wemkkueqksqmuyyk; } $ggkaciewmeqmgckg = "\74\x25\163\x25\x73\x3e"; $muiegiugiocacqkm = false; wemkkueqksqmuyyk: if (!($kqywgoqsmuswammk === "\x61" && !isset($wwgucssaecqekuek["\x68\162\145\146"]))) { goto mowoyiecqoaiymym; } $wwgucssaecqekuek["\150\x72\x65\146"] = "\43"; mowoyiecqoaiymym: if (is_array($ewgwqamkygiqaawc)) { goto gsgiaiymawugosgi; } $aqykuigiuwmmcieu = $ewgwqamkygiqaawc; goto ykokyisssyceccmy; gsgiaiymawugosgi: $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc); ykokyisssyceccmy: if (!($yymmascsusaeumiw = $this->asouumsaymkgawie($wwgucssaecqekuek))) { goto oieaoouoioamiqme; } $yymmascsusaeumiw = "\x20{$yymmascsusaeumiw}"; oieaoouoioamiqme: $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $yymmascsusaeumiw, $aqykuigiuwmmcieu); if (!$muiegiugiocacqkm) { goto eqysgewmuookykug; } $aqykuigiuwmmcieu = sprintf("\45\x73\x3c\57\45\163\x3e", $aqykuigiuwmmcieu, $kqywgoqsmuswammk); eqysgewmuookykug: return $aqykuigiuwmmcieu; } public function qmqccwwiawucockc($oammesyieqmwuwyi, array $ywmkwiwkosakssii = []) : string { $suuagcecoyuweoqk = ''; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ysskgssgwuwmqwym => [], Constants::squoamkioomemiyi => null, Constants::qescuiwgsyuikume => __("\x49\164\145\155\163", PR__CMN__FOUNDATION), Constants::mqmekycwoioigmke => 4, Constants::mikumsayiwgkmoas => Constants::zmmsyimwiiaweocw, Constants::amsgwgsoeogkgayg => __("\111\156\x63\154\165\x64\145\x20\45\163\x20\45\x73", PR__CMN__FOUNDATION), Constants::gomimeqaqekuysya => "\54\40"]); if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto eumaaywogiiuiyao; } $gaeqamemwmwsyukm = count($oammesyieqmwuwyi); if ($gaeqamemwmwsyukm <= $ywmkwiwkosakssii[Constants::mqmekycwoioigmke]) { goto oyywmoceqiqwyyek; } $suuagcecoyuweoqk = sprintf($ywmkwiwkosakssii[Constants::amsgwgsoeogkgayg], $gaeqamemwmwsyukm, $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]); goto ucigyuukqagoagak; oyywmoceqiqwyyek: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $ccamwkygaogkooek = Constants::uouymeyqasaeckso === $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; if (!$ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { goto aecaygyqamswuqcu; } $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto kuyggkawoaiiwseo; } if (!$igqsaukqcqscimok instanceof WP_Term) { goto ssoawgymwwgamowo; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); ssoawgymwwgamowo: goto okuoucgkgyyseguu; kuyggkawoaiiwseo: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); okuoucgkgyyseguu: switch ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { case Constants::eycwiessycciwsao: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto cqiuwwcuouuigawo; } if (!($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek)) { goto igiumgigysasioec; } $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); igiumgigysasioec: goto gkkowgywckwwcoss; cqiuwwcuouuigawo: $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); gkkowgywckwwcoss: goto ymoeymaaemmysaam; case Constants::zmmsyimwiiaweocw: default: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto qoqasyeyeesqmoye; } if (!($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek)) { goto sgskgsyiqcqsiwwe; } $migiiksoiymissge = $awewoweukmqomqmi->yyykkcyiksewsoqy($igqsaukqcqscimok); sgskgsyiqcqsiwwe: goto owcweesegmoeogqc; qoqasyeyeesqmoye: $migiiksoiymissge = $wgkqagumoowawogg->yyykkcyiksewsoqy($igqsaukqcqscimok); owcweesegmoeogqc: } uawsmeqsickqqyww: ymoeymaaemmysaam: if ($migiiksoiymissge) { goto yosmywouooecowyi; } $igqsaukqcqscimok = $meqocwsecsywiiqs; goto ieaayaguiywwyecq; yosmywouooecowyi: $igqsaukqcqscimok = $this->yuawgssgauywkiia($meqocwsecsywiiqs, $migiiksoiymissge, $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], $meqocwsecsywiiqs); ieaayaguiywwyecq: aecaygyqamswuqcu: $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; yeycmwocyqoegmaq: } saueimgassmwoyka: $suuagcecoyuweoqk = implode($ywmkwiwkosakssii[Constants::gomimeqaqekuysya], $oammesyieqmwuwyi); ucigyuukqagoagak: eumaaywogiiuiyao: return $suuagcecoyuweoqk; } public function yoamscgeuweiugse($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\156\157\163\x63\x72\x69\160\x74", $ewgwqamkygiqaawc, $wwgucssaecqekuek); } public function kqgwgkuykuumwcgw(string $nsmgceoqaqogqmuw, string $caacssaumiqeaoaw, ?string $aokagokqyuysuksm, string $koaqiaecmascwuyy) : string { $eouekqmooogkoqoo = "\x23\74{$caacssaumiqeaoaw}\x5c\x73\53\x5b\x5e\x3e\135\45\x73\x2e\x2a\76\x23\x69\125"; if ($aokagokqyuysuksm) { goto qcqgacsuskoiskcg; } $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, ''); goto iweimwuaemaquuse; qcqgacsuskoiskcg: $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, "\53\151\x64\75\42" . $aokagokqyuysuksm . "\42"); iweimwuaemaquuse: $omseiokmycguuaoy = (string) preg_replace($eouekqmooogkoqoo, "{$koaqiaecmascwuyy}\x24\x30", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto sgsgokmagckcoock; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; sgsgokmagckcoock: return $nsmgceoqaqogqmuw; } public function sggceaqggqqsqaoo(string $nsmgceoqaqogqmuw, string $miisqgccsqqcscia, string $koaqiaecmascwuyy) : string { $ukiaeyumokyqqwky = "\x3c\x2f{$miisqgccsqqcscia}\76"; $omseiokmycguuaoy = (string) preg_replace("\x23{$ukiaeyumokyqqwky}\43\x69\125", "{$ukiaeyumokyqqwky}{$koaqiaecmascwuyy}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto gmkwekuakoueicws; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; gmkwekuakoueicws: return $nsmgceoqaqogqmuw; } public function cgeyeoimiuyogose(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $uqwgieuqagsgwqqy = "\74\x2f{$omwmuycmeqcqokom}\76"; $omseiokmycguuaoy = (string) preg_replace("\43{$uqwgieuqagsgwqqy}\x23\151\x55", "{$wcgsoqmmciswkmiq}{$uqwgieuqagsgwqqy}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto cyguswquuckqoqcu; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; cyguswquuckqoqcu: return $nsmgceoqaqogqmuw; } public function iukqsuaygeqgeieu(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $omseiokmycguuaoy = (string) preg_replace("\57\74{$omwmuycmeqcqokom}\x5b\136\x3e\x5d\x2a\x3e\57\151", "\x24\60{$wcgsoqmmciswkmiq}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto euqaykgiqkmkaack; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; euqaykgiqkmkaack: return $nsmgceoqaqogqmuw; } public function mqyacwaaocgcsyag(string $nsmgceoqaqogqmuw, string $scwiymciagumsuiw, array $siquossayskcwkea = []) : string { foreach ($siquossayskcwkea as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { if (!preg_match("\176\74{$scwiymciagumsuiw}\x5c\x73\56\52\x3f{$wisgiwskwawciiee}\x3d\x28\133\x27\42\x5d\x29\176\151", $nsmgceoqaqogqmuw)) { goto awayeqowmyycaoqs; } $nsmgceoqaqogqmuw = preg_replace("\176\74{$scwiymciagumsuiw}\134\163\x2e\52\77{$wisgiwskwawciiee}\x3d\x28\x5b\x27\42\135\x29\176\151", "\44\61\x20" . $wisgiwskwawciiee . "\75\x22" . $eqgoocgaqwqcimie . "\x22\x3e", $nsmgceoqaqogqmuw); goto aquiaqiseuwyomay; awayeqowmyycaoqs: $nsmgceoqaqogqmuw = preg_replace("\57\50\74{$scwiymciagumsuiw}\134\142\x5b\136\76\x3c\135\52\x29\76\57\x69", "\x24\61\40" . $wisgiwskwawciiee . "\x3d\x22" . $eqgoocgaqwqcimie . "\42\76", $nsmgceoqaqogqmuw); aquiaqiseuwyomay: yegecewiqewskmgm: } qwyoggysuwmawqoo: return $nsmgceoqaqogqmuw; } public function sawckkwcugsmokmi(string $yuumukkaswwoywya, array $egkakcquemweqoum) { $ekuqiqmikiicgoss = "{$yuumukkaswwoywya}\40\x7b"; foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!($oaukocmsckciqaok && $eqgoocgaqwqcimie)) { goto iukkuoewgiwcoukw; } $eqgoocgaqwqcimie = rtrim($eqgoocgaqwqcimie); $ekuqiqmikiicgoss .= "{$oaukocmsckciqaok}\x3a\40{$eqgoocgaqwqcimie}\73"; iukkuoewgiwcoukw: eeiseascemqaocmo: } kysgsayqeakiwmic: $ekuqiqmikiicgoss .= "\175"; return $ekuqiqmikiicgoss; } }
