<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const ouwkkoqmuuyuuagc = "\160\x6c\x75\147\x69\x6e\137\x74\151\x63\x6b\145\x74\x5f\163\165\x62\155\151\x74\x5f\162\x65\x71\165\x65\x73\x74"; const myikkigscysoykgy = ["\163\x75\x62\155\x69\x74\x5f\x72\145\161\165\x65\x73\164" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\160\x6f\x65\143\x69\153\x79\x6d\147\147\167\167\141\163\x6d\151"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (is_wp_error($keccaugmemegoimu)) { goto kwocaqggwcksesce; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { goto saiuoomgskwgyeya; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto kuuawiosmkgqsscy; saiuoomgskwgyeya: if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { goto cimascmiesomqgqs; } $keccaugmemegoimu = __("\103\141\x6e\40\156\x6f\164\40\146\x6f\x75\156\x64\40\164\x69\x63\153\x65\164\x2c\x20\160\x6c\145\141\163\x65\40\162\145\x66\x72\x65\163\150\x20\x70\x61\147\145\56", PR__CMN__FOUNDATION); goto easuiqiooiwgswmm; cimascmiesomqgqs: $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { goto mcagemacuqyskogs; } if (is_wp_error($icwicymcioeyeyek)) { goto gyskcwykkyakeims; } $keccaugmemegoimu = __("\103\141\156\40\x6e\157\164\40\163\165\142\155\151\x74\x20\171\157\165\162\x20\x72\x65\x71\x75\145\x73\164\x2c\40\x70\154\x65\x61\163\x65\40\162\x65\146\x72\x65\163\x68\x20\160\x61\147\x65\x20\x61\x6e\x64\x20\x74\x72\171\40\141\x67\x61\151\156\x2e", PR__CMN__FOUNDATION); goto ossakckwskyqusmm; gyskcwykkyakeims: $keccaugmemegoimu = $icwicymcioeyeyek; ossakckwskyqusmm: goto aamgqoqyyooimqkm; mcagemacuqyskogs: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); $mksyucucyswaukig = $sogksuscggsicmac[Constants::ckmqoekmugkggeym]; if (!$mksyucucyswaukig instanceof Request) { goto qkiyyywwuiuackao; } $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, Constants::TEXT), $mcmciwgeuccgyuqm::CREATED_AT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, $mcmciwgeuccgyuqm::CREATED_AT)]); $occymigcemkqucuw = true; qkiyyywwuiuackao: aamgqoqyyooimqkm: easuiqiooiwgswmm: kuuawiosmkgqsscy: kwocaqggwcksesce: if (!(!$occymigcemkqucuw && $keccaugmemegoimu)) { goto momuweiasiwskekw; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); momuweiasiwskekw: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
