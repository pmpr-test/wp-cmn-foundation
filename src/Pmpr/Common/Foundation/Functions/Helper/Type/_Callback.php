<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (!(is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq))) { goto esagiiawomyacuiw; } if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { goto gqimwsyemoewagcy; } $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (!method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { goto awgmegueeqeyqamu; } $ksaameoqigiaoigg = $ukuacigyikaisiwu; awgmegueeqeyqamu: goto aoaqwygkaagiuuws; gqimwsyemoewagcy: $ksaameoqigiaoigg = $qgciuiagkkguykgs; aoaqwygkaagiuuws: esagiiawomyacuiw: return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if (!($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs))) { goto maaisuqwkymeguys; } $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); maaisuqwkymeguys: return $sogksuscggsicmac; } }
