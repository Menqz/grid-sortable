<?php

namespace MenqzAdmin\Admin\GridSortable;

use MenqzAdmin\Admin\Grid\Tools\AbstractTool;

class SaveOrderBtn extends AbstractTool
{
    public function render()
    {
        $text = __('admin.save_order');

        return <<<HTML
<button type="button" class="btn btn-sm btn-primary grid-save-order-btn d-none">
    <i class="icon-save"></i><span class="hidden-xs">&nbsp;&nbsp;{$text}</span>
</button>
HTML;
    }
}
