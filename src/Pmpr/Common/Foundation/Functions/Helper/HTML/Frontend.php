<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da680f9db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Frontend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Template\Template; class Frontend extends Common { use ObjectTrait; const iuuysigyggsswiae = "\146\162\x6f\x6e\x74\x65\x6e\144"; public function ewgmueueeycoikso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::mseyscuumygemsis => 6, Constants::mcwismemiumceoos => [], Constants::soquiwyuimckgiow => []]); $mogykyiukkoqceec = $ywmkwiwkosakssii[Constants::mseyscuumygemsis]; $qgqgaykggoemycsk = $ywmkwiwkosakssii[Constants::mcwismemiumceoos]; $wkkweuacukumqmya = $ywmkwiwkosakssii[Constants::soquiwyuimckgiow]; $giwamsoicooomueg = $this->sywwiggceceaqmko($qgqgaykggoemycsk, $wkkweuacukumqmya, $mogykyiukkoqceec); $cmkqisoeyioisqaw = ''; if (is_array($wkkweuacukumqmya)) { goto emuyygwqumgmmqei; } $cmkqisoeyioisqaw = $wkkweuacukumqmya; goto kgumycouuweoycwe; emuyygwqumgmmqei: foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { $cmkqisoeyioisqaw .= "\143\x6f\154"; if (!$gcgsqcoqciockquc) { goto gyqiqmsmeisgcyys; } $cmkqisoeyioisqaw .= "\x2d{$gcgsqcoqciockquc}"; gyqiqmsmeisgcyys: $cmkqisoeyioisqaw .= "\55{$qgoqiacsiccwoawi}\40"; guoeosgiowqqmswg: } yaskeauwgsusisom: kgumycouuweoycwe: $giwamsoicooomueg = trim($giwamsoicooomueg); $cmkqisoeyioisqaw = trim($cmkqisoeyioisqaw); return "{$cmkqisoeyioisqaw}\40{$giwamsoicooomueg}"; } public function sywwiggceceaqmko($qgqgaykggoemycsk, $imgcoakmmgqsckkm, int $mogykyiukkoqceec = 6) : string { if (!is_array($qgqgaykggoemycsk)) { goto omkwqeiacwosgskq; } $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\x69\x6e\x64\145\170", "\x6c\x65\x6e\x67\164\150"]); omkwqeiacwosgskq: $giwamsoicooomueg = ''; if (!$qgqgaykggoemycsk) { goto goiacugaoueamwyk; } $wkkweuacukumqmya = []; if (is_string($imgcoakmmgqsckkm)) { goto cyeqsmcuiukikium; } if (!is_array($imgcoakmmgqsckkm)) { goto scwsaugwsiimogui; } $wkkweuacukumqmya = $imgcoakmmgqsckkm; scwsaugwsiimogui: goto mayckwaigqsiwmem; cyeqsmcuiukikium: $waaaiiqwsmggwsak = array_filter(explode("\143\157\154\55", $imgcoakmmgqsckkm)); foreach ($waaaiiqwsmggwsak as $qgoqiacsiccwoawi) { $eqgoocgaqwqcimie = explode("\x2d", $qgoqiacsiccwoawi); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); $gcgsqcoqciockquc = ''; if ($gaeqamemwmwsyukm === 1) { goto gswyigyemukicika; } if (!($gaeqamemwmwsyukm === 2)) { goto oegoygwicucyeses; } $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0]; $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1]; oegoygwicucyeses: goto mmyiieeusyagswii; gswyigyemukicika: $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0]; mmyiieeusyagswii: $wkkweuacukumqmya[$gcgsqcoqciockquc] = $qgoqiacsiccwoawi; ccgoagogukekkeks: } kimusawigieceeai: mayckwaigqsiwmem: if (!($wkkweuacukumqmya && is_array($wkkweuacukumqmya))) { goto cymiwscoawuyaugi; } foreach ($wkkweuacukumqmya as $gcgsqcoqciockquc => $qgoqiacsiccwoawi) { if (!($qgoqiacsiccwoawi > 0)) { goto agewumsacuussmoc; } $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi; $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length; $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi; if (!($aoqagsqecokqqwqg === $ykiwomimkkuiigoq)) { goto yoyeqyywuskoamic; } $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi; yoyeqyywuskoamic: if (!$gcgsqcoqciockquc) { goto eieikkycsmsqumuu; } $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}"; eieikkycsmsqumuu: if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) { goto akuwuwcyqewysmym; } $giwamsoicooomueg .= "\x20\x6d\x62{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}"; goto cggukoegykqeekww; akuwuwcyqewysmym: $giwamsoicooomueg .= "\x20\155\x62{$gcgsqcoqciockquc}\55\60"; cggukoegykqeekww: agewumsacuussmoc: cekkcogkuwsqqyes: } iaywwiisqiumgcma: cymiwscoawuyaugi: goiacugaoueamwyk: return rtrim($giwamsoicooomueg); } public function ocmyoyeuugcyqccu(array $qookweymeqawmcwo = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\141\x6c\145\x72\164\x5f\144\x69\163\155\x69\x73\163", $qookweymeqawmcwo); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) : string { if (!is_string($ywmkwiwkosakssii)) { goto esumwomoiqskweoc; } $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; esumwomoiqskweoc: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\141\163\x73\x65\163" => '', Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => false, Constants::ukmmooykymieiuec => "\163\164\162\x6f\x6e\147"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\57\x61\x6c\x65\x72\164", $ywmkwiwkosakssii); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::ieioeisgwcgysukw => false, Constants::qescuiwgsyuikume => '', Constants::uqgcmmosieyimiku => '', Constants::ssmskyqgcmeiayco => '', Constants::kekekeusyqkouowm => [], Constants::qaioykeumkssukis => false, Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => "\x73\x74\162\157\156\x67", Constants::igqkwqsakswkeiog => '']); if (!is_array($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku])) { goto gcwuuuasqqocoics; } if (isset($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym])) { goto uqcuqaucosyymciy; } $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = []; uqcuqaucosyymciy: $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sueyawuweyoqyeaq($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku][Constants::ysskgssgwuwmqwym], [Constants::squoamkioomemiyi => Constants::gqmuoaykeqeuoukm, "\x64\x61\x74\x61\x2d\x74\x6f\x67\x67\154\x65" => Constants::ismwycwsasweqomi, "\x64\x61\164\141\x2d\164\x61\162\147\145\164" => "\43{$ywmkwiwkosakssii[Constants::gouqcwikiiygyasc]}"]); $ywmkwiwkosakssii[Constants::uqgcmmosieyimiku] = $this->kwkmeiyiomikmcoc($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku]); gcwuuuasqqocoics: return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x6d\x6f\144\141\154", $ywmkwiwkosakssii); } public function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::ysskgssgwuwmqwym => [], Constants::gqmuoaykeqeuoukm => true, Constants::ELEMENT => "\142\x75\164\x74\x6f\156"]); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\142\165\164\x74\157\156", $ywmkwiwkosakssii); } public function yuawgssgauywkiia($eeamcawaiqocomwy, $cmwygeyygwqaemaq, array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::TEXT => $cmwygeyygwqaemaq, Constants::ysskgssgwuwmqwym => []]); $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]["\x68\x72\x65\x66"] = $eeamcawaiqocomwy; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\x6c\151\156\153", $ywmkwiwkosakssii); } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\154\141\163\x73" => '', Constants::ieioeisgwcgysukw => false, Constants::TEXT => '', Constants::squoamkioomemiyi => "\142\157\162\144\145\x72", Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::yqemseykugmsyeqa => '']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . "\x2f\163\160\x69\x6e\x6e\x65\x72", $ywmkwiwkosakssii); } public function smukuowsyyssmcok() : ?Component { $eycawmqcusmkcygy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->yegcgmiiagikeqqy(); return Template::symcgieuakksimmu()->qmkyymgaecsmakqq($eycawmqcusmkcygy); } public function kiouesoscyimiwow(string $qqscaoyqikuyeoaw, string $yucgcsieomwqgwws = "\x2e\150\x74\x6d\154\56\164\167\x69\147") : string { if (!($egsqwmeeeowomomi = $this->smukuowsyyssmcok())) { goto mgcimqiiwsciocoy; } $qqscaoyqikuyeoaw = trailingslashit($egsqwmeeeowomomi->aqkmwawoaaigkoyq()) . $qqscaoyqikuyeoaw . $yucgcsieomwqgwws; mgcimqiiwsciocoy: return $qqscaoyqikuyeoaw; } public function ugwguyikugkemaqc(string $ymqmyyeuycgmigyo = "\162\x6f\142\x6f\164\163") { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu($ymqmyyeuycgmigyo, "\156\157\151\156\144\145\x78"); } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\x65\164\120\x72\x69\x6f\x72\x69\x74\171"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto assaqeukweemagcm; } $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); assaqeukweemagcm: agemwyemooogsiyc: } eowgoimkqygwiock: if (!$oyigwoawqogioses) { goto mgkikasuaseesumm; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); mgkikasuaseesumm: return $nsmgceoqaqogqmuw; } }
