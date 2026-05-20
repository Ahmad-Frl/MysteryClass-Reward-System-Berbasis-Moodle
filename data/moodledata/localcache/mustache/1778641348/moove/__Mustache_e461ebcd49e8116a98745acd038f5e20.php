<?php

class __Mustache_e461ebcd49e8116a98745acd038f5e20 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="starred-courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '     data-region="starred-courses-view"
';
        $buffer .= $indent . '     data-nocoursesimg="';
        $value = $this->resolveValue($context->find('nocoursesimg'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div data-region="starred-courses-view-content">
';
        $buffer .= $indent . '        <div data-region="starred-courses-loading-placeholder">
';
        $buffer .= $indent . '            <div class="card-deck dashboard-card-deck one-row" style="height: 11.1rem">
';
        if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
