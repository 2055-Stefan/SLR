<?php
return array (
  'default' => 
  array (
    'title' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:dashboard.default',
    'description' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:dashboard.default.description',
    'iconIdentifier' => 'content-dashboard',
    'defaultWidgets' => 
    array (
      0 => 't3information',
      1 => 'docGettingStarted',
    ),
    'showInWizard' => false,
  ),
  'empty' => 
  array (
    'title' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:dashboard.empty',
    'description' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:dashboard.empty.description',
    'iconIdentifier' => 'content-dashboard-empty',
    'defaultWidgets' => 
    array (
    ),
    'showInWizard' => true,
  ),
  'dashboardPreset-SysNotes' => 
  array (
    'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang.xlf:widget_group.sys_note_widget.title',
    'description' => 'Shows all widgets from EXT:sys_note',
    'iconIdentifier' => 'content-note',
    'defaultWidgets' => 
    array (
      0 => 'sys_note_all',
      1 => 'sys_note_default',
      2 => 'sys_note_instructions',
      3 => 'sys_note_template',
      4 => 'sys_note_notes',
      5 => 'sys_note_todos',
    ),
    'showInWizard' => true,
  ),
);
#