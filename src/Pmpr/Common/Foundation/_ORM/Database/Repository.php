<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use DateTime; use Exception; use Illuminate\Database\Eloquent\Collection; use Illuminate\Database\Query\Builder; use Illuminate\Database\Eloquent\Relations\Relation; use Illuminate\Database\Query\Expression; use Illuminate\Database\Query\JoinClause; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Str; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Repository extends Common { use ModelTrait; const ksawcegcqeeuswkm = "\75"; const gwakowakcqqsyiyu = "\x3c"; const ggyiwkyegsqmgaee = "\x3e"; const kkiokksygkekyaki = "\74\75"; const wuuiwugmcgkwkimw = "\76\75"; public function exists($siykeiywomwwuoiw = null) { $cmaccwokqweqweqi = false; if (!$siykeiywomwwuoiw instanceof Builder) { goto waewaiuiogywqigu; } $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists(); waewaiuiogywqigu: return $cmaccwokqweqweqi; } public function gqaysymikgeawkqa(bool $owoiyeqyeaucssey = true) : ?Builder { try { $mgcmmwqwguicsews = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq(); $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($this->mgogaykgkoogasim()->cueaickeeoiwayou()); $siykeiywomwwuoiw = $mgcmmwqwguicsews->table($aasascamegmwqmqk); $this->exists($siykeiywomwwuoiw); } catch (Exception $wgaoewqkwgomoaai) { $siykeiywomwwuoiw = null; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); if (!$owoiyeqyeaucssey) { goto yyamycyesguwueuw; } $this->mgogaykgkoogasim()->geskigquisseygoc()->cucqgwmoseqakgoe(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(false); yyamycyesguwueuw: } return $siykeiywomwwuoiw; } public final function syugmyosqomgwywi($siykeiywomwwuoiw) : string { if (!is_array($siykeiywomwwuoiw)) { goto aymmymequcisekie; } $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($siykeiywomwwuoiw); aymmymequcisekie: $asiqcaccsgscgcyq = $siykeiywomwwuoiw->toSql(); $eyagkkkqkwcuygso = $siykeiywomwwuoiw->getBindings(); $gqgemcmoicmgaqie = str_replace(["\77", "\134\42", "\42"], ["\x27\x25\163\x27", '', ''], $asiqcaccsgscgcyq); return vsprintf($gqgemcmoicmgaqie, $eyagkkkqkwcuygso); } public final function myywwqkyiwawwquy(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi) : string { return "{$aasascamegmwqmqk}\x2e{$qgoqiacsiccwoawi}"; } public final function kmgukcsewikeswco(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) { if ("\x6e\165\x6c\154" === strtolower($aikcyecgesuiaacw)) { goto gyeayeuuyiemuwuq; } $sogksuscggsicmac = "{$this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi)}\40\x61\x73\40{$aikcyecgesuiaacw}"; goto kyggwyywiycksgqq; gyeayeuuyiemuwuq: $sogksuscggsicmac = $this->gqaysymikgeawkqa()->raw("\156\165\154\154\x20\x61\163\x20{$qgoqiacsiccwoawi}"); kyggwyywiycksgqq: return $sogksuscggsicmac; } public function kqewyqqqiyiouaou(array $uoomaookgsyciacm, $siykeiywomwwuoiw = null, $iqqgseqwyegkeqws = null) { if (!(!$siykeiywomwwuoiw instanceof Builder || !$siykeiywomwwuoiw instanceof Relation)) { goto sugumgeqcwgekcqs; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); sugumgeqcwgekcqs: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($iqqgseqwyegkeqws) { goto imeaiksowuukikui; } $iqqgseqwyegkeqws = $meywaqqsugaoeyys->cokoiaeeomgssqgy(); imeaiksowuukikui: if (!($siykeiywomwwuoiw && $uoomaookgsyciacm)) { goto gimquiiwucueoqkw; } foreach ($uoomaookgsyciacm as $qgoqiacsiccwoawi => $gqgemcmoicmgaqie) { if (!is_numeric($qgoqiacsiccwoawi)) { goto weggeeowykuqooyg; } $qgoqiacsiccwoawi = $gqgemcmoicmgaqie[Constants::meisqwykgaymauka] ?? $qgoqiacsiccwoawi; weggeeowykuqooyg: $qekiiaomcwyquqqm = $qgoqiacsiccwoawi; $aikcyecgesuiaacw = $gqgemcmoicmgaqie[Constants::wsgoaaeiyusigoym] ?? ''; $mqogqgswmasasmik = (bool) ($gqgemcmoicmgaqie[Constants::sieeooaigsmwocym] ?? false); $sgiywwewawiewkam = (bool) ($gqgemcmoicmgaqie[Constants::sikukwmqygowwwiy] ?? false); $eqgoocgaqwqcimie = $gqgemcmoicmgaqie[Constants::ciyoccqkiamemcmm] ?? $gqgemcmoicmgaqie; $aasascamegmwqmqk = $gqgemcmoicmgaqie[Constants::ugsuecoyuqcamsac] ?? $iqqgseqwyegkeqws; $yummaigqmauwcyou = $gqgemcmoicmgaqie[Constants::euoaaiqkqcqcgeco] ?? Constants::qmesccgukkkogskw; $qsycuegoicqcqkmo = $gqgemcmoicmgaqie[Constants::cwsguekoagqkaesm] ?? Constants::weaykmmocuacwekg; $cackiyicawmkyqqg = $gqgemcmoicmgaqie[Constants::eugyciakiowwcuwm] ?? self::ksawcegcqeeuswkm; $ewumwgcosqecykeo = $gqgemcmoicmgaqie[Constants::emkkgysokckswycs] ?? $meywaqqsugaoeyys; $mqgysgoemumiwmis = $gqgemcmoicmgaqie[Constants::iowgsqgiaamyuswi] ?? []; if (!($qgoqiacsiccwoawi === Constants::cuoyscoiacswuauq && $meywaqqsugaoeyys->gwckcieqcmsaysow() && ($ameuyuucmwqqsgwa = $meywaqqsugaoeyys->yomauqsskqkugkgy()))) { goto ucecweoaoyeoyuue; } $aasascamegmwqmqk = $ameuyuucmwqqsgwa->cokoiaeeomgssqgy(); $wkkweuacukumqmya = [$meywaqqsugaoeyys->kumuygiiqswoyasy(true)]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $ymqmyyeuycgmigyo => $qgcgysiwuygagkao) { if (!($qgcgysiwuygagkao instanceof Foreign && ($qgcgysiwuygagkao->ygswmewosceowmya() || $qgcgysiwuygagkao->iueigwuckeaswyuu()))) { goto wiqigqgiegmacgsw; } goto ssmgmiuqoeiuacsa; wiqigqgiegmacgsw: $wkkweuacukumqmya[] = $ymqmyyeuycgmigyo; ssmgmiuqoeiuacsa: } cqkuuyouqoqyguus: $asycuuiuosiugcqs = [[Constants::euoaaiqkqcqcgeco => Constants::SELECT, Constants::meisqwykgaymauka => $wkkweuacukumqmya]]; $momcykaoccoymeig = 1; foreach ($gqgemcmoicmgaqie as $imgcoakmmgqsckkm => $qqmmggwcsmymegca) { $gekaiayeauiswumc = "\x6d\145\164\141\x64\x61\164\x61{$momcykaoccoymeig}"; if (is_string($qqmmggwcsmymegca)) { goto ueaiskyiqcquiika; } $aucgaecqisksougg = $qqmmggwcsmymegca[Constants::ciyoccqkiamemcmm] ?? ''; unset($qqmmggwcsmymegca[Constants::ciyoccqkiamemcmm]); $qamsacaymgiwkyqu = $qqmmggwcsmymegca; goto eqemcocqsyasqycq; ueaiskyiqcquiika: $aucgaecqisksougg = $qqmmggwcsmymegca; $qamsacaymgiwkyqu = []; eqemcocqsyasqycq: $qamsacaymgiwkyqu[Constants::meisqwykgaymauka] = $ameuyuucmwqqsgwa->myywwqkyiwawwquy(Constants::iwmgegikocuwggua, $gekaiayeauiswumc); $qamsacaymgiwkyqu[Constants::ciyoccqkiamemcmm] = $aucgaecqisksougg; $qamsacaymgiwkyqu[Constants::ugsuecoyuqcamsac] = ''; $ywqmsciwouysaiie = [Constants::meisqwykgaymauka => $ameuyuucmwqqsgwa->myywwqkyiwawwquy(Constants::osocaqqumyuooqyo, $gekaiayeauiswumc), Constants::ciyoccqkiamemcmm => $imgcoakmmgqsckkm, Constants::ugsuecoyuqcamsac => '']; $asycuuiuosiugcqs[] = [Constants::wsgoaaeiyusigoym => $gekaiayeauiswumc, Constants::ugsuecoyuqcamsac => $ameuyuucmwqqsgwa->cokoiaeeomgssqgy(), Constants::ciyoccqkiamemcmm => [$ameuyuucmwqqsgwa->myywwqkyiwawwquy($ameuyuucmwqqsgwa->iymiksyekgoqkosc(), $gekaiayeauiswumc), $this->myywwqkyiwawwquy($meywaqqsugaoeyys->kumuygiiqswoyasy())], Constants::euoaaiqkqcqcgeco => Constants::imiesusgyysqwyew]; $asycuuiuosiugcqs[] = [Constants::iowgsqgiaamyuswi => [$qamsacaymgiwkyqu, $ywqmsciwouysaiie]]; $momcykaoccoymeig++; koggssokukoukkay: } gwoacimkeyymqccq: $yummaigqmauwcyou = Constants::mcwismemiumceoos; $mqgysgoemumiwmis = $asycuuiuosiugcqs; ucecweoaoyeoyuue: if (!($aasascamegmwqmqk && is_string($qgoqiacsiccwoawi))) { goto cqugssuesycomqwa; } $qgoqiacsiccwoawi = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi); cqugssuesycomqwa: if (!$sgiywwewawiewkam) { goto kaiqsuaywyuckuoo; } $eqgoocgaqwqcimie = $siykeiywomwwuoiw->raw($eqgoocgaqwqcimie); kaiqsuaywyuckuoo: if (!(!$mqgysgoemumiwmis && is_array($eqgoocgaqwqcimie) && $yummaigqmauwcyou === Constants::qmesccgukkkogskw)) { goto yuoamgkigcwaooqu; } $yummaigqmauwcyou = Constants::wuwqeigceueyqmsc; yuoamgkigcwaooqu: $aaqqkgyougeiueyq = $ewumwgcosqecykeo->uqeoyqiwywwmsiew($qekiiaomcwyquqqm); if (!$aaqqkgyougeiueyq instanceof Enum) { goto ymwyooosikgokiaa; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiesyimugeuuwcma($eqgoocgaqwqcimie); ymwyooosikgokiaa: switch ($yummaigqmauwcyou) { case Constants::imiesusgyysqwyew: $saqkweiwkkmkaiso = $eqgoocgaqwqcimie[0] ?? null; $wcigocykcugesikg = $eqgoocgaqwqcimie[1] ?? null; if (!$aaqqkgyougeiueyq instanceof Foreign) { goto koemwyegoqwiikom; } $mookcykiycqukcks = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$mookcykiycqukcks) { goto siuyaemoiiqyoggo; } if ($saqkweiwkkmkaiso) { goto iiuuwuwcwamqegey; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto qccmuwiwykuegoga; } $saqkweiwkkmkaiso = $meywaqqsugaoeyys->kumuygiiqswoyasy(); goto csucwwqcsaymyiuk; qccmuwiwykuegoga: $saqkweiwkkmkaiso = $qekiiaomcwyquqqm; csucwwqcsaymyiuk: iiuuwuwcwamqegey: $saqkweiwkkmkaiso = $this->myywwqkyiwawwquy($saqkweiwkkmkaiso, $aikcyecgesuiaacw); if (!$wcigocykcugesikg && is_string($eqgoocgaqwqcimie)) { goto ooqmaweuqmcmwsuk; } if (!(!$aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->aumgkcogqygmwsqy())) { goto qmgueimkwqmsakis; } $wcigocykcugesikg = $mookcykiycqukcks->kumuygiiqswoyasy(); qmgueimkwqmsakis: goto uscissuaiyuiukea; ooqmaweuqmcmwsuk: $wcigocykcugesikg = $eqgoocgaqwqcimie; uscissuaiyuiukea: if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto kuyqusuycscumuek; } $aasascamegmwqmqk = $mookcykiycqukcks->cokoiaeeomgssqgy(); $wcigocykcugesikg = $mookcykiycqukcks->myywwqkyiwawwquy($wcigocykcugesikg); goto cycwgukowsksmkyc; kuyqusuycscumuek: [$aasascamegmwqmqk] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $wcigocykcugesikg = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $wcigocykcugesikg); cycwgukowsksmkyc: siuyaemoiiqyoggo: koemwyegoqwiikom: $koegqoagisewcica = $gqgemcmoicmgaqie[Constants::ON] ?? true; $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, function (JoinClause $eagqsqeocaokmsim) use($saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg, $mqgysgoemumiwmis, $koegqoagisewcica, $aikcyecgesuiaacw, $aasascamegmwqmqk) { if (!$koegqoagisewcica) { goto qycsooiomiugimqc; } $eagqsqeocaokmsim->on($saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg); qycsooiomiugimqc: if (!$mqgysgoemumiwmis) { goto ggoimgeeuugseiwk; } if (!$aikcyecgesuiaacw) { goto qioswooukgoowsuc; } $aasascamegmwqmqk = $aikcyecgesuiaacw; qioswooukgoowsuc: return $this->kqewyqqqiyiouaou($mqgysgoemumiwmis, $eagqsqeocaokmsim, $aasascamegmwqmqk); ggoimgeeuugseiwk: return $eagqsqeocaokmsim; }); goto qaiuogoowcoimwee; } osqgywagokmsicqe: qaiuogoowcoimwee: gaceikykesgywssm: } aqmiewawgseaqeqk: gimquiiwucueoqkw: return $siykeiywomwwuoiw; } public function wkmkqaiwuqouweye(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou([$aiowsaccomcoikus => [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]], $siykeiywomwwuoiw); } public function akkkoiiymmamsauc($eqgoocgaqwqcimie = null, string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\x2a") { if ($aiowsaccomcoikus) { goto eimouyomcoqkmaae; } $aiowsaccomcoikus = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); eimouyomcoqkmaae: return $this->geeumyocaqwwquwk($this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie), $wkkweuacukumqmya); } public function oqomcmyuuakigusk(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\x2a"]) { return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($uoomaookgsyciacm), $wkkweuacukumqmya); } private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) { $mksyucucyswaukig = null; if (!$siykeiywomwwuoiw) { goto kkwqmoeeqygoimwg; } $mksyucucyswaukig = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya); kkwqmoeeqygoimwg: return $mksyucucyswaukig; } public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null) { if ($siykeiywomwwuoiw) { goto mwqcykaeywsmoumm; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); mwqcykaeywsmoumm: if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) { goto awgmyaycugswmwae; } $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg); awgmyaycugswmwae: $mksyucucyswaukig = null; if (!$siykeiywomwwuoiw) { goto ywoyioqqyuocoygk; } $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya); ywoyioqqyuocoygk: return $mksyucucyswaukig; } public function yassqyiieqeywoqi(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg); if (!$siykeiywomwwuoiw) { goto iauwkeeaqsgweeoo; } $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); iauwkeeaqsgweeoo: return $aqykuigiuwmmcieu; } public function cieaqygkucwoqwke(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm); if (!$siykeiywomwwuoiw) { goto aycqgowuwagcgque; } $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); aycqgowuwagcgque: return $aqykuigiuwmmcieu; } public function asskucacysemeoiu(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = "\52") : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->kqewyqqqiyiouaou($uoomaookgsyciacm)); } public function ieieyoeqmmeysauc(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = "\x2a", $siykeiywomwwuoiw = null) : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw)); } public function ygmcsmegcysyeoss($wkkweuacukumqmya = "\x2a", $siykeiywomwwuoiw = null) : int { $gaeqamemwmwsyukm = 0; if ($siykeiywomwwuoiw) { goto icuukwkwqeoogyae; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); icuukwkwqeoogyae: if (!$siykeiywomwwuoiw) { goto iwcmgioeaiyuacwi; } $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count($wkkweuacukumqmya); iwcmgioeaiyuacwi: return $gaeqamemwmwsyukm; } public function qgiewwqykwugcuoo(string $qgoqiacsiccwoawi, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null) { $qsmaqqyoggcuyukq = 0; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); if (!$siykeiywomwwuoiw) { goto iyyaiuccouqowyga; } $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi); iyyaiuccouqowyga: return $qsmaqqyoggcuyukq; } public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = ["\52"], array $uoomaookgsyciacm = []) { $essikcmqiyqaqoaq = []; try { if ($iceamweyeeiwiucs instanceof Relation) { goto wucacaegysmiusai; } $jwsqucqyaoaasykk = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($iceamweyeeiwiucs); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto mwwygasiagaqsimo; } if (!($meywaqqsugaoeyys = $aaqqkgyougeiueyq->ggmimykuacwcogaq())) { goto euoscysqgugsqewc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $sgmoseoaumayiowg = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $iceamweyeeiwiucs); $moqewomugocaueis = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $ceiwsaacewygcsqg); $iscgcmeykqwwowmq = $aaqqkgyougeiueyq->ogkqyamocsimiymw(); if (!($aaqqkgyougeiueyq->eiyqqesoywqkegwu() || $aaqqkgyougeiueyq->wmomygggskkoqess())) { goto ugmukcwgcioqgywy; } if (!$aaqqkgyougeiueyq->wmomygggskkoqess()) { goto cksomiiqscosigke; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto ikqagqacuwcgwmqy; } return $this->akkkoiiymmamsauc($sgmoseoaumayiowg, $aaqqkgyougeiueyq->iooowgsqoyqseyuu()); ikqagqacuwcgwmqy: if (!$iscgcmeykqwwowmq) { goto gcogomgmqcgkeceg; } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($moqewomugocaueis, $iscgcmeykqwwowmq); gcogomgmqcgkeceg: cksomiiqscosigke: return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($sgmoseoaumayiowg, $ceiwsaacewygcsqg); ugmukcwgcioqgywy: if (!($iscgcmeykqwwowmq && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) { goto kisccmsaieigisiu; } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->yassqyiieqeywoqi($iscgcmeykqwwowmq, $moqewomugocaueis); kisccmsaieigisiu: euoscysqgugsqewc: mwwygasiagaqsimo: $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig); goto eeomcmuiqwgwwuqk; wucacaegysmiusai: $ayegqaqygsqsmews = $iceamweyeeiwiucs; eeomcmuiqwgwwuqk: if (!$ayegqaqygsqsmews) { goto yeaqsiqgakskoykg; } if (!$uoomaookgsyciacm) { goto mseokuecmeoyoggk; } $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews); mseokuecmeoyoggk: if (!$ayegqaqygsqsmews) { goto uookseqsmsqgweuy; } $essikcmqiyqaqoaq = $this->iiqauwkoiguyeawu($ayegqaqygsqsmews, $wkkweuacukumqmya); uookseqsmsqgweuy: yeaqsiqgakskoykg: } catch (Exception $wgaoewqkwgomoaai) { } return $essikcmqiyqaqoaq; } public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation { $ayegqaqygsqsmews = null; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($mksyucucyswaukig instanceof Entity) { goto iigmgswcogqemgao; } $aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig); if (!$mksyucucyswaukig) { goto esgyqksmcukeuwyk; } $mksyucucyswaukig = $meywaqqsugaoeyys->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($aokagokqyuysuksm); esgyqksmcukeuwyk: iigmgswcogqemgao: if (!$mksyucucyswaukig instanceof Entity) { goto geoiegikocwmwosi; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($ymaogssqccumcyqa); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto qykcggwgkweasuii; } if (!($yccmomaaqwugeiuo = $aaqqkgyougeiueyq->ggmimykuacwcogaq())) { goto ukmgwuiqwgyiouec; } $egkyssmuqcwaciya = $yccmomaaqwugeiuo::class; if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto ksqmcugkcmsooeaw; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto eomqeimoequmagum; } if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto oysyuiqmsokoykaq; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto omqyuuomwywmqeiq; } if (!$yccmomaaqwugeiuo instanceof Model) { goto aeockieewgkequae; } [$syeseoiyagmgumcy] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $ayegqaqygsqsmews = $mksyucucyswaukig->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy); aeockieewgkequae: omqyuuomwywmqeiq: goto misiasooemyskoay; oysyuiqmsokoykaq: if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto ycaqooeeseougumo; } $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya); goto eceeoiwuagocweus; ycaqooeeseougumo: $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya); eceeoiwuagocweus: misiasooemyskoay: goto cqkyumayoemqsueu; eomqeimoequmagum: $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya); cqkyumayoemqsueu: goto sukcyismwageqgok; ksqmcugkcmsooeaw: $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya); sukcyismwageqgok: ukmgwuiqwgyiouec: qykcggwgkweasuii: geoiegikocwmwosi: return $ayegqaqygsqsmews; } public function acamgaegcsioysiw($aaqqkgyougeiueyq) : array { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!is_string($aaqqkgyougeiueyq)) { goto wasuquysysmqyegg; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($aaqqkgyougeiueyq); wasuquysysmqyegg: if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto meiqywmwuoogckss; } $gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$gsmssqouaueqkeui) { goto ogciikaecauiwgyk; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto eqsuaywswuesuika; } $yuwymayicwwqiske = $gsmssqouaueqkeui->ogqgmqymcwsqikme(); $usymcioagieycusu = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); goto okawiaowosqickgq; eqsuaywswuesuika: $yuwymayicwwqiske = $meywaqqsugaoeyys->ogqgmqymcwsqikme(); $usymcioagieycusu = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); okawiaowosqickgq: $syeseoiyagmgumcy = $meywaqqsugaoeyys->ysgiswuowuciwqaq()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\137{$wkwywcemusswkgwk}"); $sogksuscggsicmac = [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $gsmssqouaueqkeui]; ogciikaecauiwgyk: meiqywmwuoogckss: return $sogksuscggsicmac; } public function ewkswoqykwsuckok($siykeiywomwwuoiw, string $qgoqiacsiccwoawi, string $ecysmcqmumqmaagg = Constants::eeccqomoaqsawouy) { if ($siykeiywomwwuoiw) { goto oyeygeykqwcqoeic; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); oyeygeykqwcqoeic: if (!$siykeiywomwwuoiw) { goto eomcuogskessyicy; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg); eomcuogskessyicy: return $siykeiywomwwuoiw; } public function ygyguskuyykskwko(string $qwcmueausqgiwigy, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou($this->qgeqgaaksyemysgo($qwcmueausqgiwigy), $siykeiywomwwuoiw); } public function qgeqgaaksyemysgo(string $qwcmueausqgiwigy) : array { $uoomaookgsyciacm = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $aokagokqyuysuksm = $aaqqkgyougeiueyq->mwyqswsaeeewsosm(); if (!($aaqqkgyougeiueyq instanceof Str || $aaqqkgyougeiueyq instanceof Text)) { goto iicaisyekagswmey; } $uoomaookgsyciacm[$aokagokqyuysuksm] = [Constants::ciyoccqkiamemcmm => "\x25{$qwcmueausqgiwigy}\45", Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim, Constants::eugyciakiowwcuwm => Constants::augocsiaqqukkuui]; iicaisyekagswmey: quiguyyimiqeqcwa: } isaacywgkascmcsw: return $uoomaookgsyciacm; } public function aeggeuqycwawueqy($siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array { try { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::imywcsggckkcywgk => 1, Constants::wikgqsqysyuoykse => [], Constants::soquiwyuimckgiow => ["\52"], Constants::ausqeuugegoygouq => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(), Constants::ieyywsoeoqmceucw => Constants::imywcsggckkcywgk, Constants::wosqwewmqmyweqea => true]); $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] ?: 10, $ywmkwiwkosakssii[Constants::soquiwyuimckgiow] ?: ["\x2a"], $ywmkwiwkosakssii[Constants::ieyywsoeoqmceucw] ?: Constants::imywcsggckkcywgk, $ywmkwiwkosakssii[Constants::imywcsggckkcywgk] ?: 1); $oammesyieqmwuwyi = $ymiyawysimukkoso->items(); if ($oammesyieqmwuwyi) { goto ogwwasqkaageiwwi; } $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse); ogwwasqkaageiwwi: if (!$ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { goto sosqgaswegsomgkw; } $oammesyieqmwuwyi = $this->mgogaykgkoogasim()->cwgkcyyaymmsomqa($oammesyieqmwuwyi); sosqgaswegsomgkw: $uuwmqqqiwksuaise = $ymiyawysimukkoso->total(); $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage(); $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage(); $yeacayasgueouoqc = $ymiyawysimukkoso->currentPage(); } catch (Exception $wgaoewqkwgomoaai) { $oammesyieqmwuwyi = []; $uuwmqqqiwksuaise = 0; $weyoqgcesqgeusiu = 0; $qcugmkuyweqqyggk = 0; $yeacayasgueouoqc = 1; } return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $yeacayasgueouoqc, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu); } public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $yeacayasgueouoqc = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array { return [Constants::ycuusiweasqygwiw => [Constants::uiiqiokqwmccomiu => $uuwmqqqiwksuaise, Constants::yusuiaeueqwieqqq => $ocqawgquwsqioses, Constants::asmooogmgyecqqka => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) : array { return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya); } private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : array { $uomewyckeuqoqocu = []; $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou, $uusmaiomayssaecw); if (!$iwqgomgkuumgyswi) { goto eiegguecasykwmyq; } $uomewyckeuqoqocu = $iwqgomgkuumgyswi->toArray(); eiegguecasykwmyq: return $uomewyckeuqoqocu; } private function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : ?Collection { if ($siykeiywomwwuoiw) { goto qiiqceousoicgeee; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); qiiqceousoicgeee: $iwqgomgkuumgyswi = null; if (!$siykeiywomwwuoiw) { goto jyekikocgagcgywq; } try { switch ($aiamqeawckcsuaou) { case Constants::kaqagayamqaywssm: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->pluck($wkkweuacukumqmya, $uusmaiomayssaecw); goto iaywwgssaoecwmeg; default: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->get($wkkweuacukumqmya); goto iaywwgssaoecwmeg; } maeueeueqoywkiom: iaywwgssaoecwmeg: } catch (Exception $wgaoewqkwgomoaai) { } jyekikocgagcgywq: return $iwqgomgkuumgyswi; } }
