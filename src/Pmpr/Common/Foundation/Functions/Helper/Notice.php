<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67522a8f9030b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Interfaces\Constants; class Notice extends Common { const akgmaoggceagomqq = "\160\x6d\160\x72\137\x6e\157\x74\151\x63\145\x5f\155\x65\163\163\x61\x67\145\x73\137\154\151\x73\164"; public function waumkquuqekmqeae($wksoawcgagcgoask, ?string $aokagokqyuysuksm, bool $sywokgmoskcocqgy = true) { $ycyucwoysmwkgiui = ''; if ($aokagokqyuysuksm) { $qmwoykgeiicumeiw = null; if (is_object($wksoawcgagcgoask) || class_exists($wksoawcgagcgoask)) { $qmwoykgeiicumeiw = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($wksoawcgagcgoask); } if ($qmwoykgeiicumeiw && is_string($qmwoykgeiicumeiw)) { $aokagokqyuysuksm .= "\55{$qmwoykgeiicumeiw}"; } $ycyucwoysmwkgiui = $this->get($aokagokqyuysuksm); if ($sywokgmoskcocqgy) { $ycyucwoysmwkgiui = $this->generate($ycyucwoysmwkgiui); } $this->remove($aokagokqyuysuksm); } return $ycyucwoysmwkgiui; } public function gsucycggaoeuokcg($wksoawcgagcgoask, $aokagokqyuysuksm, $egsumesakcaaukem, $mkomwsiykqigmqca) { $aokagokqyuysuksm .= "\x2d\x77\x72\x69\164\151\x6e\147\55\x70\x65\x72\x6d\151\x73\163\151\157\156"; $uamcoiueqaamsqma = sprintf("\x25\163\74\142\162\76\x25\x73", sprintf(__("\45\x73\x20\x63\x61\156\156\157\x74\x20\143\157\x6e\x66\x69\x67\165\162\x65\x20\x69\x74\163\x65\154\x66\40\x64\x75\x65\40\x74\x6f\x20\x6d\x69\163\x73\x69\156\x67\x20\167\162\151\x74\x69\x6e\147\40\160\145\162\x6d\x69\163\163\x69\157\156\163\x2e", PR__CMN__FOUNDATION), $egsumesakcaaukem), sprintf(__("\x41\x66\146\145\x63\164\145\x64\40\x66\151\x6c\x65\72\x20\x25\163", PR__CMN__FOUNDATION), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x63\x6f\144\x65", [], $mkomwsiykqigmqca))); $this->oiugciyawoeieace($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm); } public function goouywsgcekeeccu($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm, string $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg, bool $yuwymayicwwqiske = true) { if ($uamcoiueqaamsqma) { $this->eiegqsqqokkueycw([Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm], $wksoawcgagcgoask, $yuwymayicwwqiske); } } public function oiugciyawoeieace($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm, string $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg, bool $yuwymayicwwqiske = true) { if ($uamcoiueqaamsqma) { $this->eiegqsqqokkueycw([Constants::ucmueuwwcmocgmig => Constants::gewmeskawiqikkoc, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm], $wksoawcgagcgoask, $yuwymayicwwqiske); } } public function render($ywmkwiwkosakssii = []) { echo $this->generate($ywmkwiwkosakssii); } public function generate($ywmkwiwkosakssii = []) : ?string { $ycyucwoysmwkgiui = null; if ($this->qckwuesaysuoqcuk()) { if ($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $ycyucwoysmwkgiui = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy([Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::squoamkioomemiyi => $iqaosyayeiuaisqi, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); } } return $ycyucwoysmwkgiui; } public function has($aokagokqyuysuksm) : bool { return !empty($this->get($aokagokqyuysuksm)); } public function remove($aokagokqyuysuksm) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); if ($goyemikogeuskgas) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($goyemikogeuskgas, $aokagokqyuysuksm); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); } else { $this->ycasmmgsmaaumweg($goyemikogeuskgas); } } } public function clear() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->smqukgcyacswysqa(self::akgmaoggceagomqq); } else { $this->ycasmmgsmaaumweg([]); } } public function kasiqqyyaswsgics() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $goyemikogeuskgas = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::akgmaoggceagomqq); } else { $goyemikogeuskgas = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(self::akgmaoggceagomqq, []); if ($goyemikogeuskgas && is_string($goyemikogeuskgas)) { try { $goyemikogeuskgas = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($goyemikogeuskgas); } catch (Exception $iewosgggaueeyymg) { $goyemikogeuskgas = []; } } } if (!is_array($goyemikogeuskgas)) { $goyemikogeuskgas = []; } return $goyemikogeuskgas; } public function qckwuesaysuoqcuk() : bool { return !$this->cmaecekuqkwmemms("\x50\122\137\104\111\123\101\102\x4c\105\137\116\x4f\x54\x49\x43\x45", false); } private function eiegqsqqokkueycw(array $ywmkwiwkosakssii = [], $wksoawcgagcgoask = null, bool $yuwymayicwwqiske = true) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '']); $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($wksoawcgagcgoask); $qmwoykgeiicumeiw = $wksoawcgagcgoask instanceof Component ? $wksoawcgagcgoask->aakmagwggmkoiiyu() : $wksoawcgagcgoask; $uocagekiukksqoee = $wksoawcgagcgoask instanceof Component ? $wksoawcgagcgoask->qcgakseyaikigqco() : $wksoawcgagcgoask; if ($qmwoykgeiicumeiw) { $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc] .= "\x2d{$qmwoykgeiicumeiw}"; } if ($yuwymayicwwqiske && $uocagekiukksqoee) { $ywmkwiwkosakssii[Constants::PREFIX] = $uocagekiukksqoee; } $this->add($ywmkwiwkosakssii); } public function get($aokagokqyuysuksm) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, []); } private function add($ywmkwiwkosakssii = []) { if ($this->qckwuesaysuoqcuk()) { if ($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii)) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc)) { $goyemikogeuskgas[$aokagokqyuysuksm] = [Constants::gouqcwikiiygyasc => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc), Constants::iiooageieusuyomy => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy, Constants::ecioqysekgaasegg), Constants::eoskkkieowogacws => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws, '')]; } if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); } else { $this->ycasmmgsmaaumweg($goyemikogeuskgas); } } } } private function iwuoakimmaiciasa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::iiooageieusuyomy => Constants::ecioqysekgaasegg, Constants::PREFIX => false, Constants::gcscaoggkqysyckq => true, Constants::eoskkkieowogacws => '', Constants::ucmueuwwcmocgmig => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eogowigeyucaauig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ucmueuwwcmocgmig); if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { $ywmkwiwkosakssii = []; } else { $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::PREFIX); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (is_array($uamcoiueqaamsqma)) { $uamcoiueqaamsqma = $swqimwqeweekeusq->gsamuciwkekemqqi([Constants::qwumqqyuasyskkkc => $uamcoiueqaamsqma]); } if ($yuwymayicwwqiske && $uamcoiueqaamsqma) { $ywmkwiwkosakssii = $gkyciwoiiisgywcs->set($ywmkwiwkosakssii, [Constants::eoskkkieowogacws => sprintf("\x25\163\72\40\45\163", $swqimwqeweekeusq->ciuuiyckmsygceis($yuwymayicwwqiske), $uamcoiueqaamsqma), Constants::PREFIX => false]); } $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); if (!$aokagokqyuysuksm) { } } return $ywmkwiwkosakssii; } private function ycasmmgsmaaumweg($goyemikogeuskgas = []) { try { $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($goyemikogeuskgas); } catch (Exception $wgaoewqkwgomoaai) { $smgooosyoeqwcaeg = ''; } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg(self::akgmaoggceagomqq, $smgooosyoeqwcaeg, 0, COOKIEPATH, COOKIE_DOMAIN, false, false); } }
