<x-guest-layout>
<x-slot name="title">ブログ新規作成</x-slot>

<x-slot name="slot">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1>ブログ新規作成</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="./create">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="titleIput">タイトル</label>
                        <input type="text" name="title" class="form-control" id="titleInput" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="bodyInput">内容</label>
                        <textarea type="text" name="body" class="form-control" id="bodyInput" rows="8" required></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" value="add" name="add">新規追加</button>
                    <a href="." class="btn btn-secondary">キャンセル</a>
                </form>
            </div>
        </div>
    </div>
</x-slot>

</x-guest-layout>
