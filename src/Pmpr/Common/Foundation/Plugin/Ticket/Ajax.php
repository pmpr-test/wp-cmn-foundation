<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Request; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; class Ajax extends Common { const ouwkkoqmuuyuuagc = "\x70\154\x75\147\x69\x6e\x5f\x74\151\x63\x6b\145\164\137\163\x75\x62\155\x69\164\x5f\162\145\x71\165\145\163\164"; const myikkigscysoykgy = ["\163\165\142\x6d\151\x74\137\162\x65\x71\165\145\163\x74" => self::ouwkkoqmuuyuuagc]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ouwkkoqmuuyuuagc, [$this, "\160\x6f\145\x63\x69\x6b\x79\155\x67\147\x77\167\x61\x73\x6d\x69"]); } public function poecikymggwwasmi() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (is_wp_error($keccaugmemegoimu)) { goto uyesmwqkkaeqyqsw; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $cmwygeyygwqaemaq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::TEXT); $kmekouwmygismoku = $eiicaiwgqkgsekce->yyqgamuwwakgciey($mmqcgecamywacuwe::asywgyemkouimocw); if ($cmwygeyygwqaemaq && $kmekouwmygismoku) { goto waqwicwqkgsgaosm; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto kmgimueiaqoamoiq; waqwicwqkgsgaosm: if ($kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku)) { goto aumiwewkmkcyqsic; } $keccaugmemegoimu = __("\x43\141\x6e\40\156\x6f\164\40\146\157\x75\x6e\x64\40\x74\x69\x63\153\145\164\x2c\40\x70\x6c\145\x61\x73\145\40\x72\x65\146\x72\x65\x73\150\40\x70\141\x67\145\56", PR__CMN__FOUNDATION); goto ukwaqucywiqsqcmw; aumiwewkmkcyqsic: $icwicymcioeyeyek = API::symcgieuakksimmu()->cooiockiwesywqeg([Constants::TEXT => $cmwygeyygwqaemaq, $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, Constants::IDENTIFIER), $mmqcgecamywacuwe::sgsawoooocqwouiy => $mmqcgecamywacuwe->qogaqkcsogcqiaic($kqowykcomaagagow, $mmqcgecamywacuwe::sgsawoooocqwouiy)]); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { goto ckcsasciyamuyeak; } if (is_wp_error($icwicymcioeyeyek)) { goto gquwcimccausouey; } $keccaugmemegoimu = __("\x43\141\156\x20\156\x6f\164\x20\x73\x75\142\x6d\151\x74\40\x79\157\x75\x72\40\162\145\x71\x75\145\x73\x74\x2c\x20\160\154\x65\x61\x73\145\40\x72\145\x66\162\145\x73\x68\40\160\x61\x67\x65\40\x61\156\144\x20\164\162\171\x20\141\147\x61\151\156\56", PR__CMN__FOUNDATION); goto kwocuyyugaqsicqy; gquwcimccausouey: $keccaugmemegoimu = $icwicymcioeyeyek; kwocuyyugaqsicqy: goto rayeowssukccumsa; ckcsasciyamuyeak: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([Constants::TEXT => $cmwygeyygwqaemaq, $kueeocmceokoouqa::asywgyemkouimocw => $kmekouwmygismoku]); $mksyucucyswaukig = $sogksuscggsicmac[Constants::ckmqoekmugkggeym]; if (!$mksyucucyswaukig instanceof Request) { goto mgqoggoasugsqoqm; } $mcmciwgeuccgyuqm = Request::symcgieuakksimmu(); $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, Constants::TEXT), $mcmciwgeuccgyuqm::CREATED_AT => $mcmciwgeuccgyuqm->qogaqkcsogcqiaic($siquossayskcwkea, $mcmciwgeuccgyuqm::CREATED_AT)]); $occymigcemkqucuw = true; mgqoggoasugsqoqm: rayeowssukccumsa: ukwaqucywiqsqcmw: kmgimueiaqoamoiq: uyesmwqkkaeqyqsw: if (!(!$occymigcemkqucuw && $keccaugmemegoimu)) { goto meacamomoigoocks; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); meacamomoigoocks: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
