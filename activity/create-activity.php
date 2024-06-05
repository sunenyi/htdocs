<?php
require_once("../db_connect.php");
$sql = "SELECT * FROM activity_category";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

?>


<!doctype html>
<html lang="en">

<head>
    <title>create-actity</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php include("../css.php") ?>
    <style>
        .test {
            height: 60px;
        }
    </style>
</head>

<body>
    <!-- header、aside -->
    <?php include("../dashboard-comm.php") ?>
    <main class="main-content p-3">
        <div class="container mt-3" style="max-width:72vw;">
            <a class="btn btn-primary " href="activity.php"><i class="fa-solid fa-arrow-left"></i> 回活動列表</a>
            <h1 class="mb-4 mt-4">新增活動</h1>
            <!-- 新增活動表單 ------------------------------------>
            <!-- 新增活動 --------------------->
            <div class="card mb-4">
                <div class="card-body">
                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="eventName" class="form-label">活動名稱</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="eventName" class="form-label">類別</label>
                            <select class="form-select" aria-label="Default select example" name="category">
                                <?php foreach ($rows as $row) : ?>
                                    <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="eventDate" class="form-label">開始日期</label>
                            <input type="date" class="form-control" id="time_s" name="time_s">
                        </div>
                        <div class="mb-3">
                            <label for="eventDate" class="form-label">結束日期</label>
                            <input type="date" class="form-control" id="time_e" name="time_e">
                        </div>
                        <div class="mb-3">
                            <label for="eventLocation" class="form-label">地點</label>
                            <input type="text" class="form-control" id="point" name="point">
                        </div>
                        <div class="mb-3">
                            <label for="eventContent" class="form-label">內容</label>
                            <textarea class="form-control" id="content" name="content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="eventLocation" class="form-label">價格</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="eventPhoto" class="form-label">照片</label>
                            <input type="file" class="form-control" id="img" name="img">
                        </div>
                        <button type="submit" class="btn btn-success">新增</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>