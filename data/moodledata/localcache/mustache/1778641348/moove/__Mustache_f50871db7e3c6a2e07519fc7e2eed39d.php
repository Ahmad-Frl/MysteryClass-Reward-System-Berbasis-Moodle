<?php

class __Mustache_f50871db7e3c6a2e07519fc7e2eed39d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('block_xp/table/filters')) {
            $context->pushBlockContext(array(
                'fields' => array($this, 'blockF83677af09dc1ee11941e4073d1c38d0'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section9e9860a2e8e4201bde1a0883c70f9bd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' filterparticipants, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' filterparticipants, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block9b4d974b1d7f3f4fca1b22c97b08ae1b($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section9e9860a2e8e4201bde1a0883c70f9bd9($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF83677af09dc1ee11941e4073d1c38d0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('block_xp/table/filter-term')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block9b4d974b1d7f3f4fca1b22c97b08ae1b'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
    
        return $buffer;
    }
}
