<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\146\x72\x6f\156\x74\x65\x6e\144"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto wiumcqqogqsqyaqo; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto amyuqgaegykwgcgk; wiumcqqogqsqyaqo: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\143\157\x6c"; if (!$gcgsqcoqciockquc) { goto scuegucswagswcio; } $cmkqisoeyioisqaw .= "\x2d{$gcgsqcoqciockquc}"; scuegucswagswcio: $cmkqisoeyioisqaw .= "\x2d{$qgoqiacsiccwoawi}\x20"; sweakucgmumqsakg: } aymooygqycguekai: amyuqgaegykwgcgk: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\40{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto ecooysegquiascci; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\x69\x6e\x64\x65\170", "\x6c\145\x6e\x67\164\x68"]); ecooysegquiascci: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto wmgwiaksugguumki; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto goemgwueaswqayue; } if (!is_array($imgcoakmmgqsckkm)) { goto meeeuaakuscgcomc; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; meeeuaakuscgcomc: goto quecaykkiwwgqoay; goemgwueaswqayue: $waaaiiqwsmggwsak = array_filter(explode("\143\x6f\154\x2d", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto swysacsiqeaqkeik; } if (!($gaeqamemwmwsyukm === 2)) { goto quyumosiyumgeqao; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; quyumosiyumgeqao: goto muiuuoeuoqqqqycq; swysacsiqeaqkeik: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; muiuuoeuoqqqqycq: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; wekosqocigkegwgq: } smgwweikoueukkom: quecaykkiwwgqoay: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto ikccqyauagueyquo; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto wwsimimccosesome; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto yakgkywayukuuoeo; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; yakgkywayukuuoeo: if (!$gcgsqcoqciockquc) { goto gkiswiyesyseqgyi; } $gcgsqcoqciockquc = "\x2d{$gcgsqcoqciockquc}"; gkiswiyesyseqgyi: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto mwqgcamgeuigkmag; } $giwamsoicooomueg .= "\40\155\x62{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}"; goto psgawyoyqymeaqmg; mwqgcamgeuigkmag: $giwamsoicooomueg .= "\x20\x6d\x62{$gcgsqcoqciockquc}\x2d\x30"; psgawyoyqymeaqmg: wwsimimccosesome: mmmaegqwqsqomcso: } uymqegkssemcqegk: ikccqyauagueyquo: wmgwiaksugguumki: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\x6c\x65\x72\164\x5f\144\x69\163\155\151\x73\163", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto eiwsqkiauqoseceu; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; eiwsqkiauqoseceu: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\141\163\x73\x65\163" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\x73\x74\162\157\156\147"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\141\154\x65\x72\164", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\x73\x74\x72\157\x6e\x67", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto ycwuaycumimegeaw; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto meuauqksicgeyqci; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; meuauqksicgeyqci: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\x64\x61\164\x61\x2d\164\157\147\147\x6c\145" => Constants::ismwycwsasweqomi, "\x64\x61\164\141\x2d\164\x61\x72\x67\x65\x74" => "\x23{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); ycwuaycumimegeaw: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\155\x6f\x64\141\x6c", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\x62\x75\164\x74\157\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\142\x75\x74\164\x6f\156", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\x68\162\x65\146"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\154\x69\156\153", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\163\163" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\142\x6f\162\x64\x65\162", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x73\x70\x69\x6e\156\145\162", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\56\150\x74\x6d\154\56\x74\x77\x69\x67") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto emcwccgymecyuwog; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; emcwccgymecyuwog: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\x72\x6f\142\x6f\164\x73") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\156\x6f\151\x6e\144\x65\170"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\147\x65\x74\x50\162\x69\157\162\x69\x74\171"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto gcsessaokiukkyig; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); gcsessaokiukkyig: iimgquoiiseikqug: } qcmugwqioeggciuq: if (!$oyigwoawqogioses) { goto cyomuwaeeaimesos; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); cyomuwaeeaimesos: return $nsmgceoqaqogqmuw; } }
