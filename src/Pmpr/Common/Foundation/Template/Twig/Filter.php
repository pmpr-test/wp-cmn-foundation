<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d02dc932c3d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig; class Filter extends Callback { public function mameiwsayuyquoeq() { $this->ewcsyqaaigkicgse('add_twig_filters', $this->yyyewgugioamwckw()); $this->aqiicausqkomqkqy(); $this->ugugagoguiycqeys(); $this->mseykiqqcmyesccu(); $this->eeoeyakoiycwiuoa(); } private function aqiicausqkomqkqy() { $this->yyyewgugioamwckw()->kgaogakmeumeqaew('ksort', function ($uomewyckeuqoqocu, $amcumcomgyqsuymk = null) { if (ksort($uomewyckeuqoqocu, $amcumcomgyqsuymk)) { return $uomewyckeuqoqocu; } return []; }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('preg_replace', function ($iosuwkkwwioumeqg, $eouekqmooogkoqoo, $oqcammciwimcumac) { return preg_replace($eouekqmooogkoqoo, $oqcammciwimcumac, $iosuwkkwwioumeqg); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('str_split', function ($sociqikgoyemqaac, $ykiwomimkkuiigoq = 1) { return str_split($sociqikgoyemqaac, $ykiwomimkkuiigoq); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('rawurldecode', function ($eqgoocgaqwqcimie) { return rawurldecode($eqgoocgaqwqcimie); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('filter', function ($uomewyckeuqoqocu) { return array_filter($uomewyckeuqoqocu); }); } private function ugugagoguiycqeys() { $this->yyyewgugioamwckw()->kgaogakmeumeqaew('mm2px', function ($oioeiiuosyygeowy) { return $oioeiiuosyygeowy * 3.78 . 'px'; }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('number', function ($eusockqasqqmoess, $locale = 'fa') { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eusockqasqqmoess, $locale); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('sortby', function ($uomewyckeuqoqocu, $igaagwuyasawwqms = Constants::PRIMARY) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($uomewyckeuqoqocu, $igaagwuyasawwqms); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('call', function ($mksyucucyswaukig, $qgciuiagkkguykgs = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = null; if (is_object($mksyucucyswaukig) && $qgciuiagkkguykgs) { if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs)) { $ksaameoqigiaoigg = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); } } else { if (is_callable($mksyucucyswaukig)) { if (is_array($qgciuiagkkguykgs)) { $ksaameoqigiaoigg = $mksyucucyswaukig(...$qgciuiagkkguykgs); } else { $ksaameoqigiaoigg = $mksyucucyswaukig(); } } } return $ksaameoqigiaoigg; }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('generate_hook', function ($ymqmyyeuycgmigyo, $ykuqcwwmuyqmkisq = true, $quowyokcwswmuois = null) { return $this->ygyygikyocoymgaw($ymqmyyeuycgmigyo, $ykuqcwwmuyqmkisq, $quowyokcwswmuois); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('instanceof', function ($eqgoocgaqwqcimie, $sqeykgyoooqysmca = 'string') { return 'null' === $sqeykgyoooqysmca && null === $eqgoocgaqwqcimie || function_exists($imacmeoaiyywkewm = 'is_' . $sqeykgyoooqysmca) && $imacmeoaiyywkewm($eqgoocgaqwqcimie) || $eqgoocgaqwqcimie instanceof $sqeykgyoooqysmca; }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('money', function ($eusockqasqqmoess, $locale = 'fa') { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->aoaesiikusqamcqc($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->uwwmyomsqkoaqawa($eusockqasqqmoess), $locale); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('value', function ($uomewyckeuqoqocu = [], $uusmaiomayssaecw = null) { $eqgoocgaqwqcimie = null; if (is_array($uomewyckeuqoqocu) && isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; } return $eqgoocgaqwqcimie; }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('parse_attrs', function ($siquossayskcwkea, $qguugmaqaucgueiu = []) { if ($qguugmaqaucgueiu && is_array($qguugmaqaucgueiu) && is_array($siquossayskcwkea)) { $siquossayskcwkea = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($qguugmaqaucgueiu, $siquossayskcwkea); } return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('datetime', function ($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa = null, $locale = null) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $locale); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('namespace', function ($sociqikgoyemqaac) { return str_replace('\\', '\\\\', $sociqikgoyemqaac); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('sort_by_length', function ($uomewyckeuqoqocu, $giqggecqqikcysgq, $oaukocmsckciqaok = null) { $aqykuigiuwmmcieu = []; $umkqoiwcgmmkeagy = []; if ($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu) && is_int($giqggecqqikcysgq)) { $couiucmsqaieciue = []; $umkqoiwcgmmkeagy = array_values($uomewyckeuqoqocu); $gaeqamemwmwsyukm = count($uomewyckeuqoqocu); $momcykaoccoymeig = 0; $yeacayasgueouoqc = $giqggecqqikcysgq; $kgcswwyywoscuqqs = 1; while ($momcykaoccoymeig < $gaeqamemwmwsyukm) { if ($umkqoiwcgmmkeagy) { if (count($couiucmsqaieciue) >= count($umkqoiwcgmmkeagy)) { $yeacayasgueouoqc = $giqggecqqikcysgq; $couiucmsqaieciue = []; $kgcswwyywoscuqqs++; } [$uusmaiomayssaecw, $eqgoocgaqwqcimie] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->oooekmcokooqkcgg($umkqoiwcgmmkeagy, $oaukocmsckciqaok, $couiucmsqaieciue); if ($eqgoocgaqwqcimie) { if ($this->igyuegiiaqkymuka($eqgoocgaqwqcimie, $yeacayasgueouoqc, $giqggecqqikcysgq, $oaukocmsckciqaok)) { $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $umkqoiwcgmmkeagy[$uusmaiomayssaecw]; unset($umkqoiwcgmmkeagy[$uusmaiomayssaecw]); $yeacayasgueouoqc -= 3; $momcykaoccoymeig++; } else { $couiucmsqaieciue[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } } else { $yeacayasgueouoqc = $giqggecqqikcysgq; $kgcswwyywoscuqqs++; } } else { break; } } } if ($aqykuigiuwmmcieu && $umkqoiwcgmmkeagy) { $aqykuigiuwmmcieu = $aqykuigiuwmmcieu + $umkqoiwcgmmkeagy; } else { if ($umkqoiwcgmmkeagy) { $aqykuigiuwmmcieu = $umkqoiwcgmmkeagy; } } if (!$aqykuigiuwmmcieu || count($aqykuigiuwmmcieu) !== count($uomewyckeuqoqocu)) { $aqykuigiuwmmcieu = $uomewyckeuqoqocu; } return $aqykuigiuwmmcieu; }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('random', function ($uomewyckeuqoqocu) { return $uomewyckeuqoqocu[array_rand($uomewyckeuqoqocu)]; }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('short_number', function ($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('add', function ($uomewyckeuqoqocu = [], $uusmaiomayssaecw = null, $eqgoocgaqwqcimie = null, $kskgqoywkoawosao = true) { if ($kskgqoywkoawosao) { if (is_array($uusmaiomayssaecw)) { $uomewyckeuqoqocu = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($uomewyckeuqoqocu, $uusmaiomayssaecw); } else { if (is_array($uomewyckeuqoqocu)) { $uomewyckeuqoqocu = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } else { $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } } } return $uomewyckeuqoqocu; }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('wp_query', function ($oaukocmsckciqaok) { $this->caokeucsksukesyo()->owicscwgeuqcqaig()->qooeaookuemoqecm($oaukocmsckciqaok); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('is_html', function ($sociqikgoyemqaac, $kqywgoqsmuswammk = null) { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('time_ago', function ($cqgoimumaewouews) { return $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->ikuqieqosemkwuio($cqgoimumaewouews); }); } public function mseykiqqcmyesccu() { $this->yyyewgugioamwckw()->kgaogakmeumeqaew('woo_price', function ($aumscagymwyyicag, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii); }); } private function eeoeyakoiycwiuoa() { $this->yyyewgugioamwckw()->kgaogakmeumeqaew('esc_attr', function ($sociqikgoyemqaac) { return esc_attr($sociqikgoyemqaac); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('esc_html', function ($sociqikgoyemqaac) { return esc_html($sociqikgoyemqaac); }); $this->yyyewgugioamwckw()->kgaogakmeumeqaew('esc_url', function ($eeamcawaiqocomwy, $wmiuawgiayqiuqok = null, $_context = 'display') { return esc_url($eeamcawaiqocomwy, $wmiuawgiayqiuqok, $_context); }); } private function igyuegiiaqkymuka($eqgoocgaqwqcimie, &$mwuwcsieauaqecae, $giqggecqqikcysgq, $oaukocmsckciqaok) { if (is_object($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; } if (is_string($eqgoocgaqwqcimie)) { $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if ($ykiwomimkkuiigoq > $giqggecqqikcysgq && $mwuwcsieauaqecae == $giqggecqqikcysgq) { return true; } if ($ykiwomimkkuiigoq <= $mwuwcsieauaqecae) { $mwuwcsieauaqecae -= $ykiwomimkkuiigoq; return true; } } return false; } }
