<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; class Component extends Data { protected array $args = []; protected ?string $type = null; protected ?string $name = null; protected ?array $options = []; protected ?string $root = null; protected ?string $domain = null; protected bool $isMustUse = false; protected ?Container $initiator = null; protected ?string $shortname = null; protected ?string $licenseKey = null; protected array $composer = []; public function __construct(Container $eqkagmqcomwssqai, string $sqeykgyoooqysmca, string $ymqmyyeuycgmigyo, string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) { $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $this->root = $miiyyswuessymmwe->iygwwosmmgmouoyc($miawkwqioaeasiig); $this->name = $ymqmyyeuycgmigyo; $this->type = $sqeykgyoooqysmca; $this->domain = $ymqmyyeuycgmigyo; $this->initiator = $eqkagmqcomwssqai; $this->shortname = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($ymqmyyeuycgmigyo); $ooceusioyoimisig = strtoupper($ymqmyyeuycgmigyo); $miiyyswuessymmwe->wwckmeoskuagomki($ooceusioyoimisig, $ymqmyyeuycgmigyo); $miiyyswuessymmwe->wwckmeoskuagomki($ooceusioyoimisig . "\x5f\137\122\117\x4f\x54\137\137\120\101\124\x48", $this->ikeqsmumgwwuqmkw()); $this->options = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\143\157\155\160\x6f\156\x65\156\x74\55{$this->eeucessuemoysgqg()}", []); $qcwguyymcysacqak = $this->ikeqsmumgwwuqmkw() . "\57\143\x6f\x6d\160\x6f\x73\x65\162\x2e\152\163\157\x6e"; if (!file_exists($qcwguyymcysacqak)) { goto mqycugoiuasmyycy; } $ikgwqyuyckaewsow = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->mkakmgoaemygaomc($qcwguyymcysacqak); if (!(is_array($ikgwqyuyckaewsow) || is_object($ikgwqyuyckaewsow))) { goto oqsgqmmoqoyoicia; } $this->composer = (array) $ikgwqyuyckaewsow; oqsgqmmoqoyoicia: mqycugoiuasmyycy: if (!$ywmkwiwkosakssii) { goto coomeqeooeuaagwm; } $this->args = $ywmkwiwkosakssii; $ewuukoycimkekouc = $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] ?? ''; if (!((!is_bool($ewuukoycimkekouc) || $ewuukoycimkekouc) && $this->ggocakcisguuokai())) { goto qiagugckeckokcas; } $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\141\144\155\151\156\x5f\155\145\156\165", [$this, "\145\x75\x71\147\x77\151\163\x63\x77\x67\161\x6b\161\153\145\x63"]); qiagugckeckokcas: coomeqeooeuaagwm: } public function euqgwiscwgqkqkec() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::gqmskcacocowcwaw => IconBrandInterface::yqkugkuyygummmsk, Constants::kekcgssiyagioocg => $this->imkyoqyocosuqasu(Constants::kekcgssiyagioocg, 1), Constants::wuowaiyouwecckaw => $this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw, $this->aakmagwggmkoiiyu()), Constants::ysgwugcqguggmigq => $this->qcgakseyaikigqco(), Constants::ucmueuwwcmocgmig => $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\143\x6f\x6d\160\x6f\x6e\145\x6e\x74\137\x63\x61\160\141\142\x69\154\x69\x74\x79", Constants::gewmeskawiqikkoc, $this->aakmagwggmkoiiyu())]); } public function gkwkqmwweiawigae() : ?array { return $this->options; } public function eumeoaamqwuckame(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->composer, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function gikwwgqmwccescgy() : ?string { return $this->eumeoaamqwuckame(Constants::qeueagcuyogwwyky, ''); } public function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function kooiucqkggeagccu() : array { return $this->args; } public function imkyoqyocosuqasu($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $wsmeuqcsyguikoci = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $uusmaiomayssaecw); if ($wsmeuqcsyguikoci) { goto gkkywuycqkawqiuq; } $wsmeuqcsyguikoci = $ggauoeuaesiymgee; gkkywuycqkawqiuq: if (!is_callable($wsmeuqcsyguikoci)) { goto swoiuaaoaceaaeou; } $wsmeuqcsyguikoci = $wsmeuqcsyguikoci(); swoiuaaoaceaaeou: return $wsmeuqcsyguikoci; } public function qcgakseyaikigqco() : ?string { return $this->giiuwsmyumqwwiyq(($this->caokeucsksukesyo()->eiwcuqigayigimak()->miqkyauycmkywoka() ? "\146\x61" : "\145\x6e") . Constants::icmokuskwoskgace, $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume, $this->eeucessuemoysgqg())); } public function ggocakcisguuokai(bool $cwwowqyuwccuykom = false) : bool { if (!(Constants::goqwwcuaqoyouoya === $this->gueasuouwqysmomu())) { goto eqewaacwikyoaswc; } return true; eqewaacwikyoaswc: if ($cwwowqyuwccuykom) { goto mqkmsmceakcwuykg; } mqkmsmceakcwuykg: return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\141\x63\x74\151\x76\x65\55\143\157\155\x70\157\x6e\x65\x6e\164") === $this->aakmagwggmkoiiyu() || $this->giiuwsmyumqwwiyq(Constants::ciywsqoeiymemsys) === Constants::eqewsqmqmsiocaeg; } public function oscgkucommwqsycm() : bool { return $this->isMustUse; } public function iaekqgaasqaauuwy() : self { $this->isMustUse = true; return $this; } public function swayyoqegayqgimw(?string $hsouuwoeemykcceu) : self { $this->licenseKey = $hsouuwoeemykcceu; return $this; } public function sgcwgmoayikkysaq() : ?string { return $this->licenseKey; } public function mceoyuqgagciommq() : ?string { $xeciwimgioieayek = null; if (!$this->migcwoasskgioeog()) { goto semsywguyogigssk; } $xeciwimgioieayek = untrailingslashit($this->migcwoasskgioeog()->miocmcoykayoyyau()->mkwomgueyaaooyye()) . "\x2f{$this->aiqioscoyukqgsgw()}"; semsywguyogigssk: return $xeciwimgioieayek; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function ikeqsmumgwwuqmkw() : ?string { return $this->root; } public function wmokamoeekequoqw(?string $couygeouymagssgw) : self { $this->root = $couygeouymagssgw; return $this; } public function wwawisckiqeueoua() : ?string { return $this->domain; } public function suyquyoaausqsuay(?string $mokawwccycoiqeka) : self { $this->domain = $mokawwccycoiqeka; return $this; } public function migcwoasskgioeog() : ?Container { return $this->initiator; } public function aiqioscoyukqgsgw() : ?string { return $this->shortname; } public function aqkmwawoaaigkoyq() : string { return "\100{$this->wwawisckiqeueoua()}"; } public function eeucessuemoysgqg() : string { return basename($this->ikeqsmumgwwuqmkw()); } public function aksiegmauqiaueis() : ?string { $couygeouymagssgw = $this->ikeqsmumgwwuqmkw(); $mkomwsiykqigmqca = "{$couygeouymagssgw}\x2f\166\x65\156\144\157\x72"; if (is_dir($mkomwsiykqigmqca)) { goto scmyekuemcoeeggy; } $mkomwsiykqigmqca = realpath("{$couygeouymagssgw}\57\x2e\56\x2f\x2e\x2e"); scmyekuemcoeeggy: return $mkomwsiykqigmqca; } public function eokmosoqmeiakwki(callable $ekiuyucoiagmscgy) : self { return $this->ukymogkaggogqgms(Constants::kueyauseicqqwesu, $ekiuyucoiagmscgy); } public function gwcqooogwwkcamag(callable $ekiuyucoiagmscgy) : self { return $this->ukymogkaggogqgms(Constants::yewqymwwigegyeuk, $ekiuyucoiagmscgy); } public function icgccomuogeeewue(callable $ekiuyucoiagmscgy) : self { return $this->ukymogkaggogqgms(Constants::ukwaycqmyyuekwqg, $ekiuyucoiagmscgy)->ukymogkaggogqgms(Constants::smcouciwkukmgoqm, $ekiuyucoiagmscgy); } public function iuggsiykyykmawog(callable $ekiuyucoiagmscgy) : self { return $this->ukymogkaggogqgms(Constants::yaeeqsosiaimuqma, $ekiuyucoiagmscgy)->ukymogkaggogqgms(Constants::DELETE, $ekiuyucoiagmscgy); } private function ukymogkaggogqgms(string $ymqmyyeuycgmigyo, callable $ekiuyucoiagmscgy) : self { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x70\x6d\160\162\137{$ymqmyyeuycgmigyo}\137\x63\x6f\155\x70\157\156\x65\x6e\164\137{$this->eeucessuemoysgqg()}", $ekiuyucoiagmscgy); return $this; } public function mggwieqomgcuskme() : ?Setting { $umqqgsiscygmeiem = null; if (!($eqkagmqcomwssqai = $this->migcwoasskgioeog())) { goto sqigasuoiqyqqokc; } $umqqgsiscygmeiem = $eqkagmqcomwssqai->kmuweyayaqoeqiyw(); if ($umqqgsiscygmeiem) { goto kcsegweogmaqiwco; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $eamagaooumqowmwa = $this->migcwoasskgioeog()->ugwmakayykcmcmqa(); $ocimuuewyeqmgeyu = $yyauwyaeewsickwk->aimgkskucmymyquc($eamagaooumqowmwa, "\x53\145\164\164\151\x6e\x67", $eqkagmqcomwssqai::uqggkiomyiceyooa()); if (class_exists($ocimuuewyeqmgeyu)) { goto ykocaswauweieysc; } $ocimuuewyeqmgeyu = $yyauwyaeewsickwk->aimgkskucmymyquc($eamagaooumqowmwa, "\x53\145\164\x74\151\x6e\x67\x5c\x53\x65\164\x74\151\x6e\147", $eqkagmqcomwssqai::uqggkiomyiceyooa()); ykocaswauweieysc: if (!(class_exists($ocimuuewyeqmgeyu) && is_subclass_of($ocimuuewyeqmgeyu, Setting::class) && !$yyauwyaeewsickwk->cmmaeeeoaaeqqqmm($ocimuuewyeqmgeyu, "\151\163\x41\142\163\164\162\x61\143\164", true))) { goto aaksksikokoywwqw; } $umqqgsiscygmeiem = $ocimuuewyeqmgeyu::symcgieuakksimmu(); aaksksikokoywwqw: kcsegweogmaqiwco: sqigasuoiqyqqokc: return $umqqgsiscygmeiem; } }
