<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d8ad41a06             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\x2f\54\53\x2f" => "\x2c", "\57\134\x5b\54\57" => "\x5b"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\x68\164\164\160\163\x3a\x2f\57\x74\x72\141\156\x73\x6c\141\x74\145\x2e\147\x6f\x6f\147\154\145\x2e\143\x6f\155\x2f\x74\162\141\x6e\163\154\141\x74\145\x5f\141"; $this->ueqoossgegqyosem([ "\x63\154\151\x65\x6e\164" => "\147\164\170", "\x68\154" => "\x65\156", "\x64\164" => ["\x74", "\142\144", "\x61\x74", "\145\170", "\x6c\144", "\155\144", "\x71\x63\141", "\162\x77", "\162\x6d", "\x73\x73"], "\163\x6c" => null, "\164\154" => null, "\161" => null, "\151\145" => "\x55\124\106\55\x38", "\x6f\145" => "\125\x54\106\x2d\70", "\155\x75\x6c\164\151\162\145\163" => 1, "\157\x74\x66" => 0, "\160\143" => 1, "\x74\162\x73" => 1, "\x73\163\145\x6c" => 0, "\164\163\145\x6c" => 0, "\x6b\143" => 1, "\164\x6b" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\141", string $egsumesakcaaukem = "\x65\x6e", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if ($cmwygeyygwqaemaq) { if ($ccamueccusigaaio === $egsumesakcaaukem) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } else { try { $this->ueqoossgegqyosem(["\x73\154" => $egsumesakcaaukem, "\x74\154" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\57\x73\x69\x6e\147\154\145", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (is_string($keccaugmemegoimu) && $keccaugmemegoimu != '') { $keccaugmemegoimu = [$keccaugmemegoimu]; } if (isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0]) { $coamwgceiiaocqmi = []; if (!is_string($keccaugmemegoimu)) { foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $coamwgceiiaocqmi[] = $igqsaukqcqscimok; } } } if (isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; } $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if ($this->rkacqeomakmygemu($swaukaagekiououo)) { $this->ekcqeousicimaeww($swaukaagekiououo); break; } } if (!is_string($keccaugmemegoimu)) { if (is_array($keccaugmemegoimu[0])) { $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); } else { $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; } } } } } return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null) { throw new UnexpectedValueException(__("\104\x61\164\x61\40\143\141\156\156\157\164\x20\142\x65\40\144\x65\143\x6f\144\145\144\x20\157\x72\40\x69\x74\x20\151\163\40\144\x65\145\x70\x65\162\x20\164\x68\x61\156\40\x74\x68\x65\40\162\x65\143\165\162\163\x69\157\156\x20\154\151\155\x69\164", PR__CMN__FOUNDATION)); } return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\57\136\50\133\141\55\x7a\135\173\x32\x7d\x29\50\x2d\133\x41\x2d\132\135\173\x32\175\51\77\x24\57", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\x71"] ?? ''; if ($qqmmggwcsmymegca) { $this->ksiyskmggywgsayu("\164\x6b", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); } parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
