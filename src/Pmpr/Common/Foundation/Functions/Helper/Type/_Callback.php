<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853d170784             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Exception; class _Callback extends Common { public function myagqecycsaiyqsk($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs) : bool|string { $ksaameoqigiaoigg = false; if (is_string($cyaaeckqoeaqmkcq) || is_object($cyaaeckqoeaqmkcq)) { if (method_exists($cyaaeckqoeaqmkcq, $qgciuiagkkguykgs)) { $ksaameoqigiaoigg = $qgciuiagkkguykgs; } else { $ukuacigyikaisiwu = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble($qgciuiagkkguykgs); if (method_exists($cyaaeckqoeaqmkcq, $ukuacigyikaisiwu)) { $ksaameoqigiaoigg = $ukuacigyikaisiwu; } } } return $ksaameoqigiaoigg; } public function waquemyyiseosamm($mksyucucyswaukig, $qgciuiagkkguykgs, ...$ywmkwiwkosakssii) : mixed { $sogksuscggsicmac = ''; if ($qgciuiagkkguykgs = $this->myagqecycsaiyqsk($mksyucucyswaukig, $qgciuiagkkguykgs)) { $sogksuscggsicmac = $mksyucucyswaukig->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); } return $sogksuscggsicmac; } public function qqoqcyiesoksueqy($ekiuyucoiagmscgy, ...$ywmkwiwkosakssii) : string { ob_start(); $ekiuyucoiagmscgy(...$ywmkwiwkosakssii); return (string) ob_get_clean(); } public function oeowmqwauagmkkwu(string $amcuekkyuiqgieyu, int $aiggggeywsigckms, $ekiuyucoiagmscgy, ...$ywmkwiwkosakssii) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $gsugiokagkeswkwi = (int) $qkqgcaykemoiecma->get($amcuekkyuiqgieyu, 0); if ($aiggggeywsigckms !== $gsugiokagkeswkwi) { $qkqgcaykemoiecma->update($amcuekkyuiqgieyu, $aiggggeywsigckms); try { $ekiuyucoiagmscgy(...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $qkqgcaykemoiecma->delete($amcuekkyuiqgieyu); } } } }
