<?php
declare(strict_types=1);

$DATA = require __DIR__ . '/data.php';

/** Escape for HTML output. */
function e(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function initials(string $name): string
{
    $parts = preg_split('/\s+/', trim($name)) ?: [];
    $out = '';
    foreach (array_slice($parts, 0, 2) as $p) {
        $out .= mb_substr($p, 0, 1);
    }
    return $out;
}

function cloud_folder_url(?string $path): string
{
    return $path === null
        ? 'https://bhcha.com/cloud/'
        : 'https://bhcha.com/cloud/#/?cd=' . rawurlencode($path);
}

/** Renders a list of [title, subtitle, type, url] documents. */
function render_docs(array $docs): void
{
    echo '<ul class="docs">';
    foreach ($docs as [$title, $sub, $type, $url]) {
        $action = $type === 'DOC' ? 'Open' : 'Download';
        printf(
            '<li><a href="%s"><span class="doc-ico">%s</span><span><b>%s</b><small>%s</small></span><span class="go">%s</span></a></li>',
            e($url), e($type), e($title), e($sub), $action
        );
    }
    echo '</ul>';
}

/** Renders a list of [name|null, role] people. */
function render_people(array $people): void
{
    echo '<div class="people">';
    foreach ($people as [$name, $role]) {
        if ($name === null) {
            printf('<div class="person vacant"><span class="avatar">?</span><div><b>To be announced</b><small>%s</small></div></div>', e($role));
        } else {
            printf('<div class="person"><span class="avatar">%s</span><div><b>%s</b><small>%s</small></div></div>', e(initials($name)), e($name), e($role));
        }
    }
    echo '</div>';
}

function render_link_list(array $links, string $class = 'link-list'): void
{
    echo $class === '' ? '<ul>' : '<ul class="' . e($class) . '">';
    foreach ($links as [$label, $url]) {
        printf('<li><a href="%s">%s</a></li>', e($url), e($label));
    }
    echo '</ul>';
}
