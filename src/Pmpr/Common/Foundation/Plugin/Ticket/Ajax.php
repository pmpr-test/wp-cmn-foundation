<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6af0adcff6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const ouwkkoqmuuyuuagc = "\160\154\x75\147\x69\x6e\137\x74\x69\x63\x6b\145\x74\137\163\165\142\x6d\x69\164\x5f\162\x65\161\x75\145\x73\x74"; const myikkigscysoykgy = ["\163\165\142\x6d\151\164\137\x72\x65\x71\x75\x65\x73\x74" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\160\157\x65\x63\151\x6b\171\155\x67\x67\x77\x77\x61\163\x6d\151"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (is_wp_error($keccaugmemegoimu)) { goto agwuqimeueqcgeig; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { goto qaiqkuwcooimcsyc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto wgcwoaukyqokqegs; qaiqkuwcooimcsyc: if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { goto ykyauiwkesygwwyq; } $keccaugmemegoimu = __("\x43\141\156\x20\x6e\157\164\40\146\x6f\x75\x6e\x64\x20\x74\x69\x63\x6b\145\x74\x2c\x20\160\154\x65\141\x73\145\40\162\145\x66\162\x65\163\x68\40\160\141\147\145\56", PR__CMN__FOUNDATION); goto kwacykquqegccocg; ykyauiwkesygwwyq: $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { goto qiygeqkamwuomgie; } if (is_wp_error($icwicymcioeyeyek)) { goto wyaiukacimqqkwso; } $keccaugmemegoimu = __("\103\141\156\40\156\157\164\x20\x73\165\142\x6d\151\x74\x20\171\x6f\x75\x72\40\162\145\x71\165\145\163\164\x2c\x20\160\x6c\x65\x61\163\x65\40\162\145\146\162\x65\163\x68\x20\x70\x61\147\x65\40\x61\x6e\x64\40\x74\x72\x79\40\x61\147\141\151\x6e\56", PR__CMN__FOUNDATION); goto aiqouoismmsiakak; wyaiukacimqqkwso: $keccaugmemegoimu = $icwicymcioeyeyek; aiqouoismmsiakak: goto aysgkuigyuqqcuae; qiygeqkamwuomgie: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); $mksyucucyswaukig = $sogksuscggsicmac[Constants::ckmqoekmugkggeym]; if (!$mksyucucyswaukig instanceof Request) { goto qswoesemmkuisiak; } $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, Constants::TEXT), $mcmciwgeuccgyuqm::CREATED_AT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, $mcmciwgeuccgyuqm::CREATED_AT)]); $occymigcemkqucuw = true; qswoesemmkuisiak: aysgkuigyuqqcuae: kwacykquqegccocg: wgcwoaukyqokqegs: agwuqimeueqcgeig: if (!(!$occymigcemkqucuw && $keccaugmemegoimu)) { goto ioawqeykaygmcusq; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); ioawqeykaygmcusq: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
