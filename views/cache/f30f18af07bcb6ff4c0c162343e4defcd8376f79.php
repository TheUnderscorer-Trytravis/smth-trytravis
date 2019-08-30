<?php
/**
 * @var WPK\Modules\HooksDisplay\Utils\HookDetails $hook
 */
?>
<div class="smth-hook <?php echo e($hook->getType()); ?>">
    <span class="smth-tag">
        <?php echo e($tag); ?>

    </span>
    <button class="button button-secondary smth-activator">
        <span>
            ⯈
        </span>
    </button>
    <ul class="smth-hook-details smth-hidden">
        <li class="smth-type">
            <strong>Type: </strong>
            <span><?php echo e($hook->getType()); ?></span>
        </li>
        <li class="smth-args">
            <strong>
                Args:
            </strong>
            <span>
                <?php echo json_encode($hook->getArgs(), 15, 512) ?>
            </span>
        </li>
        <li class="smth-location">
            <strong>
                Location:
            </strong>
            <span>
                <?php echo e($hook->getLocation()); ?>

            </span>
        </li>
    </ul>
</div>
<?php /**PATH /var/www/html/wp-content/plugins/smth/views/hook.blade.php ENDPATH**/ ?>