<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d16a012f73             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\x46\151\x6c\145")->kyiucygqsgequoys(__("\x43\150\157\x6f\163\x65\40\141\40\146\x69\154\x65\40\157\x72\x20\144\162\x6f\x70\x20\151\x74\40\150\145\x72\x65\56\56\56", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\162\x6f\160\55\x70\x6c\x61\x63\x65\150\157\154\144\145\162", __("\x44\x72\157\160\40\x66\151\154\x65\40\x68\x65\x72\x65\56\x2e\56", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\125\x70\154\157\141\144"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; } return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\57{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\143\154\141\x73\163" => "\155\171\x2d\x31\x20\144\x2d\x62\154\157\x63\x6b"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if ($this->limit) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf(__("\115\141\170\x69\x6d\165\x6d\x20\146\x69\154\145\40\x73\151\172\145\40\45\163", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); } if ($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw()) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf("\x25\x73\72\x20\45\x73", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\x56\141\154\151\x64\40\155\x65\144\x69\x61\40\164\171\x70\x65\163", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\143\157\x64\x65", [], implode("\x3c\57\143\x6f\144\x65\76\x20\x7c\40\74\x63\157\144\145\76", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\x61\x63\143\x65\160\164", implode("\54\x20", $qgeeqyucwycemwmo)); } $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
