


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
        <div class="container-fluid">
            <div class="h3">
                <a class="navbar-brand" href="#">Administration</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Demo_MVC_Simple/btth02v2/views/home/home.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Demo_MVC_Simple/btth02v2/views/category/index_category.php">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Demo_MVC_Simple/btth02v2/views/author/index_author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Demo_MVC_Simple/btth02v2/views/article/index_article.php">Bài viết</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="#" class="text-decoration-none">Người dùng</a>
                        
                        
                    </h5>
                    <h5 class="h1 text-center"><?php echo isset($userCount) ? $userCount : 110; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="#" class="text-decoration-none">Thể loại</a>
                    </h5>
                    <h5 class="h1 text-center"><?php echo isset($categoryCount) ? $categoryCount : 10; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="#" class="text-decoration-none">Tác giả</a>
                    </h5>
                    <h5 class="h1 text-center"><?php echo isset($authorCount) ? $authorCount : 20; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="#" class="text-decoration-none">Bài viết</a>
                    </h5>
                    <h5 class="h1 text-center"><?php echo isset($articleCount) ? $articleCount : 110; ?></h5>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary border-2" style="height:80px">
    <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
