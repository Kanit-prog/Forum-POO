<div>
    <div class="list-group">
        <nav class="navbar_category">
            <ul class="nav navbar-inverse"></ul>
            <h2>Catégories</h2>
            <div>

                <?php
                foreach ($data['category'] as $category) {
                    $nomcategorie = $category->getNomcategorie();
                    $descriptioncat = $category->getDescriptioncat();

                    echo '<a href=?ctrl=home&method=detailCategory&id=' . $nomcategorie . '>'
                        . $nomcategorie . '</a></div><table class ="table-cat">

                                                     <thead>
                                                     <tr></tr>
                                                     </thead>
                                                     
                                                     <tbody>
                                                     <td>' . $descriptioncat . '</td>
                                                     </tbody>

                                                     </table>';
                }
                ?>

            </div>

        </nav>

    </div>
</div>

<!-- <div class="cat_list">
    <?php
    foreach ($data["category"] as $cat) {
        echo $cat->getNomcategorie();
        echo $cat->getDescriptioncat();
    }
    ?>
</div> -->