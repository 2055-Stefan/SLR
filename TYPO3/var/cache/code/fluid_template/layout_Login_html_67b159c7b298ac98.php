<?php
class layout_Login_html_67b159c7b298ac98 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'backend' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'identifier' => 'bootstrap',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'identifier' => '@typo3/backend/login.js',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4)]);

$output0 .= '

<div class="typo3-login">
    <div class="typo3-login-inner">
        <div class="typo3-login-container">
            <div class="typo3-login-wrap">
                <div class="card card-login">
                    <header class="card-heading">
                        <h1 class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.header',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output0 .= '</h1>
                        <div class="typo3-login-logo">';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LoginLogoViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\LoginLogoViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output0 .= '</div>
                    </header>
                    <main class="card-body">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array88 = [
'0' => $renderingContext->getVariableProvider()->getByPath('action'),
'1' => ' == \'login\'',
];

$expression89 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'login');};

$arguments90 = [
'__then' => function() use ($renderingContext) {
$output9 = '';

$output9 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('hasLoginError'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments17 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output12 = '';

$output12 .= '
                                    <div class="t3js-login-error mb-2" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <div class="alert-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.message',
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14)]);

$output12 .= '</div>
                                            <div class="alert-message">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.description',
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16)]);

$output12 .= '</div>
                                        </div>
                                    </div>
                                ';
return $output12;
},
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments17, $renderingContext)
;

$output9 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.javascript',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_ERROR',
];

$arguments18 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21)]),
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments22, $renderingContext, $renderChildrenClosure23),
];
$renderChildrenClosure19 = ($arguments18['message'] !== null) ? function() use ($arguments18) { return $arguments18['message']; } : $renderChildrenClosure19;
$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19);

$output9 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.cookies',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_ERROR',
];

$arguments24 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27)]),
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29),
];
$renderChildrenClosure25 = ($arguments24['message'] !== null) ? function() use ($arguments24) { return $arguments24['message']; } : $renderChildrenClosure25;
$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25);

$output9 .= '
                                </div>
                                <div class="hidden t3js-login-error-noreferrer">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.referrer',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_ERROR',
];

$arguments30 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33)]),
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35),
];
$renderChildrenClosure31 = ($arguments30['message'] !== null) ? function() use ($arguments30) { return $arguments30['message']; } : $renderChildrenClosure31;
$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31);

$output9 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl')]);

$output9 .= '" method="post" name="loginform" id="typo3-login-form" spellcheck="false">
                                        <input type="hidden" name="login_status" value="login" />
                                        <input type="hidden" name="userident" id="t3-field-userident" class="t3js-login-userident-field" value="" />
                                        <input type="hidden" name="loginRefresh" value="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginRefresh')]);

$output9 .= '" />
                                        <input type="hidden" name="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('requestTokenName')]);

$output9 .= '" value="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('requestTokenValue')]);

$output9 .= '" />

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'loginFormFields',
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments36, $renderingContext, $renderChildrenClosure37);

$output9 .= '

                                        <div class="form-group d-grid mb-2" id="t3-login-submit-section">
                                            <button
                                                class="btn btn-login d-block t3js-login-submit"
                                                id="t3-login-submit"
                                                type="submit"
                                                name="commandLI"
                                                data-loading-text="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'spinner-circle',
'size' => 'small',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments41, $renderingContext, $renderChildrenClosure42);
};

$arguments38 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value40 = ($arguments38['value'] !== null ? $arguments38['value'] : $renderChildrenClosure39());

$output9 .= !is_string($value40) && !(is_object($value40) && method_exists($value40, '__toString')) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments38['encoding'], $arguments38['doubleEncode']);

$output9 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.process',
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44)]);

$output9 .= '"
                                                autocomplete="off"
                                            >
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.submit',
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46)]);

$output9 .= '
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array47 = [
'0' => $renderingContext->getVariableProvider()->getByPath('enablePasswordReset'),
];

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments54 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression48(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$array52 = [
'0' => 'true',
];

$expression53 = function($context) {return TRUE;};

$arguments50 = [
'partial' => NULL,
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'ResetPassword',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
];

$output49 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments50, $renderingContext, $renderChildrenClosure51);

$output49 .= '
                                ';
return $output49;
},
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments54, $renderingContext)
;

$output9 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('loginProviders');
};

$arguments56 = [
'subject' => NULL,
];
$renderChildrenClosure57 = ($arguments56['subject'] !== null) ? function() use ($arguments56) { return $arguments56['subject']; } : $renderChildrenClosure57;
$array55 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments56, $renderingContext, $renderChildrenClosure57),
'1' => ' > 1',
];

