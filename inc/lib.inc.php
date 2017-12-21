<?php

function drawtable($cols = 10, $rows = 10, $color = '#32CD32') {
    ?>
    <table>
        <?php
        for ($tr = 1; $tr <= $rows; $tr++) {
            ?>
            <tr>
                <?php
                for ($td = 1; $td <= $cols; $td++) {
                    if ($tr == 1 || $td == 1) {
                        ?>
                        <td style = "background: <?php echo $color; ?>; text-align: center;"><?php echo $td * $tr; ?></td>
                        <?php
                    } elseif ($cols % 2 == 0) {
                        ?>
                        <td style = "text-align: center;"><?php echo $td * $tr; ?></td>
                        <?php
                    } else {
                        ?>
                        <td><?php echo $td * $tr; ?></td>
                        <?php
                    }
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
?>

<?php

/**
 * Render horizontal or vertical menu
 * @param array $menu <p>
 * Array with menu items.
 * </p>
 * @param string $vertical <p>
 * The type of rendering
 * </p>
 * @return nothing
 */
function drawMenu($menu = false, $vertical = true) {
    if (!is_array($menu)) { //перед циклом очень желательно проверять массив
        print "Please check if {drawMenu} has an array inside";
        return false;
    }
    ?>
    <ul class="<?php echo!$vertical ? 'horizontal' : ''; ?>">
        <?php
        foreach ($menu as $item) {
            ?>
            <li><a href="<?php echo $item['href']; ?>">
                    <?php echo $item['link']; ?></a></li>
        <?php } ?>
    </ul>
    <?php
}
?>