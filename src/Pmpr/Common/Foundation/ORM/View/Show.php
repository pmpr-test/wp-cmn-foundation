<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677d835e37313             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Show extends ObjectAwareView { protected array $tabs = []; protected string $currentTabContent = ''; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function iwwsmcumwsoismmy() : string { return $this->currentTabContent; } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); if ($aokagokqyuysuksm = $this->mwyqswsaeeewsosm()) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys->amimkmoyyqiysugw()) { $this->rsaiaimkmskoiysk(Constants::cwswygwykwgsqiwu, Constants::awysmmukegasimmq, [Constants::ysskgssgwuwmqwym => ["\x68\162\x65\x66" => $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm), "\x63\154\141\x73\x73" => "\x62\x74\156\x2d\163\x65\x63\157\x6e\x64\141\162\171"], Constants::qescuiwgsyuikume => $meywaqqsugaoeyys->euwycwigoeawgckq("\145\144\x69\x74\137\151\164\x65\155")]); } if ($meywaqqsugaoeyys->awcggayuseoukmkw()) { $this->rsaiaimkmskoiysk(Constants::cwswygwykwgsqiwu, Constants::DELETE, [Constants::ysskgssgwuwmqwym => ["\x63\154\x61\x73\163" => "\142\x74\156\55\144\x61\x6e\147\x65\x72"], Constants::qescuiwgsyuikume => $meywaqqsugaoeyys->euwycwigoeawgckq("\x72\x65\155\157\166\145\x5f\151\164\145\x6d"), Constants::ismwycwsasweqomi => $this->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))]); } $this->ukwquciiaycawyci(); } } public function ukwquciiaycawyci() { if ($mksyucucyswaukig = $this->imgymusqgccqsqqq()) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwyqswsaeeewsosm(); $soomqaqycmqcwayi = $this->icqeowyowgckiiyc(); $ywoucyskcquysiwc = [Constants::agwsswqikygewuuu => [Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::qescuiwgsyuikume => __("\117\166\145\x72\166\x69\x65\167", PR__CMN__FOUNDATION)]]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->gumeeckcowwoyoci() || $aaqqkgyougeiueyq->ygswmewosceowmya())) { $ywoyoawciekocqao = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($ywoyoawciekocqao instanceof Model) { if ($ckcgaqacwceaaueg = $ywoyoawciekocqao->uqeoyqiwywwmsiew($meywaqqsugaoeyys->aakmagwggmkoiiyu() . Constants::mswocgcucqoaesaa)) { $ckcgaqacwceaaueg->acokiqqgsmoqaeyu(); } $ywoucyskcquysiwc[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = [Constants::qgqyauaqwqmqseim => $ywoyoawciekocqao->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::emkkgysokckswycs => $ywoyoawciekocqao, Constants::maiomwmauyekiseg => $aaqqkgyougeiueyq]; } } } switch ($soomqaqycmqcwayi) { case "\x6f\x76\145\x72\x76\x69\x65\167": $oammesyieqmwuwyi = array_filter($this->soagegegugeemwce($mksyucucyswaukig)); $this->currentTabContent = $this->iuygowkemiiwqmiw("\157\x76\145\162\x76\x69\x65\167", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::myikkigscysoykgy => $this->igmckyamugkymqku(Constants::cwswygwykwgsqiwu, $aokagokqyuysuksm, $mksyucucyswaukig, $meywaqqsugaoeyys)]); break; default: if ($cciauwuwuqaywgce = $gkyciwoiiisgywcs->get($ywoucyskcquysiwc, $soomqaqycmqcwayi)) { $qoyaeisyksomgkgs = $gkyciwoiiisgywcs->get($cciauwuwuqaywgce, Constants::emkkgysokckswycs); if ($qoyaeisyksomgkgs instanceof Model) { $momcykaoccoymeig = $qoyaeisyksomgkgs->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($momcykaoccoymeig instanceof Index) { $euggmwqwwqwcgmgi = $meywaqqsugaoeyys->gssiscqyqsacmeca()->getForeignKey(); $this->currentTabContent = $momcykaoccoymeig->ekysoioumkkwawwm([Constants::cacismqswgaewkuu => $momcykaoccoymeig->wgmuagayamwuwsuo(), Constants::iaesmigkgskyygem => $qoyaeisyksomgkgs->iekyeyicoyyawomk()->wkmkqaiwuqouweye($euggmwqwwqwcgmgi, $this->mwyqswsaeeewsosm())]); } } else { $this->currentTabContent = (string) $this->ocksiywmkyaqseou("\x6f\162\155\x5f\x76\151\145\167\x5f\x73\150\x6f\x77\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137{$soomqaqycmqcwayi}\137\164\141\142\x5f\x63\157\156\164\x65\x6e\164", $meywaqqsugaoeyys); } } break; } if ($iauqwemmwkwkemqi = $meywaqqsugaoeyys->ayqesuasiggqoeeo()) { $iauqwemmwkwkemqi->qicmaqwoqqguccmo($aokagokqyuysuksm); } $this->tabs = (array) $this->ocksiywmkyaqseou("\x6f\162\155\137\x76\x69\145\x77\x5f\163\x68\x6f\167\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\x74\141\142\163", $ywoucyskcquysiwc, $mksyucucyswaukig); } } public function render() { parent::render(); if ($mksyucucyswaukig = $this->imgymusqgccqsqqq()) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $meqocwsecsywiiqs = $this->mmqossqsksemasay("\166\x69\x65\167\x5f\151\164\145\155"); if ($pkyyagewkiyckmwy = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig)) { $meqocwsecsywiiqs = sprintf("\x25\x73\40\55\x20\x25\163", $meqocwsecsywiiqs, $pkyyagewkiyckmwy); } $qookweymeqawmcwo = ["\164\x61\142\x73" => $this->aymqiqcgkiucsuyc($this->equiyaoamqmaeckc()), "\143\x75\x72\x72\x65\156\164\137\164\141\142" => $this->icqeowyowgckiiyc(), Constants::emkkgysokckswycs => $this->mgogaykgkoogasim(), Constants::NAME => $meywaqqsugaoeyys->cueaickeeoiwayou(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::ssmskyqgcmeiayco => $this->iwwsmcumwsoismmy(), Constants::myikkigscysoykgy => $this->igmckyamugkymqku(Constants::imywcsggckkcywgk, $this->mwyqswsaeeewsosm(), $mksyucucyswaukig, $meywaqqsugaoeyys)]; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::ieioeisgwcgysukw); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $qqscaoyqikuyeoaw = Constants::ieioeisgwcgysukw; } $ougkuwgwsmiaskmm = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::cauuugmucmiacwsy, Constants::ieioeisgwcgysukw, $qookweymeqawmcwo); if ($ougkuwgwsmiaskmm && is_array($ougkuwgwsmiaskmm)) { $qookweymeqawmcwo = $ougkuwgwsmiaskmm; } $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); } } private function soagegegugeemwce($mksyucucyswaukig) : array { $oammesyieqmwuwyi = []; if ($mksyucucyswaukig) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $qssskwiqeumgkago = $meywaqqsugaoeyys->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $mgugyyocqwmeeuai => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq->gksokmqegsecssgq(Constants::ieioeisgwcgysukw)) { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $mgugyyocqwmeeuai); $ekcswiguywieeeoc = $aaqqkgyougeiueyq->gksokmqegsecssgq(Constants::ieioeisgwcgysukw, $mksyucucyswaukig); $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco(); if ($ekcswiguywieeeoc && $pkyyagewkiyckmwy) { if ($aaqqkgyougeiueyq instanceof Schema) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); if ($aaqqkgyougeiueyq instanceof Enum) { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $mgugyyocqwmeeuai . Constants::icmokuskwoskgace, $eqgoocgaqwqcimie); } } $oammesyieqmwuwyi[$mgugyyocqwmeeuai] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } } } } return $oammesyieqmwuwyi; } private function aymqiqcgkiucsuyc(array $ywoucyskcquysiwc) : array { foreach ($ywoucyskcquysiwc as $uusmaiomayssaecw => $cciauwuwuqaywgce) { $ywoucyskcquysiwc[$uusmaiomayssaecw][Constants::auqoykcmsiauccao] = $this->aamskymqusecegga($uusmaiomayssaecw); } return $ywoucyskcquysiwc; } private function aamskymqusecegga($cciauwuwuqaywgce) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x6f\162\x6d\55\164\141\x62" => $cciauwuwuqaywgce], $this->mgogaykgkoogasim()->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $this->mwyqswsaeeewsosm())); } private function icqeowyowgckiiyc() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x6f\x72\x6d\x2d\x74\141\142", "\x6f\166\x65\162\166\151\x65\167"); } }
