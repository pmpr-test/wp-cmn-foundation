<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796bb8ecec23             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const wiysygukkaksueso = "\x70\162\x5f\146\157\x75\156\144\x61\164\x69\x6f\x6e\x5f\x70\x6c\165\x67\151\x6e\137\164\151\143\x6b\145\164\137"; const ouwkkoqmuuyuuagc = self::wiysygukkaksueso . "\x73\x75\142\155\x69\164\x5f\x72\145\x71\x75\145\x73\164"; const myikkigscysoykgy = ["\x73\165\142\x6d\x69\164\137\x72\145\x71\x75\x65\x73\164" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\x70\x6f\x65\143\151\153\171\x6d\x67\x67\x77\167\141\x73\155\x69"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); if (!is_wp_error($sogksuscggsicmac)) { $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo] ?? []; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::TEXT), Constants::CREATED_AT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::CREATED_AT)]); $occymigcemkqucuw = true; } } else { if (is_wp_error($icwicymcioeyeyek)) { $keccaugmemegoimu = $icwicymcioeyeyek; } else { $keccaugmemegoimu = __("\103\141\156\x20\x6e\x6f\164\40\x73\165\x62\155\151\x74\x20\x79\157\x75\162\x20\x72\x65\161\x75\x65\163\x74\x2c\40\x70\x6c\x65\141\163\x65\40\x72\145\x66\162\145\163\x68\x20\x70\141\x67\145\x20\141\156\144\x20\164\x72\171\x20\x61\x67\x61\151\156\56", PR__CMN__FOUNDATION); } } } else { $keccaugmemegoimu = __("\x43\141\x6e\40\156\x6f\x74\40\x66\157\x75\156\144\40\x74\151\143\153\145\x74\x2c\x20\160\154\x65\x61\163\145\x20\x72\x65\146\162\145\x73\150\40\160\x61\x67\145\56", PR__CMN__FOUNDATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } if (!$occymigcemkqucuw && $keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
