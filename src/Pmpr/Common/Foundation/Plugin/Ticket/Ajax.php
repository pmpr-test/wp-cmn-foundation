<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const ouwkkoqmuuyuuagc = "\160\154\x75\147\x69\x6e\137\164\151\143\153\145\164\x5f\163\x75\x62\x6d\x69\x74\137\x72\x65\161\165\x65\x73\164"; const myikkigscysoykgy = ["\163\165\142\x6d\x69\164\x5f\x72\x65\161\165\x65\x73\x74" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\160\157\x65\143\151\x6b\171\155\x67\147\x77\167\141\163\155\x69"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (is_wp_error($keccaugmemegoimu)) { goto agwuqimeueqcgeig; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { goto qaiqkuwcooimcsyc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto wgcwoaukyqokqegs; qaiqkuwcooimcsyc: if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { goto ykyauiwkesygwwyq; } $keccaugmemegoimu = __("\x43\141\156\x20\156\x6f\164\x20\x66\x6f\x75\x6e\x64\x20\164\151\143\x6b\145\x74\54\x20\x70\x6c\x65\141\163\x65\x20\x72\x65\x66\162\145\x73\150\40\x70\x61\x67\145\x2e", PR__CMN__FOUNDATION); goto kwacykquqegccocg; ykyauiwkesygwwyq: $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { goto qiygeqkamwuomgie; } if (is_wp_error($icwicymcioeyeyek)) { goto wyaiukacimqqkwso; } $keccaugmemegoimu = __("\103\141\156\x20\x6e\157\164\x20\163\x75\142\x6d\151\164\x20\171\x6f\165\162\40\x72\145\161\x75\145\x73\164\x2c\x20\x70\154\x65\141\163\145\40\x72\x65\x66\162\145\163\150\x20\160\x61\147\145\x20\x61\156\x64\40\164\x72\x79\40\141\147\141\x69\156\x2e", PR__CMN__FOUNDATION); goto aiqouoismmsiakak; wyaiukacimqqkwso: $keccaugmemegoimu = $icwicymcioeyeyek; aiqouoismmsiakak: goto aysgkuigyuqqcuae; qiygeqkamwuomgie: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); $mksyucucyswaukig = $sogksuscggsicmac[Constants::ckmqoekmugkggeym]; if (!$mksyucucyswaukig instanceof Request) { goto qswoesemmkuisiak; } $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, Constants::TEXT), $mcmciwgeuccgyuqm::CREATED_AT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, $mcmciwgeuccgyuqm::CREATED_AT)]); $occymigcemkqucuw = true; qswoesemmkuisiak: aysgkuigyuqqcuae: kwacykquqegccocg: wgcwoaukyqokqegs: agwuqimeueqcgeig: if (!(!$occymigcemkqucuw && $keccaugmemegoimu)) { goto ioawqeykaygmcusq; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); ioawqeykaygmcusq: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
