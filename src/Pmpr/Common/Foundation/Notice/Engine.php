<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Notice; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { const akgmaoggceagomqq = "\x70\x6d\160\162\137\156\x6f\164\151\x63\145\x5f\x6d\x65\x73\163\x61\147\145\163\137\154\x69\x73\x74"; public function qckwuesaysuoqcuk() : bool { return !$this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\x52\x5f\x44\111\x53\101\x42\114\105\137\116\x4f\x54\x49\103\x45", false); } public function get($aokagokqyuysuksm) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, []); } public function has($aokagokqyuysuksm) : bool { return !empty($this->get($aokagokqyuysuksm)); } public function remove($aokagokqyuysuksm) { $goyemikogeuskgas = $this->kasiqqyyaswsgics(); if (!$goyemikogeuskgas) { goto cceesacikyckyiim; } $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($goyemikogeuskgas, $aokagokqyuysuksm); if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto wameiecycmkcuimk; } $this->ycasmmgsmaaumweg($goyemikogeuskgas); goto ecyauwageoukkaaq; wameiecycmkcuimk: $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); ecyauwageoukkaaq: cceesacikyckyiim: } public function clear() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto uqqawaaiywcggesu; } $this->ycasmmgsmaaumweg([]); goto oamaoeaeoyckwmgk; uqqawaaiywcggesu: $this->caokeucsksukesyo()->issssuygyewuaswa()->smqukgcyacswysqa(self::akgmaoggceagomqq); oamaoeaeoyckwmgk: } public function kasiqqyyaswsgics() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto oukqakowgcgeugam; } $goyemikogeuskgas = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(self::akgmaoggceagomqq, []); if (!($goyemikogeuskgas && is_string($goyemikogeuskgas))) { goto cesywumicwqkaeaq; } try { $goyemikogeuskgas = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($goyemikogeuskgas); } catch (Exception $iewosgggaueeyymg) { $goyemikogeuskgas = []; } cesywumicwqkaeaq: goto aoyqwwsacwqumucg; oukqakowgcgeugam: $goyemikogeuskgas = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::akgmaoggceagomqq); aoyqwwsacwqumucg: if (is_array($goyemikogeuskgas)) { goto ceegwysaccigqqck; } $goyemikogeuskgas = []; ceegwysaccigqqck: return $goyemikogeuskgas; } public function add($ywmkwiwkosakssii = []) { if (!$this->qckwuesaysuoqcuk()) { goto uiuekqekiguikuce; } if (!($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii))) { goto cuqeayuiccuwcyua; } $goyemikogeuskgas = $this->kasiqqyyaswsgics(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc))) { goto uyueemusgoakawmc; } $goyemikogeuskgas[$aokagokqyuysuksm] = [Constants::gouqcwikiiygyasc => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc), Constants::iiooageieusuyomy => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy, Constants::ecioqysekgaasegg), Constants::eoskkkieowogacws => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws, '')]; uyueemusgoakawmc: if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { goto ayggscyaoccukyso; } $this->ycasmmgsmaaumweg($goyemikogeuskgas); goto iiakoqmowuggmkqw; ayggscyaoccukyso: $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::akgmaoggceagomqq, $goyemikogeuskgas); iiakoqmowuggmkqw: cuqeayuiccuwcyua: uiuekqekiguikuce: } public function render($ywmkwiwkosakssii = []) { echo $this->generate($ywmkwiwkosakssii); } public function generate($ywmkwiwkosakssii = []) : ?string { $ycyucwoysmwkgiui = null; if (!$this->qckwuesaysuoqcuk()) { goto vwyusaemeqkswgee; } if (!($ywmkwiwkosakssii = $this->iwuoakimmaiciasa($ywmkwiwkosakssii))) { goto comiusqosmykagiq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::iiooageieusuyomy); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $ycyucwoysmwkgiui = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy([Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::squoamkioomemiyi => $iqaosyayeiuaisqi, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); comiusqosmykagiq: vwyusaemeqkswgee: return $ycyucwoysmwkgiui; } private function ycasmmgsmaaumweg($goyemikogeuskgas = []) { try { $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($goyemikogeuskgas); } catch (Exception $wgaoewqkwgomoaai) { $smgooosyoeqwcaeg = ''; } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg(self::akgmaoggceagomqq, $smgooosyoeqwcaeg, 0, COOKIEPATH, COOKIE_DOMAIN, false, false); } private function iwuoakimmaiciasa($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::iiooageieusuyomy => Constants::ecioqysekgaasegg, Constants::PREFIX => false, Constants::gcscaoggkqysyckq => true, Constants::eoskkkieowogacws => '', Constants::ucmueuwwcmocgmig => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eogowigeyucaauig = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ucmueuwwcmocgmig); if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { goto skokkuuieagmuwgm; } $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::PREFIX); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::eoskkkieowogacws); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!is_array($uamcoiueqaamsqma)) { goto qewmkgeeuomgomia; } $uamcoiueqaamsqma = $swqimwqeweekeusq->gsamuciwkekemqqi([Constants::qwumqqyuasyskkkc => $uamcoiueqaamsqma]); qewmkgeeuomgomia: if (!($yuwymayicwwqiske && $uamcoiueqaamsqma)) { goto wmasiggggymwkeqs; } $ywmkwiwkosakssii = $gkyciwoiiisgywcs->set($ywmkwiwkosakssii, [Constants::eoskkkieowogacws => sprintf("\x25\163\x3a\x20\45\163", $swqimwqeweekeusq->ciuuiyckmsygceis($yuwymayicwwqiske), $uamcoiueqaamsqma), Constants::PREFIX => false]); wmasiggggymwkeqs: $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc); if ($aokagokqyuysuksm) { goto csqwmisikmgeaaky; } csqwmisikmgeaaky: goto ayekogimgycgmgau; skokkuuieagmuwgm: $ywmkwiwkosakssii = []; ayekogimgycgmgau: return $ywmkwiwkosakssii; } }
