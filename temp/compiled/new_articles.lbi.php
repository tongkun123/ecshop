<div id="mallNews" class="box_1" style="height:334px;">
    <h3 style="height:45px; background:#f1f1f1;"><span style="line-height:45px; font-size:14px; font-family:'宋体'; color:#666;">新闻快讯</span></h3>
    <div class="NewsList tc  " style="border-top:none">
        <ul>
        <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['goods']['iteration']++;
?>
        <?php if ($this->_foreach['goods']['iteration'] < 10): ?>
        <li><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo sub_str($this->_var['article']['short_title'],20); ?></a></li>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
</div>