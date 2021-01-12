<title>**歡迎光臨生鮮商店**</title>
<body style="background-color: #99ccff
;">
                    <H1 ><font color="blue" size="100px" style="background-color:powderblue">生鮮商品</font></H1>
*****列舉商品名稱*****

<hr />

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($post->content); ?>


    <hr />

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<hr/>
<br>
<input name="Submit" type="button" id="Submit" onClick="javascript:history.back(1)" value="回一上頁" />
</body><?php /**PATH D:\UniServerZ\www\LaravelDemo-master\resources\views/posts/index.blade.php ENDPATH**/ ?>