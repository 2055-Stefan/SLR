<?php
$portal_name = 'Bürgerportal';
$feature_1_title = 'Bauanträge';
$feature_1_description = 'Reichen Sie einen Bauantrag ein und verfolgen Sie den Status direkt im Bürgerportal.';
$feature_2_title = 'Termine buchen';
$feature_2_description = 'Buchen Sie einen Termin im Bürgerbüro für verschiedene Anliegen, von der Anmeldung bis zur Ausweiserneuerung.';
$feature_3_title = 'Gemeindedienste (API)';
$feature_3_description = 'Greifen Sie auf verschiedene Gemeindedienste zu, die via API in das Bürgerportal integriert sind.';

$template_file = fopen('templates/template.html', 'r');
$template = fread($template_file, filesize('templates/template.html'));
fclose($template_file);

$template = str_replace('{{portal_name}}', $portal_name, $template);
$template = str_replace('{{feature_1_title}}', $feature_1_title, $template);
$template = str_replace('{{feature_1_description}}', $feature_1_description, $template);
$template = str_replace('{{feature_2_title}}', $feature_2_title, $template);
$template = str_replace('{{feature_2_description}}', $feature_2_description, $template);
$template = str_replace('{{feature_3_title}}', $feature_3_title, $template);
$template = str_replace('{{feature_3_description}}', $feature_3_description, $template);

echo $template;
?>
