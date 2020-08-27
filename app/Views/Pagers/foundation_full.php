<?php $pager->setSurroundCount(7) ?>
<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <ul class="pagination list-inline ">
        <div class="d-flex justify-content-around">
            <?php foreach ($pager->links() as $link) : ?>
                <li <?= $link['active'] ? 'class="active"' : '' ?>>
                    <a class="btn btn-primary ml-1 <?= $link['active'] ? 'class="active"' : '' ?>"  id=<?= $link['title'] ?>  href="<?= $link['uri'] ?>">
                        <?= $link['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </div>
    </ul>
</nav>