<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\x46\151\154\x65")->kyiucygqsgequoys(__("\x43\150\157\x6f\x73\145\x20\x61\x20\146\151\154\x65\40\157\162\40\144\x72\x6f\160\40\x69\164\x20\150\x65\162\145\x2e\x2e\56", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\x64\x72\157\x70\55\x70\x6c\x61\x63\145\150\x6f\x6c\x64\x65\162", __("\104\162\157\x70\40\x66\151\x6c\145\x20\150\145\x72\145\x2e\56\56", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\125\x70\154\157\141\x64"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!(!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true))) { goto ieaswyqkcwyaycse; } $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; ieaswyqkcwyaycse: return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\x2f{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); wgegmwgsmsgmceqo: } yiuwcmkkcemwksaq: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\x63\154\141\163\163" => "\155\x79\x2d\61\40\144\55\142\x6c\x6f\143\153"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if (!$this->limit) { goto omyeseoqwqiuwqcw; } if (!$ukwokcuqauuosmoo) { goto kqkqessiagyiiuim; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; kqkqessiagyiiuim: $ukwokcuqauuosmoo .= sprintf(__("\115\141\170\x69\155\165\x6d\x20\146\151\x6c\145\x20\163\151\172\145\40\45\163", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); omyeseoqwqiuwqcw: if (!($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw())) { goto cuqsyqewuemsysgi; } if (!$ukwokcuqauuosmoo) { goto yoegkeiammkuouua; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; yoegkeiammkuouua: $ukwokcuqauuosmoo .= sprintf("\x25\163\72\x20\x25\163", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\x56\x61\154\x69\144\40\x6d\145\144\151\x61\40\x74\x79\x70\x65\x73", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\143\x6f\144\145", [], implode("\74\x2f\x63\x6f\144\145\x3e\40\x7c\x20\74\143\x6f\x64\x65\76", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\x61\143\x63\145\x70\164", implode("\54\40", $qgeeqyucwycemwmo)); cuqsyqewuemsysgi: $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
