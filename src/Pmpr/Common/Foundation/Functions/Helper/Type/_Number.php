<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Random\RandomException; class _Number extends Common { const yyyiuswcwcqwaomi = ['' => 900, "\x4b" => 900000, "\x4d" => 900000000, "\x42" => 900000000000, "\124" => 90000000000000]; const ukmskqwcykyqumqi = "\x39\60\60\124\53"; public function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\x2c") : string { return number_format($eqgoocgaqwqcimie, 0, "\56", $geqcesmqwkeayoiu); } public function cgiuyygugaoiwaqk($eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string { $agikakqqswiwaqgc = [__("\102", PR__CMN__FOUNDATION), __("\113\x42", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION), __("\124\x42", PR__CMN__FOUNDATION)]; $ugkymqicywakcemw = 1024; $ciyackuwsqkoqese = 0; wygeysociiyqokyk: if (!($eqgoocgaqwqcimie > $ugkymqicywakcemw)) { goto yqywgkymmowyggqa; } $eqgoocgaqwqcimie /= $ugkymqicywakcemw; oogmmeccymcuwwac: $ciyackuwsqkoqese++; goto wygeysociiyqokyk; yqywgkymmowyggqa: return round($eqgoocgaqwqcimie, 2) . "\x20" . $agikakqqswiwaqgc[$ciyackuwsqkoqese]; } public function readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) : string { $sogksuscggsicmac = self::ukmskqwcykyqumqi; if (!$eqgoocgaqwqcimie) { goto oguigickaoqigcoi; } foreach (self::yyyiuswcwcqwaomi as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) { if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) { goto ccqagygkoaagksyw; } $sogksuscggsicmac = $this->format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq); goto qyguqmkmyqeyqaac; ccqagygkoaagksyw: igeoagaweewiscas: } qyguqmkmyqeyqaac: oguigickaoqigcoi: return $sogksuscggsicmac; } public function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false) { $xgwukwqqaseqagay = 0; if (!($uuwmqqqiwksuaise > 0)) { goto akieyasekuwqeugc; } $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100; if (!$wigsqawwsmugmmcg) { goto qmugciukukckmeiu; } $xgwukwqqaseqagay = round($xgwukwqqaseqagay); qmugciukukckmeiu: akieyasekuwqeugc: return $xgwukwqqaseqagay; } public function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array { $ygmmaywsqqycaaok = []; if ($eokscgekqusgueqm) { goto sqkmkmcmocigewua; } $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu); goto kquqgyygaeiwkeko; sqkmkmcmocigewua: foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) { if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess === 0 || $eusockqasqqmoess % $eokscgekqusgueqm === 0))) { goto aouauysuwimgygie; } $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess; aouauysuwimgygie: ikoaokuwokyiigsu: } gqwcuusyiggisuok: kquqgyygaeiwkeko: return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok); } protected function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string { $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::yyyiuswcwcqwaomi['']), $cmyiqqsaoiwgqcay); $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\x2e") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\56"); return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq; } public function owsaaggskwmeemog(int $mwsawgusoeygascy, int $giqggecqqikcysgq) : int { try { $iukyueweicuocgow = random_int($mwsawgusoeygascy, $giqggecqqikcysgq); } catch (Exception $iewosgggaueeyymg) { $iukyueweicuocgow = rand($mwsawgusoeygascy, $giqggecqqikcysgq); } return $iukyueweicuocgow; } }
