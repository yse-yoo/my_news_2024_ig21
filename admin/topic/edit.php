<?php 
require_once '../../app.php';
?>
<!DOCTYPE html>
<html lang="ja">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">News Edit</h1>
        <form method="POST" action="admin/topic/update.php?id=1" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label class="block text-gray-700">タイトル</label>
                <input type="text" name="title" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">公開ステータス</label>
                <div class="mt-1">
                    <label class="inline-flex items-center">
                        <input type="radio" name="status" value="公開" class="form-radio" checked>
                        <span class="ml-2">公開</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" name="status" value="非公開" class="form-radio">
                        <span class="ml-2">非公開</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">カテゴリー</label>
                <select name="category_id" class="mt-1 p-2 block w-full border">
                    <option value="2">経済</option>
                    <option value="2">エンタメ</option>
                    <option value="2">スポーツ</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">サマリー</label>
                <textarea name="summary" class="mt-1 block p-2 w-full border rounded" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">本文</label>
                <textarea name="content" rows="10" class="mt-1 block p-2 w-full border rounded" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image</label>
                <input type="file" name="image" class="mt-1 block p-2 w-full border rounded" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update</button>
                <a href="admin/topic/" class="text-blue-500 border border-blue-500 py-2 px-4 rounded">Back</a>
            </div>
        </form>
    </div>
</body>

</html>