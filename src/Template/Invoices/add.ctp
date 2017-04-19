<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Trở Về'), ['action' => 'index'], ['class' => 'button']) ?></div>
</nav>

<div class="invoices form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Thêm Mới Hóa Đơn') ?></legend>
        <?php
        echo $this->Form->control('customer_id', ['options' => $customers]);
        echo $this->Form->control('product_id', ['options' => $products]);
        echo $this->Form->control('amount');
        echo $this->Form->control('discount');
        echo '<div class="input number required"><label for="discount">Total</label><input type="number" name="discount" required="required" id="discount"/></div>';
        echo $this->Form->control('order_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<script type="text/javascript">

</script>