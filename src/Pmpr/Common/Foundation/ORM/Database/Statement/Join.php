<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc33c6bdfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Illuminate\Database\Query\JoinClause; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\Interfaces\Constants; class Join extends Statement { protected string $type = Constants::qyiusaesoeakesco; public function __construct(string $sysgmomuyiiawwcm = '', string $gcegymooyemmaysk = '') { $this->igiywquyccyiaucw(Constants::oaqmcwsyiwuoywoy, $sysgmomuyiiawwcm); $this->sokmmiiuyqiuoqia($gcegymooyemmaysk); $this->mcacmissyeeqkeak(Constants::ON, true); $this->mcacmissyeeqkeak(Constants::qmesccgukkkogskw, false); parent::__construct(''); } public function sokmmiiuyqiuoqia(string $gcegymooyemmaysk) : self { return $this->igiywquyccyiaucw(Constants::iwsuymskgeygiqyw, $gcegymooyemmaysk); } public function kcacmouokwkeymkk() : self { return $this->igiywquyccyiaucw(Constants::qmesccgukkkogskw, true); } public function wqykgeksiuoqcwqe(string $koegqoagisewcica) : self { return $this->igiywquyccyiaucw(Constants::ON, $koegqoagisewcica); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { return $this->igiywquyccyiaucw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function ggmcoioqwgyccyus() : self { return $this->aseocggwwegcmqes(Constants::LEFT); } protected function run($siykeiywomwwuoiw) { $aasascamegmwqmqk = $this->ueykigukusgcmcsg(false); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys) { $sysgmomuyiiawwcm = $this->imkyoqyocosuqasu(Constants::oaqmcwsyiwuoywoy); if (!$sysgmomuyiiawwcm) { $sysgmomuyiiawwcm = $meywaqqsugaoeyys->kumuygiiqswoyasy(true); } $gcegymooyemmaysk = $this->imkyoqyocosuqasu(Constants::iwsuymskgeygiqyw); $sqeykgyoooqysmca = $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi, Constants::qyiusaesoeakesco); if (empty($gcegymooyemmaysk)) { wp_die('second parameter of join request can not be empty.'); } switch ($sqeykgyoooqysmca) { case Constants::LEFT: $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($gcegymooyemmaysk); if ($aaqqkgyougeiueyq instanceof Foreign) { $mqeumqkagkewsewe = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($mqeumqkagkewsewe) { $sysgmomuyiiawwcm = $meywaqqsugaoeyys->kmgukcsewikeswco($sysgmomuyiiawwcm, $this->kwyoumwowyqcekys()); if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { if (empty($aasascamegmwqmqk)) { [$aasascamegmwqmqk] = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); } $gcegymooyemmaysk = $meywaqqsugaoeyys->iekyeyicoyyawomk()->myywwqkyiwawwquy($aasascamegmwqmqk, $meywaqqsugaoeyys->gssiscqyqsacmeca()->meisyqiaeakooigg()); } else { if ($aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { $sysgmomuyiiawwcm = $gcegymooyemmaysk; $gcegymooyemmaysk = $mqeumqkagkewsewe->kumuygiiqswoyasy(); } if (empty($aasascamegmwqmqk)) { $aasascamegmwqmqk = $mqeumqkagkewsewe->cokoiaeeomgssqgy(); } if ($mqeumqkagkewsewe->gssiscqyqsacmeca()->meisyqiaeakooigg() === $gcegymooyemmaysk) { $gcegymooyemmaysk = $meywaqqsugaoeyys->gssiscqyqsacmeca()->meisyqiaeakooigg(); } $gcegymooyemmaysk = $mqeumqkagkewsewe->myywwqkyiwawwquy($gcegymooyemmaysk); } } } else { $gcegymooyemmaysk = $meywaqqsugaoeyys->iekyeyicoyyawomk()->myywwqkyiwawwquy($aasascamegmwqmqk, $gcegymooyemmaysk); } $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, function (JoinClause $eagqsqeocaokmsim) use($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk) { $koegqoagisewcica = $this->imkyoqyocosuqasu(Constants::ON, true); if ($koegqoagisewcica) { $eagqsqeocaokmsim->on($sysgmomuyiiawwcm, $this->auiqywousmcqsskq(), $gcegymooyemmaysk); } if ($this->muyycecygiagkouk()) { return $this->igyyscwegckkkkya($eagqsqeocaokmsim, $aasascamegmwqmqk); } return $eagqsqeocaokmsim; }); break; case Constants::qyiusaesoeakesco: default: if (empty($aasascamegmwqmqk)) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($gcegymooyemmaysk); if ($aaqqkgyougeiueyq instanceof Foreign) { $mqeumqkagkewsewe = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($mqeumqkagkewsewe) { $aasascamegmwqmqk = $mqeumqkagkewsewe->cokoiaeeomgssqgy(); } } else { $gcegymooyemmaysk = $meywaqqsugaoeyys->iekyeyicoyyawomk()->myywwqkyiwawwquy($aasascamegmwqmqk, $gcegymooyemmaysk); } } $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $this->auiqywousmcqsskq(), $gcegymooyemmaysk, $sqeykgyoooqysmca, (bool) $this->imkyoqyocosuqasu(Constants::qmesccgukkkogskw, false)); break; } } return $siykeiywomwwuoiw; } }
