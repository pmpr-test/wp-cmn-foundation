<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto sqkmkmcmocigewua; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto ikoaokuwokyiigsu; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto gqwcuusyiggisuok; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; gqwcuusyiggisuok: goto aouauysuwimgygie; ikoaokuwokyiigsu: $ksaameoqigiaoigg = $qgciuiagkkguykgs; aouauysuwimgygie: sqkmkmcmocigewua: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto kquqgyygaeiwkeko; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); kquqgyygaeiwkeko: return $sogksuscggsicmac; } }
