<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ["\x2f\x2c\53\x2f" => "\x2c", "\x2f\x5c\x5b\x2c\57" => "\x5b"]; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = "\x68\x74\x74\160\163\x3a\57\57\164\x72\x61\x6e\163\x6c\x61\x74\x65\x2e\x67\x6f\157\147\154\145\56\143\157\155\x2f\164\162\141\156\163\x6c\x61\164\145\137\141"; $this->ueqoossgegqyosem([ "\143\154\x69\145\156\164" => "\147\164\x78", "\x68\154" => "\145\156", "\x64\164" => ["\164", "\142\x64", "\x61\164", "\x65\x78", "\x6c\x64", "\x6d\x64", "\161\143\141", "\162\167", "\162\x6d", "\x73\163"], "\x73\154" => null, "\x74\154" => null, "\161" => null, "\x69\x65" => "\125\x54\x46\x2d\70", "\x6f\145" => "\125\124\106\55\70", "\x6d\x75\x6c\x74\x69\x72\x65\x73" => 1, "\157\164\146" => 0, "\x70\x63" => 1, "\164\x72\163" => 1, "\163\163\145\154" => 0, "\x74\x73\145\x6c" => 0, "\153\143" => 1, "\x74\x6b" => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\x61", string $egsumesakcaaukem = "\x65\156", array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if (!$cmwygeyygwqaemaq) { goto sycygoiaiqqageym; } if ($ccamueccusigaaio === $egsumesakcaaukem) { goto ycakugokkqkuqyiu; } try { $this->ueqoossgegqyosem(["\163\x6c" => $egsumesakcaaukem, "\164\154" => $ccamueccusigaaio, "\161" => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get("\x2f\x73\x69\x6e\x67\x6c\x65", $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) { goto cgewcsueoyaeikgm; } $keccaugmemegoimu = [$keccaugmemegoimu]; cgewcsueoyaeikgm: if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) { goto siqagquguiemuoku; } $coamwgceiiaocqmi = []; if (is_string($keccaugmemegoimu)) { goto eyiamcekkgkiawqy; } foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (!is_string($igqsaukqcqscimok)) { goto mqccmesakuemceqi; } $coamwgceiiaocqmi[] = $igqsaukqcqscimok; mqccmesakuemceqi: igymseewwyiocoug: } sukskmcwsoysiuqu: eyiamcekkgkiawqy: if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { goto twkmiuomimomscew; } $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; twkmiuomimomscew: $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if (!$this->rkacqeomakmygemu($swaukaagekiououo)) { goto qcessicwuikwqsis; } $this->ekcqeousicimaeww($swaukaagekiououo); goto kooskuwkuayiuose; qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: if (is_string($keccaugmemegoimu)) { goto coywmiyqgsweuiic; } if (is_array($keccaugmemegoimu[0])) { goto yssscwioiyygssec; } $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; goto ieumumsgyguceusy; yssscwioiyygssec: $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); ieumumsgyguceusy: coywmiyqgsweuiic: siqagquguiemuoku: goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $keccaugmemegoimu = $cmwygeyygwqaemaq; oouoqimaaqcmccay: sycygoiaiqqageym: return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) { goto gygawoqywkukmqee; } throw new UnexpectedValueException(__("\x44\x61\x74\141\40\x63\x61\156\x6e\x6f\164\40\x62\145\40\144\x65\x63\157\x64\x65\144\x20\157\x72\40\x69\x74\x20\151\163\40\x64\x65\145\160\x65\162\x20\x74\150\141\x6e\x20\x74\x68\x65\40\162\145\x63\165\162\163\x69\157\156\x20\154\151\155\x69\164", PR__CMN__FOUNDATION)); gygawoqywkukmqee: return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match("\57\136\x28\x5b\x61\x2d\x7a\x5d\x7b\62\x7d\51\50\55\133\x41\x2d\132\x5d\x7b\x32\175\x29\x3f\44\x2f", $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()["\161"] ?? ''; if (!$qqmmggwcsmymegca) { goto kciouyuaqkyqomam; } $this->ksiyskmggywgsayu("\164\x6b", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); kciouyuaqkyqomam: parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
