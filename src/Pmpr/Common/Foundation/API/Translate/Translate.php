<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a9fe543e50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\x2f\x2c\x2b\57" => "\x2c", "\x2f\134\133\x2c\x2f" => "\133"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\x68\x74\x74\160\163\x3a\x2f\x2f\164\x72\x61\x6e\x73\154\141\164\145\x2e\x67\x6f\157\x67\154\145\56\x63\x6f\155\57\x74\162\141\x6e\x73\154\141\x74\145\x5f\141"; $this->ueqoossgegqyosem([ "\x63\x6c\x69\x65\156\164" => "\147\164\170", "\150\x6c" => "\145\156", "\x64\x74" => ["\164", "\x62\x64", "\141\x74", "\x65\170", "\x6c\x64", "\155\144", "\x71\143\141", "\x72\x77", "\162\x6d", "\163\163"], "\163\x6c" => null, "\164\154" => null, "\161" => null, "\x69\x65" => "\125\124\106\x2d\70", "\x6f\x65" => "\x55\124\x46\55\70", "\x6d\165\x6c\164\151\x72\145\163" => 1, "\x6f\164\x66" => 0, "\x70\143" => 1, "\164\x72\163" => 1, "\x73\x73\145\154" => 0, "\x74\163\145\x6c" => 0, "\153\x63" => 1, "\164\x6b" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\146\141", string $egsumesakcaaukem = "\145\x6e", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if ($cmwygeyygwqaemaq) { if ($ccamueccusigaaio === $egsumesakcaaukem) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } else { try { $this->ueqoossgegqyosem(["\163\x6c" => $egsumesakcaaukem, "\164\x6c" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\x2f\163\x69\x6e\x67\x6c\x65", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (is_string($keccaugmemegoimu) && $keccaugmemegoimu != '') { $keccaugmemegoimu = [$keccaugmemegoimu]; } if (isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0]) { $coamwgceiiaocqmi = []; if (!is_string($keccaugmemegoimu)) { foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $coamwgceiiaocqmi[] = $igqsaukqcqscimok; } } } if (isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; } $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if ($this->rkacqeomakmygemu($swaukaagekiououo)) { $this->ekcqeousicimaeww($swaukaagekiououo); break; } } if (!is_string($keccaugmemegoimu)) { if (is_array($keccaugmemegoimu[0])) { $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); } else { $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; } } } } } return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null) { throw new UnexpectedValueException(__("\104\141\x74\141\40\x63\x61\x6e\x6e\157\164\40\142\x65\x20\144\x65\143\157\x64\145\x64\x20\157\162\40\x69\164\40\151\x73\x20\144\x65\x65\x70\145\162\x20\164\150\141\x6e\40\164\150\x65\x20\162\x65\143\x75\162\x73\151\157\x6e\40\154\151\x6d\151\164", PR__CMN__FOUNDATION)); } return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\57\136\x28\133\141\55\172\135\x7b\x32\175\51\50\55\x5b\x41\55\132\135\173\62\x7d\x29\77\44\x2f", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\x71"] ?? ''; if ($qqmmggwcsmymegca) { $this->ksiyskmggywgsayu("\x74\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); } parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
