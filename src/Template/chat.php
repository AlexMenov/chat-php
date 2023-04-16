<body style="background-color: <?= $theme ?>">
<?php
if ($is_logged_in) {
    foreach ($messages as $value) {
        echo "
                    <p>{$value['login']}</p>
                    <p>{$value['message']}</p>
                    <p>" . date('d.m.Y H:i:s', $value['message_time']) . "</p>
                ";
    }
    echo "
                <form action='index.php' method='post'>
                    <input type='text' name='user_message'>
                    <button type='submit'>Send</button>
                </form>
            ";
}
?>
<!--<script src="script.js"></script>-->
</body>
