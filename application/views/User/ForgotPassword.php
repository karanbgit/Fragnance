<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Bottle Cards</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* General styling for bottle cards */
        .bottle-card {
            width: 100%;
            border: 2px solid #ccc;
            border-radius: 15px;
            overflow: hidden;
            padding: 20px;
            text-align: center;
            background: linear-gradient(to bottom, #f5f5f5, #eaeaea);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        /* Top part of the bottle */
        .bottle-top {
            width: 50px;
            height: 20px;
            background: #ccc;
            border-radius: 10px 10px 0 0;
            margin: 0 auto -10px auto;
            position: relative;
            z-index: 2;
        }

        /* Bottle label for the card content */
        .bottle-label {
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            margin-top: 20px;
        }

        /* Button styling */
        .btn-perfume {
            margin-top: 15px;
            background-color: #8c7ae6;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <!-- Perfume Bottle Card 1 -->
            <div class="col-md-4">
                <div class="bottle-card">
                    <div class="bottle-top"></div>
                    <div class="bottle-label">
                        <img src="<?php echo base_url('assets/images/Luxury/Luxury_1-min.jpg'); ?>" class="img-fluid mb-3" alt="Perfume 1">
                        <h5 class="card-title">Mystique Essence</h5>
                        <p class="card-text">A floral, fresh fragrance that captures the essence of mystery and
                            elegance.</p>
                        <button class="btn btn-perfume">Explore</button>
                    </div>
                </div>
            </div>

            <!-- Perfume Bottle Card 2 -->
            <div class="col-md-4">
                <div class="bottle-card">
                    <div class="bottle-top"></div>
                    <div class="bottle-label">
                        <img src="<?php echo base_url('assets/images/Luxury/Luxury_1-min.jpg'); ?>" class="img-fluid mb-3"
                            alt="Perfume 2">
                        <h5 class="card-title">Amber Glow</h5>
                        <p class="card-text">A warm, spicy scent that brings a touch of enchantment to your style.</p>
                        <button class="btn btn-perfume">Discover</button>
                    </div>
                </div>
            </div>

            <!-- Perfume Bottle Card 3 -->
            <div class="col-md-4">
                <div class="bottle-card">
                    <div class="bottle-top"></div>
                    <div class="bottle-label">
                        <img src="<?php echo base_url('assets/images/Luxury/Luxury_1-min.jpg'); ?>" class="img-fluid mb-3" alt="Perfume 3">
                        <h5 class="card-title">Ocean Breeze</h5>
                        <p class="card-text">An invigorating, ocean-inspired fragrance that refreshes the senses.</p>
                        <button class="btn btn-perfume">Shop Now</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>