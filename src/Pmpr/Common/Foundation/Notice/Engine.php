<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Notice; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { const akgmaoggceagomqq = "\x70\155\160\x72\x5f\156\x6f\x74\x69\143\145\137\155\145\163\x73\x61\x67\x65\x73\x5f\154\151\163\x74"; public function qckwuesaysuoqcuk() : bool { return !$this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\x52\x5f\x44\x49\x53\101\102\114\x45\137\116\x4f\x54\111\x43\105", false); } public function get($aokagokqyuysuksm) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, []); } public function has($aokagokqyuysuksm) : bool { return !empty($this->get($aokagokqyuysuksm)); } public function remove($aokagokqyuysuksm) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); if (!$goyemikogeuskgas) { goto cusmimwmwgscqeku; } $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($goyemikogeuskgas, $aokagokqyuysuksm); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto oukcgieuakaagsaw; } $this->ycasmmgsmaaumweg($goyemikogeuskgas); goto aeagssqaiwooeoei; oukcgieuakaagsaw: $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); aeagssqaiwooeoei: cusmimwmwgscqeku: } public function clear() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto egcqemgwyuoosmuq; } $this->ycasmmgsmaaumweg([]); goto wekieycqkqmgagyq; egcqemgwyuoosmuq: $this->caokeucsksukesyo()->issssuygyewuaswa()->smqukgcyacswysqa(self::akgmaoggceagomqq); wekieycqkqmgagyq: } public function kasiqqyyaswsgics() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto wucqauasuekkoayw; } $goyemikogeuskgas = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(self::akgmaoggceagomqq, []); if (!($goyemikogeuskgas && is_string($goyemikogeuskgas))) { goto gogmaqgwwsoekumo; } try { $goyemikogeuskgas = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($goyemikogeuskgas); } catch (Exception $iewosgggaueeyymg) { $goyemikogeuskgas = []; } gogmaqgwwsoekumo: goto qiuucioewqyqqwok; wucqauasuekkoayw: $goyemikogeuskgas = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::akgmaoggceagomqq); qiuucioewqyqqwok: if (is_array($goyemikogeuskgas)) { goto cekiucuusaiieqyy; } $goyemikogeuskgas = []; cekiucuusaiieqyy: return $goyemikogeuskgas; } public function add($ywmkwiwkosakssii = []) { if (!$this->qckwuesaysuoqcuk()) { goto iqcsqkgycusqgswk; } if (!($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii))) { goto ecssgmuciqiskkme; } $goyemikogeuskgas = $this->kasiqqyyaswsgics(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc))) { goto wscecwieywoacuyc; } $goyemikogeuskgas[$aokagokqyuysuksm] = [Constants::gouqcwikiiygyasc => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc), Constants::iiooageieusuyomy => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy, Constants::ecioqysekgaasegg), Constants::eoskkkieowogacws => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws, '')]; wscecwieywoacuyc: if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto mooukkaawioceqgu; } $this->ycasmmgsmaaumweg($goyemikogeuskgas); goto gaweywgyiqymqqae; mooukkaawioceqgu: $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); gaweywgyiqymqqae: ecssgmuciqiskkme: iqcsqkgycusqgswk: } public function render($ywmkwiwkosakssii = []) { echo $this->generate($ywmkwiwkosakssii); } public function generate($ywmkwiwkosakssii = []) : ?string { $ycyucwoysmwkgiui = null; if (!$this->qckwuesaysuoqcuk()) { goto figsecwawwycsiia; } if (!($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii))) { goto iueqqswmweckwaui; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $ycyucwoysmwkgiui = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy([Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::squoamkioomemiyi => $iqaosyayeiuaisqi, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); iueqqswmweckwaui: figsecwawwycsiia: return $ycyucwoysmwkgiui; } private function ycasmmgsmaaumweg($goyemikogeuskgas = []) { try { $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($goyemikogeuskgas); } catch (Exception $wgaoewqkwgomoaai) { $smgooosyoeqwcaeg = ''; } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg(self::akgmaoggceagomqq, $smgooosyoeqwcaeg, 0, COOKIEPATH, COOKIE_DOMAIN, false, false); } private function iwuoakimmaiciasa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::iiooageieusuyomy => Constants::ecioqysekgaasegg, Constants::PREFIX => false, Constants::gcscaoggkqysyckq => true, Constants::eoskkkieowogacws => '', Constants::ucmueuwwcmocgmig => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eogowigeyucaauig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ucmueuwwcmocgmig); if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { goto eygewmcawygoamqm; } $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::PREFIX); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!is_array($uamcoiueqaamsqma)) { goto ioqcemkiiscgiseo; } $uamcoiueqaamsqma = $swqimwqeweekeusq->gsamuciwkekemqqi([Constants::qwumqqyuasyskkkc => $uamcoiueqaamsqma]); ioqcemkiiscgiseo: if (!($yuwymayicwwqiske && $uamcoiueqaamsqma)) { goto aaayqmggygqagqes; } $ywmkwiwkosakssii = $gkyciwoiiisgywcs->set($ywmkwiwkosakssii, [Constants::eoskkkieowogacws => sprintf("\x25\163\72\40\45\x73", $swqimwqeweekeusq->ciuuiyckmsygceis($yuwymayicwwqiske), $uamcoiueqaamsqma), Constants::PREFIX => false]); aaayqmggygqagqes: $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); if ($aokagokqyuysuksm) { goto coukaukykckssymw; } coukaukykckssymw: goto uiagegwaiiacsqoo; eygewmcawygoamqm: $ywmkwiwkosakssii = []; uiagegwaiiacsqoo: return $ywmkwiwkosakssii; } }
