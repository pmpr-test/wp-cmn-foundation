<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67977684bcc9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\57\x2c\53\57" => "\x2c", "\x2f\134\x5b\x2c\57" => "\x5b"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\150\164\164\160\163\72\x2f\57\x74\x72\141\x6e\x73\x6c\141\164\x65\56\147\x6f\157\147\x6c\145\56\x63\157\x6d\x2f\164\x72\141\156\163\154\x61\164\x65\137\141"; $this->ueqoossgegqyosem([ "\143\x6c\151\x65\156\164" => "\147\x74\170", "\150\x6c" => "\x65\156", "\144\x74" => ["\164", "\x62\144", "\141\x74", "\145\170", "\x6c\x64", "\155\x64", "\x71\x63\x61", "\x72\x77", "\x72\x6d", "\163\163"], "\x73\x6c" => null, "\164\154" => null, "\x71" => null, "\151\x65" => "\125\124\106\55\70", "\x6f\145" => "\125\x54\106\55\x38", "\155\165\x6c\x74\x69\162\145\163" => 1, "\157\164\146" => 0, "\x70\143" => 1, "\164\162\163" => 1, "\x73\x73\145\x6c" => 0, "\164\x73\x65\x6c" => 0, "\x6b\x63" => 1, "\x74\153" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\141", string $egsumesakcaaukem = "\145\156", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if ($cmwygeyygwqaemaq) { if ($ccamueccusigaaio === $egsumesakcaaukem) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } else { try { $this->ueqoossgegqyosem(["\x73\x6c" => $egsumesakcaaukem, "\164\154" => $ccamueccusigaaio, "\161" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\x2f\x73\x69\156\x67\154\145", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (is_string($keccaugmemegoimu) && $keccaugmemegoimu != '') { $keccaugmemegoimu = [$keccaugmemegoimu]; } if (isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0]) { $coamwgceiiaocqmi = []; if (!is_string($keccaugmemegoimu)) { foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $coamwgceiiaocqmi[] = $igqsaukqcqscimok; } } } if (isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; } $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if ($this->rkacqeomakmygemu($swaukaagekiououo)) { $this->ekcqeousicimaeww($swaukaagekiououo); break; } } if (!is_string($keccaugmemegoimu)) { if (is_array($keccaugmemegoimu[0])) { $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); } else { $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; } } } } } return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null) { throw new UnexpectedValueException(__("\x44\x61\164\x61\x20\143\x61\x6e\156\157\x74\40\x62\145\40\x64\145\x63\157\x64\145\144\40\x6f\162\40\151\164\40\151\163\x20\x64\x65\x65\x70\145\x72\40\x74\x68\141\x6e\x20\164\x68\x65\40\x72\x65\x63\165\x72\163\151\157\x6e\40\154\151\x6d\151\164", PR__CMN__FOUNDATION)); } return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\x2f\136\x28\x5b\x61\x2d\x7a\135\173\62\x7d\x29\x28\55\133\x41\55\132\x5d\x7b\x32\175\51\x3f\44\57", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\161"] ?? ''; if ($qqmmggwcsmymegca) { $this->ksiyskmggywgsayu("\164\x6b", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); } parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
