<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API; use GuzzleHttp\Client; use GuzzleHttp\Exception\GuzzleException; use Pmpr\Common\Foundation\Interfaces\Constants; use Psr\Http\Message\ResponseInterface; use Psr\Http\Message\StreamInterface; use WP_Error; class API extends Common { const akskysmqaiomagks = "\101\x63\x63\x65\x70\x74"; const kugiewcgiawaeiaq = "\x66\157\x72\x6d\x5f\x70\x61\x72\x61\x6d\163"; const mkoswouckomsusco = "\x61\x70\160\154\151\x63\x61\x74\x69\157\156\57\152\x73\x6f\x6e"; protected array $options = []; protected array $queries = []; protected ?string $domain = null; protected ?string $accept = null; protected ?Client $client = null; public function __construct() { $this->client = new Client(["\143\x6f\x6f\153\151\145\x73" => true]); $this->uioseiweuqceuekm(); parent::__construct(); } public function wmciwsucuuyumkes() : ?Client { return $this->client; } public function saegmcouuukeykgi($keccaugmemegoimu, $ewgwqamkygiqaawc = false) { $kuukgsmqkagwaciu = ''; if (!$keccaugmemegoimu instanceof ResponseInterface) { goto mqcoyamukmaoqwmw; } $kuukgsmqkagwaciu = $keccaugmemegoimu->getBody(); if (!$ewgwqamkygiqaawc) { goto ksiuacaiaiauywae; } $kuukgsmqkagwaciu = $kuukgsmqkagwaciu->getContents(); ksiuacaiaiauywae: mqcoyamukmaoqwmw: return $kuukgsmqkagwaciu; } public function wkaoyeoamyiacyeg($keccaugmemegoimu) : int { $iueymcwwscwqkiyq = 400; if (!$keccaugmemegoimu instanceof ResponseInterface) { goto kygqagmyyqysywkm; } $iueymcwwscwqkiyq = $keccaugmemegoimu->getStatusCode(); kygqagmyyqysywkm: return $iueymcwwscwqkiyq; } public function wemyikwikgwqwuoc() { return $this->wmciwsucuuyumkes()->getConfig("\143\157\x6f\x6b\151\145\x73"); } public function eammiwsquyqgimgg($xeciwimgioieayek, $qiouiwasaauyaaue = []) { try { $keccaugmemegoimu = $this->wmciwsucuuyumkes()->post($xeciwimgioieayek, $qiouiwasaauyaaue); } catch (GuzzleException $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai); } return $keccaugmemegoimu; } public function wiwocsyueqyyakmy($xeciwimgioieayek, $oscwiysckseeekwy, $coukcycywgqywsaw, $qiouiwasaauyaaue = []) { return $this->wmciwsucuuyumkes()->postAsync($xeciwimgioieayek, $qiouiwasaauyaaue)->then($oscwiysckseeekwy, $coukcycywgqywsaw)->wait(); } public function iwoewaiwqaisaagy() : self { $this->mqgsiacoqqwiqiiy(self::mkoswouckomsusco); return $this; } public function uioseiweuqceuekm() : self { $this->wsyymykqcoucagma(self::mkoswouckomsusco); return $this; } public function mqgsiacoqqwiqiiy($sqeykgyoooqysmca) : self { $this->kiaqywwoysssqgig("\103\x6f\156\164\x65\156\x74\55\124\171\x70\145", $sqeykgyoooqysmca); return $this; } public function wsyymykqcoucagma($sqeykgyoooqysmca) : self { $this->kiaqywwoysssqgig(self::akskysmqaiomagks, $sqeykgyoooqysmca); return $this; } public function wwawisckiqeueoua() : ?string { return $this->domain; } public function suyquyoaausqsuay(?string $mokawwccycoiqeka) : self { $this->domain = $mokawwccycoiqeka; return $this; } public function gkwkqmwweiawigae() : array { return $this->options; } public function kesomeowemmyygey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->options = $this->sgkkiikkkaqmacie($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $eqgoocgaqwqcimie); return $this; } public function gmsemuiwicucmcok($uusmaiomayssaecw, $ggauoeuaesiymgee = '') { $uykgysuswksgmwqy = $this->giiuwsmyumqwwiyq(Constants::gmosckicggqkicim, []); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uykgysuswksgmwqy, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = '') { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->options, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ueakuaywsqiooygo($yyymasqmuyocqqwo) : self { $this->kesomeowemmyygey("\164\x69\155\x65\x6f\x75\x74", $yyymasqmuyocqqwo); return $this; } public function kiaqywwoysssqgig($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->ckmkymaiykwyokym([$uusmaiomayssaecw => $eqgoocgaqwqcimie]); return $this; } public function ckmkymaiykwyokym($uykgysuswksgmwqy = []) : self { $this->kesomeowemmyygey(Constants::gmosckicggqkicim, $uykgysuswksgmwqy); return $this; } public function amskqmemsacmksye($mgegoogckgsumooq, string $yuwymayicwwqiske = "\102\145\141\162\x65\162\40") : self { return $this->kiaqywwoysssqgig("\101\x75\x74\150\157\162\x69\x7a\x61\x74\151\x6f\156", $yuwymayicwwqiske . $mgegoogckgsumooq); } public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array { $igqsaukqcqscimok = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, $uusmaiomayssaecw); if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) { goto qkeogqcekgawsgwe; } if (!is_array($igqsaukqcqscimok)) { goto aqakqumsuimkkkus; } $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie); aqakqumsuimkkkus: goto qseiiaweiykcwacy; qkeogqcekgawsgwe: $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; qseiiaweiykcwacy: return $uomewyckeuqoqocu; } public function ksqekagyyameaceq() : array { return $this->queries; } public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self { $uoomaookgsyciacm = $this->ksqekagyyameaceq(); if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) { goto kewsuqsoqkyikkis; } $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom); kewsuqsoqkyikkis: return $this; } public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self { foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) { $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom); oqiqyekweaomiwgy: } yeecswicmoyiqssi: return $this; } private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array { $uoomaookgsyciacm = $this->ksqekagyyameaceq(); if (!$uoomaookgsyciacm) { goto owssugkggmiascii; } $qiouiwasaauyaaue["\x71\x75\x65\x72\x79"] = preg_replace("\57\45\65\x42\x28\77\72\x5b\x30\x2d\71\x5d\x7c\133\x31\55\x39\135\x5b\x30\x2d\x39\135\53\x29\45\x35\x44\x3d\57", "\x3d", http_build_query($uoomaookgsyciacm)); owssugkggmiascii: return $qiouiwasaauyaaue; } public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs) { $this->kiaqywwoysssqgig("\x55\x73\145\162\x2d\101\147\145\x6e\x74", $this->sscegwueamckwmcy("\x68\x74\164\x70\137\150\145\141\x64\145\x72\163\137\x75\x73\145\x72\141\x67\x65\x6e\x74", '')); } public function send($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam) { try { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto mqcgsiaawwkqmksi; } $this->ksiyskmggywgsayu("\130\x44\x45\x42\x55\107\137\x53\x45\123\123\111\x4f\116\x5f\123\124\x41\122\124", "\120\110\x50\123\124\x4f\122\115"); mqcgsiaawwkqmksi: $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); $this->kiaqywwoysssqgig(Constants::igecewwoemccgwsq, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue); $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue); $kgccggmwkeukkkci = null; $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($xeciwimgioieayek)) { goto oaqqykskqqqqsqem; } if (!($mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua()))) { goto wgicusccasmuiosy; } $kgccggmwkeukkkci = "{$mokawwccycoiqeka}{$xeciwimgioieayek}"; wgicusccasmuiosy: goto yoeoiuuuqakicgam; oaqqykskqqqqsqem: $kgccggmwkeukkkci = $xeciwimgioieayek; yoeoiuuuqakicgam: if ($kgccggmwkeukkkci && $cwaqscoiqkokyase->wmcwegoisyeeosqu($kgccggmwkeukkkci)) { goto yuyyeiiewiuogceo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\45\x73\40\151\163\x20\156\157\164\40\x61\40\166\x61\154\151\x64\x20\x65\156\x64\160\157\x69\x6e\x74", PR__CMN__FOUNDATION), $kgccggmwkeukkkci)); goto ugomsuwwuqsskuqc; yuyyeiiewiuogceo: $qiouiwasaauyaaue["\x68\164\x74\160\x5f\145\162\162\157\162\x73"] = false; $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($kgccggmwkeukkkci, $qiouiwasaauyaaue); ugomsuwwuqsskuqc: } catch (GuzzleException $wgaoewqkwgomoaai) { $aagguieukukuysce = $this->caokeucsksukesyo()->euekiyuksecoccus(); $keccaugmemegoimu = $aagguieukukuysce->gosmqcmmomkqwmis($wgaoewqkwgomoaai); $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\101\120\111\40\x25\x73\x20\122\x65\161\165\145\x73\164\x20\105\162\x72\x6f\162\72\40\x25\163", strtoupper($qgciuiagkkguykgs), $aagguieukukuysce->skauuuoqcaiseuks($wgaoewqkwgomoaai))); } return $keccaugmemegoimu; } public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue); } public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, Constants::mswoacegomcucaik); } public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\141\x74\143\150"); } public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) { return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\144\145\154\145\164\145"); } public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu) { $sogksuscggsicmac = $this->saegmcouuukeykgi($keccaugmemegoimu); switch ($this->gmsemuiwicucmcok(self::akskysmqaiomagks)) { case self::mkoswouckomsusco: $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($sogksuscggsicmac); goto skeyqsaqsiwgiyog; } awwgggeiaceyecco: skeyqsaqsiwgiyog: return $sogksuscggsicmac; } public function eqkieiagqmugguew($xeciwimgioieayek, array $qiouiwasaauyaaue = [], string $qgciuiagkkguykgs = Constants::isukcamoimieegam, bool $muukeaaskkiceykc = true) { $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq, $amkukiggyuqwkuyo)) { goto iuoayeiykmokiiys; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); goto mmmgeukkswewyuoa; iuoayeiykmokiiys: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if (!$muukeaaskkiceykc) { goto oemkgkauqekgkumy; } $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); if ($kigowwqauiumummw) { goto ayeqwsqywosymiwu; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); ayeqwsqywosymiwu: oemkgkauqekgkumy: mmmgeukkswewyuoa: return $sogksuscggsicmac; } public function occymigcemkqucuw($keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = Constants::eoskkkieowogacws) : bool { $ksaameoqigiaoigg = false; $iueymcwwscwqkiyq = $this->wkaoyeoamyiacyeg($keccaugmemegoimu); if (!$keccaugmemegoimu instanceof ResponseInterface) { goto wesooeakucoqmisw; } if ($iueymcwwscwqkiyq !== 200) { goto agicooogqyeyoyqi; } $ksaameoqigiaoigg = true; goto osoukeawsoyqmwgo; agicooogqyeyoyqi: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $smgooosyoeqwcaeg = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->saegmcouuukeykgi($keccaugmemegoimu, true)); $iswcokucwmiosiaq = $smgooosyoeqwcaeg[$qeweemoqwwsoumeg] ?? ''; switch ($iueymcwwscwqkiyq) { case 400: case 403: if (!$smgooosyoeqwcaeg) { goto gswoagoguesomwyc; } $icwicymcioeyeyek = [Constants::vswoiouoaykswgym => $gkyciwoiiisgywcs->get($smgooosyoeqwcaeg, Constants::vswoiouoaykswgym), Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]; gswoagoguesomwyc: if ($iswcokucwmiosiaq) { goto ecomecoqggyssmsk; } $iswcokucwmiosiaq = $this->saegmcouuukeykgi($keccaugmemegoimu); ecomecoqggyssmsk: goto mswucuuigmosimuo; } ayuwkwsuioumscca: mswucuuigmosimuo: osoukeawsoyqmwgo: goto cmwaakkwwqameeec; wesooeakucoqmisw: if (is_string($keccaugmemegoimu) || is_wp_error($keccaugmemegoimu)) { goto ygegasgiwgmswaog; } $iswcokucwmiosiaq .= __("\122\145\163\x70\x6f\156\x73\145\x20\x69\x73\40\x6e\157\x74\40\166\x61\x6c\151\144", PR__CMN__FOUNDATION); goto qiaaqckmooiayuae; ygegasgiwgmswaog: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu); qiaaqckmooiayuae: cmwaakkwwqameeec: return $ksaameoqigiaoigg; } public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee, ?string $csowmwgiiyueuius = Constants::ckcawaoawwioqecq, ?string $aqogmkcqyeosckkm = Constants::iwyueouqaqegmcas) : bool { $eisqsskqimiigkay = false; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (is_wp_error($sogksuscggsicmac)) { goto ywyceqcyssuuyauc; } if (!$gkyciwoiiisgywcs->get($sogksuscggsicmac, $csowmwgiiyueuius)) { goto uckqwisqmyeuegei; } $eisqsskqimiigkay = true; goto gesaagokeamiwuws; uckqwisqmyeuegei: $ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, $aqogmkcqyeosckkm, []); if (is_array($ueeagokqmgisgauy)) { goto caskecmuwociuumq; } if (!is_string($ueeagokqmgisgauy)) { goto wcuqgoiokweuwycq; } $wumguikkgaigkoee .= $ueeagokqmgisgauy; wcuqgoiokweuwycq: goto qcgyuksgqucyquwi; caskecmuwociuumq: foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $wumguikkgaigkoee[] = sprintf("\45\163\x20\50\45\163\72\x20\x25\x73\x29", $gkyciwoiiisgywcs->get($iswcokucwmiosiaq, Constants::eoskkkieowogacws), __("\105\x72\x72\x6f\162\x20\x43\157\x64\x65", PR__CMN__FOUNDATION), $gkyciwoiiisgywcs->get($iswcokucwmiosiaq, Constants::vswoiouoaykswgym)); cecoqgqcckqoouwy: } ykgkuccgawoyquga: qcgyuksgqucyquwi: gesaagokeamiwuws: goto gucokiskmccmsaac; ywyceqcyssuuyauc: $wumguikkgaigkoee = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); gucokiskmccmsaac: return $eisqsskqimiigkay; } public function saeuwmoyaekkseok($mkomwsiykqigmqca) : string { return $this->swyekyumuyeuouwi() . $mkomwsiykqigmqca; } }
