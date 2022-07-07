@if (count($errors)>0)
<!-- フォームのエラーリスト -->
<div class="alert alert-danger">
    <strong>エラー発生中、エラー発生中。</strong>

    <br><br>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif