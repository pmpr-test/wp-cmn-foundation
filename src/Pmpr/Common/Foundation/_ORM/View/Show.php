<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\View; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Show extends ObjectAwareView { protected array $tabs = []; protected string $currentTabContent = ''; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function iwwsmcumwsoismmy() : string { return $this->currentTabContent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\165\162\162\x65\x6e\164\137\x73\x63\x72\145\x65\x6e", [$this, "\155\x63\x6d\163\143\x63\151\171\x75\153\141\x75\x65\x73\x61\165"]); } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aokagokqyuysuksm = $this->mwyqswsaeeewsosm())) { goto gmwykkouysyaqwqm; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!$meywaqqsugaoeyys->amimkmoyyqiysugw()) { goto eekcoeikaeaaeyii; } $this->rsaiaimkmskoiysk(Constants::cwacquagagwkcisc, Constants::awysmmukegasimmq, $swqimwqeweekeusq->yuawgssgauywkiia($meywaqqsugaoeyys->euwycwigoeawgckq("\145\144\x69\x74\x5f\x69\164\145\155"), $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm), ["\x63\154\x61\x73\x73" => "\160\x72\x2d\x62\x74\x6e\40\x62\x74\156\55\x70\162\x69\155\x61\x72\x79"])); eekcoeikaeaaeyii: if (!$meywaqqsugaoeyys->awcggayuseoukmkw()) { goto cogywoqcqummsyus; } $this->rsaiaimkmskoiysk(Constants::cwacquagagwkcisc, Constants::DELETE, $swqimwqeweekeusq->yuawgssgauywkiia($meywaqqsugaoeyys->euwycwigoeawgckq("\x72\145\155\157\166\145\137\151\164\145\155"), "\x23", ["\x63\154\141\x73\x73" => "\160\x72\55\142\164\x6e\x20\142\x74\x6e\x2d\x64\141\156\147\145\x72\x20\x70\x72\x2d\x63\x6f\156\146\151\162\155\x61\142\x6c\145\55\x61\143\164\151\157\156\x20\x6d\x72\55\62", "\x64\141\164\x61\x2d\143\x6f\156\x66\151\147" => $this->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))])); cogywoqcqummsyus: gmwykkouysyaqwqm: } public function mcmscciyukauesau() { if (!($mksyucucyswaukig = $this->imgymusqgccqsqqq())) { goto ewscugeuicukkycc; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwyqswsaeeewsosm(); $soomqaqycmqcwayi = $this->icqeowyowgckiiyc(); $ywoucyskcquysiwc = [Constants::agwsswqikygewuuu => [Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::qescuiwgsyuikume => __("\x4f\166\x65\x72\x76\151\x65\167", PR__CMN__FOUNDATION)]]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->gumeeckcowwoyoci() || $aaqqkgyougeiueyq->ygswmewosceowmya()))) { goto uaqackioaiqwcocy; } $ywoyoawciekocqao = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$ywoyoawciekocqao instanceof Model) { goto mkwkkmkgiqiamacc; } if (!($ckcgaqacwceaaueg = $ywoyoawciekocqao->uqeoyqiwywwmsiew($meywaqqsugaoeyys->aakmagwggmkoiiyu() . Constants::mswocgcucqoaesaa))) { goto sockeswygwcskeuq; } $ckcgaqacwceaaueg->acokiqqgsmoqaeyu(); sockeswygwcskeuq: $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $ywoyoawciekocqao->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::emkkgysokckswycs => $ywoyoawciekocqao, Constants::maiomwmauyekiseg => $aaqqkgyougeiueyq]; mkwkkmkgiqiamacc: uaqackioaiqwcocy: uaukmuiwskcemcsw: } ugqwuugsweqgmywk: switch ($soomqaqycmqcwayi) { case "\x6f\x76\x65\162\166\151\x65\x77": $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig)); $gkyciwoiiisgywcs->unset($yygmoeguaqyumuui, [Constants::gouqcwikiiygyasc]); $oammesyieqmwuwyi = array_filter($this->soagegegugeemwce($mksyucucyswaukig, $yygmoeguaqyumuui)); $this->currentTabContent = $this->iuygowkemiiwqmiw("\x6f\166\x65\x72\166\151\x65\x77", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::kekekeusyqkouowm => $this->igmckyamugkymqku(Constants::cwacquagagwkcisc)]); goto cscusseysqygsoiy; default: if (!($cciauwuwuqaywgce = $gkyciwoiiisgywcs->get($ywoucyskcquysiwc, $soomqaqycmqcwayi))) { goto eeyyskqsmquyquqw; } $qoyaeisyksomgkgs = $gkyciwoiiisgywcs->get($cciauwuwuqaywgce, Constants::emkkgysokckswycs); if ($qoyaeisyksomgkgs instanceof Model) { goto uegouoiuyoqkcscg; } $this->currentTabContent = (string) $this->ocksiywmkyaqseou("\x6f\x72\155\137\x76\x69\145\x77\x5f\163\x68\x6f\167\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137{$soomqaqycmqcwayi}\x5f\x74\141\142\137\x63\x6f\156\164\x65\x6e\x74", $meywaqqsugaoeyys); goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: $momcykaoccoymeig = $qoyaeisyksomgkgs->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$momcykaoccoymeig instanceof Index) { goto mggeqkcksyaymcsa; } $euggmwqwwqwcgmgi = $meywaqqsugaoeyys->gssiscqyqsacmeca()->getForeignKey(); $this->currentTabContent = $momcykaoccoymeig->ekysoioumkkwawwm([Constants::iaesmigkgskyygem => $qoyaeisyksomgkgs->iekyeyicoyyawomk()->wkmkqaiwuqouweye($euggmwqwwqwcgmgi, $this->mwyqswsaeeewsosm())]); mggeqkcksyaymcsa: cgyakcqgugqgkqiw: eeyyskqsmquyquqw: goto cscusseysqygsoiy; } isgwkwacoyimiauk: cscusseysqygsoiy: $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($aokagokqyuysuksm); $this->tabs = (array) $this->ocksiywmkyaqseou("\x6f\x72\x6d\x5f\166\x69\145\x77\137\x73\x68\x6f\167\x5f{$meywaqqsugaoeyys->cueaickeeoiwayou()}\137\164\141\142\163", $ywoucyskcquysiwc, $mksyucucyswaukig); ewscugeuicukkycc: } public function render() { parent::render(); if (!($mksyucucyswaukig = $this->imgymusqgccqsqqq())) { goto ukkcmocamwgiqayu; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x76\x69\145\167\x5f\x69\164\145\x6d"); if (!($pkyyagewkiyckmwy = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig))) { goto kqswcsysqawkcgye; } $meqocwsecsywiiqs = sprintf("\45\x73\40\x2d\x20\x25\x73", $meqocwsecsywiiqs, $pkyyagewkiyckmwy); kqswcsysqawkcgye: $qookweymeqawmcwo = ["\164\x61\142\163" => $this->aymqiqcgkiucsuyc($this->equiyaoamqmaeckc()), "\x63\x75\x72\162\x65\156\164\137\x74\141\142" => $this->icqeowyowgckiiyc(), Constants::emkkgysokckswycs => $this->mgogaykgkoogasim(), Constants::NAME => $meywaqqsugaoeyys->cueaickeeoiwayou(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::ssmskyqgcmeiayco => $this->iwwsmcumwsoismmy(), Constants::myikkigscysoykgy => $this->igmckyamugkymqku(Constants::cwacquagagwkcisc)]; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::ieioeisgwcgysukw); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto wusciwkkckmqigms; } $qqscaoyqikuyeoaw = Constants::ieioeisgwcgysukw; wusciwkkckmqigms: $ougkuwgwsmiaskmm = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::cauuugmucmiacwsy, Constants::ieioeisgwcgysukw, $qookweymeqawmcwo); if (!($ougkuwgwsmiaskmm && is_array($ougkuwgwsmiaskmm))) { goto iiiccouaaqsyikae; } $qookweymeqawmcwo = $ougkuwgwsmiaskmm; iiiccouaaqsyikae: $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); ukkcmocamwgiqayu: } private function soagegegugeemwce($mksyucucyswaukig, array $yygmoeguaqyumuui = []) : array { $oammesyieqmwuwyi = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) { goto uykousayyomcaeaa; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $qssskwiqeumgkago = $meywaqqsugaoeyys->aeosueemgsygqese(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ekcswiguywieeeoc = true; $aaqqkgyougeiueyq = null; if (!is_numeric($uusmaiomayssaecw)) { goto gygwewcqsmwqismo; } $uusmaiomayssaecw = $yyauwyaeewsickwk->ogimogiceeekegoi($pkyyagewkiyckmwy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $uusmaiomayssaecw); $aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($qssskwiqeumgkago, $uusmaiomayssaecw); $ekcswiguywieeeoc = $aaqqkgyougeiueyq->gksokmqegsecssgq(Constants::ieioeisgwcgysukw, $mksyucucyswaukig); $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco(); $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw(); goto uougwgeyiokewkkm; gygwewcqsmwqismo: $sqqewmoeaekuyyas = 0; $eqgoocgaqwqcimie = ''; uougwgeyiokewkkm: if (!($ekcswiguywieeeoc && $pkyyagewkiyckmwy)) { goto ucqmumuygcywwqma; } if (!$aaqqkgyougeiueyq instanceof Schema) { goto ukqocwewouckikso; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); if (!$aaqqkgyougeiueyq instanceof Enum) { goto gommacygsykyussk; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mksyucucyswaukig, $uusmaiomayssaecw . Constants::icmokuskwoskgace, $eqgoocgaqwqcimie); gommacygsykyussk: ukqocwewouckikso: $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; ucqmumuygcywwqma: amgsueumgaguceaa: } mwysseaekcsiesmm: uykousayyomcaeaa: return $gkyciwoiiisgywcs->yaeiiwwyckwugsem($oammesyieqmwuwyi); } private function aymqiqcgkiucsuyc(array $ywoucyskcquysiwc) : array { foreach ($ywoucyskcquysiwc as $uusmaiomayssaecw => $cciauwuwuqaywgce) { $ywoucyskcquysiwc[$uusmaiomayssaecw][Constants::auqoykcmsiauccao] = $this->aamskymqusecegga($uusmaiomayssaecw); iuuuususuuuaieem: } uimeeckqksqeekqq: return $ywoucyskcquysiwc; } private function aamskymqusecegga($cciauwuwuqaywgce) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\157\162\155\55\x74\141\142" => $cciauwuwuqaywgce], $this->mgogaykgkoogasim()->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $this->mwyqswsaeeewsosm())); } private function icqeowyowgckiiyc() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x6f\x72\x6d\55\x74\141\x62", "\x6f\166\x65\x72\166\x69\145\x77"); } }
