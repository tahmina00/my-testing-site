<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Times Tables in Two Rows (Bootstrap 5.3 Version)</title>
  <!-- Bootstrap 5.3 CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .table-card {
      transition: transform 0.3s;
    }
    .table-card:hover {
      transform: scale(1.03);
    }
    .table-card h5 {
      border-bottom: 2px solid rgba(255, 255, 255, 0.5);
      padding-bottom: 5px;
      margin-bottom: 15px;
    }
  </style>
</head>
<body class="bg-light py-4">

<div class="container">
  <div class="row g-4 justify-content-center">

    <?php
    $colors = [
        "#e57373", "#f06292", "#ba68c8", "#9575cd",
        "#7986cb", "#64b5f6", "#4dd0e1", "#4db6ac"
    ];

    for ($i = 1; $i <= 8; $i++): ?>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card table-card text-center text-white" style="background-color: <?= $colors[$i - 1] ?>;">
          <div class="card-body">
            <h5 class="card-title">Table of <?= $i ?></h5>
            <?php for ($j = 1; $j <= 10; $j++): ?>
              <p class="card-text mb-1"><?= "{$i} × {$j} = " . ($i * $j) ?></p>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    <?php endfor; ?>

  </div>
</div>

<!-- Bootstrap 5.3 JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
