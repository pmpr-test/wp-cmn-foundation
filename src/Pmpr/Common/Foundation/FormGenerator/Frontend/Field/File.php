<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\x46\x69\154\x65")->kyiucygqsgequoys(__("\x43\x68\157\157\x73\145\40\x61\40\x66\151\x6c\x65\40\x6f\x72\40\144\162\x6f\x70\40\151\x74\x20\x68\x65\x72\145\56\x2e\56", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\x64\162\157\x70\x2d\x70\x6c\141\143\145\150\x6f\154\x64\x65\x72", __("\104\162\x6f\160\40\x66\x69\x6c\x65\x20\150\x65\x72\x65\56\56\x2e", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\125\160\x6c\157\x61\144"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!(!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true))) { goto ocqocwcocigwogao; } $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; ocqocwcocigwogao: return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\57{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); cqggosuciisguwka: } aygymyyeaiouckwm: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\x63\154\x61\163\x73" => "\x6d\171\55\61\40\144\x2d\142\x6c\x6f\x63\x6b"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if (!$this->limit) { goto cusmikqmacqsyoma; } if (!$ukwokcuqauuosmoo) { goto iaemoucqgyeioome; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; iaemoucqgyeioome: $ukwokcuqauuosmoo .= sprintf(__("\115\x61\170\151\x6d\165\x6d\40\146\151\154\x65\40\x73\x69\x7a\145\x20\45\163", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); cusmikqmacqsyoma: if (!($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw())) { goto uyiyiugiugqiqgce; } if (!$ukwokcuqauuosmoo) { goto qcqecwaeywouwwyw; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; qcqecwaeywouwwyw: $ukwokcuqauuosmoo .= sprintf("\x25\x73\x3a\x20\45\163", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\126\x61\154\x69\x64\40\x6d\145\144\x69\x61\x20\x74\x79\160\145\x73", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\143\x6f\x64\145", [], implode("\x3c\57\x63\157\144\x65\76\40\x7c\40\x3c\x63\x6f\x64\145\x3e", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\x61\143\143\x65\160\x74", implode("\54\x20", $qgeeqyucwycemwmo)); uyiyiugiugqiqgce: $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
