<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574c05515f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Random\RandomException; class _Number extends Common { const yyyiuswcwcqwaomi = ['' => 900, "\113" => 900000, "\115" => 900000000, "\x42" => 900000000000, "\124" => 90000000000000]; const ukmskqwcykyqumqi = "\x39\x30\60\124\53"; public function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\x2c") : string { if (!is_float($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = (float) $eqgoocgaqwqcimie; } return number_format($eqgoocgaqwqcimie, 0, "\56", $geqcesmqwkeayoiu); } public function cgiuyygugaoiwaqk($eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string { $agikakqqswiwaqgc = [__("\102", PR__CMN__FOUNDATION), __("\x4b\102", PR__CMN__FOUNDATION), __("\115\102", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION), __("\x54\x42", PR__CMN__FOUNDATION)]; $ugkymqicywakcemw = 1024; for ($ciyackuwsqkoqese = 0; $eqgoocgaqwqcimie > $ugkymqicywakcemw; $ciyackuwsqkoqese++) { $eqgoocgaqwqcimie /= $ugkymqicywakcemw; } return round($eqgoocgaqwqcimie, 2) . "\40" . $agikakqqswiwaqgc[$ciyackuwsqkoqese]; } public function readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) : string { $sogksuscggsicmac = self::ukmskqwcykyqumqi; if ($eqgoocgaqwqcimie) { foreach (self::yyyiuswcwcqwaomi as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) { if ($eqgoocgaqwqcimie < $aoqagsqecokqqwqg) { $sogksuscggsicmac = $this->format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq); break; } } } return $sogksuscggsicmac; } public function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false) { $xgwukwqqaseqagay = 0; if ($uuwmqqqiwksuaise > 0) { $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100; if ($wigsqawwsmugmmcg) { $xgwukwqqaseqagay = round($xgwukwqqaseqagay); } } return $xgwukwqqaseqagay; } public function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array { $ygmmaywsqqycaaok = []; if ($eokscgekqusgueqm) { foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) { if ($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess === 0 || $eusockqasqqmoess % $eokscgekqusgueqm === 0)) { $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess; } } } else { $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu); } return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok); } protected function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string { $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::yyyiuswcwcqwaomi['']), $cmyiqqsaoiwgqcay); $eeiemcwqoeiqskis = !str_contains($sgsmkeiowiwiqkuc, "\x2e") ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\60"), "\56"); return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq; } public function owsaaggskwmeemog(int $mwsawgusoeygascy, int $giqggecqqikcysgq) : int { try { $iukyueweicuocgow = random_int($mwsawgusoeygascy, $giqggecqqikcysgq); } catch (Exception $iewosgggaueeyymg) { $iukyueweicuocgow = rand($mwsawgusoeygascy, $giqggecqqikcysgq); } return $iukyueweicuocgow; } }
