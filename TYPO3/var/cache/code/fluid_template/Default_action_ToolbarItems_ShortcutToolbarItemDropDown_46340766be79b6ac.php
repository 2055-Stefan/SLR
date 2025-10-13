<?php
class Default_action_ToolbarItems_ShortcutToolbarItemDropDown_46340766be79b6ac extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '<p class="dropdown-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '</p>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$arguments52 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('shortcutMenu'),
];
$renderChildrenClosure53 = ($arguments52['subject'] !== null) ? function() use ($arguments52) { return $arguments52['subject']; } : $renderChildrenClosure53;
$array51 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments52, $renderingContext, $renderChildrenClosure53),
'1' => ' == 0',
];

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};

$arguments55 = [
'__then' => function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';

$output3 .= '';

$output3 .= '';

$output3 .= '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output11 = '';

$output11 .= '
            <p class="dropdown-item-text">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};
$output17 = '';

$output17 .= '<span title="';

$output17 .= $renderingContext->getVariableProvider()->getByPath('inlineIconTitle');

$output17 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('inlineIcon');
};

$arguments18 = [
'value' => NULL,
];

$output17 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output17 .= '</span>';

$array16 = [
'0' => $output17,
];

$arguments14 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks.description',
'arguments' => $array16,
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15);
};

$arguments12 = [
'value' => NULL,
];

$output11 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

$output11 .= '</p>
        ';
return $output11;
};
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-share-alt',
'alternativeMarkupIdentifier' => 'inline',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks',
];

$array6 = [
'inlineIcon' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8),
'inlineIconTitle' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10),
];

$arguments4 = [
'map' => $array6,
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5);

$output3 .= '
    ';
return $output3;
},
'__else' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array24 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('iterator.isFirst'),
];

$expression25 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments26 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
                <hr class="dropdown-divider" aria-hidden="true">
            ';
},
];

$output23 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments26, $renderingContext)
;

$output23 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('group.title'),
];

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments37 = [
'__then' => function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                    <p class="dropdown-header" id="shortcut-group-';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id')]);

$output27 .= '">';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.title')]);

$output27 .= '</p>
                ';
return $output27;
},
'__elseIf' => [
'0' => [
'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('shortcutMenu');
};

$arguments29 = [
'subject' => NULL,
];
$renderChildrenClosure30 = ($arguments29['subject'] !== null) ? function() use ($arguments29) { return $arguments29['subject']; } : $renderChildrenClosure30;
$array28 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments29, $renderingContext, $renderChildrenClosure30),
'1' => ' > 1',
];

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
);
},
'body' => function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                    <p class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks.notGrouped',
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments33, $renderingContext, $renderChildrenClosure34)]);

$output32 .= '</p>
                ';
return $output32;
},
],
],
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
];

$output23 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments37, $renderingContext)
;

$output23 .= '
            <ul class="dropdown-list" data-shortcutgroup="';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id')]);

$output23 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                    <li class="t3js-topbar-shortcut" data-shortcutid="';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.raw.uid')]);

$output40 .= '" data-shortcutgroup="';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id')]);

$output40 .= '">
                        <a href="';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.href')]);

$output40 .= '" class="dropdown-item dropdown-item-title t3js-shortcut-jump"
                            title="';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.label')]);

$output40 .= '"
                            data-module="';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.module')]);

$output40 .= '"
                            data-route="';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.route')]);

$output40 .= '"
                        >
                            <span class="dropdown-item-columns">
                                <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('shortcut.icon');
};

$arguments41 = [
'value' => NULL,
];

$output40 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output40 .= '
                                </span>
                                <span class="dropdown-item-column dropdown-item-column-title">
                                    ';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.label')]);

$output40 .= '
                                </span>
                            </span>
                        </a>
                        <a
                            href="#"
                            class="dropdown-item dropdown-item-action t3js-shortcut-edit"
                            title="';
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
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarksEdit',
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44)]);

$output40 .= '"
                            role="button"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-open',
'alternativeMarkupIdentifier' => 'inline',
];

$output40 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46);

$output40 .= '
                        </a>
                        <a
                            href="#"
                            class="dropdown-item dropdown-item-action t3js-shortcut-delete"
                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarksDelete',
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments47, $renderingContext, $renderChildrenClosure48)]);

$output40 .= '"
                            role="button"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return NULL;
};

$arguments49 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-delete',
'alternativeMarkupIdentifier' => 'inline',
];

$output40 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments49, $renderingContext, $renderChildrenClosure50);

$output40 .= '
                        </a>
                    </li>
                ';
return $output40;
};

$arguments38 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('group.shortcuts'),
'as' => 'shortcut',
];

$output23 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output23 .= '
            </ul>
        ';
return $output23;
};

$arguments21 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('shortcutMenu'),
'as' => 'group',
'iteration' => 'iterator',
];

$output20 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output20 .= '
    ';
return $output20;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression54(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments55, $renderingContext)
;

$output0 .= '
';

    return $output0;
}

}

#