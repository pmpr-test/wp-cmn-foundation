<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\x46\151\x6c\x65")->kyiucygqsgequoys(__("\103\x68\157\157\163\x65\x20\x61\40\x66\151\154\x65\x20\x6f\162\40\144\162\x6f\160\x20\x69\x74\40\x68\145\162\145\x2e\x2e\x2e", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\162\157\160\55\x70\x6c\141\x63\145\150\157\x6c\144\x65\x72", __("\104\x72\157\x70\x20\x66\151\154\145\40\x68\x65\162\145\x2e\x2e\x2e", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\x55\160\154\x6f\x61\x64"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!(!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true))) { goto cswkeogkecaoyoka; } $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; cswkeogkecaoyoka: return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\57{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); ieaswyqkcwyaycse: } oekyuoucqkakcewe: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\143\x6c\x61\163\163" => "\155\x79\55\61\x20\x64\x2d\142\154\x6f\x63\153"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if (!$this->limit) { goto wgegmwgsmsgmceqo; } if (!$ukwokcuqauuosmoo) { goto yiuwcmkkcemwksaq; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; yiuwcmkkcemwksaq: $ukwokcuqauuosmoo .= sprintf(__("\x4d\141\170\151\155\165\155\40\x66\x69\154\x65\x20\x73\x69\x7a\x65\40\45\163", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); wgegmwgsmsgmceqo: if (!($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw())) { goto omyeseoqwqiuwqcw; } if (!$ukwokcuqauuosmoo) { goto kqkqessiagyiiuim; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; kqkqessiagyiiuim: $ukwokcuqauuosmoo .= sprintf("\x25\x73\x3a\40\45\x73", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\x56\141\154\x69\144\x20\x6d\x65\144\151\x61\x20\x74\171\160\x65\163", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\x63\157\x64\x65", [], implode("\74\x2f\x63\x6f\x64\145\x3e\x20\x7c\x20\74\143\x6f\144\145\76", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\141\143\143\x65\160\x74", implode("\54\40", $qgeeqyucwycemwmo)); omyeseoqwqiuwqcw: $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
