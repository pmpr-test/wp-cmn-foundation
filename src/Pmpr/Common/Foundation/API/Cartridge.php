<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbd402ffa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API; use Pmpr\Common\Foundation\Interfaces\Constants; use Psr\Http\Message\ResponseInterface; use WP_Error; class Cartridge extends API { const gmemigyyqkiuioew = "\x63\x61\x72\x74\x72\x69\144\147\145\137\141\160\151\137\143\165\x72\162\145\x6e\x74\137\144\x6f\x6d\141\151\x6e"; protected array $domains = []; public function __construct() { $this->ueakuaywsqiooygo(120); parent::__construct(); } public function wiqumkmqkqoycqyi() : array { return $this->domains; } public function iggeecowsiwyaooe(string $mokawwccycoiqeka) : self { $this->domains[] = $mokawwccycoiqeka; return $this; } public function next() : bool { $sogksuscggsicmac = false; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if ($mokawwccycoiqeka = $this->wwawisckiqeueoua()) { $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi(); if (count($wqogggcaamgeiwew) > 1) { $this->ucuoiawgsicougqu($mokawwccycoiqeka); $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew, true); if ($mokawwccycoiqeka = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wqogggcaamgeiwew, (int) $momcykaoccoymeig + 1)) { $sogksuscggsicmac = $qkqgcaykemoiecma->update(self::gmemigyyqkiuioew, $mokawwccycoiqeka); $this->gyuwiwqqyesiekag($mokawwccycoiqeka); } } } if (!$sogksuscggsicmac) { $qkqgcaykemoiecma->delete(self::gmemigyyqkiuioew); } return $sogksuscggsicmac; } public function wwawisckiqeueoua() : ?string { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::gmemigyyqkiuioew, $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->wiqumkmqkqoycqyi(), 0)); } public function send($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam) { $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { if ($this->next()) { sleep(2); $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); } else { if ($iswcokucwmiosiaq) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } } } return $keccaugmemegoimu; } public function ucuoiawgsicougqu($yeacayasgueouoqc) { } public function gyuwiwqqyesiekag($yeacayasgueouoqc) { } }
