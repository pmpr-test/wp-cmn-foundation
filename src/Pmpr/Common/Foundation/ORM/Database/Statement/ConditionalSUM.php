<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679154b81399c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\Interfaces\Constants; class ConditionalSUM extends Statement { public function qiccuiwooiquycsg() { $this->iquwswciegmqosua(0); parent::qiccuiwooiquycsg(); } public function ekcsqaakiuasqsge(string $kaywamcmkqogouck) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $kaywamcmkqogouck); } public function ykyiuaaycumywcqo(string $qgoqiacsiccwoawi, string $wocwawaaemuoqmig, string $cackiyicawmkyqqg = '') : self { if (!$cackiyicawmkyqqg) { $cackiyicawmkyqqg = $this->auiqywousmcqsskq(); } $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $kaywamcmkqogouck[] = [Constants::ciyoccqkiamemcmm => $wocwawaaemuoqmig, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]; $this->ekcsqaakiuasqsge($kaywamcmkqogouck); } return $this; } public function gwmaucmkaoasqgug(string $ssccayguowuawggi) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $ssccayguowuawggi); } public function iquwswciegmqosua($mciqqmyssqigmqyo) : self { return $this->igiywquyccyiaucw(Constants::kgmgkqegkacowmia, $mciqqmyssqigmqyo); } protected function run($siykeiywomwwuoiw) { $aikcyecgesuiaacw = $this->kwyoumwowyqcekys(); $ssccayguowuawggi = $this->imkyoqyocosuqasu(Constants::mskoigqmkguawcac); $mciqqmyssqigmqyo = $this->imkyoqyocosuqasu(Constants::kgmgkqegkacowmia); $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $ageeiyuiegayuisa = []; foreach ($kaywamcmkqogouck as $wocwawaaemuoqmig) { $uiymkeeaukcyqqik = $wocwawaaemuoqmig[Constants::ciyoccqkiamemcmm]; $imgcoakmmgqsckkm = $wocwawaaemuoqmig[Constants::meisqwykgaymauka]; $weawyioewioikeaq = $wocwawaaemuoqmig[Constants::eugyciakiowwcuwm]; if ($imgcoakmmgqsckkm && $uiymkeeaukcyqqik) { if (!is_numeric($uiymkeeaukcyqqik)) { $uiymkeeaukcyqqik = "\x27{$uiymkeeaukcyqqik}\47"; } $ageeiyuiegayuisa[] = "{$imgcoakmmgqsckkm}\x20{$weawyioewioikeaq}\x20{$uiymkeeaukcyqqik}"; } } if ($ageeiyuiegayuisa) { $kaywamcmkqogouck = implode("\x20\101\x4e\x44\x20", $ageeiyuiegayuisa); } else { $kaywamcmkqogouck = null; } } if ($kaywamcmkqogouck && $ssccayguowuawggi) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->selectRaw("\x53\125\x4d\x28\103\101\123\x45\40\x57\110\x45\x4e\40{$kaywamcmkqogouck}\x20\124\x48\105\x4e\40{$ssccayguowuawggi}\x20\x45\114\x53\x45\x20{$mciqqmyssqigmqyo}\40\105\x4e\104\40\x29\x20\x61\163\40{$aikcyecgesuiaacw}"); } return $siykeiywomwwuoiw; } }
