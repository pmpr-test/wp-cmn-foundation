<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da3200825a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\106\x69\x6c\145")->kyiucygqsgequoys(__("\103\150\x6f\x6f\x73\145\40\x61\x20\146\x69\154\145\x20\x6f\x72\40\x64\162\x6f\160\x20\x69\164\40\150\x65\x72\145\x2e\56\x2e", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\162\157\x70\x2d\x70\x6c\x61\143\145\150\157\154\x64\145\x72", __("\x44\162\x6f\160\x20\146\x69\x6c\x65\40\x68\x65\x72\x65\x2e\x2e\56", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\x55\160\x6c\x6f\141\144"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; } return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\57{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\x63\x6c\141\163\x73" => "\155\x79\55\x31\40\144\55\142\x6c\157\x63\153"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if ($this->limit) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf(__("\x4d\141\170\151\x6d\x75\x6d\x20\146\x69\x6c\x65\x20\163\151\x7a\145\40\45\x73", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); } if ($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw()) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf("\45\x73\x3a\x20\45\163", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\x56\141\x6c\151\144\40\x6d\x65\144\x69\x61\x20\x74\171\x70\x65\163", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\143\x6f\144\x65", [], implode("\74\x2f\x63\157\x64\x65\76\x20\x7c\40\x3c\143\x6f\144\145\76", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\141\143\143\145\160\x74", implode("\54\x20", $qgeeqyucwycemwmo)); } $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
