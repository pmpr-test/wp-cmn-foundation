<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670ed89d7ce97             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Show extends ObjectAwareView { protected array $tabs = []; protected string $currentTabContent = ''; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function iwwsmcumwsoismmy() : string { return $this->currentTabContent; } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($aokagokqyuysuksm = $this->mwyqswsaeeewsosm()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $this->ukwquciiaycawyci(); if ($meywaqqsugaoeyys->amimkmoyyqiysugw()) { $this->rsaiaimkmskoiysk(Constants::cwacquagagwkcisc, Constants::awysmmukegasimmq, $swqimwqeweekeusq->yuawgssgauywkiia($meywaqqsugaoeyys->euwycwigoeawgckq("\145\x64\151\164\137\x69\164\x65\x6d"), $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm), ["\143\x6c\x61\163\x73" => "\x70\x72\55\142\164\x6e\x20\x62\x74\x6e\55\x70\162\151\155\x61\x72\171"])); } if ($meywaqqsugaoeyys->awcggayuseoukmkw()) { $this->rsaiaimkmskoiysk(Constants::cwacquagagwkcisc, Constants::DELETE, $swqimwqeweekeusq->yuawgssgauywkiia($meywaqqsugaoeyys->euwycwigoeawgckq("\162\x65\155\157\x76\145\137\151\x74\x65\x6d"), "\43", ["\143\x6c\x61\163\x73" => "\160\162\55\142\x74\x6e\x20\142\x74\x6e\x2d\144\141\x6e\147\x65\162\x20\160\x72\55\143\x6f\156\x66\x69\x72\155\x61\142\x6c\x65\x2d\x61\x63\x74\151\157\x6e\40\155\162\55\62", "\144\141\164\141\x2d\143\x6f\x6e\146\151\x67" => $this->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))])); } } } public function ukwquciiaycawyci() { if ($mksyucucyswaukig = $this->imgymusqgccqsqqq()) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwyqswsaeeewsosm(); $soomqaqycmqcwayi = $this->icqeowyowgckiiyc(); $ywoucyskcquysiwc = [Constants::agwsswqikygewuuu => [Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::qescuiwgsyuikume => __("\117\x76\145\162\166\x69\145\167", PR__CMN__FOUNDATION)]]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->gumeeckcowwoyoci() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { $ywoyoawciekocqao = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($ywoyoawciekocqao instanceof Model) { if ($ckcgaqacwceaaueg = $ywoyoawciekocqao->uqeoyqiwywwmsiew($meywaqqsugaoeyys->aakmagwggmkoiiyu() . Constants::mswocgcucqoaesaa)) { $ckcgaqacwceaaueg->acokiqqgsmoqaeyu(); } $ywoucyskcquysiwc[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = [Constants::qgqyauaqwqmqseim => $ywoyoawciekocqao->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::emkkgysokckswycs => $ywoyoawciekocqao, Constants::maiomwmauyekiseg => $aaqqkgyougeiueyq]; } } } switch ($soomqaqycmqcwayi) { case "\157\x76\145\162\x76\151\145\x77": $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig)); $gkyciwoiiisgywcs->unset($yygmoeguaqyumuui, [Constants::gouqcwikiiygyasc]); $oammesyieqmwuwyi = array_filter($this->soagegegugeemwce($mksyucucyswaukig, $yygmoeguaqyumuui)); $this->currentTabContent = $this->iuygowkemiiwqmiw("\x6f\166\x65\162\x76\x69\x65\x77", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::kekekeusyqkouowm => $this->igmckyamugkymqku(Constants::imywcsggckkcywgk, $aokagokqyuysuksm, $mksyucucyswaukig, $meywaqqsugaoeyys)]); break; default: if ($cciauwuwuqaywgce = $gkyciwoiiisgywcs->get($ywoucyskcquysiwc, $soomqaqycmqcwayi)) { $qoyaeisyksomgkgs = $gkyciwoiiisgywcs->get($cciauwuwuqaywgce, Constants::emkkgysokckswycs); if ($qoyaeisyksomgkgs instanceof Model) { $momcykaoccoymeig = $qoyaeisyksomgkgs->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($momcykaoccoymeig instanceof Index) { $euggmwqwwqwcgmgi = $meywaqqsugaoeyys->gssiscqyqsacmeca()->getForeignKey(); $this->currentTabContent = $momcykaoccoymeig->ekysoioumkkwawwm([Constants::iaesmigkgskyygem => $qoyaeisyksomgkgs->iekyeyicoyyawomk()->wkmkqaiwuqouweye($euggmwqwwqwcgmgi, $this->mwyqswsaeeewsosm())]); } } else { $this->currentTabContent = (string) $this->ocksiywmkyaqseou("\x6f\x72\155\x5f\166\x69\145\x77\x5f\x73\150\157\167\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137{$soomqaqycmqcwayi}\x5f\164\x61\142\x5f\x63\x6f\x6e\x74\145\156\x74", $meywaqqsugaoeyys); } } break; } if ($iauqwemmwkwkemqi = $meywaqqsugaoeyys->ayqesuasiggqoeeo()) { $iauqwemmwkwkemqi->qicmaqwoqqguccmo($aokagokqyuysuksm); } $this->tabs = (array) $this->ocksiywmkyaqseou("\x6f\x72\155\x5f\166\151\145\x77\137\163\150\157\x77\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\164\141\x62\x73", $ywoucyskcquysiwc, $mksyucucyswaukig); } } public function render() { parent::render(); if ($mksyucucyswaukig = $this->imgymusqgccqsqqq()) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $meqocwsecsywiiqs = $this->mmqossqsksemasay("\166\151\x65\167\137\x69\x74\145\x6d"); if ($pkyyagewkiyckmwy = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig)) { $meqocwsecsywiiqs = sprintf("\45\163\40\55\x20\x25\163", $meqocwsecsywiiqs, $pkyyagewkiyckmwy); } $qookweymeqawmcwo = ["\164\141\x62\163" => $this->aymqiqcgkiucsuyc($this->equiyaoamqmaeckc()), "\x63\x75\162\x72\x65\x6e\164\137\164\x61\x62" => $this->icqeowyowgckiiyc(), Constants::emkkgysokckswycs => $this->mgogaykgkoogasim(), Constants::NAME => $meywaqqsugaoeyys->cueaickeeoiwayou(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::ssmskyqgcmeiayco => $this->iwwsmcumwsoismmy(), Constants::myikkigscysoykgy => $this->igmckyamugkymqku(Constants::mqkiiimeocmcyecq, $this->mwyqswsaeeewsosm(), $mksyucucyswaukig, $meywaqqsugaoeyys)]; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::ieioeisgwcgysukw); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $qqscaoyqikuyeoaw = Constants::ieioeisgwcgysukw; } $ougkuwgwsmiaskmm = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::cauuugmucmiacwsy, Constants::ieioeisgwcgysukw, $qookweymeqawmcwo); if ($ougkuwgwsmiaskmm && is_array($ougkuwgwsmiaskmm)) { $qookweymeqawmcwo = $ougkuwgwsmiaskmm; } $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); } } private function soagegegugeemwce($mksyucucyswaukig, array $yygmoeguaqyumuui = []) : array { $oammesyieqmwuwyi = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($mksyucucyswaukig && $yygmoeguaqyumuui) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $qssskwiqeumgkago = $meywaqqsugaoeyys->aeosueemgsygqese(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ekcswiguywieeeoc = true; $aaqqkgyougeiueyq = null; $sqqewmoeaekuyyas = 0; if (!is_numeric($uusmaiomayssaecw)) { $eqgoocgaqwqcimie = ''; } else { $uusmaiomayssaecw = $yyauwyaeewsickwk->ogimogiceeekegoi($pkyyagewkiyckmwy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $uusmaiomayssaecw); $ekcswiguywieeeoc = false; if ($aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($qssskwiqeumgkago, $uusmaiomayssaecw)) { $ekcswiguywieeeoc = $aaqqkgyougeiueyq->gksokmqegsecssgq(Constants::ieioeisgwcgysukw, $mksyucucyswaukig); $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco(); $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw(); } } if ($ekcswiguywieeeoc && $pkyyagewkiyckmwy) { if ($aaqqkgyougeiueyq instanceof Schema) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); if ($aaqqkgyougeiueyq instanceof Enum) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mksyucucyswaukig, $uusmaiomayssaecw . Constants::icmokuskwoskgace, $eqgoocgaqwqcimie); } } $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; } } } return $gkyciwoiiisgywcs->yaeiiwwyckwugsem($oammesyieqmwuwyi); } private function aymqiqcgkiucsuyc(array $ywoucyskcquysiwc) : array { foreach ($ywoucyskcquysiwc as $uusmaiomayssaecw => $cciauwuwuqaywgce) { $ywoucyskcquysiwc[$uusmaiomayssaecw][Constants::auqoykcmsiauccao] = $this->aamskymqusecegga($uusmaiomayssaecw); } return $ywoucyskcquysiwc; } private function aamskymqusecegga($cciauwuwuqaywgce) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\157\162\155\55\164\x61\x62" => $cciauwuwuqaywgce], $this->mgogaykgkoogasim()->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $this->mwyqswsaeeewsosm())); } private function icqeowyowgckiiyc() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\157\x72\155\x2d\164\x61\142", "\157\x76\145\x72\x76\151\145\x77"); } }
