<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7a86064f08             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\Interfaces\Constants; class ConditionalSUM extends Statement { public function qiccuiwooiquycsg() { $this->iquwswciegmqosua(0); parent::qiccuiwooiquycsg(); } public function ekcsqaakiuasqsge(string $kaywamcmkqogouck) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $kaywamcmkqogouck); } public function ykyiuaaycumywcqo(string $qgoqiacsiccwoawi, string $wocwawaaemuoqmig, string $cackiyicawmkyqqg = '') : self { if (!$cackiyicawmkyqqg) { $cackiyicawmkyqqg = $this->auiqywousmcqsskq(); } $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $kaywamcmkqogouck[] = [Constants::ciyoccqkiamemcmm => $wocwawaaemuoqmig, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]; $this->ekcsqaakiuasqsge($kaywamcmkqogouck); } return $this; } public function gwmaucmkaoasqgug(string $ssccayguowuawggi) : self { return $this->igiywquyccyiaucw(Constants::mskoigqmkguawcac, $ssccayguowuawggi); } public function iquwswciegmqosua($mciqqmyssqigmqyo) : self { return $this->igiywquyccyiaucw(Constants::kgmgkqegkacowmia, $mciqqmyssqigmqyo); } protected function run($siykeiywomwwuoiw) { $aikcyecgesuiaacw = $this->kwyoumwowyqcekys(); $ssccayguowuawggi = $this->imkyoqyocosuqasu(Constants::mskoigqmkguawcac); $mciqqmyssqigmqyo = $this->imkyoqyocosuqasu(Constants::kgmgkqegkacowmia); $kaywamcmkqogouck = $this->imkyoqyocosuqasu(Constants::sgyowqgsmegoocaw, []); if (is_array($kaywamcmkqogouck)) { $ageeiyuiegayuisa = []; foreach ($kaywamcmkqogouck as $wocwawaaemuoqmig) { $uiymkeeaukcyqqik = $wocwawaaemuoqmig[Constants::ciyoccqkiamemcmm]; $imgcoakmmgqsckkm = $wocwawaaemuoqmig[Constants::meisqwykgaymauka]; $weawyioewioikeaq = $wocwawaaemuoqmig[Constants::eugyciakiowwcuwm]; if ($imgcoakmmgqsckkm && $uiymkeeaukcyqqik) { if (!is_numeric($uiymkeeaukcyqqik)) { $uiymkeeaukcyqqik = "'{$uiymkeeaukcyqqik}'"; } $ageeiyuiegayuisa[] = "{$imgcoakmmgqsckkm} {$weawyioewioikeaq} {$uiymkeeaukcyqqik}"; } } if ($ageeiyuiegayuisa) { $kaywamcmkqogouck = implode(" AND ", $ageeiyuiegayuisa); } else { $kaywamcmkqogouck = null; } } if ($kaywamcmkqogouck && $ssccayguowuawggi) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->selectRaw("SUM(CASE WHEN {$kaywamcmkqogouck} THEN {$ssccayguowuawggi} ELSE {$mciqqmyssqigmqyo} END ) as {$aikcyecgesuiaacw}"); } return $siykeiywomwwuoiw; } }
