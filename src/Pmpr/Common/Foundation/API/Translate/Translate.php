<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\57\x2c\x2b\57" => "\x2c", "\x2f\x5c\133\x2c\57" => "\x5b"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\150\164\x74\160\x73\x3a\57\57\164\x72\x61\156\163\154\x61\164\x65\56\147\157\157\147\x6c\x65\x2e\143\157\x6d\57\x74\x72\x61\156\163\154\141\x74\x65\x5f\141"; $this->ueqoossgegqyosem([ "\143\154\x69\x65\156\x74" => "\x67\164\x78", "\x68\154" => "\145\156", "\x64\x74" => ["\x74", "\x62\144", "\141\x74", "\x65\170", "\154\144", "\155\144", "\x71\143\141", "\162\x77", "\x72\155", "\163\x73"], "\163\x6c" => null, "\x74\x6c" => null, "\x71" => null, "\x69\145" => "\x55\124\x46\55\70", "\x6f\x65" => "\125\x54\106\55\x38", "\155\165\x6c\164\151\162\145\163" => 1, "\157\x74\146" => 0, "\160\x63" => 1, "\x74\x72\163" => 1, "\163\163\145\154" => 0, "\x74\x73\145\154" => 0, "\153\143" => 1, "\x74\x6b" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\x61", string $egsumesakcaaukem = "\x65\x6e", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if (!$cmwygeyygwqaemaq) { goto awkmmuyuakwiaqae; } if ($ccamueccusigaaio === $egsumesakcaaukem) { goto aiaayumowqswqqqk; } try { $this->ueqoossgegqyosem(["\x73\x6c" => $egsumesakcaaukem, "\164\154" => $ccamueccusigaaio, "\161" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\x2f\x73\x69\156\x67\x6c\145", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) { goto kmgoiquwmsayywsc; } $keccaugmemegoimu = [$keccaugmemegoimu]; kmgoiquwmsayywsc: if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) { goto wkgmgumyswiayyae; } $coamwgceiiaocqmi = []; if (is_string($keccaugmemegoimu)) { goto gkmgqmcgouseqwyg; } foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (!is_string($igqsaukqcqscimok)) { goto iwcsismeakueeiya; } $coamwgceiiaocqmi[] = $igqsaukqcqscimok; iwcsismeakueeiya: eqmcakqmqkqkweww: } gcgckeksyymcgays: gkmgqmcgouseqwyg: if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { goto emsqksecccqeueoa; } $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; emsqksecccqeueoa: $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if (!$this->rkacqeomakmygemu($swaukaagekiououo)) { goto eocaacmwsqqqauuc; } $this->ekcqeousicimaeww($swaukaagekiououo); goto ogmueiimgsogucqa; eocaacmwsqqqauuc: kyoogyegwukaqoce: } ogmueiimgsogucqa: if (is_string($keccaugmemegoimu)) { goto smqeaeiimomewqsw; } if (is_array($keccaugmemegoimu[0])) { goto maougsuwuoiecwgy; } $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; goto pseqauyuqgmccuwe; maougsuwuoiecwgy: $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); pseqauyuqgmccuwe: smqeaeiimomewqsw: wkgmgumyswiayyae: goto swmeecwwakawqqcw; aiaayumowqswqqqk: $keccaugmemegoimu = $cmwygeyygwqaemaq; swmeecwwakawqqcw: awkmmuyuakwiaqae: return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) { goto qogogggqiuuewakw; } throw new UnexpectedValueException(__("\x44\x61\x74\141\x20\x63\141\x6e\156\x6f\x74\40\142\x65\40\x64\145\143\x6f\x64\145\x64\x20\157\x72\x20\x69\x74\40\151\163\40\x64\145\145\x70\x65\162\x20\164\x68\141\156\x20\x74\x68\x65\x20\162\145\x63\x75\x72\x73\x69\157\156\x20\x6c\x69\x6d\151\x74", PR__CMN__FOUNDATION)); qogogggqiuuewakw: return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\x2f\x5e\x28\133\x61\55\172\135\x7b\62\x7d\x29\x28\x2d\133\x41\55\132\135\173\62\175\51\x3f\x24\x2f", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\x71"] ?? ''; if (!$qqmmggwcsmymegca) { goto tokguaiieequuwwa; } $this->ksiyskmggywgsayu("\x74\x6b", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); tokguaiieequuwwa: parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
