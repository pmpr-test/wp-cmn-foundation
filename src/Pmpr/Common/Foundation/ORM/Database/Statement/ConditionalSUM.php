<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67052a91f300e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\Interfaces\Constants; class ConditionalSUM extends Statement { public function qiccuiwooiquycsg() { $this->iquwswciegmqosua(0); parent::qiccuiwooiquycsg(); } public function ekcsqaakiuasqsge(string $kaywamcmkqogouck) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $kaywamcmkqogouck); } public function ykyiuaaycumywcqo(string $qgoqiacsiccwoawi, string $wocwawaaemuoqmig, string $cackiyicawmkyqqg = '') : self { if (!$cackiyicawmkyqqg) { $cackiyicawmkyqqg = $this->auiqywousmcqsskq(); } $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $kaywamcmkqogouck[] = [Constants::ciyoccqkiamemcmm => $wocwawaaemuoqmig, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]; $this->ekcsqaakiuasqsge($kaywamcmkqogouck); } return $this; } public function gwmaucmkaoasqgug(string $ssccayguowuawggi) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $ssccayguowuawggi); } public function iquwswciegmqosua($mciqqmyssqigmqyo) : self { return $this->igiywquyccyiaucw(Constants::kgmgkqegkacowmia, $mciqqmyssqigmqyo); } protected function run($siykeiywomwwuoiw) { $aikcyecgesuiaacw = $this->kwyoumwowyqcekys(); $ssccayguowuawggi = $this->imkyoqyocosuqasu(Constants::mskoigqmkguawcac); $mciqqmyssqigmqyo = $this->imkyoqyocosuqasu(Constants::kgmgkqegkacowmia); $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $ageeiyuiegayuisa = []; foreach ($kaywamcmkqogouck as $wocwawaaemuoqmig) { $uiymkeeaukcyqqik = $wocwawaaemuoqmig[Constants::ciyoccqkiamemcmm]; $imgcoakmmgqsckkm = $wocwawaaemuoqmig[Constants::meisqwykgaymauka]; $weawyioewioikeaq = $wocwawaaemuoqmig[Constants::eugyciakiowwcuwm]; if ($imgcoakmmgqsckkm && $uiymkeeaukcyqqik) { if (!is_numeric($uiymkeeaukcyqqik)) { $uiymkeeaukcyqqik = "\x27{$uiymkeeaukcyqqik}\47"; } $ageeiyuiegayuisa[] = "{$imgcoakmmgqsckkm}\40{$weawyioewioikeaq}\x20{$uiymkeeaukcyqqik}"; } } if ($ageeiyuiegayuisa) { $kaywamcmkqogouck = implode("\40\x41\x4e\x44\x20", $ageeiyuiegayuisa); } else { $kaywamcmkqogouck = null; } } if ($kaywamcmkqogouck && $ssccayguowuawggi) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->selectRaw("\x53\x55\x4d\x28\103\x41\123\105\40\127\x48\x45\x4e\x20{$kaywamcmkqogouck}\40\x54\110\105\x4e\40{$ssccayguowuawggi}\x20\105\114\123\x45\40{$mciqqmyssqigmqyo}\40\105\116\104\40\x29\x20\141\163\x20{$aikcyecgesuiaacw}"); } return $siykeiywomwwuoiw; } }
