<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d720531f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class MetaQuery extends Query { public function evaluate(Model $meywaqqsugaoeyys, $siykeiywomwwuoiw) { $yquywseiyocsiqco = $meywaqqsugaoeyys->queegmguugiecims(); if (!$yquywseiyocsiqco) { return $siykeiywomwwuoiw; } $this->qisiksoemmiiyeyk($meywaqqsugaoeyys->iekyeyicoyyawomk()->suyqucmmoumouiua()); $eqwoegegiamegqsm = $meywaqqsugaoeyys->caokeucsksukesyo()->skckwsgymkimyuwo(); if ($ssukygsemqwswumi = $this->coyomkiuoyomeugi()) { $this->statements = []; $rkeqsikeuuuuyakm = $yquywseiyocsiqco->iekyeyicoyyawomk(); $momcykaoccoymeig = 1; foreach ($ssukygsemqwswumi as $qaiwucaaikseawuw) { $gekaiayeauiswumc = "\x6d\x65\x74\141\x64\141\x74\x61{$momcykaoccoymeig}"; $this->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia($yquywseiyocsiqco->meqwysqkeuyqiioi())->asykgyemqgqyguei($gekaiayeauiswumc)); $this->mmiqqgoaeccgwoqs($qaiwucaaikseawuw->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($rkeqsikeuuuuyakm->myywwqkyiwawwquy($gekaiayeauiswumc, Constants::osocaqqumyuooqyo), $qaiwucaaikseawuw->myywwqkyiwawwquy())->kgyigewyuumysume())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($rkeqsikeuuuuyakm->myywwqkyiwawwquy($gekaiayeauiswumc, Constants::iwmgegikocuwggua), $qaiwucaaikseawuw->qooeaookuemoqecm())->kgyigewyuumysume())); $momcykaoccoymeig++; } } return parent::evaluate($yquywseiyocsiqco, $siykeiywomwwuoiw); } }
