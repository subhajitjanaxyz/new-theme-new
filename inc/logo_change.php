<?php
function sjj_changelogo($wp_customize){
 

//for footer
    $wp_customize->add_section('footertext',array(
        'title'=>__('footer update','sjana'),
        'description'=> 'now you can change website logo'
    ));
// footer col 1 

$wp_customize->add_setting('col1',array(
    'default' =>'BizPage'
));
$wp_customize->add_control('col1',array(
    'label' => 'col1 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col1'
    )); 

// footer col 1-1

$wp_customize->add_setting('col1-1',array(
    'default' =>'Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.'
));
$wp_customize->add_control('col1-1',array(
    'label' => 'col1-1 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col1-1'
    )); 


// footer col 2

$wp_customize->add_setting('col2',array(
    'default' =>'Useful Links'
));
$wp_customize->add_control('col2',array(
    'label' => 'col1-1 update',
    'description'=>'change your footer col2',
    'section' => 'footertext',
    'setting' => 'col2'
    )); 


// footer col 2-1

$wp_customize->add_setting('col2-1',array(
    'default' =>'Home'
));
$wp_customize->add_control('col2-1',array(
    'label' => 'col2-1 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col2-1'
    )); 


// footer col 2-2

$wp_customize->add_setting('col2-2',array(
    'default' =>'About us'
));
$wp_customize->add_control('col2-2',array(
    'label' => 'col2-2 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col2-2'
    )); 


// footer col 2-3

$wp_customize->add_setting('col2-3',array(
    'default' =>'Services'
));
$wp_customize->add_control('col2-3',array(
    'label' => 'col2-3 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col2-3'
    )); 

// footer col 2-4

$wp_customize->add_setting('col2-4',array(
    'default' =>'Terms of service'
));
$wp_customize->add_control('col2-4',array(
    'label' => 'col2-4 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col2-4'
    )); 

// footer col 2-5

$wp_customize->add_setting('col2-5',array(
    'default' =>'Privacy policy'
));
$wp_customize->add_control('col2-5',array(
    'label' => 'col2-5 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col2-5'
    )); 

// footer col 3

$wp_customize->add_setting('col3',array(
    'default' =>'Contact Us'
));
$wp_customize->add_control('col3',array(
    'label' => 'col3 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col3'
    )); 

// footer col 3-1

$wp_customize->add_setting('col3-1',array(
    'default' =>'A108 Adam Street'
));
$wp_customize->add_control('col3-1',array(
    'label' => 'col3-1 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col3-1'
    )); 

// footer col 3-2

$wp_customize->add_setting('col3-2',array(
    'default' =>'New York, NY 535022'
));
$wp_customize->add_control('col3-2',array(
    'label' => 'col3-2 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col3-2'
    )); 
// footer col 3-3

$wp_customize->add_setting('col3-3',array(
    'default' =>'United States'
));
$wp_customize->add_control('col3-3',array(
    'label' => 'col3-3 update',
    'description'=>'change your footer col3-3',
    'section' => 'footertext',
    'setting' => 'col3-3'
    )); 
// footer col 3-4

$wp_customize->add_setting('col3-4',array(
    'default' =>' +1 5589 55488 55'
));
$wp_customize->add_control('col3-4',array(
    'label' => 'col3-4 update',
    'description'=>'change your footer col1',
    'section' => 'footertext',
    'setting' => 'col3-4'
    )); 
// footer col 3-5

$wp_customize->add_setting('col3-5',array(
    'default' =>'info@example.com'
));
$wp_customize->add_control('col3-5',array(
    'label' => 'col3-5 update',
    'description'=>'change your footer col3-5',
    'section' => 'footertext',
    'setting' => 'col3-5'
    )); 


// footer col 4

$wp_customize->add_setting('col4',array(
    'default' =>'Our Newsletter'
));
$wp_customize->add_control('col4',array(
    'label' => 'col4 update',
    'description'=>'change your footer col4',
    'section' => 'footertext',
    'setting' => 'col4'
    )); 

// footer col 4-1

$wp_customize->add_setting('col4-1',array(
    'default' =>'Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.'
));
$wp_customize->add_control('col4-1',array(
    'label' => 'col4-1 update',
    'description'=>'change your footer col4-1',
    'section' => 'footertext',
    'setting' => 'col4-1'
    )); 














    // foter title c right 
    $wp_customize->add_setting('footertext',array(
        'default' =>'© Copyright BizPage. All Rights Reserved'
    ));
    $wp_customize->add_control('footertext',array(
        'label' => 'footer update',
        'description'=>'change your logo',
        'section' => 'footertext',
        'setting' => 'footertext'
        ));  











//title change
$wp_customize->add_section('company',array(
    'title'=>__('change company name','sjana'),
    'description'=> 'eenow you can change website logo'
));
$wp_customize->add_setting('company',array(
    'default' =>'ABCD '
));
$wp_customize->add_control('company',array(
    'label' => 'footer update',
    'description'=>'change your logo',
    'section' => 'company',
    'setting' => 'company'
)); 
 

  // Theme Color
  $wp_customize-> add_section('subhajit_colors', array(
    'title' => __('Theme Color', 'alihossain'),
    'description' => 'If need you can change your theme color.',
  ));




//background
  $wp_customize ->add_setting('subhajit_bg_color', array(
    'default' => '#ffffff',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'subhajit_bg_color', array(
    'label' => 'Background Color',
    'section' => 'subhajit_colors',
    'settings' => 'subhajit_bg_color',
  )));


//header 
  $wp_customize ->add_setting('subhajit_primary_color', array(
    'default' => '#000000',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'subhajit_bg_color_primary_color', array(
    'label' => 'header background color',
    'section' => 'subhajit_colors',
    'settings' => 'subhajit_primary_color',
  )));
  //header text
  $wp_customize ->add_setting('subhajit_primary_color_text', array(
    'default' => '#ffffff',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'subhajit_primary_color_text', array(
    'label' => 'header text color',
    'section' => 'subhajit_colors',
    'settings' => 'subhajit_primary_color_text',
  )));
//footer
$wp_customize ->add_setting('subhajit_footer_color', array(
    'default' => '#000000',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'subhajit_footer_color', array(
    'label' => 'footer background color',
    'section' => 'subhajit_colors',
    'settings' => 'subhajit_footer_color',
  )));

  //footer text
  $wp_customize ->add_setting('subhajit_footer_color_text', array(
    'default' => '#ffffff',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'subhajit_footer_color_text', array(
    'label' => 'footer text color',
    'section' => 'subhajit_colors',
    'settings' => 'subhajit_footer_color_text',
  )));




































}
add_action('customize_register','sjj_changelogo');


//menu add
register_nav_menu( 'main_menu', __('Main Menu', 'sjana') );

function subhajit_theme_color_cus(){
    ?>
    <style>
      body{background: <?php echo get_theme_mod('subhajit_bg_color'); ?>}
      :root{ --headercolor:<?php echo get_theme_mod('subhajit_primary_color'); ?>}
      :root{ --headertext:<?php echo get_theme_mod('subhajit_primary_color_text'); ?>}
      :root{ --footercolor:<?php echo get_theme_mod('subhajit_footer_color'); ?>}
      :root{ --footertext:<?php echo get_theme_mod('subhajit_footer_color_text'); ?>}
     
    </style>
    <?php 
  }
  add_action('wp_head', 'subhajit_theme_color_cus');