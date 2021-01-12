<title>**歡迎光臨生鮮商品**</title>
*****編輯商品*****



<form action="{{ route('posts.update', [ 'post' => $post]) }}" method="POST">

    @method('PUT')

    @csrf

    <label>內容：

        <textarea name="content">{{ $post->content }}</textarea>

    </label><br>

    <input type="submit" value="送出文章">

</form>
<form action="{{ route('posts.destroy', [ 'post' => $post]) }}" method="POST">

    @method('DELETE')

    @csrf

    <input type="submit" value="刪除文章">

</form>
<input name="Submit" type="button" id="Submit" onClick="javascript:history.back(1)" value="回上一頁" />