<?php
declare(strict_types=1);

namespace App\Template;

class TemplateEngine
{
    public static function render(string $file, array $data): string
    {
        $template = file_get_contents($file);

        // 1 Loop-Verarbeitung
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $template = self::renderLoop($template, $key, $value);
            }
        }

        // 2 Einfache Platzhalter
        foreach ($data as $key => $value) {
            if (!is_array($value)) {
                $template = str_replace('{{'.$key.'}}', (string) $value, $template);
            }
        }

        return $template;
    }

    private static function renderLoop(string $template, string $key, array $items): string
    {
        $pattern = '/{{#'.$key.'}}(.*?){{\/'.$key.'}}/s';

        if (!preg_match($pattern, $template, $matches)) {
            return $template;
        }

        $block = $matches[1];
        $result = '';

        foreach ($items as $item) {
            $row = $block;

            foreach ($item as $itemKey => $itemValue) {
                $row = str_replace('{{'.$itemKey.'}}', (string) $itemValue, $row);
            }

            $result .= $row;
        }

        return preg_replace($pattern, $result, $template);
    }
}
