<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b6ff7ddcde4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Notice; use Pmpr\Common\Foundation\Container\Container; class Notice extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_notices', [$this, 'eawcaummgcccoeoq']); $this->waqewsckuayqguos('render_notices', [$this, 'qoysmkcmgoqmaoso'], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('get_notices', [$this, 'gmkeeackegqamuga'], 10, 3); } public function eawcaummgcccoeoq() { $kqcksmigkuesqqmc = $this->caokeucsksukesyo()->kwoycoqogoswycgg(); if ($kqcksmigkuesqqmc->qckwuesaysuoqcuk()) { if ($goyemikogeuskgas = $kqcksmigkuesqqmc->kasiqqyyaswsgics()) { foreach ($goyemikogeuskgas as $ycyucwoysmwkgiui) { $kqcksmigkuesqqmc->render($ycyucwoysmwkgiui); } $kqcksmigkuesqqmc->clear(); } } } public function qoysmkcmgoqmaoso($aokagokqyuysuksm = '', $ywmkwiwkosakssii = []) { echo $this->gmkeeackegqamuga('', $aokagokqyuysuksm, $ywmkwiwkosakssii); } public function gmkeeackegqamuga($goyemikogeuskgas, $aokagokqyuysuksm, $ywmkwiwkosakssii = []) { $ycyucwoysmwkgiui = ''; $kqcksmigkuesqqmc = $this->caokeucsksukesyo()->kwoycoqogoswycgg(); if ($aokagokqyuysuksm) { $igqsaukqcqscimok = $kqcksmigkuesqqmc->get($aokagokqyuysuksm); if ($igqsaukqcqscimok) { $ycyucwoysmwkgiui = $kqcksmigkuesqqmc->generate(array_merge($igqsaukqcqscimok, $ywmkwiwkosakssii)); $kqcksmigkuesqqmc->remove($aokagokqyuysuksm); } } else { if ($coyuqomgwooyucwo = $kqcksmigkuesqqmc->kasiqqyyaswsgics()) { foreach ($coyuqomgwooyucwo as $igqsaukqcqscimok) { $ycyucwoysmwkgiui .= $kqcksmigkuesqqmc->generate(array_merge($igqsaukqcqscimok, $ywmkwiwkosakssii)); } $kqcksmigkuesqqmc->clear(); } } if ($ycyucwoysmwkgiui) { if (is_array($goyemikogeuskgas)) { $goyemikogeuskgas[] = $ycyucwoysmwkgiui; } else { $goyemikogeuskgas .= $ycyucwoysmwkgiui; } } return $goyemikogeuskgas; } }
