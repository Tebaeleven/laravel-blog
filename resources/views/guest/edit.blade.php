<x-guest-layout>
<x-slot name="title">ブログ修正</x-slot>

<x-slot name="slot">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1>ブログ修正</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="./change">
                    @csrf
                    <input type="hidden" name="change_id" value="{{$article->id}}">
                    <div class="form-group mb-3">
                        <label for="titleIput">タイトル</label>
                        <input type="text" name="title" class="form-control" id="titleInput" value="{{$article->title}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="bodyInput">内容</label>
                        <textarea type="text" name="body" class="form-control" id="bodyInput" rows="8" required>{{$article->body}}</textarea>
                    </div>
                    
                    <button class="btn btn-primary" type="save" value="save" name="save">編集保存</button>
                    <a href="./" class="btn btn-secondary">キャンセル</a>
                </form>
            </div>
        </div>
    </div>
</x-slot>

</x-guest-layout>
