<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678030d5e04d8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Metadata extends Common { protected array $metadata = []; public function register() { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->usuqmwksoeaayaig($meywaqqsugaoeyys->aakmagwggmkoiiyu() . "\137\155\145\164\x61")->okgmqaeuaeymaocm($meywaqqsugaoeyys->ogqgmqymcwsqikme())->muuwuqssqkaieqge(sprintf(__("\45\163\x20\115\x65\164\x61\x64\x61\164\141", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()))->guiaswksukmgageq(sprintf(__("\x25\163\40\x4d\145\x74\x61", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()))->saemoowcasogykak(IconInterface::yoaaqaikesasauwq); $this->cgyowaagewsiseao($meywaqqsugaoeyys->imkyoqyocosuqasu(Constants::iqecuousiiauysem, [])); parent::register(); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::osocaqqumyuooqyo)->acceqyqygswoecwe(255)->gswweykyogmsyawy(__("\x4d\x65\x74\141\40\x4b\x65\x79", PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(0)->qcssowoqeqysosca())->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::iwmgegikocuwggua)->gswweykyogmsyawy(__("\115\x65\x74\141\x20\126\141\154\165\x65", PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(5))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq($this->meqwysqkeuyqiioi())->gswweykyogmsyawy($this->mgogaykgkoogasim()->giiayuqckuiecosm())->wuuqgaekqeymecag($this->mgogaykgkoogasim())->jyumyyugiwwiqomk(20)->eewuieiqoqmekwmw(Constants::sayycgcceusuyycg)); parent::uwmqacgewuauagai(); } public function giwmekimakcaawsq(string $uusmaiomayssaecw, $ywmkwiwkosakssii = []) : self { if (is_string($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [Constants::qescuiwgsyuikume => $ywmkwiwkosakssii]; } $this->metadata[$uusmaiomayssaecw] = $ywmkwiwkosakssii; return $this; } public function cgyowaagewsiseao(array $kuguwoaesuqsqysu = []) : self { foreach ($kuguwoaesuqsqysu as $uusmaiomayssaecw => $ywmkwiwkosakssii) { $this->giwmekimakcaawsq($uusmaiomayssaecw, $ywmkwiwkosakssii); } return $this; } public function uuoweqwcguauaemy() : array { return (array) $this->ocksiywmkyaqseou($this->mgogaykgkoogasim()->aakmagwggmkoiiyu() . "\137\x76\141\x6c\151\144\x5f\155\x65\x74\141\144\141\164\141\x5f\153\x65\x79\x73", $this->metadata, $this); } public function iiqamgmgaaueasca($uyaimqisayeqocig, $uusmaiomayssaecw = null, bool $qyaimoocacyoqwwa = true) { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($yquywseiyocsiqco = $meywaqqsugaoeyys->queegmguugiecims()) { static $kuguwoaesuqsqysu; if (!$kuguwoaesuqsqysu) { $kuguwoaesuqsqysu = []; } if ($aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($uyaimqisayeqocig)) { if (!isset($kuguwoaesuqsqysu[$aokagokqyuysuksm])) { $siykeiywomwwuoiw = $yquywseiyocsiqco->iekyeyicoyyawomk()->wkmkqaiwuqouweye($yquywseiyocsiqco->meqwysqkeuyqiioi(), $aokagokqyuysuksm); if ($qyaimoocacyoqwwa) { $eqgoocgaqwqcimie = $yquywseiyocsiqco->iekyeyicoyyawomk()->iykmimcgkyyoimoc($siykeiywomwwuoiw, Constants::iwmgegikocuwggua, Constants::osocaqqumyuooqyo); } else { $eqgoocgaqwqcimie = $yquywseiyocsiqco->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); } $kuguwoaesuqsqysu[$aokagokqyuysuksm] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->unserialize($eqgoocgaqwqcimie); } $sogksuscggsicmac = $kuguwoaesuqsqysu[$aokagokqyuysuksm]; } } if ($uusmaiomayssaecw) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, $uusmaiomayssaecw, false); } return $sogksuscggsicmac; } }
