<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da3806785e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API; use GuzzleHttp\Client; use GuzzleHttp\Exception\GuzzleException; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Psr\Http\Message\ResponseInterface; use Psr\Http\Message\StreamInterface; use WP_Error; class API extends Container { const akskysmqaiomagks = "\101\x63\x63\145\160\x74"; const kugiewcgiawaeiaq = "\146\157\162\x6d\137\160\x61\x72\141\x6d\163"; const mkoswouckomsusco = "\x61\160\x70\154\x69\x63\141\x74\151\x6f\x6e\57\152\x73\x6f\156"; protected array $options = []; protected array $queries = []; protected ?string $domain = null; protected ?string $accept = null; protected ?Client $client = null; public function __construct() { $this->client = new Client(["\x63\157\x6f\x6b\x69\145\163" => true]); $this->uioseiweuqceuekm(); parent::__construct(); } public function wmciwsucuuyumkes() : ?Client { return $this->client; } public function saegmcouuukeykgi($keccaugmemegoimu, $ewgwqamkygiqaawc = false) { $kuukgsmqkagwaciu = ''; if ($keccaugmemegoimu instanceof ResponseInterface) { $kuukgsmqkagwaciu = $keccaugmemegoimu->getBody(); if ($ewgwqamkygiqaawc) { $kuukgsmqkagwaciu = $kuukgsmqkagwaciu->getContents(); } } return $kuukgsmqkagwaciu; } public function wkaoyeoamyiacyeg($keccaugmemegoimu) : int { $iueymcwwscwqkiyq = 400; if ($keccaugmemegoimu instanceof ResponseInterface) { $iueymcwwscwqkiyq = $keccaugmemegoimu->getStatusCode(); } return $iueymcwwscwqkiyq; } public function wemyikwikgwqwuoc() { return $this->wmciwsucuuyumkes()->getConfig("\x63\157\x6f\153\x69\145\163"); } public function eammiwsquyqgimgg($xeciwimgioieayek, $qiouiwasaauyaaue = []) { try { $keccaugmemegoimu = $this->wmciwsucuuyumkes()->post($xeciwimgioieayek, $qiouiwasaauyaaue); } catch (GuzzleException $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai); } return $keccaugmemegoimu; } public function wiwocsyueqyyakmy($xeciwimgioieayek, $oscwiysckseeekwy, $coukcycywgqywsaw, $qiouiwasaauyaaue = []) { return $this->wmciwsucuuyumkes()->postAsync($xeciwimgioieayek, $qiouiwasaauyaaue)->then($oscwiysckseeekwy, $coukcycywgqywsaw)->wait(); } public function iwoewaiwqaisaagy() : self { $this->mqgsiacoqqwiqiiy(self::mkoswouckomsusco); return $this; } public function uioseiweuqceuekm() : self { $this->wsyymykqcoucagma(self::mkoswouckomsusco); return $this; } public function mqgsiacoqqwiqiiy($sqeykgyoooqysmca) : self { $this->kiaqywwoysssqgig("\x43\x6f\x6e\x74\145\156\x74\x2d\124\171\x70\145", $sqeykgyoooqysmca); return $this; } public function wsyymykqcoucagma($sqeykgyoooqysmca) : self { $this->kiaqywwoysssqgig(self::akskysmqaiomagks, $sqeykgyoooqysmca); return $this; } public function wwawisckiqeueoua() : ?string { return $this->domain; } public function suyquyoaausqsuay(?string $mokawwccycoiqeka) : self { $this->domain = $mokawwccycoiqeka; return $this; } public function gkwkqmwweiawigae() : array { return $this->options; } public function kesomeowemmyygey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->options = $this->sgkkiikkkaqmacie($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $this; } public function gmsemuiwicucmcok($uusmaiomayssaecw, $ggauoeuaesiymgee = '') { $uykgysuswksgmwqy = $this->giiuwsmyumqwwiyq(Constants::gmosckicggqkicim, []); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uykgysuswksgmwqy, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = '') { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->options, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ueakuaywsqiooygo($yyymasqmuyocqqwo) : self { $this->kesomeowemmyygey("\x74\151\155\145\x6f\165\x74", $yyymasqmuyocqqwo); return $this; } public function kiaqywwoysssqgig($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->ckmkymaiykwyokym([$uusmaiomayssaecw => $eqgoocgaqwqcimie]); return $this; } public function ckmkymaiykwyokym($uykgysuswksgmwqy = []) : self { $this->kesomeowemmyygey(Constants::gmosckicggqkicim, $uykgysuswksgmwqy); return $this; } public function amskqmemsacmksye($mgegoogckgsumooq, string $yuwymayicwwqiske = "\102\x65\x61\162\x65\162\x20") : self { return $this->kiaqywwoysssqgig("\101\x75\164\x68\157\x72\x69\172\141\x74\x69\157\x6e", $yuwymayicwwqiske . $mgegoogckgsumooq); } public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array { $igqsaukqcqscimok = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, $uusmaiomayssaecw); if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) { $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } else { if (is_array($igqsaukqcqscimok)) { $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie); } } return $uomewyckeuqoqocu; } public function ksqekagyyameaceq() : array { return $this->queries; } public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self { $uoomaookgsyciacm = $this->ksqekagyyameaceq(); if (!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom) { $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom); } return $this; } public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self { foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) { $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom); } return $this; } private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array { $uoomaookgsyciacm = $this->ksqekagyyameaceq(); if ($uoomaookgsyciacm) { $qiouiwasaauyaaue["\161\x75\145\x72\x79"] = preg_replace("\x2f\45\65\x42\50\x3f\72\x5b\x30\x2d\71\135\x7c\133\61\55\71\135\133\x30\x2d\71\x5d\53\51\x25\65\104\75\x2f", "\x3d", http_build_query($uoomaookgsyciacm)); } return $qiouiwasaauyaaue; } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $this->kiaqywwoysssqgig("\125\x73\x65\x72\x2d\x41\147\x65\x6e\164", $this->sscegwueamckwmcy("\x68\x74\x74\160\137\150\145\x61\144\x65\x72\163\137\x75\163\x65\162\x61\147\x65\x6e\164", '')); } public function send($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam) { try { if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { $this->ksiyskmggywgsayu("\130\x44\105\102\125\x47\137\123\105\x53\x53\x49\x4f\116\x5f\x53\x54\x41\x52\x54", "\120\110\120\x53\x54\117\122\x4d"); } $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); $this->kiaqywwoysssqgig(Constants::igecewwoemccgwsq, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue); $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue); $kgccggmwkeukkkci = null; $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($xeciwimgioieayek)) { $kgccggmwkeukkkci = $xeciwimgioieayek; } else { if ($mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua())) { $kgccggmwkeukkkci = "{$mokawwccycoiqeka}{$xeciwimgioieayek}"; } } if ($kgccggmwkeukkkci && $cwaqscoiqkokyase->wmcwegoisyeeosqu($kgccggmwkeukkkci)) { $qiouiwasaauyaaue["\x68\x74\x74\x70\137\145\x72\162\x6f\x72\163"] = false; $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($kgccggmwkeukkkci, $qiouiwasaauyaaue); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x25\163\x20\151\163\40\x6e\157\164\40\141\40\x76\x61\x6c\151\x64\x20\145\x6e\144\x70\x6f\x69\156\x74", PR__CMN__FOUNDATION), $kgccggmwkeukkkci)); } } catch (GuzzleException $wgaoewqkwgomoaai) { $aagguieukukuysce = $this->caokeucsksukesyo()->euekiyuksecoccus(); $keccaugmemegoimu = $aagguieukukuysce->gosmqcmmomkqwmis($wgaoewqkwgomoaai); $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x41\x50\111\x20\x25\163\x20\122\145\x71\165\145\163\164\40\x45\x72\162\157\x72\72\x20\45\163", strtoupper($qgciuiagkkguykgs), $aagguieukukuysce->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $keccaugmemegoimu; } public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue); } public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, Constants::mswoacegomcucaik); } public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\x61\164\x63\150"); } public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\144\145\x6c\x65\164\x65"); } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $sogksuscggsicmac = $this->saegmcouuukeykgi($keccaugmemegoimu); switch ($this->gmsemuiwicucmcok(self::akskysmqaiomagks)) { case self::mkoswouckomsusco: $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($sogksuscggsicmac); break; } return $sogksuscggsicmac; } public function eqkieiagqmugguew($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam, bool $muukeaaskkiceykc = true) { $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq, $amkukiggyuqwkuyo)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($muukeaaskkiceykc) { $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); if (!$kigowwqauiumummw) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $sogksuscggsicmac; } public function occymigcemkqucuw($keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = Constants::eoskkkieowogacws) : bool { $ksaameoqigiaoigg = false; $iueymcwwscwqkiyq = $this->wkaoyeoamyiacyeg($keccaugmemegoimu); if (!$keccaugmemegoimu instanceof ResponseInterface) { if (is_string($keccaugmemegoimu) || is_wp_error($keccaugmemegoimu)) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu); } else { $iswcokucwmiosiaq .= __("\x52\145\x73\160\x6f\x6e\163\145\x20\x69\x73\40\x6e\x6f\x74\x20\166\x61\x6c\x69\x64", PR__CMN__FOUNDATION); } } else { if ($iueymcwwscwqkiyq !== 200) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->saegmcouuukeykgi($keccaugmemegoimu, true)); $iswcokucwmiosiaq = $smgooosyoeqwcaeg[$qeweemoqwwsoumeg] ?? ''; switch ($iueymcwwscwqkiyq) { case 400: case 403: if ($smgooosyoeqwcaeg) { $icwicymcioeyeyek = [Constants::vswoiouoaykswgym => $gkyciwoiiisgywcs->get($smgooosyoeqwcaeg, Constants::vswoiouoaykswgym), Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]; } if (!$iswcokucwmiosiaq) { $iswcokucwmiosiaq = $this->saegmcouuukeykgi($keccaugmemegoimu); } break; } } else { $ksaameoqigiaoigg = true; } } return $ksaameoqigiaoigg; } public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee, ?string $csowmwgiiyueuius = Constants::ckcawaoawwioqecq, ?string $aqogmkcqyeosckkm = Constants::iwyueouqaqegmcas) : bool { $eisqsskqimiigkay = false; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (is_wp_error($sogksuscggsicmac)) { $wumguikkgaigkoee = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); } else { if (!$gkyciwoiiisgywcs->get($sogksuscggsicmac, $csowmwgiiyueuius)) { $ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, $aqogmkcqyeosckkm, []); if (is_array($ueeagokqmgisgauy)) { foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $wumguikkgaigkoee[] = sprintf("\45\x73\40\x28\45\x73\x3a\40\45\x73\51", $gkyciwoiiisgywcs->get($iswcokucwmiosiaq, Constants::eoskkkieowogacws), __("\x45\162\162\x6f\162\x20\x43\157\x64\145", PR__CMN__FOUNDATION), $gkyciwoiiisgywcs->get($iswcokucwmiosiaq, Constants::vswoiouoaykswgym)); } } else { if (is_string($ueeagokqmgisgauy)) { $wumguikkgaigkoee .= $ueeagokqmgisgauy; } } } else { $eisqsskqimiigkay = true; } } return $eisqsskqimiigkay; } public function saeuwmoyaekkseok($mkomwsiykqigmqca) : string { return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->swyekyumuyeuouwi() . $mkomwsiykqigmqca; } }
