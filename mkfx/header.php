<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<title>MKFX</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="copyright" content="">
	<meta name="author" content="">
	<meta name="Targeted Geographic Area" content="Japan">
	<meta name="coverage" content="Japan">
	<meta name="rating" content="general">
	<meta name="content-language" content="ja">
	<meta name="format-detection" content="telephone=no">
	<link rel="canonical" href="">

	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="article">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@">
	<meta name="twitter:image" content="">

	<link rel="shortcut icon" href="<?= get_template_directory_uri()?>/assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.6/viewer.min.css" integrity="sha512-za6IYQz7tR0pzniM/EAkgjV1gf1kWMlVJHBHavKIvsNoUMKWU99ZHzvL6lIobjiE2yKDAKMDSSmcMAxoiWgoWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?= get_template_directory_uri()?>/assets/css/vender.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri()?>/assets/css/common.min.css">
    
</head>

<body>

	<!-- wrapper -->
	<div id="wrapper">

		<!-- innerWrapper -->
		<div id="innerWrapper">

            <?php get_template_part('partials/content-loading');?>

            <?php get_template_part('partials/content-header');?>

            <?php wp_head();?>