$expression58 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments77 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression58(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output59 = '';

$output59 .= '
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$arguments60 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.navigation.loginProvider',
];

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments60, $renderingContext, $renderChildrenClosure61)]);

$output59 .= '">
                                        ';

$output59 .= '';

$output59 .= '';

$output59 .= '';

$output59 .= '
                                        <ul class="list-unstyled typo3-login-links" role="list">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
$output64 = '';

$output64 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array65 = [
'0' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
];

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments76 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression66(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output67 = '';

$output67 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array68 = [
'0' => $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier'),
'1' => ' != ',
'2' => $renderingContext->getVariableProvider()->getByPath('providerKey'),
];

$expression69 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments75 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression69(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output70 = '';

$output70 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey')]);

$output70 .= '">
                                                            <a href="?loginProvider=';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey')]);

$output70 .= '">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$arguments71 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier'),
'size' => 'small',
];

$output70 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments71, $renderingContext, $renderChildrenClosure72);

$output70 .= '
                                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};

$arguments73 = [
'id' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
'default' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
];

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments73, $renderingContext, $renderChildrenClosure74)]);

$output70 .= '</span>
                                                            </a>
                                                        </li>
                                                    ';
return $output70;
},
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments75, $renderingContext)
;

$output67 .= '
                                                ';
return $output67;
},
];

$output64 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments76, $renderingContext)
;

$output64 .= '
                                            ';
return $output64;
};

$arguments62 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('loginProviders'),
'as' => 'provider',
'key' => 'providerKey',
];

$output59 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments62, $renderingContext, $renderChildrenClosure63);

$output59 .= '
                                        </ul>
                                    </nav>
                                ';
return $output59;
},
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments77, $renderingContext)
;

$output9 .= '
                            ';
return $output9;
},
'__elseIf' => [
'0' => [
'condition' => function() use ($renderingContext) {

$array78 = [
'0' => $renderingContext->getVariableProvider()->getByPath('enablePasswordReset'),
];

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression79(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output80 = '';

$output80 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};

$arguments81 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'ResetPassword',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output80 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments81, $renderingContext, $renderChildrenClosure82);

$output80 .= '
                            ';
return $output80;
},
],
],
'__else' => function() use ($renderingContext) {
$output83 = '';

$output83 .= '
                                <form action="';

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl')]);

$output83 .= '" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
return NULL;
};

$arguments84 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.username',
];

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments84, $renderingContext, $renderChildrenClosure85)]);

$output83 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username')]);

$output83 .= '
                                                </div>
                                            </div>
                                            <input type="hidden" name="p_field" value="" />
                                            <div class="d-grid">
                                                <input
                                                    class="btn d-block btn-lg"
                                                    type="submit"
                                                    name="commandLO"
                                                    value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return NULL;
};

$arguments86 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.submit',
];

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments86, $renderingContext, $renderChildrenClosure87)]);

$output83 .= '"
                                                    id="t3-login-submit"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            ';
return $output83;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression89(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments90, $renderingContext)
;

$output0 .= '
                    </main>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};

$arguments91 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Login/LoginNews',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments91, $renderingContext, $renderChildrenClosure92);

$output0 .= '
                    <footer class="card-footer">
                        <div class="typo3-login-copyright-wrap">
                            <button
                                type="button"
                                class="typo3-login-copyright-link t3js-login-copyright-link collapsed"
                                data-bs-target="#loginCopyright"
                                data-bs-toggle="collapse"
                                aria-expanded="false"
                                aria-controls="loginCopyright"
                            >
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};

$arguments93 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.copyrightLink',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments93, $renderingContext, $renderChildrenClosure94)]);

