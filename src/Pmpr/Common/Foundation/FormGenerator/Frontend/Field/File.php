<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053bb6ecfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\x46\151\154\x65")->kyiucygqsgequoys(__("\x43\150\x6f\x6f\163\145\40\x61\40\146\151\154\145\x20\157\x72\x20\144\x72\x6f\160\40\151\164\40\150\145\x72\145\56\56\56", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\x64\x72\157\160\x2d\160\154\x61\x63\x65\150\x6f\x6c\144\145\162", __("\x44\x72\x6f\x70\x20\146\151\x6c\x65\x20\150\145\162\x65\x2e\56\56", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\125\160\x6c\157\141\x64"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; } return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\57{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\x63\x6c\141\x73\163" => "\155\171\55\61\40\x64\55\142\x6c\157\x63\x6b"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if ($this->limit) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf(__("\115\x61\170\x69\155\x75\155\x20\146\x69\154\145\x20\163\151\172\145\40\45\163", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); } if ($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw()) { if ($ukwokcuqauuosmoo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; } $ukwokcuqauuosmoo .= sprintf("\45\x73\x3a\x20\x25\163", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\126\x61\154\151\144\40\155\x65\x64\151\141\40\x74\171\160\145\163", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\x63\x6f\144\145", [], implode("\74\x2f\143\x6f\144\145\x3e\40\174\40\74\143\157\x64\145\x3e", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\x61\x63\x63\145\x70\x74", implode("\x2c\x20", $qgeeqyucwycemwmo)); } $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
