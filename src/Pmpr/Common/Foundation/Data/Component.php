<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679775b18836a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting; class Component extends Data { protected array $args = []; protected ?string $type = null; protected string $name = ''; protected ?array $options = []; protected ?string $root = null; protected ?string $domain = null; protected bool $isMustUse = false; protected ?Container $initiator = null; protected ?string $shortname = null; protected ?string $licenseKey = null; protected array $composer = []; public function __construct(Container $eqkagmqcomwssqai, string $sqeykgyoooqysmca, string $ymqmyyeuycgmigyo, string $miawkwqioaeasiig, array $ywmkwiwkosakssii = []) { $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $this->root = $miiyyswuessymmwe->iygwwosmmgmouoyc($miawkwqioaeasiig); $this->name = $ymqmyyeuycgmigyo; $this->type = $sqeykgyoooqysmca; $this->domain = $ymqmyyeuycgmigyo; $this->initiator = $eqkagmqcomwssqai; $this->shortname = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($ymqmyyeuycgmigyo); $ooceusioyoimisig = strtoupper($ymqmyyeuycgmigyo); $miiyyswuessymmwe->wwckmeoskuagomki($ooceusioyoimisig, $ymqmyyeuycgmigyo); $miiyyswuessymmwe->wwckmeoskuagomki($ooceusioyoimisig . "\x5f\137\x52\x4f\x4f\x54\x5f\137\120\101\x54\x48", $this->ikeqsmumgwwuqmkw()); $this->options = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x63\x6f\x6d\160\x6f\x6e\x65\156\164\x2d{$this->eeucessuemoysgqg()}", []); $qcwguyymcysacqak = $this->ikeqsmumgwwuqmkw() . "\x2f\x63\157\155\160\157\163\145\162\x2e\152\x73\157\156"; if (file_exists($qcwguyymcysacqak)) { $ikgwqyuyckaewsow = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->mkakmgoaemygaomc($qcwguyymcysacqak); if (is_array($ikgwqyuyckaewsow) || is_object($ikgwqyuyckaewsow)) { $this->composer = (array) $ikgwqyuyckaewsow; } } if ($ywmkwiwkosakssii) { $this->args = $ywmkwiwkosakssii; if ($this->ggocakcisguuokai()) { $ewuukoycimkekouc = $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] ?? ''; if (!is_bool($ewuukoycimkekouc) || $ewuukoycimkekouc) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\155\x65\156\x75", [$this, "\x65\165\x71\x67\x77\151\163\x63\167\147\161\x6b\x71\153\x65\143"]); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\155\x67\x67\167\151\145\161\x6f\155\147\x63\165\163\x6b\155\x65"], 0); } } } } public function euqgwiscwgqkqkec() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::gqmskcacocowcwaw => IconBrandInterface::yqkugkuyygummmsk, Constants::kekcgssiyagioocg => $this->imkyoqyocosuqasu(Constants::kekcgssiyagioocg, 1), Constants::wuowaiyouwecckaw => $this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw, $this->aakmagwggmkoiiyu()), Constants::ysgwugcqguggmigq => $this->qcgakseyaikigqco(), Constants::ucmueuwwcmocgmig => $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x63\x6f\x6d\x70\x6f\x6e\145\156\x74\x5f\x63\x61\x70\141\x62\151\x6c\x69\164\171", Constants::gewmeskawiqikkoc, $this->aakmagwggmkoiiyu())]); } public function gkwkqmwweiawigae() : ?array { return $this->options; } public function eumeoaamqwuckame(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->composer, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function gikwwgqmwccescgy() : ?string { return $this->eumeoaamqwuckame(Constants::qeueagcuyogwwyky, ''); } public function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function kooiucqkggeagccu() : array { return $this->args; } public function imkyoqyocosuqasu($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $wsmeuqcsyguikoci = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $uusmaiomayssaecw); if (!$wsmeuqcsyguikoci) { $wsmeuqcsyguikoci = $ggauoeuaesiymgee; } if (is_callable($wsmeuqcsyguikoci)) { $wsmeuqcsyguikoci = $wsmeuqcsyguikoci(); } return $wsmeuqcsyguikoci; } public function qcgakseyaikigqco() : ?string { return $this->giiuwsmyumqwwiyq(($this->caokeucsksukesyo()->eiwcuqigayigimak()->miqkyauycmkywoka() ? "\x66\141" : "\x65\x6e") . Constants::icmokuskwoskgace, $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume, $this->eeucessuemoysgqg())); } public function ggocakcisguuokai(bool $cwwowqyuwccuykom = false) : bool { if (Constants::goqwwcuaqoyouoya === $this->gueasuouwqysmomu()) { return true; } if (!$cwwowqyuwccuykom) { } return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x61\x63\164\151\166\x65\x2d\143\157\x6d\160\157\x6e\145\x6e\164") === $this->aakmagwggmkoiiyu() || $this->giiuwsmyumqwwiyq(Constants::ciywsqoeiymemsys) === Constants::eqewsqmqmsiocaeg; } public function oscgkucommwqsycm() : bool { return $this->isMustUse; } public function iaekqgaasqaauuwy() : self { $this->isMustUse = true; return $this; } public function swayyoqegayqgimw(?string $hsouuwoeemykcceu) : self { $this->licenseKey = $hsouuwoeemykcceu; return $this; } public function sgcwgmoayikkysaq() : ?string { return $this->licenseKey; } public function mceoyuqgagciommq() : ?string { return $this->caokeucsksukesyo()->usugyumcgeaaowsi()->kwoeacmuoiuucyes($this); } public function aakmagwggmkoiiyu() : string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function ikeqsmumgwwuqmkw() : ?string { return $this->root; } public function wmokamoeekequoqw(?string $couygeouymagssgw) : self { $this->root = $couygeouymagssgw; return $this; } public function wwawisckiqeueoua() : ?string { return $this->domain; } public function suyquyoaausqsuay(?string $mokawwccycoiqeka) : self { $this->domain = $mokawwccycoiqeka; return $this; } public function migcwoasskgioeog() : ?Container { return $this->initiator; } public function aiqioscoyukqgsgw() : ?string { return $this->shortname; } public function aqkmwawoaaigkoyq() : string { return "\100{$this->wwawisckiqeueoua()}"; } public function eeucessuemoysgqg() : string { return basename($this->ikeqsmumgwwuqmkw()); } public function aksiegmauqiaueis() : ?string { $couygeouymagssgw = $this->ikeqsmumgwwuqmkw(); $mkomwsiykqigmqca = "{$couygeouymagssgw}\x2f\166\x65\x6e\x64\157\x72"; if (!is_dir($mkomwsiykqigmqca)) { $mkomwsiykqigmqca = realpath("{$couygeouymagssgw}\57\56\56\57\x2e\56"); } return $mkomwsiykqigmqca; } public function eokmosoqmeiakwki(callable $ekiuyucoiagmscgy) : self { return $this->ukymogkaggogqgms(Constants::kueyauseicqqwesu, $ekiuyucoiagmscgy); } public function gwcqooogwwkcamag(callable $ekiuyucoiagmscgy) : self { return $this->ukymogkaggogqgms(Constants::yewqymwwigegyeuk, $ekiuyucoiagmscgy); } public function icgccomuogeeewue(callable $ekiuyucoiagmscgy) : self { return $this->ukymogkaggogqgms(Constants::ukwaycqmyyuekwqg, $ekiuyucoiagmscgy)->ukymogkaggogqgms(Constants::smcouciwkukmgoqm, $ekiuyucoiagmscgy); } public function iuggsiykyykmawog(callable $ekiuyucoiagmscgy) : self { return $this->ukymogkaggogqgms(Constants::yaeeqsosiaimuqma, $ekiuyucoiagmscgy)->ukymogkaggogqgms(Constants::DELETE, $ekiuyucoiagmscgy); } private function ukymogkaggogqgms(string $ymqmyyeuycgmigyo, callable $ekiuyucoiagmscgy) : self { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\160\x6d\x70\x72\x5f{$ymqmyyeuycgmigyo}\137\143\x6f\x6d\160\157\x6e\x65\x6e\164\137{$this->eeucessuemoysgqg()}", $ekiuyucoiagmscgy); return $this; } public function mggwieqomgcuskme() : ?Setting { $umqqgsiscygmeiem = null; $ocimuuewyeqmgeyu = $this->imkyoqyocosuqasu(Constants::sguyaymiiiiewame); if (empty($ocimuuewyeqmgeyu) && $this->eeucessuemoysgqg() === "\x77\160\55\143\155\156\x2d\143\x6f\x76\x65\162") { return $this->caokeucsksukesyo()->ogciwyoqgciosgcw()->uqsqkugwgmugquio(); } if ($ocimuuewyeqmgeyu) { $umqqgsiscygmeiem = $ocimuuewyeqmgeyu::symcgieuakksimmu(); } return $umqqgsiscygmeiem; } }
