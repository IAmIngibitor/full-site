<?php
    include('tpl/header.php');
    include('tpl/nav.php');
?>
<main class="flex">
    <div class="row">
        <div class="col">
            Актуальная информация о туре:
        </div>
    </div>
    <div class="container-fluid">
        <?php
            include('dbconnect.php');

            $label = 'id';
            $id = false;

            if (!empty($_GET[$label])) {
                $id = $_GET[$label];
            }

            $result = $mysqli->query("SELECT * FROM tours WHERE id = '$id'");
            $myrow = $result->fetch_assoc();

            $div = '<div class = "row">';
            $div .= '<div class = "col"><div class = "country">';
            $id = $myrow['id'];
            $div .= '<img src = '.$myrow['photo'].'>';
            $div .= '<p>'.$myrow['name'].'</p>';
            $div .= '<p>'.$myrow['programm'].'</p>';
            $div .= '</div></div>';
            $div .= '</div>';

            echo $div;
        ?>
    </div>
</main>
<?php
    include('tpl/footer.php');
?>