<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Foundation; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\x71\x75\145\162\x79\137\164\x68\x65\155\145\x73") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (is_wp_error($sogksuscggsicmac)) { goto wuaogegqaecwwkyo; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($sgmuqamasucuikqa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\164\150\145\155\x65\x73"))) { goto qcogmismkiigwkcy; } switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::NAME); yauqaiisowsgmsau: } sgyysmcsyuaucmau: goto gmqqsceqqmkeuwsg; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $mumucmmgemqwqiia; akcmkmaymmcekecu: } oasuqwiwsowakwam: goto gmqqsceqqmkeuwsg; } mmoceucgeiaguqsm: gmqqsceqqmkeuwsg: qcogmismkiigwkcy: wuaogegqaecwwkyo: return $ksaameoqigiaoigg; } public function ymaywccaiscsmsik(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo]); return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ymaywccaiscsmsik($ywmkwiwkosakssii); } public function ceqmomoiwykcyecs($assameyusgwogmce, array $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); $nsmgceoqaqogqmuw = ob_get_clean(); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\167\151\144\x67\145\164\137\x68\164\x6d\x6c", $nsmgceoqaqogqmuw, $assameyusgwogmce); } public function wswaymeswqkeokco($ewuukoycimkekouc) { $igscmsiuisqaqwkk = null; if (!($ewuukoycimkekouc = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($ewuukoycimkekouc))) { goto ueiewmqseyuugaum; } $qyyeoyuaqwwmysuu = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->eocmoukyueksgeuk(); if (!in_array($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true)) { goto gakocaasskoagogo; } $igscmsiuisqaqwkk = array_search($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true); gakocaasskoagogo: ueiewmqseyuugaum: return $igscmsiuisqaqwkk; } public function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null) : ?string { $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask); $esaqeawoigqgagum = $ggauoeuaesiymgee; if (!$wksoawcgagcgoask) { goto cwkowmwgwyakkmki; } $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw()); if (!$couygeouymagssgw) { goto omscsmekaceaeico; } $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION); if (!in_array($yucgcsieomwqgwws, ["\160\150\x70", "\x74\167\x69\147"])) { goto imoksosqowqmimoc; } $esaqeawoigqgagum = "{$couygeouymagssgw}\57{$yucgcsieomwqgwws}\57{$ymqmyyeuycgmigyo}"; imoksosqowqmimoc: omscsmekaceaeico: cwkowmwgwyakkmki: return $esaqeawoigqgagum; } public function ksiiwoecggoscqkm($mokawwccycoiqeka) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu(); $qookweymeqawmcwo = ["\x69\163\137\155\x6f\x62\x69\x6c\x65" => $eiicaiwgqkgsekce->amkiaqeamgywsygm(), "\151\163\137\x74\141\x62\x6c\145\x74" => $eiicaiwgqkgsekce->qsqicssyqieuqooy(), "\x69\163\137\143\x6f\155\160\x75\164\145\x72" => $eiicaiwgqkgsekce->oyekugiwykcqismq(), "\x64\x61\x74\x65\x5f\x66\157\162\155\x61\x74" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::weayyoewessosyko => $mokawwccycoiqeka, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::syooqwmkmsmgwcqw => $seumokooiykcomco->masoymaamekuykso($mksyucucyswaukig, true), Constants::imoqsmekaqowuwmc => $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig), Constants::uouymeyqasaeckso => $useksmwkuswkwcqg]; $aquuecykqwyukece[] = "\x69\156\144\x65\x78"; if ($mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw()) { goto gsmwukqywosmyauk; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto mgsusugkgmaowkwy; } if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto wqmkimmusyyeicag; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto ukgkawqgeqswmywc; } if (!$mumyimcwkaemyyue->gouusicsisumuiei()) { goto usgiwsguoqiaguiu; } if ($gqgemcmoicmgaqie = $mumyimcwkaemyyue->siiwuwaswckkuoya()) { goto wkcuekwsymskwwcy; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = __("\123\145\x61\x72\x63\x68", PR__CMN__FOUNDATION); goto wgmcumeeyosmwqgi; wkcuekwsymskwwcy: $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = sprintf(__("\123\x65\x61\x72\x63\150\x20\162\145\163\165\154\x74\40\146\157\162\72\40\x25\163", PR__CMN__FOUNDATION), $gqgemcmoicmgaqie); wgmcumeeyosmwqgi: $aquuecykqwyukece[] = Constants::yayciqueeakqwese; $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = null; usgiwsguoqiaguiu: goto smuaquguuyqakyyk; ukgkawqgeqswmywc: $aquuecykqwyukece[] = "\x34\60\64"; smuaquguuyqakyyk: goto ykymyiswyykokeoi; wqmkimmusyyeicag: $qookweymeqawmcwo[Constants::mswoacegomcucaik] = $mksyucucyswaukig; $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig); $aaokuekaimigoyue = $seumokooiykcomco->aqcogscycyycgkuq($mksyucucyswaukig); $woaeeewomgcuesaa = Constants::qqoouomkeecygage; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\144\145\x78"; if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto qoqyqgqoqkaeuyoi; } if (!$mumyimcwkaemyyue->kccakwkaqugygwmq()) { goto yqiwyqiseaywuiyk; } $cuyooiakswegosog = Constants::cwswygwykwgsqiwu; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue; yqiwyqiseaywuiyk: goto wsmymasiyaoyaaww; qoqyqgqoqkaeuyoi: $suaemuyiacqyugsm = Constants::imywcsggckkcywgk; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue; wsmymasiyaoyaaww: ykymyiswyykokeoi: goto imyksgwckoyysuwo; mgsusugkgmaowkwy: $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = $ewsqcacamuomwagw->wieoiwogwmcwukom(); $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = $ewsqcacamuomwagw->syeuyeikogukksam(); $woaeeewomgcuesaa = Constants::mswmgkkakuooukme; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\144\x65\170"; if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto kgwwccucyguacyku; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto mckcswqwkwukogqy; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto qwaewmyemsgqgkwg; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto osiyyuaaukmsugso; } if ($mumyimcwkaemyyue->oowkceqysamwygwu()) { goto wiawkskyaqysiqsq; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg; goto qkmimisossgioguq; wiawkskyaqysiqsq: $woaeeewomgcuesaa = Constants::kumuoysauoagaiiy; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\x64\x65\x78"; if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto agckeekgsueysiac; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto eoamsouwygskswie; } if (!$mumyimcwkaemyyue->wqscegcksyocaias()) { goto aeqakycgmcyiisae; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eggusgsscecmiiee; aeqakycgmcyiisae: goto gowiwcysiyeummgy; eoamsouwygskswie: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::qummiiakyucoycws; gowiwcysiyeummgy: goto kyieaymowioesowa; agckeekgsueysiac: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::caaieqwcccuueamg; kyieaymowioesowa: qkmimisossgioguq: goto cskqgasmygooeiki; osiyyuaaukmsugso: $kesssewsiegssiya = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug; cskqgasmygooeiki: goto wwmkccqcyqkskosu; qwaewmyemsgqgkwg: $guwumyyyakswawas = Constants::qgciomgukmcwscqw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug; wwmkccqcyqkskosu: goto qquuscuqaaeemooq; mckcswqwkwukogqy: $scwiymciagumsuiw = Constants::qeueagcuyogwwyky; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug; qquuscuqaaeemooq: goto wmimosiokccysyuo; kgwwccucyguacyku: $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $qscaoekmoooeuyqg = Constants::iwascisiiokuackw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\111\104"); $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\x6e\x69\143\153\x6e\x61\x6d\145"); wmimosiokccysyuo: imyksgwckoyysuwo: goto ayiescmccgoscuwm; gsmwukqywosmyauk: $woaeeewomgcuesaa = Constants::wwoeeogswkgeqack; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\x64\145\x78"; if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto qwqaqqqqiksaqkss; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = single_post_title('', false); goto wkosyweqgikaakak; qwqaqqqqiksaqkss: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eycwiessycciwsao; wkosyweqgikaakak: ayiescmccgoscuwm: $qookweymeqawmcwo["\x5f\143\165\x72\x72\145\156\x74\x5f\164\x65\155\160\x6c\141\164\x65\137\x6e\x61\155\x65"] = $this->aaimaiecygmeiegm($aquuecykqwyukece); return [$gsyaugcyoggmiuwy->ocksiywmkyaqseou("\164\145\155\160\x6c\141\x74\145\x5f\x68\x69\145\162\x61\x72\143\x68\x79\x5f\164\145\x6d\x70\154\141\164\x65\163", $aquuecykqwyukece, $mksyucucyswaukig), $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x74\x65\x6d\160\154\141\164\x65\137\x68\151\145\x72\141\x72\143\x68\171\137\160\x61\x72\x61\155\x65\164\x65\x72\163", $qookweymeqawmcwo, $mksyucucyswaukig)]; } public function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca) { $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi); $qqscaoyqikuyeoaw = ''; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { goto euuwcqqueakwukom; } if ($iawmgqqucqegmiay->exists($igqsaukqcqscimok)) { goto gsyiisgksesmwkme; } $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . "{$igqsaukqcqscimok}\56\150\x74\155\x6c\56\164\167\x69\x67"; goto iquaiwacukwgyksm; gsyiisgksesmwkme: $qqscaoyqikuyeoaw = $igqsaukqcqscimok; iquaiwacukwgyksm: goto gqeaoyucgsqueucg; euuwcqqueakwukom: $qqscaoyqikuyeoaw = $this->eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw); gqeaoyucgsqueucg: if ($iawmgqqucqegmiay->exists($qqscaoyqikuyeoaw)) { goto ggioowsogoacmyyi; } $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . "\57\151\x6e\x64\x65\170\56\x68\x74\155\154\56\x74\167\151\x67"; goto ggyikcqwqysmouye; ggioowsogoacmyyi: goto siamksowsoewemyk; ggyikcqwqysmouye: kwiouekiyaeoeiwq: } siamksowsoewemyk: return $qqscaoyqikuyeoaw; } public function aaimaiecygmeiegm($aquuecykqwyukece, bool $sysgmomuyiiawwcm = true) : array { $qcmggaiwyoeyguco = []; if (is_array($aquuecykqwyukece)) { goto ywswgoesmiwgckcu; } if (!$aquuecykqwyukece) { goto gaymgiaccgkgsiwq; } $qcmggaiwyoeyguco[] = $aquuecykqwyukece; gaymgiaccgkgsiwq: goto ummiwuqqisqgwoco; ywswgoesmiwgckcu: foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) { if (!(!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco, true))) { goto cequowgomkkwmoom; } $qcmggaiwyoeyguco[] = $uusmaiomayssaecw; cequowgomkkwmoom: $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, $this->aaimaiecygmeiegm($qqscaoyqikuyeoaw, false)); oekeqowkqecgsmuk: } uqwwsmumussiogou: ummiwuqqisqgwoco: if (!$sysgmomuyiiawwcm) { goto myikgqcgseikimwa; } $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco); krsort($qcmggaiwyoeyguco); myikgqcgseikimwa: return $qcmggaiwyoeyguco; } public function youaqkimaoecgsye() : string { $uusmaiomayssaecw = ''; $mksyucucyswaukig = $this->uqsqkugwgmugquio(); if (!$mksyucucyswaukig) { goto ooyyuaswogikyggu; } $uusmaiomayssaecw = $mksyucucyswaukig->cisyiemkeykgkomc(); ooyyuaswogikyggu: return $uusmaiomayssaecw; } public function uqsqkugwgmugquio() : ?Setting { static $gaaauooqcqwiiogk; if ($gaaauooqcqwiiogk) { goto saueosiwcgqsmgmk; } $egsqwmeeeowomomi = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw()->get_template(); $wksoawcgagcgoask = Foundation::symcgieuakksimmu()->eeqqugcowsqysask($egsqwmeeeowomomi); if (!$wksoawcgagcgoask) { goto keigessgsgawiyyo; } $gaaauooqcqwiiogk = $wksoawcgagcgoask->mggwieqomgcuskme(); keigessgsgawiyyo: saueosiwcgqsmgmk: return $gaaauooqcqwiiogk; } }
