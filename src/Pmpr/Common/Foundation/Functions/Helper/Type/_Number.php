<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d83a968b15             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Random\RandomException; class _Number extends Common { const yyyiuswcwcqwaomi = ['' => 900, "\x4b" => 900000, "\x4d" => 900000000, "\102" => 900000000000, "\124" => 90000000000000]; const ukmskqwcykyqumqi = "\71\x30\x30\124\53"; public function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\54") : string { return number_format($eqgoocgaqwqcimie, 0, "\56", $geqcesmqwkeayoiu); } public function cgiuyygugaoiwaqk($eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string { $agikakqqswiwaqgc = [__("\102", PR__CMN__FOUNDATION), __("\113\102", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\107\x42", PR__CMN__FOUNDATION), __("\124\102", PR__CMN__FOUNDATION)]; $ugkymqicywakcemw = 1024; for ($ciyackuwsqkoqese = 0; $eqgoocgaqwqcimie > $ugkymqicywakcemw; $ciyackuwsqkoqese++) { $eqgoocgaqwqcimie /= $ugkymqicywakcemw; } return round($eqgoocgaqwqcimie, 2) . "\40" . $agikakqqswiwaqgc[$ciyackuwsqkoqese]; } public function readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) : string { $sogksuscggsicmac = self::ukmskqwcykyqumqi; if ($eqgoocgaqwqcimie) { foreach (self::yyyiuswcwcqwaomi as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) { if ($eqgoocgaqwqcimie < $aoqagsqecokqqwqg) { $sogksuscggsicmac = $this->format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq); break; } } } return $sogksuscggsicmac; } public function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false) { $xgwukwqqaseqagay = 0; if ($uuwmqqqiwksuaise > 0) { $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100; if ($wigsqawwsmugmmcg) { $xgwukwqqaseqagay = round($xgwukwqqaseqagay); } } return $xgwukwqqaseqagay; } public function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array { $ygmmaywsqqycaaok = []; if ($eokscgekqusgueqm) { foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) { if ($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess === 0 || $eusockqasqqmoess % $eokscgekqusgueqm === 0)) { $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess; } } } else { $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu); } return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok); } protected function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string { $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::yyyiuswcwcqwaomi['']), $cmyiqqsaoiwgqcay); $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\56") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\x2e"); return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq; } public function owsaaggskwmeemog(int $mwsawgusoeygascy, int $giqggecqqikcysgq) : int { try { $iukyueweicuocgow = random_int($mwsawgusoeygascy, $giqggecqqikcysgq); } catch (Exception $iewosgggaueeyymg) { $iukyueweicuocgow = rand($mwsawgusoeygascy, $giqggecqqikcysgq); } return $iukyueweicuocgow; } }
