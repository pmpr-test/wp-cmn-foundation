<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673b8c47480ec             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use DateTime; use Exception; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\Database\Schema\Json; use Pmpr\Common\Foundation\Interfaces\Constants; class Where extends Statement { public function __construct(string $qgoqiacsiccwoawi = '', $eqgoocgaqwqcimie = '') { $this->iygyugseyaqwywyg($eqgoocgaqwqcimie); parent::__construct($qgoqiacsiccwoawi); } public function qiccuiwooiquycsg() { $this->mcacmissyeeqkeak(Constants::squoamkioomemiyi, Constants::qmesccgukkkogskw)->mcacmissyeeqkeak(Constants::eugyciakiowwcuwm, Constants::esgoecsaucwswuia); parent::qiccuiwooiquycsg(); } public function wccsamkqsuaewemw() : string { return $this->imkyoqyocosuqasu(Constants::cwsguekoagqkaesm, Constants::weaykmmocuacwekg); } private function mciaigckkugsieww(string $qsycuegoicqcqkmo) : self { return $this->igiywquyccyiaucw(Constants::cwsguekoagqkaesm, $qsycuegoicqcqkmo); } public function gouskoeouiqwokqs() : self { return $this->aseocggwwegcmqes(Constants::ackcaikowcokggsc); } public function iygikqkegwkaaess() : self { return $this->mciaigckkugsieww(Constants::ieiyckasqmcyekim); } public function oikgyoimkwywogca() : self { return $this->mciaigckkugsieww(Constants::weaykmmocuacwekg); } protected function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { return $this->igiywquyccyiaucw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function wiqiksaowkoeiymu() : self { return $this->aseocggwwegcmqes(Constants::kumuoysauoagaiiy); } public function wegeyaguowmkqiac() : self { return $this->aseocggwwegcmqes(Constants::weigugswsgkycqkc); } public function amwwousckkqyweok() : self { return $this->aseocggwwegcmqes(Constants::amiwmcmkayqsycia); } public function ggkmmuqmoyukayec() : self { return $this->aseocggwwegcmqes(Constants::iowugkseicsqesuo); } public function yaoukqkouaeeycuy() : self { return $this->maqiysyuqmwcqoig(Constants::yoaakgmawgaeyeim); } public function cywusuoiegmowioc() { return $this->igiywquyccyiaucw(Constants::sieeooaigsmwocym, true); } public function iykqaowyicagawoe() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::sieeooaigsmwocym, false); } protected function run($siykeiywomwwuoiw) { $sqeykgyoooqysmca = $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi, Constants::qmesccgukkkogskw); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); $qsycuegoicqcqkmo = $this->wccsamkqsuaewemw(); if (is_array($eqgoocgaqwqcimie) && Constants::qmesccgukkkogskw === $sqeykgyoooqysmca) { $sqeykgyoooqysmca = Constants::ackcaikowcokggsc; } $qgoqiacsiccwoawi = $this->omaouusksqgmuyiu(); switch ($sqeykgyoooqysmca) { case Constants::weigugswsgkycqkc: if ($qgoqiacsiccwoawi) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNull($qgoqiacsiccwoawi, $qsycuegoicqcqkmo); } break; case Constants::amiwmcmkayqsycia: if ($qgoqiacsiccwoawi) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNotNull($qgoqiacsiccwoawi, $qsycuegoicqcqkmo); } break; case Constants::iowugkseicsqesuo: if ($qgoqiacsiccwoawi) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNotIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); } break; case Constants::kumuoysauoagaiiy: if ($eqgoocgaqwqcimie !== null && $qgoqiacsiccwoawi) { if ($this->auiqywousmcqsskq() === Constants::yoaakgmawgaeyeim) { if (is_array($eqgoocgaqwqcimie)) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $this->iykqaowyicagawoe()); } } else { if (is_numeric($eqgoocgaqwqcimie)) { try { $eqgoocgaqwqcimie = new DateTime($eqgoocgaqwqcimie); } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = date("\x59\x2d\155\55\x64\40\x48\x3a\151\72\163", $eqgoocgaqwqcimie); } } $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($qgoqiacsiccwoawi, $this->auiqywousmcqsskq(), $eqgoocgaqwqcimie); } } break; case Constants::ackcaikowcokggsc: if ($qgoqiacsiccwoawi && $eqgoocgaqwqcimie !== null) { if (!is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($qgoqiacsiccwoawi); if ($aaqqkgyougeiueyq instanceof Json) { $eqwoegegiamegqsm = $meywaqqsugaoeyys->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->children = []; foreach ($eqgoocgaqwqcimie as $igqsaukqcqscimok) { $this->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($qgoqiacsiccwoawi, "\45\42{$igqsaukqcqscimok}\x22\x25")->mciaigckkugsieww($qsycuegoicqcqkmo)->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui)); } $siykeiywomwwuoiw = $this->igyyscwegckkkkya($siykeiywomwwuoiw); } else { $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $this->iykqaowyicagawoe()); } } break; case Constants::qmesccgukkkogskw: default: if ($this->muyycecygiagkouk()) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->where(function ($gqgemcmoicmgaqie) { return $this->igyyscwegckkkkya($gqgemcmoicmgaqie); }, null, null, $qsycuegoicqcqkmo); } else { if ($qgoqiacsiccwoawi && $eqgoocgaqwqcimie !== null) { $cackiyicawmkyqqg = $this->imkyoqyocosuqasu(Constants::eugyciakiowwcuwm, Constants::esgoecsaucwswuia); $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); } } break; } return $siykeiywomwwuoiw; } }
