<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use DateTime; use Exception; use Illuminate\Database\Eloquent\Collection; use Illuminate\Database\Query\Builder; use Illuminate\Database\Eloquent\Relations\Relation; use Illuminate\Database\Query\Expression; use Illuminate\Database\Query\JoinClause; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Str; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Repository extends Common { use ModelTrait; const ksawcegcqeeuswkm = "\75"; const gwakowakcqqsyiyu = "\x3c"; const ggyiwkyegsqmgaee = "\76"; const kkiokksygkekyaki = "\x3c\x3d"; const wuuiwugmcgkwkimw = "\x3e\75"; public function exists($siykeiywomwwuoiw = null) { $cmaccwokqweqweqi = false; if (!$siykeiywomwwuoiw instanceof Builder) { goto uugwmywmaqomeksa; } $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists(); uugwmywmaqomeksa: return $cmaccwokqweqweqi; } public function gqaysymikgeawkqa(bool $owoiyeqyeaucssey = true) : ?Builder { try { $mgcmmwqwguicsews = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq(); $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($this->mgogaykgkoogasim()->cueaickeeoiwayou()); $siykeiywomwwuoiw = $mgcmmwqwguicsews->table($aasascamegmwqmqk); $this->exists($siykeiywomwwuoiw); } catch (Exception $wgaoewqkwgomoaai) { $siykeiywomwwuoiw = null; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); if (!$owoiyeqyeaucssey) { goto wowmysuygugawmmu; } $this->mgogaykgkoogasim()->geskigquisseygoc()->cucqgwmoseqakgoe(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(false); wowmysuygugawmmu: } return $siykeiywomwwuoiw; } public final function syugmyosqomgwywi($siykeiywomwwuoiw) : string { if (!is_array($siykeiywomwwuoiw)) { goto mmmqqoemusicwgqg; } $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($siykeiywomwwuoiw); mmmqqoemusicwgqg: $asiqcaccsgscgcyq = $siykeiywomwwuoiw->toSql(); $eyagkkkqkwcuygso = $siykeiywomwwuoiw->getBindings(); $gqgemcmoicmgaqie = str_replace(["\x3f", "\134\x22", "\x22"], ["\x27\45\x73\x27", '', ''], $asiqcaccsgscgcyq); return vsprintf($gqgemcmoicmgaqie, $eyagkkkqkwcuygso); } public final function myywwqkyiwawwquy(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi) : string { return "{$aasascamegmwqmqk}\x2e{$qgoqiacsiccwoawi}"; } public final function kmgukcsewikeswco(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) { if ("\156\x75\x6c\154" === strtolower($aikcyecgesuiaacw)) { goto iquugwoswgkoiieg; } $sogksuscggsicmac = "{$this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi)}\40\141\163\x20{$aikcyecgesuiaacw}"; goto xogaycsaesgqeqig; iquugwoswgkoiieg: $sogksuscggsicmac = $this->gqaysymikgeawkqa()->raw("\156\165\154\x6c\40\x61\x73\40{$qgoqiacsiccwoawi}"); xogaycsaesgqeqig: return $sogksuscggsicmac; } public function kqewyqqqiyiouaou(array $uoomaookgsyciacm, $siykeiywomwwuoiw = null, $iqqgseqwyegkeqws = null) { if (!(!$siykeiywomwwuoiw instanceof Builder || !$siykeiywomwwuoiw instanceof Relation)) { goto gsiaskgsukseumig; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); gsiaskgsukseumig: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($iqqgseqwyegkeqws) { goto syiyemqigyugagks; } $iqqgseqwyegkeqws = $meywaqqsugaoeyys->cokoiaeeomgssqgy(); syiyemqigyugagks: if (!($siykeiywomwwuoiw && $uoomaookgsyciacm)) { goto aqmiewawgseaqeqk; } foreach ($uoomaookgsyciacm as $qgoqiacsiccwoawi => $gqgemcmoicmgaqie) { $mqogqgswmasasmik = (bool) ($gqgemcmoicmgaqie[Constants::sieeooaigsmwocym] ?? false); $sgiywwewawiewkam = (bool) ($gqgemcmoicmgaqie[Constants::sikukwmqygowwwiy] ?? false); $eqgoocgaqwqcimie = $gqgemcmoicmgaqie[Constants::ciyoccqkiamemcmm] ?? $gqgemcmoicmgaqie; $aasascamegmwqmqk = $gqgemcmoicmgaqie[Constants::ugsuecoyuqcamsac] ?? $iqqgseqwyegkeqws; $yummaigqmauwcyou = $gqgemcmoicmgaqie[Constants::euoaaiqkqcqcgeco] ?? Constants::qmesccgukkkogskw; $qsycuegoicqcqkmo = $gqgemcmoicmgaqie[Constants::cwsguekoagqkaesm] ?? Constants::weaykmmocuacwekg; $cackiyicawmkyqqg = $gqgemcmoicmgaqie[Constants::eugyciakiowwcuwm] ?? self::ksawcegcqeeuswkm; $ewumwgcosqecykeo = $gqgemcmoicmgaqie[Constants::emkkgysokckswycs] ?? $meywaqqsugaoeyys; $mqgysgoemumiwmis = $gqgemcmoicmgaqie[Constants::iowgsqgiaamyuswi] ?? []; if (!is_numeric($qgoqiacsiccwoawi)) { goto umemmgiwimkymaya; } $qgoqiacsiccwoawi = $gqgemcmoicmgaqie[Constants::meisqwykgaymauka] ?? $qgoqiacsiccwoawi; umemmgiwimkymaya: $qekiiaomcwyquqqm = $qgoqiacsiccwoawi; if (!($aasascamegmwqmqk && is_string($qgoqiacsiccwoawi))) { goto omsmaougqkqigogw; } $qgoqiacsiccwoawi = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi); omsmaougqkqigogw: if (!$sgiywwewawiewkam) { goto geasgywiogoeamek; } $eqgoocgaqwqcimie = $siykeiywomwwuoiw->raw($eqgoocgaqwqcimie); geasgywiogoeamek: if (!(!$mqgysgoemumiwmis && is_array($eqgoocgaqwqcimie) && $yummaigqmauwcyou === Constants::qmesccgukkkogskw)) { goto qweyymyuuqwcmkqg; } $yummaigqmauwcyou = Constants::wuwqeigceueyqmsc; qweyymyuuqwcmkqg: $aaqqkgyougeiueyq = $ewumwgcosqecykeo->uqeoyqiwywwmsiew($qekiiaomcwyquqqm); if (!$aaqqkgyougeiueyq instanceof Enum) { goto guqmgiqaaowaauyo; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiesyimugeuuwcma($eqgoocgaqwqcimie); guqmgiqaaowaauyo: switch ($yummaigqmauwcyou) { case Constants::uwkgmaicmwigeeee: $siykeiywomwwuoiw = $siykeiywomwwuoiw->distinct(); goto mccimkgwkkamsime; case Constants::cgiswgcumueqgcmw: $siykeiywomwwuoiw = $siykeiywomwwuoiw->limit($eqgoocgaqwqcimie); goto mccimkgwkkamsime; case Constants::kcweakweogywcmoq: $siykeiywomwwuoiw = $siykeiywomwwuoiw->groupBy($eqgoocgaqwqcimie); goto mccimkgwkkamsime; case Constants::wwywmwwigoiyqimg: $siykeiywomwwuoiw = $siykeiywomwwuoiw->inRandomOrder(); goto mccimkgwkkamsime; case Constants::gqiasegggowomgie: case Constants::cqcimoqckgmaacyw: if (is_array($eqgoocgaqwqcimie)) { goto oasisywuwssumsok; } if (in_array($eqgoocgaqwqcimie, [Constants::omaksceqmigeaoko, Constants::eeccqomoaqsawouy], true)) { goto iuyagqakcieasiua; } $eqgoocgaqwqcimie = Constants::eeccqomoaqsawouy; iuyagqakcieasiua: $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $eqgoocgaqwqcimie); goto iaoyeugekskmewgs; oasisywuwssumsok: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->eqyqgywiseiwqocc($eqgoocgaqwqcimie); $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderByRaw("\x46\111\x45\x4c\104\x28{$ewumwgcosqecykeo->ouscimcwyiassmcs($qgoqiacsiccwoawi)}\x2c\x20\x27{$eqgoocgaqwqcimie}\x27\51"); iaoyeugekskmewgs: goto mccimkgwkkamsime; case Constants::ackcaikowcokggsc: case Constants::wuwqeigceueyqmsc: if (is_array($eqgoocgaqwqcimie)) { goto iokemmkgmcaksiqu; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; iokemmkgmcaksiqu: if ($aaqqkgyougeiueyq instanceof Json) { goto kieyoaoawqacqamy; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik); goto qckouamqueqiykqi; kieyoaoawqacqamy: $sucyqoqkkkyqwkao = []; foreach ($eqgoocgaqwqcimie as $igqsaukqcqscimok) { $sucyqoqkkkyqwkao[] = [Constants::ciyoccqkiamemcmm => "\x25\42{$igqsaukqcqscimok}\x22\45", Constants::meisqwykgaymauka => $qekiiaomcwyquqqm, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo, Constants::eugyciakiowwcuwm => Constants::augocsiaqqukkuui]; eciksmgaqikwegwq: } okagauksoqkoqygi: $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($sucyqoqkkkyqwkao, $siykeiywomwwuoiw, $aasascamegmwqmqk); qckouamqueqiykqi: goto mccimkgwkkamsime; case Constants::SELECT: $siykeiywomwwuoiw = $siykeiywomwwuoiw->select($qekiiaomcwyquqqm); goto mccimkgwkkamsime; case Constants::yqwcogcwsuecwscy: $siykeiywomwwuoiw = $siykeiywomwwuoiw->addSelect($eqgoocgaqwqcimie); goto mccimkgwkkamsime; case Constants::ycasqqegycucigcy: $sqeykgyoooqysmca = $gqgemcmoicmgaqie[Constants::squoamkioomemiyi] ?? Constants::qyiusaesoeakesco; $icsywsyukqcciiky = (bool) ($gqgemcmoicmgaqie[Constants::qmesccgukkkogskw] ?? false); $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky); goto mccimkgwkkamsime; case Constants::imiesusgyysqwyew: $saqkweiwkkmkaiso = $eqgoocgaqwqcimie[0] ?? null; $wcigocykcugesikg = $eqgoocgaqwqcimie[1] ?? null; if (!$aaqqkgyougeiueyq instanceof Foreign) { goto uuisaeysawuagysg; } $mookcykiycqukcks = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$mookcykiycqukcks) { goto camawumockccayaq; } if ($saqkweiwkkmkaiso) { goto wiaesksmicgikqcm; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto measoqewessauqma; } $saqkweiwkkmkaiso = $this->kumuygiiqswoyasy(); goto auaigccmwqwsqsku; measoqewessauqma: $saqkweiwkkmkaiso = $qekiiaomcwyquqqm; auaigccmwqwsqsku: wiaesksmicgikqcm: $saqkweiwkkmkaiso = $this->myywwqkyiwawwquy($saqkweiwkkmkaiso); if (!$wcigocykcugesikg && is_string($eqgoocgaqwqcimie)) { goto gqaimiooakyykccy; } if (!(!$aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->aumgkcogqygmwsqy())) { goto mcucegiogmuyogki; } $wcigocykcugesikg = $mookcykiycqukcks->kumuygiiqswoyasy(); mcucegiogmuyogki: goto agemeseegiuuowgo; gqaimiooakyykccy: $wcigocykcugesikg = $eqgoocgaqwqcimie; agemeseegiuuowgo: if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto goswwiomuackymqi; } $aasascamegmwqmqk = $mookcykiycqukcks->cokoiaeeomgssqgy(); $wcigocykcugesikg = $mookcykiycqukcks->myywwqkyiwawwquy($wcigocykcugesikg); goto gykuaukukosiocoy; goswwiomuackymqi: [$aasascamegmwqmqk] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $wcigocykcugesikg = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $wcigocykcugesikg); gykuaukukosiocoy: camawumockccayaq: uuisaeysawuagysg: if ($mqgysgoemumiwmis) { goto usgcoawgqswoeiec; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, $saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg); goto qowcwmsiyscackaa; usgcoawgqswoeiec: $koegqoagisewcica = (bool) ($gqgemcmoicmgaqie[Constants::ON] ?? true); $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, function (JoinClause $eagqsqeocaokmsim) use($saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg, $mqgysgoemumiwmis, $koegqoagisewcica, $aasascamegmwqmqk) { if (!$koegqoagisewcica) { goto ggqeakyaggiuegek; } $eagqsqeocaokmsim->on($saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg); ggqeakyaggiuegek: return $this->kqewyqqqiyiouaou($mqgysgoemumiwmis, $eagqsqeocaokmsim, $aasascamegmwqmqk); }); qowcwmsiyscackaa: goto mccimkgwkkamsime; case Constants::weigugswsgkycqkc: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNull($qgoqiacsiccwoawi, $qsycuegoicqcqkmo, $mqogqgswmasasmik); goto mccimkgwkkamsime; case Constants::amiwmcmkayqsycia: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNotNull($qgoqiacsiccwoawi, $qsycuegoicqcqkmo); goto mccimkgwkkamsime; case Constants::qmesccgukkkogskw: if ($mqgysgoemumiwmis) { goto aqigiwmamkowomiw; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); goto qesqgumuouyymcwa; aqigiwmamkowomiw: $siykeiywomwwuoiw = $siykeiywomwwuoiw->where(function ($gqgemcmoicmgaqie) use($mqgysgoemumiwmis, $aasascamegmwqmqk) { return $this->kqewyqqqiyiouaou($mqgysgoemumiwmis, $gqgemcmoicmgaqie, $aasascamegmwqmqk); }, null, null, $qsycuegoicqcqkmo); qesqgumuouyymcwa: goto mccimkgwkkamsime; case Constants::kumuoysauoagaiiy: $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw); goto mccimkgwkkamsime; case Constants::oeusoaowacmykwsm: if (!is_array($eqgoocgaqwqcimie)) { goto imeaiksowuukikui; } $aikcyecgesuiaacw = $gqgemcmoicmgaqie[Constants::wsgoaaeiyusigoym] ?? []; $mciqqmyssqigmqyo = 0; $iiueagsqmqqkiiwm = $gqgemcmoicmgaqie[Constants::SELECT] ?? []; foreach ($iiueagsqmqqkiiwm as $uusmaiomayssaecw => $igqsaukqcqscimok) { switch ($uusmaiomayssaecw) { case Constants::sgyowqgsmegoocaw: if (!is_array($igqsaukqcqscimok)) { goto kyggwyywiycksgqq; } $kaywamcmkqogouck = []; foreach ($igqsaukqcqscimok as $imgcoakmmgqsckkm => $wocwawaaemuoqmig) { $uiymkeeaukcyqqik = $wocwawaaemuoqmig[Constants::ciyoccqkiamemcmm] ?? $wocwawaaemuoqmig; $imgcoakmmgqsckkm = $wocwawaaemuoqmig[Constants::meisqwykgaymauka] ?? $imgcoakmmgqsckkm; $weawyioewioikeaq = $wocwawaaemuoqmig[Constants::eugyciakiowwcuwm] ?? $cackiyicawmkyqqg; if (!($imgcoakmmgqsckkm && $uiymkeeaukcyqqik)) { goto gyeayeuuyiemuwuq; } if (is_numeric($uiymkeeaukcyqqik)) { goto aymmymequcisekie; } $uiymkeeaukcyqqik = "\x27{$uiymkeeaukcyqqik}\47"; aymmymequcisekie: $kaywamcmkqogouck[] = "{$imgcoakmmgqsckkm}\x20{$weawyioewioikeaq}\40{$uiymkeeaukcyqqik}"; gyeayeuuyiemuwuq: yyamycyesguwueuw: } waewaiuiogywqigu: $kaywamcmkqogouck = implode("\x20\x41\x4e\104\x20", $kaywamcmkqogouck); kyggwyywiycksgqq: goto ggwcauaeuagekeyo; case Constants::mskoigqmkguawcac: $ssccayguowuawggi = $igqsaukqcqscimok; goto ggwcauaeuagekeyo; case Constants::kgmgkqegkacowmia: $mciqqmyssqigmqyo = $igqsaukqcqscimok; goto ggwcauaeuagekeyo; } mmkoqmccusoeaoyi: ggwcauaeuagekeyo: ggqwcqssoauckuic: } csyoimsqgwcmiwki: if (!isset($kaywamcmkqogouck, $ssccayguowuawggi, $mciqqmyssqigmqyo)) { goto sugumgeqcwgekcqs; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->selectRaw("\123\125\115\50\103\x41\123\x45\40\127\110\x45\116\x20{$kaywamcmkqogouck}\x20\124\110\105\x4e\40{$ssccayguowuawggi}\40\105\x4c\123\105\x20{$mciqqmyssqigmqyo}\40\105\x4e\104\x29\x20\141\x73\40{$aikcyecgesuiaacw}"); sugumgeqcwgekcqs: imeaiksowuukikui: goto mccimkgwkkamsime; } ucaoyoamaycsiacq: mccimkgwkkamsime: imwiyqcekcykscui: } woqkgwmkmqsuceuy: aqmiewawgseaqeqk: return $siykeiywomwwuoiw; } public function wkmkqaiwuqouweye(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou([$aiowsaccomcoikus => [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]], $siykeiywomwwuoiw); } public function akkkoiiymmamsauc($eqgoocgaqwqcimie = null, string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\x2a") { if ($aiowsaccomcoikus) { goto gaceikykesgywssm; } $aiowsaccomcoikus = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); gaceikykesgywssm: return $this->geeumyocaqwwquwk($this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie), $wkkweuacukumqmya); } public function oqomcmyuuakigusk(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\x2a"]) { return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($uoomaookgsyciacm), $wkkweuacukumqmya); } private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) { $mksyucucyswaukig = null; if (!$siykeiywomwwuoiw) { goto weggeeowykuqooyg; } $mksyucucyswaukig = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya); weggeeowykuqooyg: return $mksyucucyswaukig; } public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null) { if ($siykeiywomwwuoiw) { goto cqkuuyouqoqyguus; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); cqkuuyouqoqyguus: if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) { goto ssmgmiuqoeiuacsa; } $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg); ssmgmiuqoeiuacsa: $mksyucucyswaukig = null; if (!$siykeiywomwwuoiw) { goto wiqigqgiegmacgsw; } $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya); wiqigqgiegmacgsw: return $mksyucucyswaukig; } public function yassqyiieqeywoqi(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg); if (!$siykeiywomwwuoiw) { goto gwoacimkeyymqccq; } $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); gwoacimkeyymqccq: return $aqykuigiuwmmcieu; } public function cieaqygkucwoqwke(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm); if (!$siykeiywomwwuoiw) { goto koggssokukoukkay; } $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); koggssokukoukkay: return $aqykuigiuwmmcieu; } public function asskucacysemeoiu(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = "\x2a") : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->kqewyqqqiyiouaou($uoomaookgsyciacm)); } public function ieieyoeqmmeysauc(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = "\x2a", $siykeiywomwwuoiw = null) : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw)); } public function ygmcsmegcysyeoss($wkkweuacukumqmya = "\52", $siykeiywomwwuoiw = null) : int { $gaeqamemwmwsyukm = 0; if ($siykeiywomwwuoiw) { goto ueaiskyiqcquiika; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); ueaiskyiqcquiika: if (!$siykeiywomwwuoiw) { goto eqemcocqsyasqycq; } $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count($wkkweuacukumqmya); eqemcocqsyasqycq: return $gaeqamemwmwsyukm; } public function qgiewwqykwugcuoo(string $qgoqiacsiccwoawi, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null) { $qsmaqqyoggcuyukq = 0; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); if (!$siykeiywomwwuoiw) { goto ucecweoaoyeoyuue; } $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi); ucecweoaoyeoyuue: return $qsmaqqyoggcuyukq; } public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = ["\x2a"], array $uoomaookgsyciacm = []) { $essikcmqiyqaqoaq = []; try { if ($iceamweyeeiwiucs instanceof Relation) { goto csucwwqcsaymyiuk; } $jwsqucqyaoaasykk = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($iceamweyeeiwiucs); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto qccmuwiwykuegoga; } if (!($meywaqqsugaoeyys = $aaqqkgyougeiueyq->ggmimykuacwcogaq())) { goto osqgywagokmsicqe; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $sgmoseoaumayiowg = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $iceamweyeeiwiucs); $moqewomugocaueis = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $ceiwsaacewygcsqg); $iscgcmeykqwwowmq = $aaqqkgyougeiueyq->ogkqyamocsimiymw(); if (!($aaqqkgyougeiueyq->eiyqqesoywqkegwu() || $aaqqkgyougeiueyq->wmomygggskkoqess())) { goto ymwyooosikgokiaa; } if (!$aaqqkgyougeiueyq->wmomygggskkoqess()) { goto yuoamgkigcwaooqu; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto cqugssuesycomqwa; } return $this->akkkoiiymmamsauc($sgmoseoaumayiowg, $aaqqkgyougeiueyq->iooowgsqoyqseyuu()); cqugssuesycomqwa: if (!$iscgcmeykqwwowmq) { goto kaiqsuaywyuckuoo; } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($moqewomugocaueis, $iscgcmeykqwwowmq); kaiqsuaywyuckuoo: yuoamgkigcwaooqu: return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($sgmoseoaumayiowg, $ceiwsaacewygcsqg); ymwyooosikgokiaa: if (!($iscgcmeykqwwowmq && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) { goto qaiuogoowcoimwee; } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->yassqyiieqeywoqi($iscgcmeykqwwowmq, $moqewomugocaueis); qaiuogoowcoimwee: osqgywagokmsicqe: qccmuwiwykuegoga: $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig); goto iiuuwuwcwamqegey; csucwwqcsaymyiuk: $ayegqaqygsqsmews = $iceamweyeeiwiucs; iiuuwuwcwamqegey: if (!$ayegqaqygsqsmews) { goto uscissuaiyuiukea; } if (!$uoomaookgsyciacm) { goto qmgueimkwqmsakis; } $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews); qmgueimkwqmsakis: if (!$ayegqaqygsqsmews) { goto ooqmaweuqmcmwsuk; } $essikcmqiyqaqoaq = $this->iiqauwkoiguyeawu($ayegqaqygsqsmews, $wkkweuacukumqmya); ooqmaweuqmcmwsuk: uscissuaiyuiukea: } catch (Exception $wgaoewqkwgomoaai) { } return $essikcmqiyqaqoaq; } public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation { $ayegqaqygsqsmews = null; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($mksyucucyswaukig instanceof self) { goto cycwgukowsksmkyc; } $aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig); if (!$mksyucucyswaukig) { goto kuyqusuycscumuek; } $mksyucucyswaukig = $meywaqqsugaoeyys->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($aokagokqyuysuksm); kuyqusuycscumuek: cycwgukowsksmkyc: if (!$mksyucucyswaukig instanceof self) { goto aycqgowuwagcgque; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($ymaogssqccumcyqa); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto iauwkeeaqsgweeoo; } if (!($yccmomaaqwugeiuo = $aaqqkgyougeiueyq->ggmimykuacwcogaq())) { goto ywoyioqqyuocoygk; } $egkyssmuqcwaciya = $yccmomaaqwugeiuo::class; if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto mwqcykaeywsmoumm; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto eimouyomcoqkmaae; } if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto ggoimgeeuugseiwk; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto qioswooukgoowsuc; } if (!$yccmomaaqwugeiuo instanceof self) { goto qycsooiomiugimqc; } [$syeseoiyagmgumcy] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $ayegqaqygsqsmews = $mksyucucyswaukig->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy); qycsooiomiugimqc: qioswooukgoowsuc: goto gimquiiwucueoqkw; ggoimgeeuugseiwk: if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto siuyaemoiiqyoggo; } $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya); goto koemwyegoqwiikom; siuyaemoiiqyoggo: $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya); koemwyegoqwiikom: gimquiiwucueoqkw: goto kkwqmoeeqygoimwg; eimouyomcoqkmaae: $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya); kkwqmoeeqygoimwg: goto awgmyaycugswmwae; mwqcykaeywsmoumm: $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya); awgmyaycugswmwae: ywoyioqqyuocoygk: iauwkeeaqsgweeoo: aycqgowuwagcgque: return $ayegqaqygsqsmews; } public function acamgaegcsioysiw($aaqqkgyougeiueyq) : array { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!is_string($aaqqkgyougeiueyq)) { goto icuukwkwqeoogyae; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($aaqqkgyougeiueyq); icuukwkwqeoogyae: if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto gcogomgmqcgkeceg; } $gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$gsmssqouaueqkeui) { goto ikqagqacuwcgwmqy; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto iwcmgioeaiyuacwi; } $yuwymayicwwqiske = $gsmssqouaueqkeui->ogqgmqymcwsqikme(); $usymcioagieycusu = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); goto iyyaiuccouqowyga; iwcmgioeaiyuacwi: $yuwymayicwwqiske = $meywaqqsugaoeyys->ogqgmqymcwsqikme(); $usymcioagieycusu = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); iyyaiuccouqowyga: $syeseoiyagmgumcy = $meywaqqsugaoeyys->ysgiswuowuciwqaq()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\137{$wkwywcemusswkgwk}"); $sogksuscggsicmac = [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $gsmssqouaueqkeui]; ikqagqacuwcgwmqy: gcogomgmqcgkeceg: return $sogksuscggsicmac; } public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::wuuiwugmcgkwkimw, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, bool $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) { try { if ($siykeiywomwwuoiw) { goto cksomiiqscosigke; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); cksomiiqscosigke: if ($cackiyicawmkyqqg === Constants::yoaakgmawgaeyeim && is_array($eqgoocgaqwqcimie)) { goto kisccmsaieigisiu; } if (!is_numeric($eqgoocgaqwqcimie)) { goto ugmukcwgcioqgywy; } $eqgoocgaqwqcimie = new DateTime($eqgoocgaqwqcimie); ugmukcwgcioqgywy: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); goto euoscysqgugsqewc; kisccmsaieigisiu: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik); euoscysqgugsqewc: } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } return $siykeiywomwwuoiw; } public function ewkswoqykwsuckok($siykeiywomwwuoiw, string $qgoqiacsiccwoawi, string $ecysmcqmumqmaagg = Constants::eeccqomoaqsawouy) { if ($siykeiywomwwuoiw) { goto mwwygasiagaqsimo; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); mwwygasiagaqsimo: if (!$siykeiywomwwuoiw) { goto wucacaegysmiusai; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg); wucacaegysmiusai: return $siykeiywomwwuoiw; } public function ygyguskuyykskwko(string $qwcmueausqgiwigy, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou($this->qgeqgaaksyemysgo($qwcmueausqgiwigy), $siykeiywomwwuoiw); } public function qgeqgaaksyemysgo(string $qwcmueausqgiwigy) : array { $uoomaookgsyciacm = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $aokagokqyuysuksm = $aaqqkgyougeiueyq->mwyqswsaeeewsosm(); if (!($aaqqkgyougeiueyq instanceof Str || $aaqqkgyougeiueyq instanceof Text)) { goto uookseqsmsqgweuy; } $uoomaookgsyciacm[$aokagokqyuysuksm] = [Constants::ciyoccqkiamemcmm => "\45{$qwcmueausqgiwigy}\45", Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim, Constants::eugyciakiowwcuwm => Constants::augocsiaqqukkuui]; uookseqsmsqgweuy: mseokuecmeoyoggk: } eeomcmuiqwgwwuqk: return $uoomaookgsyciacm; } public function aeggeuqycwawueqy($siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array { try { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::imywcsggckkcywgk => 1, Constants::wikgqsqysyuoykse => [], Constants::soquiwyuimckgiow => ["\x2a"], Constants::ausqeuugegoygouq => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(), Constants::ieyywsoeoqmceucw => Constants::imywcsggckkcywgk, Constants::wosqwewmqmyweqea => true]); $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] ?: 10, $ywmkwiwkosakssii[Constants::soquiwyuimckgiow] ?: ["\x2a"], $ywmkwiwkosakssii[Constants::ieyywsoeoqmceucw] ?: Constants::imywcsggckkcywgk, $ywmkwiwkosakssii[Constants::imywcsggckkcywgk] ?: 1); $oammesyieqmwuwyi = $ymiyawysimukkoso->items(); if ($oammesyieqmwuwyi) { goto yeaqsiqgakskoykg; } $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse); yeaqsiqgakskoykg: if (!$ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { goto esgyqksmcukeuwyk; } $oammesyieqmwuwyi = $this->mgogaykgkoogasim()->cwgkcyyaymmsomqa($oammesyieqmwuwyi); esgyqksmcukeuwyk: $uuwmqqqiwksuaise = $ymiyawysimukkoso->total(); $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage(); $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage(); $yeacayasgueouoqc = $ymiyawysimukkoso->currentPage(); } catch (Exception $wgaoewqkwgomoaai) { $oammesyieqmwuwyi = []; $uuwmqqqiwksuaise = 0; $weyoqgcesqgeusiu = 0; $qcugmkuyweqqyggk = 0; $yeacayasgueouoqc = 1; } return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $yeacayasgueouoqc, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu); } public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $yeacayasgueouoqc = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array { return [Constants::ycuusiweasqygwiw => [Constants::uiiqiokqwmccomiu => $uuwmqqqiwksuaise, Constants::yusuiaeueqwieqqq => $ocqawgquwsqioses, Constants::asmooogmgyecqqka => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) : array { return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya); } private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : array { $uomewyckeuqoqocu = []; $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou, $uusmaiomayssaecw); if (!$iwqgomgkuumgyswi) { goto iigmgswcogqemgao; } $uomewyckeuqoqocu = $iwqgomgkuumgyswi->toArray(); iigmgswcogqemgao: return $uomewyckeuqoqocu; } private function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : ?Collection { if ($siykeiywomwwuoiw) { goto ycaqooeeseougumo; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); ycaqooeeseougumo: $iwqgomgkuumgyswi = null; if (!$siykeiywomwwuoiw) { goto omqyuuomwywmqeiq; } try { switch ($aiamqeawckcsuaou) { case Constants::kaqagayamqaywssm: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->pluck($wkkweuacukumqmya, $uusmaiomayssaecw); goto eceeoiwuagocweus; default: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->get($wkkweuacukumqmya); goto eceeoiwuagocweus; } aeockieewgkequae: eceeoiwuagocweus: } catch (Exception $wgaoewqkwgomoaai) { } omqyuuomwywmqeiq: return $iwqgomgkuumgyswi; } }
