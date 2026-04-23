<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            transition: 0.3s;
            border-radius: 12px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .card img {
            height: 220px;
            object-fit: cover;
        }

        .header-title {
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="header-title">📸 Welcome to My Gallery</h2>
        <a href="create.php" class="btn btn-success">+ Create New Post</a>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-4">

        <?php
        include 'config.php';

        $selectDb = "SELECT * FROM `gellery_tb` LIMIT 10";
        $res = $conn->query($selectDb);

        if ($res && $res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
        ?>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">

                <!-- Image -->
                <img src="<?= !empty($row['image']) ? $row['image'] : 'https://i.pinimg.com/1200x/e3/cb/17/e3cb1743e1a6d29b692031b0efca0b3e.jpg' ?>" class="card-img-top">

                <div class="card-body d-flex flex-column">

                    <!-- Title -->
                    <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>

                    <!-- Description -->
                    <p class="card-text text-muted">
                        <?= htmlspecialchars(substr($row['description'], 0, 80)) ?>...
                    </p>

                    <!-- Location -->
                    <p class="mb-1"><strong>📍</strong> <?= htmlspecialchars($row['location']) ?></p>

                    <!-- Mood -->
                    <span class="badge bg-primary mb-3"><?= htmlspecialchars($row['mood']) ?></span>

                    <!-- Buttons -->
                    <div class="mt-auto d-flex justify-content-between">
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-outline-primary btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                    </div>

                </div>
            </div>
        </div>

        <?php
            }
        } else {
            echo "<p>No posts found.</p>";
        }
        ?>

    </div>

</div>

</body>
</html>