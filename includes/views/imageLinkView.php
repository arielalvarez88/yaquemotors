<div id="<?php echo $viewData['containerId']; ?>">
    <a href="<?php echo $viewData['hrefPath']? $viewData['hrefPath'] : '#'; ?>"><img src="<?php echo $viewData['photoPath']; ?>"/></a>

    <?php if (isset($viewData['viewText'])): ?>
        <p>
            <?php echo $viewData['viewText']; ?>
        </p>
    <?php endif; ?>
</div>