<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\x66\x72\157\156\164\x65\156\144"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto kgumycouuweoycwe; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto omkwqeiacwosgskq; kgumycouuweoycwe: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\143\157\154"; if (!$gcgsqcoqciockquc) { goto emuyygwqumgmmqei; } $cmkqisoeyioisqaw .= "\x2d{$gcgsqcoqciockquc}"; emuyygwqumgmmqei: $cmkqisoeyioisqaw .= "\55{$qgoqiacsiccwoawi}\40"; gyqiqmsmeisgcyys: } guoeosgiowqqmswg: omkwqeiacwosgskq: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\40{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto kimusawigieceeai; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\156\x64\145\170", "\x6c\x65\156\x67\164\x68"]); kimusawigieceeai: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto esumwomoiqskweoc; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto mayckwaigqsiwmem; } if (!is_array($imgcoakmmgqsckkm)) { goto cyeqsmcuiukikium; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; cyeqsmcuiukikium: goto iaywwiisqiumgcma; mayckwaigqsiwmem: $waaaiiqwsmggwsak = array_filter(explode("\143\157\x6c\55", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\x2d", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto mmyiieeusyagswii; } if (!($gaeqamemwmwsyukm === 2)) { goto gswyigyemukicika; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; gswyigyemukicika: goto scwsaugwsiimogui; mmyiieeusyagswii: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; scwsaugwsiimogui: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; oegoygwicucyeses: } ccgoagogukekkeks: iaywwiisqiumgcma: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto goiacugaoueamwyk; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto cymiwscoawuyaugi; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto eieikkycsmsqumuu; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; eieikkycsmsqumuu: if (!$gcgsqcoqciockquc) { goto akuwuwcyqewysmym; } $gcgsqcoqciockquc = "\x2d{$gcgsqcoqciockquc}"; akuwuwcyqewysmym: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto cggukoegykqeekww; } $giwamsoicooomueg .= "\40\155\x62{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}"; goto agewumsacuussmoc; cggukoegykqeekww: $giwamsoicooomueg .= "\x20\155\142{$gcgsqcoqciockquc}\x2d\60"; agewumsacuussmoc: cymiwscoawuyaugi: yoyeqyywuskoamic: } cekkcogkuwsqqyes: goiacugaoueamwyk: esumwomoiqskweoc: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\141\x6c\145\x72\x74\x5f\x64\151\x73\x6d\151\163\163", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto uqcuqaucosyymciy; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; uqcuqaucosyymciy: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\x61\163\163\145\163" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\163\x74\162\x6f\156\147"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\141\154\x65\x72\164", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\163\164\x72\x6f\156\x67", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto mgcimqiiwsciocoy; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto gcwuuuasqqocoics; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; gcwuuuasqqocoics: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\x64\141\164\x61\x2d\x74\157\147\147\x6c\145" => Constants::ismwycwsasweqomi, "\144\x61\164\x61\55\x74\x61\162\147\145\x74" => "\x23{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); mgcimqiiwsciocoy: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x6d\157\144\x61\x6c", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\142\x75\x74\164\157\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\142\x75\164\x74\x6f\x6e", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\150\x72\x65\x66"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\154\151\156\x6b", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\x61\163\x73" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\142\157\x72\x64\145\x72", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x73\160\x69\x6e\156\145\x72", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\56\150\164\155\154\56\164\167\151\x67") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto eowgoimkqygwiock; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; eowgoimkqygwiock: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\x72\157\142\157\x74\163") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\x6e\x6f\x69\x6e\x64\x65\x78"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\145\x74\120\x72\x69\x6f\x72\x69\x74\171"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto mgkikasuaseesumm; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); mgkikasuaseesumm: assaqeukweemagcm: } agemwyemooogsiyc: if (!$oyigwoawqogioses) { goto uossiqykiaouimca; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); uossiqykiaouimca: return $nsmgceoqaqogqmuw; } }
