<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2ce2062a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Model; class Show extends ObjectAware { protected array $tabs = []; protected string $currentTabContent = ''; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function iwwsmcumwsoismmy() : string { return $this->currentTabContent; } public function mcmscciyukauesau() { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($meywaqqsugaoeyys->wkcuasmkgoscaiay() && ($mksyucucyswaukig = $this->imgymusqgccqsqqq()))) { goto wyqueeskecameuks; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwikyscisascoeea(); $soomqaqycmqcwayi = $this->icqeowyowgckiiyc(); $ywoucyskcquysiwc = ["\x6f\166\145\x72\x76\151\145\x77" => [Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::qescuiwgsyuikume => __("\117\166\x65\x72\166\x69\x65\x77", PR__CMN__FOUNDATION)]]; foreach ($meywaqqsugaoeyys->oyeskqayoscwciem()->aeosueemgsygqese() as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->gumeeckcowwoyoci() || $aaqqkgyougeiueyq->ygswmewosceowmya()))) { goto qayiqaykkywcyisq; } $ywoyoawciekocqao = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$ywoyoawciekocqao instanceof Model) { goto aymoguycgmuggcik; } if (!($ckcgaqacwceaaueg = $ywoyoawciekocqao->uqeoyqiwywwmsiew($meywaqqsugaoeyys->oyeskqayoscwciem()->aiqioscoyukqgsgw() . Constants::mswocgcucqoaesaa))) { goto aqeyqwuywqcmuoce; } $ckcgaqacwceaaueg->acokiqqgsmoqaeyu(); aqeyqwuywqcmuoce: $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $ywoyoawciekocqao->oyeskqayoscwciem()->qyyikeaseoskcacm(), Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::emkkgysokckswycs => $ywoyoawciekocqao, Constants::maiomwmauyekiseg => $aaqqkgyougeiueyq]; aymoguycgmuggcik: qayiqaykkywcyisq: kikkkocywiyuyuqw: } kwcscewawgicomok: switch ($soomqaqycmqcwayi) { case "\x6f\x76\x65\162\x76\151\x65\x77": $ccowyogiqwikkkie = $meywaqqsugaoeyys->gsuymmgcmsuewowe($mksyucucyswaukig); $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig)); $gkyciwoiiisgywcs->unset($yygmoeguaqyumuui, [Constants::gouqcwikiiygyasc]); $yygmoeguaqyumuui = $meywaqqsugaoeyys->giiqwciomksuiymm($yygmoeguaqyumuui); $oammesyieqmwuwyi = array_filter($meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui)); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!$meywaqqsugaoeyys->ggwyugcggywuwcse()) { goto cueuscqkicwwicei; } $ccowyogiqwikkkie[] = $swqimwqeweekeusq->yuawgssgauywkiia($this->oyeskqayoscwciem()->uikgwcuascgeissw("\145\x64\151\x74\x5f\x69\x74\x65\155"), $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm), ["\143\154\x61\x73\x73" => "\160\x72\x2d\x62\x74\156\x20\x62\x74\x6e\x2d\160\x72\x69\x6d\141\x72\171"]); cueuscqkicwwicei: if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) { goto gcecamucuogcciig; } $ccowyogiqwikkkie[] = $swqimwqeweekeusq->yuawgssgauywkiia($this->oyeskqayoscwciem()->uikgwcuascgeissw("\162\x65\155\157\x76\145\x5f\151\164\145\x6d"), "\43", ["\x63\x6c\141\x73\x73" => "\x70\x72\55\x62\x74\156\x20\x62\x74\156\x2d\x64\x61\156\147\145\162\x20\x70\162\x2d\x63\x6f\x6e\x66\151\x72\155\141\x62\154\x65\55\x61\x63\x74\151\157\156\x20\155\162\55\x32", "\144\141\164\141\55\x63\157\156\x66\x69\x67" => $meywaqqsugaoeyys->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))]); gcecamucuogcciig: $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\x6f\162\155\137\163\x68\157\167\x5f{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\141\x63\x74\x69\x6f\156\x73", $ccowyogiqwikkkie, $aokagokqyuysuksm, $mksyucucyswaukig); $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\x6f\x72\x6d\x5f\163\150\157\x77\137\x61\x63\164\151\157\156\163", $ccowyogiqwikkkie, $aokagokqyuysuksm, $mksyucucyswaukig, $meywaqqsugaoeyys); $this->currentTabContent = $this->iuygowkemiiwqmiw("\157\166\x65\162\x76\x69\x65\x77", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::kekekeusyqkouowm => $ccowyogiqwikkkie]); goto akoweomooyuwamow; default: if (!($cciauwuwuqaywgce = $gkyciwoiiisgywcs->get($ywoucyskcquysiwc, $soomqaqycmqcwayi))) { goto iecqkqoiqimmisyw; } if ($qoyaeisyksomgkgs = $gkyciwoiiisgywcs->get($cciauwuwuqaywgce, Constants::emkkgysokckswycs)) { goto kiewcwsykccgocuc; } $this->currentTabContent = (string) $this->ocksiywmkyaqseou("\157\x72\x6d\137\166\x69\x65\167\137\x73\x68\157\x77\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f{$soomqaqycmqcwayi}\137\x74\141\142\x5f\143\x6f\x6e\x74\145\x6e\x74", $meywaqqsugaoeyys); goto eysuawiooiswaseq; kiewcwsykccgocuc: $momcykaoccoymeig = $qoyaeisyksomgkgs->cgswceaawqgeskua("\151\156\144\x65\170"); if (!$momcykaoccoymeig instanceof Index) { goto suscosoukqeyyqgs; } $euggmwqwwqwcgmgi = $meywaqqsugaoeyys->getForeignKey(); $this->currentTabContent = $momcykaoccoymeig->ekysoioumkkwawwm([Constants::iaesmigkgskyygem => $qoyaeisyksomgkgs->wkmkqaiwuqouweye($euggmwqwwqwcgmgi, $this->mwikyscisascoeea())]); suscosoukqeyyqgs: eysuawiooiswaseq: iecqkqoiqimmisyw: goto akoweomooyuwamow; } oaociaioauummsey: akoweomooyuwamow: $meywaqqsugaoeyys->iqieagiumucuwmyq($aokagokqyuysuksm); if (!($ucgcaisaegucqsym = $meywaqqsugaoeyys->oyeskqayoscwciem()->egeywisiumiokmcm())) { goto kikkkoqiumqoeiyy; } foreach ($ucgcaisaegucqsym as $sqeykgyoooqysmca) { if ($sqeykgyoooqysmca === Constants::miceosguuseyyuqe) { goto euuekiyqwkowiees; } $meywaqqsugaoeyys->iqieagiumucuwmyq(0, false, $sqeykgyoooqysmca, $aokagokqyuysuksm); goto assoyoeukmqiucyq; euuekiyqwkowiees: $meywaqqsugaoeyys->iqieagiumucuwmyq($aokagokqyuysuksm); assoyoeukmqiucyq: egiauwuekseyeaeq: } eogomkswkaqwyycm: kikkkoqiumqoeiyy: $this->tabs = (array) $this->ocksiywmkyaqseou("\157\162\155\x5f\x76\151\145\167\x5f\163\x68\x6f\x77\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x74\141\x62\163", $ywoucyskcquysiwc, $mksyucucyswaukig); wyqueeskecameuks: } public function render() { parent::render(); if (!($mksyucucyswaukig = $this->imgymusqgccqsqqq())) { goto gqycmyieayoegcsy; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x76\151\145\167\x5f\151\164\145\155"); if (!($pkyyagewkiyckmwy = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig))) { goto esokkakkumskkmiu; } $meqocwsecsywiiqs = sprintf("\45\x73\40\55\40\45\x73", $meqocwsecsywiiqs, $pkyyagewkiyckmwy); esokkakkumskkmiu: $qookweymeqawmcwo = ["\x74\x61\x62\163" => $this->aymqiqcgkiucsuyc($this->equiyaoamqmaeckc()), "\x63\165\162\x72\x65\156\x74\x5f\164\x61\142" => $this->icqeowyowgckiiyc(), Constants::emkkgysokckswycs => $this->mgogaykgkoogasim(), Constants::NAME => $this->aakmagwggmkoiiyu(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::ssmskyqgcmeiayco => $this->iwwsmcumwsoismmy()]; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::ieioeisgwcgysukw); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto msiuqseowuumiwuo; } $qqscaoyqikuyeoaw = Constants::ieioeisgwcgysukw; msiuqseowuumiwuo: $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo(Constants::ieioeisgwcgysukw, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); gqycmyieayoegcsy: } public function aymqiqcgkiucsuyc(array $ywoucyskcquysiwc) : array { foreach ($ywoucyskcquysiwc as $uusmaiomayssaecw => $cciauwuwuqaywgce) { $ywoucyskcquysiwc[$uusmaiomayssaecw][Constants::auqoykcmsiauccao] = $this->aamskymqusecegga($uusmaiomayssaecw); iayguaeseyaemwkk: } sqiyuasgusgawuoi: return $ywoucyskcquysiwc; } public function aamskymqusecegga($cciauwuwuqaywgce) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x6f\x72\x6d\55\x74\141\x62" => $cciauwuwuqaywgce], $this->mgogaykgkoogasim()->uesweuocqoywoyms($this->mwikyscisascoeea())); } public function icqeowyowgckiiyc() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\157\x72\x6d\x2d\x74\x61\x62", "\157\166\x65\x72\x76\151\x65\167"); } }
