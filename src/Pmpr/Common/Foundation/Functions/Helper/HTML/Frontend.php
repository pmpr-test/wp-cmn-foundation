<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\x66\x72\157\x6e\164\x65\156\x64"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto ycqcgaauyqmkwskc; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto gkaayykiiqqogeiw; ycqcgaauyqmkwskc: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\x63\x6f\154"; if (!$gcgsqcoqciockquc) { goto quowmcomwmsmugqe; } $cmkqisoeyioisqaw .= "\55{$gcgsqcoqciockquc}"; quowmcomwmsmugqe: $cmkqisoeyioisqaw .= "\55{$qgoqiacsiccwoawi}\40"; eosiakwgiemwwqwy: } goemggymkikoquwi: gkaayykiiqqogeiw: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\40{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto qwsmwwskogygagea; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\156\144\x65\x78", "\x6c\145\x6e\147\164\150"]); qwsmwwskogygagea: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto imquocywcscomayo; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto aimwoikqsqkyicsu; } if (!is_array($imgcoakmmgqsckkm)) { goto kiwacoqesuqmyiiu; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; kiwacoqesuqmyiiu: goto qiggceewmyagkisq; aimwoikqsqkyicsu: $waaaiiqwsmggwsak = array_filter(explode("\x63\157\154\55", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto esewmcieucesaqcw; } if (!($gaeqamemwmwsyukm === 2)) { goto iiwuqoagoqgmwwiq; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; iiwuqoagoqgmwwiq: goto sgqackwokosksyua; esewmcieucesaqcw: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; sgqackwokosksyua: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; quumuskukkcuuciu: } saoickmcegceesyw: qiggceewmyagkisq: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto awwyuikkmaaomkqc; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto aqyweyyyygygswmy; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto imcseqowgomyokwi; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; imcseqowgomyokwi: if (!$gcgsqcoqciockquc) { goto semwcosqeukmgoey; } $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}"; semwcosqeukmgoey: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto oeyoiicmckkgoyqg; } $giwamsoicooomueg .= "\40\x6d\142{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}"; goto owkgksuymewqqiwu; oeyoiicmckkgoyqg: $giwamsoicooomueg .= "\x20\x6d\142{$gcgsqcoqciockquc}\x2d\60"; owkgksuymewqqiwu: aqyweyyyygygswmy: cmqmcaowowcccgka: } yaieemqskkgmcqou: awwyuikkmaaomkqc: imquocywcscomayo: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\141\154\145\162\164\x5f\x64\151\x73\x6d\151\163\x73", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto gammkicacakosigu; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; gammkicacakosigu: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\141\x73\x73\x65\163" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\x73\x74\x72\157\x6e\147"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\x6c\x65\x72\x74", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\x73\164\x72\157\156\147", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto qwwmqqkoeuywmqys; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto qkusmocauegwwqwy; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; qkusmocauegwwqwy: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\144\x61\x74\x61\x2d\164\x6f\x67\x67\x6c\x65" => Constants::ismwycwsasweqomi, "\x64\x61\164\141\x2d\164\141\x72\x67\145\164" => "\x23{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); qwwmqqkoeuywmqys: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x6d\x6f\144\x61\154", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\x62\x75\x74\x74\x6f\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\142\165\x74\x74\x6f\156", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\x68\162\145\146"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x6c\151\x6e\x6b", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\163\x73" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\x62\157\x72\144\x65\x72", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\163\160\x69\x6e\156\x65\162", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\x2e\x68\x74\155\x6c\56\x74\167\151\147") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto soqakmcacqiqamku; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; soqakmcacqiqamku: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\x72\x6f\142\157\x74\163") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\156\x6f\151\156\x64\145\170"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\145\x74\x50\162\x69\157\162\x69\x74\x79"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto meueuqeagkwkoiuk; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); meueuqeagkwkoiuk: ecoygmauwycmweyq: } ciksycqiaaueqaaq: if (!$oyigwoawqogioses) { goto cseucimaukwaskwk; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); cseucimaukwaskwk: return $nsmgceoqaqogqmuw; } }
