<?php

class __Mustache_b52f6f77a4e7f42c23e8da9ea75671ff extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="card mb-5">
';
        $buffer .= $indent . '        <div class="card-body">
';
        $buffer .= $indent . '            <h4 class="card-title">';
        $value = $context->find('str');
        $buffer .= $this->sectionAbf18c0cb5fcfc12cef19150197495cf($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <div class="custom-control custom-switch">
';
        $buffer .= $indent . '                    <input type="checkbox" class="block-stash-lbsetting custom-control-input" id="cS-leaderboard"
';
        $buffer .= $indent . '                        data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('lbenabled');
        $buffer .= $this->section25e895a0170cc257c11d44da2c2ee27c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    >
';
        $buffer .= $indent . '                    <label class="custom-control-label" for="cS-leaderboard">';
        $value = $context->find('str');
        $buffer .= $this->section31a1ce61649098fca96e5aed882b2ecf($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="custom-control custom-switch mt-2">
';
        $buffer .= $indent . '                    <input type="checkbox" class="block-stash-lbgroups custom-control-input" id="cS-leaderboard-groups"
';
        $buffer .= $indent . '                        data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('lbgroups');
        $buffer .= $this->section25e895a0170cc257c11d44da2c2ee27c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    >
';
        $buffer .= $indent . '                    <label class="custom-control-label" for="cS-leaderboard-groups">';
        $value = $context->find('str');
        $buffer .= $this->section1042de7ef3e923060cdb4c36d4c8e4ed($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="block_stash_lb_cards ';
        $value = $context->find('lbenabled');
        if (empty($value)) {
            
            $buffer .= 'invisible';
        }
        $buffer .= '">
';
        $value = $context->find('boards');
        $buffer .= $this->sectionD4eb7c1d055c741cae0d2d7e74119c13($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionAbf18c0cb5fcfc12cef19150197495cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'generalsettings, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'generalsettings, block_stash';
                $context->pop();
            }
        }
    
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

    private function section31a1ce61649098fca96e5aed882b2ecf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'leaderboard, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'leaderboard, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1042de7ef3e923060cdb4c36d4c8e4ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'leaderboard_groups, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'leaderboard_groups, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4eb7c1d055c741cae0d2d7e74119c13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> block_stash/local/leaderboard_settings/leaderboard_cards}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('block_stash/local/leaderboard_settings/leaderboard_cards')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
