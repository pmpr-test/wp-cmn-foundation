<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679154b81399c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Illuminate\Database\Query\JoinClause; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\Interfaces\Constants; class Join extends Statement { protected string $type = Constants::qyiusaesoeakesco; public function __construct(string $sysgmomuyiiawwcm = '', string $gcegymooyemmaysk = '') { $this->igiywquyccyiaucw(Constants::oaqmcwsyiwuoywoy, $sysgmomuyiiawwcm); $this->sokmmiiuyqiuoqia($gcegymooyemmaysk); $this->mcacmissyeeqkeak(Constants::ON, true); $this->mcacmissyeeqkeak(Constants::qmesccgukkkogskw, false); parent::__construct(''); } public function sokmmiiuyqiuoqia(string $gcegymooyemmaysk) : self { return $this->igiywquyccyiaucw(Constants::iwsuymskgeygiqyw, $gcegymooyemmaysk); } public function kcacmouokwkeymkk() : self { return $this->igiywquyccyiaucw(Constants::qmesccgukkkogskw, true); } public function wqykgeksiuoqcwqe(string $koegqoagisewcica) : self { return $this->igiywquyccyiaucw(Constants::ON, $koegqoagisewcica); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { return $this->igiywquyccyiaucw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function ggmcoioqwgyccyus() : self { return $this->aseocggwwegcmqes(Constants::LEFT); } protected function run($siykeiywomwwuoiw) { $aasascamegmwqmqk = $this->ueykigukusgcmcsg(false); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys) { $sysgmomuyiiawwcm = $this->imkyoqyocosuqasu(Constants::oaqmcwsyiwuoywoy); if (!$sysgmomuyiiawwcm) { $sysgmomuyiiawwcm = $meywaqqsugaoeyys->kumuygiiqswoyasy(true); } $gcegymooyemmaysk = $this->imkyoqyocosuqasu(Constants::iwsuymskgeygiqyw); $sqeykgyoooqysmca = $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi, Constants::qyiusaesoeakesco); if (empty($gcegymooyemmaysk)) { wp_die("\x73\x65\143\x6f\x6e\144\40\x70\141\x72\x61\155\x65\x74\x65\x72\40\x6f\146\x20\152\x6f\x69\x6e\x20\x72\x65\161\165\145\x73\x74\x20\143\x61\156\40\156\x6f\164\x20\x62\145\x20\x65\155\160\164\171\x2e"); } switch ($sqeykgyoooqysmca) { case Constants::LEFT: $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($gcegymooyemmaysk); if ($aaqqkgyougeiueyq instanceof Foreign) { $mqeumqkagkewsewe = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($mqeumqkagkewsewe) { $sysgmomuyiiawwcm = $meywaqqsugaoeyys->kmgukcsewikeswco($sysgmomuyiiawwcm, $this->kwyoumwowyqcekys()); if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { if (empty($aasascamegmwqmqk)) { [$aasascamegmwqmqk] = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); } $gcegymooyemmaysk = $meywaqqsugaoeyys->iekyeyicoyyawomk()->myywwqkyiwawwquy($aasascamegmwqmqk, $meywaqqsugaoeyys->gssiscqyqsacmeca()->meisyqiaeakooigg()); } else { if ($aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { $sysgmomuyiiawwcm = $gcegymooyemmaysk; $gcegymooyemmaysk = $mqeumqkagkewsewe->kumuygiiqswoyasy(); } if (empty($aasascamegmwqmqk)) { $aasascamegmwqmqk = $mqeumqkagkewsewe->cokoiaeeomgssqgy(); } if ($mqeumqkagkewsewe->gssiscqyqsacmeca()->meisyqiaeakooigg() === $gcegymooyemmaysk) { $gcegymooyemmaysk = $meywaqqsugaoeyys->gssiscqyqsacmeca()->meisyqiaeakooigg(); } $gcegymooyemmaysk = $mqeumqkagkewsewe->myywwqkyiwawwquy($gcegymooyemmaysk); } } } $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, function (JoinClause $eagqsqeocaokmsim) use($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk) { $koegqoagisewcica = $this->imkyoqyocosuqasu(Constants::ON, true); if ($koegqoagisewcica) { $eagqsqeocaokmsim->on($sysgmomuyiiawwcm, $this->auiqywousmcqsskq(), $gcegymooyemmaysk); } if ($this->muyycecygiagkouk()) { return $this->igyyscwegckkkkya($eagqsqeocaokmsim, $aasascamegmwqmqk); } return $eagqsqeocaokmsim; }); break; case Constants::qyiusaesoeakesco: default: if (empty($aasascamegmwqmqk)) { $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($gcegymooyemmaysk); if ($aaqqkgyougeiueyq instanceof Foreign) { $mqeumqkagkewsewe = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($mqeumqkagkewsewe) { $aasascamegmwqmqk = $mqeumqkagkewsewe->cokoiaeeomgssqgy(); } } } $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $this->auiqywousmcqsskq(), $gcegymooyemmaysk, $sqeykgyoooqysmca, (bool) $this->imkyoqyocosuqasu(Constants::qmesccgukkkogskw, false)); break; } } return $siykeiywomwwuoiw; } }
