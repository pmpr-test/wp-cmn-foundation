<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68de68f6184a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }
