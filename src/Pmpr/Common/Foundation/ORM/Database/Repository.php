<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d0000cbc1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Exception; use Illuminate\Support\Collection; use Illuminate\Database\Query\Builder; use Illuminate\Database\Eloquent\Relations\Relation; use Illuminate\Contracts\Database\Query\Expression; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\Str; use Pmpr\Common\Foundation\ORM\Database\Schema\Text; use Pmpr\Common\Foundation\ORM\Database\Statement\Statement; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Repository extends Container { use ModelTrait; const ksawcegcqeeuswkm = "\x3d"; const gwakowakcqqsyiyu = "\x3c"; const ggyiwkyegsqmgaee = "\76"; const kkiokksygkekyaki = "\74\75"; const wuuiwugmcgkwkimw = "\76\x3d"; public function exists($gqgemcmoicmgaqie = null) { if (is_array($gqgemcmoicmgaqie) || $gqgemcmoicmgaqie instanceof Query) { $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie); } else { $siykeiywomwwuoiw = $gqgemcmoicmgaqie; } $cmaccwokqweqweqi = false; if ($siykeiywomwwuoiw instanceof Builder) { $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists(); } return $cmaccwokqweqweqi; } public function kiaweikcmkuqseuu($icwicymcioeyeyek) { $gqgemcmoicmgaqie = []; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($icwicymcioeyeyek as $qgoqiacsiccwoawi => $eqgoocgaqwqcimie) { $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim($qgoqiacsiccwoawi, $eqgoocgaqwqcimie); } return $this->exists($gqgemcmoicmgaqie); } public function gqaysymikgeawkqa(bool $owoiyeqyeaucssey = true) : ?Builder { try { $mgcmmwqwguicsews = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq(); $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($this->mgogaykgkoogasim()->cueaickeeoiwayou()); $siykeiywomwwuoiw = $mgcmmwqwguicsews->table($aasascamegmwqmqk); $this->exists($siykeiywomwwuoiw); } catch (Exception $wgaoewqkwgomoaai) { $siykeiywomwwuoiw = null; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); if ($owoiyeqyeaucssey) { $this->mgogaykgkoogasim()->geskigquisseygoc()->cucqgwmoseqakgoe(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(false); } } return $siykeiywomwwuoiw; } public final function syugmyosqomgwywi($siykeiywomwwuoiw) : string { if (is_array($siykeiywomwwuoiw)) { $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($siykeiywomwwuoiw); } $asiqcaccsgscgcyq = $siykeiywomwwuoiw->toSql(); $eyagkkkqkwcuygso = $siykeiywomwwuoiw->getBindings(); $gqgemcmoicmgaqie = str_replace(["\77", "\x5c\42", "\x22"], ["\47\x25\x73\x27", '', ''], $asiqcaccsgscgcyq); return vsprintf($gqgemcmoicmgaqie, $eyagkkkqkwcuygso); } public final function myywwqkyiwawwquy(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi) : string { return "{$aasascamegmwqmqk}\56{$qgoqiacsiccwoawi}"; } public final function kmgukcsewikeswco(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) { if ("\x6e\x75\154\x6c" === strtolower($aikcyecgesuiaacw)) { $sogksuscggsicmac = $this->iuymqyggkakwiyog("\156\165\154\154\40\141\x73\x20{$qgoqiacsiccwoawi}"); } else { $sogksuscggsicmac = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi); if ($aikcyecgesuiaacw) { $sogksuscggsicmac .= "\40\141\x73\40{$aikcyecgesuiaacw}"; } } return $sogksuscggsicmac; } public final function iuymqyggkakwiyog(string $sociqikgoyemqaac) { return $this->gqaysymikgeawkqa()->raw($sociqikgoyemqaac); } public function kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw = null) { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if (is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->kyckwuuiqwmyoqma()->kaaeuwaawscoeuqq($gqgemcmoicmgaqie); } if ($gqgemcmoicmgaqie instanceof Query) { $siykeiywomwwuoiw = $gqgemcmoicmgaqie->evaluate($this->mgogaykgkoogasim(), $siykeiywomwwuoiw); } return $siykeiywomwwuoiw; } public function wkmkqaiwuqouweye(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim($aiowsaccomcoikus, $eqgoocgaqwqcimie)->maqiysyuqmwcqoig($cackiyicawmkyqqg)], $siykeiywomwwuoiw); } public function akkkoiiymmamsauc($eqgoocgaqwqcimie = null, string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\52") { if (!$aiowsaccomcoikus) { $aiowsaccomcoikus = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); } return $this->geeumyocaqwwquwk($this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie), $wkkweuacukumqmya); } public function oqomcmyuuakigusk($gqgemcmoicmgaqie, $wkkweuacukumqmya = ["\x2a"]) { return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($gqgemcmoicmgaqie), $wkkweuacukumqmya); } private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) { $mksyucucyswaukig = null; if ($siykeiywomwwuoiw) { $mksyucucyswaukig = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya); } return $mksyucucyswaukig; } public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null) { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if ($qgoqiacsiccwoawi && $ecysmcqmumqmaagg) { $siykeiywomwwuoiw = $this->weyqgwsqeueuwgsm($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg); } $mksyucucyswaukig = null; if ($siykeiywomwwuoiw) { $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya); } return $mksyucucyswaukig; } public function yassqyiieqeywoqi(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg); if ($siykeiywomwwuoiw) { $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } return $aqykuigiuwmmcieu; } public function cieaqygkucwoqwke(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm); if ($siykeiywomwwuoiw) { $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } return $aqykuigiuwmmcieu; } public function asskucacysemeoiu(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = "\x2a") : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->kqewyqqqiyiouaou($uoomaookgsyciacm)); } public function ieieyoeqmmeysauc(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = "\52", $siykeiywomwwuoiw = null) : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $siykeiywomwwuoiw)); } public function ygmcsmegcysyeoss($wkkweuacukumqmya = "\52", $siykeiywomwwuoiw = null) : int { $gaeqamemwmwsyukm = 0; if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if ($siykeiywomwwuoiw) { $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count($wkkweuacukumqmya); } return $gaeqamemwmwsyukm; } public function qgiewwqykwugcuoo(string $qgoqiacsiccwoawi, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null) { $qsmaqqyoggcuyukq = 0; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); if ($siykeiywomwwuoiw) { $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi); } return $qsmaqqyoggcuyukq; } public function geyekyouismwgauc($iceamweyeeiwiucs, $mksyucucyswaukig, $qgoqiacsiccwoawi, $uoomaookgsyciacm = []) { $icwicymcioeyeyek = $this->iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig, $qgoqiacsiccwoawi, $uoomaookgsyciacm); if (!is_array($qgoqiacsiccwoawi)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $qgoqiacsiccwoawi, $icwicymcioeyeyek); } else { $eqgoocgaqwqcimie = $icwicymcioeyeyek; } return $eqgoocgaqwqcimie; } public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = ["\x2a"], $gqgemcmoicmgaqie = []) { $essikcmqiyqaqoaq = []; try { if ($iceamweyeeiwiucs instanceof Relation) { $ayegqaqygsqsmews = $iceamweyeeiwiucs; } else { $jwsqucqyaoaasykk = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($iceamweyeeiwiucs); if ($aaqqkgyougeiueyq instanceof Foreign) { if ($meywaqqsugaoeyys = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $sgmoseoaumayiowg = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $iceamweyeeiwiucs); $moqewomugocaueis = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $ceiwsaacewygcsqg); $iscgcmeykqwwowmq = $aaqqkgyougeiueyq->ogkqyamocsimiymw(); if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu() || $aaqqkgyougeiueyq->wmomygggskkoqess()) { if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { if ($aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { return $this->akkkoiiymmamsauc($sgmoseoaumayiowg, $aaqqkgyougeiueyq->iooowgsqoyqseyuu()); } if ($iscgcmeykqwwowmq) { return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($moqewomugocaueis, $iscgcmeykqwwowmq); } } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($sgmoseoaumayiowg, $ceiwsaacewygcsqg); } if ($iscgcmeykqwwowmq && $aaqqkgyougeiueyq->gumeeckcowwoyoci()) { return $meywaqqsugaoeyys->iekyeyicoyyawomk()->yassqyiieqeywoqi($iscgcmeykqwwowmq, $moqewomugocaueis); } } } $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig); } if ($ayegqaqygsqsmews) { if ($gqgemcmoicmgaqie) { $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $ayegqaqygsqsmews); } if ($ayegqaqygsqsmews) { $essikcmqiyqaqoaq = $this->iiqauwkoiguyeawu($ayegqaqygsqsmews, $wkkweuacukumqmya); } } } catch (Exception $wgaoewqkwgomoaai) { } return $essikcmqiyqaqoaq; } public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation { $ayegqaqygsqsmews = null; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$mksyucucyswaukig instanceof Entity) { $aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig); if ($mksyucucyswaukig) { $mksyucucyswaukig = $meywaqqsugaoeyys->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($aokagokqyuysuksm); } } if ($mksyucucyswaukig instanceof Entity) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($ymaogssqccumcyqa); if ($aaqqkgyougeiueyq instanceof Foreign) { if ($yccmomaaqwugeiuo = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($yccmomaaqwugeiuo); } else { if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($yccmomaaqwugeiuo); } else { if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($yccmomaaqwugeiuo); } else { $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($yccmomaaqwugeiuo); } } else { if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { if ($yccmomaaqwugeiuo instanceof Model) { [$syeseoiyagmgumcy] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $ayegqaqygsqsmews = $mksyucucyswaukig->belongsToMany($yccmomaaqwugeiuo, $syeseoiyagmgumcy); } } } } } } } } return $ayegqaqygsqsmews; } public function acamgaegcsioysiw($aaqqkgyougeiueyq) : array { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (is_string($aaqqkgyougeiueyq)) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($aaqqkgyougeiueyq); } if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->ygswmewosceowmya()) { $gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($gsmssqouaueqkeui) { if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $yuwymayicwwqiske = $meywaqqsugaoeyys->ogqgmqymcwsqikme(); $usymcioagieycusu = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); } else { $yuwymayicwwqiske = $gsmssqouaueqkeui->ogqgmqymcwsqikme(); $usymcioagieycusu = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); } $syeseoiyagmgumcy = $meywaqqsugaoeyys->ysgiswuowuciwqaq()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\137{$wkwywcemusswkgwk}"); $sogksuscggsicmac = [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $gsmssqouaueqkeui]; } } return $sogksuscggsicmac; } public function weyqgwsqeueuwgsm($siykeiywomwwuoiw, string $qgoqiacsiccwoawi, string $ecysmcqmumqmaagg = Constants::eeccqomoaqsawouy) { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if ($siykeiywomwwuoiw) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie = $eqwoegegiamegqsm->kyckwuuiqwmyoqma()->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq($qgoqiacsiccwoawi)->ckooimacgieuwcoy($ecysmcqmumqmaagg)); $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); } return $siykeiywomwwuoiw; } public function ygyguskuyykskwko(string $qwcmueausqgiwigy, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou($this->ymeuwwwkmcwisciq($qwcmueausqgiwigy), $siykeiywomwwuoiw); } public function ymeuwwwkmcwisciq(string $qwcmueausqgiwigy) : array { $uoomaookgsyciacm = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $qgoqiacsiccwoawi = $aaqqkgyougeiueyq->iooowgsqoyqseyuu(); if ($aaqqkgyougeiueyq instanceof Str || $aaqqkgyougeiueyq instanceof Text) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->megqywqeuquawkim($qgoqiacsiccwoawi, "\x25{$qwcmueausqgiwigy}\x25")->iygikqkegwkaaess()->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui); } } return $uoomaookgsyciacm; } public function aeggeuqycwawueqy($siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array { try { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::imywcsggckkcywgk => 1, Constants::wikgqsqysyuoykse => [], Constants::soquiwyuimckgiow => ["\x2a"], Constants::ausqeuugegoygouq => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(), Constants::ieyywsoeoqmceucw => Constants::imywcsggckkcywgk, Constants::wosqwewmqmyweqea => true]); $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] ?: 10, $ywmkwiwkosakssii[Constants::soquiwyuimckgiow] ?: ["\x2a"], $ywmkwiwkosakssii[Constants::ieyywsoeoqmceucw] ?: Constants::imywcsggckkcywgk, $ywmkwiwkosakssii[Constants::imywcsggckkcywgk] ?: 1); $oammesyieqmwuwyi = $ymiyawysimukkoso->sacmkccceuywoqsq()[Constants::uiwqcumqkgikqyue] ?? []; if (!$oammesyieqmwuwyi) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse); } if ($ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { $oammesyieqmwuwyi = $this->mgogaykgkoogasim()->cwgkcyyaymmsomqa($oammesyieqmwuwyi); } $uuwmqqqiwksuaise = $ymiyawysimukkoso->total(); $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage(); $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage(); $yeacayasgueouoqc = $ymiyawysimukkoso->currentPage(); } catch (Exception $wgaoewqkwgomoaai) { $oammesyieqmwuwyi = []; $uuwmqqqiwksuaise = 0; $weyoqgcesqgeusiu = 0; $qcugmkuyweqqyggk = 0; $yeacayasgueouoqc = 1; } return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $yeacayasgueouoqc, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu); } public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $yeacayasgueouoqc = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array { return [Constants::ycuusiweasqygwiw => [Constants::uiiqiokqwmccomiu => $uuwmqqqiwksuaise, Constants::yusuiaeueqwieqqq => $ocqawgquwsqioses, Constants::asmooogmgyecqqka => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } public function iykmimcgkyyoimoc($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $uusmaiomayssaecw = null) : array { return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $qgoqiacsiccwoawi, Constants::kaqagayamqaywssm, $uusmaiomayssaecw); } public function ssiyoimagsskwsoi($gqgemcmoicmgaqie, ?string $qgoqiacsiccwoawi = null) : array { if (!$qgoqiacsiccwoawi) { $qgoqiacsiccwoawi = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); } return $this->cieaqygkucwoqwke($gqgemcmoicmgaqie, $qgoqiacsiccwoawi, Constants::kaqagayamqaywssm); } public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) : array { return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya); } private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : array { $uomewyckeuqoqocu = []; $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou, $uusmaiomayssaecw); if ($iwqgomgkuumgyswi) { $uomewyckeuqoqocu = $iwqgomgkuumgyswi->toArray(); } return $uomewyckeuqoqocu; } public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = Constants::isukcamoimieegam) { $qsmaqqyoggcuyukq = 0; if (!$siykeiywomwwuoiw instanceof Collection) { $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } else { $iwqgomgkuumgyswi = $siykeiywomwwuoiw; } if ($iwqgomgkuumgyswi) { $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->sum(); } return $qsmaqqyoggcuyukq; } public function oyskioqoyikiowaa($siykeiywomwwuoiw, $ekiuyucoiagmscgy, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = Constants::isukcamoimieegam) { $wiiqgewkwwkaukyo = 0; if (!$siykeiywomwwuoiw instanceof Collection) { $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } else { $iwqgomgkuumgyswi = $siykeiywomwwuoiw; } if ($iwqgomgkuumgyswi) { $wiiqgewkwwkaukyo = $iwqgomgkuumgyswi->average($ekiuyucoiagmscgy); } return $wiiqgewkwwkaukyo; } public function qqkcymwukksiakuy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = Constants::isukcamoimieegam) : int { $gaeqamemwmwsyukm = 0; if (!$siykeiywomwwuoiw instanceof Collection) { $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } else { $iwqgomgkuumgyswi = $siykeiywomwwuoiw; } if ($iwqgomgkuumgyswi) { $gaeqamemwmwsyukm = $iwqgomgkuumgyswi->count(); } return $gaeqamemwmwsyukm; } public function isqwqwegwqeskmam($gqgemcmoicmgaqie, $wkkweuacukumqmya = ["\52"]) { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie); if ($siykeiywomwwuoiw) { $aqykuigiuwmmcieu = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya); } return $aqykuigiuwmmcieu; } private function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : ?Collection { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } $iwqgomgkuumgyswi = null; if ($siykeiywomwwuoiw) { try { switch ($aiamqeawckcsuaou) { case Constants::kaqagayamqaywssm: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->pluck($wkkweuacukumqmya, $uusmaiomayssaecw); break; default: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->get($wkkweuacukumqmya); break; } } catch (Exception $wgaoewqkwgomoaai) { } } return $iwqgomgkuumgyswi; } public function qccooyeomgokwsma($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $sogksuscggsicmac = null; if ($yquywseiyocsiqco = $this->mgogaykgkoogasim()->queegmguugiecims()) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kuguwoaesuqsqysu = $yquywseiyocsiqco->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::osocaqqumyuooqyo, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::iwmgegikocuwggua, $eqgoocgaqwqcimie)]); if ($kuguwoaesuqsqysu) { $sogksuscggsicmac = $yquywseiyocsiqco->iekyeyicoyyawomk()->iscemaoqqckmkago($yquywseiyocsiqco->meqwysqkeuyqiioi(), $kuguwoaesuqsqysu); } } return $sogksuscggsicmac; } public function qusqeaiqgggmaskw($gqgemcmoicmgaqie) { $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie); if ($siykeiywomwwuoiw) { return $siykeiywomwwuoiw->delete(); } return 0; } public function suyqucmmoumouiua() : array { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $wkkweuacukumqmya = [$meywaqqsugaoeyys->kumuygiiqswoyasy(true)]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->ygswmewosceowmya() || $aaqqkgyougeiueyq->iueigwuckeaswyuu())) { continue; } $wkkweuacukumqmya[] = $ymqmyyeuycgmigyo; } return $wkkweuacukumqmya; } }
