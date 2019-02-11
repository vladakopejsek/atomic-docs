

<form action="<?= baseAlias('editComponent', ['compId' => $comp->componentId()]) ?>" method="post" class="ajax-form">

    <input type="hidden" name="action" value="atomic-edit-component">

    <div class="atomic-compBar">
    <div class="atomic-compBarLeft">
        <h2 class="atomic-component__title"><?= $comp->name() ?></h2>

        <div class="atomic-hidden atomic-inline-block">
            <a href="<?= baseAlias('deleteComponent', ['compId' => $comp->componentId()]) ?>" class="material-icons ajax-link delete-comp" data-action="delete-component" onclick="return confirm('Delete Component?');">delete</a>
            <div class="atomic-inline-block">


                <input class="atomic-comp-edit-title" type="text"  name="atomic-comp-name" value="<?= $comp->name() ?>">

                <input class="atomic-colorPicker" type="text" name="atomic-bgColor" value="<?= $comp->backgroundColor() ?>">

                <?php if ($comp->hasJs() != 1): ?>
                    <label class="atomic-compBar__label"><input class="atomic-js-input" type="checkbox" name="atomic-add-js"> Add JS File</label>
                <?php endif; ?>

                <button type="submit" class="btnSimple">save</button>
                <button type="reset" class="btnSimple-alt btnSimple">cancel</button>
            </div>

        </div>


        <div class="atomic-component__actions">


            <a href="#" class="material-icons js-inline-trigger">chevron_right</a>

            <a href="#" title="Full Screen Mode"><i class="material-icons js-atomic-fullscreen-trigger">fullscreen</i></a>



        </div>

    </div>
    <div class="atomic-compBarRight">
        <div class="atomic-dashControls">
            <li>
                <span class="atomic-dimLabel">W:</span> <input class="atomic-compDim-val js-atomic-compWidth-val" type="text" value="100%">
                <span class="atomic-dimDivider">x</span>
                <span class="atomic-dimLabel">H:</span> <input class="atomic-compDim-val js-atomic-compHeight-val" type="text" value="auto" >
            </li>
            <li><a href="#" class="js-atomic-dashControl" data-atomicwidth="100%"><i class="fa fa-desktop" aria-hidden="true"></i></a></li>
            <li><a href="#" class="js-atomic-dashControl" data-atomicwidth="768px"><i class="fa fa-tablet" aria-hidden="true"></i></a></li>
            <li><a href="#" class="js-atomic-dashControl" data-atomicwidth="375px"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
        </div>
    </div>
</div>
</form>
