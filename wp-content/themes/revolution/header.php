<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>
    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/media.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<? wp_head(); ?>
  </head>
  <body>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/img/logo.png" class="img-responsive" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="contacts">
                        <ul>
							<? $query = new WP_Query(array('page_id' => 32)); ?>
							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
								<? $field = get_field('contact_phone'); ?> 
								<? if(!empty($field)): ?>
									<li class="phone"><i class="fa fa-mobile" aria-hidden="true"></i> <? echo $field; ?></li>
								<? endif; ?>
								<? $field = get_field('contact_skype'); ?> 
								<? if(!empty($field)): ?>
									<li class="skype"><i class="fa fa-skype" aria-hidden="true"></i> <? echo $field; ?></li>
								<? endif; ?>
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
						<? $menu = menu_mass('menu'); ?>
						<? foreach($menu as $item): ?>
							<li><a href="<? echo $item['url'] ?>"><? echo $item['title'] ?> <? if(!empty($item['sub'])){ echo "<i class='fa fa-angle-down' aria-hidden='true'></i>"; } ?></a>
								<? if(!empty($item['sub'])): ?>
									<ul class="sub-menu">
										<? foreach($item['sub'] as $item): ?>
											<li><a href="<? echo $item['url'] ?>"><? echo $item['title'] ?></a></li>
										<? endforeach; ?>
									</ul>
								<? endif; ?>
							</li>
						<? endforeach; ?>
                    </ul>
                    <div id="nav-icon2">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>