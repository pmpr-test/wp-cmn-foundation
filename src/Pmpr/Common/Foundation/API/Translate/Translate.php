<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672357217e291             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\57\54\53\x2f" => "\x2c", "\57\134\133\54\57" => "\133"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\150\x74\164\x70\163\x3a\57\x2f\164\x72\x61\x6e\x73\154\141\x74\x65\56\x67\x6f\157\x67\154\x65\56\x63\157\155\x2f\x74\162\x61\x6e\163\154\x61\164\x65\137\141"; $this->ueqoossgegqyosem([ "\x63\154\151\145\x6e\x74" => "\x67\x74\x78", "\x68\154" => "\145\156", "\x64\164" => ["\x74", "\142\144", "\x61\x74", "\145\170", "\x6c\x64", "\x6d\x64", "\x71\143\141", "\x72\x77", "\162\x6d", "\x73\x73"], "\163\154" => null, "\164\x6c" => null, "\x71" => null, "\x69\145" => "\125\x54\106\55\70", "\x6f\145" => "\x55\124\x46\x2d\x38", "\x6d\x75\x6c\164\x69\x72\145\163" => 1, "\157\x74\x66" => 0, "\x70\x63" => 1, "\x74\x72\x73" => 1, "\x73\x73\145\154" => 0, "\164\x73\145\x6c" => 0, "\153\143" => 1, "\164\x6b" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\x61", string $egsumesakcaaukem = "\x65\x6e", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if ($cmwygeyygwqaemaq) { if ($ccamueccusigaaio === $egsumesakcaaukem) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } else { try { $this->ueqoossgegqyosem(["\163\154" => $egsumesakcaaukem, "\x74\x6c" => $ccamueccusigaaio, "\161" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\x2f\x73\x69\156\147\154\x65", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (is_string($keccaugmemegoimu) && $keccaugmemegoimu != '') { $keccaugmemegoimu = [$keccaugmemegoimu]; } if (isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0]) { $coamwgceiiaocqmi = []; if (!is_string($keccaugmemegoimu)) { foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $coamwgceiiaocqmi[] = $igqsaukqcqscimok; } } } if (isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; } $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if ($this->rkacqeomakmygemu($swaukaagekiououo)) { $this->ekcqeousicimaeww($swaukaagekiououo); break; } } if (!is_string($keccaugmemegoimu)) { if (is_array($keccaugmemegoimu[0])) { $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); } else { $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; } } } } } return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null) { throw new UnexpectedValueException(__("\x44\141\x74\x61\40\x63\x61\x6e\x6e\157\164\x20\x62\145\40\144\145\143\157\x64\x65\144\x20\157\x72\x20\151\164\x20\x69\x73\40\144\x65\x65\x70\x65\162\40\164\150\141\x6e\x20\x74\150\145\40\x72\145\143\165\x72\163\151\157\x6e\40\154\x69\x6d\x69\164", PR__CMN__FOUNDATION)); } return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\x2f\136\x28\133\x61\55\x7a\x5d\173\62\175\51\x28\55\133\101\x2d\x5a\135\173\62\x7d\x29\x3f\x24\x2f", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\x71"] ?? ''; if ($qqmmggwcsmymegca) { $this->ksiyskmggywgsayu("\164\x6b", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); } parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
