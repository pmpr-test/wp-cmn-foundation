<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e84f05bca             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\Interfaces\Constants; class ConditionalSUM extends Statement { public function qiccuiwooiquycsg() { $this->iquwswciegmqosua(0); parent::qiccuiwooiquycsg(); } public function ekcsqaakiuasqsge(string $kaywamcmkqogouck) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $kaywamcmkqogouck); } public function ykyiuaaycumywcqo(string $qgoqiacsiccwoawi, string $wocwawaaemuoqmig, string $cackiyicawmkyqqg = '') : self { if (!$cackiyicawmkyqqg) { $cackiyicawmkyqqg = $this->auiqywousmcqsskq(); } $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $kaywamcmkqogouck[] = [Constants::ciyoccqkiamemcmm => $wocwawaaemuoqmig, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]; $this->ekcsqaakiuasqsge($kaywamcmkqogouck); } return $this; } public function gwmaucmkaoasqgug(string $ssccayguowuawggi) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $ssccayguowuawggi); } public function iquwswciegmqosua($mciqqmyssqigmqyo) : self { return $this->igiywquyccyiaucw(Constants::kgmgkqegkacowmia, $mciqqmyssqigmqyo); } protected function run($siykeiywomwwuoiw) { $aikcyecgesuiaacw = $this->kwyoumwowyqcekys(); $ssccayguowuawggi = $this->imkyoqyocosuqasu(Constants::mskoigqmkguawcac); $mciqqmyssqigmqyo = $this->imkyoqyocosuqasu(Constants::kgmgkqegkacowmia); $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $ageeiyuiegayuisa = []; foreach ($kaywamcmkqogouck as $wocwawaaemuoqmig) { $uiymkeeaukcyqqik = $wocwawaaemuoqmig[Constants::ciyoccqkiamemcmm]; $imgcoakmmgqsckkm = $wocwawaaemuoqmig[Constants::meisqwykgaymauka]; $weawyioewioikeaq = $wocwawaaemuoqmig[Constants::eugyciakiowwcuwm]; if ($imgcoakmmgqsckkm && $uiymkeeaukcyqqik) { if (!is_numeric($uiymkeeaukcyqqik)) { $uiymkeeaukcyqqik = "\47{$uiymkeeaukcyqqik}\47"; } $ageeiyuiegayuisa[] = "{$imgcoakmmgqsckkm}\40{$weawyioewioikeaq}\40{$uiymkeeaukcyqqik}"; } } if ($ageeiyuiegayuisa) { $kaywamcmkqogouck = implode("\40\101\x4e\104\40", $ageeiyuiegayuisa); } else { $kaywamcmkqogouck = null; } } if ($kaywamcmkqogouck && $ssccayguowuawggi) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->selectRaw("\123\x55\115\50\x43\101\x53\x45\x20\x57\x48\105\116\40{$kaywamcmkqogouck}\40\x54\x48\105\x4e\40{$ssccayguowuawggi}\x20\x45\x4c\x53\x45\40{$mciqqmyssqigmqyo}\x20\105\x4e\x44\x20\x29\x20\x61\x73\40{$aikcyecgesuiaacw}"); } return $siykeiywomwwuoiw; } }
