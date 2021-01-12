編輯文章



<form action="<?php echo e(route('posts.update', [ 'post' => $post])); ?>" method="POST">

    <?php echo method_field('PUT'); ?>

    <?php echo csrf_field(); ?>

    <label>內容：

        <textarea name="content"><?php echo e($post->content); ?></textarea>

    </label><br>

    <input type="submit" value="送出文章">

</form>
<form action="<?php echo e(route('posts.destroy', [ 'post' => $post])); ?>" method="POST">

    <?php echo method_field('DELETE'); ?>

    <?php echo csrf_field(); ?>

    <input type="submit" value="刪除文章">

</form>
<?php /**PATH D:\UniServerZ\www\LaravelDemo-master\resources\views/posts/edit.blade.php ENDPATH**/ ?>