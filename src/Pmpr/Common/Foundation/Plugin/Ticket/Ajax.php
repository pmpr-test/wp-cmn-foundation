<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670598d3a6ee7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const wiysygukkaksueso = "\x70\x72\x5f\146\x6f\x75\x6e\x64\x61\164\151\157\x6e\137\x70\154\x75\x67\x69\x6e\x5f\x74\151\143\153\x65\x74\x5f"; const ouwkkoqmuuyuuagc = self::wiysygukkaksueso . "\x73\x75\x62\155\x69\164\137\x72\x65\x71\x75\145\163\x74"; const myikkigscysoykgy = ["\163\165\142\x6d\x69\x74\137\162\x65\161\x75\x65\163\164" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\160\157\145\x63\151\153\171\155\147\147\167\167\141\163\155\151"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); if (!is_wp_error($sogksuscggsicmac)) { $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo] ?? []; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::TEXT), Constants::CREATED_AT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::CREATED_AT)]); $occymigcemkqucuw = true; } } else { if (is_wp_error($icwicymcioeyeyek)) { $keccaugmemegoimu = $icwicymcioeyeyek; } else { $keccaugmemegoimu = __("\x43\x61\156\x20\156\x6f\x74\x20\x73\165\142\155\151\164\40\x79\157\165\x72\40\x72\145\x71\x75\145\x73\164\x2c\40\x70\154\x65\141\163\145\40\x72\x65\x66\x72\x65\163\150\x20\160\141\x67\x65\x20\x61\156\x64\40\164\x72\x79\x20\x61\x67\x61\151\156\56", PR__CMN__FOUNDATION); } } } else { $keccaugmemegoimu = __("\103\141\156\40\x6e\157\164\40\146\157\165\156\144\40\x74\x69\143\x6b\x65\x74\x2c\40\x70\x6c\145\x61\163\x65\x20\162\x65\x66\x72\x65\163\150\40\160\141\147\x65\x2e", PR__CMN__FOUNDATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } if (!$occymigcemkqucuw && $keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
