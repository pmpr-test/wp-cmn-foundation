<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use DateTime; use Exception; use Illuminate\Database\Eloquent\Collection; use Illuminate\Database\Query\Builder; use Illuminate\Database\Eloquent\Relations\Relation; use Illuminate\Database\Query\Expression; use Illuminate\Database\Query\JoinClause; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Str; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Repository extends Common { use ModelTrait; const ksawcegcqeeuswkm = "\75"; const gwakowakcqqsyiyu = "\74"; const ggyiwkyegsqmgaee = "\x3e"; const kkiokksygkekyaki = "\x3c\x3d"; const wuuiwugmcgkwkimw = "\76\x3d"; public function exists($siykeiywomwwuoiw = null) { $cmaccwokqweqweqi = false; if (!$siykeiywomwwuoiw instanceof Builder) { goto uugwmywmaqomeksa; } $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists(); uugwmywmaqomeksa: return $cmaccwokqweqweqi; } public function gqaysymikgeawkqa(bool $owoiyeqyeaucssey = true) : ?Builder { try { $mgcmmwqwguicsews = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq(); $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($this->mgogaykgkoogasim()->cueaickeeoiwayou()); $siykeiywomwwuoiw = $mgcmmwqwguicsews->table($aasascamegmwqmqk); $this->exists($siykeiywomwwuoiw); } catch (Exception $wgaoewqkwgomoaai) { $siykeiywomwwuoiw = null; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); if (!$owoiyeqyeaucssey) { goto wowmysuygugawmmu; } $this->mgogaykgkoogasim()->geskigquisseygoc()->cucqgwmoseqakgoe(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(false); wowmysuygugawmmu: } return $siykeiywomwwuoiw; } public final function syugmyosqomgwywi($siykeiywomwwuoiw) : string { if (!is_array($siykeiywomwwuoiw)) { goto mmmqqoemusicwgqg; } $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($siykeiywomwwuoiw); mmmqqoemusicwgqg: $asiqcaccsgscgcyq = $siykeiywomwwuoiw->toSql(); $eyagkkkqkwcuygso = $siykeiywomwwuoiw->getBindings(); $gqgemcmoicmgaqie = str_replace(["\x3f", "\x5c\42", "\42"], ["\47\45\x73\x27", '', ''], $asiqcaccsgscgcyq); return vsprintf($gqgemcmoicmgaqie, $eyagkkkqkwcuygso); } public final function myywwqkyiwawwquy(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi) : string { return "{$aasascamegmwqmqk}\56{$qgoqiacsiccwoawi}"; } public final function kmgukcsewikeswco(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) { if ("\x6e\165\154\154" === strtolower($aikcyecgesuiaacw)) { goto iquugwoswgkoiieg; } $sogksuscggsicmac = "{$this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi)}\40\141\x73\40{$aikcyecgesuiaacw}"; goto xogaycsaesgqeqig; iquugwoswgkoiieg: $sogksuscggsicmac = $this->gqaysymikgeawkqa()->raw("\156\x75\x6c\x6c\40\141\x73\40{$qgoqiacsiccwoawi}"); xogaycsaesgqeqig: return $sogksuscggsicmac; } public function kqewyqqqiyiouaou(array $uoomaookgsyciacm, $siykeiywomwwuoiw = null, $iqqgseqwyegkeqws = null) { if (!(!$siykeiywomwwuoiw instanceof Builder || !$siykeiywomwwuoiw instanceof Relation)) { goto gsiaskgsukseumig; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); gsiaskgsukseumig: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($iqqgseqwyegkeqws) { goto syiyemqigyugagks; } $iqqgseqwyegkeqws = $meywaqqsugaoeyys->cokoiaeeomgssqgy(); syiyemqigyugagks: if (!($siykeiywomwwuoiw && $uoomaookgsyciacm)) { goto cqugssuesycomqwa; } foreach ($uoomaookgsyciacm as $qgoqiacsiccwoawi => $gqgemcmoicmgaqie) { if (!is_numeric($qgoqiacsiccwoawi)) { goto umemmgiwimkymaya; } $qgoqiacsiccwoawi = $gqgemcmoicmgaqie[Constants::meisqwykgaymauka] ?? $qgoqiacsiccwoawi; umemmgiwimkymaya: $qekiiaomcwyquqqm = $qgoqiacsiccwoawi; $aikcyecgesuiaacw = $gqgemcmoicmgaqie[Constants::wsgoaaeiyusigoym] ?? ''; $mqogqgswmasasmik = (bool) ($gqgemcmoicmgaqie[Constants::sieeooaigsmwocym] ?? false); $sgiywwewawiewkam = (bool) ($gqgemcmoicmgaqie[Constants::sikukwmqygowwwiy] ?? false); $eqgoocgaqwqcimie = $gqgemcmoicmgaqie[Constants::ciyoccqkiamemcmm] ?? $gqgemcmoicmgaqie; $aasascamegmwqmqk = $gqgemcmoicmgaqie[Constants::ugsuecoyuqcamsac] ?? $iqqgseqwyegkeqws; $yummaigqmauwcyou = $gqgemcmoicmgaqie[Constants::euoaaiqkqcqcgeco] ?? Constants::qmesccgukkkogskw; $qsycuegoicqcqkmo = $gqgemcmoicmgaqie[Constants::cwsguekoagqkaesm] ?? Constants::weaykmmocuacwekg; $cackiyicawmkyqqg = $gqgemcmoicmgaqie[Constants::eugyciakiowwcuwm] ?? self::ksawcegcqeeuswkm; $ewumwgcosqecykeo = $gqgemcmoicmgaqie[Constants::emkkgysokckswycs] ?? $meywaqqsugaoeyys; $mqgysgoemumiwmis = $gqgemcmoicmgaqie[Constants::iowgsqgiaamyuswi] ?? []; if (!($qgoqiacsiccwoawi === Constants::cuoyscoiacswuauq && $meywaqqsugaoeyys->gwckcieqcmsaysow() && ($ameuyuucmwqqsgwa = $meywaqqsugaoeyys->yomauqsskqkugkgy()))) { goto oasisywuwssumsok; } $aasascamegmwqmqk = $ameuyuucmwqqsgwa->cokoiaeeomgssqgy(); $wkkweuacukumqmya = [$meywaqqsugaoeyys->kumuygiiqswoyasy(true)]; foreach ($meywaqqsugaoeyys->aeosueemgsygqese() as $ymqmyyeuycgmigyo => $qgcgysiwuygagkao) { if (!($qgcgysiwuygagkao instanceof Foreign && ($qgcgysiwuygagkao->ygswmewosceowmya() || $qgcgysiwuygagkao->iueigwuckeaswyuu()))) { goto qweyymyuuqwcmkqg; } goto geasgywiogoeamek; qweyymyuuqwcmkqg: $wkkweuacukumqmya[] = $ymqmyyeuycgmigyo; geasgywiogoeamek: } omsmaougqkqigogw: $asycuuiuosiugcqs = [[Constants::euoaaiqkqcqcgeco => Constants::SELECT, Constants::meisqwykgaymauka => $wkkweuacukumqmya]]; $momcykaoccoymeig = 1; foreach ($gqgemcmoicmgaqie as $imgcoakmmgqsckkm => $qqmmggwcsmymegca) { $gekaiayeauiswumc = "\x6d\x65\x74\x61\144\x61\164\141{$momcykaoccoymeig}"; if (is_string($qqmmggwcsmymegca)) { goto ucaoyoamaycsiacq; } $aucgaecqisksougg = $qqmmggwcsmymegca[Constants::ciyoccqkiamemcmm] ?? ''; unset($qqmmggwcsmymegca[Constants::ciyoccqkiamemcmm]); $qamsacaymgiwkyqu = $qqmmggwcsmymegca; goto iuyagqakcieasiua; ucaoyoamaycsiacq: $aucgaecqisksougg = $qqmmggwcsmymegca; $qamsacaymgiwkyqu = []; iuyagqakcieasiua: $qamsacaymgiwkyqu[Constants::meisqwykgaymauka] = $ameuyuucmwqqsgwa->myywwqkyiwawwquy(Constants::iwmgegikocuwggua, $gekaiayeauiswumc); $qamsacaymgiwkyqu[Constants::ciyoccqkiamemcmm] = $aucgaecqisksougg; $qamsacaymgiwkyqu[Constants::ugsuecoyuqcamsac] = ''; $ywqmsciwouysaiie = [Constants::meisqwykgaymauka => $ameuyuucmwqqsgwa->myywwqkyiwawwquy(Constants::osocaqqumyuooqyo, $gekaiayeauiswumc), Constants::ciyoccqkiamemcmm => $imgcoakmmgqsckkm, Constants::ugsuecoyuqcamsac => '']; $asycuuiuosiugcqs[] = [Constants::wsgoaaeiyusigoym => $gekaiayeauiswumc, Constants::ugsuecoyuqcamsac => $ameuyuucmwqqsgwa->cokoiaeeomgssqgy(), Constants::ciyoccqkiamemcmm => [$ameuyuucmwqqsgwa->myywwqkyiwawwquy($ameuyuucmwqqsgwa->iymiksyekgoqkosc(), $gekaiayeauiswumc), $this->myywwqkyiwawwquy($meywaqqsugaoeyys->kumuygiiqswoyasy())], Constants::euoaaiqkqcqcgeco => Constants::imiesusgyysqwyew]; $asycuuiuosiugcqs[] = [Constants::iowgsqgiaamyuswi => [$qamsacaymgiwkyqu, $ywqmsciwouysaiie]]; $momcykaoccoymeig++; mccimkgwkkamsime: } guqmgiqaaowaauyo: $yummaigqmauwcyou = Constants::mcwismemiumceoos; $mqgysgoemumiwmis = $asycuuiuosiugcqs; oasisywuwssumsok: if (!($aasascamegmwqmqk && is_string($qgoqiacsiccwoawi))) { goto iaoyeugekskmewgs; } $qgoqiacsiccwoawi = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi); iaoyeugekskmewgs: if (!$sgiywwewawiewkam) { goto iokemmkgmcaksiqu; } $eqgoocgaqwqcimie = $siykeiywomwwuoiw->raw($eqgoocgaqwqcimie); iokemmkgmcaksiqu: if (!(!$mqgysgoemumiwmis && is_array($eqgoocgaqwqcimie) && $yummaigqmauwcyou === Constants::qmesccgukkkogskw)) { goto okagauksoqkoqygi; } $yummaigqmauwcyou = Constants::wuwqeigceueyqmsc; okagauksoqkoqygi: $aaqqkgyougeiueyq = $ewumwgcosqecykeo->uqeoyqiwywwmsiew($qekiiaomcwyquqqm); if (!$aaqqkgyougeiueyq instanceof Enum) { goto eciksmgaqikwegwq; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiesyimugeuuwcma($eqgoocgaqwqcimie); eciksmgaqikwegwq: switch ($yummaigqmauwcyou) { case Constants::mcwismemiumceoos: if (!$mqgysgoemumiwmis) { goto wiaesksmicgikqcm; } foreach ($mqgysgoemumiwmis as $yyqawuyyqgsymiqk) { $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$yyqawuyyqgsymiqk], $siykeiywomwwuoiw, $iqqgseqwyegkeqws); auaigccmwqwsqsku: } measoqewessauqma: wiaesksmicgikqcm: goto kieyoaoawqacqamy; case Constants::uwkgmaicmwigeeee: $siykeiywomwwuoiw = $siykeiywomwwuoiw->distinct(); goto kieyoaoawqacqamy; case Constants::cgiswgcumueqgcmw: $siykeiywomwwuoiw = $siykeiywomwwuoiw->limit($eqgoocgaqwqcimie); goto kieyoaoawqacqamy; case Constants::kcweakweogywcmoq: $siykeiywomwwuoiw = $siykeiywomwwuoiw->groupBy($eqgoocgaqwqcimie); goto kieyoaoawqacqamy; case Constants::wwywmwwigoiyqimg: $siykeiywomwwuoiw = $siykeiywomwwuoiw->inRandomOrder(); goto kieyoaoawqacqamy; case Constants::gqiasegggowomgie: case Constants::cqcimoqckgmaacyw: if (is_array($eqgoocgaqwqcimie)) { goto gqaimiooakyykccy; } if (in_array($eqgoocgaqwqcimie, [Constants::omaksceqmigeaoko, Constants::eeccqomoaqsawouy], true)) { goto mcucegiogmuyogki; } $eqgoocgaqwqcimie = Constants::eeccqomoaqsawouy; mcucegiogmuyogki: $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $eqgoocgaqwqcimie); goto agemeseegiuuowgo; gqaimiooakyykccy: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->eqyqgywiseiwqocc($eqgoocgaqwqcimie); $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderByRaw("\106\x49\x45\114\x44\50{$ewumwgcosqecykeo->ouscimcwyiassmcs($qgoqiacsiccwoawi)}\x2c\40\47{$eqgoocgaqwqcimie}\x27\x29"); agemeseegiuuowgo: goto kieyoaoawqacqamy; case Constants::ackcaikowcokggsc: case Constants::wuwqeigceueyqmsc: if (is_array($eqgoocgaqwqcimie)) { goto goswwiomuackymqi; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; goswwiomuackymqi: if ($aaqqkgyougeiueyq instanceof Json) { goto uuisaeysawuagysg; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik); goto ggqeakyaggiuegek; uuisaeysawuagysg: $sucyqoqkkkyqwkao = []; foreach ($eqgoocgaqwqcimie as $igqsaukqcqscimok) { $sucyqoqkkkyqwkao[] = [Constants::ciyoccqkiamemcmm => "\x25\42{$igqsaukqcqscimok}\42\x25", Constants::meisqwykgaymauka => $qekiiaomcwyquqqm, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo, Constants::eugyciakiowwcuwm => Constants::augocsiaqqukkuui]; camawumockccayaq: } gykuaukukosiocoy: $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($sucyqoqkkkyqwkao, $siykeiywomwwuoiw, $aasascamegmwqmqk); ggqeakyaggiuegek: goto kieyoaoawqacqamy; case Constants::SELECT: $siykeiywomwwuoiw = $siykeiywomwwuoiw->select($qekiiaomcwyquqqm); goto kieyoaoawqacqamy; case Constants::yqwcogcwsuecwscy: $siykeiywomwwuoiw = $siykeiywomwwuoiw->addSelect($eqgoocgaqwqcimie); goto kieyoaoawqacqamy; case Constants::ycasqqegycucigcy: $sqeykgyoooqysmca = $gqgemcmoicmgaqie[Constants::squoamkioomemiyi] ?? Constants::qyiusaesoeakesco; $icsywsyukqcciiky = (bool) ($gqgemcmoicmgaqie[Constants::qmesccgukkkogskw] ?? false); $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky); goto kieyoaoawqacqamy; case Constants::imiesusgyysqwyew: $saqkweiwkkmkaiso = $eqgoocgaqwqcimie[0] ?? null; $wcigocykcugesikg = $eqgoocgaqwqcimie[1] ?? null; if (!$aaqqkgyougeiueyq instanceof Foreign) { goto yyamycyesguwueuw; } $mookcykiycqukcks = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$mookcykiycqukcks) { goto waewaiuiogywqigu; } if ($saqkweiwkkmkaiso) { goto aqigiwmamkowomiw; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto usgcoawgqswoeiec; } $saqkweiwkkmkaiso = $meywaqqsugaoeyys->kumuygiiqswoyasy(); goto qowcwmsiyscackaa; usgcoawgqswoeiec: $saqkweiwkkmkaiso = $qekiiaomcwyquqqm; qowcwmsiyscackaa: aqigiwmamkowomiw: $saqkweiwkkmkaiso = $this->myywwqkyiwawwquy($saqkweiwkkmkaiso, $aikcyecgesuiaacw); if (!$wcigocykcugesikg && is_string($eqgoocgaqwqcimie)) { goto csyoimsqgwcmiwki; } if (!(!$aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->aumgkcogqygmwsqy())) { goto qesqgumuouyymcwa; } $wcigocykcugesikg = $mookcykiycqukcks->kumuygiiqswoyasy(); qesqgumuouyymcwa: goto ggqwcqssoauckuic; csyoimsqgwcmiwki: $wcigocykcugesikg = $eqgoocgaqwqcimie; ggqwcqssoauckuic: if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto ggwcauaeuagekeyo; } $aasascamegmwqmqk = $mookcykiycqukcks->cokoiaeeomgssqgy(); $wcigocykcugesikg = $mookcykiycqukcks->myywwqkyiwawwquy($wcigocykcugesikg); goto mmkoqmccusoeaoyi; ggwcauaeuagekeyo: [$aasascamegmwqmqk] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $wcigocykcugesikg = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $wcigocykcugesikg); mmkoqmccusoeaoyi: waewaiuiogywqigu: yyamycyesguwueuw: $koegqoagisewcica = $gkyciwoiiisgywcs->get($gqgemcmoicmgaqie, Constants::ON, true); $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, function (JoinClause $eagqsqeocaokmsim) use($saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg, $mqgysgoemumiwmis, $koegqoagisewcica, $aikcyecgesuiaacw, $aasascamegmwqmqk) { if (!$koegqoagisewcica) { goto aymmymequcisekie; } $eagqsqeocaokmsim->on($saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg); aymmymequcisekie: if (!$mqgysgoemumiwmis) { goto kyggwyywiycksgqq; } if (!$aikcyecgesuiaacw) { goto gyeayeuuyiemuwuq; } $aasascamegmwqmqk = $aikcyecgesuiaacw; gyeayeuuyiemuwuq: return $this->kqewyqqqiyiouaou($mqgysgoemumiwmis, $eagqsqeocaokmsim, $aasascamegmwqmqk); kyggwyywiycksgqq: return $eagqsqeocaokmsim; }); goto kieyoaoawqacqamy; case Constants::weigugswsgkycqkc: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNull($qgoqiacsiccwoawi, $qsycuegoicqcqkmo, $mqogqgswmasasmik); goto kieyoaoawqacqamy; case Constants::amiwmcmkayqsycia: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNotNull($qgoqiacsiccwoawi, $qsycuegoicqcqkmo); goto kieyoaoawqacqamy; case Constants::qmesccgukkkogskw: if ($mqgysgoemumiwmis) { goto sugumgeqcwgekcqs; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); goto imeaiksowuukikui; sugumgeqcwgekcqs: $siykeiywomwwuoiw = $siykeiywomwwuoiw->where(function ($gqgemcmoicmgaqie) use($mqgysgoemumiwmis, $aasascamegmwqmqk) { return $this->kqewyqqqiyiouaou($mqgysgoemumiwmis, $gqgemcmoicmgaqie, $aasascamegmwqmqk); }, null, null, $qsycuegoicqcqkmo); imeaiksowuukikui: goto kieyoaoawqacqamy; case Constants::kumuoysauoagaiiy: $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw); goto kieyoaoawqacqamy; case Constants::oeusoaowacmykwsm: if (!is_array($eqgoocgaqwqcimie)) { goto ucecweoaoyeoyuue; } $aikcyecgesuiaacw = $gqgemcmoicmgaqie[Constants::wsgoaaeiyusigoym] ?? []; $mciqqmyssqigmqyo = 0; $iiueagsqmqqkiiwm = $gqgemcmoicmgaqie[Constants::SELECT] ?? []; foreach ($iiueagsqmqqkiiwm as $uusmaiomayssaecw => $igqsaukqcqscimok) { switch ($uusmaiomayssaecw) { case Constants::sgyowqgsmegoocaw: if (!is_array($igqsaukqcqscimok)) { goto ueaiskyiqcquiika; } $kaywamcmkqogouck = []; foreach ($igqsaukqcqscimok as $imgcoakmmgqsckkm => $wocwawaaemuoqmig) { $uiymkeeaukcyqqik = $wocwawaaemuoqmig[Constants::ciyoccqkiamemcmm] ?? $wocwawaaemuoqmig; $imgcoakmmgqsckkm = $wocwawaaemuoqmig[Constants::meisqwykgaymauka] ?? $imgcoakmmgqsckkm; $weawyioewioikeaq = $wocwawaaemuoqmig[Constants::eugyciakiowwcuwm] ?? $cackiyicawmkyqqg; if (!($imgcoakmmgqsckkm && $uiymkeeaukcyqqik)) { goto koggssokukoukkay; } if (is_numeric($uiymkeeaukcyqqik)) { goto gwoacimkeyymqccq; } $uiymkeeaukcyqqik = "\x27{$uiymkeeaukcyqqik}\x27"; gwoacimkeyymqccq: $kaywamcmkqogouck[] = "{$imgcoakmmgqsckkm}\x20{$weawyioewioikeaq}\40{$uiymkeeaukcyqqik}"; koggssokukoukkay: wiqigqgiegmacgsw: } ssmgmiuqoeiuacsa: $kaywamcmkqogouck = implode("\40\x41\116\x44\x20", $kaywamcmkqogouck); ueaiskyiqcquiika: goto weggeeowykuqooyg; case Constants::mskoigqmkguawcac: $ssccayguowuawggi = $igqsaukqcqscimok; goto weggeeowykuqooyg; case Constants::kgmgkqegkacowmia: $mciqqmyssqigmqyo = $igqsaukqcqscimok; goto weggeeowykuqooyg; } cqkuuyouqoqyguus: weggeeowykuqooyg: gaceikykesgywssm: } aqmiewawgseaqeqk: if (!isset($kaywamcmkqogouck, $ssccayguowuawggi, $mciqqmyssqigmqyo)) { goto eqemcocqsyasqycq; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->selectRaw("\123\125\x4d\50\103\x41\x53\x45\x20\127\x48\x45\116\x20{$kaywamcmkqogouck}\x20\124\110\x45\x4e\x20{$ssccayguowuawggi}\x20\x45\x4c\x53\105\x20{$mciqqmyssqigmqyo}\x20\x45\x4e\x44\x29\x20\x61\x73\x20{$aikcyecgesuiaacw}"); eqemcocqsyasqycq: ucecweoaoyeoyuue: goto kieyoaoawqacqamy; } qckouamqueqiykqi: kieyoaoawqacqamy: imwiyqcekcykscui: } woqkgwmkmqsuceuy: cqugssuesycomqwa: return $siykeiywomwwuoiw; } public function wkmkqaiwuqouweye(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou([$aiowsaccomcoikus => [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]], $siykeiywomwwuoiw); } public function akkkoiiymmamsauc($eqgoocgaqwqcimie = null, string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\52") { if ($aiowsaccomcoikus) { goto kaiqsuaywyuckuoo; } $aiowsaccomcoikus = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); kaiqsuaywyuckuoo: return $this->geeumyocaqwwquwk($this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie), $wkkweuacukumqmya); } public function oqomcmyuuakigusk(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\52"]) { return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($uoomaookgsyciacm), $wkkweuacukumqmya); } private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) { $mksyucucyswaukig = null; if (!$siykeiywomwwuoiw) { goto yuoamgkigcwaooqu; } $mksyucucyswaukig = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya); yuoamgkigcwaooqu: return $mksyucucyswaukig; } public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null) { if ($siykeiywomwwuoiw) { goto ymwyooosikgokiaa; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); ymwyooosikgokiaa: if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) { goto qaiuogoowcoimwee; } $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg); qaiuogoowcoimwee: $mksyucucyswaukig = null; if (!$siykeiywomwwuoiw) { goto osqgywagokmsicqe; } $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya); osqgywagokmsicqe: return $mksyucucyswaukig; } public function yassqyiieqeywoqi(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg); if (!$siykeiywomwwuoiw) { goto qccmuwiwykuegoga; } $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); qccmuwiwykuegoga: return $aqykuigiuwmmcieu; } public function cieaqygkucwoqwke(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm); if (!$siykeiywomwwuoiw) { goto csucwwqcsaymyiuk; } $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); csucwwqcsaymyiuk: return $aqykuigiuwmmcieu; } public function asskucacysemeoiu(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = "\x2a") : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->kqewyqqqiyiouaou($uoomaookgsyciacm)); } public function ieieyoeqmmeysauc(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = "\x2a", $siykeiywomwwuoiw = null) : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw)); } public function ygmcsmegcysyeoss($wkkweuacukumqmya = "\x2a", $siykeiywomwwuoiw = null) : int { $gaeqamemwmwsyukm = 0; if ($siykeiywomwwuoiw) { goto iiuuwuwcwamqegey; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); iiuuwuwcwamqegey: if (!$siykeiywomwwuoiw) { goto qmgueimkwqmsakis; } $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count($wkkweuacukumqmya); qmgueimkwqmsakis: return $gaeqamemwmwsyukm; } public function qgiewwqykwugcuoo(string $qgoqiacsiccwoawi, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null) { $qsmaqqyoggcuyukq = 0; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); if (!$siykeiywomwwuoiw) { goto ooqmaweuqmcmwsuk; } $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi); ooqmaweuqmcmwsuk: return $qsmaqqyoggcuyukq; } public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = ["\52"], array $uoomaookgsyciacm = []) { $essikcmqiyqaqoaq = []; try { if ($iceamweyeeiwiucs instanceof Relation) { goto ggoimgeeuugseiwk; } $jwsqucqyaoaasykk = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($iceamweyeeiwiucs); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto qioswooukgoowsuc; } if (!($meywaqqsugaoeyys = $aaqqkgyougeiueyq->ggmimykuacwcogaq())) { goto qycsooiomiugimqc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $sgmoseoaumayiowg = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $iceamweyeeiwiucs); $moqewomugocaueis = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $ceiwsaacewygcsqg); $iscgcmeykqwwowmq = $aaqqkgyougeiueyq->ogkqyamocsimiymw(); if (!($aaqqkgyougeiueyq->eiyqqesoywqkegwu() || $aaqqkgyougeiueyq->wmomygggskkoqess())) { goto siuyaemoiiqyoggo; } if (!$aaqqkgyougeiueyq->wmomygggskkoqess()) { goto cycwgukowsksmkyc; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto uscissuaiyuiukea; } return $this->akkkoiiymmamsauc($sgmoseoaumayiowg, $aaqqkgyougeiueyq->iooowgsqoyqseyuu()); uscissuaiyuiukea: if (!$iscgcmeykqwwowmq) { goto kuyqusuycscumuek; } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($moqewomugocaueis, $iscgcmeykqwwowmq); kuyqusuycscumuek: cycwgukowsksmkyc: return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($sgmoseoaumayiowg, $ceiwsaacewygcsqg); siuyaemoiiqyoggo: if (!($iscgcmeykqwwowmq && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) { goto koemwyegoqwiikom; } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->yassqyiieqeywoqi($iscgcmeykqwwowmq, $moqewomugocaueis); koemwyegoqwiikom: qycsooiomiugimqc: qioswooukgoowsuc: $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig); goto gimquiiwucueoqkw; ggoimgeeuugseiwk: $ayegqaqygsqsmews = $iceamweyeeiwiucs; gimquiiwucueoqkw: if (!$ayegqaqygsqsmews) { goto mwqcykaeywsmoumm; } if (!$uoomaookgsyciacm) { goto eimouyomcoqkmaae; } $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews); eimouyomcoqkmaae: if (!$ayegqaqygsqsmews) { goto kkwqmoeeqygoimwg; } $essikcmqiyqaqoaq = $this->iiqauwkoiguyeawu($ayegqaqygsqsmews, $wkkweuacukumqmya); kkwqmoeeqygoimwg: mwqcykaeywsmoumm: } catch (Exception $wgaoewqkwgomoaai) { } return $essikcmqiyqaqoaq; } public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation { $ayegqaqygsqsmews = null; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($mksyucucyswaukig instanceof Entity) { goto ywoyioqqyuocoygk; } $aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig); if (!$mksyucucyswaukig) { goto awgmyaycugswmwae; } $mksyucucyswaukig = $meywaqqsugaoeyys->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($aokagokqyuysuksm); awgmyaycugswmwae: ywoyioqqyuocoygk: if (!$mksyucucyswaukig instanceof self) { goto wucacaegysmiusai; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($ymaogssqccumcyqa); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto mwwygasiagaqsimo; } if (!($yccmomaaqwugeiuo = $aaqqkgyougeiueyq->ggmimykuacwcogaq())) { goto euoscysqgugsqewc; } $egkyssmuqcwaciya = $yccmomaaqwugeiuo::class; if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto ugmukcwgcioqgywy; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto gcogomgmqcgkeceg; } if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto iyyaiuccouqowyga; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto iwcmgioeaiyuacwi; } if (!$yccmomaaqwugeiuo instanceof self) { goto icuukwkwqeoogyae; } [$syeseoiyagmgumcy] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $ayegqaqygsqsmews = $mksyucucyswaukig->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy); icuukwkwqeoogyae: iwcmgioeaiyuacwi: goto ikqagqacuwcgwmqy; iyyaiuccouqowyga: if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto iauwkeeaqsgweeoo; } $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya); goto aycqgowuwagcgque; iauwkeeaqsgweeoo: $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya); aycqgowuwagcgque: ikqagqacuwcgwmqy: goto cksomiiqscosigke; gcogomgmqcgkeceg: $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya); cksomiiqscosigke: goto kisccmsaieigisiu; ugmukcwgcioqgywy: $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya); kisccmsaieigisiu: euoscysqgugsqewc: mwwygasiagaqsimo: wucacaegysmiusai: return $ayegqaqygsqsmews; } public function acamgaegcsioysiw($aaqqkgyougeiueyq) : array { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!is_string($aaqqkgyougeiueyq)) { goto eeomcmuiqwgwwuqk; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($aaqqkgyougeiueyq); eeomcmuiqwgwwuqk: if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto esgyqksmcukeuwyk; } $gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$gsmssqouaueqkeui) { goto yeaqsiqgakskoykg; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto mseokuecmeoyoggk; } $yuwymayicwwqiske = $gsmssqouaueqkeui->ogqgmqymcwsqikme(); $usymcioagieycusu = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); goto uookseqsmsqgweuy; mseokuecmeoyoggk: $yuwymayicwwqiske = $meywaqqsugaoeyys->ogqgmqymcwsqikme(); $usymcioagieycusu = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); uookseqsmsqgweuy: $syeseoiyagmgumcy = $meywaqqsugaoeyys->ysgiswuowuciwqaq()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\137{$wkwywcemusswkgwk}"); $sogksuscggsicmac = [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $gsmssqouaueqkeui]; yeaqsiqgakskoykg: esgyqksmcukeuwyk: return $sogksuscggsicmac; } public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::wuuiwugmcgkwkimw, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, bool $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) { try { if ($siykeiywomwwuoiw) { goto iigmgswcogqemgao; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); iigmgswcogqemgao: if ($cackiyicawmkyqqg === Constants::yoaakgmawgaeyeim && is_array($eqgoocgaqwqcimie)) { goto eceeoiwuagocweus; } if (!is_numeric($eqgoocgaqwqcimie)) { goto ycaqooeeseougumo; } $eqgoocgaqwqcimie = new DateTime($eqgoocgaqwqcimie); ycaqooeeseougumo: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); goto aeockieewgkequae; eceeoiwuagocweus: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik); aeockieewgkequae: } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } return $siykeiywomwwuoiw; } public function ewkswoqykwsuckok($siykeiywomwwuoiw, string $qgoqiacsiccwoawi, string $ecysmcqmumqmaagg = Constants::eeccqomoaqsawouy) { if ($siykeiywomwwuoiw) { goto omqyuuomwywmqeiq; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); omqyuuomwywmqeiq: if (!$siykeiywomwwuoiw) { goto oysyuiqmsokoykaq; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg); oysyuiqmsokoykaq: return $siykeiywomwwuoiw; } public function ygyguskuyykskwko(string $qwcmueausqgiwigy, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou($this->qgeqgaaksyemysgo($qwcmueausqgiwigy), $siykeiywomwwuoiw); } public function qgeqgaaksyemysgo(string $qwcmueausqgiwigy) : array { $uoomaookgsyciacm = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $aokagokqyuysuksm = $aaqqkgyougeiueyq->mwyqswsaeeewsosm(); if (!($aaqqkgyougeiueyq instanceof Str || $aaqqkgyougeiueyq instanceof Text)) { goto cqkyumayoemqsueu; } $uoomaookgsyciacm[$aokagokqyuysuksm] = [Constants::ciyoccqkiamemcmm => "\45{$qwcmueausqgiwigy}\45", Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim, Constants::eugyciakiowwcuwm => Constants::augocsiaqqukkuui]; cqkyumayoemqsueu: eomqeimoequmagum: } misiasooemyskoay: return $uoomaookgsyciacm; } public function aeggeuqycwawueqy($siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array { try { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::imywcsggckkcywgk => 1, Constants::wikgqsqysyuoykse => [], Constants::soquiwyuimckgiow => ["\x2a"], Constants::ausqeuugegoygouq => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(), Constants::ieyywsoeoqmceucw => Constants::imywcsggckkcywgk, Constants::wosqwewmqmyweqea => true]); $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] ?: 10, $ywmkwiwkosakssii[Constants::soquiwyuimckgiow] ?: ["\52"], $ywmkwiwkosakssii[Constants::ieyywsoeoqmceucw] ?: Constants::imywcsggckkcywgk, $ywmkwiwkosakssii[Constants::imywcsggckkcywgk] ?: 1); $oammesyieqmwuwyi = $ymiyawysimukkoso->items(); if ($oammesyieqmwuwyi) { goto ksqmcugkcmsooeaw; } $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse); ksqmcugkcmsooeaw: if (!$ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { goto sukcyismwageqgok; } $oammesyieqmwuwyi = $this->mgogaykgkoogasim()->cwgkcyyaymmsomqa($oammesyieqmwuwyi); sukcyismwageqgok: $uuwmqqqiwksuaise = $ymiyawysimukkoso->total(); $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage(); $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage(); $yeacayasgueouoqc = $ymiyawysimukkoso->currentPage(); } catch (Exception $wgaoewqkwgomoaai) { $oammesyieqmwuwyi = []; $uuwmqqqiwksuaise = 0; $weyoqgcesqgeusiu = 0; $qcugmkuyweqqyggk = 0; $yeacayasgueouoqc = 1; } return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $yeacayasgueouoqc, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu); } public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $yeacayasgueouoqc = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array { return [Constants::ycuusiweasqygwiw => [Constants::uiiqiokqwmccomiu => $uuwmqqqiwksuaise, Constants::yusuiaeueqwieqqq => $ocqawgquwsqioses, Constants::asmooogmgyecqqka => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) : array { return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya); } private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : array { $uomewyckeuqoqocu = []; $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou, $uusmaiomayssaecw); if (!$iwqgomgkuumgyswi) { goto ukmgwuiqwgyiouec; } $uomewyckeuqoqocu = $iwqgomgkuumgyswi->toArray(); ukmgwuiqwgyiouec: return $uomewyckeuqoqocu; } private function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : ?Collection { if ($siykeiywomwwuoiw) { goto qykcggwgkweasuii; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); qykcggwgkweasuii: $iwqgomgkuumgyswi = null; if (!$siykeiywomwwuoiw) { goto eqsuaywswuesuika; } try { switch ($aiamqeawckcsuaou) { case Constants::kaqagayamqaywssm: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->pluck($wkkweuacukumqmya, $uusmaiomayssaecw); goto geoiegikocwmwosi; default: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->get($wkkweuacukumqmya); goto geoiegikocwmwosi; } wasuquysysmqyegg: geoiegikocwmwosi: } catch (Exception $wgaoewqkwgomoaai) { } eqsuaywswuesuika: return $iwqgomgkuumgyswi; } }
