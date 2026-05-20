<?php

class __Mustache_b75658996de5861562d25abe920c69e2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="xp-my-4">
';
        $buffer .= $indent . '    <form action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="get">
';
        $value = $context->find('hiddenfields');
        $buffer .= $this->sectionAf0d507395d8436b1439c6b1ad1a6278($context, $indent, $value);
        $buffer .= $indent . '        <div class="xp-flex xp-gap-2 xp-flex-wrap md:xp-flex-nowrap">
';
        $blockFunction = $context->findInBlock('fields');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <button type="submit" class="btn btn-secondary">';
        $value = $context->find('str');
        $buffer .= $this->section5f6ad7ee12580b428034bc36ea2d8ad8($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionAf0d507395d8436b1439c6b1ad1a6278(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <input type="hidden" name="{{ name }}" value="{{ value }}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f6ad7ee12580b428034bc36ea2d8ad8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' apply, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' apply, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
