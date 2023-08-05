<?php
// Fungsi untuk meminifikasi kode HTML
function minify_html($html)
{
    $search = array(
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s',
    );
    $replace = array(
        '>',
        '<',
        '\\1',
    );
    return preg_replace($search, $replace, $html);
}

// Fungsi untuk meminifikasi kode CSS
function minify_css($css)
{
    return preg_replace('/\s+/', ' ', $css);
}

// Fungsi untuk meminifikasi kode JavaScript
function minify_js($js)
{
    $js = preg_replace('/\/\/.*\n/', '', $js);
    $js = preg_replace('/\/\*.*\*\//s', '', $js);
    $js = preg_replace('/\s+/', ' ', $js);
    return $js;
}
?>