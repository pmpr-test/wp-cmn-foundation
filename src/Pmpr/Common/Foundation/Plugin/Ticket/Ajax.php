<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795745ee4997             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const wiysygukkaksueso = "\160\162\137\146\x6f\165\156\144\x61\164\x69\x6f\x6e\137\160\154\x75\147\x69\x6e\137\164\151\143\x6b\145\x74\137"; const ouwkkoqmuuyuuagc = self::wiysygukkaksueso . "\x73\165\142\x6d\x69\x74\x5f\x72\x65\161\165\x65\x73\164"; const myikkigscysoykgy = ["\163\x75\142\x6d\151\164\137\162\x65\x71\165\x65\163\164" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\x70\157\145\143\151\153\x79\x6d\x67\147\167\x77\141\x73\x6d\x69"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); if (!is_wp_error($sogksuscggsicmac)) { $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo] ?? []; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::TEXT), Constants::CREATED_AT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::CREATED_AT)]); $occymigcemkqucuw = true; } } else { if (is_wp_error($icwicymcioeyeyek)) { $keccaugmemegoimu = $icwicymcioeyeyek; } else { $keccaugmemegoimu = __("\x43\x61\156\40\x6e\x6f\164\x20\x73\x75\x62\x6d\151\164\40\x79\x6f\x75\162\40\x72\x65\161\165\x65\163\x74\54\40\x70\154\x65\x61\163\145\x20\x72\x65\x66\162\145\163\150\40\160\x61\x67\x65\40\x61\156\144\40\164\x72\171\40\141\x67\x61\x69\156\56", PR__CMN__FOUNDATION); } } } else { $keccaugmemegoimu = __("\103\141\156\x20\x6e\157\x74\40\x66\x6f\x75\x6e\x64\40\164\151\143\153\145\164\54\40\160\154\x65\141\163\145\40\162\145\x66\x72\x65\163\x68\40\160\x61\x67\x65\x2e", PR__CMN__FOUNDATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } if (!$occymigcemkqucuw && $keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
