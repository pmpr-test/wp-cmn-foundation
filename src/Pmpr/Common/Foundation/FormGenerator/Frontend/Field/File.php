<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends Input { protected $limit = 0; protected array $validTypes = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::kekgqaemqessuwmq); $this->askmmuauqcuuqsea("\x46\151\x6c\145")->kyiucygqsgequoys(__("\x43\150\x6f\157\163\x65\x20\141\x20\x66\151\154\x65\x20\x6f\162\x20\144\162\157\160\40\x69\x74\x20\x68\145\x72\145\56\x2e\56", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\162\x6f\x70\x2d\160\x6c\x61\x63\145\x68\x6f\x6c\x64\x65\162", __("\x44\x72\157\160\x20\x66\x69\154\145\x20\150\x65\162\x65\56\56\56", PR__CMN__FOUNDATION)); } public function wsacuksekeaemucu($uuyoeicyoayimaoa) : self { $this->limit = $uuyoeicyoayimaoa; return $this; } public function ayauwcqccmcoegkg() : self { return $this->askmmuauqcuuqsea("\x55\160\x6c\x6f\x61\144"); } public function ckkiseeqsuqmamaw() : array { return $this->validTypes; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca, $oqoquuiqeaqykuuu, array $yemgmmgogcwccuky = []) : self { $quyckwoaauecuusi = $this->ckkiseeqsuqmamaw(); if (!(!in_array($sqeykgyoooqysmca, $quyckwoaauecuusi, true) && !in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true))) { goto wewskayogyikqqwe; } $this->validTypes[$sqeykgyoooqysmca] = $oqoquuiqeaqykuuu; wewskayogyikqqwe: return $this; } public function hsgemasguekogiui(array $qgeeqyucwycemwmo, string $yuwymayicwwqiske = '', array $yemgmmgogcwccuky = []) : self { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $this->eyiiyqiykcsusuwi($sqeykgyoooqysmca, "{$yuwymayicwwqiske}\57{$sqeykgyoooqysmca}", $yemgmmgogcwccuky); oqwssckcieuowiwc: } cuiswoyuykyksukc: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wmcaeewaokocymiy = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ["\x63\x6c\141\163\163" => "\x6d\171\55\61\x20\x64\55\x62\154\157\x63\x6b"]); $ukwokcuqauuosmoo = $this->meqceykmywmqgoym(); if (!$this->limit) { goto qgowycwwyqeusmqk; } if (!$ukwokcuqauuosmoo) { goto auyuqgiwqummogko; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; auyuqgiwqummogko: $ukwokcuqauuosmoo .= sprintf(__("\115\x61\x78\151\x6d\165\x6d\40\x66\151\154\145\40\163\x69\172\145\40\x25\x73", PR__CMN__FOUNDATION), $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->cgiuyygugaoiwaqk($this->limit))); qgowycwwyqeusmqk: if (!($qgeeqyucwycemwmo = $this->ckkiseeqsuqmamaw())) { goto egcykicymsycioaq; } if (!$ukwokcuqauuosmoo) { goto ouiaceqmgmusysiq; } $ukwokcuqauuosmoo .= $wmcaeewaokocymiy; ouiaceqmgmusysiq: $ukwokcuqauuosmoo .= sprintf("\45\163\72\x20\45\163", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\x56\x61\154\x69\x64\40\x6d\x65\144\151\x61\40\164\171\x70\x65\163", PR__CMN__FOUNDATION)), $swqimwqeweekeusq->uuccukgasskgimsq("\143\157\144\x65", [], implode("\74\57\x63\x6f\x64\145\76\40\x7c\x20\x3c\x63\x6f\144\x65\76", array_keys($qgeeqyucwycemwmo)))); $this->qcgocuceocquqcuw("\141\143\143\x65\160\x74", implode("\x2c\x20", $qgeeqyucwycemwmo)); egcykicymsycioaq: $this->gucwmccyimoagwcm($ukwokcuqauuosmoo); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
