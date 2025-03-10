<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceca327bf05             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Exception; use Illuminate\Support\Collection; use Illuminate\Database\Query\Builder; use Illuminate\Database\Eloquent\Relations\Relation; use Illuminate\Contracts\Database\Query\Expression; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Database\Schema\NoneSchema; use Pmpr\Common\Foundation\ORM\Database\Schema\Str; use Pmpr\Common\Foundation\ORM\Database\Schema\Text; use Pmpr\Common\Foundation\ORM\Database\Statement\Statement; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Repository extends Container { use ModelTrait; const ksawcegcqeeuswkm = '='; const gwakowakcqqsyiyu = '<'; const ggyiwkyegsqmgaee = '>'; const kkiokksygkekyaki = '<='; const wuuiwugmcgkwkimw = '>='; public function exists($gqgemcmoicmgaqie = null) { if (is_array($gqgemcmoicmgaqie) || $gqgemcmoicmgaqie instanceof Query) { $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie); } else { $siykeiywomwwuoiw = $gqgemcmoicmgaqie; } $cmaccwokqweqweqi = false; if ($siykeiywomwwuoiw instanceof Builder) { $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists(); } return $cmaccwokqweqweqi; } public function kiaweikcmkuqseuu($icwicymcioeyeyek) { $gqgemcmoicmgaqie = []; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($icwicymcioeyeyek as $qgoqiacsiccwoawi => $eqgoocgaqwqcimie) { $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim($qgoqiacsiccwoawi, $eqgoocgaqwqcimie); } return $this->exists($gqgemcmoicmgaqie); } public function gqaysymikgeawkqa(bool $owoiyeqyeaucssey = true) : ?Builder { try { $mgcmmwqwguicsews = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq(); $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($this->mgogaykgkoogasim()->cueaickeeoiwayou()); $siykeiywomwwuoiw = $mgcmmwqwguicsews->table($aasascamegmwqmqk); $this->exists($siykeiywomwwuoiw); } catch (Exception $wgaoewqkwgomoaai) { $siykeiywomwwuoiw = null; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); if ($owoiyeqyeaucssey) { $this->mgogaykgkoogasim()->geskigquisseygoc()->cucqgwmoseqakgoe(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(false); } } return $siykeiywomwwuoiw; } public final function syugmyosqomgwywi($siykeiywomwwuoiw) : string { if (is_array($siykeiywomwwuoiw)) { $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($siykeiywomwwuoiw); } $asiqcaccsgscgcyq = $siykeiywomwwuoiw->toSql(); $eyagkkkqkwcuygso = $siykeiywomwwuoiw->getBindings(); $gqgemcmoicmgaqie = str_replace(['?', '\\"', '"'], ['\'%s\'', "", ""], $asiqcaccsgscgcyq); return vsprintf($gqgemcmoicmgaqie, $eyagkkkqkwcuygso); } public final function myywwqkyiwawwquy(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi) : string { if (str_contains($qgoqiacsiccwoawi, '.')) { return $qgoqiacsiccwoawi; } return "{$aasascamegmwqmqk}.{$qgoqiacsiccwoawi}"; } public final function kmgukcsewikeswco(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) { if ('null' === strtolower($aikcyecgesuiaacw)) { $sogksuscggsicmac = $this->iuymqyggkakwiyog("null as {$qgoqiacsiccwoawi}"); } else { $sogksuscggsicmac = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi); if ($aikcyecgesuiaacw) { $sogksuscggsicmac .= " as {$aikcyecgesuiaacw}"; } } return $sogksuscggsicmac; } public final function iuymqyggkakwiyog(string $sociqikgoyemqaac) { return $this->gqaysymikgeawkqa()->raw($sociqikgoyemqaac); } public function kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw = null) { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if (is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->kyckwuuiqwmyoqma()->kaaeuwaawscoeuqq($gqgemcmoicmgaqie); } if ($gqgemcmoicmgaqie instanceof Query) { $siykeiywomwwuoiw = $gqgemcmoicmgaqie->evaluate($this->mgogaykgkoogasim(), $siykeiywomwwuoiw); } return $siykeiywomwwuoiw; } public function wkmkqaiwuqouweye(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim($aiowsaccomcoikus, $eqgoocgaqwqcimie)->maqiysyuqmwcqoig($cackiyicawmkyqqg)], $siykeiywomwwuoiw); } public function akkkoiiymmamsauc($eqgoocgaqwqcimie = null, string $aiowsaccomcoikus = null, $wkkweuacukumqmya = '*') { if (!$aiowsaccomcoikus) { $aiowsaccomcoikus = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); } return $this->geeumyocaqwwquwk($this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie), $wkkweuacukumqmya); } public function oqomcmyuuakigusk($gqgemcmoicmgaqie, $wkkweuacukumqmya = ['*']) { return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($gqgemcmoicmgaqie), $wkkweuacukumqmya); } private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*']) { $mksyucucyswaukig = null; if ($siykeiywomwwuoiw) { $mksyucucyswaukig = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya); } return $mksyucucyswaukig; } public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null) { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if ($qgoqiacsiccwoawi && $ecysmcqmumqmaagg) { $siykeiywomwwuoiw = $this->weyqgwsqeueuwgsm($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg); } $mksyucucyswaukig = null; if ($siykeiywomwwuoiw) { try { $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya); } catch (Exception $wgaoewqkwgomoaai) { $mksyucucyswaukig = null; } } return $mksyucucyswaukig; } public function yassqyiieqeywoqi(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = ['*'], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg); if ($siykeiywomwwuoiw) { $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } return $aqykuigiuwmmcieu; } public function cieaqygkucwoqwke($uoomaookgsyciacm, $wkkweuacukumqmya = ['*'], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm); if ($siykeiywomwwuoiw) { $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } return $aqykuigiuwmmcieu; } public function sekueegoyaoicsiq(string $qgoqiacsiccwoawi, array $uoomaookgsyciacm = []) { return $this->ceasskycacgscsco($qgoqiacsiccwoawi, $this->kqewyqqqiyiouaou($uoomaookgsyciacm)); } public function asskucacysemeoiu(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = '*') : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->kqewyqqqiyiouaou($uoomaookgsyciacm)); } public function ieieyoeqmmeysauc(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = '*', $siykeiywomwwuoiw = null) : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $siykeiywomwwuoiw)); } public function ygmcsmegcysyeoss($wkkweuacukumqmya = '*', $siykeiywomwwuoiw = null) : int { $gaeqamemwmwsyukm = 0; if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if ($siykeiywomwwuoiw) { try { $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count($wkkweuacukumqmya); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } } return $gaeqamemwmwsyukm; } public function ceasskycacgscsco($qgoqiacsiccwoawi, $siykeiywomwwuoiw = null) { $wiiqgewkwwkaukyo = 0; if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if ($siykeiywomwwuoiw) { try { $wiiqgewkwwkaukyo = $siykeiywomwwuoiw->average($qgoqiacsiccwoawi); } catch (Exception $wgaoewqkwgomoaai) { $wiiqgewkwwkaukyo = 0; } } return $wiiqgewkwwkaukyo; } public function qgiewwqykwugcuoo(string $qgoqiacsiccwoawi, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null) { $qsmaqqyoggcuyukq = 0; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); if ($siykeiywomwwuoiw) { try { $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi); } catch (Exception $wgaoewqkwgomoaai) { $qsmaqqyoggcuyukq = 0; } } return $qsmaqqyoggcuyukq; } public function geyekyouismwgauc($iceamweyeeiwiucs, $mksyucucyswaukig, $qgoqiacsiccwoawi, $uoomaookgsyciacm = []) { $icwicymcioeyeyek = $this->iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig, $qgoqiacsiccwoawi, $uoomaookgsyciacm); if (!is_array($qgoqiacsiccwoawi)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $qgoqiacsiccwoawi, $icwicymcioeyeyek); } else { $eqgoocgaqwqcimie = $icwicymcioeyeyek; } return $eqgoocgaqwqcimie; } public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = ['*'], $gqgemcmoicmgaqie = []) { $essikcmqiyqaqoaq = []; try { if ($iceamweyeeiwiucs instanceof Relation) { $ayegqaqygsqsmews = $iceamweyeeiwiucs; } else { $jwsqucqyaoaasykk = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($iceamweyeeiwiucs); if ($aaqqkgyougeiueyq instanceof Foreign) { if ($ksmecukioscycoma = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ceiwsaacewygcsqg = $ksmecukioscycoma->kumuygiiqswoyasy(); $sgmoseoaumayiowg = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $iceamweyeeiwiucs); $moqewomugocaueis = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $ceiwsaacewygcsqg); $iscgcmeykqwwowmq = $aaqqkgyougeiueyq->ogkqyamocsimiymw(); if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu() || $aaqqkgyougeiueyq->wmomygggskkoqess()) { if ($aaqqkgyougeiueyq->wmomygggskkoqess() && $aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $sgmoseoaumayiowg = $moqewomugocaueis; $ceiwsaacewygcsqg = $jwsqucqyaoaasykk->gssiscqyqsacmeca()->emsusowgqyugkouo(); } return $ksmecukioscycoma->iekyeyicoyyawomk()->akkkoiiymmamsauc($sgmoseoaumayiowg, $ceiwsaacewygcsqg); } if ($iscgcmeykqwwowmq && $aaqqkgyougeiueyq->gumeeckcowwoyoci()) { return $ksmecukioscycoma->iekyeyicoyyawomk()->yassqyiieqeywoqi($iscgcmeykqwwowmq, $moqewomugocaueis); } } } $ayegqaqygsqsmews = $this->oyqumwgacamysiga($iceamweyeeiwiucs, $mksyucucyswaukig); } if ($ayegqaqygsqsmews) { if ($gqgemcmoicmgaqie) { $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $ayegqaqygsqsmews); } if ($ayegqaqygsqsmews) { $essikcmqiyqaqoaq = $this->iiqauwkoiguyeawu($ayegqaqygsqsmews, $wkkweuacukumqmya); } } } catch (Exception $wgaoewqkwgomoaai) { } return $essikcmqiyqaqoaq; } public function oyqumwgacamysiga($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation { $ayegqaqygsqsmews = null; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$mksyucucyswaukig instanceof Entity) { $aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig); if ($mksyucucyswaukig) { $mksyucucyswaukig = $meywaqqsugaoeyys->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($aokagokqyuysuksm); } } if ($mksyucucyswaukig instanceof Entity) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($ymaogssqccumcyqa); if ($aaqqkgyougeiueyq instanceof Foreign) { if ($yccmomaaqwugeiuo = $aaqqkgyougeiueyq->ggmimykuacwcogaq()) { if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($yccmomaaqwugeiuo); } else { if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($yccmomaaqwugeiuo); } else { if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($yccmomaaqwugeiuo); } else { $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($yccmomaaqwugeiuo); } } else { if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { if ($yccmomaaqwugeiuo instanceof Model) { [$syeseoiyagmgumcy] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $ayegqaqygsqsmews = $mksyucucyswaukig->belongsToMany($yccmomaaqwugeiuo, $syeseoiyagmgumcy); } } } } } } } } return $ayegqaqygsqsmews; } public function acamgaegcsioysiw($aaqqkgyougeiueyq) : array { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (is_string($aaqqkgyougeiueyq)) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($aaqqkgyougeiueyq); } if ($aaqqkgyougeiueyq instanceof Foreign) { $gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($gsmssqouaueqkeui) { if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { $yuwymayicwwqiske = $meywaqqsugaoeyys->ogqgmqymcwsqikme(); $usymcioagieycusu = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); } else { $yuwymayicwwqiske = $gsmssqouaueqkeui->ogqgmqymcwsqikme(); $usymcioagieycusu = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); } $syeseoiyagmgumcy = $meywaqqsugaoeyys->ysgiswuowuciwqaq()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}_{$wkwywcemusswkgwk}"); $sogksuscggsicmac = [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $gsmssqouaueqkeui]; } } } return $sogksuscggsicmac; } public function weyqgwsqeueuwgsm($siykeiywomwwuoiw, string $qgoqiacsiccwoawi, string $ecysmcqmumqmaagg = Constants::eeccqomoaqsawouy) { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } if ($siykeiywomwwuoiw) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie = $eqwoegegiamegqsm->kyckwuuiqwmyoqma()->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq($qgoqiacsiccwoawi)->ckooimacgieuwcoy($ecysmcqmumqmaagg)); $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); } return $siykeiywomwwuoiw; } public function ygyguskuyykskwko(string $qwcmueausqgiwigy, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou($this->ymeuwwwkmcwisciq($qwcmueausqgiwigy), $siykeiywomwwuoiw); } public function ymeuwwwkmcwisciq(string $qwcmueausqgiwigy) : array { $uoomaookgsyciacm = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (is_numeric($qwcmueausqgiwigy)) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->megqywqeuquawkim($this->mgogaykgkoogasim()->kumuygiiqswoyasy(), $qwcmueausqgiwigy); } else { foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $qgoqiacsiccwoawi = $aaqqkgyougeiueyq->iooowgsqoyqseyuu(); if ($aaqqkgyougeiueyq instanceof Str || $aaqqkgyougeiueyq instanceof Text) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->megqywqeuquawkim($qgoqiacsiccwoawi, "%{$qwcmueausqgiwigy}%")->iygikqkegwkaaess()->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui); } } } return $uoomaookgsyciacm; } public function aeggeuqycwawueqy($siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array { try { if (empty($siykeiywomwwuoiw)) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::imywcsggckkcywgk => 1, Constants::wikgqsqysyuoykse => [], Constants::soquiwyuimckgiow => ['*'], Constants::ausqeuugegoygouq => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(), Constants::ieyywsoeoqmceucw => Constants::imywcsggckkcywgk, Constants::wosqwewmqmyweqea => true]); $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] ?: 10, $ywmkwiwkosakssii[Constants::soquiwyuimckgiow] ?: ['*'], $ywmkwiwkosakssii[Constants::ieyywsoeoqmceucw] ?: Constants::imywcsggckkcywgk, $ywmkwiwkosakssii[Constants::imywcsggckkcywgk] ?: 1); $oammesyieqmwuwyi = $ymiyawysimukkoso->toArray(); $oammesyieqmwuwyi = $oammesyieqmwuwyi[Constants::uiwqcumqkgikqyue] ?? []; if (!$oammesyieqmwuwyi) { $oammesyieqmwuwyi = $ywmkwiwkosakssii[Constants::wikgqsqysyuoykse] ?? []; } if ($ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { $oammesyieqmwuwyi = $this->mgogaykgkoogasim()->cwgkcyyaymmsomqa($oammesyieqmwuwyi); } $uuwmqqqiwksuaise = $ymiyawysimukkoso->total(); $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage(); $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage(); $yeacayasgueouoqc = $ymiyawysimukkoso->currentPage(); } catch (Exception $wgaoewqkwgomoaai) { $oammesyieqmwuwyi = []; $uuwmqqqiwksuaise = 0; $weyoqgcesqgeusiu = 0; $qcugmkuyweqqyggk = 0; $yeacayasgueouoqc = 1; } return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $yeacayasgueouoqc, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu); } public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $yeacayasgueouoqc = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array { return [Constants::ycuusiweasqygwiw => [Constants::uiiqiokqwmccomiu => $uuwmqqqiwksuaise, Constants::yusuiaeueqwieqqq => $ocqawgquwsqioses, Constants::asmooogmgyecqqka => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } public function iykmimcgkyyoimoc($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $uusmaiomayssaecw = null) : array { return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $qgoqiacsiccwoawi, Constants::kaqagayamqaywssm, $uusmaiomayssaecw); } public function ssiyoimagsskwsoi($gqgemcmoicmgaqie, ?string $qgoqiacsiccwoawi = null) : array { if (!$qgoqiacsiccwoawi) { $qgoqiacsiccwoawi = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); } return $this->cieaqygkucwoqwke($gqgemcmoicmgaqie, $qgoqiacsiccwoawi, Constants::kaqagayamqaywssm); } public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*']) : array { return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya); } private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : array { $sogksuscggsicmac = []; $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou, $uusmaiomayssaecw); if ($iwqgomgkuumgyswi) { try { $sogksuscggsicmac = $iwqgomgkuumgyswi->toArray(); } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } } return $sogksuscggsicmac; } public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], $aiamqeawckcsuaou = Constants::isukcamoimieegam) { $qsmaqqyoggcuyukq = 0; if (!$siykeiywomwwuoiw instanceof Collection) { $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } else { $iwqgomgkuumgyswi = $siykeiywomwwuoiw; } if ($iwqgomgkuumgyswi) { $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->sum(); } return $qsmaqqyoggcuyukq; } public function oyskioqoyikiowaa($siykeiywomwwuoiw, $ekiuyucoiagmscgy, $wkkweuacukumqmya = ['*'], $aiamqeawckcsuaou = Constants::isukcamoimieegam) { $wiiqgewkwwkaukyo = 0; if (!$siykeiywomwwuoiw instanceof Collection) { $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } else { $iwqgomgkuumgyswi = $siykeiywomwwuoiw; } if ($iwqgomgkuumgyswi) { $wiiqgewkwwkaukyo = $iwqgomgkuumgyswi->average($ekiuyucoiagmscgy); } return $wiiqgewkwwkaukyo; } public function qqkcymwukksiakuy($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], $aiamqeawckcsuaou = Constants::isukcamoimieegam) : int { $gaeqamemwmwsyukm = 0; if (!$siykeiywomwwuoiw instanceof Collection) { $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); } else { $iwqgomgkuumgyswi = $siykeiywomwwuoiw; } if ($iwqgomgkuumgyswi) { $gaeqamemwmwsyukm = $iwqgomgkuumgyswi->count(); } return $gaeqamemwmwsyukm; } public function isqwqwegwqeskmam($gqgemcmoicmgaqie, $wkkweuacukumqmya = ['*']) { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie); if ($siykeiywomwwuoiw) { $aqykuigiuwmmcieu = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya); } return $aqykuigiuwmmcieu; } private function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : ?Collection { if (!$siykeiywomwwuoiw) { $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); } $iwqgomgkuumgyswi = null; if ($siykeiywomwwuoiw) { try { switch ($aiamqeawckcsuaou) { case Constants::kaqagayamqaywssm: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->pluck($wkkweuacukumqmya, $uusmaiomayssaecw); break; default: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->get($wkkweuacukumqmya); break; } } catch (Exception $wgaoewqkwgomoaai) { } } return $iwqgomgkuumgyswi; } public function qccooyeomgokwsma($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $sogksuscggsicmac = null; if ($yquywseiyocsiqco = $this->mgogaykgkoogasim()->queegmguugiecims()) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kuguwoaesuqsqysu = $yquywseiyocsiqco->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::osocaqqumyuooqyo, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::iwmgegikocuwggua, $eqgoocgaqwqcimie)]); if ($kuguwoaesuqsqysu) { $sogksuscggsicmac = $yquywseiyocsiqco->iekyeyicoyyawomk()->iscemaoqqckmkago($yquywseiyocsiqco->meqwysqkeuyqiioi(), $kuguwoaesuqsqysu); } } return $sogksuscggsicmac; } public function qusqeaiqgggmaskw($gqgemcmoicmgaqie) { $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($gqgemcmoicmgaqie); if ($siykeiywomwwuoiw) { try { return $siykeiywomwwuoiw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } } return 0; } public function suyqucmmoumouiua(bool $oacmicqsauoiocui = true) : array { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $wkkweuacukumqmya = [$meywaqqsugaoeyys->kumuygiiqswoyasy(true)]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $ymqmyyeuycgmigyo => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof NoneSchema || $aaqqkgyougeiueyq instanceof Foreign && ($oacmicqsauoiocui || ($aaqqkgyougeiueyq->ygswmewosceowmya() || $aaqqkgyougeiueyq->iueigwuckeaswyuu()))) { continue; } $wkkweuacukumqmya[] = $ymqmyyeuycgmigyo; } return $wkkweuacukumqmya; } }
