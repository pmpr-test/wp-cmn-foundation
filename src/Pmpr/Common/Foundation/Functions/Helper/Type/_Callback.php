<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto ogaqcigmoyoqcsws; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto kkoukeoyauekomau; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto qogyssukouuesqis; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; qogyssukouuesqis: goto wgeqwaisweikegck; kkoukeoyauekomau: $ksaameoqigiaoigg = $qgciuiagkkguykgs; wgeqwaisweikegck: ogaqcigmoyoqcsws: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto egmauuemqqqqsgic; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); egmauuemqqqqsgic: return $sogksuscggsicmac; } }
