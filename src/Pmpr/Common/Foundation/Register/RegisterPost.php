<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d83a968b15             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Register; class RegisterPost extends Register { protected ?array $supports = []; protected bool $canExport = true; protected ?array $taxonomies = []; protected ?string $menuIcon = null; protected ?bool $mapMetaCap = null; protected bool $hasArchive = false; protected $registerMetaBoxCb = null; protected ?int $menuPosition = 0; protected ?string $mainTaxonomy = ''; protected ?bool $showInAdminBar = null; protected ?bool $deleteWithUser = null; protected $capabilityType = "\x70\x6f\x73\164"; protected ?bool $excludeFromSearch = null; protected string $_editLink = "\x70\x6f\x73\164\x2e\x70\150\x70\77\x70\157\163\x74\75\x25\x64"; public function zmqimouwawekqymc($ioqywyyeioqywogw = true) : self { $this->esgmeqiuqsaomgmw($ioqywyyeioqywogw); return parent::zmqimouwawekqymc($ioqywyyeioqywogw); } public function sqmeiugqckukykos(bool $cysoimgmicegeqyu) : self { $this->showInAdminBar = $cysoimgmicegeqyu; $this->soeowumgcwuiaica(true); return $this; } public function usawymkcmeicimyy(?bool $oaekgiowwoqkecwg) : self { $this->excludeFromSearch = $oaekgiowwoqkecwg; return $this; } public function qyyikeaseoskcacm() : ?string { return $this->menuIcon; } public function yioesawwewqaigow(?string $uuisoqqiumgmmkeg) : self { $this->menuIcon = $uuisoqqiumgmmkeg; return $this; } public function ckaeqgiaiqwsccke(int $ukekeygkycawmkyc) : self { $this->menuPosition = $ukekeygkycawmkyc; $this->soeowumgcwuiaica(true); return $this; } public function keyusaamwmwewmqi() : ?int { return $this->menuPosition; } public function cwueseysoqeewkao() : ?string { return $this->capabilityType; } public function hsgasemokseccoao($eoaqkowmmukgimgw) : self { $this->capabilityType = $eoaqkowmmukgimgw; return $this; } public function kwksqwkmuuoakaqg(bool $kkkcueiayauaeqmy) : self { $this->mapMetaCap = $kkkcueiayauaeqmy; return $this; } public function aoaiwceqgsckygsg() : array { return $this->supports; } public function wakugsseussemkka(array $ckgaeiyesoqoemic) : self { foreach ($ckgaeiyesoqoemic as $kyiucqqkqiwkoksc) { $this->musuokisgmmamoua($kyiucqqkqiwkoksc); } return $this; } public function musuokisgmmamoua(string $kyiucqqkqiwkoksc) : self { $this->supports[] = $kyiucqqkqiwkoksc; return $this; } public function gcuqugwgqcuyqses(string $kyiucqqkqiwkoksc) : self { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->gyciysooayoqiisg($this->supports, $kyiucqqkqiwkoksc); return $this; } public function yaiqmmqwucikagko(callable $ogkmiyymscemkimk) : self { $this->registerMetaBoxCb = $ogkmiyymscemkimk; return $this; } public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self { $this->taxonomies[] = $kesssewsiegssiya; return $this; } public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self { foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->acqyqaaeeogkosoq($kesssewsiegssiya); } return $this; } public function esgmeqiuqsaomgmw(bool $auiemgkycsemicim) : self { $this->hasArchive = $auiemgkycsemicim; return $this; } public function swgooqsswqymimkw(bool $qcaaaeuoacoiweqq) : self { $this->canExport = $qcaaaeuoacoiweqq; return $this; } public function eugmaekicaygmcyi(bool $eawksymqiosoiuce) : self { $this->deleteWithUser = $eawksymqiosoiuce; return $this; } public function agywwgmoyucciqyu(string $edit_link) : self { $this->_editLink = $edit_link; return $this; } public function kyoawugmkeiysiyu() : ?string { return $this->mainTaxonomy; } public function ioguemyoyecgggsq(?string $ucgkgasuuyeayqie) : self { $this->mainTaxonomy = $ucgkgasuuyeayqie; return $this; } }
