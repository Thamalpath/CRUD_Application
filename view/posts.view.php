<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>

    <style>
        body {
            background-image: url("https://i.imgur.com/w16HASj.png"); 
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            font-family: sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .title {
            text-align: center;
            font-size: 3rem;
            text-shadow: 2px 2px #000;
            margin-bottom: 30px;
        }
        .post {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            font-size: 18px;
            border-radius: 10px;
            margin-bottom: 25px;
            margin-top: 25px;
            text-align: justify;
            line-height: 1.5;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .btn-add-post {
            background-color: #00c072;
            border: none;
            border-radius: 50px;
            padding: 12px 25px;
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 15px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-add-post:hover {
            background-color: #00965c;
        }

        .btn-edit{
            width: 150px;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: bold;
            background-color: #1f4bf1;
            border: none;
            color: white;
            margin-right: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-edit:hover{
            background-color: #0d2fb2;
        }

        .btn-delete{
            width: 150px;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: bold;
            background-color: #ff2323;
            border: none;
            color: white;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-delete:hover{
            background-color: #d50909;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="<?= $GLOBALS['site_url'] ?>/add" class="btn btn-add-post">Add Post</a>
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h2>
                    <?php echo $post['title']; ?>
                </h2>
                <p>
                    <?php echo $post['post']; ?>
                </p>
                <div>
                    <a href="<?= $GLOBALS['site_url'] ?>/edit/<?php echo $post['id']; ?>" class="btn btn-edit">Edit</a>
                    <a href="<?= $GLOBALS['site_url'] ?>/delete/<?php echo $post['id']; ?>" class="btn btn-delete">Delete</a>
                </div>
            </div>
                
                <hr>
        <?php endforeach; ?>
    </div>
</body>

</html>