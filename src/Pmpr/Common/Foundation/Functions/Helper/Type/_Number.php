<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; use Random\RandomException; class _Number extends Common { const yyyiuswcwcqwaomi = ['' => 900, "\113" => 900000, "\115" => 900000000, "\x42" => 900000000000, "\x54" => 90000000000000]; const ukmskqwcykyqumqi = "\71\x30\60\124\53"; public function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\x2c") : string { return number_format($eqgoocgaqwqcimie, 0, "\x2e", $geqcesmqwkeayoiu); } public function cgiuyygugaoiwaqk($eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string { $agikakqqswiwaqgc = [__("\x42", PR__CMN__FOUNDATION), __("\x4b\x42", PR__CMN__FOUNDATION), __("\x4d\102", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION), __("\124\x42", PR__CMN__FOUNDATION)]; $ugkymqicywakcemw = 1024; $ciyackuwsqkoqese = 0; umgmikwiqagosokm: if (!($eqgoocgaqwqcimie > $ugkymqicywakcemw)) { goto ayqwqcgquogagmsc; } $eqgoocgaqwqcimie /= $ugkymqicywakcemw; cwcoqyuoyckuuios: $ciyackuwsqkoqese++; goto umgmikwiqagosokm; ayqwqcgquogagmsc: return round($eqgoocgaqwqcimie, 2) . "\x20" . $agikakqqswiwaqgc[$ciyackuwsqkoqese]; } public function readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) : string { $sogksuscggsicmac = self::ukmskqwcykyqumqi; if (!$eqgoocgaqwqcimie) { goto smuqqgosmeymscwo; } foreach (self::yyyiuswcwcqwaomi as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) { if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) { goto ukkkayewayqiekce; } $sogksuscggsicmac = $this->format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq); goto ikiwqgmciageamia; ukkkayewayqiekce: syaimiaogoukoqaa: } ikiwqgmciageamia: smuqqgosmeymscwo: return $sogksuscggsicmac; } public function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false) { $xgwukwqqaseqagay = 0; if (!($uuwmqqqiwksuaise > 0)) { goto gqqeucaekwcskwqm; } $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100; if (!$wigsqawwsmugmmcg) { goto micgaswksmmkmgkq; } $xgwukwqqaseqagay = round($xgwukwqqaseqagay); micgaswksmmkmgkq: gqqeucaekwcskwqm: return $xgwukwqqaseqagay; } public function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array { $ygmmaywsqqycaaok = []; if ($eokscgekqusgueqm) { goto ukgemiyqimumoyoa; } $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu); goto miocgmmkkkksmisy; ukgemiyqimumoyoa: foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) { if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess === 0 || $eusockqasqqmoess % $eokscgekqusgueqm === 0))) { goto gyyuyqcmmcsoemkc; } $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess; gyyuyqcmmcsoemkc: uegaqgayeaugeoim: } ikaweoguqucoaegy: miocgmmkkkksmisy: return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok); } protected function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string { $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::yyyiuswcwcqwaomi['']), $cmyiqqsaoiwgqcay); $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\x2e") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\60"), "\56"); return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq; } public function owsaaggskwmeemog(int $mwsawgusoeygascy, int $giqggecqqikcysgq) : int { try { $iukyueweicuocgow = random_int($mwsawgusoeygascy, $giqggecqqikcysgq); } catch (Exception $iewosgggaueeyymg) { $iukyueweicuocgow = rand($mwsawgusoeygascy, $giqggecqqikcysgq); } return $iukyueweicuocgow; } }
