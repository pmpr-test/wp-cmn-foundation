<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7b4dde2139             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Foundation; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = 'query_themes') : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (!is_wp_error($sogksuscggsicmac)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($sgmuqamasucuikqa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, 'themes')) { switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::NAME); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $mumucmmgemqwqiia; } break; } } } return $ksaameoqigiaoigg; } public function ymaywccaiscsmsik(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo]); return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ymaywccaiscsmsik($ywmkwiwkosakssii); } public function ceqmomoiwykcyecs($assameyusgwogmce, array $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); $nsmgceoqaqogqmuw = ob_get_clean(); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('widget_html', $nsmgceoqaqogqmuw, $assameyusgwogmce); } public function wswaymeswqkeokco($ewuukoycimkekouc) { $igscmsiuisqaqwkk = null; if ($ewuukoycimkekouc = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($ewuukoycimkekouc)) { $qyyeoyuaqwwmysuu = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->eocmoukyueksgeuk(); if (in_array($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true)) { $igscmsiuisqaqwkk = array_search($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true); } } return $igscmsiuisqaqwkk; } public function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null) : ?string { $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask); $esaqeawoigqgagum = $ggauoeuaesiymgee; if ($wksoawcgagcgoask) { $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw()); if ($couygeouymagssgw) { $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION); if (in_array($yucgcsieomwqgwws, ['php', 'twig'])) { $esaqeawoigqgagum = "{$couygeouymagssgw}/{$yucgcsieomwqgwws}/{$ymqmyyeuycgmigyo}"; } } } return $esaqeawoigqgagum; } public function ksiiwoecggoscqkm($mokawwccycoiqeka) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu(); $qookweymeqawmcwo = ['is_mobile' => $eiicaiwgqkgsekce->amkiaqeamgywsygm(), 'is_tablet' => $eiicaiwgqkgsekce->qsqicssyqieuqooy(), 'is_computer' => $eiicaiwgqkgsekce->oyekugiwykcqismq(), 'date_format' => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::weayyoewessosyko => $mokawwccycoiqeka, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::syooqwmkmsmgwcqw => $seumokooiykcomco->masoymaamekuykso($mksyucucyswaukig, true), Constants::imoqsmekaqowuwmc => $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig), Constants::uouymeyqasaeckso => $useksmwkuswkwcqg]; $aquuecykqwyukece[] = 'index'; if ($mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw()) { $woaeeewomgcuesaa = Constants::wwoeeogswkgeqack; $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'index'; if ($mumyimcwkaemyyue->takycgcamoacksqw()) { $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eycwiessycciwsao; } else { $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = single_post_title('', false); } } else { if ($mumyimcwkaemyyue->migkyseymeomymmy()) { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = $ewsqcacamuomwagw->wieoiwogwmcwukom(); $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = $ewsqcacamuomwagw->syeuyeikogukksam(); $woaeeewomgcuesaa = Constants::mswmgkkakuooukme; $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'index'; if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $qscaoekmoooeuyqg = Constants::iwascisiiokuackw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw('ID'); $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw('nickname'); } else { if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { $scwiymciagumsuiw = Constants::qeueagcuyogwwyky; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug; } else { if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { $guwumyyyakswawas = Constants::qgciomgukmcwscqw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug; } else { if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { $kesssewsiegssiya = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug; } else { if ($mumyimcwkaemyyue->oowkceqysamwygwu()) { $woaeeewomgcuesaa = Constants::kumuoysauoagaiiy; $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'index'; if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::caaieqwcccuueamg; } else { if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::qummiiakyucoycws; } else { if ($mumyimcwkaemyyue->wqscegcksyocaias()) { $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eggusgsscecmiiee; } } } } else { $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg; } } } } } } else { if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { $qookweymeqawmcwo[Constants::mswoacegomcucaik] = $mksyucucyswaukig; $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig); $aaokuekaimigoyue = $seumokooiykcomco->aqcogscycyycgkuq($mksyucucyswaukig); $woaeeewomgcuesaa = Constants::qqoouomkeecygage; $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'index'; if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = Constants::imywcsggckkcywgk; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue; } else { if ($mumyimcwkaemyyue->kccakwkaqugygwmq()) { $cuyooiakswegosog = Constants::cwswygwykwgsqiwu; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue; } } } else { if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { $aquuecykqwyukece[] = '404'; } else { if ($mumyimcwkaemyyue->gouusicsisumuiei()) { if ($gqgemcmoicmgaqie = $mumyimcwkaemyyue->siiwuwaswckkuoya()) { $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = sprintf(__('Search result for: %s', PR__CMN__FOUNDATION), $gqgemcmoicmgaqie); } else { $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = __('Search', PR__CMN__FOUNDATION); } $aquuecykqwyukece[] = Constants::yayciqueeakqwese; $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = null; } } } } } $qookweymeqawmcwo['_current_template_name'] = $this->aaimaiecygmeiegm($aquuecykqwyukece); return [$gsyaugcyoggmiuwy->ocksiywmkyaqseou('template_hierarchy_templates', $aquuecykqwyukece, $mksyucucyswaukig), $gsyaugcyoggmiuwy->ocksiywmkyaqseou('template_hierarchy_parameters', $qookweymeqawmcwo, $mksyucucyswaukig)]; } public function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca) { $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi); $qqscaoyqikuyeoaw = ''; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { $qqscaoyqikuyeoaw = $this->eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw); } else { if ($iawmgqqucqegmiay->exists($igqsaukqcqscimok)) { $qqscaoyqikuyeoaw = $igqsaukqcqscimok; } else { $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . "{$igqsaukqcqscimok}.html.twig"; } } if ($iawmgqqucqegmiay->exists($qqscaoyqikuyeoaw)) { break; } else { $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . '/index.html.twig'; } } return $qqscaoyqikuyeoaw; } public function aaimaiecygmeiegm($aquuecykqwyukece, bool $sysgmomuyiiawwcm = true) : array { $qcmggaiwyoeyguco = []; if (is_array($aquuecykqwyukece)) { foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) { if (!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco, true)) { $qcmggaiwyoeyguco[] = $uusmaiomayssaecw; } $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, $this->aaimaiecygmeiegm($qqscaoyqikuyeoaw, false)); } } else { if ($aquuecykqwyukece) { $qcmggaiwyoeyguco[] = $aquuecykqwyukece; } } if ($sysgmomuyiiawwcm) { $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco); krsort($qcmggaiwyoeyguco); } return $qcmggaiwyoeyguco; } public function youaqkimaoecgsye() : string { $uusmaiomayssaecw = ''; $mksyucucyswaukig = $this->uqsqkugwgmugquio(); if ($mksyucucyswaukig) { $uusmaiomayssaecw = $mksyucucyswaukig->cisyiemkeykgkomc(); } return $uusmaiomayssaecw; } public function uqsqkugwgmugquio() : ?Setting { static $gaaauooqcqwiiogk; if (!$gaaauooqcqwiiogk) { $egsqwmeeeowomomi = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw()->get_template(); $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->omywiyesskmggqqa($egsqwmeeeowomomi); if ($wksoawcgagcgoask) { $gaaauooqcqwiiogk = $wksoawcgagcgoask->mggwieqomgcuskme(); } } return $gaaauooqcqwiiogk; } }
