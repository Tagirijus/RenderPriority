<?php

namespace Kanboard\Plugin\RenderPriority\Helper;

use Kanboard\Helper\TaskHelper as CoreTaskHelper;

class TaskHelperMod extends CoreTaskHelper
{
    /**
     * Overwrite some methods.
     *
     * @param  int  $priority
     * @return string
     */
    public function renderPriority($priority)
    {
        $html = '<span class="task-priority" title="'.t('Task priority').': '.$priority.'">';
        $html .= '<span class="ui-helper-hidden-accessible">'.t('Task priority').' </span>';
        $html .= '<p style="display:inline; font-weight:bold;">';
        $html .= $this->helper->text->e($priority > 0 ? str_repeat('❗', $priority) : '');
        $html .= '</p>';
        $html .= '</span>';

        return $html;
    }
}
