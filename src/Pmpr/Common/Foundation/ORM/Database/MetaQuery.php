<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use function Sodium\add; class MetaQuery extends Query { public function evaluate(Model $meywaqqsugaoeyys, Builder $siykeiywomwwuoiw) { $yquywseiyocsiqco = $meywaqqsugaoeyys->queegmguugiecims(); if ($yquywseiyocsiqco) { goto kikkkoqiumqoeiyy; } return $siykeiywomwwuoiw; kikkkoqiumqoeiyy: $this->qisiksoemmiiyeyk($meywaqqsugaoeyys->iekyeyicoyyawomk()->suyqucmmoumouiua()); $eqwoegegiamegqsm = $meywaqqsugaoeyys->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!($ssukygsemqwswumi = $this->coyomkiuoyomeugi())) { goto msiuqseowuumiwuo; } $this->statements = []; $rkeqsikeuuuuyakm = $yquywseiyocsiqco->iekyeyicoyyawomk(); $momcykaoccoymeig = 1; foreach ($ssukygsemqwswumi as $qaiwucaaikseawuw) { $gekaiayeauiswumc = "\155\x65\164\141\144\x61\164\141{$momcykaoccoymeig}"; $this->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owackeyiuiikegqg($rkeqsikeuuuuyakm->myywwqkyiwawwquy($gekaiayeauiswumc, $yquywseiyocsiqco->meqwysqkeuyqiioi()), $yquywseiyocsiqco->myywwqkyiwawwquy($yquywseiyocsiqco->kumuygiiqswoyasy()))->kgyigewyuumysume()->asykgyemqgqyguei($gekaiayeauiswumc)); $this->mmiqqgoaeccgwoqs($qaiwucaaikseawuw->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($rkeqsikeuuuuyakm->myywwqkyiwawwquy($gekaiayeauiswumc, Constants::osocaqqumyuooqyo), $qaiwucaaikseawuw->myywwqkyiwawwquy())->kgyigewyuumysume())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($rkeqsikeuuuuyakm->myywwqkyiwawwquy($gekaiayeauiswumc, Constants::iwmgegikocuwggua), $qaiwucaaikseawuw->qooeaookuemoqecm())->kgyigewyuumysume())); $momcykaoccoymeig++; esokkakkumskkmiu: } wyqueeskecameuks: msiuqseowuumiwuo: return parent::evaluate($yquywseiyocsiqco, $siykeiywomwwuoiw); } }
