<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\x2f\54\53\57" => "\x2c", "\x2f\134\133\54\57" => "\133"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\x68\164\164\160\x73\x3a\57\57\164\x72\141\156\163\x6c\141\x74\x65\56\x67\157\157\x67\154\x65\56\143\x6f\x6d\57\164\162\141\x6e\x73\154\141\x74\x65\137\141"; $this->ueqoossgegqyosem([ "\x63\x6c\151\x65\x6e\x74" => "\147\x74\x78", "\150\x6c" => "\145\156", "\x64\164" => ["\x74", "\x62\x64", "\141\164", "\x65\170", "\154\x64", "\x6d\x64", "\161\143\141", "\x72\167", "\x72\155", "\x73\x73"], "\x73\x6c" => null, "\164\154" => null, "\x71" => null, "\151\x65" => "\x55\x54\x46\55\x38", "\157\145" => "\x55\x54\x46\x2d\x38", "\x6d\x75\x6c\164\x69\x72\x65\163" => 1, "\157\x74\x66" => 0, "\x70\x63" => 1, "\164\x72\x73" => 1, "\x73\x73\145\x6c" => 0, "\164\x73\x65\154" => 0, "\153\143" => 1, "\x74\153" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\146\141", string $egsumesakcaaukem = "\x65\156", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if (!$cmwygeyygwqaemaq) { goto sycygoiaiqqageym; } if ($ccamueccusigaaio === $egsumesakcaaukem) { goto ycakugokkqkuqyiu; } try { $this->ueqoossgegqyosem(["\x73\154" => $egsumesakcaaukem, "\164\154" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\57\163\x69\x6e\x67\x6c\x65", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) { goto cgewcsueoyaeikgm; } $keccaugmemegoimu = [$keccaugmemegoimu]; cgewcsueoyaeikgm: if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) { goto siqagquguiemuoku; } $coamwgceiiaocqmi = []; if (is_string($keccaugmemegoimu)) { goto eyiamcekkgkiawqy; } foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (!is_string($igqsaukqcqscimok)) { goto mqccmesakuemceqi; } $coamwgceiiaocqmi[] = $igqsaukqcqscimok; mqccmesakuemceqi: igymseewwyiocoug: } sukskmcwsoysiuqu: eyiamcekkgkiawqy: if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { goto twkmiuomimomscew; } $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; twkmiuomimomscew: $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if (!$this->rkacqeomakmygemu($swaukaagekiououo)) { goto qcessicwuikwqsis; } $this->ekcqeousicimaeww($swaukaagekiououo); goto kooskuwkuayiuose; qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: if (is_string($keccaugmemegoimu)) { goto coywmiyqgsweuiic; } if (is_array($keccaugmemegoimu[0])) { goto yssscwioiyygssec; } $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; goto ieumumsgyguceusy; yssscwioiyygssec: $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); ieumumsgyguceusy: coywmiyqgsweuiic: siqagquguiemuoku: goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $keccaugmemegoimu = $cmwygeyygwqaemaq; oouoqimaaqcmccay: sycygoiaiqqageym: return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) { goto gygawoqywkukmqee; } throw new UnexpectedValueException(__("\x44\141\164\x61\x20\x63\141\x6e\x6e\x6f\164\x20\142\145\40\x64\145\143\x6f\144\x65\144\x20\x6f\162\40\x69\x74\x20\151\x73\x20\144\x65\145\x70\x65\162\40\x74\150\x61\x6e\40\164\x68\145\x20\x72\x65\x63\x75\162\163\x69\x6f\x6e\x20\x6c\x69\x6d\x69\x74", PR__CMN__FOUNDATION)); gygawoqywkukmqee: return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\x2f\x5e\x28\x5b\141\55\172\135\x7b\x32\x7d\51\50\55\x5b\101\x2d\132\135\173\x32\175\x29\77\x24\57", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\161"] ?? ''; if (!$qqmmggwcsmymegca) { goto kciouyuaqkyqomam; } $this->ksiyskmggywgsayu("\x74\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); kciouyuaqkyqomam: parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
