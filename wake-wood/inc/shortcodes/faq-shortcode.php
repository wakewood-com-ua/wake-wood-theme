<?php

add_shortcode( 'faq-section' , 'add_faq_section' );

function add_faq_section($atts)
{

    $atts = shortcode_atts([

    ], $atts );

    $wp_query = new WP_Query(array(
        'post_type'         =>  'faq',
        'posts_per_page'    =>  -1,
        'orderby'           =>  'publish_date',
        'order'             =>  'DESC',
    ));

    if ($wp_query->have_posts()) {

        $output = ' <div itemscope itemtype="https://schema.org/FAQPage" class="faq">';

            while ($wp_query->have_posts()) { $wp_query->the_post();
                $output .= '<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-item">
                                <div class="faq-item__title"><h3 itemprop="name">' . get_the_title() . '</h3><i class="button-area"></i></div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-item__wrapper"><div itemprop="text" class="faq-item__text">' .  get_the_content() . '</div></div>
                            </div>';
            }

        $output .= '</div>';

    } else {

        $output = '<div class="about-not-found text-center">
                      <header class="page-header">
                        <h4 class="page-title">' . __( 'Розділ не заповнено', 'wake-wood' ) . '</h4>
                      </header>
                    </div>';

    }

    return $output;
}
