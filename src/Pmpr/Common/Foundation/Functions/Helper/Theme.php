<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbd402ffa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Foundation; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\161\x75\x65\162\171\137\164\150\x65\155\145\x73") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (!is_wp_error($sogksuscggsicmac)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($sgmuqamasucuikqa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\164\150\145\x6d\x65\x73")) { switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::NAME); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $mumucmmgemqwqiia; } break; } } } return $ksaameoqigiaoigg; } public function ymaywccaiscsmsik(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo]); return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ymaywccaiscsmsik($ywmkwiwkosakssii); } public function ceqmomoiwykcyecs($assameyusgwogmce, array $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); $nsmgceoqaqogqmuw = ob_get_clean(); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x77\151\x64\x67\x65\164\x5f\150\164\x6d\154", $nsmgceoqaqogqmuw, $assameyusgwogmce); } public function wswaymeswqkeokco($ewuukoycimkekouc) { $igscmsiuisqaqwkk = null; if ($ewuukoycimkekouc = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($ewuukoycimkekouc)) { $qyyeoyuaqwwmysuu = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->eocmoukyueksgeuk(); if (in_array($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true)) { $igscmsiuisqaqwkk = array_search($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true); } } return $igscmsiuisqaqwkk; } public function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null) : ?string { $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask); $esaqeawoigqgagum = $ggauoeuaesiymgee; if ($wksoawcgagcgoask) { $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw()); if ($couygeouymagssgw) { $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION); if (in_array($yucgcsieomwqgwws, ["\160\x68\160", "\x74\167\151\x67"])) { $esaqeawoigqgagum = "{$couygeouymagssgw}\x2f{$yucgcsieomwqgwws}\x2f{$ymqmyyeuycgmigyo}"; } } } return $esaqeawoigqgagum; } public function ksiiwoecggoscqkm($mokawwccycoiqeka) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu(); $qookweymeqawmcwo = ["\151\163\137\x6d\x6f\142\x69\x6c\x65" => $eiicaiwgqkgsekce->amkiaqeamgywsygm(), "\151\163\137\164\x61\x62\154\x65\164" => $eiicaiwgqkgsekce->qsqicssyqieuqooy(), "\x69\x73\x5f\x63\157\155\x70\165\164\145\x72" => $eiicaiwgqkgsekce->oyekugiwykcqismq(), "\144\141\164\145\x5f\x66\x6f\162\x6d\141\164" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::weayyoewessosyko => $mokawwccycoiqeka, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::syooqwmkmsmgwcqw => $seumokooiykcomco->masoymaamekuykso($mksyucucyswaukig, true), Constants::imoqsmekaqowuwmc => $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig), Constants::uouymeyqasaeckso => $useksmwkuswkwcqg]; $aquuecykqwyukece[] = "\151\156\144\145\170"; if ($mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw()) { $woaeeewomgcuesaa = Constants::wwoeeogswkgeqack; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\144\145\x78"; if ($mumyimcwkaemyyue->takycgcamoacksqw()) { $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eycwiessycciwsao; } else { $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = single_post_title('', false); } } else { if ($mumyimcwkaemyyue->migkyseymeomymmy()) { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = $ewsqcacamuomwagw->wieoiwogwmcwukom(); $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = $ewsqcacamuomwagw->syeuyeikogukksam(); $woaeeewomgcuesaa = Constants::mswmgkkakuooukme; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\x6e\x64\145\170"; if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $qscaoekmoooeuyqg = Constants::iwascisiiokuackw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\x49\104"); $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\x6e\x69\143\x6b\156\141\155\145"); } else { if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { $scwiymciagumsuiw = Constants::qeueagcuyogwwyky; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug; } else { if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { $guwumyyyakswawas = Constants::qgciomgukmcwscqw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug; } else { if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { $kesssewsiegssiya = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug; } else { if ($mumyimcwkaemyyue->oowkceqysamwygwu()) { $woaeeewomgcuesaa = Constants::kumuoysauoagaiiy; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\x6e\x64\145\x78"; if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::caaieqwcccuueamg; } else { if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::qummiiakyucoycws; } else { if ($mumyimcwkaemyyue->wqscegcksyocaias()) { $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eggusgsscecmiiee; } } } } else { $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg; } } } } } } else { if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { $qookweymeqawmcwo[Constants::mswoacegomcucaik] = $mksyucucyswaukig; $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig); $aaokuekaimigoyue = $seumokooiykcomco->aqcogscycyycgkuq($mksyucucyswaukig); $woaeeewomgcuesaa = Constants::qqoouomkeecygage; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\x64\x65\170"; if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = Constants::imywcsggckkcywgk; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue; } else { if ($mumyimcwkaemyyue->kccakwkaqugygwmq()) { $cuyooiakswegosog = Constants::cwswygwykwgsqiwu; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue; } } } else { if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { $aquuecykqwyukece[] = "\64\x30\64"; } else { if ($mumyimcwkaemyyue->gouusicsisumuiei()) { if ($gqgemcmoicmgaqie = $mumyimcwkaemyyue->siiwuwaswckkuoya()) { $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = sprintf(__("\x53\145\x61\x72\x63\150\x20\162\x65\x73\165\x6c\x74\40\x66\157\162\x3a\40\x25\163", PR__CMN__FOUNDATION), $gqgemcmoicmgaqie); } else { $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = __("\x53\x65\141\x72\143\x68", PR__CMN__FOUNDATION); } $aquuecykqwyukece[] = Constants::yayciqueeakqwese; $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = null; } } } } } $qookweymeqawmcwo["\x5f\x63\x75\x72\162\145\x6e\164\137\x74\145\155\x70\x6c\x61\x74\145\137\156\141\x6d\145"] = $this->aaimaiecygmeiegm($aquuecykqwyukece); return [$gsyaugcyoggmiuwy->ocksiywmkyaqseou("\164\x65\155\160\154\141\x74\145\x5f\150\x69\145\162\141\162\143\150\x79\x5f\164\x65\x6d\160\154\141\x74\x65\x73", $aquuecykqwyukece, $mksyucucyswaukig), $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\164\145\155\x70\x6c\141\x74\145\137\150\151\145\x72\x61\x72\143\x68\171\137\160\141\162\141\x6d\145\164\145\x72\x73", $qookweymeqawmcwo, $mksyucucyswaukig)]; } public function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca) { $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi); $qqscaoyqikuyeoaw = ''; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { $qqscaoyqikuyeoaw = $this->eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw); } else { if ($iawmgqqucqegmiay->exists($igqsaukqcqscimok)) { $qqscaoyqikuyeoaw = $igqsaukqcqscimok; } else { $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . "{$igqsaukqcqscimok}\x2e\150\x74\x6d\154\56\164\167\x69\147"; } } if ($iawmgqqucqegmiay->exists($qqscaoyqikuyeoaw)) { break; } else { $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . "\57\151\156\x64\145\x78\56\x68\x74\x6d\x6c\56\x74\167\151\x67"; } } return $qqscaoyqikuyeoaw; } public function aaimaiecygmeiegm($aquuecykqwyukece, bool $sysgmomuyiiawwcm = true) : array { $qcmggaiwyoeyguco = []; if (is_array($aquuecykqwyukece)) { foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) { if (!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco, true)) { $qcmggaiwyoeyguco[] = $uusmaiomayssaecw; } $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, $this->aaimaiecygmeiegm($qqscaoyqikuyeoaw, false)); } } else { if ($aquuecykqwyukece) { $qcmggaiwyoeyguco[] = $aquuecykqwyukece; } } if ($sysgmomuyiiawwcm) { $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco); krsort($qcmggaiwyoeyguco); } return $qcmggaiwyoeyguco; } public function youaqkimaoecgsye() : string { $uusmaiomayssaecw = ''; $mksyucucyswaukig = $this->uqsqkugwgmugquio(); if ($mksyucucyswaukig) { $uusmaiomayssaecw = $mksyucucyswaukig->cisyiemkeykgkomc(); } return $uusmaiomayssaecw; } public function uqsqkugwgmugquio() : ?Setting { static $gaaauooqcqwiiogk; if (!$gaaauooqcqwiiogk) { $egsqwmeeeowomomi = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw()->get_template(); $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->omywiyesskmggqqa($egsqwmeeeowomomi); if ($wksoawcgagcgoask) { $gaaauooqcqwiiogk = $wksoawcgagcgoask->mggwieqomgcuskme(); } } return $gaaauooqcqwiiogk; } }
