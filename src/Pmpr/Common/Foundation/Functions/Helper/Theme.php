<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Foundation; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\161\165\x65\162\171\x5f\164\x68\x65\155\145\x73") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (is_wp_error($sogksuscggsicmac)) { goto eugoueaksseemowq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($sgmuqamasucuikqa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x74\150\x65\155\x65\x73"))) { goto ewecikeyyqmewkgy; } switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::NAME); auiaaeeakqkocmqu: } wsksakoqeqwkigoq: goto sucekaeksayiwooe; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $mumucmmgemqwqiia; qisaayswqcmucoqg: } mioseimsuqaqiqae: goto sucekaeksayiwooe; } scykswkumgcoqgcc: sucekaeksayiwooe: ewecikeyyqmewkgy: eugoueaksseemowq: return $ksaameoqigiaoigg; } public function ymaywccaiscsmsik(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo]); return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ymaywccaiscsmsik($ywmkwiwkosakssii); } public function ceqmomoiwykcyecs($assameyusgwogmce, array $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); $nsmgceoqaqogqmuw = ob_get_clean(); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\167\x69\144\x67\x65\x74\x5f\x68\164\155\154", $nsmgceoqaqogqmuw, $assameyusgwogmce); } public function wswaymeswqkeokco($ewuukoycimkekouc) { $igscmsiuisqaqwkk = null; if (!($ewuukoycimkekouc = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($ewuukoycimkekouc))) { goto wsiysogusuimayic; } $qyyeoyuaqwwmysuu = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->eocmoukyueksgeuk(); if (!in_array($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true)) { goto awsqsasmmamcskkk; } $igscmsiuisqaqwkk = array_search($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true); awsqsasmmamcskkk: wsiysogusuimayic: return $igscmsiuisqaqwkk; } public function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null) : ?string { $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask); $esaqeawoigqgagum = $ggauoeuaesiymgee; if (!$wksoawcgagcgoask) { goto mowimwgkwoymuoae; } $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw()); if (!$couygeouymagssgw) { goto yquwqeooeyyociqm; } $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION); if (!in_array($yucgcsieomwqgwws, ["\160\x68\x70", "\x74\167\x69\x67"])) { goto iyuiasiuowggciss; } $esaqeawoigqgagum = "{$couygeouymagssgw}\x2f{$yucgcsieomwqgwws}\57{$ymqmyyeuycgmigyo}"; iyuiasiuowggciss: yquwqeooeyyociqm: mowimwgkwoymuoae: return $esaqeawoigqgagum; } public function ksiiwoecggoscqkm($mokawwccycoiqeka) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu(); $qookweymeqawmcwo = ["\151\x73\x5f\x6d\x6f\x62\x69\154\145" => $eiicaiwgqkgsekce->amkiaqeamgywsygm(), "\151\163\x5f\x74\x61\x62\154\145\164" => $eiicaiwgqkgsekce->qsqicssyqieuqooy(), "\151\163\137\143\x6f\155\x70\165\x74\x65\x72" => $eiicaiwgqkgsekce->oyekugiwykcqismq(), "\144\141\x74\x65\x5f\x66\157\162\x6d\x61\164" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::weayyoewessosyko => $mokawwccycoiqeka, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::syooqwmkmsmgwcqw => $seumokooiykcomco->masoymaamekuykso($mksyucucyswaukig, true), Constants::imoqsmekaqowuwmc => $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig), Constants::uouymeyqasaeckso => $useksmwkuswkwcqg]; $aquuecykqwyukece[] = "\151\156\144\145\170"; if ($mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw()) { goto sgkiwwkeeuyuyqwg; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto cceqaegwsqgaqges; } if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto yoummmmsocscggua; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto ueikeuosueikmmqy; } if (!$mumyimcwkaemyyue->gouusicsisumuiei()) { goto oqoksuwkayakeyco; } if ($gqgemcmoicmgaqie = $mumyimcwkaemyyue->siiwuwaswckkuoya()) { goto kmqgwuksekimwosw; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = __("\123\145\x61\x72\143\150", PR__CMN__FOUNDATION); goto egamkewimgoayiwc; kmqgwuksekimwosw: $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = sprintf(__("\x53\x65\141\x72\x63\x68\x20\162\145\x73\x75\x6c\x74\x20\x66\157\x72\72\x20\45\163", PR__CMN__FOUNDATION), $gqgemcmoicmgaqie); egamkewimgoayiwc: $aquuecykqwyukece[] = Constants::yayciqueeakqwese; $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = null; oqoksuwkayakeyco: goto imwggkqiceiqwwyw; ueikeuosueikmmqy: $aquuecykqwyukece[] = "\x34\60\64"; imwggkqiceiqwwyw: goto uewomuwyiswwamwg; yoummmmsocscggua: $qookweymeqawmcwo[Constants::mswoacegomcucaik] = $mksyucucyswaukig; $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig); $aaokuekaimigoyue = $seumokooiykcomco->aqcogscycyycgkuq($mksyucucyswaukig); $woaeeewomgcuesaa = Constants::qqoouomkeecygage; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\x6e\x64\x65\x78"; if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto awgeaewuaksssysc; } if (!$mumyimcwkaemyyue->kccakwkaqugygwmq()) { goto imyemkiyouuuequq; } $cuyooiakswegosog = Constants::cwswygwykwgsqiwu; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue; imyemkiyouuuequq: goto mukmkmiwaaowwymu; awgeaewuaksssysc: $suaemuyiacqyugsm = Constants::imywcsggckkcywgk; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue; mukmkmiwaaowwymu: uewomuwyiswwamwg: goto wyscaumqgyqycymq; cceqaegwsqgaqges: $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = $ewsqcacamuomwagw->wieoiwogwmcwukom(); $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = $ewsqcacamuomwagw->syeuyeikogukksam(); $woaeeewomgcuesaa = Constants::mswmgkkakuooukme; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\x6e\144\x65\170"; if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto qccawiseummsemsk; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto komymyuaekmkkiko; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto eqeosomseicwmwqu; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto gessacesaaekqkws; } if ($mumyimcwkaemyyue->oowkceqysamwygwu()) { goto cgksasyqkkiiowyg; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg; goto yesymsikkwmuikuc; cgksasyqkkiiowyg: $woaeeewomgcuesaa = Constants::kumuoysauoagaiiy; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\x6e\144\x65\170"; if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto gkyuckeugacsewka; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto ukmkcwicoqcoyqog; } if (!$mumyimcwkaemyyue->wqscegcksyocaias()) { goto cygqsmeoqscsscqm; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eggusgsscecmiiee; cygqsmeoqscsscqm: goto siuaqaksaumkaeui; ukmkcwicoqcoyqog: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::qummiiakyucoycws; siuaqaksaumkaeui: goto caeucwusaisgqaoe; gkyuckeugacsewka: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::caaieqwcccuueamg; caeucwusaisgqaoe: yesymsikkwmuikuc: goto yyyuemkeyacsssye; gessacesaaekqkws: $kesssewsiegssiya = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug; yyyuemkeyacsssye: goto muaokgycwsoimmaw; eqeosomseicwmwqu: $guwumyyyakswawas = Constants::qgciomgukmcwscqw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug; muaokgycwsoimmaw: goto kkowueuygsqqgogc; komymyuaekmkkiko: $scwiymciagumsuiw = Constants::qeueagcuyogwwyky; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug; kkowueuygsqqgogc: goto wiikygmkoykkkgyw; qccawiseummsemsk: $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $qscaoekmoooeuyqg = Constants::iwascisiiokuackw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\111\x44"); $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\x6e\x69\x63\x6b\156\x61\x6d\145"); wiikygmkoykkkgyw: wyscaumqgyqycymq: goto gcqeuqmciwqwqisq; sgkiwwkeeuyuyqwg: $woaeeewomgcuesaa = Constants::wwoeeogswkgeqack; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\144\145\x78"; if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto yukcsywomcgeqoiq; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = single_post_title('', false); goto gqaecycgekomqqgu; yukcsywomcgeqoiq: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eycwiessycciwsao; gqaecycgekomqqgu: gcqeuqmciwqwqisq: $qookweymeqawmcwo["\137\143\x75\x72\x72\145\156\x74\137\164\x65\x6d\x70\x6c\141\164\x65\x5f\156\x61\x6d\145"] = $this->aaimaiecygmeiegm($aquuecykqwyukece); return [$gsyaugcyoggmiuwy->ocksiywmkyaqseou("\164\145\155\160\x6c\x61\x74\x65\137\x68\x69\145\162\x61\162\x63\x68\171\137\164\145\x6d\160\x6c\x61\x74\x65\x73", $aquuecykqwyukece, $mksyucucyswaukig), $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\164\x65\x6d\160\154\x61\164\x65\x5f\x68\x69\145\162\141\x72\x63\x68\x79\x5f\160\x61\162\141\155\145\x74\x65\x72\x73", $qookweymeqawmcwo, $mksyucucyswaukig)]; } public function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca) { $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi); $qqscaoyqikuyeoaw = ''; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { goto ccccywcecqgsswqk; } if ($iawmgqqucqegmiay->exists($igqsaukqcqscimok)) { goto ggyguomagomqcmkq; } $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . "{$igqsaukqcqscimok}\x2e\x68\x74\x6d\x6c\56\164\167\x69\x67"; goto wuuqakiyccsuwswc; ggyguomagomqcmkq: $qqscaoyqikuyeoaw = $igqsaukqcqscimok; wuuqakiyccsuwswc: goto ogcysuekkcyswiku; ccccywcecqgsswqk: $qqscaoyqikuyeoaw = $this->eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw); ogcysuekkcyswiku: if ($iawmgqqucqegmiay->exists($qqscaoyqikuyeoaw)) { goto koeyooaqusayoskm; } $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . "\57\151\x6e\x64\145\170\56\x68\164\155\154\x2e\x74\167\151\x67"; goto coukkakgwkwmoyou; koeyooaqusayoskm: goto okmuocsmgiyuiggc; coukkakgwkwmoyou: umkugowakqmaakky: } okmuocsmgiyuiggc: return $qqscaoyqikuyeoaw; } public function aaimaiecygmeiegm($aquuecykqwyukece, bool $sysgmomuyiiawwcm = true) : array { $qcmggaiwyoeyguco = []; if (is_array($aquuecykqwyukece)) { goto wmyggsuagwosceiu; } if (!$aquuecykqwyukece) { goto yuyamyuwcskywmgg; } $qcmggaiwyoeyguco[] = $aquuecykqwyukece; yuyamyuwcskywmgg: goto myiuoyiycqukwuus; wmyggsuagwosceiu: foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) { if (!(!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco, true))) { goto aiggskceoswousgw; } $qcmggaiwyoeyguco[] = $uusmaiomayssaecw; aiggskceoswousgw: $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, $this->aaimaiecygmeiegm($qqscaoyqikuyeoaw, false)); sqkqeueggemiwaqi: } mqmqcqqgqcmiqeyu: myiuoyiycqukwuus: if (!$sysgmomuyiiawwcm) { goto oqckmkkyuymqomww; } $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco); krsort($qcmggaiwyoeyguco); oqckmkkyuymqomww: return $qcmggaiwyoeyguco; } public function youaqkimaoecgsye() : string { $uusmaiomayssaecw = ''; $mksyucucyswaukig = $this->uqsqkugwgmugquio(); if (!$mksyucucyswaukig) { goto gmqqsceqqmkeuwsg; } $uusmaiomayssaecw = $mksyucucyswaukig->cisyiemkeykgkomc(); gmqqsceqqmkeuwsg: return $uusmaiomayssaecw; } public function uqsqkugwgmugquio() : ?Setting { static $gaaauooqcqwiiogk; if ($gaaauooqcqwiiogk) { goto sgyysmcsyuaucmau; } $egsqwmeeeowomomi = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw()->get_template(); $wksoawcgagcgoask = Foundation::symcgieuakksimmu()->eeqqugcowsqysask($egsqwmeeeowomomi); if (!$wksoawcgagcgoask) { goto mmoceucgeiaguqsm; } $gaaauooqcqwiiogk = $wksoawcgagcgoask->mggwieqomgcuskme(); mmoceucgeiaguqsm: sgyysmcsyuaucmau: return $gaaauooqcqwiiogk; } }
