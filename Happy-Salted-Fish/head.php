<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
/**
 * UFT-8编码方式
 */
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
/**
 * 导入样式
 */
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
/**
 * 页面标题
 */
<?php $this->header(); ?>
</head>
<head>
<body>
<div id="head">
<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
<h2><?php $this->options->description() ?></h2>
</div>
/**
 * 站点地址，站点标题，站点副标题
 */
<div id="nav">
<ul>
    <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
</div>
/**
 * 页面导航
 */
</header>


