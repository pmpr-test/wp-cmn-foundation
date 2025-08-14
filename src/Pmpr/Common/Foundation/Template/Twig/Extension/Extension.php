<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             689e5f3b0a1df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }
