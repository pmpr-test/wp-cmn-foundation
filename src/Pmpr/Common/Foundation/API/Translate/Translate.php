<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16ae3d454f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\x2f\x2c\x2b\x2f" => "\x2c", "\x2f\x5c\133\x2c\57" => "\133"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\x68\164\164\x70\163\x3a\57\57\x74\162\141\x6e\163\154\141\164\x65\x2e\x67\x6f\x6f\x67\x6c\145\x2e\x63\157\x6d\57\x74\162\141\156\163\x6c\x61\164\x65\137\x61"; $this->ueqoossgegqyosem([ "\143\154\151\145\156\x74" => "\x67\x74\170", "\x68\x6c" => "\145\156", "\144\x74" => ["\164", "\142\x64", "\x61\164", "\145\170", "\154\144", "\x6d\144", "\x71\x63\141", "\162\167", "\162\155", "\x73\163"], "\x73\x6c" => null, "\164\x6c" => null, "\161" => null, "\151\x65" => "\125\124\106\x2d\70", "\x6f\x65" => "\x55\124\106\55\x38", "\155\x75\x6c\164\x69\162\x65\163" => 1, "\x6f\x74\x66" => 0, "\160\143" => 1, "\x74\x72\163" => 1, "\163\x73\145\154" => 0, "\x74\x73\145\x6c" => 0, "\x6b\x63" => 1, "\164\x6b" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\146\x61", string $egsumesakcaaukem = "\145\x6e", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if (!$cmwygeyygwqaemaq) { goto sycygoiaiqqageym; } if ($ccamueccusigaaio === $egsumesakcaaukem) { goto ycakugokkqkuqyiu; } try { $this->ueqoossgegqyosem(["\x73\154" => $egsumesakcaaukem, "\164\154" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\57\x73\x69\x6e\x67\x6c\145", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) { goto cgewcsueoyaeikgm; } $keccaugmemegoimu = [$keccaugmemegoimu]; cgewcsueoyaeikgm: if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) { goto siqagquguiemuoku; } $coamwgceiiaocqmi = []; if (is_string($keccaugmemegoimu)) { goto eyiamcekkgkiawqy; } foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (!is_string($igqsaukqcqscimok)) { goto mqccmesakuemceqi; } $coamwgceiiaocqmi[] = $igqsaukqcqscimok; mqccmesakuemceqi: igymseewwyiocoug: } sukskmcwsoysiuqu: eyiamcekkgkiawqy: if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { goto twkmiuomimomscew; } $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; twkmiuomimomscew: $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if (!$this->rkacqeomakmygemu($swaukaagekiououo)) { goto qcessicwuikwqsis; } $this->ekcqeousicimaeww($swaukaagekiououo); goto kooskuwkuayiuose; qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: if (is_string($keccaugmemegoimu)) { goto coywmiyqgsweuiic; } if (is_array($keccaugmemegoimu[0])) { goto yssscwioiyygssec; } $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; goto ieumumsgyguceusy; yssscwioiyygssec: $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); ieumumsgyguceusy: coywmiyqgsweuiic: siqagquguiemuoku: goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $keccaugmemegoimu = $cmwygeyygwqaemaq; oouoqimaaqcmccay: sycygoiaiqqageym: return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) { goto gygawoqywkukmqee; } throw new UnexpectedValueException(__("\104\x61\164\141\x20\143\x61\156\156\157\164\40\x62\x65\x20\x64\x65\143\x6f\x64\145\144\x20\x6f\162\x20\x69\164\40\x69\x73\40\x64\x65\145\x70\x65\x72\40\164\150\141\156\x20\164\150\145\x20\162\x65\x63\165\x72\163\151\157\156\40\x6c\x69\x6d\151\x74", PR__CMN__FOUNDATION)); gygawoqywkukmqee: return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\x2f\136\50\133\x61\55\x7a\135\173\x32\175\x29\x28\55\x5b\101\x2d\x5a\135\x7b\x32\x7d\x29\77\x24\57", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\161"] ?? ''; if (!$qqmmggwcsmymegca) { goto kciouyuaqkyqomam; } $this->ksiyskmggywgsayu("\164\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); kciouyuaqkyqomam: parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
