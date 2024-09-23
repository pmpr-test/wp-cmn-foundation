<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; class Schema { use HelperTrait, WrapperTrait, ToArrayTrait; protected bool $key = false; protected array $config = []; protected ?int $length = null; protected ?string $id = null; protected int $priority = 0; protected $showUI = true; protected array $options = []; protected bool $unique = false; protected ?string $type = null; protected bool $binary = false; protected ?string $title = null; protected ?string $format = null; protected ?string $domain = null; protected bool $nullable = true; protected bool $unsigned = false; protected bool $zerofill = false; protected ?string $charset = null; protected ?string $collect = null; protected bool $useForLog = false; protected ?string $default = null; protected ?string $decimals = null; protected bool $primaryKey = false; protected ?string $originType = null; protected bool $autoIncrement = false; protected string $model = ''; protected string $prevKey = ''; public function __construct(string $sqeykgyoooqysmca = null, string $aokagokqyuysuksm = null, ?string $meqocwsecsywiiqs = null) { $this->id = $aokagokqyuysuksm; $this->type = $sqeykgyoooqysmca; $this->title = $meqocwsecsywiiqs; if ($this->gwumsacwqiukkyie()) { goto qmqsgkwueccwgsqa; } $this->originType = $sqeykgyoooqysmca; qmqsgkwueccwgsqa: } public function iiesowcaqmgkkmec() : string { return $this->prevKey; } public function mqusaoqyqggekmyk(string $ywkegsowmmkswkqw) : self { $this->prevKey = $ywkegsowmmkswkqw; return $this; } public function asumqyigwsqmyeoc(string $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function mgogaykgkoogasim() : string { return $this->model; } public function ieswsgygcawakkyo() : self { $this->useForLog = true; return $this; } public function umcwswocgeismgmo() : bool { return $this->useForLog; } public function aceaeommyuooiqge() : array { return $this->config; } public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->config[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function megwuoouecmkuaqm(array $oyuikeusicgqgwak = []) : self { foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie); qsgagomkgqcmscyu: } iiceuymgyemuaciy: return $this; } public function qkasssoaikwegkyg() : bool { return $this->key; } public function uwaascqoguwkwiaw() : ?bool { return false; } public function aaikegqyiyeoygce(callable $ekiuyucoiagmscgy) : self { $this->showUI = $ekiuyucoiagmscgy; return $this; } public function gksokmqegsecssgq(string $ccamueccusigaaio, $mksyucucyswaukig = null) : bool { $ciooooeuokmogsaq = $this->showUI; if (is_callable($ciooooeuokmogsaq)) { goto usiqksiiiqgokuaq; } if (!($ccamueccusigaaio !== Constants::weiosaewqequuyuq)) { goto eaisogogsygugsqi; } $ciooooeuokmogsaq = true; eaisogogsygugsqi: goto omaswaiucwamaywi; usiqksiiiqgokuaq: $ciooooeuokmogsaq = (bool) $ciooooeuokmogsaq($ccamueccusigaaio, $mksyucucyswaukig); omaswaiucwamaywi: return $ciooooeuokmogsaq; } public function eiuqywygcwawksug(bool $ciooooeuokmogsaq) : self { $this->showUI = $ciooooeuokmogsaq; return $this; } public function acokiqqgsmoqaeyu() : self { return $this->eiuqywygcwawksug(false); } public function gcgmwakaoecqcuwo(bool $uusmaiomayssaecw) : self { $this->key = $uusmaiomayssaecw; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function gwumsacwqiukkyie() : ?string { return $this->originType; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function oiswysuiioecsaae() : ?string { return $this->default; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $this->default = $ggauoeuaesiymgee; return $this; } public function sqoceewuaeaiqmco(bool $umkuayeugioqkaac) : self { $this->unsigned = $umkuayeugioqkaac; return $this; } public function ogymmssscoqeuyye() : self { return $this->sqoceewuaeaiqmco(true); } public function qumigiaaeieaemgy() : ?bool { return $this->unsigned; } public function migckeygiiaeogou(bool $emsmukwmouqwsywo) : self { $this->zerofill = $emsmukwmouqwsywo; return $this; } public function easacyeoquiwamwq() : ?bool { return $this->zerofill; } public function siamswkmsqckqgeu() : ?string { return $this->decimals; } public function imyyyeaaismecmwg(?string $yeiuyssiamkeoiwm) : self { $this->decimals = $yeiuyssiamkeoiwm; return $this; } public function gyecsegqciqykomu() : ?string { return $this->format; } public function kqycymyaykoacywo(?string $saqmwwmqiwmkiwaa) : self { $this->format = $saqmwwmqiwmkiwaa; return $this; } public function qamkswcgsoeggmau() : ?int { return $this->length; } public function acceqyqygswoecwe(int $ykiwomimkkuiigoq) : self { $this->length = $ykiwomimkkuiigoq; return $this; } public function yseywyqacmugimme() : ?bool { return $this->nullable; } public function qkwyekmiceaogwci(bool $iisoauwukouugkec) : self { $this->nullable = $iisoauwukouugkec; return $this; } public function qcssowoqeqysosca() : self { return $this->qkwyekmiceaogwci(true); } public function aguakyuusmksagai() : self { return $this->qkwyekmiceaogwci(false); } public function eccqsggkcosmqumc() : self { return $this->saquckwoqqowmqoo(true); } public function iqekkemuyuqokwqs() : ?bool { return $this->primaryKey; } public function yusomaossiaeqoiu(bool $ceiwsaacewygcsqg) : self { $this->primaryKey = $ceiwsaacewygcsqg; return $this; } public function oikqausqaykqkmqi() : ?bool { return $this->autoIncrement; } public function mowcagqccyeiekqe(bool $wcciqoyscugmucms = true) : self { $this->autoIncrement = $wcciqoyscugmucms; return $this; } public function pkkeieykmguakeuw() : ?bool { return $this->binary; } public function ysmcmaosamoowgsu(bool $oycsmgwakcoowkyq) : self { $this->binary = $oycsmgwakcoowkyq; return $this; } public function myacgeeekqcmemge() : bool { return !empty($this->gkwkqmwweiawigae()); } public function gkwkqmwweiawigae(string $aqykuigiuwmmcieu = Constants::kgmecoswscqqsymg) : ?array { $ksaameoqigiaoigg = []; $qiouiwasaauyaaue = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()}\137{$this->mwikyscisascoeea()}\x5f\x6f\x70\164\x69\157\x6e\163", $this->options); if (Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu) { goto mgiykamgwsemmiio; } $ksaameoqigiaoigg = $qiouiwasaauyaaue; goto iwkyewqeogaamiou; mgiykamgwsemmiio: foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { $ksaameoqigiaoigg[$omkysikckkcieckq[Constants::NAME]] = $omkysikckkcieckq[Constants::qescuiwgsyuikume]; ouokmaemueykkiqq: } ieewmicwgqaigeqi: iwkyewqeogaamiou: return $ksaameoqigiaoigg; } public function giiuwsmyumqwwiyq($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->gkwkqmwweiawigae(), $uusmaiomayssaecw); } public function kesomeowemmyygey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->options[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function acauweqyyugwisqc($qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); uaaiuqickwysiqiy: } yqqwweuisgoskcwa: return $this; } public function ogmguwgoqkqkkisa() : ?string { return $this->charset; } public function womiayakiieiaiso(?string $guuwoyaeoeeaauug) : self { $this->charset = $guuwoyaeoeeaauug; return $this; } public function yuwwmewqqauckiky() : ?string { return $this->collect; } public function waaisgakayeuywsw(?string $kokmwkcqkgkewiuw) : self { $this->collect = $kokmwkcqkgkewiuw; return $this; } public function kweqqkiwiugikyam() : ?bool { return $this->unique; } public function saquckwoqqowmqoo(bool $omasqoksqewuwwkq) : self { $this->unique = $omasqoksqewuwwkq; return $this; } public function umkwmemkiowegeuq() : void { } }
