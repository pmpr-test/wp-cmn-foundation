<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; use Pmpr\Common\Foundation\Foundation; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\x71\165\x65\162\x79\137\164\x68\145\155\x65\163") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (is_wp_error($sogksuscggsicmac)) { goto gaymgiaccgkgsiwq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($sgmuqamasucuikqa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\164\150\x65\155\145\163"))) { goto cequowgomkkwmoom; } switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::NAME); ggyikcqwqysmouye: } ggioowsogoacmyyi: goto euuwcqqueakwukom; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($sgmuqamasucuikqa as $mumucmmgemqwqiia) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mumucmmgemqwqiia, Constants::ouywiegeiyuaaawo)] = $mumucmmgemqwqiia; oekeqowkqecgsmuk: } uqwwsmumussiogou: goto euuwcqqueakwukom; } gqeaoyucgsqueucg: euuwcqqueakwukom: cequowgomkkwmoom: gaymgiaccgkgsiwq: return $ksaameoqigiaoigg; } public function ymaywccaiscsmsik(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo]); return $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ymaywccaiscsmsik($ywmkwiwkosakssii); } public function ceqmomoiwykcyecs($assameyusgwogmce, array $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { ob_start(); $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); $nsmgceoqaqogqmuw = ob_get_clean(); return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\167\x69\144\147\145\x74\137\150\x74\x6d\154", $nsmgceoqaqogqmuw, $assameyusgwogmce); } public function wswaymeswqkeokco($ewuukoycimkekouc) { $igscmsiuisqaqwkk = null; if (!($ewuukoycimkekouc = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu($ewuukoycimkekouc))) { goto ummiwuqqisqgwoco; } $qyyeoyuaqwwmysuu = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->eocmoukyueksgeuk(); if (!in_array($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true)) { goto ywswgoesmiwgckcu; } $igscmsiuisqaqwkk = array_search($ewuukoycimkekouc, $qyyeoyuaqwwmysuu, true); ywswgoesmiwgckcu: ummiwuqqisqgwoco: return $igscmsiuisqaqwkk; } public function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null) : ?string { $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask); $esaqeawoigqgagum = $ggauoeuaesiymgee; if (!$wksoawcgagcgoask) { goto keigessgsgawiyyo; } $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw()); if (!$couygeouymagssgw) { goto ooyyuaswogikyggu; } $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION); if (!in_array($yucgcsieomwqgwws, ["\160\x68\x70", "\x74\167\x69\x67"])) { goto myikgqcgseikimwa; } $esaqeawoigqgagum = "{$couygeouymagssgw}\57{$yucgcsieomwqgwws}\57{$ymqmyyeuycgmigyo}"; myikgqcgseikimwa: ooyyuaswogikyggu: keigessgsgawiyyo: return $esaqeawoigqgagum; } public function ksiiwoecggoscqkm($mokawwccycoiqeka) : array { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu(); $qookweymeqawmcwo = ["\x69\163\137\x6d\x6f\142\x69\x6c\x65" => $eiicaiwgqkgsekce->amkiaqeamgywsygm(), "\x69\x73\x5f\x74\x61\142\x6c\x65\164" => $eiicaiwgqkgsekce->qsqicssyqieuqooy(), "\x69\163\x5f\143\157\155\160\165\164\145\162" => $eiicaiwgqkgsekce->oyekugiwykcqismq(), "\x64\x61\x74\145\x5f\146\157\x72\155\141\x74" => $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(), Constants::weayyoewessosyko => $mokawwccycoiqeka, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::syooqwmkmsmgwcqw => $seumokooiykcomco->masoymaamekuykso($mksyucucyswaukig, true), Constants::imoqsmekaqowuwmc => $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig), Constants::uouymeyqasaeckso => $useksmwkuswkwcqg]; $aquuecykqwyukece[] = "\x69\x6e\144\145\x78"; if ($mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw()) { goto iggimwweuooskmqi; } if ($mumyimcwkaemyyue->migkyseymeomymmy()) { goto ykwmsugmueoosyka; } if ($mumyimcwkaemyyue->cukiusasccucgwqc()) { goto kmawikcwmucoyeio; } if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto yiuwqcqesuysmegs; } if (!$mumyimcwkaemyyue->gouusicsisumuiei()) { goto iieykwekyukgsias; } if ($gqgemcmoicmgaqie = $mumyimcwkaemyyue->siiwuwaswckkuoya()) { goto wusuosaiqosakcqq; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = __("\x53\x65\141\162\x63\150", PR__CMN__FOUNDATION); goto kaueiekkeciiaswy; wusuosaiqosakcqq: $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = sprintf(__("\x53\x65\x61\x72\x63\x68\40\162\145\163\165\154\x74\x20\146\157\x72\72\x20\x25\x73", PR__CMN__FOUNDATION), $gqgemcmoicmgaqie); kaueiekkeciiaswy: $aquuecykqwyukece[] = Constants::yayciqueeakqwese; $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = null; iieykwekyukgsias: goto mauoymckskucuemc; yiuwqcqesuysmegs: $aquuecykqwyukece[] = "\64\60\64"; mauoymckskucuemc: goto wokoooqeguamsuso; kmawikcwmucoyeio: $qookweymeqawmcwo[Constants::mswoacegomcucaik] = $mksyucucyswaukig; $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig); $aaokuekaimigoyue = $seumokooiykcomco->aqcogscycyycgkuq($mksyucucyswaukig); $woaeeewomgcuesaa = Constants::qqoouomkeecygage; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\x6e\x64\x65\170"; if ($mumyimcwkaemyyue->sgeaogakoscmysgc()) { goto iwigaaoiqyugwacm; } if (!$mumyimcwkaemyyue->kccakwkaqugygwmq()) { goto uqekawymqmyaqaao; } $cuyooiakswegosog = Constants::cwswygwykwgsqiwu; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue; uqekawymqmyaqaao: goto yqismiumwaaeqgwu; iwigaaoiqyugwacm: $suaemuyiacqyugsm = Constants::imywcsggckkcywgk; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm; $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue; yqismiumwaaeqgwu: wokoooqeguamsuso: goto uiqqoqeguqksakak; ykwmsugmueoosyka: $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $qookweymeqawmcwo[Constants::syooqwmkmsmgwcqw] = $ewsqcacamuomwagw->wieoiwogwmcwukom(); $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = $ewsqcacamuomwagw->syeuyeikogukksam(); $woaeeewomgcuesaa = Constants::mswmgkkakuooukme; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\x64\x65\170"; if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { goto ycomuqussgiacuom; } if ($mumyimcwkaemyyue->ocwoeosukggumggw()) { goto akymcmmokgskeqiu; } if ($mumyimcwkaemyyue->sgayqmgoigoseaoo()) { goto wwiasiiquqqmmqay; } if ($mumyimcwkaemyyue->qmssqeyayicowkgy()) { goto mocauoaugmiuacuu; } if ($mumyimcwkaemyyue->oowkceqysamwygwu()) { goto sgqaaocqgayiigos; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg; goto wmyagwwmquqeyyok; sgqaaocqgayiigos: $woaeeewomgcuesaa = Constants::kumuoysauoagaiiy; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\x6e\x64\145\170"; if ($mumyimcwkaemyyue->qwakseskocsyiyks()) { goto aosmakasyommmioc; } if ($mumyimcwkaemyyue->mgkmukikygowogsm()) { goto ugwqwcgoswkkwcee; } if (!$mumyimcwkaemyyue->wqscegcksyocaias()) { goto cigcsyiesymkuywu; } $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eggusgsscecmiiee; cigcsyiesymkuywu: goto kgigsakiwsqqioim; ugwqwcgoswkkwcee: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::qummiiakyucoycws; kgigsakiwsqqioim: goto swmkkiiauusieuqw; aosmakasyommmioc: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::caaieqwcccuueamg; swmkkiiauusieuqw: wmyagwwmquqeyyok: goto eoawekcguswgyykc; mocauoaugmiuacuu: $kesssewsiegssiya = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy; $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug; eoawekcguswgyykc: goto iwkwesmeiywuuugk; wwiasiiquqqmmqay: $guwumyyyakswawas = Constants::qgciomgukmcwscqw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug; iwkwesmeiywuuugk: goto vgggsmmgmwumikmc; akymcmmokgskeqiu: $scwiymciagumsuiw = Constants::qeueagcuyogwwyky; $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::gmmygyiecgmggaam; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id; $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug; vgggsmmgmwumikmc: goto yuuyqoyguaqsswey; ycomuqussgiacuom: $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $qscaoekmoooeuyqg = Constants::iwascisiiokuackw; $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg; $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\x49\104"); $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = $gsqycqmccqgwosck->igawqaomowicuayw("\x6e\x69\x63\153\156\x61\155\x65"); yuuyqoyguaqsswey: uiqqoqeguqksakak: goto oieyimeswqquigei; iggimwweuooskmqi: $woaeeewomgcuesaa = Constants::wwoeeogswkgeqack; $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\x64\x65\x78"; if ($mumyimcwkaemyyue->takycgcamoacksqw()) { goto saueosiwcgqsmgmk; } $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = single_post_title('', false); goto kgmwmmiemqggaqeq; saueosiwcgqsmgmk: $aquuecykqwyukece[$woaeeewomgcuesaa][] = Constants::eycwiessycciwsao; kgmwmmiemqggaqeq: oieyimeswqquigei: $qookweymeqawmcwo["\x5f\x63\165\x72\162\145\x6e\x74\137\x74\145\x6d\x70\x6c\x61\164\x65\x5f\x6e\x61\x6d\145"] = $this->aaimaiecygmeiegm($aquuecykqwyukece); return [$gsyaugcyoggmiuwy->ocksiywmkyaqseou("\164\145\x6d\160\154\141\x74\x65\137\x68\151\x65\x72\141\x72\143\150\x79\x5f\x74\x65\155\160\154\x61\x74\x65\x73", $aquuecykqwyukece, $mksyucucyswaukig), $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x74\x65\155\160\x6c\x61\x74\145\137\150\x69\145\x72\x61\162\143\x68\171\x5f\x70\141\x72\141\x6d\145\x74\x65\162\x73", $qookweymeqawmcwo, $mksyucucyswaukig)]; } public function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca) { $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi); $qqscaoyqikuyeoaw = ''; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { goto cgummkmwkkyaomqq; } if ($iawmgqqucqegmiay->exists($igqsaukqcqscimok)) { goto smsgocwimiqgewse; } $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . "{$igqsaukqcqscimok}\x2e\150\x74\155\154\x2e\164\167\x69\x67"; goto qksoacweieioouuu; smsgocwimiqgewse: $qqscaoyqikuyeoaw = $igqsaukqcqscimok; qksoacweieioouuu: goto mygyyacgawkwoaak; cgummkmwkkyaomqq: $qqscaoyqikuyeoaw = $this->eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw); mygyyacgawkwoaak: if ($iawmgqqucqegmiay->exists($qqscaoyqikuyeoaw)) { goto mqecqicimeusigcs; } $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . "\57\151\156\x64\x65\x78\x2e\x68\164\x6d\154\56\164\x77\151\147"; goto agwucmswyeecgiwk; mqecqicimeusigcs: goto sieqieowwakamuei; agwucmswyeecgiwk: qcssqeugkggmssuq: } sieqieowwakamuei: return $qqscaoyqikuyeoaw; } public function aaimaiecygmeiegm($aquuecykqwyukece, bool $sysgmomuyiiawwcm = true) : array { $qcmggaiwyoeyguco = []; if (is_array($aquuecykqwyukece)) { goto wyouyacqwaoscwco; } if (!$aquuecykqwyukece) { goto ywymuuggyeqggyqo; } $qcmggaiwyoeyguco[] = $aquuecykqwyukece; ywymuuggyeqggyqo: goto kuiimqmaogsaoimi; wyouyacqwaoscwco: foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) { if (!(!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco, true))) { goto auwsmkeaswcqwkiy; } $qcmggaiwyoeyguco[] = $uusmaiomayssaecw; auwsmkeaswcqwkiy: $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, $this->aaimaiecygmeiegm($qqscaoyqikuyeoaw, false)); ouyqacmgssaeeyaq: } wocmissqwqoccqgq: kuiimqmaogsaoimi: if (!$sysgmomuyiiawwcm) { goto ueyagkiewoigukeq; } $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco); krsort($qcmggaiwyoeyguco); ueyagkiewoigukeq: return $qcmggaiwyoeyguco; } public function youaqkimaoecgsye() : string { $uusmaiomayssaecw = ''; $mksyucucyswaukig = $this->uqsqkugwgmugquio(); if (!$mksyucucyswaukig) { goto oeqaomymqmegqway; } $uusmaiomayssaecw = $mksyucucyswaukig->cisyiemkeykgkomc(); oeqaomymqmegqway: return $uusmaiomayssaecw; } public function uqsqkugwgmugquio() : ?Setting { static $gaaauooqcqwiiogk; if ($gaaauooqcqwiiogk) { goto iwcmwyyeuwuogkmy; } $egsqwmeeeowomomi = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw()->get_template(); $wksoawcgagcgoask = Foundation::symcgieuakksimmu()->eeqqugcowsqysask($egsqwmeeeowomomi); if (!$wksoawcgagcgoask) { goto aeaaqimiugqwsiuo; } $gaaauooqcqwiiogk = $wksoawcgagcgoask->mggwieqomgcuskme(); aeaaqimiugqwsiuo: iwcmwyyeuwuogkmy: return $gaaauooqcqwiiogk; } }
