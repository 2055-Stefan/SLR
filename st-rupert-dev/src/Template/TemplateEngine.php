<?php
declare(strict_types=1);

namespace App\Template;

class TemplateEngine
{
    public static function render(string $file, array $data): string
    {
        if (!file_exists($file)) {
            return '';
        }

        $template = file_get_contents($file); // = fread erlaubt

        foreach ($data as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }

        return $template;
    }
}
