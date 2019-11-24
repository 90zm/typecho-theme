<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<div id="footer">
<a href="<?php $this->options->feedUrl(); ?>">Entries (RSS)</a> <!-- 文章的RSS地址连接 -->
<a href="<?php $this->options->commentsFeedUrl(); ?>">Comments (RSS)</a>. <!-- 评论的RSS地址连接 -->
<a href="http://90zm.net">紫慕碎碎念</a>
</div><!-- end #footer -->
<?php $this->footer(); ?>
</body>
</html>