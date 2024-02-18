

<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/css/theme.css'));   


     // Chargement du /css/shortcodes/banniere-titre.css pour notre shortcode banniere titre
     wp_enqueue_style('banniere-titre-shortcode', get_stylesheet_directory_uri() . '/css/shortcodes/banniere-titre.css', 
     array(), filemtime(get_stylesheet_directory() . '/css/shortcodes/banniere-titre.css'));



     // Shortcodes gouts commander 
     wp_enqueue_style('gouts-commander-shortcode', get_stylesheet_directory_uri() . '/css/shortcodes/image-commander.css', 
     array(), filemtime(get_stylesheet_directory() . '/css/shortcodes/image-commander.css'));
}


/* SHORTCODES banniere-titre */

function banniere_titre_func($atts)
{
    //Je récupère les attributs mis sur le shortcode
    $atts = shortcode_atts(array(
        'src' => '',
        'titre' => 'Titre'
    ), $atts, 'banniere-titre');
    
    //Je commence à récupéré le flux d'information
    ob_start();

    if ($atts['src'] != "") {
        ?>

<div class="banniere-titre" style="background-image: url(<?= $atts['src'] ?>)">
    <h2 class="titre"><?= $atts['titre'] ?></h2>
</div>

<?php
    }
    
    //J'arrête de récupérer le flux d'information et le stock dans la fonction $output
    $output = ob_get_contents();
    ob_end_clean();
    
    return $output;
}
// Je dis à wordpress que j'ajoute un shortcode 'banniere-titre'
add_shortcode('banniere-titre', 'banniere_titre_func');
// Je génère le html retourné par mon shortcode




/* Shortcodes commander gouts */ 

function gouts_commander($atts)
{
    //Je récupère les attributs mis sur le shortcode
    $atts = shortcode_atts(array(
        'src' => '',
        'titre' => 'Titre'
    ), $atts, 'gouts-commander');
    
    //Je commence à récupéré le flux d'information
    ob_start();

    if ($atts['src'] != "") {
        ?>

<div class="gouts-commander" style="background-image: url(<?= $atts['src'] ?>)">
    <h2 class="titre"><?= $atts['titre'] ?></h2>
</div>


<?php
    }
    
    //J'arrête de récupérer le flux d'information et le stock dans la fonction $output
    $output = ob_get_contents();
    ob_end_clean();
    
    return $output;
}
// Je dis à wordpress que j'ajoute un shortcode 'banniere-titre'
add_shortcode('gouts-commander', 'gouts_commander');
// Je génère le html retourné par mon shortcode


