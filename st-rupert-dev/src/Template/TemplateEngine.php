<?php
declare(strict_types=1);

namespace App\Template;

class TemplateEngine
{
    public static function render(string $templatePath, array $data): string
    {
        $handle = fopen($templatePath, 'r');
        if ($handle === false) {
            throw new \RuntimeException('Template file not found');
        }

        $template = fread($handle, filesize($templatePath));
        fclose($handle);

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $html = '';

                foreach ($value as $item) {
                    $html .= <<<HTML
                    <article class="card">
                        <h3>{$item['title']}</h3>
                        <p>{$item['description']}</p>
                    </article>
                    HTML;
                }

                $template = str_replace('{{' . $key . '}}', $html, $template);
            } else {
                $template = str_replace('{{' . $key . '}}', (string) $value, $template);
            }
        }

        return $template;
    }
}
