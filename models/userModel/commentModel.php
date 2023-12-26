<?php
    function insert__comment($userId,$productId,$content) {
        $sql = "INSERT INTO `comments`(`user_id`, `product_id`, `content`) 
                VALUES 
                ('$userId','$productId','$content')";
        pdo_execute($sql);
    }

    function loadall__comment__Byid($idproduct) {
        $sql = "SELECT
                    comments.comment_id,
                    comments.user_id,
                    comments.product_id,
                    comments.content,
                    comments.create_at,
                    users.id,
                    users.name,
                    users.email
                FROM
                    comments
                INNER JOIN
                    users ON comments.user_id = users.id
                INNER JOIN
                    products ON comments.product_id = products.id_product
                WHERE
                    products.id_product = $idproduct
        ";
        return pdo_query($sql);
    }
?>