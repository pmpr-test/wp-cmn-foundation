<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API; use Pmpr\Common\Foundation\Interfaces\Constants; use Psr\Http\Message\ResponseInterface; use WP_Error; class Cartridge extends API { const gmemigyyqkiuioew = "\x63\x61\x72\x74\162\151\144\x67\145\137\141\x70\151\x5f\x63\165\x72\x72\x65\156\x74\137\144\157\155\141\151\x6e"; protected array $domains = []; public function __construct() { $this->ueakuaywsqiooygo(120); parent::__construct(); } public function wiqumkmqkqoycqyi() : array { return $this->domains; } public function iggeecowsiwyaooe(string $mokawwccycoiqeka) : self { $this->domains[] = $mokawwccycoiqeka; return $this; } public function next() : bool { $sogksuscggsicmac = false; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!($mokawwccycoiqeka = $this->wwawisckiqeueoua())) { goto goeoymmqqqeeoime; } $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi(); if (!(count($wqogggcaamgeiwew) > 1)) { goto qmiwsequckckoaei; } $this->ucuoiawgsicougqu($mokawwccycoiqeka); $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew, true); if (!($mokawwccycoiqeka = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wqogggcaamgeiwew, (int) $momcykaoccoymeig + 1))) { goto qgegkeomwscwwiuw; } $sogksuscggsicmac = $qkqgcaykemoiecma->update(self::gmemigyyqkiuioew, $mokawwccycoiqeka); $this->gyuwiwqqyesiekag($mokawwccycoiqeka); qgegkeomwscwwiuw: qmiwsequckckoaei: goeoymmqqqeeoime: if ($sogksuscggsicmac) { goto eiawsoasmscmqswa; } $qkqgcaykemoiecma->delete(self::gmemigyyqkiuioew); eiawsoasmscmqswa: return $sogksuscggsicmac; } public function wwawisckiqeueoua() : ?string { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::gmemigyyqkiuioew, $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->wiqumkmqkqoycqyi(), 0)); } public function send($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam) { $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto cuoqqgaygogsmmic; } if ($this->next()) { goto qmeoaqmsuseueqiy; } if (!$iswcokucwmiosiaq) { goto ickcmqoiosquugwe; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); ickcmqoiosquugwe: goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: sleep(2); $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); ygkcacsyyckescqs: cuoqqgaygogsmmic: return $keccaugmemegoimu; } public function ucuoiawgsicougqu($yeacayasgueouoqc) { } public function gyuwiwqqyesiekag($yeacayasgueouoqc) { } }
