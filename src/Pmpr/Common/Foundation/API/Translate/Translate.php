<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\57\x2c\x2b\x2f" => "\54", "\57\x5c\x5b\x2c\57" => "\133"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\150\x74\x74\160\x73\x3a\57\57\164\x72\x61\x6e\x73\154\141\x74\x65\56\147\x6f\x6f\147\x6c\145\x2e\143\x6f\155\x2f\x74\162\141\x6e\163\x6c\141\164\x65\137\141"; $this->ueqoossgegqyosem([ "\143\154\151\145\x6e\x74" => "\147\x74\x78", "\x68\x6c" => "\145\x6e", "\x64\164" => ["\164", "\142\x64", "\x61\x74", "\145\170", "\x6c\x64", "\x6d\144", "\x71\143\x61", "\x72\167", "\162\x6d", "\163\x73"], "\x73\154" => null, "\x74\154" => null, "\x71" => null, "\151\x65" => "\x55\x54\x46\55\70", "\x6f\x65" => "\x55\124\x46\x2d\70", "\x6d\165\154\164\x69\162\x65\163" => 1, "\x6f\x74\146" => 0, "\160\x63" => 1, "\164\162\163" => 1, "\163\163\145\154" => 0, "\x74\x73\145\154" => 0, "\x6b\143" => 1, "\x74\153" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\x61", string $egsumesakcaaukem = "\x65\x6e", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if (!$cmwygeyygwqaemaq) { goto kciouyuaqkyqomam; } if ($ccamueccusigaaio === $egsumesakcaaukem) { goto sycygoiaiqqageym; } try { $this->ueqoossgegqyosem(["\163\x6c" => $egsumesakcaaukem, "\x74\154" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\x2f\163\x69\x6e\x67\x6c\145", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) { goto igymseewwyiocoug; } $keccaugmemegoimu = [$keccaugmemegoimu]; igymseewwyiocoug: if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) { goto oouoqimaaqcmccay; } $coamwgceiiaocqmi = []; if (is_string($keccaugmemegoimu)) { goto kooskuwkuayiuose; } foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (!is_string($igqsaukqcqscimok)) { goto twkmiuomimomscew; } $coamwgceiiaocqmi[] = $igqsaukqcqscimok; twkmiuomimomscew: eyiamcekkgkiawqy: } mqccmesakuemceqi: kooskuwkuayiuose: if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { goto qwcegcuowwgiccos; } $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; qwcegcuowwgiccos: $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if (!$this->rkacqeomakmygemu($swaukaagekiououo)) { goto ieumumsgyguceusy; } $this->ekcqeousicimaeww($swaukaagekiououo); goto qcessicwuikwqsis; ieumumsgyguceusy: yssscwioiyygssec: } qcessicwuikwqsis: if (is_string($keccaugmemegoimu)) { goto ycakugokkqkuqyiu; } if (is_array($keccaugmemegoimu[0])) { goto coywmiyqgsweuiic; } $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; goto siqagquguiemuoku; coywmiyqgsweuiic: $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); siqagquguiemuoku: ycakugokkqkuqyiu: oouoqimaaqcmccay: goto gygawoqywkukmqee; sycygoiaiqqageym: $keccaugmemegoimu = $cmwygeyygwqaemaq; gygawoqywkukmqee: kciouyuaqkyqomam: return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) { goto wwkgkaecgiwggcck; } throw new UnexpectedValueException(__("\x44\141\x74\141\40\143\141\x6e\156\x6f\x74\40\x62\145\40\x64\145\143\157\x64\145\144\40\157\162\40\151\164\x20\x69\163\x20\144\x65\145\160\145\162\40\x74\x68\141\156\40\164\x68\x65\x20\x72\x65\143\165\x72\163\x69\157\156\x20\x6c\151\x6d\151\x74", PR__CMN__FOUNDATION)); wwkgkaecgiwggcck: return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\x2f\136\50\x5b\x61\55\172\135\x7b\62\x7d\x29\50\55\x5b\x41\55\132\135\173\62\175\x29\x3f\44\57", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\161"] ?? ''; if (!$qqmmggwcsmymegca) { goto umgaesggesswoaqe; } $this->ksiyskmggywgsayu("\164\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); umgaesggesswoaqe: parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
