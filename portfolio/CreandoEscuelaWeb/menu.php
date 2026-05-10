<?php
    include "menu_controller.php";
?>

    <nav class="navbar">
        <ul class="nav_links">

    <?php
        foreach($items_menu as $item):

            if($item["submenu"] != ""):
    ?>

    <!-- MENU CON SUBMENUS -->
            <li class="">
            <a class="" href="<?php echo $item["enlace"] ?>" id="">
            <?php echo $item["texto"] ?>
            </a>
            <ul class="dropdown-menu">
                <?php
                    foreach($item["submenu"] as $item):
                ?>
                    <li class="dropdown_menu-submenu"><a class="dropdown-item" href="<?php echo $item["enlace"] ?>" ><?php echo $item["texto"] ?></a></li>
                
                <?php
                 endforeach;
                ?>  

                </ul>
            </li>

        <?php
            else:
        ?>
            <li class="">
            <a class="" href="<?php echo $item["enlace"] ?>" ><?php echo $item["texto"] ?></a>
            </li>


    <?php
            endif;
        endforeach;
    ?>

    

        </ul>
    </div>
    </nav>

    