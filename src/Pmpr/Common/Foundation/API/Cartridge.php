<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API; use Pmpr\Common\Foundation\Interfaces\Constants; use Psr\Http\Message\ResponseInterface; use WP_Error; class Cartridge extends API { const gmemigyyqkiuioew = "\143\x61\162\x74\162\x69\x64\147\x65\x5f\141\160\151\137\143\x75\x72\x72\x65\156\x74\137\x64\x6f\155\141\x69\x6e"; protected array $domains = []; public function __construct() { $this->ueakuaywsqiooygo(120); parent::__construct(); } public function wiqumkmqkqoycqyi() : array { return $this->domains; } public function iggeecowsiwyaooe(string $mokawwccycoiqeka) : self { $this->domains[] = $mokawwccycoiqeka; return $this; } public function next() : bool { $sogksuscggsicmac = false; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!($mokawwccycoiqeka = $this->wwawisckiqeueoua())) { goto goeoymmqqqeeoime; } $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi(); if (!(count($wqogggcaamgeiwew) > 1)) { goto qmiwsequckckoaei; } $this->ucuoiawgsicougqu($mokawwccycoiqeka); $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew, true); if (!($mokawwccycoiqeka = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wqogggcaamgeiwew, (int) $momcykaoccoymeig + 1))) { goto qgegkeomwscwwiuw; } $sogksuscggsicmac = $qkqgcaykemoiecma->update(self::gmemigyyqkiuioew, $mokawwccycoiqeka); $this->gyuwiwqqyesiekag($mokawwccycoiqeka); qgegkeomwscwwiuw: qmiwsequckckoaei: goeoymmqqqeeoime: if ($sogksuscggsicmac) { goto eiawsoasmscmqswa; } $qkqgcaykemoiecma->delete(self::gmemigyyqkiuioew); eiawsoasmscmqswa: return $sogksuscggsicmac; } public function wwawisckiqeueoua() : ?string { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::gmemigyyqkiuioew, $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->wiqumkmqkqoycqyi(), 0)); } public function send($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam) { $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto cuoqqgaygogsmmic; } if ($this->next()) { goto qmeoaqmsuseueqiy; } if (!$iswcokucwmiosiaq) { goto ickcmqoiosquugwe; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); ickcmqoiosquugwe: goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: sleep(2); $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); ygkcacsyyckescqs: cuoqqgaygogsmmic: return $keccaugmemegoimu; } public function ucuoiawgsicougqu($yeacayasgueouoqc) { } public function gyuwiwqqyesiekag($yeacayasgueouoqc) { } }
