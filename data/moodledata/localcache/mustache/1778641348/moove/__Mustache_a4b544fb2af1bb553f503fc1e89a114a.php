<?php

class __Mustache_a4b544fb2af1bb553f503fc1e89a114a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('badgeurl');
        $buffer .= $this->section7ad60b11aa05058a8c7b520b4b24e908($context, $indent, $value);
        $value = $context->find('badgeurl');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="block_xp-level level-';
            $value = $this->resolveValue($context->find('level'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' ';
            $blockFunction = $context->findInBlock('size');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                $value = $this->resolveValue($context->find('size'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            }
            $buffer .= '" aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section508626461ce115402ec9235a491d302c($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('level'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '
';
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function section508626461ce115402ec9235a491d302c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' levelx, block_xp, {{ level }} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' levelx, block_xp, ';
                $value = $this->resolveValue($context->find('level'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ad60b11aa05058a8c7b520b4b24e908(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="block_xp-level level-{{level}} {{$size}}{{size}}{{/size}} level-badge" aria-label="{{#str}} levelx, block_xp, {{ level }} {{/str}}">
    <img src={{ badgeurl }} alt="{{#str}} levelx, block_xp, {{ level }} {{/str}}">
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="block_xp-level level-';
                $value = $this->resolveValue($context->find('level'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $blockFunction = $context->findInBlock('size');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $value = $this->resolveValue($context->find('size'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                }
                $buffer .= ' level-badge" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section508626461ce115402ec9235a491d302c($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '    <img src=';
                $value = $this->resolveValue($context->find('badgeurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' alt="';
                $value = $context->find('str');
                $buffer .= $this->section508626461ce115402ec9235a491d302c($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
