            <button class="c-menu">Menu</button>
            <div class="p-sidebar">
                <h2 class="c-menu-pc">Menu</h2>
                <span class="c-close">×</span>
                <?php if(is_active_sidebar('sidebar-1')): ?>
            <?php dynamic_sidebar('sidebar-1'); ?>
        <?php endif; ?>
            </div>
        