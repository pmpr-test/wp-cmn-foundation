<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const ouwkkoqmuuyuuagc = "\160\154\165\147\151\156\x5f\x74\151\143\153\145\x74\x5f\x73\x75\x62\x6d\151\x74\x5f\162\145\161\x75\145\163\164"; const myikkigscysoykgy = ["\163\x75\x62\155\x69\164\x5f\162\x65\x71\165\x65\163\164" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\x70\x6f\x65\x63\x69\x6b\171\x6d\147\147\x77\x77\x61\163\155\151"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (is_wp_error($keccaugmemegoimu)) { goto wgcwoaukyqokqegs; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { goto kwacykquqegccocg; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto qaiqkuwcooimcsyc; kwacykquqegccocg: if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { goto aysgkuigyuqqcuae; } $keccaugmemegoimu = __("\x43\141\x6e\x20\x6e\x6f\x74\x20\146\x6f\x75\x6e\144\x20\x74\x69\x63\x6b\145\x74\x2c\x20\160\x6c\x65\141\163\145\x20\x72\145\x66\162\145\163\x68\x20\160\x61\x67\x65\56", PR__CMN__FOUNDATION); goto ykyauiwkesygwwyq; aysgkuigyuqqcuae: $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { goto aiqouoismmsiakak; } if (is_wp_error($icwicymcioeyeyek)) { goto qswoesemmkuisiak; } $keccaugmemegoimu = __("\103\x61\x6e\40\156\157\164\x20\163\x75\x62\155\151\164\40\171\157\x75\162\40\x72\x65\161\x75\145\163\x74\54\x20\x70\x6c\x65\x61\x73\145\40\162\x65\x66\162\x65\163\150\x20\160\x61\x67\145\x20\x61\x6e\144\40\164\x72\x79\40\x61\147\x61\151\x6e\x2e", PR__CMN__FOUNDATION); goto wyaiukacimqqkwso; qswoesemmkuisiak: $keccaugmemegoimu = $icwicymcioeyeyek; wyaiukacimqqkwso: goto qiygeqkamwuomgie; aiqouoismmsiakak: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); $mksyucucyswaukig = $sogksuscggsicmac[Constants::ckmqoekmugkggeym]; if (!$mksyucucyswaukig instanceof Request) { goto iwcyguueicgkqmiq; } $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, Constants::TEXT), $mcmciwgeuccgyuqm::CREATED_AT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, $mcmciwgeuccgyuqm::CREATED_AT)]); $occymigcemkqucuw = true; iwcyguueicgkqmiq: qiygeqkamwuomgie: ykyauiwkesygwwyq: qaiqkuwcooimcsyc: wgcwoaukyqokqegs: if (!(!$occymigcemkqucuw && $keccaugmemegoimu)) { goto agwuqimeueqcgeig; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); agwuqimeueqcgeig: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
