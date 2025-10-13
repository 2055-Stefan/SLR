<?php
class partial_Backend_Topbar_996f59c59dc0ae9b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * section ToggleButton
 */
public function section_66660c065b7158e0(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array3 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('enabled'),
];

$expression4 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments5 = [
'__then' => function () { return 1;},
'__else' => function () { return 0;},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)),
    $renderingContext
),
];

$arguments1 = [
'name' => 'disabled',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments5, $renderingContext)
,
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('disabled'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'__then' => function() use ($renderingContext) {

return 'disabled';
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
];

$arguments6 = [
'name' => 'disabledAttr',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments10, $renderingContext)
,
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output0 .= '

    <button ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disabledAttr')]);

$output0 .= ' class="topbar-button ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classes')]);

$output0 .= '" title="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title')]);

$output0 .= '" aria-label="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title')]);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('icon'),
'disabled' => $renderingContext->getVariableProvider()->getByPath('disabled'),
];

$arguments11 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Icon',
'arguments' => $array13,
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output0 .= '
    </button>
';

    return $output0;
}
/**
 * section Icon
 */
public function section_9bb494f64715d1fe(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output14 = '';

$output14 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('disabled'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments19 = [
'__then' => function() use ($renderingContext) {

return 'overlay-readonly';
},
'__else' => function() use ($renderingContext) {

return null;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
];

$arguments15 = [
'name' => 'overlay',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments19, $renderingContext)
,
];
$renderChildrenClosure16 = ($arguments15['value'] !== null) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16;
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16)]);

$output14 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'size' => 'small',
'state' => 'default',
'title' => NULL,
'identifier' => $renderingContext->getVariableProvider()->getByPath('identifier'),
'alternativeMarkupIdentifier' => 'inline',
'overlay' => $renderingContext->getVariableProvider()->getByPath('overlay'),
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21);

$output14 .= '
';

    return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output22 = '';

$output22 .= '

<div class="scaffold-topbar t3js-scaffold-topbar" data-topbar-identifier="topbar">
    <div class="topbar t3js-topbar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
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
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.minMaxModuleMenu',
];

$array25 = [
'icon' => 'actions-menu',
'enabled' => $renderingContext->getVariableProvider()->getByPath('hasModules'),
'classes' => 'topbar-button-modulemenu t3js-topbar-button-modulemenu',
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27),
];

$arguments23 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'ToggleButton',
'arguments' => $array25,
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24);

$output22 .= '
        <div class="topbar-site-container">
            <a class="topbar-site" href="./" target="_top" title="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteName')]);

$output22 .= ' - ';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('applicationVersion')]);

$output22 .= '">
                <span class="topbar-site-logo">
                    <img src="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoUrl')]);

$output22 .= '" width="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoWidth')]);

$output22 .= '" height="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoHeight')]);

$output22 .= '" alt="" aria-hidden="true" />
                </span>
                <span class="topbar-site-title">
                    <span class="topbar-site-name">';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteName')]);

$output22 .= '</span>
                    <span class="topbar-site-version">';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('applicationVersion')]);

$output22 .= '</span>
                </span>
            </a>
        </div>
        <button
            class="topbar-button topbar-button-toolbar t3js-topbar-button-toolbar"
            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.toolbarOpenClose',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29)]);

$output22 .= '"
            aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.toolbarOpenClose',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31)]);

$output22 .= '"
        >
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-system-extension-configure',
'alternativeMarkupIdentifier' => 'inline',
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);

$output22 .= '
        </button>
        <button
            class="topbar-button topbar-button-search t3js-topbar-button-search"
            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.searchbarOpenClose',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35)]);

$output22 .= '"
            aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.searchbarOpenClose',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments36, $renderingContext, $renderChildrenClosure37)]);

$output22 .= '"
        >
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-search',
'alternativeMarkupIdentifier' => 'inline',
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output22 .= '
        </button>
    </div>
</div>
<div class="scaffold-toolbar t3js-scaffold-toolbar" data-toolbar-identifier="toolbar">
    <div class="toolbar">
        <ul class="toolbar-list" data-typo3-role="typo3-module-menu">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
                <li ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Toolbar\AttributesViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'class' => $renderingContext->getVariableProvider()->getByPath('toolbarItem'),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Toolbar\AttributesViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46);
};

$arguments43 = [
'value' => NULL,
];

$output42 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output42 .= '>
                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Toolbar\IfHasDropdownViewHelper

$arguments55 = [
'__then' => function() use ($renderingContext) {
$output47 = '';

$output47 .= '
                            <button type="button" class="toolbar-item-link dropdown-toggle dropdown-toggle-no-chevron" data-bs-target="toolbar-menu-';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle')]);

$output47 .= '" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('toolbarItem.item');
};

$arguments48 = [
'value' => NULL,
];

$output47 .= isset($arguments48['value']) ? $arguments48['value'] : $renderChildrenClosure49();

$output47 .= '
                            </button>
                            <div id="toolbar-menu-';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle')]);

$output47 .= '" class="dropdown-menu" role="menu">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('toolbarItem.dropdown');
};

$arguments50 = [
'value' => NULL,
];

$output47 .= isset($arguments50['value']) ? $arguments50['value'] : $renderChildrenClosure51();

$output47 .= '
                            </div>
                        ';
return $output47;
},
'__else' => function() use ($renderingContext) {
$output52 = '';

$output52 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('toolbarItem.item');
};

$arguments53 = [
'value' => NULL,
];

$output52 .= isset($arguments53['value']) ? $arguments53['value'] : $renderChildrenClosure54();

$output52 .= '
                        ';
return $output52;
},
'class' => $renderingContext->getVariableProvider()->getByPath('toolbarItem'),
];

$output42 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Toolbar\IfHasDropdownViewHelper::class, $arguments55, $renderingContext)
;

$output42 .= '
                </li>
            ';
return $output42;
};

$arguments40 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('toolbarItems'),
'as' => 'toolbarItem',
'iteration' => 'iterator',
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments40, $renderingContext, $renderChildrenClosure41);

$output22 .= '
        </ul>
    </div>
</div>

';

$output22 .= '';

$output22 .= '

';

$output22 .= '';

$output22 .= '


';

    return $output22;
}

}

#