<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abcde521502             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const wiysygukkaksueso = "\x70\162\x5f\x66\x6f\x75\156\x64\141\x74\x69\x6f\156\137\160\x6c\x75\x67\151\156\x5f\x74\x69\143\153\x65\x74\137"; const ouwkkoqmuuyuuagc = self::wiysygukkaksueso . "\163\x75\x62\155\x69\164\x5f\x72\x65\161\165\145\x73\x74"; const myikkigscysoykgy = ["\163\x75\142\155\x69\x74\x5f\x72\x65\161\165\x65\163\164" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\x70\157\145\143\x69\x6b\x79\x6d\x67\147\x77\167\x61\x73\x6d\x69"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->waecsyqmwascmqoa($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); if (!is_wp_error($sogksuscggsicmac)) { $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo] ?? []; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::TEXT), Constants::CREATED_AT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::CREATED_AT)]); $occymigcemkqucuw = true; } } else { if (is_wp_error($icwicymcioeyeyek)) { $keccaugmemegoimu = $icwicymcioeyeyek; } else { $keccaugmemegoimu = __("\x43\x61\x6e\40\x6e\157\164\40\x73\165\x62\x6d\151\x74\x20\x79\157\x75\x72\x20\x72\x65\161\165\x65\163\164\54\40\160\154\x65\x61\163\x65\40\162\x65\146\162\x65\x73\x68\40\160\x61\x67\145\40\141\x6e\144\x20\164\x72\171\40\141\147\141\151\x6e\56", PR__CMN__FOUNDATION); } } } else { $keccaugmemegoimu = __("\x43\x61\156\40\156\157\x74\40\x66\157\x75\x6e\144\40\x74\151\x63\153\x65\164\54\x20\x70\x6c\145\141\163\x65\40\162\x65\x66\x72\x65\163\150\40\x70\x61\x67\x65\56", PR__CMN__FOUNDATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } if (!$occymigcemkqucuw && $keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
