<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\x66\162\x6f\x6e\x74\145\x6e\144"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto quowmcomwmsmugqe; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto ycqcgaauyqmkwskc; quowmcomwmsmugqe: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\x63\157\154"; if (!$gcgsqcoqciockquc) { goto eosiakwgiemwwqwy; } $cmkqisoeyioisqaw .= "\x2d{$gcgsqcoqciockquc}"; eosiakwgiemwwqwy: $cmkqisoeyioisqaw .= "\55{$qgoqiacsiccwoawi}\40"; goemggymkikoquwi: } osamucgweicwoiqy: ycqcgaauyqmkwskc: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\40{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto gkaayykiiqqogeiw; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\156\x64\145\170", "\154\x65\x6e\147\164\x68"]); gkaayykiiqqogeiw: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto awwyuikkmaaomkqc; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto kiwacoqesuqmyiiu; } if (!is_array($imgcoakmmgqsckkm)) { goto sgqackwokosksyua; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; sgqackwokosksyua: goto aimwoikqsqkyicsu; kiwacoqesuqmyiiu: $waaaiiqwsmggwsak = array_filter(explode("\x63\157\x6c\x2d", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto iiwuqoagoqgmwwiq; } if (!($gaeqamemwmwsyukm === 2)) { goto quumuskukkcuuciu; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; quumuskukkcuuciu: goto esewmcieucesaqcw; iiwuqoagoqgmwwiq: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; esewmcieucesaqcw: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; saoickmcegceesyw: } qwsmwwskogygagea: aimwoikqsqkyicsu: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto aqyweyyyygygswmy; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto owkgksuymewqqiwu; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto cmqmcaowowcccgka; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; cmqmcaowowcccgka: if (!$gcgsqcoqciockquc) { goto imcseqowgomyokwi; } $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}"; imcseqowgomyokwi: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto semwcosqeukmgoey; } $giwamsoicooomueg .= "\x20\x6d\x62{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}"; goto oeyoiicmckkgoyqg; semwcosqeukmgoey: $giwamsoicooomueg .= "\x20\x6d\x62{$gcgsqcoqciockquc}\55\60"; oeyoiicmckkgoyqg: owkgksuymewqqiwu: yaieemqskkgmcqou: } qiggceewmyagkisq: aqyweyyyygygswmy: awwyuikkmaaomkqc: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\154\145\162\164\x5f\144\151\163\x6d\x69\163\163", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto imquocywcscomayo; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; imquocywcscomayo: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\x61\x73\163\x65\x73" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\163\164\x72\157\x6e\147"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\154\x65\x72\x74", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\163\164\x72\157\156\147", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto qkusmocauegwwqwy; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto gammkicacakosigu; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; gammkicacakosigu: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\144\x61\x74\x61\x2d\x74\157\147\147\x6c\145" => Constants::ismwycwsasweqomi, "\144\x61\164\x61\55\x74\x61\162\147\145\x74" => "\x23{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); qkusmocauegwwqwy: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\155\x6f\x64\x61\x6c", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\142\x75\164\x74\157\x6e"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\142\x75\164\164\157\x6e", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\x68\x72\x65\146"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x6c\151\x6e\153", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\154\141\163\163" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\x62\157\162\144\x65\162", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\163\x70\151\156\x6e\x65\x72", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\x2e\x68\164\155\154\x2e\164\167\151\x67") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto qwwmqqkoeuywmqys; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; qwwmqqkoeuywmqys: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\x72\157\x62\157\164\x73") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\x6e\157\x69\156\x64\145\x78"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\x65\x74\x50\162\x69\157\x72\151\164\x79"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ecoygmauwycmweyq; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); ecoygmauwycmweyq: ciksycqiaaueqaaq: } soqakmcacqiqamku: if (!$oyigwoawqogioses) { goto meueuqeagkwkoiuk; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); meueuqeagkwkoiuk: return $nsmgceoqaqogqmuw; } }
