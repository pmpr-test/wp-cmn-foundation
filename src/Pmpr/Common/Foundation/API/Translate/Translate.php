<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b6ff7ddcde4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate; use Exception; use Pmpr\Common\Foundation\API\API; use Pmpr\Common\Foundation\API\Translate\Token\Generator; use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface; use Psr\Http\Message\ResponseInterface; use UnexpectedValueException; class Translate extends API { const owmmksuagawcowgi = ['/,+/' => ',', '/\\[,/' => '[']; protected ?string $lastDetectedSource = null; protected ?GeneratorInterface $token = null; public function __construct() { $this->token = new Generator(); $this->domain = 'https://translate.google.com/translate_a'; $this->ueqoossgegqyosem([ 'client' => 'gtx', 'hl' => 'en', 'dt' => ['t', 'bd', 'at', 'ex', 'ld', 'md', 'qca', 'rw', 'rm', 'ss'], 'sl' => null, 'tl' => null, 'q' => null, 'ie' => 'UTF-8', 'oe' => 'UTF-8', 'multires' => 1, 'otf' => 0, 'pc' => 1, 'trs' => 1, 'ssel' => 0, 'tsel' => 0, 'kc' => 1, 'tk' => null, ]); parent::__construct(); } public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = 'fa', string $egsumesakcaaukem = 'en', array $qiouiwasaauyaaue = []) { $keccaugmemegoimu = $cmwygeyygwqaemaq; if ($cmwygeyygwqaemaq) { if ($ccamueccusigaaio === $egsumesakcaaukem) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } else { try { $this->ueqoossgegqyosem(['sl' => $egsumesakcaaukem, 'tl' => $ccamueccusigaaio, 'q' => $cmwygeyygwqaemaq], true); $keccaugmemegoimu = $this->get('/single', $qiouiwasaauyaaue); $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $cmwygeyygwqaemaq; } if (is_string($keccaugmemegoimu) && $keccaugmemegoimu != '') { $keccaugmemegoimu = [$keccaugmemegoimu]; } if (isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0]) { $coamwgceiiaocqmi = []; if (!is_string($keccaugmemegoimu)) { foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $coamwgceiiaocqmi[] = $igqsaukqcqscimok; } } } if (isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) { $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0]; } $this->ekcqeousicimaeww(null); foreach ($coamwgceiiaocqmi as $swaukaagekiououo) { if ($this->rkacqeomakmygemu($swaukaagekiououo)) { $this->ekcqeousicimaeww($swaukaagekiououo); break; } } if (!is_string($keccaugmemegoimu)) { if (is_array($keccaugmemegoimu[0])) { $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) { $ouameqkugmqkussm .= $igqsaukqcqscimok[0]; return $ouameqkugmqkussm; }); } else { $keccaugmemegoimu = (string) $keccaugmemegoimu[0]; } } } } } return $keccaugmemegoimu; } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $kuukgsmqkagwaciu = $this->saegmcouuukeykgi($keccaugmemegoimu); $oouuuwawmuaayiku = preg_replace(array_keys(self::owmmksuagawcowgi), array_values(self::owmmksuagawcowgi), $kuukgsmqkagwaciu); if (($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null) { throw new UnexpectedValueException(__('Data cannot be decoded or it is deeper than the recursion limit', PR__CMN__FOUNDATION)); } return $kuukgsmqkagwaciu; } public function sygeeqgwywmygsyu() : ?GeneratorInterface { return $this->token; } public function eksymsucwkowwise() : ?string { return $this->lastDetectedSource; } private function rkacqeomakmygemu(string $locale) : bool { return (bool) preg_match('/^([a-z]{2})(-[A-Z]{2})?$/', $locale); } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $qqmmggwcsmymegca = $this->ksqekagyyameaceq()['q'] ?? ''; if ($qqmmggwcsmymegca) { $this->ksiyskmggywgsayu('tk', $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true); } parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self { $this->lastDetectedSource = $gesecasgkkioeega; return $this; } }
