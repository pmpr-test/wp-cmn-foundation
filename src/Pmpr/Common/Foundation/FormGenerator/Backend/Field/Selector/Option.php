<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678030d5e04d8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field\Selector; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Option extends Common { protected ?string $icon = null; protected ?string $type = Constants::ugqacsomqcgmoqug; protected ?string $description = null; public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { $this->description = $ukwokcuqauuosmoo; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function cgywqomcsaqkswgi($sqeykgyoooqysmca = Constants::emgswoamyaoagksg) : self { return $this->aseocggwwegcmqes($sqeykgyoooqysmca); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if ($this->gueasuouwqysmomu() === Constants::emgswoamyaoagksg) { if ($this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai()) { $kkeqqkkkqwkocsyu["\156\141\x76\137\151\143\x6f\156"] = IconInterface::ygeoyikieuqggmka; } else { $kkeqqkkkqwkocsyu["\156\x61\166\x5f\151\x63\157\x6e"] = IconInterface::qcamuqyiycioumkm; } } $kkeqqkkkqwkocsyu[Constants::iiooageieusuyomy] = $this->mwikyscisascoeea(); return $kkeqqkkkqwkocsyu; } }
