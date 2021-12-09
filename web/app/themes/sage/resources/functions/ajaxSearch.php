<?php
// the ajax function
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');
function data_fetch()
{
    $needle = esc_attr($_POST['keyword']);
    $result_search = [];

    /**
     * Поиск по заголовку
     **/
    $needle_sql = preg_replace('/[^ a-zа-яё\d]/ui', ' ', $needle); // удаление все кроме букв и цифр
    $needle_sql = preg_replace('/\s+/', ' ', $needle_sql); // удаление лишних пробелов
    $needle_sql = str_replace(" ", '%', trim($needle_sql));
    global $wpdb;
    $resultTitle = $wpdb->get_results("SELECT id FROM wp_posts WHERE
                                                post_status = 'publish'
                                                AND post_type = 'post'
                                                AND post_title LIKE '%$needle_sql%';
                                                ");
    if (!empty($resultTitle)) {
        foreach ($resultTitle as $item) {
            $result_search[] = $item->id;
        }
    }

    /**
     * Поиск по метаполям
     **/
    $argsMeta = [
        'posts_per_page' => 30,
        'post_type' => 'post',
        'post__not_in' => $result_search, // исключаем предыдущие результаты поиска
        'meta_query' => [
            [
                'key' => 'sub_search_values',
                'value' => $needle,
                'compare' => 'LIKE'
            ],
        ],
    ];
    $resultMeta = get_posts($argsMeta);
    if (!empty($resultMeta)) {
        foreach ($resultMeta as $item) {
            $result_search[] = $item->ID;
        }
    }

    /**
     * Поиск по контенту
     **/
    $argsPost = [
        'posts_per_page' => 30,
        'post_type' => 'post',
        'post__not_in' => $result_search, // исключаем предыдущие результаты поиска
        's' => $needle,
    ];
    $resultPost = get_posts($argsPost);
    if (!empty($resultPost)) {
        foreach ($resultPost as $item) {
            $result_search[] = $item->ID;
        }
    }

    /**
     * Вывод результатов поиска
     **/
    if ($result_search) :
        foreach ($result_search as $post_id) :
            $title = get_the_title($post_id);
            $link = get_the_permalink($post_id);
            $category = get_the_category($post_id);
            $categoryName = $category[0]->name;
            $excerpt = wordCount(get_the_excerpt($post_id), 30);
            ?>
            <li class="search__item">
                <a class="search__link" href="<?= $link ?>">
                    <div class="search__item-wrap">
                        <div class="search__content">
                            <h3 class="text text_bold search__title">
                                <?= $title ?> - <span class="search__category"><?= $categoryName ?></span>
                            </h3>
                            <p class="text text_normal">
                                <?=$excerpt?>
                            </p>
                        </div>
                    </div>
                </a>
            </li>
        <?php endforeach;
    else :
        echo '<li class="search__item text_dark">По данному запросу ничего не найдено</li>';
    endif;

    die();
}
