<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbd402ffa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Metadata extends Common { protected array $metadata = []; public function register() { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->usuqmwksoeaayaig($meywaqqsugaoeyys->aakmagwggmkoiiyu() . "\x5f\x6d\145\x74\141")->okgmqaeuaeymaocm($meywaqqsugaoeyys->ogqgmqymcwsqikme())->muuwuqssqkaieqge(sprintf(__("\x25\163\x20\x4d\x65\164\141\144\x61\x74\141", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()))->guiaswksukmgageq(sprintf(__("\x25\x73\40\115\x65\164\x61", PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()))->saemoowcasogykak(IconInterface::yoaaqaikesasauwq); $this->cgyowaagewsiseao($meywaqqsugaoeyys->imkyoqyocosuqasu(Constants::iqecuousiiauysem, [])); parent::register(); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::osocaqqumyuooqyo)->acceqyqygswoecwe(255)->gswweykyogmsyawy(__("\x4d\145\x74\141\40\113\x65\171", PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(0)->qcssowoqeqysosca())->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::iwmgegikocuwggua)->gswweykyogmsyawy(__("\x4d\x65\164\141\40\x56\x61\x6c\165\145", PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(5))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq($this->meqwysqkeuyqiioi())->gswweykyogmsyawy($this->mgogaykgkoogasim()->giiayuqckuiecosm())->wuuqgaekqeymecag($this->mgogaykgkoogasim())->jyumyyugiwwiqomk(20)->eewuieiqoqmekwmw(Constants::sayycgcceusuyycg)); parent::uwmqacgewuauagai(); } public function giwmekimakcaawsq(string $uusmaiomayssaecw, $ywmkwiwkosakssii = []) : self { if (is_string($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [Constants::qescuiwgsyuikume => $ywmkwiwkosakssii]; } $this->metadata[$uusmaiomayssaecw] = $ywmkwiwkosakssii; return $this; } public function cgyowaagewsiseao(array $kuguwoaesuqsqysu = []) : self { foreach ($kuguwoaesuqsqysu as $uusmaiomayssaecw => $ywmkwiwkosakssii) { $this->giwmekimakcaawsq($uusmaiomayssaecw, $ywmkwiwkosakssii); } return $this; } public function uuoweqwcguauaemy() : array { return (array) $this->ocksiywmkyaqseou($this->mgogaykgkoogasim()->aakmagwggmkoiiyu() . "\137\x76\141\154\x69\x64\x5f\155\145\x74\141\144\141\x74\x61\137\153\145\x79\x73", $this->metadata, $this); } public function iiqamgmgaaueasca($uyaimqisayeqocig, $uusmaiomayssaecw = null, bool $qyaimoocacyoqwwa = true) { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($yquywseiyocsiqco = $meywaqqsugaoeyys->queegmguugiecims()) { static $kuguwoaesuqsqysu; if (!$kuguwoaesuqsqysu) { $kuguwoaesuqsqysu = []; } if ($aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($uyaimqisayeqocig)) { if (!isset($kuguwoaesuqsqysu[$aokagokqyuysuksm])) { $siykeiywomwwuoiw = $yquywseiyocsiqco->iekyeyicoyyawomk()->wkmkqaiwuqouweye($yquywseiyocsiqco->meqwysqkeuyqiioi(), $aokagokqyuysuksm); if ($qyaimoocacyoqwwa) { $eqgoocgaqwqcimie = $yquywseiyocsiqco->iekyeyicoyyawomk()->iykmimcgkyyoimoc($siykeiywomwwuoiw, Constants::iwmgegikocuwggua, Constants::osocaqqumyuooqyo); } else { $eqgoocgaqwqcimie = $yquywseiyocsiqco->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); } $kuguwoaesuqsqysu[$aokagokqyuysuksm] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->unserialize($eqgoocgaqwqcimie); } $sogksuscggsicmac = $kuguwoaesuqsqysu[$aokagokqyuysuksm]; } } if ($uusmaiomayssaecw) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, $uusmaiomayssaecw, false); } return $sogksuscggsicmac; } }
