<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebe091cfc2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\x46\x69\x6c\x65")->kyiucygqsgequoys(__("\x43\150\x6f\x6f\x73\x65\40\x61\40\x66\151\154\x65\40\x6f\x72\x20\x64\162\157\x70\x20\151\x74\40\150\145\x72\x65\x2e\56\x2e", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\162\x6f\160\x2d\x70\x6c\141\143\x65\150\157\x6c\x64\x65\162", __("\x44\x72\x6f\160\x20\x66\151\154\145\40\x68\x65\162\145\x2e\56\56", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\125\160\x6c\x6f\x61\144"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!(!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true))) { goto ocqocwcocigwogao; } $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; ocqocwcocigwogao: return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\x2f{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); cqggosuciisguwka: } aygymyyeaiouckwm: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\143\x6c\141\x73\x73" => "\x6d\x79\55\61\40\x64\55\142\154\x6f\143\153"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if (!$this->limit) { goto cusmikqmacqsyoma; } if (!$ukwokcuqauuosmoo) { goto iaemoucqgyeioome; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; iaemoucqgyeioome: $ukwokcuqauuosmoo .= sprintf(__("\x4d\141\x78\x69\155\x75\155\x20\146\x69\x6c\x65\x20\163\x69\172\x65\40\x25\x73", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); cusmikqmacqsyoma: if (!($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw())) { goto uyiyiugiugqiqgce; } if (!$ukwokcuqauuosmoo) { goto qcqecwaeywouwwyw; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; qcqecwaeywouwwyw: $ukwokcuqauuosmoo .= sprintf("\45\163\72\40\45\163", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\126\141\154\x69\x64\x20\155\145\x64\x69\x61\40\x74\x79\160\145\163", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\143\x6f\x64\145", [], implode("\74\x2f\x63\157\x64\145\76\x20\x7c\x20\74\x63\x6f\x64\145\x3e", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\x61\x63\143\x65\x70\x74", implode("\54\40", $qgeeqyucwycemwmo)); uyiyiugiugqiqgce: $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
