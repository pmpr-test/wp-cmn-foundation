<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Template; use WP_Post; use WP_Term; class HTML extends Common { public function qykoimeycmqgwkui() : array { return ["\x6e\157\146\x6f\154\154\157\x77" => __("\116\157\146\x6f\x6c\154\157\167", PR__CMN__FOUNDATION), "\x6e\157\x6f\x70\x65\156\145\162" => __("\116\157\157\160\145\x6e\145\x72", PR__CMN__FOUNDATION), "\x6e\157\x72\145\x66\145\x72\x72\145\162" => __("\x4e\x6f\162\x65\146\x65\x72\x72\x65\162", PR__CMN__FOUNDATION)]; } public function eqggmuyywiawyigi($sociqikgoyemqaac) { $ucccueqywigcukcc = "\142\141\143\x6b\147\162\x6f\165\x6e\144\x2d\x69\155\x61\147\x65\x5c\x73\x2a\72\x5c\163\52\50\x3f\x3c\141\164\164\x72\x3e\134\163\x2a\165\162\154\x5c\x73\52\x5c\x28\50\x3f\74\x75\162\154\76\x5b\136\51\135\x2b\x29\134\x29\x29\x5c\x73\x2a\73\x3f"; if (preg_match("\43{$ucccueqywigcukcc}\43\x69\163", $sociqikgoyemqaac, $meyiiwcswqmuggyg)) { goto iaoyeugekskmewgs; } return false; iaoyeugekskmewgs: if (!preg_match("\x23\144\141\164\x61\x3a\151\155\141\x67\145\x23\x69\x73", $meyiiwcswqmuggyg[Constants::auqoykcmsiauccao])) { goto iokemmkgmcaksiqu; } return false; iokemmkgmcaksiqu: return esc_url(trim(wp_strip_all_tags(html_entity_decode($meyiiwcswqmuggyg[Constants::auqoykcmsiauccao], ENT_QUOTES | ENT_HTML5)), "\47\42\x20")); } public function memaocoueygwyomc($nsmgceoqaqogqmuw) : string { return (string) mb_encode_numericentity(htmlspecialchars_decode(htmlentities($nsmgceoqaqogqmuw, ENT_NOQUOTES, "\125\124\x46\x2d\70", false), ENT_NOQUOTES), [0x80, 0x10ffff, 0, ~0], "\x55\124\x46\55\70"); } public function gqeemiaoyceyasme($ymkomoccmymcoiea) : ?string { $aqykuigiuwmmcieu = ''; if (is_array($ymkomoccmymcoiea)) { goto qckouamqueqiykqi; } if (!(is_string($ymkomoccmymcoiea) || is_numeric($ymkomoccmymcoiea))) { goto kieyoaoawqacqamy; } $aqykuigiuwmmcieu = (string) $ymkomoccmymcoiea; kieyoaoawqacqamy: goto measoqewessauqma; qckouamqueqiykqi: if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->gogeqwskoiiaocoe($ymkomoccmymcoiea)) { goto okagauksoqkoqygi; } $aqykuigiuwmmcieu = implode("\x20", $ymkomoccmymcoiea); goto eciksmgaqikwegwq; okagauksoqkoqygi: $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ymkomoccmymcoiea); eciksmgaqikwegwq: measoqewessauqma: return esc_attr(trim($aqykuigiuwmmcieu)); } public function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { if (!$gcegymooyemmaysk) { goto gqaimiooakyykccy; } foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) { if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) { goto mcucegiogmuyogki; } $sysgmomuyiiawwcm[$uusmaiomayssaecw] = $this->igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee); unset($gcegymooyemmaysk[$uusmaiomayssaecw]); mcucegiogmuyogki: wiaesksmicgikqcm: } auaigccmwqwsqsku: $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk); gqaimiooakyykccy: return $sysgmomuyiiawwcm; } public function igmaewykumgwoaoy($siquossayskcwkea, ?string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { if (is_object($siquossayskcwkea) || is_array($siquossayskcwkea)) { goto gykuaukukosiocoy; } return trim($siquossayskcwkea . "\x20" . (is_array($eqgoocgaqwqcimie) ? implode("\x20", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie)); goto camawumockccayaq; gykuaukukosiocoy: if ($uusmaiomayssaecw) { goto agemeseegiuuowgo; } $wisgiwskwawciiee = $siquossayskcwkea; goto goswwiomuackymqi; agemeseegiuuowgo: $wisgiwskwawciiee = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($siquossayskcwkea, $uusmaiomayssaecw, ''); goswwiomuackymqi: camawumockccayaq: if (is_array($eqgoocgaqwqcimie)) { goto ggqeakyaggiuegek; } if (!(is_string($eqgoocgaqwqcimie) || is_numeric($eqgoocgaqwqcimie))) { goto uuisaeysawuagysg; } $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\x20", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\40" . $eqgoocgaqwqcimie); uuisaeysawuagysg: goto usgcoawgqswoeiec; ggqeakyaggiuegek: $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\40", $eqgoocgaqwqcimie)); usgcoawgqswoeiec: if (is_object($siquossayskcwkea)) { goto csyoimsqgwcmiwki; } if (!is_array($siquossayskcwkea)) { goto qesqgumuouyymcwa; } if ($uusmaiomayssaecw) { goto qowcwmsiyscackaa; } $siquossayskcwkea = $wisgiwskwawciiee; goto aqigiwmamkowomiw; qowcwmsiyscackaa: $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; aqigiwmamkowomiw: qesqgumuouyymcwa: goto ggqwcqssoauckuic; csyoimsqgwcmiwki: $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee; ggqwcqssoauckuic: return $siquossayskcwkea; } public function sueyawuweyoqyeaq($siquossayskcwkea = [], array $qqswgiawgeaeoecu = []) { foreach ($qqswgiawgeaeoecu as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, $wisgiwskwawciiee, $eqgoocgaqwqcimie); mmkoqmccusoeaoyi: } ggwcauaeuagekeyo: return $siquossayskcwkea; } public function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $siquossayskcwkea; } public function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ukwmeuiywasikwcu = false; if (is_string($siquossayskcwkea)) { goto sugumgeqcwgekcqs; } if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) { goto kyggwyywiycksgqq; } $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw]; if (!is_string($wisgiwskwawciiee)) { goto waewaiuiogywqigu; } $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee); $ukwmeuiywasikwcu = true; waewaiuiogywqigu: if (!(is_array($wisgiwskwawciiee) && in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee, true))) { goto gyeayeuuyiemuwuq; } if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee, true)) !== false)) { goto yyamycyesguwueuw; } unset($wisgiwskwawciiee[$ccamueccusigaaio]); yyamycyesguwueuw: if (!$ukwmeuiywasikwcu) { goto aymmymequcisekie; } $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee); aymmymequcisekie: $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee; gyeayeuuyiemuwuq: kyggwyywiycksgqq: goto imeaiksowuukikui; sugumgeqcwgekcqs: $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea)); imeaiksowuukikui: return $siquossayskcwkea; } public function asouumsaymkgawie($siquossayskcwkea, string $oswgusmmccauqika = "\42") : string { $aqykuigiuwmmcieu = ''; if (is_string($siquossayskcwkea)) { goto eqemcocqsyasqycq; } if (!is_array($siquossayskcwkea)) { goto ueaiskyiqcquiika; } foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (in_array($ymqmyyeuycgmigyo, ["\x73\x72\143", "\x68\162\x65\146"], true) && $this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto weggeeowykuqooyg; } $eqgoocgaqwqcimie = $this->gqeemiaoyceyasme($eqgoocgaqwqcimie); goto cqkuuyouqoqyguus; weggeeowykuqooyg: $eqgoocgaqwqcimie = esc_url($eqgoocgaqwqcimie); cqkuuyouqoqyguus: if (preg_replace("\x2f\134\x73\x2b\x2f", '', $eqgoocgaqwqcimie)) { goto gwoacimkeyymqccq; } $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x20"; goto koggssokukoukkay; gwoacimkeyymqccq: if (is_numeric($ymqmyyeuycgmigyo)) { goto ssmgmiuqoeiuacsa; } $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\40"; goto wiqigqgiegmacgsw; ssmgmiuqoeiuacsa: $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40"; wiqigqgiegmacgsw: koggssokukoukkay: gaceikykesgywssm: } aqmiewawgseaqeqk: ueaiskyiqcquiika: goto ucecweoaoyeoyuue; eqemcocqsyasqycq: $aqykuigiuwmmcieu = $siquossayskcwkea; ucecweoaoyeoyuue: return rtrim($aqykuigiuwmmcieu, "\40"); } public function yuawgssgauywkiia($ewgwqamkygiqaawc, ?string $geecqyososceumsk = null, array $wwgucssaecqekuek = [], ?string $meqocwsecsywiiqs = '') : string { if (!$geecqyososceumsk) { goto cqugssuesycomqwa; } $wwgucssaecqekuek["\150\162\x65\146"] = $geecqyososceumsk; cqugssuesycomqwa: if (!$meqocwsecsywiiqs) { goto kaiqsuaywyuckuoo; } $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\141\162\151\141\x2d\x6c\141\142\x65\x6c"] = $meqocwsecsywiiqs; kaiqsuaywyuckuoo: return $this->uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function iagmkaeegceggski($uykgysuswksgmwqy, array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = $kakckmgscyiskome = ''; foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) { if (is_array($kmmmiumuegqmksky)) { goto qaiuogoowcoimwee; } $qqsaswuekyewwcea = $this->igmaewykumgwoaoy($ywmkwiwkosakssii["\164\150\137\141\x74\164\x72\x73"], "\x64\141\x74\x61\55\153\145\171", "\164\150\55{$uusmaiomayssaecw}"); $kakckmgscyiskome .= $this->uuccukgasskgimsq("\x74\x68", $qqsaswuekyewwcea, $kmmmiumuegqmksky); goto osqgywagokmsicqe; qaiuogoowcoimwee: $nsmgceoqaqogqmuw .= $this->iagmkaeegceggski($kmmmiumuegqmksky, $ywmkwiwkosakssii); osqgywagokmsicqe: ymwyooosikgokiaa: } yuoamgkigcwaooqu: $nsmgceoqaqogqmuw .= $this->uuccukgasskgimsq("\x74\x72", $ywmkwiwkosakssii["\164\162\137\x61\x74\164\162\x73"], $kakckmgscyiskome); return $nsmgceoqaqogqmuw; } public function kuumcaywkqiasisk($essikcmqiyqaqoaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gmosckicggqkicim => [], "\164\141\142\154\x65\137\x61\x74\164\162\163" => [], "\164\150\x65\141\x64\137\141\164\x74\x72\163" => [], "\x74\142\x6f\x64\171\x5f\x61\164\x74\x72\163" => [], "\164\x72\137\141\164\164\x72\x73" => [], "\164\150\137\141\164\x74\x72\163" => [], "\x74\x64\x5f\x61\164\x74\162\163" => []]); $ewgwqamkygiqaawc = ''; $uykgysuswksgmwqy = $ywmkwiwkosakssii[Constants::gmosckicggqkicim]; if (!$uykgysuswksgmwqy) { goto qccmuwiwykuegoga; } $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\164\x68\x65\141\x64", $ywmkwiwkosakssii["\164\x68\145\141\144\x5f\x61\164\x74\x72\163"], $this->iagmkaeegceggski($uykgysuswksgmwqy, $ywmkwiwkosakssii)); qccmuwiwykuegoga: if (!is_array($essikcmqiyqaqoaq)) { goto gimquiiwucueoqkw; } $ymoekaoqgqmmgoqk = ''; $wiqeoymeogsaguec = count($essikcmqiyqaqoaq); $cykoowuqyugicouc = 1; foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) { $ykaygkcscgyoiiae = ''; $aiaeakmegwmmsygm = count($keuwuekioomqqaey); $uwawqgygmomeekuc = 1; foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) { if ($uwawqgygmomeekuc === 1 && isset($ywmkwiwkosakssii["\x66\151\x72\163\164\137\x74\x64\137\141\x74\x74\x72\163"])) { goto cycwgukowsksmkyc; } if ($aiaeakmegwmmsygm === $uwawqgygmomeekuc && isset($ywmkwiwkosakssii["\154\141\x73\164\137\x74\x64\137\x61\164\164\162\163"])) { goto uscissuaiyuiukea; } $kekeweiayiwuogau = $ywmkwiwkosakssii["\x74\x64\137\141\164\164\162\163"]; goto kuyqusuycscumuek; uscissuaiyuiukea: $kekeweiayiwuogau = $ywmkwiwkosakssii["\154\x61\163\164\x5f\x74\144\137\141\x74\164\x72\163"]; kuyqusuycscumuek: goto siuyaemoiiqyoggo; cycwgukowsksmkyc: $kekeweiayiwuogau = $ywmkwiwkosakssii["\146\151\x72\163\164\137\164\x64\x5f\x61\164\164\x72\163"]; siuyaemoiiqyoggo: $kekeweiayiwuogau = $this->igmaewykumgwoaoy($kekeweiayiwuogau, "\x64\141\164\141\x2d\x6b\145\171", "\164\x64\x2d{$uusmaiomayssaecw}\x2d{$momcykaoccoymeig}"); $ykaygkcscgyoiiae .= $this->uuccukgasskgimsq("\164\x64", $kekeweiayiwuogau, $yycqiageqkquoioq); $uwawqgygmomeekuc++; ooqmaweuqmcmwsuk: } qmgueimkwqmsakis: if ($wiqeoymeogsaguec === 1 && isset($ywmkwiwkosakssii["\146\151\162\x73\x74\137\164\x72\x5f\x61\x74\164\x72\163"])) { goto qioswooukgoowsuc; } if ($wiqeoymeogsaguec === $cykoowuqyugicouc && isset($ywmkwiwkosakssii["\x6c\141\163\164\137\164\162\137\x61\164\164\x72\163"])) { goto koemwyegoqwiikom; } $ecuqamumceeoyiui = $ywmkwiwkosakssii["\164\x72\x5f\x61\x74\x74\x72\163"]; goto qycsooiomiugimqc; koemwyegoqwiikom: $ecuqamumceeoyiui = $ywmkwiwkosakssii["\154\x61\x73\x74\137\164\162\x5f\141\164\x74\x72\163"]; qycsooiomiugimqc: goto ggoimgeeuugseiwk; qioswooukgoowsuc: $ecuqamumceeoyiui = $ywmkwiwkosakssii["\x66\x69\162\x73\164\x5f\164\x72\x5f\141\x74\x74\x72\163"]; ggoimgeeuugseiwk: $ecuqamumceeoyiui = $this->igmaewykumgwoaoy($ecuqamumceeoyiui, "\x64\x61\164\141\55\153\x65\x79", "\x74\x72\55{$momcykaoccoymeig}"); $ymoekaoqgqmmgoqk .= $this->uuccukgasskgimsq("\x74\x72", $ecuqamumceeoyiui, $ykaygkcscgyoiiae); $cykoowuqyugicouc++; iiuuwuwcwamqegey: } csucwwqcsaymyiuk: $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk; gimquiiwucueoqkw: $ewgwqamkygiqaawc .= $this->uuccukgasskgimsq("\164\x62\x6f\144\x79", $ywmkwiwkosakssii["\x74\142\157\x64\171\137\x61\x74\164\162\x73"], $essikcmqiyqaqoaq); return $this->uuccukgasskgimsq("\164\x61\142\x6c\x65", $ywmkwiwkosakssii["\x74\141\142\154\145\x5f\x61\164\x74\x72\x73"], $ewgwqamkygiqaawc); } public function yekemqwyimcqgeuk($ewgwqamkygiqaawc, string $ekasyoagocygouom, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek["\x64\141\x74\x65\164\x69\x6d\145"] = $ekasyoagocygouom; return $this->uuccukgasskgimsq("\164\x69\x6d\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function gusouagusgyoaeya($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x70", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function ciuuiyckmsygceis($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x74\162\157\x6e\147", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function iaaacsuskiakkwui($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x64\x69\166", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } private function oieiasyiuoimskgm($waoisqguweoociwe) { $waoisqguweoociwe = preg_replace("\x2f\74\x21\x2d\55\x2e\52\x2d\x2d\x3e\57", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\x2f\74\x67\x3e\x5b\x5c\156\x5c\x72\x5c\x73\x5d\x2a\x3c\x5c\x2f\x67\76\57", '', $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x5c\156\57", "\x20", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\134\164\x2f", "\40", $waoisqguweoociwe); $waoisqguweoociwe = preg_replace("\57\x5c\x73\x5c\x73\x2b\x2f", "\x20", $waoisqguweoociwe); return str_replace(["\76\40\74", "\73\x22"], ["\76\74", "\42"], $waoisqguweoociwe); } private function acciigeuywwoauus($ycskuuyucyuqisaq) : string { $wayeqowwwmqyscea = ''; $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq); $ciyackuwsqkoqese = 0; ikqagqacuwcgwmqy: if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) { goto eimouyomcoqkmaae; } if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") { goto iwcmgioeaiyuacwi; } if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") { goto aycqgowuwagcgque; } $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese]; goto icuukwkwqeoogyae; aycqgowuwagcgque: $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3)); $ciyackuwsqkoqese += 2; icuukwkwqeoogyae: goto iyyaiuccouqowyga; iwcmgioeaiyuacwi: $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4)); if ($uiymkeeaukcyqqik < 0x7f) { goto ywoyioqqyuocoygk; } if ($uiymkeeaukcyqqik < 0x800) { goto mwqcykaeywsmoumm; } $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); goto awgmyaycugswmwae; mwqcykaeywsmoumm: $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f); awgmyaycugswmwae: goto iauwkeeaqsgweeoo; ywoyioqqyuocoygk: $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik); iauwkeeaqsgweeoo: $ciyackuwsqkoqese += 5; iyyaiuccouqowyga: kkwqmoeeqygoimwg: $ciyackuwsqkoqese++; goto ikqagqacuwcgwmqy; eimouyomcoqkmaae: return $wayeqowwwmqyscea; } public function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', array $wwgucssaecqekuek = [], array $ywmkwiwkosakssii = []) { $nsmgceoqaqogqmuw = ''; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->qmyusgwkaqieouwi($wkaqekwwgqsqwcoi)) { goto gcogomgmqcgkeceg; } return $wkaqekwwgqsqwcoi; gcogomgmqcgkeceg: if (!(is_string($wkaqekwwgqsqwcoi) && $wkaqekwwgqsqwcoi)) { goto aeockieewgkequae; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $qawsmigsyysqwmeq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\x6c\145\141\156", false); $gskuwmeemyeuwogc = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kicoscymgmgqeqgy, false); $kqywgoqsmuswammk = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ELEMENT, "\x73\x70\141\x6e"); $eooiwamckkkgmykc = true; if ($kqywgoqsmuswammk === "\151\x6d\147") { goto cksomiiqscosigke; } $gskuwmeemyeuwogc = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\143\157\156\137\151\x73\137\x6d\141\x72\153\x75\x70", $gskuwmeemyeuwogc); goto ugmukcwgcioqgywy; cksomiiqscosigke: $gskuwmeemyeuwogc = $eooiwamckkkgmykc = false; ugmukcwgcioqgywy: if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) { goto yeaqsiqgakskoykg; } $eygsasmqycagyayw = Template::symcgieuakksimmu()->miocmcoykayoyyau(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { goto mwwygasiagaqsimo; } $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc, Constants::akcccmoeyoywycua => $qawsmigsyysqwmeq, Constants::uociqugwegocyuue => $ywmkwiwkosakssii[Constants::uociqugwegocyuue] ?? Constants::wikgqsqysyuoykse]); goto wucacaegysmiusai; mwwygasiagaqsimo: if ($gskuwmeemyeuwogc) { goto kisccmsaieigisiu; } $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); goto euoscysqgugsqewc; kisccmsaieigisiu: $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); $eooiwamckkkgmykc = false; euoscysqgugsqewc: wucacaegysmiusai: if (!$gskuwmeemyeuwogc) { goto mseokuecmeoyoggk; } $wkaqekwwgqsqwcoi = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\143\x6f\156\137\155\141\162\153\x75\x70", $wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc); if (!("\x62\141\163\145\66\64" === ($ywmkwiwkosakssii[Constants::aisguagukaewucii] ?? ''))) { goto eeomcmuiqwgwwuqk; } return $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($this->acciigeuywwoauus(rawurlencode($this->oieiasyiuoimskgm($wkaqekwwgqsqwcoi))), "\x69\x6d\141\x67\x65\x2f\163\x76\x67\53\170\155\x6c"); eeomcmuiqwgwwuqk: mseokuecmeoyoggk: if (!$eooiwamckkkgmykc) { goto uookseqsmsqgweuy; } $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\x73", "\160\x72\x2d\151\143\157\x6e"); uookseqsmsqgweuy: yeaqsiqgakskoykg: $wwgucssaecqekuek = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\151\143\157\156\x5f\x61\164\164\162\151\142\x75\x74\145\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi); if ($kqywgoqsmuswammk === "\151\155\147") { goto iigmgswcogqemgao; } if ($gskuwmeemyeuwogc) { goto esgyqksmcukeuwyk; } $wwgucssaecqekuek["\x64\141\164\x61\55\x73\x72\143"] = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = ''; esgyqksmcukeuwyk: goto ycaqooeeseougumo; iigmgswcogqemgao: $wwgucssaecqekuek["\163\x72\x63"] = $wkaqekwwgqsqwcoi; ycaqooeeseougumo: if (!$gskuwmeemyeuwogc) { goto eceeoiwuagocweus; } $wwgucssaecqekuek = (array) $this->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\x73", "\x69\x63\x6f\156\55\154\x6f\141\144\145\x64"); eceeoiwuagocweus: $nsmgceoqaqogqmuw = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x69\x63\x6f\x6e\x5f\150\164\155\154", $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $wkaqekwwgqsqwcoi)); aeockieewgkequae: return $nsmgceoqaqogqmuw; } public function gmqyuaqwgiayskei($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\160\141\x6e", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function geegawyigkyiuyqu(string $ymqmyyeuycgmigyo, string $ewgwqamkygiqaawc = '', array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek[Constants::NAME] = $ymqmyyeuycgmigyo; $wwgucssaecqekuek[Constants::ssmskyqgcmeiayco] = $ewgwqamkygiqaawc; return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6d\x65\x74\x61", $wwgucssaecqekuek); } public function ssqqsemoqaeqcqka($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\163\x63\162\151\x70\x74", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function qiokaomckmywuwqo($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\x73\x74\171\154\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc); } public function sokmmckycgmeesoa(string $ogomymegcoacqisg, $igegiqwgyeuimuys, $cswemwoyesycwkuq, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\x73\x72\143" => $ogomymegcoacqisg, Constants::qomookamaskuoswk => $igegiqwgyeuimuys, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]); return $this->qgsekwygcgawekeq("\151\x6d\x67", $wwgucssaecqekuek); } public function gsamuciwkekemqqi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ascagqcquwgmygkm => Constants::qescuiwgsyuikume, Constants::qwumqqyuasyskkkc => [], Constants::ELEMENT => "\x75\154", "\151\x74\x65\x6d\x5f\141\164\x74\x72\x73" => [], "\145\154\x65\x6d\145\156\164\137\x61\164\164\162\x73" => [], Constants::kqgwwgwggqqcccim => false]); $kqywgoqsmuswammk = $ywmkwiwkosakssii[Constants::ELEMENT]; if (in_array($kqywgoqsmuswammk, ["\x75\154", "\x6f\154"])) { goto omqyuuomwywmqeiq; } $kqywgoqsmuswammk = "\165\x6c"; omqyuuomwywmqeiq: $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc]; $eusockqasqqmoess = 1; $mqyckiwmqigwuicw = []; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $ewgwqamkygiqaawc) { if (!is_array($ewgwqamkygiqaawc)) { goto eomqeimoequmagum; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc[$ywmkwiwkosakssii[Constants::ascagqcquwgmygkm]] ?? ''; eomqeimoequmagum: if (!$ewgwqamkygiqaawc) { goto ksqmcugkcmsooeaw; } if (!$ywmkwiwkosakssii[Constants::kqgwwgwggqqcccim]) { goto cqkyumayoemqsueu; } $ewgwqamkygiqaawc = sprintf("\45\x73\56\x20\x25\163", $eusockqasqqmoess, $ewgwqamkygiqaawc); $eusockqasqqmoess++; cqkyumayoemqsueu: $mqyckiwmqigwuicw[$uusmaiomayssaecw] = $this->uuccukgasskgimsq("\154\151", $ywmkwiwkosakssii["\x69\164\145\155\x5f\141\x74\164\162\163"], $ewgwqamkygiqaawc); ksqmcugkcmsooeaw: misiasooemyskoay: } oysyuiqmsokoykaq: return $this->uuccukgasskgimsq($kqywgoqsmuswammk, $ywmkwiwkosakssii["\145\154\145\x6d\x65\156\164\137\x61\164\x74\162\x73"], $mqyckiwmqigwuicw); } public function sykissckqqccoiqs(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { $this->awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function uuccukgasskgimsq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string { return $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } public function awwqwouuoioauoaw(string $kqywgoqsmuswammk, array $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') { echo $this->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc); } public function qgsekwygcgawekeq(string $kqywgoqsmuswammk, $wwgucssaecqekuek = [], bool $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string { $ggkaciewmeqmgckg = "\74\45\163\45\x73\76\x25\x73"; if (!in_array($kqywgoqsmuswammk, ["\x69\x6e\x70\x75\164", "\142\162", "\150\162", "\x69\155\x67", "\x6c\151\156\153", "\155\x65\x74\141"])) { goto sukcyismwageqgok; } $ggkaciewmeqmgckg = "\74\x25\163\x25\163\x3e"; $muiegiugiocacqkm = false; sukcyismwageqgok: if (!($kqywgoqsmuswammk === "\x61" && !isset($wwgucssaecqekuek["\x68\162\145\146"]))) { goto ukmgwuiqwgyiouec; } $wwgucssaecqekuek["\150\162\x65\146"] = "\x23"; ukmgwuiqwgyiouec: if (is_array($ewgwqamkygiqaawc)) { goto qykcggwgkweasuii; } $aqykuigiuwmmcieu = $ewgwqamkygiqaawc; goto geoiegikocwmwosi; qykcggwgkweasuii: $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc); geoiegikocwmwosi: if (!($yymmascsusaeumiw = $this->asouumsaymkgawie($wwgucssaecqekuek))) { goto wasuquysysmqyegg; } $yymmascsusaeumiw = "\x20{$yymmascsusaeumiw}"; wasuquysysmqyegg: $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $yymmascsusaeumiw, $aqykuigiuwmmcieu); if (!$muiegiugiocacqkm) { goto eqsuaywswuesuika; } $aqykuigiuwmmcieu = sprintf("\x25\163\74\57\45\163\76", $aqykuigiuwmmcieu, $kqywgoqsmuswammk); eqsuaywswuesuika: return $aqykuigiuwmmcieu; } public function qmqccwwiawucockc($oammesyieqmwuwyi, array $ywmkwiwkosakssii = []) : string { $suuagcecoyuweoqk = ''; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ysskgssgwuwmqwym => [], Constants::squoamkioomemiyi => null, Constants::qescuiwgsyuikume => __("\x49\x74\x65\155\163", PR__CMN__FOUNDATION), Constants::mqmekycwoioigmke => 4, Constants::mikumsayiwgkmoas => Constants::zmmsyimwiiaweocw, Constants::amsgwgsoeogkgayg => __("\111\x6e\143\x6c\165\x64\145\40\x25\163\x20\x25\163", PR__CMN__FOUNDATION), Constants::gomimeqaqekuysya => "\54\x20"]); if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto vokekoceocuskqsm; } $gaeqamemwmwsyukm = count($oammesyieqmwuwyi); if ($gaeqamemwmwsyukm <= $ywmkwiwkosakssii[Constants::mqmekycwoioigmke]) { goto oeogyayooiwqcmia; } $suuagcecoyuweoqk = sprintf($ywmkwiwkosakssii[Constants::amsgwgsoeogkgayg], $gaeqamemwmwsyukm, $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]); goto uowiiyqmiaaaaoas; oeogyayooiwqcmia: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $awewoweukmqomqmi = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $ccamwkygaogkooek = Constants::uouymeyqasaeckso === $ywmkwiwkosakssii[Constants::squoamkioomemiyi]; if (!$ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { goto qoiyiuoyamwimusy; } $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto oyeygeykqwcqoeic; } if (!$igqsaukqcqscimok instanceof WP_Term) { goto meiqywmwuoogckss; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($igqsaukqcqscimok); meiqywmwuoogckss: goto eomcuogskessyicy; oyeygeykqwcqoeic: $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($igqsaukqcqscimok); eomcuogskessyicy: switch ($ywmkwiwkosakssii[Constants::mikumsayiwgkmoas]) { case Constants::eycwiessycciwsao: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto ogwwasqkaageiwwi; } if (!($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek)) { goto iicaisyekagswmey; } $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($igqsaukqcqscimok); iicaisyekagswmey: goto sosqgaswegsomgkw; ogwwasqkaageiwwi: $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($igqsaukqcqscimok); sosqgaswegsomgkw: goto isaacywgkascmcsw; case Constants::zmmsyimwiiaweocw: default: if ($igqsaukqcqscimok instanceof WP_Post || $ccamwkygaogkooek) { goto qiiqceousoicgeee; } if (!($igqsaukqcqscimok instanceof WP_Term || !$ccamwkygaogkooek)) { goto eiegguecasykwmyq; } $migiiksoiymissge = $awewoweukmqomqmi->yyykkcyiksewsoqy($igqsaukqcqscimok); eiegguecasykwmyq: goto iaywwgssaoecwmeg; qiiqceousoicgeee: $migiiksoiymissge = $wgkqagumoowawogg->yyykkcyiksewsoqy($igqsaukqcqscimok); iaywwgssaoecwmeg: } quiguyyimiqeqcwa: isaacywgkascmcsw: if ($migiiksoiymissge) { goto maeueeueqoywkiom; } $igqsaukqcqscimok = $meqocwsecsywiiqs; goto jyekikocgagcgywq; maeueeueqoywkiom: $igqsaukqcqscimok = $this->yuawgssgauywkiia($meqocwsecsywiiqs, $migiiksoiymissge, $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], $meqocwsecsywiiqs); jyekikocgagcgywq: qoiyiuoyamwimusy: $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; ogciikaecauiwgyk: } okawiaowosqickgq: $suuagcecoyuweoqk = implode($ywmkwiwkosakssii[Constants::gomimeqaqekuysya], $oammesyieqmwuwyi); uowiiyqmiaaaaoas: vokekoceocuskqsm: return $suuagcecoyuweoqk; } public function yoamscgeuweiugse($ewgwqamkygiqaawc, array $wwgucssaecqekuek = []) : string { return $this->uuccukgasskgimsq("\156\157\x73\x63\162\x69\160\164", $ewgwqamkygiqaawc, $wwgucssaecqekuek); } public function kqgwgkuykuumwcgw(string $nsmgceoqaqogqmuw, string $caacssaumiqeaoaw, ?string $aokagokqyuysuksm, string $koaqiaecmascwuyy) : string { $eouekqmooogkoqoo = "\43\x3c{$caacssaumiqeaoaw}\134\163\53\133\136\76\x5d\45\163\x2e\x2a\76\43\151\125"; if ($aokagokqyuysuksm) { goto ooykyoowougqkaso; } $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, ''); goto sckyiekoceuisqyq; ooykyoowougqkaso: $eouekqmooogkoqoo = sprintf($eouekqmooogkoqoo, "\53\x69\144\75\42" . $aokagokqyuysuksm . "\x22"); sckyiekoceuisqyq: $omseiokmycguuaoy = (string) preg_replace($eouekqmooogkoqoo, "{$koaqiaecmascwuyy}\x24\60", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto kusuakkwcuqkcqaw; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; kusuakkwcuqkcqaw: return $nsmgceoqaqogqmuw; } public function sggceaqggqqsqaoo(string $nsmgceoqaqogqmuw, string $miisqgccsqqcscia, string $koaqiaecmascwuyy) : string { $ukiaeyumokyqqwky = "\x3c\57{$miisqgccsqqcscia}\76"; $omseiokmycguuaoy = (string) preg_replace("\x23{$ukiaeyumokyqqwky}\x23\151\x55", "{$ukiaeyumokyqqwky}{$koaqiaecmascwuyy}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto sikckcmeiwmyakeu; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; sikckcmeiwmyakeu: return $nsmgceoqaqogqmuw; } public function cgeyeoimiuyogose(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $uqwgieuqagsgwqqy = "\x3c\57{$omwmuycmeqcqokom}\76"; $omseiokmycguuaoy = (string) preg_replace("\x23{$uqwgieuqagsgwqqy}\x23\x69\x55", "{$wcgsoqmmciswkmiq}{$uqwgieuqagsgwqqy}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto qaycycmeqkqcumog; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; qaycycmeqkqcumog: return $nsmgceoqaqogqmuw; } public function iukqsuaygeqgeieu(string $nsmgceoqaqogqmuw, string $omwmuycmeqcqokom, string $wcgsoqmmciswkmiq) : string { $omseiokmycguuaoy = (string) preg_replace("\x2f\74{$omwmuycmeqcqokom}\x5b\136\x3e\x5d\x2a\x3e\x2f\x69", "\x24\x30{$wcgsoqmmciswkmiq}", $nsmgceoqaqogqmuw, 1); if (empty($omseiokmycguuaoy)) { goto ikuwigsmisimaqoc; } $nsmgceoqaqogqmuw = $omseiokmycguuaoy; ikuwigsmisimaqoc: return $nsmgceoqaqogqmuw; } public function mqyacwaaocgcsyag(string $nsmgceoqaqogqmuw, string $scwiymciagumsuiw, array $siquossayskcwkea = []) : string { foreach ($siquossayskcwkea as $wisgiwskwawciiee => $eqgoocgaqwqcimie) { if (!preg_match("\176\x3c{$scwiymciagumsuiw}\x5c\x73\56\52\x3f{$wisgiwskwawciiee}\75\50\x5b\47\x22\135\51\176\x69", $nsmgceoqaqogqmuw)) { goto iyawqekeeawqkymm; } $nsmgceoqaqogqmuw = preg_replace("\176\x3c{$scwiymciagumsuiw}\x5c\x73\56\x2a\77{$wisgiwskwawciiee}\75\x28\x5b\47\42\x5d\x29\x7e\151", "\44\61\40" . $wisgiwskwawciiee . "\x3d\42" . $eqgoocgaqwqcimie . "\42\76", $nsmgceoqaqogqmuw); goto iumgcesksuawyuyo; iyawqekeeawqkymm: $nsmgceoqaqogqmuw = preg_replace("\x2f\50\74{$scwiymciagumsuiw}\x5c\142\x5b\136\76\x3c\135\x2a\51\76\x2f\x69", "\44\61\x20" . $wisgiwskwawciiee . "\x3d\42" . $eqgoocgaqwqcimie . "\x22\76", $nsmgceoqaqogqmuw); iumgcesksuawyuyo: yagscaikmmuagqcu: } sigukociqouigous: return $nsmgceoqaqogqmuw; } public function sawckkwcugsmokmi(string $yuumukkaswwoywya, array $egkakcquemweqoum) { $ekuqiqmikiicgoss = "{$yuumukkaswwoywya}\40\x7b"; foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!($oaukocmsckciqaok && $eqgoocgaqwqcimie)) { goto omyquyiguuaociwq; } $eqgoocgaqwqcimie = rtrim($eqgoocgaqwqcimie); $ekuqiqmikiicgoss .= "{$oaukocmsckciqaok}\x3a\x20{$eqgoocgaqwqcimie}\x3b"; omyquyiguuaociwq: qaqooueskgciuqgc: } qwosyqcomiosguoa: $ekuqiqmikiicgoss .= "\175"; return $ekuqiqmikiicgoss; } }
