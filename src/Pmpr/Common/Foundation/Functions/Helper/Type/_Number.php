<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Random\RandomException; class _Number extends Common { const yyyiuswcwcqwaomi = ['' => 900, "\113" => 900000, "\115" => 900000000, "\102" => 900000000000, "\x54" => 90000000000000]; const ukmskqwcykyqumqi = "\x39\60\60\124\53"; public function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\54") : string { return number_format($eqgoocgaqwqcimie, 0, "\x2e", $geqcesmqwkeayoiu); } public function cgiuyygugaoiwaqk($eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string { $agikakqqswiwaqgc = [__("\102", PR__CMN__FOUNDATION), __("\113\102", PR__CMN__FOUNDATION), __("\x4d\x42", PR__CMN__FOUNDATION), __("\107\x42", PR__CMN__FOUNDATION), __("\124\x42", PR__CMN__FOUNDATION)]; $ugkymqicywakcemw = 1024; $ciyackuwsqkoqese = 0; yakgkywayukuuoeo: if (!($eqgoocgaqwqcimie > $ugkymqicywakcemw)) { goto uymqegkssemcqegk; } $eqgoocgaqwqcimie /= $ugkymqicywakcemw; mmmaegqwqsqomcso: $ciyackuwsqkoqese++; goto yakgkywayukuuoeo; uymqegkssemcqegk: return round($eqgoocgaqwqcimie, 2) . "\x20" . $agikakqqswiwaqgc[$ciyackuwsqkoqese]; } public function readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) : string { $sogksuscggsicmac = self::ukmskqwcykyqumqi; if (!$eqgoocgaqwqcimie) { goto wwsimimccosesome; } foreach (self::yyyiuswcwcqwaomi as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) { if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) { goto psgawyoyqymeaqmg; } $sogksuscggsicmac = $this->format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq); goto gkiswiyesyseqgyi; psgawyoyqymeaqmg: mwqgcamgeuigkmag: } gkiswiyesyseqgyi: wwsimimccosesome: return $sogksuscggsicmac; } public function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false) { $xgwukwqqaseqagay = 0; if (!($uuwmqqqiwksuaise > 0)) { goto wmgwiaksugguumki; } $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100; if (!$wigsqawwsmugmmcg) { goto ikccqyauagueyquo; } $xgwukwqqaseqagay = round($xgwukwqqaseqagay); ikccqyauagueyquo: wmgwiaksugguumki: return $xgwukwqqaseqagay; } public function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array { $ygmmaywsqqycaaok = []; if ($eokscgekqusgueqm) { goto emcwccgymecyuwog; } $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu); goto qcmugwqioeggciuq; emcwccgymecyuwog: foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) { if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess === 0 || $eusockqasqqmoess % $eokscgekqusgueqm === 0))) { goto ycwuaycumimegeaw; } $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess; ycwuaycumimegeaw: meuauqksicgeyqci: } eiwsqkiauqoseceu: qcmugwqioeggciuq: return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok); } protected function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string { $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::yyyiuswcwcqwaomi['']), $cmyiqqsaoiwgqcay); $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\56") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\x2e"); return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq; } public function owsaaggskwmeemog(int $mwsawgusoeygascy, int $giqggecqqikcysgq) : int { try { $iukyueweicuocgow = random_int($mwsawgusoeygascy, $giqggecqqikcysgq); } catch (Exception $iewosgggaueeyymg) { $iukyueweicuocgow = rand($mwsawgusoeygascy, $giqggecqqikcysgq); } return $iukyueweicuocgow; } }
