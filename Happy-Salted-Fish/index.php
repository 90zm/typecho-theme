/**
 * 这是紫慕的第一套theme。你可以在<a href="https://90zm.net">紫慕碎碎念</a>获得更多关于此主题的信息
 * 
 * @package Happy Salted Fish 
 * @author 紫慕
 * @version 1.0.0
 * @link https://90zm.net
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
//这是头部
<div id="main">
	<ul>
		<?php while($this->next()): ?>
		<li>
		<article>
			<div id="title">
	    	<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
	    	</div>
	    	<div id="card-atc">
				作者：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?>
				时间：<?php $this->date('F j, Y'); ?>
				分类：<?php $this->category(','); ?>
			</div>
			<div id="content">
				<?php $this->content('Continue Reading...'); ?>
			</div>
			<div id="comment">
			<?php $this->commentsNum('%d Comments'); ?>
			</div>
		</article>
		</li>
		<?php endwhile; ?>
	
	</ul>
</div>
<br>
<div id="page"><?php $this->pageNav(); ?>
<div id="page">

<?php $this->need('sidebar.php'); ?>

<?php $this->need('footer.php'); ?>