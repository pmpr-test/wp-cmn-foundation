<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c8774d14             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\Database\Query; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; abstract class Statement { use ArgsTrait; protected array $children = []; protected ?Model $model = null; public function __construct(string $qgoqiacsiccwoawi = '') { $this->igiywquyccyiaucw(Constants::meisqwykgaymauka, $qgoqiacsiccwoawi)->mcacmissyeeqkeak(Constants::auqiyyoaweissmwm, true); $this->qiccuiwooiquycsg(); } public function qiccuiwooiquycsg() { } public function kgyigewyuumysume() : self { return $this->igiywquyccyiaucw(Constants::auqiyyoaweissmwm, false); } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function ueykigukusgcmcsg(bool $kiwysoqwiymakukk = true) : ?string { $aasascamegmwqmqk = $this->imkyoqyocosuqasu(Constants::ugsuecoyuqcamsac, ''); if (!$aasascamegmwqmqk && $kiwysoqwiymakukk && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { $aasascamegmwqmqk = $meywaqqsugaoeyys->cokoiaeeomgssqgy(); } return $aasascamegmwqmqk; } public function aqkyoweegqwuwsgw(string $aasascamegmwqmqk) : self { return $this->igiywquyccyiaucw(Constants::ugsuecoyuqcamsac, $aasascamegmwqmqk); } public function uqeoyqiwywwmsiew() : ?Schema { if ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) { return $meywaqqsugaoeyys->uqeoyqiwywwmsiew($this->myywwqkyiwawwquy()); } return null; } public function qooeaookuemoqecm() { $eqgoocgaqwqcimie = $this->imkyoqyocosuqasu(Constants::ciyoccqkiamemcmm, ''); $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew(); if ($aaqqkgyougeiueyq instanceof Enum) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiesyimugeuuwcma($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } public function maqiysyuqmwcqoig(string $cackiyicawmkyqqg) : self { return $this->igiywquyccyiaucw(Constants::eugyciakiowwcuwm, $cackiyicawmkyqqg); } public function auiqywousmcqsskq() : string { return $this->imkyoqyocosuqasu(Constants::eugyciakiowwcuwm, Constants::esgoecsaucwswuia); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { return $this->igiywquyccyiaucw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); } public function kwyoumwowyqcekys() { return $this->imkyoqyocosuqasu(Constants::wsgoaaeiyusigoym, ''); } public function asykgyemqgqyguei($eqgoocgaqwqcimie) : self { return $this->igiywquyccyiaucw(Constants::wsgoaaeiyusigoym, $eqgoocgaqwqcimie); } public function myywwqkyiwawwquy() : string { return $this->imkyoqyocosuqasu(Constants::meisqwykgaymauka, ''); } public function omaouusksqgmuyiu() : string { $qgoqiacsiccwoawi = $this->myywwqkyiwawwquy(); if ($qgoqiacsiccwoawi && $this->imkyoqyocosuqasu(Constants::auqiyyoaweissmwm) && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { $qgoqiacsiccwoawi = $meywaqqsugaoeyys->iekyeyicoyyawomk()->myywwqkyiwawwquy($this->ueykigukusgcmcsg(), $qgoqiacsiccwoawi); } return $qgoqiacsiccwoawi; } public function pmouaioykaoceyag($wcgsoqmmciswkmiq) : self { $this->children[] = $wcgsoqmmciswkmiq; return $this; } public function eswyoccyuiyiqkco(array $okcscwesammossuq) : self { foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->pmouaioykaoceyag($wcgsoqmmciswkmiq); } return $this; } public function muyycecygiagkouk() : bool { return !empty($this->children); } public function mmoaikqueyiwcesm() : array { return $this->children; } public final function evaluate($siykeiywomwwuoiw) { return $this->run($siykeiywomwwuoiw); } protected final function igyyscwegckkkkya($siykeiywomwwuoiw, $aasascamegmwqmqk = null) { if ($this->muyycecygiagkouk()) { foreach ($this->mmoaikqueyiwcesm() as $wcgsoqmmciswkmiq) { if ($aasascamegmwqmqk) { $wcgsoqmmciswkmiq->aqkyoweegqwuwsgw($aasascamegmwqmqk); } if (empty($wcgsoqmmciswkmiq->model)) { $wcgsoqmmciswkmiq->asumqyigwsqmyeoc($this->mgogaykgkoogasim()); } if ($wcgsoqmmciswkmiq instanceof self) { $siykeiywomwwuoiw = $wcgsoqmmciswkmiq->evaluate($siykeiywomwwuoiw); } else { if ($wcgsoqmmciswkmiq instanceof Query) { $siykeiywomwwuoiw = $wcgsoqmmciswkmiq->evaluate($this->mgogaykgkoogasim(), $siykeiywomwwuoiw); } } } } return $siykeiywomwwuoiw; } protected abstract function run($siykeiywomwwuoiw); }
