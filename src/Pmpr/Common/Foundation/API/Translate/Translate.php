<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d43c6c83e1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\x2f\x2c\x2b\57" => "\54", "\57\134\133\54\57" => "\x5b"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\150\164\x74\x70\x73\72\x2f\x2f\164\x72\141\156\163\154\x61\164\x65\56\x67\x6f\157\x67\x6c\x65\56\143\157\155\57\x74\x72\141\x6e\163\154\x61\x74\145\x5f\x61"; $this->ueqoossgegqyosem([ "\x63\154\151\145\156\164" => "\147\164\170", "\150\154" => "\145\156", "\x64\164" => ["\x74", "\x62\x64", "\141\x74", "\145\170", "\154\144", "\x6d\x64", "\x71\x63\x61", "\x72\167", "\162\x6d", "\163\x73"], "\x73\x6c" => null, "\164\154" => null, "\x71" => null, "\151\x65" => "\125\x54\106\x2d\70", "\157\x65" => "\125\124\x46\x2d\x38", "\x6d\x75\154\x74\x69\x72\145\163" => 1, "\x6f\164\146" => 0, "\x70\143" => 1, "\x74\162\163" => 1, "\163\163\145\x6c" => 0, "\x74\x73\145\x6c" => 0, "\153\143" => 1, "\x74\x6b" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\x61", string $egsumesakcaaukem = "\145\156", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if ($cmwygeyygwqaemaq) { if ($ccamueccusigaaio === $egsumesakcaaukem) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } else { try { $this->ueqoossgegqyosem(["\x73\154" => $egsumesakcaaukem, "\x74\154" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\x2f\x73\151\x6e\x67\154\x65", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (is_string($keccaugmemegoimu) && $keccaugmemegoimu != '') { $keccaugmemegoimu = [$keccaugmemegoimu]; } if (isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0]) { $coamwgceiiaocqmi = []; if (!is_string($keccaugmemegoimu)) { foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $coamwgceiiaocqmi[] = $igqsaukqcqscimok; } } } if (isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; } $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if ($this->rkacqeomakmygemu($swaukaagekiououo)) { $this->ekcqeousicimaeww($swaukaagekiououo); break; } } if (!is_string($keccaugmemegoimu)) { if (is_array($keccaugmemegoimu[0])) { $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); } else { $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; } } } } } return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null) { throw new UnexpectedValueException(__("\x44\141\x74\x61\40\143\x61\156\x6e\x6f\164\x20\x62\145\x20\144\145\x63\x6f\x64\145\144\x20\x6f\162\40\x69\164\x20\151\163\x20\x64\x65\145\160\145\x72\x20\164\x68\x61\x6e\40\x74\150\145\40\162\x65\143\x75\x72\163\151\x6f\156\40\x6c\x69\155\151\x74", PR__CMN__FOUNDATION)); } return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\57\x5e\x28\133\141\55\x7a\x5d\173\x32\x7d\51\50\x2d\x5b\x41\x2d\x5a\135\173\x32\175\51\77\44\57", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\161"] ?? ''; if ($qqmmggwcsmymegca) { $this->ksiyskmggywgsayu("\x74\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); } parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
