<?php

class __Mustache_344ff1ec79cf13dce1a429f14cdbf532 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <label for="xp-table-filter-term-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="xp-sr-only">';
        $blockFunction = $context->findInBlock('label');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('label'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '</label>
';
        $buffer .= $indent . '    <input type="text"
';
        $buffer .= $indent . '    id="xp-table-filter-term-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    class="form-control"
';
        $buffer .= $indent . '    placeholder="';
        $blockFunction = $context->findInBlock('label');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('label'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '"
';
        $buffer .= $indent . '    name="term"
';
        $buffer .= $indent . '    autocomplete="off"
';
        $buffer .= $indent . '    value="';
        $value = $this->resolveValue($context->find('term'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
