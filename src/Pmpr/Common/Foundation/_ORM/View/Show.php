<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\View; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Show extends ObjectAwareView { protected array $tabs = []; protected string $currentTabContent = ''; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function iwwsmcumwsoismmy() : string { return $this->currentTabContent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x75\x72\162\x65\156\x74\137\x73\x63\x72\145\145\x6e", [$this, "\155\x63\x6d\163\143\143\151\x79\165\x6b\141\165\x65\163\x61\165"]); } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aokagokqyuysuksm = $this->mwyqswsaeeewsosm())) { goto gmwykkouysyaqwqm; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!$meywaqqsugaoeyys->amimkmoyyqiysugw()) { goto eekcoeikaeaaeyii; } $this->rsaiaimkmskoiysk(Constants::cwacquagagwkcisc, Constants::awysmmukegasimmq, $swqimwqeweekeusq->yuawgssgauywkiia($meywaqqsugaoeyys->euwycwigoeawgckq("\x65\144\x69\x74\137\151\164\145\x6d"), $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm), ["\x63\x6c\x61\163\x73" => "\x70\162\x2d\x62\x74\156\40\x62\164\156\55\x70\162\151\155\x61\162\171"])); eekcoeikaeaaeyii: if (!$meywaqqsugaoeyys->awcggayuseoukmkw()) { goto cogywoqcqummsyus; } $this->rsaiaimkmskoiysk(Constants::cwacquagagwkcisc, Constants::DELETE, $swqimwqeweekeusq->yuawgssgauywkiia($meywaqqsugaoeyys->euwycwigoeawgckq("\x72\x65\x6d\157\166\x65\137\x69\164\145\x6d"), "\43", ["\x63\x6c\x61\x73\163" => "\x70\162\55\142\164\x6e\x20\x62\x74\156\x2d\144\x61\156\147\145\162\40\x70\162\55\143\157\156\x66\151\162\155\x61\142\x6c\x65\x2d\141\143\164\151\x6f\156\x20\155\162\55\x32", "\144\x61\x74\141\x2d\143\157\156\146\151\147" => $this->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))])); cogywoqcqummsyus: gmwykkouysyaqwqm: } public function mcmscciyukauesau() { if (!($mksyucucyswaukig = $this->imgymusqgccqsqqq())) { goto ewscugeuicukkycc; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwyqswsaeeewsosm(); $soomqaqycmqcwayi = $this->icqeowyowgckiiyc(); $ywoucyskcquysiwc = [Constants::agwsswqikygewuuu => [Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::qescuiwgsyuikume => __("\117\166\x65\162\166\x69\x65\x77", PR__CMN__FOUNDATION)]]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->gumeeckcowwoyoci() || $aaqqkgyougeiueyq->ygswmewosceowmya()))) { goto uaqackioaiqwcocy; } $ywoyoawciekocqao = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$ywoyoawciekocqao instanceof Model) { goto mkwkkmkgiqiamacc; } if (!($ckcgaqacwceaaueg = $ywoyoawciekocqao->uqeoyqiwywwmsiew($meywaqqsugaoeyys->aakmagwggmkoiiyu() . Constants::mswocgcucqoaesaa))) { goto sockeswygwcskeuq; } $ckcgaqacwceaaueg->acokiqqgsmoqaeyu(); sockeswygwcskeuq: $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $ywoyoawciekocqao->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::emkkgysokckswycs => $ywoyoawciekocqao, Constants::maiomwmauyekiseg => $aaqqkgyougeiueyq]; mkwkkmkgiqiamacc: uaqackioaiqwcocy: uaukmuiwskcemcsw: } ugqwuugsweqgmywk: switch ($soomqaqycmqcwayi) { case "\x6f\x76\x65\x72\x76\x69\x65\167": $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig)); $gkyciwoiiisgywcs->unset($yygmoeguaqyumuui, [Constants::gouqcwikiiygyasc]); $oammesyieqmwuwyi = array_filter($this->soagegegugeemwce($mksyucucyswaukig, $yygmoeguaqyumuui)); $this->currentTabContent = $this->iuygowkemiiwqmiw("\157\166\145\x72\x76\151\145\x77", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::kekekeusyqkouowm => $this->igmckyamugkymqku(Constants::cwacquagagwkcisc)]); goto cscusseysqygsoiy; default: if (!($cciauwuwuqaywgce = $gkyciwoiiisgywcs->get($ywoucyskcquysiwc, $soomqaqycmqcwayi))) { goto eeyyskqsmquyquqw; } $qoyaeisyksomgkgs = $gkyciwoiiisgywcs->get($cciauwuwuqaywgce, Constants::emkkgysokckswycs); if ($qoyaeisyksomgkgs instanceof Model) { goto uegouoiuyoqkcscg; } $this->currentTabContent = (string) $this->ocksiywmkyaqseou("\157\162\x6d\x5f\166\x69\x65\167\x5f\163\x68\157\167\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f{$soomqaqycmqcwayi}\x5f\x74\141\142\137\x63\x6f\156\164\145\156\164", $meywaqqsugaoeyys); goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: $momcykaoccoymeig = $qoyaeisyksomgkgs->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if (!$momcykaoccoymeig instanceof Index) { goto mggeqkcksyaymcsa; } $euggmwqwwqwcgmgi = $meywaqqsugaoeyys->gssiscqyqsacmeca()->getForeignKey(); $this->currentTabContent = $momcykaoccoymeig->ekysoioumkkwawwm([Constants::iaesmigkgskyygem => $qoyaeisyksomgkgs->iekyeyicoyyawomk()->wkmkqaiwuqouweye($euggmwqwwqwcgmgi, $this->mwyqswsaeeewsosm())]); mggeqkcksyaymcsa: cgyakcqgugqgkqiw: eeyyskqsmquyquqw: goto cscusseysqygsoiy; } isgwkwacoyimiauk: cscusseysqygsoiy: $meywaqqsugaoeyys->ayqesuasiggqoeeo()?->markAsSeen($aokagokqyuysuksm); $this->tabs = (array) $this->ocksiywmkyaqseou("\x6f\162\155\x5f\166\x69\145\167\137\163\x68\x6f\x77\137{$meywaqqsugaoeyys->cueaickeeoiwayou()}\x5f\x74\141\x62\163", $ywoucyskcquysiwc, $mksyucucyswaukig); ewscugeuicukkycc: } public function render() { parent::render(); if (!($mksyucucyswaukig = $this->imgymusqgccqsqqq())) { goto ukkcmocamwgiqayu; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x76\x69\x65\167\137\x69\164\x65\155"); if (!($pkyyagewkiyckmwy = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig))) { goto kqswcsysqawkcgye; } $meqocwsecsywiiqs = sprintf("\45\163\x20\55\x20\45\163", $meqocwsecsywiiqs, $pkyyagewkiyckmwy); kqswcsysqawkcgye: $qookweymeqawmcwo = ["\164\x61\142\x73" => $this->aymqiqcgkiucsuyc($this->equiyaoamqmaeckc()), "\x63\165\162\x72\145\x6e\164\x5f\164\x61\142" => $this->icqeowyowgckiiyc(), Constants::emkkgysokckswycs => $this->mgogaykgkoogasim(), Constants::NAME => $meywaqqsugaoeyys->cueaickeeoiwayou(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::ssmskyqgcmeiayco => $this->iwwsmcumwsoismmy(), Constants::myikkigscysoykgy => $this->igmckyamugkymqku(Constants::cwacquagagwkcisc)]; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::ieioeisgwcgysukw); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto wusciwkkckmqigms; } $qqscaoyqikuyeoaw = Constants::ieioeisgwcgysukw; wusciwkkckmqigms: $ougkuwgwsmiaskmm = $meywaqqsugaoeyys->osgoqoeuiiiwowke(Constants::cauuugmucmiacwsy, Constants::ieioeisgwcgysukw, $qookweymeqawmcwo); if (!($ougkuwgwsmiaskmm && is_array($ougkuwgwsmiaskmm))) { goto iiiccouaaqsyikae; } $qookweymeqawmcwo = $ougkuwgwsmiaskmm; iiiccouaaqsyikae: $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); ukkcmocamwgiqayu: } private function soagegegugeemwce($mksyucucyswaukig, array $yygmoeguaqyumuui = []) : array { $oammesyieqmwuwyi = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) { goto uykousayyomcaeaa; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $qssskwiqeumgkago = $meywaqqsugaoeyys->aeosueemgsygqese(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ekcswiguywieeeoc = true; $aaqqkgyougeiueyq = null; if (!is_numeric($uusmaiomayssaecw)) { goto gygwewcqsmwqismo; } $uusmaiomayssaecw = $yyauwyaeewsickwk->ogimogiceeekegoi($pkyyagewkiyckmwy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $uusmaiomayssaecw); $aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($qssskwiqeumgkago, $uusmaiomayssaecw); $ekcswiguywieeeoc = $aaqqkgyougeiueyq->gksokmqegsecssgq(Constants::ieioeisgwcgysukw, $mksyucucyswaukig); $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco(); $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw(); goto uougwgeyiokewkkm; gygwewcqsmwqismo: $sqqewmoeaekuyyas = 0; $eqgoocgaqwqcimie = ''; uougwgeyiokewkkm: if (!($ekcswiguywieeeoc && $pkyyagewkiyckmwy)) { goto ucqmumuygcywwqma; } if (!$aaqqkgyougeiueyq instanceof Schema) { goto ukqocwewouckikso; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); if (!$aaqqkgyougeiueyq instanceof Enum) { goto gommacygsykyussk; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mksyucucyswaukig, $uusmaiomayssaecw . Constants::icmokuskwoskgace, $eqgoocgaqwqcimie); gommacygsykyussk: ukqocwewouckikso: $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; ucqmumuygcywwqma: amgsueumgaguceaa: } mwysseaekcsiesmm: uykousayyomcaeaa: return $gkyciwoiiisgywcs->yaeiiwwyckwugsem($oammesyieqmwuwyi); } private function aymqiqcgkiucsuyc(array $ywoucyskcquysiwc) : array { foreach ($ywoucyskcquysiwc as $uusmaiomayssaecw => $cciauwuwuqaywgce) { $ywoucyskcquysiwc[$uusmaiomayssaecw][Constants::auqoykcmsiauccao] = $this->aamskymqusecegga($uusmaiomayssaecw); iuuuususuuuaieem: } uimeeckqksqeekqq: return $ywoucyskcquysiwc; } private function aamskymqusecegga($cciauwuwuqaywgce) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\157\x72\x6d\55\164\x61\x62" => $cciauwuwuqaywgce], $this->mgogaykgkoogasim()->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $this->mwyqswsaeeewsosm())); } private function icqeowyowgckiiyc() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\157\162\155\55\x74\141\142", "\157\166\145\x72\166\x69\145\x77"); } }
