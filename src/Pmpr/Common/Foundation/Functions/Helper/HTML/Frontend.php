<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\x66\162\157\x6e\x74\145\156\144"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto imquocywcscomayo; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto gammkicacakosigu; imquocywcscomayo: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\143\157\154"; if (!$gcgsqcoqciockquc) { goto awwyuikkmaaomkqc; } $cmkqisoeyioisqaw .= "\55{$gcgsqcoqciockquc}"; awwyuikkmaaomkqc: $cmkqisoeyioisqaw .= "\x2d{$qgoqiacsiccwoawi}\x20"; aqyweyyyygygswmy: } owkgksuymewqqiwu: gammkicacakosigu: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\x20{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto qkusmocauegwwqwy; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\156\x64\x65\170", "\154\x65\156\x67\x74\150"]); qkusmocauegwwqwy: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto ekykiumoyeyamsew; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto kucymsiiugmiooyo; } if (!is_array($imgcoakmmgqsckkm)) { goto cseucimaukwaskwk; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; cseucimaukwaskwk: goto auakugikcequsiia; kucymsiiugmiooyo: $waaaiiqwsmggwsak = array_filter(explode("\x63\x6f\154\55", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\x2d", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto ecoygmauwycmweyq; } if (!($gaeqamemwmwsyukm === 2)) { goto ciksycqiaaueqaaq; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; ciksycqiaaueqaaq: goto meueuqeagkwkoiuk; ecoygmauwycmweyq: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; meueuqeagkwkoiuk: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; soqakmcacqiqamku: } qwwmqqkoeuywmqys: auakugikcequsiia: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto qcgekwgksmkoamik; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto yayicayasmkmsemm; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto caeiwemymyceqqei; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; caeiwemymyceqqei: if (!$gcgsqcoqciockquc) { goto ogwmeoaswuqwamim; } $gcgsqcoqciockquc = "\x2d{$gcgsqcoqciockquc}"; ogwmeoaswuqwamim: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto kimwcesmkuqqyamq; } $giwamsoicooomueg .= "\40\x6d\x62{$gcgsqcoqciockquc}\x2d{$mogykyiukkoqceec}"; goto cegokyqcmuuwyoey; kimwcesmkuqqyamq: $giwamsoicooomueg .= "\40\x6d\142{$gcgsqcoqciockquc}\x2d\x30"; cegokyqcmuuwyoey: yayicayasmkmsemm: kqkcowkuqsuemmmc: } igsweakykqomoqgi: qcgekwgksmkoamik: ekykiumoyeyamsew: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\154\145\x72\164\137\144\151\163\x6d\x69\x73\163", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto caccouegecmukqci; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; caccouegecmukqci: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\154\x61\x73\x73\x65\163" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\x73\x74\x72\157\156\147"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\154\x65\x72\x74", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\x73\x74\162\x6f\156\147", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto icsukicuomwmqiyc; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto osouwwksqimikqqo; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; osouwwksqimikqqo: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\x64\x61\164\x61\x2d\164\157\x67\147\154\x65" => Constants::ismwycwsasweqomi, "\144\x61\x74\x61\x2d\x74\141\162\x67\x65\x74" => "\x23{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); icsukicuomwmqiyc: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x6d\x6f\144\x61\154", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\x62\165\x74\164\157\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\142\165\164\x74\157\156", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\150\x72\x65\x66"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x6c\x69\156\153", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\x61\x73\163" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\x62\x6f\162\x64\x65\x72", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\163\160\151\156\x6e\x65\162", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\x2e\x68\164\x6d\x6c\x2e\164\x77\151\147") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto akqkquwcomkgeqcy; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; akqkquwcomkgeqcy: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\162\157\x62\157\164\x73") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\x6e\x6f\x69\156\x64\145\x78"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\145\164\120\162\x69\x6f\162\x69\x74\171"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto eigusiimieqkeiuo; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); eigusiimieqkeiuo: kaimmgsyuygocsos: } kiaguokkqkaokqqw: if (!$oyigwoawqogioses) { goto qiimegquckqywkaq; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); qiimegquckqywkaq: return $nsmgceoqaqogqmuw; } }
