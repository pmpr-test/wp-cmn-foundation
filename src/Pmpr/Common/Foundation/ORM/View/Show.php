<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Show extends ObjectAwareView { protected array $tabs = []; protected string $currentTabContent = ''; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function iwwsmcumwsoismmy() : string { return $this->currentTabContent; } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aokagokqyuysuksm = $this->mwyqswsaeeewsosm())) { goto isgwkwacoyimiauk; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $this->ukwquciiaycawyci(); if (!$meywaqqsugaoeyys->amimkmoyyqiysugw()) { goto uaqackioaiqwcocy; } $this->rsaiaimkmskoiysk(Constants::cwacquagagwkcisc, Constants::awysmmukegasimmq, $swqimwqeweekeusq->yuawgssgauywkiia($meywaqqsugaoeyys->euwycwigoeawgckq("\x65\144\x69\164\x5f\x69\164\x65\155"), $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm), ["\x63\154\x61\x73\x73" => "\x70\162\x2d\142\164\156\40\x62\x74\156\x2d\x70\162\151\x6d\x61\x72\x79"])); uaqackioaiqwcocy: if (!$meywaqqsugaoeyys->awcggayuseoukmkw()) { goto cscusseysqygsoiy; } $this->rsaiaimkmskoiysk(Constants::cwacquagagwkcisc, Constants::DELETE, $swqimwqeweekeusq->yuawgssgauywkiia($meywaqqsugaoeyys->euwycwigoeawgckq("\162\145\155\x6f\166\145\137\151\164\x65\x6d"), "\x23", ["\143\x6c\141\x73\163" => "\160\162\x2d\x62\164\x6e\x20\x62\164\x6e\55\144\141\156\x67\145\x72\40\160\162\55\x63\x6f\156\x66\x69\x72\155\141\142\154\x65\55\x61\x63\x74\x69\x6f\x6e\40\155\162\x2d\x32", "\x64\x61\x74\141\55\x63\157\x6e\x66\x69\147" => $this->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))])); cscusseysqygsoiy: isgwkwacoyimiauk: } public function ukwquciiaycawyci() { if (!($mksyucucyswaukig = $this->imgymusqgccqsqqq())) { goto gygwewcqsmwqismo; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwyqswsaeeewsosm(); $soomqaqycmqcwayi = $this->icqeowyowgckiiyc(); $ywoucyskcquysiwc = [Constants::agwsswqikygewuuu => [Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::qescuiwgsyuikume => __("\x4f\166\x65\x72\166\151\145\x77", PR__CMN__FOUNDATION)]]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->gumeeckcowwoyoci() || $aaqqkgyougeiueyq->ygswmewosceowmya()))) { goto ewscugeuicukkycc; } $ywoyoawciekocqao = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$ywoyoawciekocqao instanceof Model) { goto eeyyskqsmquyquqw; } if (!($ckcgaqacwceaaueg = $ywoyoawciekocqao->uqeoyqiwywwmsiew($meywaqqsugaoeyys->aakmagwggmkoiiyu() . Constants::mswocgcucqoaesaa))) { goto cgyakcqgugqgkqiw; } $ckcgaqacwceaaueg->acokiqqgsmoqaeyu(); cgyakcqgugqgkqiw: $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $ywoyoawciekocqao->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::emkkgysokckswycs => $ywoyoawciekocqao, Constants::maiomwmauyekiseg => $aaqqkgyougeiueyq]; eeyyskqsmquyquqw: ewscugeuicukkycc: uegouoiuyoqkcscg: } mggeqkcksyaymcsa: switch ($soomqaqycmqcwayi) { case "\x6f\x76\145\x72\x76\151\x65\167": $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig)); $gkyciwoiiisgywcs->unset($yygmoeguaqyumuui, [Constants::gouqcwikiiygyasc]); $oammesyieqmwuwyi = array_filter($this->soagegegugeemwce($mksyucucyswaukig, $yygmoeguaqyumuui)); $this->currentTabContent = $this->iuygowkemiiwqmiw("\x6f\x76\145\x72\166\x69\x65\167", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::kekekeusyqkouowm => $this->igmckyamugkymqku(Constants::imywcsggckkcywgk)]); goto kqswcsysqawkcgye; default: if (!($cciauwuwuqaywgce = $gkyciwoiiisgywcs->get($ywoucyskcquysiwc, $soomqaqycmqcwayi))) { goto amgsueumgaguceaa; } $qoyaeisyksomgkgs = $gkyciwoiiisgywcs->get($cciauwuwuqaywgce, Constants::emkkgysokckswycs); if ($qoyaeisyksomgkgs instanceof Model) { goto ukkcmocamwgiqayu; } $this->currentTabContent = (string) $this->ocksiywmkyaqseou("\x6f\162\155\137\166\x69\x65\167\x5f\163\150\157\167\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137{$soomqaqycmqcwayi}\137\164\x61\142\137\143\x6f\x6e\x74\x65\x6e\164", $meywaqqsugaoeyys); goto mwysseaekcsiesmm; ukkcmocamwgiqayu: $momcykaoccoymeig = $qoyaeisyksomgkgs->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$momcykaoccoymeig instanceof Index) { goto iiiccouaaqsyikae; } $euggmwqwwqwcgmgi = $meywaqqsugaoeyys->gssiscqyqsacmeca()->getForeignKey(); $this->currentTabContent = $momcykaoccoymeig->ekysoioumkkwawwm([Constants::iaesmigkgskyygem => $qoyaeisyksomgkgs->iekyeyicoyyawomk()->wkmkqaiwuqouweye($euggmwqwwqwcgmgi, $this->mwyqswsaeeewsosm())]); iiiccouaaqsyikae: mwysseaekcsiesmm: amgsueumgaguceaa: goto kqswcsysqawkcgye; } wusciwkkckmqigms: kqswcsysqawkcgye: $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($aokagokqyuysuksm); $this->tabs = (array) $this->ocksiywmkyaqseou("\157\162\x6d\x5f\166\151\145\167\x5f\163\150\x6f\167\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\164\x61\x62\163", $ywoucyskcquysiwc, $mksyucucyswaukig); gygwewcqsmwqismo: } public function render() { parent::render(); if (!($mksyucucyswaukig = $this->imgymusqgccqsqqq())) { goto ucqmumuygcywwqma; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x76\151\145\167\x5f\151\x74\145\155"); if (!($pkyyagewkiyckmwy = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig))) { goto uougwgeyiokewkkm; } $meqocwsecsywiiqs = sprintf("\x25\x73\x20\55\x20\45\163", $meqocwsecsywiiqs, $pkyyagewkiyckmwy); uougwgeyiokewkkm: $qookweymeqawmcwo = ["\x74\x61\142\163" => $this->aymqiqcgkiucsuyc($this->equiyaoamqmaeckc()), "\x63\165\x72\x72\x65\x6e\164\137\x74\x61\x62" => $this->icqeowyowgckiiyc(), Constants::emkkgysokckswycs => $this->mgogaykgkoogasim(), Constants::NAME => $meywaqqsugaoeyys->cueaickeeoiwayou(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::ssmskyqgcmeiayco => $this->iwwsmcumwsoismmy(), Constants::myikkigscysoykgy => $this->igmckyamugkymqku(Constants::mqkiiimeocmcyecq)]; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::ieioeisgwcgysukw); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto gommacygsykyussk; } $qqscaoyqikuyeoaw = Constants::ieioeisgwcgysukw; gommacygsykyussk: $ougkuwgwsmiaskmm = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::cauuugmucmiacwsy, Constants::ieioeisgwcgysukw, $qookweymeqawmcwo); if (!($ougkuwgwsmiaskmm && is_array($ougkuwgwsmiaskmm))) { goto ukqocwewouckikso; } $qookweymeqawmcwo = $ougkuwgwsmiaskmm; ukqocwewouckikso: $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); ucqmumuygcywwqma: } private function soagegegugeemwce($mksyucucyswaukig, array $yygmoeguaqyumuui = []) : array { $oammesyieqmwuwyi = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) { goto ieqesiiageaauiuw; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $qssskwiqeumgkago = $meywaqqsugaoeyys->aeosueemgsygqese(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ekcswiguywieeeoc = true; $aaqqkgyougeiueyq = null; $sqqewmoeaekuyyas = 0; if (!is_numeric($uusmaiomayssaecw)) { goto kocqqoyymosmuksu; } $uusmaiomayssaecw = $yyauwyaeewsickwk->ogimogiceeekegoi($pkyyagewkiyckmwy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $uusmaiomayssaecw); $ekcswiguywieeeoc = false; if (!($aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($qssskwiqeumgkago, $uusmaiomayssaecw))) { goto iuuuususuuuaieem; } $ekcswiguywieeeoc = $aaqqkgyougeiueyq->gksokmqegsecssgq(Constants::ieioeisgwcgysukw, $mksyucucyswaukig); $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco(); $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw(); iuuuususuuuaieem: goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $eqgoocgaqwqcimie = ''; uqokiksoqcwwqgio: if (!($ekcswiguywieeeoc && $pkyyagewkiyckmwy)) { goto yiowgigkkwsoqcci; } if (!$aaqqkgyougeiueyq instanceof Schema) { goto sioekkmekwygemyc; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); if (!$aaqqkgyougeiueyq instanceof Enum) { goto qukocuwgakemmyga; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mksyucucyswaukig, $uusmaiomayssaecw . Constants::icmokuskwoskgace, $eqgoocgaqwqcimie); qukocuwgakemmyga: sioekkmekwygemyc: $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; yiowgigkkwsoqcci: uimeeckqksqeekqq: } uykousayyomcaeaa: ieqesiiageaauiuw: return $gkyciwoiiisgywcs->yaeiiwwyckwugsem($oammesyieqmwuwyi); } private function aymqiqcgkiucsuyc(array $ywoucyskcquysiwc) : array { foreach ($ywoucyskcquysiwc as $uusmaiomayssaecw => $cciauwuwuqaywgce) { $ywoucyskcquysiwc[$uusmaiomayssaecw][Constants::auqoykcmsiauccao] = $this->aamskymqusecegga($uusmaiomayssaecw); mscyggqcesgqqksu: } gamqcwuwkikwqoay: return $ywoucyskcquysiwc; } private function aamskymqusecegga($cciauwuwuqaywgce) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x6f\162\x6d\x2d\x74\x61\142" => $cciauwuwuqaywgce], $this->mgogaykgkoogasim()->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $this->mwyqswsaeeewsosm())); } private function icqeowyowgckiiyc() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\157\162\155\55\x74\141\x62", "\157\166\145\162\x76\151\145\167"); } }
