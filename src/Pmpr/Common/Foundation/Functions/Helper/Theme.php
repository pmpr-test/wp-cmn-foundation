<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Foundation; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\161\x75\145\162\171\137\x74\x68\145\155\145\x73") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (is_wp_error($sogksuscggsicmac)) { goto wsmymasiyaoyaaww; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($sgmuqamasucuikqa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x74\150\145\155\145\163"))) { goto qoqyqgqoqkaeuyoi; } switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::NAME); kgwwccucyguacyku: } qquuscuqaaeemooq: goto wwmkccqcyqkskosu; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $mumucmmgemqwqiia; yqiwyqiseaywuiyk: } wmimosiokccysyuo: goto wwmkccqcyqkskosu; } mckcswqwkwukogqy: wwmkccqcyqkskosu: qoqyqgqoqkaeuyoi: wsmymasiyaoyaaww: return $ksaameoqigiaoigg; } public function ymaywccaiscsmsik(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo]); return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ymaywccaiscsmsik($ywmkwiwkosakssii); } public function ceqmomoiwykcyecs($assameyusgwogmce, array $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); $nsmgceoqaqogqmuw = ob_get_clean(); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\167\151\144\x67\x65\x74\137\x68\164\x6d\x6c", $nsmgceoqaqogqmuw, $assameyusgwogmce); } public function wswaymeswqkeokco($ewuukoycimkekouc) { $igscmsiuisqaqwkk = null; if (!($ewuukoycimkekouc = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($ewuukoycimkekouc))) { goto wgmcumeeyosmwqgi; } $qyyeoyuaqwwmysuu = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->eocmoukyueksgeuk(); if (!in_array($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true)) { goto wkcuekwsymskwwcy; } $igscmsiuisqaqwkk = array_search($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true); wkcuekwsymskwwcy: wgmcumeeyosmwqgi: return $igscmsiuisqaqwkk; } public function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null) : ?string { $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask); $esaqeawoigqgagum = $ggauoeuaesiymgee; if (!$wksoawcgagcgoask) { goto smuaquguuyqakyyk; } $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw()); if (!$couygeouymagssgw) { goto ukgkawqgeqswmywc; } $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION); if (!in_array($yucgcsieomwqgwws, ["\x70\150\x70", "\x74\x77\x69\x67"])) { goto usgiwsguoqiaguiu; } $esaqeawoigqgagum = "{$couygeouymagssgw}\57{$yucgcsieomwqgwws}\x2f{$ymqmyyeuycgmigyo}"; usgiwsguoqiaguiu: ukgkawqgeqswmywc: smuaquguuyqakyyk: return $esaqeawoigqgagum; } public function ksiiwoecggoscqkm($mokawwccycoiqeka) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu(); $qookweymeqawmcwo = ["\151\163\x5f\155\x6f\x62\x69\x6c\x65" => $eiicaiwgqkgsekce->amkiaqeamgywsygm(), "\151\163\137\x74\x61\x62\x6c\145\164" => $eiicaiwgqkgsekce->qsqicssyqieuqooy(), "\151\x73\x5f\x63\x6f\155\160\x75\x74\x65\x72" => $eiicaiwgqkgsekce->oyekugiwykcqismq(), "\x64\x61\x74\145\x5f\146\x6f\x72\x6d\x61\x74" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::weayyoewessosyko => $mokawwccycoiqeka, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::syooqwmkmsmgwcqw => $seumokooiykcomco->masoymaamekuykso($mksyucucyswaukig, true), Constants::imoqsmekaqowuwmc => $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig), Constants::uouymeyqasaeckso => $useksmwkuswkwcqg]; $aquuecykqwyukece[] = "\x69\x6e\x64\145\170"; if ($mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw()) { goto swmkkiiauusieuqw; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto kgigsakiwsqqioim; } if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto cigcsyiesymkuywu; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto saueosiwcgqsmgmk; } if (!$mumyimcwkaemyyue->gouusicsisumuiei()) { goto keigessgsgawiyyo; } if ($gqgemcmoicmgaqie = $mumyimcwkaemyyue->siiwuwaswckkuoya()) { goto myikgqcgseikimwa; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = __("\x53\145\x61\162\x63\150", PR__CMN__FOUNDATION); goto ooyyuaswogikyggu; myikgqcgseikimwa: $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = sprintf(__("\x53\x65\141\162\x63\150\x20\x72\145\163\x75\154\164\40\146\157\162\x3a\x20\45\x73", PR__CMN__FOUNDATION), $gqgemcmoicmgaqie); ooyyuaswogikyggu: $aquuecykqwyukece[] = Constants::yayciqueeakqwese; $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = null; keigessgsgawiyyo: goto kgmwmmiemqggaqeq; saueosiwcgqsmgmk: $aquuecykqwyukece[] = "\64\x30\64"; kgmwmmiemqggaqeq: goto ugwqwcgoswkkwcee; cigcsyiesymkuywu: $qookweymeqawmcwo[Constants::mswoacegomcucaik] = $mksyucucyswaukig; $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig); $aaokuekaimigoyue = $seumokooiykcomco->aqcogscycyycgkuq($mksyucucyswaukig); $woaeeewomgcuesaa = Constants::qqoouomkeecygage; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\156\144\145\170"; if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto ywswgoesmiwgckcu; } if (!$mumyimcwkaemyyue->kccakwkaqugygwmq()) { goto gaymgiaccgkgsiwq; } $cuyooiakswegosog = Constants::cwswygwykwgsqiwu; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue; gaymgiaccgkgsiwq: goto ummiwuqqisqgwoco; ywswgoesmiwgckcu: $suaemuyiacqyugsm = Constants::imywcsggckkcywgk; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue; ummiwuqqisqgwoco: ugwqwcgoswkkwcee: goto aosmakasyommmioc; kgigsakiwsqqioim: $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = $ewsqcacamuomwagw->wieoiwogwmcwukom(); $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = $ewsqcacamuomwagw->syeuyeikogukksam(); $woaeeewomgcuesaa = Constants::mswmgkkakuooukme; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\x6e\144\145\x78"; if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto oekeqowkqecgsmuk; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto ggyikcqwqysmouye; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto gqeaoyucgsqueucg; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto iquaiwacukwgyksm; } if ($mumyimcwkaemyyue->oowkceqysamwygwu()) { goto kwiouekiyaeoeiwq; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg; goto gsyiisgksesmwkme; kwiouekiyaeoeiwq: $woaeeewomgcuesaa = Constants::kumuoysauoagaiiy; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\x64\145\x78"; if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto ayiescmccgoscuwm; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto imyksgwckoyysuwo; } if (!$mumyimcwkaemyyue->wqscegcksyocaias()) { goto mgsusugkgmaowkwy; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eggusgsscecmiiee; mgsusugkgmaowkwy: goto gsmwukqywosmyauk; imyksgwckoyysuwo: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::qummiiakyucoycws; gsmwukqywosmyauk: goto siamksowsoewemyk; ayiescmccgoscuwm: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::caaieqwcccuueamg; siamksowsoewemyk: gsyiisgksesmwkme: goto euuwcqqueakwukom; iquaiwacukwgyksm: $kesssewsiegssiya = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug; euuwcqqueakwukom: goto ggioowsogoacmyyi; gqeaoyucgsqueucg: $guwumyyyakswawas = Constants::qgciomgukmcwscqw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug; ggioowsogoacmyyi: goto uqwwsmumussiogou; ggyikcqwqysmouye: $scwiymciagumsuiw = Constants::qeueagcuyogwwyky; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug; uqwwsmumussiogou: goto cequowgomkkwmoom; oekeqowkqecgsmuk: $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $qscaoekmoooeuyqg = Constants::iwascisiiokuackw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\111\104"); $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\156\151\143\x6b\156\x61\155\x65"); cequowgomkkwmoom: aosmakasyommmioc: goto sgqaaocqgayiigos; swmkkiiauusieuqw: $woaeeewomgcuesaa = Constants::wwoeeogswkgeqack; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\x6e\144\x65\170"; if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto wqmkimmusyyeicag; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = single_post_title('', false); goto ykymyiswyykokeoi; wqmkimmusyyeicag: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eycwiessycciwsao; ykymyiswyykokeoi: sgqaaocqgayiigos: $qookweymeqawmcwo["\137\x63\165\x72\x72\145\156\164\137\x74\145\155\x70\x6c\x61\x74\x65\x5f\156\x61\155\145"] = $this->aaimaiecygmeiegm($aquuecykqwyukece); return [$gsyaugcyoggmiuwy->ocksiywmkyaqseou("\164\x65\155\160\154\141\x74\145\x5f\150\151\145\x72\141\162\x63\x68\x79\x5f\x74\145\x6d\160\154\141\x74\145\163", $aquuecykqwyukece, $mksyucucyswaukig), $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x74\x65\x6d\x70\x6c\141\x74\145\137\150\x69\x65\x72\x61\x72\143\150\x79\137\160\141\162\x61\155\145\x74\x65\162\x73", $qookweymeqawmcwo, $mksyucucyswaukig)]; } public function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca) { $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi); $qqscaoyqikuyeoaw = ''; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { goto iwkwesmeiywuuugk; } if ($iawmgqqucqegmiay->exists($igqsaukqcqscimok)) { goto eoawekcguswgyykc; } $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . "{$igqsaukqcqscimok}\56\150\x74\x6d\154\x2e\164\x77\x69\147"; goto wwiasiiquqqmmqay; eoawekcguswgyykc: $qqscaoyqikuyeoaw = $igqsaukqcqscimok; wwiasiiquqqmmqay: goto akymcmmokgskeqiu; iwkwesmeiywuuugk: $qqscaoyqikuyeoaw = $this->eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw); akymcmmokgskeqiu: if ($iawmgqqucqegmiay->exists($qqscaoyqikuyeoaw)) { goto vgggsmmgmwumikmc; } $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . "\x2f\x69\156\144\x65\x78\56\150\164\155\x6c\56\164\167\x69\147"; goto ycomuqussgiacuom; vgggsmmgmwumikmc: goto wmyagwwmquqeyyok; ycomuqussgiacuom: mocauoaugmiuacuu: } wmyagwwmquqeyyok: return $qqscaoyqikuyeoaw; } public function aaimaiecygmeiegm($aquuecykqwyukece, bool $sysgmomuyiiawwcm = true) : array { $qcmggaiwyoeyguco = []; if (is_array($aquuecykqwyukece)) { goto wusuosaiqosakcqq; } if (!$aquuecykqwyukece) { goto yqismiumwaaeqgwu; } $qcmggaiwyoeyguco[] = $aquuecykqwyukece; yqismiumwaaeqgwu: goto kaueiekkeciiaswy; wusuosaiqosakcqq: foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) { if (!(!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco, true))) { goto iwigaaoiqyugwacm; } $qcmggaiwyoeyguco[] = $uusmaiomayssaecw; iwigaaoiqyugwacm: $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, $this->aaimaiecygmeiegm($qqscaoyqikuyeoaw, false)); uqekawymqmyaqaao: } yuuyqoyguaqsswey: kaueiekkeciiaswy: if (!$sysgmomuyiiawwcm) { goto iieykwekyukgsias; } $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco); krsort($qcmggaiwyoeyguco); iieykwekyukgsias: return $qcmggaiwyoeyguco; } public function youaqkimaoecgsye() : string { $uusmaiomayssaecw = ''; $mksyucucyswaukig = $this->uqsqkugwgmugquio(); if (!$mksyucucyswaukig) { goto yiuwqcqesuysmegs; } $uusmaiomayssaecw = $mksyucucyswaukig->cisyiemkeykgkomc(); yiuwqcqesuysmegs: return $uusmaiomayssaecw; } public function uqsqkugwgmugquio() : ?Setting { static $gaaauooqcqwiiogk; if ($gaaauooqcqwiiogk) { goto kmawikcwmucoyeio; } $egsqwmeeeowomomi = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw()->get_template(); $wksoawcgagcgoask = Foundation::symcgieuakksimmu()->eeqqugcowsqysask($egsqwmeeeowomomi); if (!$wksoawcgagcgoask) { goto mauoymckskucuemc; } $gaaauooqcqwiiogk = $wksoawcgagcgoask->mggwieqomgcuskme(); mauoymckskucuemc: kmawikcwmucoyeio: return $gaaauooqcqwiiogk; } }
