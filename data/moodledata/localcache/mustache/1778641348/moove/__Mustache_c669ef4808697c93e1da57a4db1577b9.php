<?php

class __Mustache_c669ef4808697c93e1da57a4db1577b9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block_xp">
';
        $buffer .= $indent . '    <a ';
        $value = $context->find('linkurl');
        $buffer .= $this->section0add17126a68fa7982d3a05d1310bba2($context, $indent, $value);
        $buffer .= ' class="xp-px-2 xp-flex xp-h-full xp-items-center xp-justify-end xp-no-underline [&_.block\\_xp-level]:xp-mx-0">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('badgehtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section0add17126a68fa7982d3a05d1310bba2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'href="{{ . }}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
