<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d83a968b15             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\Interfaces\Constants; class ConditionalSUM extends Statement { public function qiccuiwooiquycsg() { $this->iquwswciegmqosua(0); parent::qiccuiwooiquycsg(); } public function ekcsqaakiuasqsge(string $kaywamcmkqogouck) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $kaywamcmkqogouck); } public function ykyiuaaycumywcqo(string $qgoqiacsiccwoawi, string $wocwawaaemuoqmig, string $cackiyicawmkyqqg = '') : self { if (!$cackiyicawmkyqqg) { $cackiyicawmkyqqg = $this->auiqywousmcqsskq(); } $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $kaywamcmkqogouck[] = [Constants::ciyoccqkiamemcmm => $wocwawaaemuoqmig, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]; $this->ekcsqaakiuasqsge($kaywamcmkqogouck); } return $this; } public function gwmaucmkaoasqgug(string $ssccayguowuawggi) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $ssccayguowuawggi); } public function iquwswciegmqosua($mciqqmyssqigmqyo) : self { return $this->igiywquyccyiaucw(Constants::kgmgkqegkacowmia, $mciqqmyssqigmqyo); } protected function run($siykeiywomwwuoiw) { $aikcyecgesuiaacw = $this->kwyoumwowyqcekys(); $ssccayguowuawggi = $this->imkyoqyocosuqasu(Constants::mskoigqmkguawcac); $mciqqmyssqigmqyo = $this->imkyoqyocosuqasu(Constants::kgmgkqegkacowmia); $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $ageeiyuiegayuisa = []; foreach ($kaywamcmkqogouck as $wocwawaaemuoqmig) { $uiymkeeaukcyqqik = $wocwawaaemuoqmig[Constants::ciyoccqkiamemcmm]; $imgcoakmmgqsckkm = $wocwawaaemuoqmig[Constants::meisqwykgaymauka]; $weawyioewioikeaq = $wocwawaaemuoqmig[Constants::eugyciakiowwcuwm]; if ($imgcoakmmgqsckkm && $uiymkeeaukcyqqik) { if (!is_numeric($uiymkeeaukcyqqik)) { $uiymkeeaukcyqqik = "\47{$uiymkeeaukcyqqik}\x27"; } $ageeiyuiegayuisa[] = "{$imgcoakmmgqsckkm}\40{$weawyioewioikeaq}\x20{$uiymkeeaukcyqqik}"; } } if ($ageeiyuiegayuisa) { $kaywamcmkqogouck = implode("\40\x41\116\x44\40", $ageeiyuiegayuisa); } else { $kaywamcmkqogouck = null; } } if ($kaywamcmkqogouck && $ssccayguowuawggi) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->selectRaw("\123\x55\115\50\103\x41\x53\105\x20\127\x48\105\x4e\40{$kaywamcmkqogouck}\40\124\x48\x45\x4e\40{$ssccayguowuawggi}\40\x45\x4c\123\x45\40{$mciqqmyssqigmqyo}\40\x45\x4e\x44\x20\51\40\x61\x73\40{$aikcyecgesuiaacw}"); } return $siykeiywomwwuoiw; } }
