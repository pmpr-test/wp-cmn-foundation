<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Illuminate\Database\Query\JoinClause; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\Interfaces\Constants; class Join extends Statement { protected string $type = Constants::qyiusaesoeakesco; public function __construct(string $sysgmomuyiiawwcm = '', string $gcegymooyemmaysk = '') { $this->igiywquyccyiaucw(Constants::oaqmcwsyiwuoywoy, $sysgmomuyiiawwcm); $this->igiywquyccyiaucw(Constants::iwsuymskgeygiqyw, $gcegymooyemmaysk); $this->mcacmissyeeqkeak(Constants::ON, true); $this->mcacmissyeeqkeak(Constants::qmesccgukkkogskw, false); parent::__construct(''); } public function kcacmouokwkeymkk() : self { return $this->igiywquyccyiaucw(Constants::qmesccgukkkogskw, true); } public function wqykgeksiuoqcwqe(string $koegqoagisewcica) : self { return $this->igiywquyccyiaucw(Constants::ON, $koegqoagisewcica); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { return $this->igiywquyccyiaucw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function ggmcoioqwgyccyus() : self { return $this->aseocggwwegcmqes(Constants::LEFT); } protected function run($siykeiywomwwuoiw) { $aasascamegmwqmqk = $this->ueykigukusgcmcsg(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!($aasascamegmwqmqk && $meywaqqsugaoeyys)) { goto ggoimgeeuugseiwk; } $sysgmomuyiiawwcm = $this->imkyoqyocosuqasu(Constants::oaqmcwsyiwuoywoy); $gcegymooyemmaysk = $this->imkyoqyocosuqasu(Constants::iwsuymskgeygiqyw); $sqeykgyoooqysmca = $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi, Constants::qyiusaesoeakesco); switch ($sqeykgyoooqysmca) { case Constants::LEFT: $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, function (JoinClause $eagqsqeocaokmsim) use($meywaqqsugaoeyys, $sysgmomuyiiawwcm, $gcegymooyemmaysk) { $aasascamegmwqmqk = null; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew(); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto koemwyegoqwiikom; } $mqeumqkagkewsewe = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$mqeumqkagkewsewe) { goto siuyaemoiiqyoggo; } if ($sysgmomuyiiawwcm) { goto qmgueimkwqmsakis; } if (!($aaqqkgyougeiueyq->ygswmewosceowmya() || !$aaqqkgyougeiueyq->aumgkcogqygmwsqy())) { goto iiuuwuwcwamqegey; } $sysgmomuyiiawwcm = $meywaqqsugaoeyys->kumuygiiqswoyasy(); iiuuwuwcwamqegey: qmgueimkwqmsakis: $sysgmomuyiiawwcm = $meywaqqsugaoeyys->kmgukcsewikeswco($sysgmomuyiiawwcm, $this->kwyoumwowyqcekys()); if ($gcegymooyemmaysk) { goto uscissuaiyuiukea; } if (!($aaqqkgyougeiueyq->ygswmewosceowmya() || !$aaqqkgyougeiueyq->aumgkcogqygmwsqy())) { goto ooqmaweuqmcmwsuk; } $gcegymooyemmaysk = $mqeumqkagkewsewe->kumuygiiqswoyasy(); ooqmaweuqmcmwsuk: uscissuaiyuiukea: if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto kuyqusuycscumuek; } $aasascamegmwqmqk = $mqeumqkagkewsewe->cokoiaeeomgssqgy(); $gcegymooyemmaysk = $mqeumqkagkewsewe->myywwqkyiwawwquy($gcegymooyemmaysk); goto cycwgukowsksmkyc; kuyqusuycscumuek: [$aasascamegmwqmqk] = $meywaqqsugaoeyys->iekyeyicoyyawomk()->acamgaegcsioysiw($aaqqkgyougeiueyq); $gcegymooyemmaysk = $meywaqqsugaoeyys->iekyeyicoyyawomk()->myywwqkyiwawwquy($aasascamegmwqmqk, $gcegymooyemmaysk); cycwgukowsksmkyc: siuyaemoiiqyoggo: koemwyegoqwiikom: $koegqoagisewcica = $this->imkyoqyocosuqasu(Constants::ON, true); if (!$koegqoagisewcica) { goto qycsooiomiugimqc; } $eagqsqeocaokmsim->on($sysgmomuyiiawwcm, $this->auiqywousmcqsskq(), $gcegymooyemmaysk); qycsooiomiugimqc: if (!$this->muyycecygiagkouk()) { goto qioswooukgoowsuc; } return $this->igyyscwegckkkkya($eagqsqeocaokmsim, $aasascamegmwqmqk); qioswooukgoowsuc: return $eagqsqeocaokmsim; }); goto qccmuwiwykuegoga; case Constants::qyiusaesoeakesco: default: $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $this->auiqywousmcqsskq(), $gcegymooyemmaysk, $sqeykgyoooqysmca, (bool) $this->imkyoqyocosuqasu(Constants::qmesccgukkkogskw, false)); goto qccmuwiwykuegoga; } csucwwqcsaymyiuk: qccmuwiwykuegoga: ggoimgeeuugseiwk: return $siykeiywomwwuoiw; } }
