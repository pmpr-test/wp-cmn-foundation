<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abcde521502             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Interfaces\Constants; class Notice extends Common { const akgmaoggceagomqq = "\x70\x6d\160\162\x5f\x6e\x6f\164\151\x63\x65\137\155\x65\x73\x73\x61\x67\145\x73\x5f\x6c\151\163\x74"; public function waumkquuqekmqeae($wksoawcgagcgoask, ?string $aokagokqyuysuksm, bool $sywokgmoskcocqgy = true) { $ycyucwoysmwkgiui = ''; if ($aokagokqyuysuksm) { $qmwoykgeiicumeiw = null; if (is_object($wksoawcgagcgoask) || class_exists($wksoawcgagcgoask)) { $qmwoykgeiicumeiw = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($wksoawcgagcgoask); } if ($qmwoykgeiicumeiw && is_string($qmwoykgeiicumeiw)) { $aokagokqyuysuksm .= "\x2d{$qmwoykgeiicumeiw}"; } $ycyucwoysmwkgiui = $this->get($aokagokqyuysuksm); if ($sywokgmoskcocqgy) { $ycyucwoysmwkgiui = $this->generate($ycyucwoysmwkgiui); } $this->remove($aokagokqyuysuksm); } return $ycyucwoysmwkgiui; } public function gsucycggaoeuokcg($wksoawcgagcgoask, $aokagokqyuysuksm, $egsumesakcaaukem, $mkomwsiykqigmqca) { $aokagokqyuysuksm .= "\55\167\x72\151\164\151\x6e\147\55\x70\145\x72\155\x69\x73\x73\x69\x6f\x6e"; $uamcoiueqaamsqma = sprintf("\45\x73\74\142\162\76\x25\163", sprintf(__("\x25\x73\40\x63\x61\156\x6e\157\164\40\143\x6f\156\x66\151\147\x75\x72\145\x20\x69\164\163\x65\154\146\40\144\165\145\40\x74\x6f\40\155\151\163\163\x69\x6e\147\40\x77\x72\151\164\151\156\x67\40\x70\x65\162\x6d\151\x73\163\151\x6f\x6e\x73\x2e", PR__CMN__FOUNDATION), $egsumesakcaaukem), sprintf(__("\x41\x66\146\x65\x63\164\x65\x64\x20\146\x69\154\145\x3a\x20\x25\163", PR__CMN__FOUNDATION), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\143\x6f\x64\x65", [], $mkomwsiykqigmqca))); $this->oiugciyawoeieace($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm); } public function goouywsgcekeeccu($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm, string $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg, bool $yuwymayicwwqiske = true) { if ($uamcoiueqaamsqma) { $this->eiegqsqqokkueycw([Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm], $wksoawcgagcgoask, $yuwymayicwwqiske); } } public function oiugciyawoeieace($wksoawcgagcgoask, $uamcoiueqaamsqma, $aokagokqyuysuksm, string $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg, bool $yuwymayicwwqiske = true) { if ($uamcoiueqaamsqma) { $this->eiegqsqqokkueycw([Constants::ucmueuwwcmocgmig => Constants::gewmeskawiqikkoc, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm], $wksoawcgagcgoask, $yuwymayicwwqiske); } } public function render($ywmkwiwkosakssii = []) { echo $this->generate($ywmkwiwkosakssii); } public function generate($ywmkwiwkosakssii = []) : ?string { $ycyucwoysmwkgiui = null; if ($this->qckwuesaysuoqcuk()) { if ($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $ycyucwoysmwkgiui = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy([Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::squoamkioomemiyi => $iqaosyayeiuaisqi, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); } } return $ycyucwoysmwkgiui; } public function has($aokagokqyuysuksm) : bool { return !empty($this->get($aokagokqyuysuksm)); } public function remove($aokagokqyuysuksm) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); if ($goyemikogeuskgas) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($goyemikogeuskgas, $aokagokqyuysuksm); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); } else { $this->ycasmmgsmaaumweg($goyemikogeuskgas); } } } public function clear() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->smqukgcyacswysqa(self::akgmaoggceagomqq); } else { $this->ycasmmgsmaaumweg([]); } } public function kasiqqyyaswsgics() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $goyemikogeuskgas = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::akgmaoggceagomqq); } else { $goyemikogeuskgas = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(self::akgmaoggceagomqq, []); if ($goyemikogeuskgas && is_string($goyemikogeuskgas)) { try { $goyemikogeuskgas = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($goyemikogeuskgas); } catch (Exception $iewosgggaueeyymg) { $goyemikogeuskgas = []; } } } if (!is_array($goyemikogeuskgas)) { $goyemikogeuskgas = []; } return $goyemikogeuskgas; } public function qckwuesaysuoqcuk() : bool { return !$this->cmaecekuqkwmemms("\x50\122\x5f\x44\111\123\x41\x42\x4c\105\137\116\117\124\x49\x43\x45", false); } private function eiegqsqqokkueycw(array $ywmkwiwkosakssii = [], $wksoawcgagcgoask = null, bool $yuwymayicwwqiske = true) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '']); $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($wksoawcgagcgoask); $qmwoykgeiicumeiw = $wksoawcgagcgoask instanceof Component ? $wksoawcgagcgoask->aakmagwggmkoiiyu() : $wksoawcgagcgoask; $uocagekiukksqoee = $wksoawcgagcgoask instanceof Component ? $wksoawcgagcgoask->qcgakseyaikigqco() : $wksoawcgagcgoask; if ($qmwoykgeiicumeiw) { $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc] .= "\x2d{$qmwoykgeiicumeiw}"; } if ($yuwymayicwwqiske && $uocagekiukksqoee) { $ywmkwiwkosakssii[Constants::PREFIX] = $uocagekiukksqoee; } $this->add($ywmkwiwkosakssii); } public function get($aokagokqyuysuksm) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, []); } private function add($ywmkwiwkosakssii = []) { if ($this->qckwuesaysuoqcuk()) { if ($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii)) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc)) { $goyemikogeuskgas[$aokagokqyuysuksm] = [Constants::gouqcwikiiygyasc => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc), Constants::iiooageieusuyomy => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy, Constants::ecioqysekgaasegg), Constants::eoskkkieowogacws => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws, '')]; } if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); } else { $this->ycasmmgsmaaumweg($goyemikogeuskgas); } } } } private function iwuoakimmaiciasa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::iiooageieusuyomy => Constants::ecioqysekgaasegg, Constants::PREFIX => false, Constants::gcscaoggkqysyckq => true, Constants::eoskkkieowogacws => '', Constants::ucmueuwwcmocgmig => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eogowigeyucaauig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ucmueuwwcmocgmig); if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { $ywmkwiwkosakssii = []; } else { $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::PREFIX); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (is_array($uamcoiueqaamsqma)) { $uamcoiueqaamsqma = $swqimwqeweekeusq->gsamuciwkekemqqi([Constants::qwumqqyuasyskkkc => $uamcoiueqaamsqma]); } if ($yuwymayicwwqiske && $uamcoiueqaamsqma) { $ywmkwiwkosakssii = $gkyciwoiiisgywcs->set($ywmkwiwkosakssii, [Constants::eoskkkieowogacws => sprintf("\x25\163\72\40\x25\x73", $swqimwqeweekeusq->ciuuiyckmsygceis($yuwymayicwwqiske), $uamcoiueqaamsqma), Constants::PREFIX => false]); } $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); if (!$aokagokqyuysuksm) { } } return $ywmkwiwkosakssii; } private function ycasmmgsmaaumweg($goyemikogeuskgas = []) { try { $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($goyemikogeuskgas); } catch (Exception $wgaoewqkwgomoaai) { $smgooosyoeqwcaeg = ''; } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg(self::akgmaoggceagomqq, $smgooosyoeqwcaeg, 0, COOKIEPATH, COOKIE_DOMAIN, false, false); } }
