<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\x66\x72\x6f\156\164\x65\156\x64"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto guoeosgiowqqmswg; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto gyqiqmsmeisgcyys; guoeosgiowqqmswg: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\143\x6f\154"; if (!$gcgsqcoqciockquc) { goto yaskeauwgsusisom; } $cmkqisoeyioisqaw .= "\55{$gcgsqcoqciockquc}"; yaskeauwgsusisom: $cmkqisoeyioisqaw .= "\x2d{$qgoqiacsiccwoawi}\x20"; oogqmueeykigemom: } auywcaygigcsqoek: gyqiqmsmeisgcyys: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\x20{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto emuyygwqumgmmqei; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\x69\x6e\x64\x65\170", "\x6c\x65\x6e\x67\x74\150"]); emuyygwqumgmmqei: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto agewumsacuussmoc; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto mmyiieeusyagswii; } if (!is_array($imgcoakmmgqsckkm)) { goto gswyigyemukicika; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; gswyigyemukicika: goto scwsaugwsiimogui; mmyiieeusyagswii: $waaaiiqwsmggwsak = array_filter(explode("\x63\x6f\154\x2d", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto ccgoagogukekkeks; } if (!($gaeqamemwmwsyukm === 2)) { goto kimusawigieceeai; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; kimusawigieceeai: goto oegoygwicucyeses; ccgoagogukekkeks: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; oegoygwicucyeses: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; omkwqeiacwosgskq: } kgumycouuweoycwe: scwsaugwsiimogui: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto cggukoegykqeekww; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto akuwuwcyqewysmym; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto iaywwiisqiumgcma; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; iaywwiisqiumgcma: if (!$gcgsqcoqciockquc) { goto cekkcogkuwsqqyes; } $gcgsqcoqciockquc = "\x2d{$gcgsqcoqciockquc}"; cekkcogkuwsqqyes: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto yoyeqyywuskoamic; } $giwamsoicooomueg .= "\40\155\142{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}"; goto eieikkycsmsqumuu; yoyeqyywuskoamic: $giwamsoicooomueg .= "\x20\155\142{$gcgsqcoqciockquc}\55\60"; eieikkycsmsqumuu: akuwuwcyqewysmym: mayckwaigqsiwmem: } cyeqsmcuiukikium: cggukoegykqeekww: agewumsacuussmoc: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\141\154\145\162\164\137\x64\151\163\155\151\163\x73", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto cymiwscoawuyaugi; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; cymiwscoawuyaugi: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\163\x73\145\x73" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\163\164\162\157\156\147"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\x6c\x65\162\x74", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\163\164\162\157\x6e\x67", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto esumwomoiqskweoc; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto goiacugaoueamwyk; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; goiacugaoueamwyk: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\x64\x61\164\141\x2d\164\157\x67\147\x6c\x65" => Constants::ismwycwsasweqomi, "\x64\x61\164\x61\55\x74\141\x72\x67\145\164" => "\43{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); esumwomoiqskweoc: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\155\157\x64\141\154", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\x62\165\x74\x74\x6f\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x62\165\x74\x74\157\156", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\150\x72\145\x66"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x6c\x69\x6e\x6b", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\163\x73" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\x62\x6f\x72\144\145\x72", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\163\x70\x69\x6e\156\145\x72", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\x2e\x68\164\x6d\x6c\x2e\164\x77\151\x67") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto uqcuqaucosyymciy; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; uqcuqaucosyymciy: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\x72\x6f\142\157\x74\163") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\156\157\151\x6e\x64\x65\x78"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\147\145\x74\120\162\151\157\162\x69\164\x79"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto eowgoimkqygwiock; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); eowgoimkqygwiock: mgcimqiiwsciocoy: } gcwuuuasqqocoics: if (!$oyigwoawqogioses) { goto agemwyemooogsiyc; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); agemwyemooogsiyc: return $nsmgceoqaqogqmuw; } }
