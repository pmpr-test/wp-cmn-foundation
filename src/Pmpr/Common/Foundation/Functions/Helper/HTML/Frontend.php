<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\146\162\x6f\156\164\145\x6e\144"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto quowmcomwmsmugqe; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto ycqcgaauyqmkwskc; quowmcomwmsmugqe: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\143\x6f\x6c"; if (!$gcgsqcoqciockquc) { goto eosiakwgiemwwqwy; } $cmkqisoeyioisqaw .= "\x2d{$gcgsqcoqciockquc}"; eosiakwgiemwwqwy: $cmkqisoeyioisqaw .= "\55{$qgoqiacsiccwoawi}\40"; goemggymkikoquwi: } osamucgweicwoiqy: ycqcgaauyqmkwskc: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\x20{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto gkaayykiiqqogeiw; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\x69\156\x64\145\170", "\x6c\145\x6e\x67\x74\x68"]); gkaayykiiqqogeiw: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto awwyuikkmaaomkqc; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto kiwacoqesuqmyiiu; } if (!is_array($imgcoakmmgqsckkm)) { goto sgqackwokosksyua; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; sgqackwokosksyua: goto aimwoikqsqkyicsu; kiwacoqesuqmyiiu: $waaaiiqwsmggwsak = array_filter(explode("\x63\x6f\154\55", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto iiwuqoagoqgmwwiq; } if (!($gaeqamemwmwsyukm === 2)) { goto quumuskukkcuuciu; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; quumuskukkcuuciu: goto esewmcieucesaqcw; iiwuqoagoqgmwwiq: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; esewmcieucesaqcw: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; saoickmcegceesyw: } qwsmwwskogygagea: aimwoikqsqkyicsu: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto aqyweyyyygygswmy; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto owkgksuymewqqiwu; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto cmqmcaowowcccgka; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; cmqmcaowowcccgka: if (!$gcgsqcoqciockquc) { goto imcseqowgomyokwi; } $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}"; imcseqowgomyokwi: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto semwcosqeukmgoey; } $giwamsoicooomueg .= "\x20\x6d\142{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}"; goto oeyoiicmckkgoyqg; semwcosqeukmgoey: $giwamsoicooomueg .= "\40\155\142{$gcgsqcoqciockquc}\55\x30"; oeyoiicmckkgoyqg: owkgksuymewqqiwu: yaieemqskkgmcqou: } qiggceewmyagkisq: aqyweyyyygygswmy: awwyuikkmaaomkqc: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\x6c\145\x72\x74\137\144\x69\x73\155\x69\163\x73", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto imquocywcscomayo; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; imquocywcscomayo: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\141\163\x73\x65\x73" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\163\x74\x72\x6f\156\147"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x61\154\145\162\x74", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\x73\x74\x72\157\156\x67", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto qkusmocauegwwqwy; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto gammkicacakosigu; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; gammkicacakosigu: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\x64\x61\x74\141\x2d\164\x6f\x67\147\x6c\145" => Constants::ismwycwsasweqomi, "\x64\141\x74\141\55\x74\141\162\147\145\x74" => "\x23{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); qkusmocauegwwqwy: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\155\x6f\144\x61\x6c", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\142\x75\164\164\x6f\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\142\165\164\164\x6f\x6e", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\x68\162\x65\146"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\154\x69\x6e\153", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\163\163" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\142\x6f\162\144\x65\162", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x73\x70\151\156\x6e\145\x72", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\56\150\x74\155\x6c\56\164\167\x69\147") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto qwwmqqkoeuywmqys; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; qwwmqqkoeuywmqys: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\162\157\142\x6f\x74\x73") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\x6e\x6f\151\x6e\144\x65\x78"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\147\x65\x74\x50\x72\151\157\162\151\x74\171"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ecoygmauwycmweyq; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); ecoygmauwycmweyq: ciksycqiaaueqaaq: } soqakmcacqiqamku: if (!$oyigwoawqogioses) { goto meueuqeagkwkoiuk; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); meueuqeagkwkoiuk: return $nsmgceoqaqogqmuw; } }
