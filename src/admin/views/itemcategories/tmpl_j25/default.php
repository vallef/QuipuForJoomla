<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
// load tooltip behavior
JHtml::_('behavior.tooltip');
JHtml::_('behavior.modal');
?>
<form action="<?php echo JRoute::_('index.php?option=com_quipu'); ?>" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
        <thead><?php echo $this->loadTemplate('head'); ?></thead>
        <tfoot><?php echo $this->loadTemplate('foot'); ?></tfoot>
        <tbody><?php echo $this->loadTemplate('body'); ?></tbody>
    </table>
    <?php echo $this->loadTemplate('export'); ?>
    <?php echo $this->loadTemplate('import'); ?>
    <div>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <input type="hidden" name="view" value="<?php echo  IWRequest::getCmd('view') ?>" />
        <?php echo JHtml::_('form.token'); ?>
    </div>

</form>
