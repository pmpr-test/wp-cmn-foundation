<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d17086e3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Metadata extends Common { protected array $metadata = []; public function register() { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->usuqmwksoeaayaig($meywaqqsugaoeyys->aakmagwggmkoiiyu() . '_meta')->okgmqaeuaeymaocm($meywaqqsugaoeyys->ogqgmqymcwsqikme())->muuwuqssqkaieqge(sprintf(__('%s Metadata', PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()))->guiaswksukmgageq(sprintf(__('%s Meta', PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()))->saemoowcasogykak(IconInterface::yoaaqaikesasauwq); $this->cgyowaagewsiseao($meywaqqsugaoeyys->imkyoqyocosuqasu(Constants::iqecuousiiauysem, [])); parent::register(); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::osocaqqumyuooqyo)->acceqyqygswoecwe(255)->gswweykyogmsyawy(__('Meta Key', PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(0)->qcssowoqeqysosca())->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::iwmgegikocuwggua)->gswweykyogmsyawy(__('Meta Value', PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(5))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq($this->meqwysqkeuyqiioi())->gswweykyogmsyawy($this->mgogaykgkoogasim()->giiayuqckuiecosm())->wuuqgaekqeymecag($this->mgogaykgkoogasim())->jyumyyugiwwiqomk(20)->eewuieiqoqmekwmw(Constants::sayycgcceusuyycg)); parent::uwmqacgewuauagai(); } public function giwmekimakcaawsq(string $uusmaiomayssaecw, $ywmkwiwkosakssii = []) : self { if (is_string($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [Constants::qescuiwgsyuikume => $ywmkwiwkosakssii]; } $this->metadata[$uusmaiomayssaecw] = $ywmkwiwkosakssii; return $this; } public function cgyowaagewsiseao(array $kuguwoaesuqsqysu = []) : self { foreach ($kuguwoaesuqsqysu as $uusmaiomayssaecw => $ywmkwiwkosakssii) { $this->giwmekimakcaawsq($uusmaiomayssaecw, $ywmkwiwkosakssii); } return $this; } public function uuoweqwcguauaemy() : array { return (array) $this->ocksiywmkyaqseou($this->mgogaykgkoogasim()->aakmagwggmkoiiyu() . '_valid_metadata_keys', $this->metadata, $this); } public function iiqamgmgaaueasca($uyaimqisayeqocig, $uusmaiomayssaecw = null, bool $qyaimoocacyoqwwa = true) { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($yquywseiyocsiqco = $meywaqqsugaoeyys->queegmguugiecims()) { static $kuguwoaesuqsqysu; if (!$kuguwoaesuqsqysu) { $kuguwoaesuqsqysu = []; } if ($aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($uyaimqisayeqocig)) { if (!isset($kuguwoaesuqsqysu[$aokagokqyuysuksm])) { $siykeiywomwwuoiw = $yquywseiyocsiqco->iekyeyicoyyawomk()->wkmkqaiwuqouweye($yquywseiyocsiqco->meqwysqkeuyqiioi(), $aokagokqyuysuksm); if ($qyaimoocacyoqwwa) { $eqgoocgaqwqcimie = $yquywseiyocsiqco->iekyeyicoyyawomk()->iykmimcgkyyoimoc($siykeiywomwwuoiw, Constants::iwmgegikocuwggua, Constants::osocaqqumyuooqyo); } else { $eqgoocgaqwqcimie = $yquywseiyocsiqco->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); } $kuguwoaesuqsqysu[$aokagokqyuysuksm] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->unserialize($eqgoocgaqwqcimie); } $sogksuscggsicmac = $kuguwoaesuqsqysu[$aokagokqyuysuksm]; } } if ($uusmaiomayssaecw) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, $uusmaiomayssaecw, false); } return $sogksuscggsicmac; } }
