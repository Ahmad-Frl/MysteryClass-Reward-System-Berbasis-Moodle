<?php

class __Mustache_a293854c0f0923b4ebac07a9c2f163d6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('uuid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" style="display: ';
        $value = $context->find('checkvisibility');
        $buffer .= $this->section3c3ca954d361e33d388cf608d356b919($context, $indent, $value);
        $value = $context->find('checkvisibility');
        if (empty($value)) {
            
            $buffer .= 'inline';
        }
        $buffer .= ';">
';
        $buffer .= $indent . '    <div class="block-stash-item">
';
        $buffer .= $indent . '        ';
        $value = $context->find('actiontext');
        if (empty($value)) {
            
            $buffer .= '<a href="#">';
        }
        $buffer .= '
';
        $buffer .= $indent . '        <div class="item-image" style="background-image: url(';
        $value = $this->resolveValue($context->findDot('drop.item.imageurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ');">
';
        $buffer .= $indent . '            <div class="item-label" title="';
        $value = $this->resolveValue($context->findDot('drop.item.name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->findDot('drop.item.name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        ';
        $value = $context->find('actiontext');
        if (empty($value)) {
            
            $buffer .= '</a>';
        }
        $buffer .= '
';
        $value = $context->find('actiontext');
        $buffer .= $this->sectionBf735f2b5872893a931373cb49eddc33($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section1cba371593f6c3a61df01623d2b2a889($context, $indent, $value);

        return $buffer;
    }

    private function section3c3ca954d361e33d388cf608d356b919(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'none';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'none';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf735f2b5872893a931373cb49eddc33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="item-action">
                <button class="btn btn-secondary">{{.}}</button>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="item-action">
';
                $buffer .= $indent . '                <button class="btn btn-secondary">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</button>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe846c850bd524c7b18099fc02f04d44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    d.isVisible().then(function() {
        n.css(\'display\', \'inline\');
    });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    d.isVisible().then(function() {
';
                $buffer .= $indent . '        n.css(\'display\', \'inline\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cba371593f6c3a61df01623d2b2a889(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(["jquery", "block_stash/drop"], function($, D) {
    var d = new D({id: {{drop.id}}, hashcode: \'{{drop.hashcode}}\'}),
        n = $("#{{uuid}}");

    if (!n.length) return;

    {{#checkvisibility}}
    d.isVisible().then(function() {
        n.css(\'display\', \'inline\');
    });
    {{/checkvisibility}}

    n.find("a, button").click(function(e) {
        e.preventDefault();
        d.pickup();
        n.remove();
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(["jquery", "block_stash/drop"], function($, D) {
';
                $buffer .= $indent . '    var d = new D({id: ';
                $value = $this->resolveValue($context->findDot('drop.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', hashcode: \'';
                $value = $this->resolveValue($context->findDot('drop.hashcode'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'}),
';
                $buffer .= $indent . '        n = $("#';
                $value = $this->resolveValue($context->find('uuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    if (!n.length) return;
';
                $buffer .= $indent . '
';
                $value = $context->find('checkvisibility');
                $buffer .= $this->sectionCe846c850bd524c7b18099fc02f04d44($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    n.find("a, button").click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        d.pickup();
';
                $buffer .= $indent . '        n.remove();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
