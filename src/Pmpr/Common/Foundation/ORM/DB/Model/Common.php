<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\ORM\Register; abstract class Common extends Model { protected Model $relatedModel; public function qkuoycokmukoscka() : Model { return $this->relatedModel; } public function __construct($ykyqqwuyuqeekuqw = null, ?array $siquossayskcwkea = []) { if (!$ykyqqwuyuqeekuqw instanceof Model) { goto icoiqskygugkgmkm; } $this->relatedModel = $ykyqqwuyuqeekuqw; parent::__construct($siquossayskcwkea); icoiqskygugkgmkm: } public function ecmkecmemkyqwogo() : Register { return $this->qkuoycokmukoscka()->oyeskqayoscwciem(); } public function iymiksyekgoqkosc() : string { return $this->ecmkecmemkyqwogo()->aiqioscoyukqgsgw() . Constants::mswocgcucqoaesaa; } public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->myysgyqcumekoueo()->qemeyueyiwgsokuc()->okgmqaeuaeymaocm($this->ecmkecmemkyqwogo()->ogqgmqymcwsqikme()); parent::ckgmycmaukqgkosk(); } }
