<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\Database\Query; class Union extends Statement { protected function run($siykeiywomwwuoiw) { if (!$this->muyycecygiagkouk()) { goto cskqgasmygooeiki; } $swwmymiaiosiyqis = null; foreach ($this->mmoaikqueyiwcesm() as $wcgsoqmmciswkmiq) { if (!$wcgsoqmmciswkmiq instanceof Query) { goto osiyyuaaukmsugso; } $siykeiywomwwuoiw = $wcgsoqmmciswkmiq->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($wcgsoqmmciswkmiq); if (!$swwmymiaiosiyqis) { goto qkmimisossgioguq; } $siykeiywomwwuoiw->union($swwmymiaiosiyqis); qkmimisossgioguq: $swwmymiaiosiyqis = $siykeiywomwwuoiw; osiyyuaaukmsugso: wiawkskyaqysiqsq: } kyieaymowioesowa: cskqgasmygooeiki: return $siykeiywomwwuoiw; } }
