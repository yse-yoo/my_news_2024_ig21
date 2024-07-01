<?php
include '../app.php';
?>
<!DOCTYPE html>
<html lang="ja">

<?php include(COMPONENT_DIR . 'head.php') ?>


<body class="bg-gray-100">
    <?php include(COMPONENT_DIR . 'nav.php') ?>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8">News List</h1>
        <div id="topic-list" class="">
            <div class="bg-white rounded-lg shadow-md p-4">
                <ul>
                    <li>
                        <a href="topic/detail.php?id=1" class="text-blue-500">能登に迫る酷暑 今も2000人超避難</a>
                    </li>
                    <li>
                        <a href="topic/detail.php?id=2" class="text-blue-500">中国で反日投稿規制 邦人襲撃受け</a>
                    </li>
                    <li>
                        <a href="topic/detail.php?id=3" class="text-blue-500">三菱UFJ銀 法人用でシステム障害</a>
                    </li>
                    <li>
                        <a href="topic/detail.php?id=4" class="text-blue-500">6袋1480円のポテチ販売 猛反対も</a>
                    </li>
                    <li>
                        <a href="topic/detail.php?id=5" class="text-blue-500">風で無人ベビーカー落下 電車接触</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>