$output0 .= '</span>
                                ';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
                                <svg viewBox="0 0 150 42" width="70" height="20" aria-hidden="true">
                                    <path fill="currentColor" d="M60.2,14.4v27h-3.8v-27h-6.7v-3.3h17.1v3.3H60.2z M80.4,27.3v14h-3.9v-14l-7.7-16.2h4.1l5.7,12.2l5.7-12.2h3.9L80.4,27.3z   M99.9,29.9h-3.6v11.4h-3.8V11.1c0,0,3.7-0.3,7.3-0.3c6.6,0,8.5,4.1,8.5,9.4C108.3,26.7,106,29.9,99.9,29.9 M100.3,13.9  c-2.4,0-4.1,0.3-4.1,0.3v12.6h4.1c2.4,0,4.1-1.6,4.1-6.3C104.4,16.1,103.4,13.9,100.3,13.9 M121.8,41.6c-7.1,0-9-5.2-9-15.8  c0-10.2,1.9-15.1,9-15.1s9,4.9,9,15.1C130.9,36.4,129,41.6,121.8,41.6 M121.8,13.9c-3.9,0-5.2,2.6-5.2,12.1c0,9.3,1.3,12.4,5.2,12.4  c3.9,0,5.2-3.1,5.2-12.4C127,16.6,125.7,13.9,121.8,13.9 M141.7,41.6c-2.1,0-5.3-0.6-5.7-0.7v-3.1c1,0.2,3.7,0.7,5.6,0.7  c2.2,0,3.6-1.9,3.6-5.2c0-3.9-0.6-6-3.7-6H138V24h3.1c3.5,0,3.7-3.6,3.7-5.3c0-3.4-1.1-4.8-3.2-4.8c-1.9,0-4.1,0.5-5.3,0.7v-3.2  c0.5-0.1,3-0.7,5.2-0.7c4.4,0,7,1.9,7,8.3c0,2.9-1,5.5-3.3,6.3c2.6,0.2,3.8,3.1,3.8,7.3C149,39.2,146.5,41.6,141.7,41.6"></path>
                                    <path class="highlight" fill="#FF8700" d="M31.7,28.8c-0.6,0.2-1.1,0.2-1.7,0.2c-5.2,0-12.9-18.2-12.9-24.3c0-2.2,0.5-3,1.3-3.6  C12,1.9,4.3,4.2,1.9,7.2C1.3,8,1,9.1,1,10.6c0,9.5,10.1,31,17.3,31C21.6,41.6,27.1,36.2,31.7,28.8"></path>
                                    <path class="highlight" fill="#FF8700" d="M28.4,0.5c6.6,0,13.2,1.1,13.2,4.8c0,7.6-4.8,16.7-7.2,16.7C30,22,24.5,9.9,24.5,3.8  C24.5,1,25.6,0.5,28.4,0.5"></path>
                                </svg>
                            </button>
                            <div id="loginCopyright" class="collapse">
                                <div class="typo3-login-copyright-text">
                                    <p>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('copyright');
};

$arguments95 = [
'value' => NULL,
];

$output0 .= isset($arguments95['value']) ? $arguments95['value'] : $renderChildrenClosure96();

$output0 .= '
                                    </p>
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.navigation.typo3',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments97, $renderingContext, $renderChildrenClosure98)]);

$output0 .= '">
                                        ';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
                                        <ul class="list-unstyled" role="list">
                                            <li><a href="https://typo3.org" target="_blank" rel="noreferrer" class="t3-login-link-typo3">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};

$arguments99 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-window-open',
'size' => 'small',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments99, $renderingContext, $renderChildrenClosure100);

$output0 .= ' TYPO3.org</a></li>
                                            <li>
                                                <a href="https://typo3.org/donate/online-donation/" target="_blank" rel="noreferrer" class="t3-login-link-donate">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};

$arguments101 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-window-open',
'size' => 'small',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments101, $renderingContext, $renderChildrenClosure102);

$output0 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$arguments103 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.donate',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments103, $renderingContext, $renderChildrenClosure104)]);

$output0 .= '
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array105 = [
'0' => $renderingContext->getVariableProvider()->getByPath('loginFootnote'),
];

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments110 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression106(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output107 = '';

$output107 .= '
            <aside class="typo3-login-footnote" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return NULL;
};

$arguments108 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.region.footnote',
];

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments108, $renderingContext, $renderChildrenClosure109)]);

$output107 .= '">
                <p>';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginFootnote')]);

$output107 .= '</p>
            </aside>
        ';
return $output107;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments110, $renderingContext)
;

$output0 .= '
    </div>
    ';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
    <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginUrl')]);

$output0 .= '" id="t3js-login-url" data-referrer-check-enabled="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array111 = [
'0' => $renderingContext->getVariableProvider()->getByPath('referrerCheckEnabled'),
];

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments113 = [
'__then' => function() use ($renderingContext) {

return 1;
},
'__else' => function() use ($renderingContext) {

return 0;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression112(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments113, $renderingContext)
;

$output0 .= '" aria-hidden="true" tabindex="-1"></a>
</div>


';

    return $output0;
}

}

#