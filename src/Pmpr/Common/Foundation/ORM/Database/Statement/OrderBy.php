<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d83a968b15             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\Interfaces\Constants; class OrderBy extends Statement { public function __construct(string $qgoqiacsiccwoawi, array $eqgoocgaqwqcimie = []) { $this->iygyugseyaqwywyg($eqgoocgaqwqcimie); parent::__construct($qgoqiacsiccwoawi); } public function ckooimacgieuwcoy(string $ecysmcqmumqmaagg) : self { if (!in_array(strtoupper($ecysmcqmumqmaagg), [Constants::omaksceqmigeaoko, Constants::eeccqomoaqsawouy], true)) { $ecysmcqmumqmaagg = Constants::eeccqomoaqsawouy; } return $this->igiywquyccyiaucw(Constants::wwyqeuougcceeows, $ecysmcqmumqmaagg); } public function mcgisgoaksmyemyq() : self { return $this->ckooimacgieuwcoy(Constants::eeccqomoaqsawouy); } public function yogqsokgsqemsuoq() : self { return $this->ckooimacgieuwcoy(Constants::omaksceqmigeaoko); } protected function run($siykeiywomwwuoiw) { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $qgoqiacsiccwoawi = $this->omaouusksqgmuyiu(); if ($qgoqiacsiccwoawi && $meywaqqsugaoeyys) { if ($eqgoocgaqwqcimie = $this->qooeaookuemoqecm()) { $eqgoocgaqwqcimie = $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->eqyqgywiseiwqocc($eqgoocgaqwqcimie); $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderByRaw("\106\x49\x45\114\x44\x28{$meywaqqsugaoeyys->ysgiswuowuciwqaq()->ouscimcwyiassmcs($qgoqiacsiccwoawi)}\54\x20\47{$eqgoocgaqwqcimie}\x27\51"); } else { $ecysmcqmumqmaagg = $this->imkyoqyocosuqasu(Constants::wwyqeuougcceeows, Constants::eeccqomoaqsawouy); $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg); } } return $siykeiywomwwuoiw; } }
