<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c19cd8e5f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\_ORM\Database\Statement\Statement; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class Query { use ArgsTrait; protected array $statements; public function mmiqqgoaeccgwoqs(Statement $qaiwucaaikseawuw) : self { $this->statements[] = $qaiwucaaikseawuw; return $this; } public function coyomkiuoyomeugi() : array { return $this->statements; } public function aigweamkyiceyyug() : self { $this->igiywquyccyiaucw(Constants::uwkgmaicmwigeeee, true); return $this; } public function yockscoguugkeumq($qgoqiacsiccwoawi) : self { return $this->igiywquyccyiaucw(Constants::kcweakweogywcmoq, $qgoqiacsiccwoawi); } public function wsacuksekeaemucu(int $uuyoeicyoayimaoa) : self { return $this->igiywquyccyiaucw(Constants::cgiswgcumueqgcmw, $uuyoeicyoayimaoa); } public function wwqkosakoaimaoue(string $lsiuueucokouommm = '') : self { return $this->igiywquyccyiaucw(Constants::wwywmwwigoiyqimg, $lsiuueucokouommm); } public function qisiksoemmiiyeyk(string $qgoqiacsiccwoawi = '') : self { return $this->igiywquyccyiaucw(Constants::SELECT, $qgoqiacsiccwoawi); } public function sgauksuokoaygayk($wkkweuacukumqmya = '') : self { return $this->igiywquyccyiaucw(Constants::yqwcogcwsuecwscy, $wkkweuacukumqmya); } public function evaluate(Model $meywaqqsugaoeyys, Builder $siykeiywomwwuoiw) { foreach ($this->coyomkiuoyomeugi() as $qaiwucaaikseawuw) { if (!($qaiwucaaikseawuw->mgogaykgkoogasim() === null)) { goto qayiqaykkywcyisq; } $qaiwucaaikseawuw->asumqyigwsqmyeoc($meywaqqsugaoeyys); qayiqaykkywcyisq: $siykeiywomwwuoiw = $qaiwucaaikseawuw->evaluate($siykeiywomwwuoiw); aymoguycgmuggcik: } aqeyqwuywqcmuoce: if (!$this->imkyoqyocosuqasu(Constants::uwkgmaicmwigeeee)) { goto akoweomooyuwamow; } $siykeiywomwwuoiw->distinct(); akoweomooyuwamow: if (!($uuyoeicyoayimaoa = $this->imkyoqyocosuqasu(Constants::cgiswgcumueqgcmw, 0))) { goto oaociaioauummsey; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->limit($uuyoeicyoayimaoa); oaociaioauummsey: if (!($ewukwikemcawscwe = $this->imkyoqyocosuqasu(Constants::kcweakweogywcmoq))) { goto cueuscqkicwwicei; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->groupBy($ewukwikemcawscwe); cueuscqkicwwicei: if (!$this->wuyimwscukmqqsqk(Constants::wwywmwwigoiyqimg)) { goto gcecamucuogcciig; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->inRandomOrder($this->imkyoqyocosuqasu(Constants::wwywmwwigoiyqimg, '')); gcecamucuogcciig: if (!($qgoqiacsiccwoawi = $this->imkyoqyocosuqasu(Constants::SELECT))) { goto suscosoukqeyyqgs; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->select($qgoqiacsiccwoawi); suscosoukqeyyqgs: if (!($wkkweuacukumqmya = $this->imkyoqyocosuqasu(Constants::yqwcogcwsuecwscy))) { goto kiewcwsykccgocuc; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->addSelect($wkkweuacukumqmya); kiewcwsykccgocuc: return $siykeiywomwwuoiw; } }
