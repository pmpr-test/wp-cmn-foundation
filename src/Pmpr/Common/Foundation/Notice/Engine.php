<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Notice; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { const akgmaoggceagomqq = "\160\x6d\160\x72\x5f\156\157\164\x69\143\x65\137\x6d\x65\163\x73\141\x67\x65\163\x5f\x6c\x69\163\164"; public function qckwuesaysuoqcuk() : bool { return !$this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\x52\x5f\x44\x49\123\101\102\114\105\137\116\117\x54\x49\103\105", false); } public function get($aokagokqyuysuksm) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, []); } public function has($aokagokqyuysuksm) : bool { return !empty($this->get($aokagokqyuysuksm)); } public function remove($aokagokqyuysuksm) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); if (!$goyemikogeuskgas) { goto cimeeqaiweeqawam; } $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($goyemikogeuskgas, $aokagokqyuysuksm); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto moikisugcqcsaaoy; } $this->ycasmmgsmaaumweg($goyemikogeuskgas); goto usmqcukamkauwqmu; moikisugcqcsaaoy: $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); usmqcukamkauwqmu: cimeeqaiweeqawam: } public function clear() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto ccwikwaicwwsewyc; } $this->ycasmmgsmaaumweg([]); goto oqgegyekomogicem; ccwikwaicwwsewyc: $this->caokeucsksukesyo()->issssuygyewuaswa()->smqukgcyacswysqa(self::akgmaoggceagomqq); oqgegyekomogicem: } public function kasiqqyyaswsgics() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto emmuasmesyuaymkc; } $goyemikogeuskgas = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(self::akgmaoggceagomqq, []); if (!($goyemikogeuskgas && is_string($goyemikogeuskgas))) { goto mqqsyewyymsekyai; } try { $goyemikogeuskgas = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($goyemikogeuskgas); } catch (Exception $iewosgggaueeyymg) { $goyemikogeuskgas = []; } mqqsyewyymsekyai: goto wyusiimusqwqkkay; emmuasmesyuaymkc: $goyemikogeuskgas = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::akgmaoggceagomqq); wyusiimusqwqkkay: if (is_array($goyemikogeuskgas)) { goto osikekkwkwccuosu; } $goyemikogeuskgas = []; osikekkwkwccuosu: return $goyemikogeuskgas; } public function add($ywmkwiwkosakssii = []) { if (!$this->qckwuesaysuoqcuk()) { goto eakgoqeusssawkiy; } if (!($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii))) { goto qwoiqiaiueeksuea; } $goyemikogeuskgas = $this->kasiqqyyaswsgics(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc))) { goto gkkagswkwmummiiy; } $goyemikogeuskgas[$aokagokqyuysuksm] = [Constants::gouqcwikiiygyasc => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc), Constants::iiooageieusuyomy => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy, Constants::ecioqysekgaasegg), Constants::eoskkkieowogacws => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws, '')]; gkkagswkwmummiiy: if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto uwaecasqomqsismq; } $this->ycasmmgsmaaumweg($goyemikogeuskgas); goto suweqsmuqmoqiqka; uwaecasqomqsismq: $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); suweqsmuqmoqiqka: qwoiqiaiueeksuea: eakgoqeusssawkiy: } public function render($ywmkwiwkosakssii = []) { echo $this->generate($ywmkwiwkosakssii); } public function generate($ywmkwiwkosakssii = []) : ?string { $ycyucwoysmwkgiui = null; if (!$this->qckwuesaysuoqcuk()) { goto owmmyggcqikgwmqi; } if (!($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii))) { goto ksaquyioqskqgemw; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $ycyucwoysmwkgiui = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy([Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::squoamkioomemiyi => $iqaosyayeiuaisqi, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); ksaquyioqskqgemw: owmmyggcqikgwmqi: return $ycyucwoysmwkgiui; } private function ycasmmgsmaaumweg($goyemikogeuskgas = []) { try { $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($goyemikogeuskgas); } catch (Exception $wgaoewqkwgomoaai) { $smgooosyoeqwcaeg = ''; } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg(self::akgmaoggceagomqq, $smgooosyoeqwcaeg, 0, COOKIEPATH, COOKIE_DOMAIN, false, false); } private function iwuoakimmaiciasa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::iiooageieusuyomy => Constants::ecioqysekgaasegg, Constants::PREFIX => false, Constants::gcscaoggkqysyckq => true, Constants::eoskkkieowogacws => '', Constants::ucmueuwwcmocgmig => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eogowigeyucaauig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ucmueuwwcmocgmig); if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { goto yumsukgwuyomocge; } $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::PREFIX); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!is_array($uamcoiueqaamsqma)) { goto ocaecwowkcsoocci; } $uamcoiueqaamsqma = $swqimwqeweekeusq->gsamuciwkekemqqi([Constants::qwumqqyuasyskkkc => $uamcoiueqaamsqma]); ocaecwowkcsoocci: if (!($yuwymayicwwqiske && $uamcoiueqaamsqma)) { goto wscmeqgusioeqece; } $ywmkwiwkosakssii = $gkyciwoiiisgywcs->set($ywmkwiwkosakssii, [Constants::eoskkkieowogacws => sprintf("\x25\x73\72\40\x25\163", $swqimwqeweekeusq->ciuuiyckmsygceis($yuwymayicwwqiske), $uamcoiueqaamsqma), Constants::PREFIX => false]); wscmeqgusioeqece: $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); if ($aokagokqyuysuksm) { goto uimwkmsekogcooks; } uimwkmsekogcooks: goto qsioegocesimcqee; yumsukgwuyomocge: $ywmkwiwkosakssii = []; qsioegocesimcqee: return $ywmkwiwkosakssii; } }
