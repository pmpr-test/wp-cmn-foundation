<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7a86a94f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API; use GuzzleHttp\Client; use GuzzleHttp\Exception\GuzzleException; use Pmpr\Common\Foundation\Interfaces\Constants; use Psr\Http\Message\ResponseInterface; use Psr\Http\Message\StreamInterface; use WP_Error; class API extends Common { const akskysmqaiomagks = "\101\143\x63\145\x70\x74"; const kugiewcgiawaeiaq = "\146\x6f\162\x6d\137\160\x61\162\141\155\163"; const mkoswouckomsusco = "\x61\x70\x70\x6c\151\x63\x61\164\151\x6f\156\57\152\x73\157\156"; protected array $options = []; protected array $queries = []; protected ?string $domain = null; protected ?string $accept = null; protected ?Client $client = null; public function __construct() { $this->client = new Client(["\x63\x6f\x6f\x6b\151\145\163" => true]); $this->uioseiweuqceuekm(); parent::__construct(); } public function wmciwsucuuyumkes() : ?Client { return $this->client; } public function saegmcouuukeykgi($keccaugmemegoimu, $ewgwqamkygiqaawc = false) { $kuukgsmqkagwaciu = ''; if (!$keccaugmemegoimu instanceof ResponseInterface) { goto soqqemyioggmoakg; } $kuukgsmqkagwaciu = $keccaugmemegoimu->getBody(); if (!$ewgwqamkygiqaawc) { goto wmmggowmigekyoso; } $kuukgsmqkagwaciu = $kuukgsmqkagwaciu->getContents(); wmmggowmigekyoso: soqqemyioggmoakg: return $kuukgsmqkagwaciu; } public function wkaoyeoamyiacyeg($keccaugmemegoimu) : int { $iueymcwwscwqkiyq = 400; if (!$keccaugmemegoimu instanceof ResponseInterface) { goto acaqummmoyiemqss; } $iueymcwwscwqkiyq = $keccaugmemegoimu->getStatusCode(); acaqummmoyiemqss: return $iueymcwwscwqkiyq; } public function wemyikwikgwqwuoc() { return $this->wmciwsucuuyumkes()->getConfig("\143\x6f\x6f\x6b\x69\x65\x73"); } public function eammiwsquyqgimgg($xeciwimgioieayek, $qiouiwasaauyaaue = []) { try { $keccaugmemegoimu = $this->wmciwsucuuyumkes()->post($xeciwimgioieayek, $qiouiwasaauyaaue); } catch (GuzzleException $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai); } return $keccaugmemegoimu; } public function wiwocsyueqyyakmy($xeciwimgioieayek, $oscwiysckseeekwy, $coukcycywgqywsaw, $qiouiwasaauyaaue = []) { return $this->wmciwsucuuyumkes()->postAsync($xeciwimgioieayek, $qiouiwasaauyaaue)->then($oscwiysckseeekwy, $coukcycywgqywsaw)->wait(); } public function iwoewaiwqaisaagy() : self { $this->mqgsiacoqqwiqiiy(self::mkoswouckomsusco); return $this; } public function uioseiweuqceuekm() : self { $this->wsyymykqcoucagma(self::mkoswouckomsusco); return $this; } public function mqgsiacoqqwiqiiy($sqeykgyoooqysmca) : self { $this->kiaqywwoysssqgig("\x43\157\156\164\145\x6e\x74\55\124\171\x70\x65", $sqeykgyoooqysmca); return $this; } public function wsyymykqcoucagma($sqeykgyoooqysmca) : self { $this->kiaqywwoysssqgig(self::akskysmqaiomagks, $sqeykgyoooqysmca); return $this; } public function wwawisckiqeueoua() : ?string { return $this->domain; } public function suyquyoaausqsuay(?string $mokawwccycoiqeka) : self { $this->domain = $mokawwccycoiqeka; return $this; } public function gkwkqmwweiawigae() : array { return $this->options; } public function kesomeowemmyygey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->options = $this->sgkkiikkkaqmacie($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $this; } public function gmsemuiwicucmcok($uusmaiomayssaecw, $ggauoeuaesiymgee = '') { $uykgysuswksgmwqy = $this->giiuwsmyumqwwiyq(Constants::gmosckicggqkicim, []); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uykgysuswksgmwqy, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = '') { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->options, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ueakuaywsqiooygo($yyymasqmuyocqqwo) : self { $this->kesomeowemmyygey("\164\151\x6d\x65\x6f\165\x74", $yyymasqmuyocqqwo); return $this; } public function kiaqywwoysssqgig($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->ckmkymaiykwyokym([$uusmaiomayssaecw => $eqgoocgaqwqcimie]); return $this; } public function ckmkymaiykwyokym($uykgysuswksgmwqy = []) : self { $this->kesomeowemmyygey(Constants::gmosckicggqkicim, $uykgysuswksgmwqy); return $this; } public function amskqmemsacmksye($mgegoogckgsumooq, string $yuwymayicwwqiske = "\x42\x65\x61\162\145\162\x20") : self { return $this->kiaqywwoysssqgig("\101\165\164\150\157\x72\x69\x7a\141\x74\151\157\156", $yuwymayicwwqiske . $mgegoogckgsumooq); } public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array { $igqsaukqcqscimok = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, $uusmaiomayssaecw); if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) { goto eeqesooyqagwawae; } if (!is_array($igqsaukqcqscimok)) { goto suswcqoyyqkkquuo; } $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie); suswcqoyyqkkquuo: goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; oqugqwcyomiaaoqu: return $uomewyckeuqoqocu; } public function ksqekagyyameaceq() : array { return $this->queries; } public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self { $uoomaookgsyciacm = $this->ksqekagyyameaceq(); if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) { goto foeeqckqsyockkak; } $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom); foeeqckqsyockkak: return $this; } public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self { foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) { $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom); hoeeyiowekaeemko: } iekumemscwieugqw: return $this; } private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array { $uoomaookgsyciacm = $this->ksqekagyyameaceq(); if (!$uoomaookgsyciacm) { goto kymkucucyeoeikim; } $qiouiwasaauyaaue["\161\x75\x65\162\171"] = preg_replace("\57\45\x35\102\x28\x3f\x3a\133\x30\x2d\x39\x5d\174\133\x31\x2d\71\x5d\x5b\x30\55\x39\135\x2b\x29\x25\65\104\75\57", "\75", http_build_query($uoomaookgsyciacm)); kymkucucyeoeikim: return $qiouiwasaauyaaue; } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $this->kiaqywwoysssqgig("\x55\163\x65\162\55\101\147\x65\x6e\164", $this->sscegwueamckwmcy("\150\164\x74\160\137\150\145\141\144\x65\162\x73\137\165\x73\x65\162\141\x67\x65\156\x74", '')); } public function send($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam) { try { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto usquiuuyiyqaeyiu; } $this->ksiyskmggywgsayu("\x58\x44\105\x42\125\107\137\123\x45\x53\123\111\x4f\x4e\x5f\x53\124\x41\122\x54", "\x50\x48\120\123\124\117\x52\x4d"); usquiuuyiyqaeyiu: $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); $this->kiaqywwoysssqgig(Constants::igecewwoemccgwsq, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue); $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue); $kgccggmwkeukkkci = null; $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($xeciwimgioieayek)) { goto uguigkcmukuouway; } if (!($mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua()))) { goto qicwaskssogcokgm; } $kgccggmwkeukkkci = "{$mokawwccycoiqeka}{$xeciwimgioieayek}"; qicwaskssogcokgm: goto uqqaiagaeqgqgaiy; uguigkcmukuouway: $kgccggmwkeukkkci = $xeciwimgioieayek; uqqaiagaeqgqgaiy: if ($kgccggmwkeukkkci && $cwaqscoiqkokyase->wmcwegoisyeeosqu($kgccggmwkeukkkci)) { goto esuiysskoweawsue; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x25\163\x20\151\163\40\156\x6f\164\x20\141\x20\x76\x61\x6c\x69\144\40\x65\156\144\x70\x6f\151\156\x74", PR__CMN__FOUNDATION), $kgccggmwkeukkkci)); goto gaomwagkcciesyqy; esuiysskoweawsue: $qiouiwasaauyaaue["\x68\x74\x74\160\137\145\x72\x72\157\162\x73"] = false; $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($kgccggmwkeukkkci, $qiouiwasaauyaaue); gaomwagkcciesyqy: } catch (GuzzleException $wgaoewqkwgomoaai) { $aagguieukukuysce = $this->caokeucsksukesyo()->euekiyuksecoccus(); $keccaugmemegoimu = $aagguieukukuysce->gosmqcmmomkqwmis($wgaoewqkwgomoaai); $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x41\x50\x49\x20\x25\163\40\x52\x65\x71\165\x65\x73\x74\x20\x45\x72\162\x6f\x72\72\40\x25\x73", strtoupper($qgciuiagkkguykgs), $aagguieukukuysce->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $keccaugmemegoimu; } public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue); } public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, Constants::mswoacegomcucaik); } public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\141\164\143\150"); } public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x64\145\154\x65\164\x65"); } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $sogksuscggsicmac = $this->saegmcouuukeykgi($keccaugmemegoimu); switch ($this->gmsemuiwicucmcok(self::akskysmqaiomagks)) { case self::mkoswouckomsusco: $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($sogksuscggsicmac); goto aegysmeecgcgayyw; } suqkuqygkkgwyaie: aegysmeecgcgayyw: return $sogksuscggsicmac; } public function eqkieiagqmugguew($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam, bool $muukeaaskkiceykc = true) { $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq, $amkukiggyuqwkuyo)) { goto skkamseieeusycye; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); goto cgiscsqwwgqqaeqi; skkamseieeusycye: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if (!$muukeaaskkiceykc) { goto wiysogeqqwgioyka; } $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); if ($kigowwqauiumummw) { goto soaccwqimeksgwiw; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); soaccwqimeksgwiw: wiysogeqqwgioyka: cgiscsqwwgqqaeqi: return $sogksuscggsicmac; } public function occymigcemkqucuw($keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = Constants::eoskkkieowogacws) : bool { $ksaameoqigiaoigg = false; $iueymcwwscwqkiyq = $this->wkaoyeoamyiacyeg($keccaugmemegoimu); if (!$keccaugmemegoimu instanceof ResponseInterface) { goto scisgsyemmsekgos; } if ($iueymcwwscwqkiyq !== 200) { goto ooeausyowguqicuo; } $ksaameoqigiaoigg = true; goto egyyiccaeeiooaua; ooeausyowguqicuo: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->saegmcouuukeykgi($keccaugmemegoimu, true)); $iswcokucwmiosiaq = $smgooosyoeqwcaeg[$qeweemoqwwsoumeg] ?? ''; switch ($iueymcwwscwqkiyq) { case 400: case 403: if (!$smgooosyoeqwcaeg) { goto wmywuusgukmmaams; } $icwicymcioeyeyek = [Constants::vswoiouoaykswgym => $gkyciwoiiisgywcs->get($smgooosyoeqwcaeg, Constants::vswoiouoaykswgym), Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]; wmywuusgukmmaams: if ($iswcokucwmiosiaq) { goto gkyawqqcmigqgaiq; } $iswcokucwmiosiaq = $this->saegmcouuukeykgi($keccaugmemegoimu); gkyawqqcmigqgaiq: goto ewymsmkkiksgwysk; } cmegwsegsosyqcai: ewymsmkkiksgwysk: egyyiccaeeiooaua: goto cewmoqyysgsmuiya; scisgsyemmsekgos: if (is_string($keccaugmemegoimu) || is_wp_error($keccaugmemegoimu)) { goto syiqkaasoueowwui; } $iswcokucwmiosiaq .= __("\122\145\163\160\157\x6e\x73\145\40\151\163\x20\x6e\x6f\x74\40\166\141\154\x69\x64", PR__CMN__FOUNDATION); goto giaacoqqqsekcayy; syiqkaasoueowwui: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu); giaacoqqqsekcayy: cewmoqyysgsmuiya: return $ksaameoqigiaoigg; } public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee, ?string $csowmwgiiyueuius = Constants::ckcawaoawwioqecq, ?string $aqogmkcqyeosckkm = Constants::iwyueouqaqegmcas) : bool { $eisqsskqimiigkay = false; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (is_wp_error($sogksuscggsicmac)) { goto wkeuuycukmuqiaom; } if (!$gkyciwoiiisgywcs->get($sogksuscggsicmac, $csowmwgiiyueuius)) { goto ueigkucgaucgeimc; } $eisqsskqimiigkay = true; goto sggawugoykqcmsug; ueigkucgaucgeimc: $ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, $aqogmkcqyeosckkm, []); if (is_array($ueeagokqmgisgauy)) { goto wgewmqieuamsoayy; } if (!is_string($ueeagokqmgisgauy)) { goto ugqaaewwmkocwwgy; } $wumguikkgaigkoee .= $ueeagokqmgisgauy; ugqaaewwmkocwwgy: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $wumguikkgaigkoee[] = sprintf("\45\163\40\50\x25\x73\x3a\x20\45\163\x29", $gkyciwoiiisgywcs->get($iswcokucwmiosiaq, Constants::eoskkkieowogacws), __("\105\162\162\157\162\x20\x43\x6f\x64\145", PR__CMN__FOUNDATION), $gkyciwoiiisgywcs->get($iswcokucwmiosiaq, Constants::vswoiouoaykswgym)); omqiayeucoioqoao: } igooksugieceoege: kqgcyoscsusgoaqi: sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $wumguikkgaigkoee = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); wakmayaoqoskekqy: return $eisqsskqimiigkay; } public function saeuwmoyaekkseok($mkomwsiykqigmqca) : string { return $this->swyekyumuyeuouwi() . $mkomwsiykqigmqca; } }
