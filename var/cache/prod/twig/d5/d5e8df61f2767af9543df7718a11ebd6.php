<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @JMSSerializer/icon.svg */
class __TwigTemplate_ac7055fa135fe2714c04ad26159b2d12 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>
<svg
   xmlns:svg=\"http://www.w3.org/2000/svg\"
   xmlns=\"http://www.w3.org/2000/svg\"
   version=\"1.1\"
   width=\"24\"
   height=\"24\"
   viewBox=\"0, 0, 24,24\">

  <path
     d=\"M 9.3713263,2.3034963 C 6.7762685,2.8497628 4.8856084,3.8790319 3.3192128,5.5983673 2.571159,6.3924989 2.5706798,6.3920588 2.1998526,6.9813847 1.4711444,8.0506595 0.5402177,10.405513 0.3661493,11.620181 c -0.047809,0.333363 -0.1455595,0.878876 -0.2173134,1.21224 -0.4383981,2.03687 0.132853,5.98711 1.1739989,8.118158 C 1.8117355,21.951285 1.9125189,22 3.4940794,22 c 1.8328319,0 1.8863074,-0.04863 1.887034,-1.71555 4.64e-4,-0.968053 0.063484,-1.347103 0.2881287,-1.731763 l 0.2875503,-0.492473 h 1.8182451 1.8182488 l 0.287547,0.492473 c 0.2284177,0.391254 0.2876987,0.763937 0.2881327,1.813061 C 10.169662,21.959315 10.212066,22 11.876054,22 c 1.605215,0 1.96213,-0.465273 2.212528,-2.88415 0.287323,-1.925214 1.055379,-3.338897 2.542454,-4.162007 1.034509,-0.379534 0.593898,-0.660976 -0.148948,-0.679686 -1.681463,-0.189371 -3.990668,-2.201 -4.746285,-3.53452 C 10.635742,8.4437281 10.777668,5.7839927 12.11681,3.5980186 13.096133,1.9995273 12.39217,1.6675999 9.3713333,2.3034963 m 5.5601717,0.4574681 c -4.763535,2.529863 -0.03314,11.1499266 4.380363,10.0547126 0.721061,-0.05197 1.084697,-0.374468 1.535994,-0.61544 0.433827,-0.213735 0.552608,-0.05054 0.26999,0.370795 -0.206138,0.3073 -1.424397,1.241336 -1.631842,1.251185 -0.550069,0.02606 -0.583737,0.412765 -0.09818,1.12587 0.273255,0.401327 0.469453,0.775833 0.436075,0.832203 -0.06631,0.112058 0.934265,-0.05273 2.347562,-0.386477 0.495286,-0.116983 1.056236,-0.212673 1.246484,-0.212673 0.816139,0 0.771882,-1.517499 -0.119436,-4.091318 C 22.90424,9.951225 22.154784,8.1236964 21.993556,7.9076899 21.408182,6.9620327 20.936732,5.9956067 20.240105,5.0931677 19.441564,4.0496539 19.442354,4.0503379 18.60224,3.3955715 17.296983,2.3674403 16.039178,2.1499971 14.9315,2.7609644 M 6.8317789,9.347226 v 4.924732 H 6.3964255 5.9610753 v -3.182136 c 0,-3.5020124 0.00308,-3.491558 -0.7342925,-2.428421 L 4.7101653,9.4061714 4.3285073,9.1447827 3.9468459,8.8833938 5.0786898,7.1114751 C 6.7365525,4.44082 6.747334,4.4343674 6.7825113,4.422495 c 0.027068,0 0.049276,2.216127 0.049276,4.924731 M 16.45923,7.0152508 c 0.916053,0.4358002 0.66986,1.9531494 -0.316792,1.9531494 -1.295824,0 -1.348938,-1.693502 -0.06625,-2.1117994 0.01621,-0.00533 0.188578,0.066056 0.383036,0.1586543 M 8.7183073,10.559472 c 0,3.536789 0.0227,3.622935 0.659338,2.503279 0.490498,-0.862739 0.461545,-0.848495 0.9183037,-0.451256 l 0.344219,0.299345 -1.1322067,1.779194 c -0.622697,0.978505 -1.335347,1.890681 -1.4806103,2.08949 -0.2570023,0.3517 -0.1797467,0.280443 -0.1797467,-4.532763 V 7.301572 h 0.4353502 0.4353538 v 3.2579 M 22.504449,15.93531 c -0.199538,0.06864 -0.591355,0.131993 -0.870706,0.140768 -1.968733,0.06182 -1.989482,0.727876 -0.03483,1.119127 2.114065,0.423148 2.414896,0.325867 2.329784,-0.753333 -0.04963,-0.629456 -0.549921,-0.807429 -1.424254,-0.506564 m -2.083302,1.897461 c -0.322234,0.336474 -0.300249,0.530509 0.06023,0.530509 0.515165,0.203163 0.511988,0.206527 0.67487,0.278891 0.142872,0.07569 0.529967,0.282529 0.860037,0.459742 0.735743,0.394813 0.70193,0.395116 1.062982,-0.0097 0.587,-0.657946 0.251055,-1.094049 -0.956903,-1.242243 -0.461617,-0.05668 -0.979539,-0.139787 -1.150997,-0.184718 -0.185241,-0.04857 -0.408507,0.01933 -0.550212,0.167363 m -0.749602,1.293464 c -0.114629,0.193655 0.914745,1.630616 1.24692,1.740703 0.264766,0.08772 0.991948,-0.153207 1.028228,-0.340564 0.07146,-0.369201 0.0884,-0.868504 -0.0082,-0.912137 -0.04789,0.01294 -0.405531,-0.126835 -0.794808,-0.310636 -0.763171,-0.360341 -1.323904,-0.427921 -1.472142,-0.177373 m -1.339214,0.757044 c -0.275287,0.115535 -0.32615,0.250708 -0.324264,0.861755 0.0033,1.043058 0.116241,1.164586 0.961256,1.033208 1.197872,-0.186229 1.373462,-0.616877 0.617765,-1.515528 -0.462344,-0.549905 -0.686839,-0.61779 -1.254757,-0.379435\"
     stroke=\"none\"
     fill=\"#aaaaaa\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@JMSSerializer/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@JMSSerializer/icon.svg", "/Users/daoquyet/backend_android/vendor/jms/serializer-bundle/Resources/views/icon.svg");
    }
}
