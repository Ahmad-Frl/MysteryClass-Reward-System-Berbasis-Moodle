<?php

class __Mustache_3da87f38e6820d1e38b48e39c1f1648e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card mb-1">
';
        $buffer .= $indent . '    <div class="card-body">
';
        $buffer .= $indent . '        <h4 class="card-title">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '        <div class="ml-3">
';
        $buffer .= $indent . '            <div class="row custom-control custom-switch">
';
        $buffer .= $indent . '                <input type="checkbox" class="block_stash-leaderboard custom-control-input"
';
        $buffer .= $indent . '                    id="cS-leaderboard-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-location="';
        $value = $this->resolveValue($context->find('location'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                    ';
        $value = $context->find('active');
        $buffer .= $this->section25e895a0170cc257c11d44da2c2ee27c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                >
';
        $buffer .= $indent . '                <label class="custom-control-label" for="cS-leaderboard-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">Enable</label>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('optionshtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <input type="hidden" name="leaderboard-options-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-options="">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '                <label class="form-label">Results limit</label>
';
        $buffer .= $indent . '                <div class="col-sm-1">
';
        $buffer .= $indent . '                    <input type="number" class="block_stash_change_element block_stash-leaderboard-limit form-control" min="1" value="';
        $value = $this->resolveValue($context->find('rowlimit'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                        ';
        $value = $context->find('active');
        if (empty($value)) {
            
            $buffer .= 'disabled';
        }
        $buffer .= '
';
        $buffer .= $indent . '                    />
';
        $buffer .= $indent . '                </div>
';
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

    private function section25e895a0170cc257c11d44da2c2ee27c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
