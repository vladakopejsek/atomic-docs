<div class="atomic-pageBarWrap">
    <div class="atomic-pageBar">
        <div class="atomic-pageBar__item atomic-pageBar__left">

            <h1 class="atomic-catTitle"><?= $dirPath.PHP_EOL ?>



                <a href="<?= $editLink ?>" class="material-icons ajax-link" data-target="panel">settings</a>
                <?php if ($isSubCat==false): ?>
                    <a href="<?= $addSubCatLink ?>" class="material-icons ajax-link" data-target="panel">create_new_folder</a>
                <?php endif; ?>
                <a href="<?= $addCompLink ?>" class="material-icons ajax-link" data-target="onpage">note_add</a>

                <a href="<?= $deleteCategory ?>" class="material-icons ajax-link" data-action="delete-category">delete</a>

            </h1>


                <!--<input type="text" class="atomic-catSearch atomic-input" value="test-one">-->


        </div>
        <div class="atomic-pageBar__item atomic-pageBar__right">
            <ul class="atomic-dashControls">
                <li>
                    <span class="atomic-dimLabel">W:</span> <input class="atomic-compDim-val js-atomic-compWidth-val" type="text" value="100%">
                    <span class="atomic-dimDivider">x</span>
                    <span class="atomic-dimLabel">H:</span> <input class="atomic-compDim-val js-atomic-compHeight-val" type="text" value="auto">
                </li>
                <li><a href="#" class="js-atomic-dashControl" data-atomicwidth="100%"><i class="fa fa-desktop" aria-hidden="true"></i></a></li>
                <li><a href="#" class="js-atomic-dashControl" data-atomicwidth="768px"><i class="fa fa-tablet" aria-hidden="true"></i></a></li>
                <li><a href="#" class="js-atomic-dashControl" data-atomicwidth="375px"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
            </ul>
        </div>

    </div>


</div>