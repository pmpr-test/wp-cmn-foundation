<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fdd41716df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Interfaces\Constants; class Size extends Data { protected ?string $name = ''; protected ?int $width = 0; protected ?int $height = 0; protected bool $isCustom = false; protected bool $isCrop = false; public function __construct(string $ymqmyyeuycgmigyo, int $qeswwaqqsyymqawg, int $cswemwoyesycwkuq = 0, bool $megcasiyeqqowmmi = false) { $this->name = $ymqmyyeuycgmigyo; $this->width = $qeswwaqqsyymqawg; $this->height = $cswemwoyesycwkuq; $this->isCrop = $megcasiyeqqowmmi; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function qoqouugaaimaiqmi() : ?int { return $this->width; } public function esyyaomkkeccysos(?int $qeswwaqqsyymqawg) : self { $this->width = $qeswwaqqsyymqawg; return $this; } public function miskeyiwqsgcqwwo() : ?int { return $this->height; } public function seiwcgsykwcukmsc(?int $cswemwoyesycwkuq) : self { $this->height = $cswemwoyesycwkuq; return $this; } public function somyygqqawwswkyk() : bool { return $this->isCustom; } public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self { $this->isCustom = $somyygqqawwswkyk; return $this; } public function megcasiyeqqowmmi() : bool { return $this->isCrop; } public function quckcaucawkysaii(bool $megcasiyeqqowmmi) : self { $this->isCrop = $megcasiyeqqowmmi; return $this; } public function get($gkiuoymeukweiaaw = Constants::qomookamaskuoswk) : ?int { $qcgkuqesqqymcuui = 0; switch ($gkiuoymeukweiaaw) { case Constants::sogmkkcwuamuqegw: $qcgkuqesqqymcuui = $this->miskeyiwqsgcqwwo(); break; case Constants::qomookamaskuoswk: $qcgkuqesqqymcuui = $this->qoqouugaaimaiqmi(); break; } return $qcgkuqesqqymcuui; } }
