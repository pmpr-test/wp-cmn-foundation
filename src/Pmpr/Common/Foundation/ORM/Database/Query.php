<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d17086e3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Pmpr\Common\Foundation\ORM\Database\Statement\Statement; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class Query { use ModelTrait, ArgsTrait; protected array $statements = []; public function mmiqqgoaeccgwoqs(Statement $qaiwucaaikseawuw) : self { $this->statements[] = $qaiwucaaikseawuw; return $this; } public function kaaeuwaawscoeuqq(array $ssukygsemqwswumi) : self { foreach ($ssukygsemqwswumi as $qaiwucaaikseawuw) { if ($qaiwucaaikseawuw instanceof Statement) { $this->mmiqqgoaeccgwoqs($qaiwucaaikseawuw); } else { wp_die('it\'s not a valid statement'); } } return $this; } public function coyomkiuoyomeugi() : array { return $this->statements; } public function aigweamkyiceyyug() : self { $this->igiywquyccyiaucw(Constants::uwkgmaicmwigeeee, true); return $this; } public function yockscoguugkeumq($qgoqiacsiccwoawi) : self { return $this->igiywquyccyiaucw(Constants::kcweakweogywcmoq, $qgoqiacsiccwoawi); } public function wsacuksekeaemucu(int $uuyoeicyoayimaoa) : self { return $this->igiywquyccyiaucw(Constants::cgiswgcumueqgcmw, $uuyoeicyoayimaoa); } public function wwqkosakoaimaoue(string $lsiuueucokouommm = '') : self { return $this->igiywquyccyiaucw(Constants::wwywmwwigoiyqimg, $lsiuueucokouommm); } public function qisiksoemmiiyeyk($qgoqiacsiccwoawi = '') : self { return $this->igiywquyccyiaucw(Constants::SELECT, $qgoqiacsiccwoawi); } public function sgauksuokoaygayk($wkkweuacukumqmya, bool $sgiywwewawiewkam = false) : self { if ($sgiywwewawiewkam) { $gkioossaaiumqqsq = $this->mgogaykgkoogasim()->iekyeyicoyyawomk(); if (is_string($wkkweuacukumqmya)) { $wkkweuacukumqmya = $gkioossaaiumqqsq->iuymqyggkakwiyog($wkkweuacukumqmya); } else { if (is_array($wkkweuacukumqmya)) { foreach ($wkkweuacukumqmya as $momcykaoccoymeig => $qgoqiacsiccwoawi) { $wkkweuacukumqmya[$momcykaoccoymeig] = $gkioossaaiumqqsq->iuymqyggkakwiyog($qgoqiacsiccwoawi); } } } } return $this->igiywquyccyiaucw(Constants::yqwcogcwsuecwscy, $wkkweuacukumqmya); } public function evaluate(Model $meywaqqsugaoeyys, $siykeiywomwwuoiw) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); foreach ($this->coyomkiuoyomeugi() as $qaiwucaaikseawuw) { if ($qaiwucaaikseawuw->mgogaykgkoogasim() === null) { $qaiwucaaikseawuw->asumqyigwsqmyeoc($meywaqqsugaoeyys); } $siykeiywomwwuoiw = $qaiwucaaikseawuw->evaluate($siykeiywomwwuoiw); } if ($this->imkyoqyocosuqasu(Constants::uwkgmaicmwigeeee)) { $siykeiywomwwuoiw->distinct(); } if ($uuyoeicyoayimaoa = $this->imkyoqyocosuqasu(Constants::cgiswgcumueqgcmw, 0)) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->limit($uuyoeicyoayimaoa); } if ($ewukwikemcawscwe = $this->imkyoqyocosuqasu(Constants::kcweakweogywcmoq)) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->groupBy($ewukwikemcawscwe); } if ($this->wuyimwscukmqqsqk(Constants::wwywmwwigoiyqimg)) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->inRandomOrder($this->imkyoqyocosuqasu(Constants::wwywmwwigoiyqimg, '')); } if ($qgoqiacsiccwoawi = $this->imkyoqyocosuqasu(Constants::SELECT)) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->select($qgoqiacsiccwoawi); } if ($wkkweuacukumqmya = $this->imkyoqyocosuqasu(Constants::yqwcogcwsuecwscy)) { $siykeiywomwwuoiw = $siykeiywomwwuoiw->addSelect($wkkweuacukumqmya); } return $siykeiywomwwuoiw; } }
