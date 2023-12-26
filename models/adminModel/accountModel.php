<?php
    function list_account() {
        $sql = "SELECT * FROM users WHERE 1 ORDER BY id DESC";
        return pdo_query($sql);
    }

    function loadall__comment__Byid() {
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
                WHERE 1
                    ORDER BY comments.comment_id DESC
        ";
        return pdo_query($sql);
    }

    function deleteComment($id) {
        $sql = "DELETE FROM comments WHERE comment_id = ?";
        pdo_execute($sql,$id);
    }

    function deleteAccount($id) {
        $sql = "DELETE FROM users WHERE id = ?";
        pdo_execute($sql,$id);
    }
?>