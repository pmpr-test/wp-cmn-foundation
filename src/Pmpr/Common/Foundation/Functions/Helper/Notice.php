<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0611cd07             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Interfaces\Constants; class Notice extends Common { const akgmaoggceagomqq = "\160\x6d\160\162\137\x6e\x6f\164\x69\x63\x65\x5f\x6d\145\163\163\141\x67\145\x73\137\x6c\x69\x73\164"; public function waumkquuqekmqeae($wksoawcgagcgoask, ?string $aokagokqyuysuksm, bool $sywokgmoskcocqgy = true) { $ycyucwoysmwkgiui = ''; if ($aokagokqyuysuksm) { $qmwoykgeiicumeiw = null; if (is_object($wksoawcgagcgoask) || class_exists($wksoawcgagcgoask)) { $qmwoykgeiicumeiw = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($wksoawcgagcgoask); } if ($qmwoykgeiicumeiw && is_string($qmwoykgeiicumeiw)) { $aokagokqyuysuksm .= "\55{$qmwoykgeiicumeiw}"; } $ycyucwoysmwkgiui = $this->get($aokagokqyuysuksm); if ($sywokgmoskcocqgy) { $ycyucwoysmwkgiui = $this->generate($ycyucwoysmwkgiui); } $this->remove($aokagokqyuysuksm); } return $ycyucwoysmwkgiui; } public function gsucycggaoeuokcg($wksoawcgagcgoask, $aokagokqyuysuksm, $egsumesakcaaukem, $mkomwsiykqigmqca) { $aokagokqyuysuksm .= "\x2d\167\x72\151\164\151\x6e\147\55\160\x65\x72\155\x69\x73\x73\x69\157\156"; $uamcoiueqaamsqma = sprintf("\x25\x73\74\142\x72\x3e\45\x73", sprintf(__("\x25\163\40\x63\141\156\156\157\x74\40\x63\157\156\146\151\x67\165\x72\145\x20\x69\x74\x73\145\x6c\146\40\x64\x75\145\x20\x74\157\x20\x6d\x69\x73\163\x69\x6e\147\40\167\x72\151\x74\151\x6e\x67\x20\x70\x65\162\x6d\151\163\163\151\157\156\163\56", PR__CMN__FOUNDATION), $egsumesakcaaukem), sprintf(__("\101\146\x66\145\x63\164\x65\144\x20\x66\x69\x6c\x65\x3a\x20\45\x73", PR__CMN__FOUNDATION), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x63\157\x64\x65", [], $mkomwsiykqigmqca))); $this->oiugciyawoeieace($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm); } public function goouywsgcekeeccu($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm, string $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg, bool $yuwymayicwwqiske = true) { if ($uamcoiueqaamsqma) { $this->eiegqsqqokkueycw([Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm], $wksoawcgagcgoask, $yuwymayicwwqiske); } } public function oiugciyawoeieace($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm, string $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg, bool $yuwymayicwwqiske = true) { if ($uamcoiueqaamsqma) { $this->eiegqsqqokkueycw([Constants::ucmueuwwcmocgmig => Constants::gewmeskawiqikkoc, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm], $wksoawcgagcgoask, $yuwymayicwwqiske); } } public function render($ywmkwiwkosakssii = []) { echo $this->generate($ywmkwiwkosakssii); } public function generate($ywmkwiwkosakssii = []) : ?string { $ycyucwoysmwkgiui = null; if ($this->qckwuesaysuoqcuk()) { if ($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $ycyucwoysmwkgiui = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy([Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::squoamkioomemiyi => $iqaosyayeiuaisqi, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); } } return $ycyucwoysmwkgiui; } public function has($aokagokqyuysuksm) : bool { return !empty($this->get($aokagokqyuysuksm)); } public function remove($aokagokqyuysuksm) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); if ($goyemikogeuskgas) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($goyemikogeuskgas, $aokagokqyuysuksm); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); } else { $this->ycasmmgsmaaumweg($goyemikogeuskgas); } } } public function clear() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->smqukgcyacswysqa(self::akgmaoggceagomqq); } else { $this->ycasmmgsmaaumweg([]); } } public function kasiqqyyaswsgics() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $goyemikogeuskgas = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::akgmaoggceagomqq); } else { $goyemikogeuskgas = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(self::akgmaoggceagomqq, []); if ($goyemikogeuskgas && is_string($goyemikogeuskgas)) { try { $goyemikogeuskgas = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($goyemikogeuskgas); } catch (Exception $iewosgggaueeyymg) { $goyemikogeuskgas = []; } } } if (!is_array($goyemikogeuskgas)) { $goyemikogeuskgas = []; } return $goyemikogeuskgas; } public function qckwuesaysuoqcuk() : bool { return !$this->cmaecekuqkwmemms("\x50\x52\137\x44\x49\x53\101\102\114\x45\x5f\116\x4f\124\111\x43\x45", false); } private function eiegqsqqokkueycw(array $ywmkwiwkosakssii = [], $wksoawcgagcgoask = null, bool $yuwymayicwwqiske = true) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '']); $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($wksoawcgagcgoask); $qmwoykgeiicumeiw = $wksoawcgagcgoask instanceof Component ? $wksoawcgagcgoask->aakmagwggmkoiiyu() : $wksoawcgagcgoask; $uocagekiukksqoee = $wksoawcgagcgoask instanceof Component ? $wksoawcgagcgoask->qcgakseyaikigqco() : $wksoawcgagcgoask; if ($qmwoykgeiicumeiw) { $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc] .= "\55{$qmwoykgeiicumeiw}"; } if ($yuwymayicwwqiske && $uocagekiukksqoee) { $ywmkwiwkosakssii[Constants::PREFIX] = $uocagekiukksqoee; } $this->add($ywmkwiwkosakssii); } public function get($aokagokqyuysuksm) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, []); } private function add($ywmkwiwkosakssii = []) { if ($this->qckwuesaysuoqcuk()) { if ($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii)) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc)) { $goyemikogeuskgas[$aokagokqyuysuksm] = [Constants::gouqcwikiiygyasc => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc), Constants::iiooageieusuyomy => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy, Constants::ecioqysekgaasegg), Constants::eoskkkieowogacws => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws, '')]; } if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); } else { $this->ycasmmgsmaaumweg($goyemikogeuskgas); } } } } private function iwuoakimmaiciasa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::iiooageieusuyomy => Constants::ecioqysekgaasegg, Constants::PREFIX => false, Constants::gcscaoggkqysyckq => true, Constants::eoskkkieowogacws => '', Constants::ucmueuwwcmocgmig => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eogowigeyucaauig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ucmueuwwcmocgmig); if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { $ywmkwiwkosakssii = []; } else { $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::PREFIX); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (is_array($uamcoiueqaamsqma)) { $uamcoiueqaamsqma = $swqimwqeweekeusq->gsamuciwkekemqqi([Constants::qwumqqyuasyskkkc => $uamcoiueqaamsqma]); } if ($yuwymayicwwqiske && $uamcoiueqaamsqma) { $ywmkwiwkosakssii = $gkyciwoiiisgywcs->set($ywmkwiwkosakssii, [Constants::eoskkkieowogacws => sprintf("\45\x73\x3a\40\45\163", $swqimwqeweekeusq->ciuuiyckmsygceis($yuwymayicwwqiske), $uamcoiueqaamsqma), Constants::PREFIX => false]); } $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); if (!$aokagokqyuysuksm) { } } return $ywmkwiwkosakssii; } private function ycasmmgsmaaumweg($goyemikogeuskgas = []) { try { $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($goyemikogeuskgas); } catch (Exception $wgaoewqkwgomoaai) { $smgooosyoeqwcaeg = ''; } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg(self::akgmaoggceagomqq, $smgooosyoeqwcaeg, 0, COOKIEPATH, COOKIE_DOMAIN, false, false); } }
