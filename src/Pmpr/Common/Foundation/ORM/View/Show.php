<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\ORM\DB\Model; class Show extends ObjectAware { protected array $tabs = []; protected string $currentTabContent = ''; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function iwwsmcumwsoismmy() : string { return $this->currentTabContent; } public function mcmscciyukauesau() { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($meywaqqsugaoeyys->wkcuasmkgoscaiay() && ($mksyucucyswaukig = $this->imgymusqgccqsqqq()))) { goto emqswoaawgeyosmi; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwikyscisascoeea(); $soomqaqycmqcwayi = $this->icqeowyowgckiiyc(); $ywoucyskcquysiwc = ["\157\x76\x65\162\x76\151\x65\167" => [Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::qescuiwgsyuikume => __("\x4f\166\145\162\x76\151\145\167", PR__CMN__FOUNDATION)]]; foreach ($meywaqqsugaoeyys->oyeskqayoscwciem()->aeosueemgsygqese() as $aaqqkgyougeiueyq) { if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->gumeeckcowwoyoci() || $aaqqkgyougeiueyq->ygswmewosceowmya()))) { goto wsesqmcqoiyyqkqi; } $ywoyoawciekocqao = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$ywoyoawciekocqao instanceof Model) { goto iesekaeqeomeuaui; } if (!($ckcgaqacwceaaueg = $ywoyoawciekocqao->uqeoyqiwywwmsiew($meywaqqsugaoeyys->oyeskqayoscwciem()->aiqioscoyukqgsgw() . Constants::mswocgcucqoaesaa))) { goto oyeyomcgkmgymogq; } $ckcgaqacwceaaueg->acokiqqgsmoqaeyu(); oyeyomcgkmgymogq: $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $ywoyoawciekocqao->oyeskqayoscwciem()->qyyikeaseoskcacm(), Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::emkkgysokckswycs => $ywoyoawciekocqao, Constants::maiomwmauyekiseg => $aaqqkgyougeiueyq]; iesekaeqeomeuaui: wsesqmcqoiyyqkqi: mscyggqcesgqqksu: } gamqcwuwkikwqoay: switch ($soomqaqycmqcwayi) { case "\157\x76\x65\x72\x76\151\x65\x77": $ccowyogiqwikkkie = $meywaqqsugaoeyys->gsuymmgcmsuewowe($mksyucucyswaukig); $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig)); $gkyciwoiiisgywcs->unset($yygmoeguaqyumuui, [Constants::gouqcwikiiygyasc]); $yygmoeguaqyumuui = $meywaqqsugaoeyys->giiqwciomksuiymm($yygmoeguaqyumuui); $oammesyieqmwuwyi = array_filter($meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui)); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (!$meywaqqsugaoeyys->ggwyugcggywuwcse()) { goto oimkeqocuguqqsqk; } $ccowyogiqwikkkie[] = $swqimwqeweekeusq->yuawgssgauywkiia($this->oyeskqayoscwciem()->uikgwcuascgeissw("\x65\144\151\x74\x5f\x69\x74\145\x6d"), $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm), ["\143\154\x61\163\x73" => "\160\162\55\x62\x74\156\x20\x62\x74\156\55\x70\x72\x69\155\x61\x72\171"]); oimkeqocuguqqsqk: if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) { goto oeocukauoyosicso; } $ccowyogiqwikkkie[] = $swqimwqeweekeusq->yuawgssgauywkiia($this->oyeskqayoscwciem()->uikgwcuascgeissw("\x72\x65\155\x6f\x76\x65\137\151\164\145\x6d"), "\x23", ["\x63\154\x61\163\163" => "\x70\x72\55\142\164\x6e\40\x62\164\x6e\x2d\144\141\x6e\147\145\x72\40\160\x72\55\143\x6f\156\x66\151\162\155\141\x62\154\145\x2d\x61\143\164\151\x6f\156\x20\155\x72\55\62", "\x64\141\164\x61\x2d\143\157\x6e\146\151\x67" => $meywaqqsugaoeyys->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))]); oeocukauoyosicso: $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\x6f\x72\155\x5f\x73\x68\157\x77\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x61\143\x74\x69\157\x6e\163", $ccowyogiqwikkkie, $aokagokqyuysuksm, $mksyucucyswaukig); $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\x6f\x72\x6d\137\163\150\157\167\x5f\x61\143\x74\x69\x6f\156\x73", $ccowyogiqwikkkie, $aokagokqyuysuksm, $mksyucucyswaukig, $meywaqqsugaoeyys); $this->currentTabContent = $this->iuygowkemiiwqmiw("\157\166\x65\x72\166\x69\x65\167", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::kekekeusyqkouowm => $ccowyogiqwikkkie]); goto mogkoocsoeuyoqqa; default: if (!($cciauwuwuqaywgce = $gkyciwoiiisgywcs->get($ywoucyskcquysiwc, $soomqaqycmqcwayi))) { goto uckewycoogsogwiy; } if ($qoyaeisyksomgkgs = $gkyciwoiiisgywcs->get($cciauwuwuqaywgce, Constants::emkkgysokckswycs)) { goto yykqaowwsqgqysmq; } $this->currentTabContent = (string) $this->ocksiywmkyaqseou("\x6f\x72\155\137\166\151\145\167\137\x73\x68\157\167\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137{$soomqaqycmqcwayi}\137\x74\x61\x62\137\143\x6f\156\x74\145\x6e\164", $meywaqqsugaoeyys); goto kwiggogcgciwuwqk; yykqaowwsqgqysmq: $momcykaoccoymeig = $qoyaeisyksomgkgs->cgswceaawqgeskua("\x69\156\144\145\170"); if (!$momcykaoccoymeig instanceof Index) { goto suqceasgacskcmkc; } $euggmwqwwqwcgmgi = $meywaqqsugaoeyys->getForeignKey(); $this->currentTabContent = $momcykaoccoymeig->ekysoioumkkwawwm([Constants::iaesmigkgskyygem => $qoyaeisyksomgkgs->wkmkqaiwuqouweye($euggmwqwwqwcgmgi, $this->mwikyscisascoeea())]); suqceasgacskcmkc: kwiggogcgciwuwqk: uckewycoogsogwiy: goto mogkoocsoeuyoqqa; } wkwamkgkwykeqkec: mogkoocsoeuyoqqa: $meywaqqsugaoeyys->iqieagiumucuwmyq($aokagokqyuysuksm); if (!($ucgcaisaegucqsym = $meywaqqsugaoeyys->oyeskqayoscwciem()->egeywisiumiokmcm())) { goto ocywegekakimmwcq; } foreach ($ucgcaisaegucqsym as $sqeykgyoooqysmca) { if ($sqeykgyoooqysmca === Constants::miceosguuseyyuqe) { goto gswcoeiisamakwii; } $meywaqqsugaoeyys->iqieagiumucuwmyq(0, false, $sqeykgyoooqysmca, $aokagokqyuysuksm); goto yuimwyoywaiiqacs; gswcoeiisamakwii: $meywaqqsugaoeyys->iqieagiumucuwmyq($aokagokqyuysuksm); yuimwyoywaiiqacs: yoqakewookqoqacm: } ikuuiauwouuqawuw: ocywegekakimmwcq: $this->tabs = (array) $this->ocksiywmkyaqseou("\x6f\162\155\137\x76\x69\145\167\137\x73\150\x6f\167\x5f{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\164\x61\142\163", $ywoucyskcquysiwc, $mksyucucyswaukig); emqswoaawgeyosmi: } public function render() { parent::render(); if (!($mksyucucyswaukig = $this->imgymusqgccqsqqq())) { goto okkmcocqokkskasy; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x76\x69\145\x77\137\151\x74\145\x6d"); if (!($pkyyagewkiyckmwy = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig))) { goto iwsmmkqaoksmocok; } $meqocwsecsywiiqs = sprintf("\45\x73\40\55\x20\x25\163", $meqocwsecsywiiqs, $pkyyagewkiyckmwy); iwsmmkqaoksmocok: $qookweymeqawmcwo = ["\164\x61\142\x73" => $this->aymqiqcgkiucsuyc($this->equiyaoamqmaeckc()), "\143\165\162\x72\x65\x6e\164\x5f\164\141\x62" => $this->icqeowyowgckiiyc(), Constants::emkkgysokckswycs => $this->mgogaykgkoogasim(), Constants::NAME => $this->aakmagwggmkoiiyu(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ckmqoekmugkggeym => $mksyucucyswaukig, Constants::ssmskyqgcmeiayco => $this->iwwsmcumwsoismmy()]; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::ieioeisgwcgysukw); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto esikeyqyuikmaiek; } $qqscaoyqikuyeoaw = Constants::ieioeisgwcgysukw; esikeyqyuikmaiek: $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo(Constants::ieioeisgwcgysukw, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); okkmcocqokkskasy: } public function aymqiqcgkiucsuyc(array $ywoucyskcquysiwc) : array { foreach ($ywoucyskcquysiwc as $uusmaiomayssaecw => $cciauwuwuqaywgce) { $ywoucyskcquysiwc[$uusmaiomayssaecw][Constants::auqoykcmsiauccao] = $this->aamskymqusecegga($uusmaiomayssaecw); esaqcqqwuussiiwo: } qiiigwkqeoewsuwm: return $ywoucyskcquysiwc; } public function aamskymqusecegga($cciauwuwuqaywgce) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\157\162\x6d\x2d\164\x61\142" => $cciauwuwuqaywgce], $this->mgogaykgkoogasim()->uesweuocqoywoyms($this->mwikyscisascoeea())); } public function icqeowyowgckiiyc() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\157\162\x6d\x2d\x74\141\142", "\157\x76\145\162\166\151\x65\x77"); } }
