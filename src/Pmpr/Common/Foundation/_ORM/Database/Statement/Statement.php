<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; abstract class Statement { use ArgsTrait; protected array $children = []; protected ?Model $model = null; public function __construct(string $qgoqiacsiccwoawi = '') { $this->igiywquyccyiaucw(Constants::meisqwykgaymauka, $qgoqiacsiccwoawi); $this->qiccuiwooiquycsg(); } public function qiccuiwooiquycsg() { } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function ueykigukusgcmcsg() : ?string { $aasascamegmwqmqk = $this->imkyoqyocosuqasu(Constants::ugsuecoyuqcamsac, ''); if ($aasascamegmwqmqk) { goto gwkawguwsamuomuo; } $aasascamegmwqmqk = $this->mgogaykgkoogasim()?->getTableName(); gwkawguwsamuomuo: return $aasascamegmwqmqk; } public function aqkyoweegqwuwsgw(string $aasascamegmwqmqk) : self { return $this->igiywquyccyiaucw(Constants::ugsuecoyuqcamsac, $aasascamegmwqmqk); } public function qooeaookuemoqecm() { return $this->imkyoqyocosuqasu(Constants::ciyoccqkiamemcmm, ''); } public function maqiysyuqmwcqoig(string $cackiyicawmkyqqg) : self { return $this->igiywquyccyiaucw(Constants::eugyciakiowwcuwm, $cackiyicawmkyqqg); } public function auiqywousmcqsskq() : string { return $this->imkyoqyocosuqasu(Constants::eugyciakiowwcuwm, Constants::esgoecsaucwswuia); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { return $this->igiywquyccyiaucw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); } public function kwyoumwowyqcekys() { return $this->imkyoqyocosuqasu(Constants::wsgoaaeiyusigoym, ''); } public function asykgyemqgqyguei($eqgoocgaqwqcimie) : self { return $this->igiywquyccyiaucw(Constants::wsgoaaeiyusigoym, $eqgoocgaqwqcimie); } public function myywwqkyiwawwquy() : string { return $this->imkyoqyocosuqasu(Constants::meisqwykgaymauka, ''); } protected function pmouaioykaoceyag(Statement $wcgsoqmmciswkmiq) : self { if (!($wcgsoqmmciswkmiq->mgogaykgkoogasim() === null)) { goto ucasigqmoiwaimkk; } $wcgsoqmmciswkmiq->asumqyigwsqmyeoc($this->mgogaykgkoogasim()); ucasigqmoiwaimkk: $this->children[] = $wcgsoqmmciswkmiq; return $this; } public function muyycecygiagkouk() : bool { return !empty($this->children); } public function mmoaikqueyiwcesm() : array { return $this->children; } public final function evaluate(Builder $siykeiywomwwuoiw) { return $this->run($siykeiywomwwuoiw); } protected final function igyyscwegckkkkya(Builder $siykeiywomwwuoiw) : Builder { if (!$this->muyycecygiagkouk()) { goto mmmqqoemusicwgqg; } foreach ($this->mmoaikqueyiwcesm() as $wcgsoqmmciswkmiq) { $siykeiywomwwuoiw = $wcgsoqmmciswkmiq->evaluate($siykeiywomwwuoiw); wowmysuygugawmmu: } uugwmywmaqomeksa: mmmqqoemusicwgqg: return $siykeiywomwwuoiw; } protected abstract function run(Builder $siykeiywomwwuoiw) : Builder; }
