<?php

class __Mustache_366f425a458d7b317c7d159f6126e064 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('useritem.quantity');
        $buffer .= $this->sectionBc9fe3588a399a7a0c33cebe2579f787($context, $indent, $value);

        return $buffer;
    }

    private function sectionBc9fe3588a399a7a0c33cebe2579f787(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="block-stash-item item-small item-quantity-{{useritem.quantity}}" title="{{item.name}}" data-id="{{item.id}}">
    <div class="item-image" style="background-image: url({{item.imageurl}});">
        <div class="item-quantity">{{useritem.quantity}}</div>
        <div class="item-label">{{item.name}}</div>
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="block-stash-item item-small item-quantity-';
                $value = $this->resolveValue($context->findDot('useritem.quantity'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->findDot('item.name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-id="';
                $value = $this->resolveValue($context->findDot('item.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '    <div class="item-image" style="background-image: url(';
                $value = $this->resolveValue($context->findDot('item.imageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');">
';
                $buffer .= $indent . '        <div class="item-quantity">';
                $value = $this->resolveValue($context->findDot('useritem.quantity'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="item-label">';
                $value = $this->resolveValue($context->findDot('item.name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
