<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796bb8ecec23             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\146\x72\157\x6e\164\145\x6e\144"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\x63\157\154"; if ($gcgsqcoqciockquc) { $cmkqisoeyioisqaw .= "\x2d{$gcgsqcoqciockquc}"; } $cmkqisoeyioisqaw .= "\x2d{$qgoqiacsiccwoawi}\x20"; } } else { $cmkqisoeyioisqaw = $wkkweuacukumqmya; } $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\40{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (is_array($qgqgaykggoemycsk)) { $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\x69\x6e\144\x65\170", "\154\145\156\147\x74\150"]); } $giwamsoicooomueg = ''; if ($qgqgaykggoemycsk) { $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { $waaaiiqwsmggwsak = array_filter(explode("\143\x6f\154\x2d", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; } else { if ($gaeqamemwmwsyukm === 2) { $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; } } $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; } } else { if (is_array($imgcoakmmgqsckkm)) { $wkkweuacukumqmya = $imgcoakmmgqsckkm; } } if ($wkkweuacukumqmya && is_array($wkkweuacukumqmya)) { foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if ($qgoqiacsiccwoawi > 0) { $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if ($aoqagsqecokqqwqg === $ykiwomimkkuiigoq) { $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; } if ($gcgsqcoqciockquc) { $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}"; } if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { $giwamsoicooomueg .= "\x20\x6d\x62{$gcgsqcoqciockquc}\55\60"; } else { $giwamsoicooomueg .= "\x20\x6d\x62{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}"; } } } } } return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\141\154\x65\x72\x74\137\144\x69\x73\155\x69\x73\x73", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (is_string($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\x61\163\163\145\163" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\163\x74\x72\x6f\156\x67"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\141\154\145\162\x74", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\163\164\x72\157\156\147", Constants::igqkwqsakswkeiog => '']); if (is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { if (!isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\144\x61\x74\141\55\x74\157\x67\x67\154\x65" => Constants::ismwycwsasweqomi, "\x64\x61\164\141\55\164\141\x72\x67\x65\164" => "\43{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); } return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x6d\157\144\141\154", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\x62\165\164\164\157\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x62\x75\164\x74\157\x6e", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\150\x72\x65\146"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x6c\151\x6e\153", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\x61\163\x73" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\142\x6f\162\x64\x65\162", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\163\160\151\x6e\x6e\x65\162", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aigqycwckeyoqmoi($eycawmqcusmkcygy, Constants::kicaioiokgkqqywe); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $cwugquwaukuuosaw = '', string $yucgcsieomwqgwws = "\56\x68\164\155\x6c\x2e\x74\x77\151\147") : string { if ($egsqwmeeeowomomi = $this->smukuowsyyssmcok()) { $aiieyweysaukqemc = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()); $ceigyqiuaggymwkw = $aiieyweysaukqemc . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; if ($cwugquwaukuuosaw && !pr_get_foundation()->uuiwwqyikiwauwgq($ceigyqiuaggymwkw)) { $ceigyqiuaggymwkw = $aiieyweysaukqemc . $cwugquwaukuuosaw . $yucgcsieomwqgwws; } $qqscaoyqikuyeoaw = $ceigyqiuaggymwkw; } return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\x72\157\142\157\164\x73") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\x6e\157\151\156\144\x65\170"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\x65\164\120\x72\x69\157\x72\151\164\171"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); } } if ($oyigwoawqogioses) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); } return $nsmgceoqaqogqmuw; } public function sggkkiiqkekaomig(array $ywmkwiwkosakssii = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\160\162\x6f\x67\x72\145\163\163\142\141\x72", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->okosscaokmeqkqiq($ywmkwiwkosakssii)); } }
