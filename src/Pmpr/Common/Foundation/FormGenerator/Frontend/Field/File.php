<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4d0827938             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\x46\x69\154\145")->kyiucygqsgequoys(__("\103\150\x6f\157\163\145\x20\141\x20\x66\x69\x6c\145\x20\x6f\162\x20\x64\162\157\160\x20\x69\164\x20\150\x65\x72\x65\56\x2e\x2e", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\162\157\160\x2d\x70\154\141\x63\145\150\x6f\154\144\x65\162", __("\104\162\x6f\x70\x20\146\x69\x6c\x65\x20\150\x65\162\145\x2e\56\56", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\x55\160\x6c\157\x61\x64"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; } return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\x2f{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\143\x6c\x61\x73\163" => "\155\171\x2d\61\x20\x64\x2d\x62\154\x6f\x63\153"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if ($this->limit) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf(__("\115\x61\x78\151\155\165\x6d\40\146\x69\x6c\x65\x20\163\151\x7a\x65\x20\x25\163", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); } if ($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw()) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf("\x25\x73\72\40\45\x73", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\126\141\x6c\x69\144\40\155\x65\x64\151\141\40\164\x79\x70\x65\163", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\143\x6f\144\145", [], implode("\x3c\57\x63\x6f\x64\145\x3e\x20\x7c\x20\x3c\x63\157\144\x65\x3e", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\x61\x63\143\x65\160\164", implode("\54\x20", $qgeeqyucwycemwmo)); } $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
