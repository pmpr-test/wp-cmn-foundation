<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\146\x72\157\x6e\x74\145\x6e\x64"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto gyqiqmsmeisgcyys; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto emuyygwqumgmmqei; gyqiqmsmeisgcyys: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\x63\157\154"; if (!$gcgsqcoqciockquc) { goto guoeosgiowqqmswg; } $cmkqisoeyioisqaw .= "\x2d{$gcgsqcoqciockquc}"; guoeosgiowqqmswg: $cmkqisoeyioisqaw .= "\55{$qgoqiacsiccwoawi}\x20"; yaskeauwgsusisom: } oogqmueeykigemom: emuyygwqumgmmqei: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\40{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto kgumycouuweoycwe; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\x6e\144\x65\x78", "\154\145\x6e\147\164\x68"]); kgumycouuweoycwe: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto cymiwscoawuyaugi; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto scwsaugwsiimogui; } if (!is_array($imgcoakmmgqsckkm)) { goto mmyiieeusyagswii; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; mmyiieeusyagswii: goto cyeqsmcuiukikium; scwsaugwsiimogui: $waaaiiqwsmggwsak = array_filter(explode("\143\x6f\154\55", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto oegoygwicucyeses; } if (!($gaeqamemwmwsyukm === 2)) { goto ccgoagogukekkeks; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; ccgoagogukekkeks: goto gswyigyemukicika; oegoygwicucyeses: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; gswyigyemukicika: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; kimusawigieceeai: } omkwqeiacwosgskq: cyeqsmcuiukikium: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto agewumsacuussmoc; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto cggukoegykqeekww; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto cekkcogkuwsqqyes; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; cekkcogkuwsqqyes: if (!$gcgsqcoqciockquc) { goto yoyeqyywuskoamic; } $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}"; yoyeqyywuskoamic: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto eieikkycsmsqumuu; } $giwamsoicooomueg .= "\x20\x6d\142{$gcgsqcoqciockquc}\x2d{$mogykyiukkoqceec}"; goto akuwuwcyqewysmym; eieikkycsmsqumuu: $giwamsoicooomueg .= "\x20\155\x62{$gcgsqcoqciockquc}\55\x30"; akuwuwcyqewysmym: cggukoegykqeekww: iaywwiisqiumgcma: } mayckwaigqsiwmem: agewumsacuussmoc: cymiwscoawuyaugi: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\141\154\145\x72\164\137\144\x69\x73\155\x69\x73\x73", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto goiacugaoueamwyk; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; goiacugaoueamwyk: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\163\x73\145\163" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\x73\164\x72\x6f\x6e\x67"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x61\x6c\x65\162\x74", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\163\164\x72\157\156\x67", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto uqcuqaucosyymciy; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto esumwomoiqskweoc; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; esumwomoiqskweoc: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\x64\x61\164\x61\x2d\x74\157\147\x67\x6c\145" => Constants::ismwycwsasweqomi, "\x64\x61\x74\x61\x2d\164\x61\162\147\x65\x74" => "\43{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); uqcuqaucosyymciy: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\155\157\144\x61\x6c", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\x62\x75\164\x74\x6f\x6e"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x62\165\164\164\x6f\156", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\x68\162\145\x66"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x6c\x69\x6e\153", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\x73\x73" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\142\x6f\162\x64\x65\x72", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x73\160\x69\x6e\156\x65\162", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\x2e\150\x74\x6d\x6c\x2e\x74\x77\151\147") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto gcwuuuasqqocoics; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; gcwuuuasqqocoics: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\162\157\142\157\164\x73") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\156\157\151\156\x64\145\170"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\147\145\x74\x50\x72\151\157\x72\x69\164\171"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto agemwyemooogsiyc; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); agemwyemooogsiyc: eowgoimkqygwiock: } mgcimqiiwsciocoy: if (!$oyigwoawqogioses) { goto assaqeukweemagcm; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); assaqeukweemagcm: return $nsmgceoqaqogqmuw; } }
