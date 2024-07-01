<?php require_once '../../app.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php include('../../components/admin_head.php') ?>

<body class="bg-gray-100">
    <?php include('../../components/admin_nav.php') ?>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">News List</h1>
        <div class="mt-3 mb-3">
            <a href="admin/topic/input.php" class="bg-blue-500 text-white py-2 px-4 rounded">New</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-2 px-4 text-left"></th>
                        <th class="py-2 px-4 text-left">タイトル</th>
                        <th class="py-2 px-4 text-left">配信日</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4"><a href="admin/topic/edit.php?id=1" class="text-blue-500 hover:underline">Edit</a></td>
                        <td class="py-2 px-4">スニーカーバブル崩壊　ナイキ2025年度は予想外の減収の見通し、時価総額4兆円吹き飛ぶ</td>
                        <td class="py-2 px-4">2024/07/01 12:00</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4"><a href="admin/topic/edit.php?id=1" class="text-blue-500 hover:underline">Edit</a></td>
                        <td class="py-2 px-4">スニーカーバブル崩壊　ナイキ2025年度は予想外の減収の見通し、時価総額4兆円吹き飛ぶ</td>
                        <td class="py-2 px-4">2024/07/01 12:00</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4"><a href="admin/topic/edit.php?id=1" class="text-blue-500 hover:underline">Edit</a></td>
                        <td class="py-2 px-4">スニーカーバブル崩壊　ナイキ2025年度は予想外の減収の見通し、時価総額4兆円吹き飛ぶ</td>
                        <td class="py-2 px-4">2024/07/01 12:00</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4"><a href="admin/topic/edit.php?id=1" class="text-blue-500 hover:underline">Edit</a></td>
                        <td class="py-2 px-4">スニーカーバブル崩壊　ナイキ2025年度は予想外の減収の見通し、時価総額4兆円吹き飛ぶ</td>
                        <td class="py-2 px-4">2024/07/01 12:00</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4"><a href="admin/topic/edit.php?id=1" class="text-blue-500 hover:underline">Edit</a></td>
                        <td class="py-2 px-4">スニーカーバブル崩壊　ナイキ2025年度は予想外の減収の見通し、時価総額4兆円吹き飛ぶ</td>
                        <td class="py-2 px-4">2024/07/01 12:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>