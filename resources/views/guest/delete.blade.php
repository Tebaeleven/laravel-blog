<x-guest-layout>
<x-slot name="title">ブログ削除</x-slot>

<x-slot name="slot">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1>ブログ削除</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="./create">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="titleIput">タイトル</label>
                        <input type="text" name="title" class="form-control" id="titleInput" readonly value="{{$article->title}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="bodyInput">内容</label>
                        <textarea type="text" name="body" class="form-control" id="bodyInput" rows="8" readonly value="{{$article->title}}">
                    </div>
                    
                    <button class="btn btn-sm btn-outline-secondary" type="submit" value="add" name="add">削除</button>
                    <a href="," class="btn btn-secondary">キャンセル</a>
                </form>
            </div>
        </div>
    </div>
</x-slot>

</x-guest-layout>
