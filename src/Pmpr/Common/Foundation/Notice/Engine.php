<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebe091cfc2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Notice; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { const akgmaoggceagomqq = "\x70\155\160\162\137\156\x6f\x74\x69\143\x65\137\155\x65\163\x73\141\x67\145\x73\137\x6c\x69\x73\x74"; public function qckwuesaysuoqcuk() : bool { return !$this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\122\137\x44\111\123\x41\x42\114\x45\137\116\x4f\124\x49\103\x45", false); } public function get($aokagokqyuysuksm) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, []); } public function has($aokagokqyuysuksm) : bool { return !empty($this->get($aokagokqyuysuksm)); } public function remove($aokagokqyuysuksm) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); if (!$goyemikogeuskgas) { goto osuyekmuuwmgkwca; } $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($goyemikogeuskgas, $aokagokqyuysuksm); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto cysoogqmuikoisqy; } $this->ycasmmgsmaaumweg($goyemikogeuskgas); goto aagceqeeqogaqaes; cysoogqmuikoisqy: $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); aagceqeeqogaqaes: osuyekmuuwmgkwca: } public function clear() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto qsqwwcgikmcoikkg; } $this->ycasmmgsmaaumweg([]); goto miiqgcgyyuwocgay; qsqwwcgikmcoikkg: $this->caokeucsksukesyo()->issssuygyewuaswa()->smqukgcyacswysqa(self::akgmaoggceagomqq); miiqgcgyyuwocgay: } public function kasiqqyyaswsgics() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto sqameksmiwwkyucq; } $goyemikogeuskgas = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(self::akgmaoggceagomqq, []); if (!($goyemikogeuskgas && is_string($goyemikogeuskgas))) { goto yuwawokiuiimecqy; } try { $goyemikogeuskgas = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($goyemikogeuskgas); } catch (Exception $iewosgggaueeyymg) { $goyemikogeuskgas = []; } yuwawokiuiimecqy: goto yeugqaigsaakooak; sqameksmiwwkyucq: $goyemikogeuskgas = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::akgmaoggceagomqq); yeugqaigsaakooak: if (is_array($goyemikogeuskgas)) { goto asemcaymsukcaawm; } $goyemikogeuskgas = []; asemcaymsukcaawm: return $goyemikogeuskgas; } public function add($ywmkwiwkosakssii = []) { if (!$this->qckwuesaysuoqcuk()) { goto cmqwceuukuwoiwek; } if (!($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii))) { goto ecmwwosseekiuagg; } $goyemikogeuskgas = $this->kasiqqyyaswsgics(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc))) { goto euiecommumccmsoy; } $goyemikogeuskgas[$aokagokqyuysuksm] = [Constants::gouqcwikiiygyasc => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc), Constants::iiooageieusuyomy => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy, Constants::ecioqysekgaasegg), Constants::eoskkkieowogacws => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws, '')]; euiecommumccmsoy: if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto cqaquqywymqyymqs; } $this->ycasmmgsmaaumweg($goyemikogeuskgas); goto ecckmmswcugmikea; cqaquqywymqyymqs: $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); ecckmmswcugmikea: ecmwwosseekiuagg: cmqwceuukuwoiwek: } public function render($ywmkwiwkosakssii = []) { echo $this->generate($ywmkwiwkosakssii); } public function generate($ywmkwiwkosakssii = []) : ?string { $ycyucwoysmwkgiui = null; if (!$this->qckwuesaysuoqcuk()) { goto iygkkieqyqoeaaee; } if (!($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii))) { goto aaoqwwkgcmmuoyaw; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $ycyucwoysmwkgiui = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy([Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::squoamkioomemiyi => $iqaosyayeiuaisqi, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); aaoqwwkgcmmuoyaw: iygkkieqyqoeaaee: return $ycyucwoysmwkgiui; } private function ycasmmgsmaaumweg($goyemikogeuskgas = []) { try { $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($goyemikogeuskgas); } catch (Exception $wgaoewqkwgomoaai) { $smgooosyoeqwcaeg = ''; } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg(self::akgmaoggceagomqq, $smgooosyoeqwcaeg, 0, COOKIEPATH, COOKIE_DOMAIN, false, false); } private function iwuoakimmaiciasa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::iiooageieusuyomy => Constants::ecioqysekgaasegg, Constants::PREFIX => false, Constants::gcscaoggkqysyckq => true, Constants::eoskkkieowogacws => '', Constants::ucmueuwwcmocgmig => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eogowigeyucaauig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ucmueuwwcmocgmig); if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { goto kekgsuqmmcqiwkmm; } $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::PREFIX); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!is_array($uamcoiueqaamsqma)) { goto iigquwogaowewecc; } $uamcoiueqaamsqma = $swqimwqeweekeusq->gsamuciwkekemqqi([Constants::qwumqqyuasyskkkc => $uamcoiueqaamsqma]); iigquwogaowewecc: if (!($yuwymayicwwqiske && $uamcoiueqaamsqma)) { goto uookkcasyoqgsisc; } $ywmkwiwkosakssii = $gkyciwoiiisgywcs->set($ywmkwiwkosakssii, [Constants::eoskkkieowogacws => sprintf("\45\x73\72\x20\x25\x73", $swqimwqeweekeusq->ciuuiyckmsygceis($yuwymayicwwqiske), $uamcoiueqaamsqma), Constants::PREFIX => false]); uookkcasyoqgsisc: $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); if ($aokagokqyuysuksm) { goto uwsciuioqumimyuw; } uwsciuioqumimyuw: goto moikisugcqcsaaoy; kekgsuqmmcqiwkmm: $ywmkwiwkosakssii = []; moikisugcqcsaaoy: return $ywmkwiwkosakssii; } }
