<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database\Statement; use DateTime; use Exception; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\Interfaces\Constants; class Where extends Statement { public function __construct(string $qgoqiacsiccwoawi = '', $eqgoocgaqwqcimie = '') { $this->iygyugseyaqwywyg($eqgoocgaqwqcimie); parent::__construct($qgoqiacsiccwoawi); } public function qiccuiwooiquycsg() { $this->mcacmissyeeqkeak(Constants::squoamkioomemiyi, Constants::qmesccgukkkogskw)->mcacmissyeeqkeak(Constants::eugyciakiowwcuwm, Constants::esgoecsaucwswuia); parent::qiccuiwooiquycsg(); } public function wccsamkqsuaewemw() : string { return $this->imkyoqyocosuqasu(Constants::cwsguekoagqkaesm, Constants::weaykmmocuacwekg); } private function mciaigckkugsieww(string $qsycuegoicqcqkmo) : self { return $this->igiywquyccyiaucw(Constants::cwsguekoagqkaesm, $qsycuegoicqcqkmo); } public function gouskoeouiqwokqs() : self { return $this->aseocggwwegcmqes(Constants::ackcaikowcokggsc); } public function iygikqkegwkaaess() : self { return $this->mciaigckkugsieww(Constants::ieiyckasqmcyekim); } public function oikgyoimkwywogca() : self { return $this->mciaigckkugsieww(Constants::weaykmmocuacwekg); } protected function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { return $this->igiywquyccyiaucw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function wiqiksaowkoeiymu() : self { return $this->aseocggwwegcmqes(Constants::kumuoysauoagaiiy); } public function wegeyaguowmkqiac() : self { return $this->aseocggwwegcmqes(Constants::weigugswsgkycqkc); } public function amwwousckkqyweok() : self { return $this->aseocggwwegcmqes(Constants::amiwmcmkayqsycia); } public function yaoukqkouaeeycuy() : self { return $this->maqiysyuqmwcqoig(Constants::yoaakgmawgaeyeim); } public function cywusuoiegmowioc() { return $this->igiywquyccyiaucw(Constants::sieeooaigsmwocym, true); } public function iykqaowyicagawoe() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::sieeooaigsmwocym, false); } protected function run(Builder $siykeiywomwwuoiw) : Builder { $qsycuegoicqcqkmo = $this->wccsamkqsuaewemw(); switch ($this->imkyoqyocosuqasu(Constants::squoamkioomemiyi, Constants::qmesccgukkkogskw)) { case Constants::weigugswsgkycqkc: if (!($qgoqiacsiccwoawi = $this->myywwqkyiwawwquy())) { goto qweyymyuuqwcmkqg; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->megyegouqcqsiqwi($qgoqiacsiccwoawi, $qsycuegoicqcqkmo); qweyymyuuqwcmkqg: goto omsmaougqkqigogw; case Constants::amiwmcmkayqsycia: if (!($qgoqiacsiccwoawi = $this->myywwqkyiwawwquy())) { goto guqmgiqaaowaauyo; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->aeckugiumqwieykq($qgoqiacsiccwoawi, $qsycuegoicqcqkmo); guqmgiqaaowaauyo: goto omsmaougqkqigogw; case Constants::kumuoysauoagaiiy: $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); $qgoqiacsiccwoawi = $this->myywwqkyiwawwquy(); if (!($eqgoocgaqwqcimie && $qgoqiacsiccwoawi)) { goto iaoyeugekskmewgs; } if ($this->auiqywousmcqsskq() === Constants::yoaakgmawgaeyeim) { goto iuyagqakcieasiua; } if (!is_numeric($eqgoocgaqwqcimie)) { goto ucaoyoamaycsiacq; } try { $eqgoocgaqwqcimie = new DateTime($eqgoocgaqwqcimie); } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = date("\131\55\155\x2d\144\40\x48\72\x69\72\x73", $eqgoocgaqwqcimie); } ucaoyoamaycsiacq: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($qgoqiacsiccwoawi, $this->auiqywousmcqsskq(), $eqgoocgaqwqcimie); goto oasisywuwssumsok; iuyagqakcieasiua: if (!is_array($eqgoocgaqwqcimie)) { goto mccimkgwkkamsime; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $this->iykqaowyicagawoe()); mccimkgwkkamsime: oasisywuwssumsok: iaoyeugekskmewgs: goto omsmaougqkqigogw; case Constants::ackcaikowcokggsc: $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); $qgoqiacsiccwoawi = $this->myywwqkyiwawwquy(); if (!($qgoqiacsiccwoawi && $eqgoocgaqwqcimie)) { goto measoqewessauqma; } if (is_array($eqgoocgaqwqcimie)) { goto iokemmkgmcaksiqu; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; iokemmkgmcaksiqu: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($qgoqiacsiccwoawi); if ($aaqqkgyougeiueyq instanceof Json) { goto kieyoaoawqacqamy; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $this->iykqaowyicagawoe()); goto qckouamqueqiykqi; kieyoaoawqacqamy: $eqwoegegiamegqsm = $meywaqqsugaoeyys->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->children = []; foreach ($eqgoocgaqwqcimie as $igqsaukqcqscimok) { $this->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($qgoqiacsiccwoawi, "\45\42{$igqsaukqcqscimok}\x22\x25")->mciaigckkugsieww($qsycuegoicqcqkmo)->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui)); eciksmgaqikwegwq: } okagauksoqkoqygi: $siykeiywomwwuoiw = $this->igyyscwegckkkkya($siykeiywomwwuoiw); qckouamqueqiykqi: measoqewessauqma: goto omsmaougqkqigogw; case Constants::qmesccgukkkogskw: default: if ($qgoqiacsiccwoawi = $this->myywwqkyiwawwquy()) { goto agemeseegiuuowgo; } if (!$this->muyycecygiagkouk()) { goto gqaimiooakyykccy; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->where(function ($gqgemcmoicmgaqie) { foreach ($this->mmoaikqueyiwcesm() as $wcgsoqmmciswkmiq) { $gqgemcmoicmgaqie = $wcgsoqmmciswkmiq->evaluate($gqgemcmoicmgaqie); mcucegiogmuyogki: } wiaesksmicgikqcm: return $gqgemcmoicmgaqie; }, null, null, $qsycuegoicqcqkmo); gqaimiooakyykccy: goto goswwiomuackymqi; agemeseegiuuowgo: if (!($eqgoocgaqwqcimie = $this->qooeaookuemoqecm())) { goto auaigccmwqwsqsku; } $cackiyicawmkyqqg = $this->imkyoqyocosuqasu(Constants::eugyciakiowwcuwm, Constants::esgoecsaucwswuia); $siykeiywomwwuoiw = $siykeiywomwwuoiw->icsywsyukqcciiky($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); auaigccmwqwsqsku: goswwiomuackymqi: goto omsmaougqkqigogw; } geasgywiogoeamek: omsmaougqkqigogw: return $siykeiywomwwuoiw; } }
