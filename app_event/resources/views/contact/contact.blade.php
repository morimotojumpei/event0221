@extends('layouts.app')
@section('content')

<title>content</title>
<br><br><br><br>
<div>
<p>ここから本分作成をお願いします。</p><br>
</div>

<h1>お問い合わせフォーム</h1>
<p>お問い合わせ頂きますと、<span style="color: red;">24時間以内</span>に幹事からご返答致します。お急ぎの場合は、ページトップの連絡先までTELお願い致します。</p>
<br>

<form action="" name="" method="post">
<p>
<span>必須</span>
<label for="name">性</label>
<input type="text" name="氏名" id="name">
<label for="name">名</label>
<input type="text" name="氏名" id="name">
</p>
<br>
<p>
<span>必須</span>
<label for="mail">アドレス</label>
<input type="text" mail="アドレス" id="mail">
</p>
<br>
<p>
<span>必須</span>
<label for="name">確認用アドレス</label>
<input type="text" name="確認用アドレス" id="confirm">
</p>
<br>
<p>
<span>必須</span>
<label for="name">性別</label>
<input type="radio" name="氏名" id="name">男性
<input type="radio" name="氏名" id="name">女性
</p>
<br>
<p>
<span>必須</span>
<label for="name">年齢</label>
<input type="text" name="氏名" id="name">歳
</p>
<br>
<p>
<span>必須</span>
<label for="name">お問い合わせ内容</label>
<textarea name="" id="" cols="50" rows="5" value="お問い合わせ内容を記入してください"></textarea>
</p>
<br>
<input type="submit" value="送信">
</form>


@endsection