<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Random\RandomException; class _Number extends Common { const yyyiuswcwcqwaomi = ['' => 900, "\x4b" => 900000, "\x4d" => 900000000, "\102" => 900000000000, "\124" => 90000000000000]; const ukmskqwcykyqumqi = "\x39\x30\60\124\x2b"; public function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\54") : string { return number_format($eqgoocgaqwqcimie, 0, "\56", $geqcesmqwkeayoiu); } public function cgiuyygugaoiwaqk($eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string { $agikakqqswiwaqgc = [__("\x42", PR__CMN__FOUNDATION), __("\x4b\x42", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\x47\102", PR__CMN__FOUNDATION), __("\124\102", PR__CMN__FOUNDATION)]; $ugkymqicywakcemw = 1024; $ciyackuwsqkoqese = 0; gkiswiyesyseqgyi: if (!($eqgoocgaqwqcimie > $ugkymqicywakcemw)) { goto mmmaegqwqsqomcso; } $eqgoocgaqwqcimie /= $ugkymqicywakcemw; yakgkywayukuuoeo: $ciyackuwsqkoqese++; goto gkiswiyesyseqgyi; mmmaegqwqsqomcso: return round($eqgoocgaqwqcimie, 2) . "\40" . $agikakqqswiwaqgc[$ciyackuwsqkoqese]; } public function readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) : string { $sogksuscggsicmac = self::ukmskqwcykyqumqi; if (!$eqgoocgaqwqcimie) { goto ikccqyauagueyquo; } foreach (self::yyyiuswcwcqwaomi as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) { if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) { goto wwsimimccosesome; } $sogksuscggsicmac = $this->format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq); goto mwqgcamgeuigkmag; wwsimimccosesome: psgawyoyqymeaqmg: } mwqgcamgeuigkmag: ikccqyauagueyquo: return $sogksuscggsicmac; } public function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false) { $xgwukwqqaseqagay = 0; if (!($uuwmqqqiwksuaise > 0)) { goto eiwsqkiauqoseceu; } $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100; if (!$wigsqawwsmugmmcg) { goto wmgwiaksugguumki; } $xgwukwqqaseqagay = round($xgwukwqqaseqagay); wmgwiaksugguumki: eiwsqkiauqoseceu: return $xgwukwqqaseqagay; } public function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array { $ygmmaywsqqycaaok = []; if ($eokscgekqusgueqm) { goto qcmugwqioeggciuq; } $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu); goto iimgquoiiseikqug; qcmugwqioeggciuq: foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) { if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess === 0 || $eusockqasqqmoess % $eokscgekqusgueqm === 0))) { goto emcwccgymecyuwog; } $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess; emcwccgymecyuwog: ycwuaycumimegeaw: } meuauqksicgeyqci: iimgquoiiseikqug: return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok); } protected function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string { $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::yyyiuswcwcqwaomi['']), $cmyiqqsaoiwgqcay); $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\56") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\60"), "\56"); return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq; } public function owsaaggskwmeemog(int $mwsawgusoeygascy, int $giqggecqqikcysgq) : int { try { $iukyueweicuocgow = random_int($mwsawgusoeygascy, $giqggecqqikcysgq); } catch (Exception $iewosgggaueeyymg) { $iukyueweicuocgow = rand($mwsawgusoeygascy, $giqggecqqikcysgq); } return $iukyueweicuocgow; } }
