<?php
/**
 * Plugin Name: Remote Feed Posts
 * Description: Menampilkan artikel dari feed situs lain tanpa menyimpan ke database.
 * Version: 1.0
 * Author: Ikhsan Thohir
 */

if (!defined('ABSPATH')) exit;

/**
 * Ambil thumbnail dari konten feed (image pertama).
 */
function rfp_get_thumbnail_from_content($content) {
    preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
    return $matches[1] ?? '';
}

/**
 * Shortcode utama
 * [remote_feed url="https://alamat/feed/" limit="5"]
 */
function rfp_fetch_posts($atts) {
    $atts = shortcode_atts([
        'url'   => '',
        'limit' => 5,
    ], $atts);

    if (empty($atts['url'])) {
        return "<p style='color:red;'>Error: Parameter <b>url</b> diperlukan. Contoh: <code>[remote_feed url=\"https://tv.nusaputra.ac.id/feed/\"]</code></p>";
    }

    $rss = fetch_feed($atts['url']);

    if (is_wp_error($rss)) {
        return "<p style='color:red;'>Gagal mengambil feed dari: {$atts['url']}</p>";
    }

    $rss->set_item_limit($atts['limit']);
    $items = $rss->get_items(0, $atts['limit']);

    $output = '<div class="rfp-post-wrapper">';

    foreach ($items as $item) {
        $title = esc_html($item->get_title());
        $link = esc_url($item->get_permalink());
        $date = esc_html($item->get_date('d M Y'));
        $content = $item->get_content();
        $thumb = rfp_get_thumbnail_from_content($content);

        $output .= '<div class="rfp-post-item" style="margin-bottom:20px;">';

        if ($thumb) {
            $output .= '<a href="' . $link . '" target="_blank">
                            <img src="' . $thumb . '" style="width:100%;max-width:300px;height:auto;">
                        </a>';
        }

        $output .= '<h3><a href="' . $link . '" target="_blank">' . $title . '</a></h3>';
        $output .= '<small>' . $date . '</small>';

        $output .= '</div>';
    }

    $output .= '</div>';
    return $output;
}
add_shortcode('remote_feed', 'rfp_fetch_posts');
