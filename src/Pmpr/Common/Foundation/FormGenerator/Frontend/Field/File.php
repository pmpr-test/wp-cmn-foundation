<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4df75a3df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\106\151\x6c\145")->kyiucygqsgequoys(__("\x43\x68\157\x6f\163\x65\x20\141\40\146\151\154\x65\x20\157\162\x20\x64\x72\157\x70\x20\151\164\x20\150\x65\x72\145\x2e\56\56", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\x64\162\x6f\x70\55\x70\x6c\x61\x63\145\150\157\154\144\x65\162", __("\x44\x72\x6f\160\40\146\151\x6c\145\40\150\x65\162\x65\56\x2e\56", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\125\x70\154\x6f\x61\144"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; } return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\57{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\x63\154\141\x73\163" => "\x6d\x79\x2d\x31\40\x64\x2d\x62\154\157\143\153"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if ($this->limit) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf(__("\x4d\x61\x78\151\x6d\165\x6d\x20\146\151\x6c\x65\x20\x73\x69\x7a\x65\x20\x25\x73", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); } if ($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw()) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf("\45\163\x3a\40\x25\163", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\x56\141\154\x69\144\40\155\x65\144\x69\141\40\164\171\x70\x65\x73", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\143\x6f\144\145", [], implode("\x3c\x2f\x63\x6f\x64\x65\76\x20\174\40\74\143\157\144\x65\76", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\x61\143\143\x65\160\164", implode("\x2c\40", $qgeeqyucwycemwmo)); } $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
