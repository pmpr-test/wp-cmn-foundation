<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d13e4bc148             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const wiysygukkaksueso = "\x70\x72\x5f\146\157\165\x6e\144\141\164\151\157\x6e\137\x70\154\165\147\x69\x6e\137\x74\151\143\x6b\145\164\x5f"; const ouwkkoqmuuyuuagc = self::wiysygukkaksueso . "\163\165\x62\155\x69\x74\x5f\162\145\161\165\145\x73\164"; const myikkigscysoykgy = ["\163\x75\142\155\151\164\x5f\162\145\x71\165\145\163\x74" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\x70\x6f\145\143\151\x6b\171\155\x67\147\x77\x77\141\163\x6d\x69"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); if (!is_wp_error($sogksuscggsicmac)) { $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo] ?? []; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::TEXT), Constants::CREATED_AT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::CREATED_AT)]); $occymigcemkqucuw = true; } } else { if (is_wp_error($icwicymcioeyeyek)) { $keccaugmemegoimu = $icwicymcioeyeyek; } else { $keccaugmemegoimu = __("\103\141\x6e\40\x6e\x6f\164\x20\x73\x75\x62\155\151\164\x20\x79\x6f\x75\x72\40\162\x65\161\165\145\x73\x74\54\40\160\x6c\145\141\163\x65\x20\x72\145\x66\x72\x65\163\x68\x20\160\x61\147\x65\x20\141\x6e\x64\x20\164\x72\x79\40\x61\x67\141\x69\x6e\56", PR__CMN__FOUNDATION); } } } else { $keccaugmemegoimu = __("\103\x61\x6e\x20\x6e\x6f\x74\x20\x66\157\x75\156\144\x20\x74\x69\143\x6b\x65\164\x2c\x20\x70\154\x65\141\x73\145\40\x72\145\x66\162\145\163\150\40\x70\141\x67\145\56", PR__CMN__FOUNDATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } if (!$occymigcemkqucuw && $keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
