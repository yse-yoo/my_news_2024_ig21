<?php
require_once 'app.php';
?>

<!DOCTYPE html>
<html lang="ja">

<?php include(COMPONENT_DIR . 'head.php') ?>

<body class="bg-gray-100">
    <?php include(COMPONENT_DIR . 'nav.php') ?>

    <main class="container mx-auto px-4 py-8">
        <section class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4"><?= SITE_TITLE ?></h2>
            <p class="text-gray-600"></p>
        </section>

        <section class="mb-3">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
                <a href="topic/">ナイキ時価総額 4兆円超吹き飛ぶ</a>
            </h3>
            <img src="./images/topics/1.png" alt="">
            <p class="py-3">スニーカーバブル崩壊　ナイキ2025年度は予想外の減収の見通し、時価総額4兆円吹き飛ぶ</p>
            <p class="text-xs text-right">2024/07/01 12:00</p>
        </section>

        <h3 class="text-2xl font-bold text-gray-800 mb-6">ヘッドライン</h3>
        <section id="topic-list" class="">
            <div class="bg-white rounded-lg shadow-md p-4">
                <ul>
                    <li>
                        <a href="detail.php?id=1" class="text-blue-500">能登に迫る酷暑 今も2000人超避難</a>
                    </li>
                    <li>
                        <a href="detail.php?id=2" class="text-blue-500">中国で反日投稿規制 邦人襲撃受け</a>
                    </li>
                    <li>
                        <a href="detail.php?id=3" class="text-blue-500">三菱UFJ銀 法人用でシステム障害</a>
                    </li>
                    <li>
                        <a href="detail.php?id=4" class="text-blue-500">6袋1480円のポテチ販売 猛反対も</a>
                    </li>
                    <li>
                        <a href="detail.php?id=5" class="text-blue-500">風で無人ベビーカー落下 電車接触</a>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>