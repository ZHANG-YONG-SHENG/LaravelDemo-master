<title>**歡迎光臨生鮮商店**</title>
<body style="background-color: #ccff66
;">
*****新增商品*****



<form action="{{ route('posts.store') }}" method="POST">

    @csrf

    <label>內容：

        <textarea name="content"></textarea>

    </label><br>

    <input type="submit" value="送出文章">

</form>
<input name="Submit" type="button" id="Submit" onClick="javascript:history.back(1)" value="回上一頁" />