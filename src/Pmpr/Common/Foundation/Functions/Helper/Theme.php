<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Foundation; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\x71\x75\x65\162\171\137\164\150\145\x6d\145\x73") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (is_wp_error($sogksuscggsicmac)) { goto ayegqigqcsuoqess; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($sgmuqamasucuikqa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\164\x68\x65\155\x65\163"))) { goto aewqyqksisqayska; } switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::NAME); ckugukmoqamgcwci: } qqkqiioqwkekqsoq: goto umasasgawwamkisc; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $mumucmmgemqwqiia; gewecumqwgcuwikk: } omeukkwiesseygwy: goto umasasgawwamkisc; } iqsoeqgwemgyiimg: umasasgawwamkisc: aewqyqksisqayska: ayegqigqcsuoqess: return $ksaameoqigiaoigg; } public function ymaywccaiscsmsik(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo]); return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ymaywccaiscsmsik($ywmkwiwkosakssii); } public function ceqmomoiwykcyecs($assameyusgwogmce, array $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); $nsmgceoqaqogqmuw = ob_get_clean(); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\167\x69\x64\147\145\164\x5f\150\x74\x6d\154", $nsmgceoqaqogqmuw, $assameyusgwogmce); } public function wswaymeswqkeokco($ewuukoycimkekouc) { $igscmsiuisqaqwkk = null; if (!($ewuukoycimkekouc = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($ewuukoycimkekouc))) { goto muooqqykkmuismwk; } $qyyeoyuaqwwmysuu = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->eocmoukyueksgeuk(); if (!in_array($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true)) { goto scqwioawomamygwa; } $igscmsiuisqaqwkk = array_search($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true); scqwioawomamygwa: muooqqykkmuismwk: return $igscmsiuisqaqwkk; } public function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null) : ?string { $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask); $esaqeawoigqgagum = $ggauoeuaesiymgee; if (!$wksoawcgagcgoask) { goto qywgscciuywgmaia; } $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw()); if (!$couygeouymagssgw) { goto euiiaygickweagiw; } $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION); if (!in_array($yucgcsieomwqgwws, ["\x70\x68\160", "\164\167\x69\147"])) { goto auucmoqsmsouecag; } $esaqeawoigqgagum = "{$couygeouymagssgw}\57{$yucgcsieomwqgwws}\57{$ymqmyyeuycgmigyo}"; auucmoqsmsouecag: euiiaygickweagiw: qywgscciuywgmaia: return $esaqeawoigqgagum; } public function ksiiwoecggoscqkm($mokawwccycoiqeka) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu(); $qookweymeqawmcwo = ["\151\163\x5f\155\157\x62\151\x6c\x65" => $eiicaiwgqkgsekce->amkiaqeamgywsygm(), "\151\163\x5f\x74\141\x62\154\145\164" => $eiicaiwgqkgsekce->qsqicssyqieuqooy(), "\151\x73\x5f\x63\157\155\x70\x75\x74\x65\162" => $eiicaiwgqkgsekce->oyekugiwykcqismq(), "\144\141\x74\x65\137\x66\157\162\x6d\x61\164" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::weayyoewessosyko => $mokawwccycoiqeka, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::syooqwmkmsmgwcqw => $seumokooiykcomco->masoymaamekuykso($mksyucucyswaukig, true), Constants::imoqsmekaqowuwmc => $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig), Constants::uouymeyqasaeckso => $useksmwkuswkwcqg]; $aquuecykqwyukece[] = "\x69\x6e\x64\145\x78"; if ($mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw()) { goto ayoyuasegggqqosu; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto iisykceuumgoicmc; } if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto umeiiiomksmkmoaa; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto gscsssqcacocusua; } if (!$mumyimcwkaemyyue->gouusicsisumuiei()) { goto soywogweqoqmymqw; } if ($gqgemcmoicmgaqie = $mumyimcwkaemyyue->siiwuwaswckkuoya()) { goto uogakawoeucgocym; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = __("\123\145\141\x72\x63\x68", PR__CMN__FOUNDATION); goto cyukykwcccsawesg; uogakawoeucgocym: $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = sprintf(__("\x53\x65\141\162\143\150\x20\x72\145\x73\x75\154\x74\x20\x66\157\162\72\40\x25\x73", PR__CMN__FOUNDATION), $gqgemcmoicmgaqie); cyukykwcccsawesg: $aquuecykqwyukece[] = Constants::yayciqueeakqwese; $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = null; soywogweqoqmymqw: goto sqwgcyyoaismwkqs; gscsssqcacocusua: $aquuecykqwyukece[] = "\x34\x30\64"; sqwgcyyoaismwkqs: goto aokcewiioiiyiqeu; umeiiiomksmkmoaa: $qookweymeqawmcwo[Constants::mswoacegomcucaik] = $mksyucucyswaukig; $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig); $aaokuekaimigoyue = $seumokooiykcomco->aqcogscycyycgkuq($mksyucucyswaukig); $woaeeewomgcuesaa = Constants::qqoouomkeecygage; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\x6e\144\145\x78"; if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto suggiaqykiwgkkey; } if (!$mumyimcwkaemyyue->kccakwkaqugygwmq()) { goto yseoucmemeekwkig; } $cuyooiakswegosog = Constants::cwswygwykwgsqiwu; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue; yseoucmemeekwkig: goto igoseisickgqeaog; suggiaqykiwgkkey: $suaemuyiacqyugsm = Constants::imywcsggckkcywgk; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue; igoseisickgqeaog: aokcewiioiiyiqeu: goto womgsyqqiwokqyiw; iisykceuumgoicmc: $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = $ewsqcacamuomwagw->wieoiwogwmcwukom(); $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = $ewsqcacamuomwagw->syeuyeikogukksam(); $woaeeewomgcuesaa = Constants::mswmgkkakuooukme; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\156\144\x65\x78"; if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto ukecesmaioggmyoc; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto qokakquaeuigqcwy; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto owsgmougoacgokmi; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto yqukoacecemgkkay; } if ($mumyimcwkaemyyue->oowkceqysamwygwu()) { goto qgiscekgegqwemgs; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg; goto iiwessuyuisaawek; qgiscekgegqwemgs: $woaeeewomgcuesaa = Constants::kumuoysauoagaiiy; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\x64\x65\x78"; if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto gecscumwugkogmyq; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto ucwwsgoweeagukyq; } if (!$mumyimcwkaemyyue->wqscegcksyocaias()) { goto wmoqoeyuaikokayu; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eggusgsscecmiiee; wmoqoeyuaikokayu: goto yaiwoisswowiyski; ucwwsgoweeagukyq: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::qummiiakyucoycws; yaiwoisswowiyski: goto euaikwmkiyegwqae; gecscumwugkogmyq: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::caaieqwcccuueamg; euaikwmkiyegwqae: iiwessuyuisaawek: goto soyqsccuokmyuagk; yqukoacecemgkkay: $kesssewsiegssiya = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug; soyqsccuokmyuagk: goto iaqyisoeeygqwcym; owsgmougoacgokmi: $guwumyyyakswawas = Constants::qgciomgukmcwscqw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug; iaqyisoeeygqwcym: goto cymigkmkskowwcei; qokakquaeuigqcwy: $scwiymciagumsuiw = Constants::qeueagcuyogwwyky; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug; cymigkmkskowwcei: goto wcyawmskokoagwqq; ukecesmaioggmyoc: $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $qscaoekmoooeuyqg = Constants::iwascisiiokuackw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\111\104"); $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\x6e\x69\x63\153\x6e\141\155\x65"); wcyawmskokoagwqq: womgsyqqiwokqyiw: goto mkikakaaaqwygquu; ayoyuasegggqqosu: $woaeeewomgcuesaa = Constants::wwoeeogswkgeqack; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\x6e\144\x65\x78"; if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto wiqmoimycyeesqse; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = single_post_title('', false); goto kaewigguiigmcsoe; wiqmoimycyeesqse: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eycwiessycciwsao; kaewigguiigmcsoe: mkikakaaaqwygquu: $qookweymeqawmcwo["\137\x63\x75\x72\x72\x65\156\164\137\x74\x65\x6d\160\154\141\x74\145\137\156\x61\x6d\145"] = $this->aaimaiecygmeiegm($aquuecykqwyukece); return [$gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x74\145\x6d\160\154\141\164\145\137\150\x69\145\x72\x61\162\143\150\171\137\x74\x65\155\160\x6c\x61\x74\145\163", $aquuecykqwyukece, $mksyucucyswaukig), $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x74\x65\x6d\x70\x6c\x61\x74\145\137\150\151\x65\162\x61\162\x63\150\x79\x5f\160\141\162\x61\x6d\145\164\x65\x72\163", $qookweymeqawmcwo, $mksyucucyswaukig)]; } public function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca) { $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi); $qqscaoyqikuyeoaw = ''; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { goto ykmceyuggseogcgm; } if ($iawmgqqucqegmiay->exists($igqsaukqcqscimok)) { goto sscqwggcsoumagsw; } $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . "{$igqsaukqcqscimok}\x2e\150\x74\155\x6c\x2e\x74\x77\x69\147"; goto iasuykaqammykyuc; sscqwggcsoumagsw: $qqscaoyqikuyeoaw = $igqsaukqcqscimok; iasuykaqammykyuc: goto oiakiumycyquagqu; ykmceyuggseogcgm: $qqscaoyqikuyeoaw = $this->eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw); oiakiumycyquagqu: if ($iawmgqqucqegmiay->exists($qqscaoyqikuyeoaw)) { goto sycysmgqeucmisiw; } $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . "\57\151\x6e\x64\x65\170\x2e\150\164\155\x6c\56\x74\x77\151\147"; goto sawkcaueekoqcaoq; sycysmgqeucmisiw: goto cgmukwicwgikewei; sawkcaueekoqcaoq: iuasemkmccmcauoc: } cgmukwicwgikewei: return $qqscaoyqikuyeoaw; } public function aaimaiecygmeiegm($aquuecykqwyukece, bool $sysgmomuyiiawwcm = true) : array { $qcmggaiwyoeyguco = []; if (is_array($aquuecykqwyukece)) { goto uuooygauoaumkemu; } if (!$aquuecykqwyukece) { goto gaucesmmweqmemkg; } $qcmggaiwyoeyguco[] = $aquuecykqwyukece; gaucesmmweqmemkg: goto osgaygqiwagaowsq; uuooygauoaumkemu: foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) { if (!(!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco, true))) { goto ykeuwugswmeukgii; } $qcmggaiwyoeyguco[] = $uusmaiomayssaecw; ykeuwugswmeukgii: $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, $this->aaimaiecygmeiegm($qqscaoyqikuyeoaw, false)); wywuimckaigaukkg: } omcskkiwcgiysuis: osgaygqiwagaowsq: if (!$sysgmomuyiiawwcm) { goto kecaqcyccioyaoaa; } $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco); krsort($qcmggaiwyoeyguco); kecaqcyccioyaoaa: return $qcmggaiwyoeyguco; } public function youaqkimaoecgsye() : string { $uusmaiomayssaecw = ''; $mksyucucyswaukig = $this->uqsqkugwgmugquio(); if (!$mksyucucyswaukig) { goto csuyaisqcmkkyqiw; } $uusmaiomayssaecw = $mksyucucyswaukig->cisyiemkeykgkomc(); csuyaisqcmkkyqiw: return $uusmaiomayssaecw; } public function uqsqkugwgmugquio() : ?Setting { static $gaaauooqcqwiiogk; if ($gaaauooqcqwiiogk) { goto caseeeggigkaoswu; } $egsqwmeeeowomomi = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw()->get_template(); $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->omywiyesskmggqqa($egsqwmeeeowomomi); if (!$wksoawcgagcgoask) { goto qsmmausewiocaesg; } $gaaauooqcqwiiogk = $wksoawcgagcgoask->mggwieqomgcuskme(); qsmmausewiocaesg: caseeeggigkaoswu: return $gaaauooqcqwiiogk; } }
