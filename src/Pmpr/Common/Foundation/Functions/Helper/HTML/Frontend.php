<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4d0827938             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\x66\x72\x6f\156\x74\145\156\144"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\143\157\x6c"; if ($gcgsqcoqciockquc) { $cmkqisoeyioisqaw .= "\55{$gcgsqcoqciockquc}"; } $cmkqisoeyioisqaw .= "\55{$qgoqiacsiccwoawi}\40"; } } else { $cmkqisoeyioisqaw = $wkkweuacukumqmya; } $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\40{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (is_array($qgqgaykggoemycsk)) { $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\x69\x6e\144\x65\170", "\x6c\145\x6e\x67\164\150"]); } $giwamsoicooomueg = ''; if ($qgqgaykggoemycsk) { $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { $waaaiiqwsmggwsak = array_filter(explode("\143\x6f\154\55", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; } else { if ($gaeqamemwmwsyukm === 2) { $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; } } $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; } } else { if (is_array($imgcoakmmgqsckkm)) { $wkkweuacukumqmya = $imgcoakmmgqsckkm; } } if ($wkkweuacukumqmya && is_array($wkkweuacukumqmya)) { foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if ($qgoqiacsiccwoawi > 0) { $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if ($aoqagsqecokqqwqg === $ykiwomimkkuiigoq) { $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; } if ($gcgsqcoqciockquc) { $gcgsqcoqciockquc = "\x2d{$gcgsqcoqciockquc}"; } if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { $giwamsoicooomueg .= "\40\155\x62{$gcgsqcoqciockquc}\55\x30"; } else { $giwamsoicooomueg .= "\40\155\142{$gcgsqcoqciockquc}\x2d{$mogykyiukkoqceec}"; } } } } } return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\154\145\x72\164\137\x64\x69\x73\x6d\151\163\163", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (is_string($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\141\163\163\145\163" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\x73\x74\162\157\x6e\x67"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\154\145\x72\164", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\163\164\x72\x6f\156\x67", Constants::igqkwqsakswkeiog => '']); if (is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { if (!isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\144\141\164\x61\55\164\157\x67\147\x6c\x65" => Constants::ismwycwsasweqomi, "\144\x61\x74\141\x2d\x74\x61\162\x67\x65\164" => "\43{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); } return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x6d\x6f\x64\x61\154", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\142\165\164\x74\x6f\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x62\165\x74\164\157\x6e", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\x68\x72\145\146"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\154\151\156\x6b", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\x61\163\x73" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\x62\157\162\x64\x65\162", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\163\160\x69\x6e\x6e\x65\x72", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aigqycwckeyoqmoi($eycawmqcusmkcygy, Constants::kicaioiokgkqqywe); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\x2e\x68\x74\x6d\154\56\164\167\x69\x67") : string { if ($egsqwmeeeowomomi = $this->smukuowsyyssmcok()) { $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; } return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\x72\157\x62\157\x74\163") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\x6e\157\151\156\x64\145\x78"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\145\164\x50\162\151\x6f\x72\x69\x74\x79"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); } } if ($oyigwoawqogioses) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); } return $nsmgceoqaqogqmuw; } }
