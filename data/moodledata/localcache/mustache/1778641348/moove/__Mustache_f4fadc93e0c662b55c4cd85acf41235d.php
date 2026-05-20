<?php

class __Mustache_f4fadc93e0c662b55c4cd85acf41235d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="stash-area-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('canacquireitems');
        $buffer .= $this->section7b4da2c9629f9d8d92d5a2a7343807f2($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('canmanage');
        $buffer .= $this->section29c9454bd0ff6ba357a45863e7f340e5($context, $indent, $value);
        $value = $context->find('canswap');
        $buffer .= $this->section388a8afe52b2396f9b3eef5901bf2197($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('leaderboards_enabled');
        $buffer .= $this->section6d6056494032953cf45d9f05b5ac8006($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section566525be860283d94d60f537f36815d8($context, $indent, $value);

        return $buffer;
    }

    private function section4eb2efc00deda42e1ee04078c5c9852b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>block_stash/user_item}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('block_stash/user_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4505749cc175616ff0b4b5863e2bdb7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'yourinventoryisempty, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'yourinventoryisempty, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b4da2c9629f9d8d92d5a2a7343807f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="item-list">
        {{#items}}
            {{>block_stash/user_item}}
        {{/items}}
        {{^items}}
            <div class="empty-content alert alert-info">{{#str}}yourinventoryisempty, block_stash{{/str}}</div>
        {{/items}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="item-list">
';
                $value = $context->find('items');
                $buffer .= $this->section4eb2efc00deda42e1ee04078c5c9852b($context, $indent, $value);
                $value = $context->find('items');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="empty-content alert alert-info">';
                    $value = $context->find('str');
                    $buffer .= $this->section4505749cc175616ff0b4b5863e2bdb7b($context, $indent, $value);
                    $buffer .= '</div>
';
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section272c1de05580284d192311798ec23945(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/report';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/report';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section132da7e03ba027db12d720f1b81991ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'report, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'report, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfe97ecff5aef38a82f9a53dc3f272fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/settings';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/settings';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b3fa3291c1baec937d788cfc9a14872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'setup, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'setup, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29c9454bd0ff6ba357a45863e7f340e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav>
        <a href="{{reporturl}}" class="nav-button">
            <div>{{#pix}}i/report{{/pix}}</div>
            <div>{{#str}}report, block_stash{{/str}}</div>
        </a>
        <a href="{{inventoryurl}}" class="nav-button">
            <div>{{#pix}}i/settings{{/pix}}</div>
            <div>{{#str}}setup, block_stash{{/str}}</div>
        </a>
    </nav>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <nav>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('reporturl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="nav-button">
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('pix');
                $buffer .= $this->section272c1de05580284d192311798ec23945($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('str');
                $buffer .= $this->section132da7e03ba027db12d720f1b81991ca($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('inventoryurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="nav-button">
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('pix');
                $buffer .= $this->sectionBfe97ecff5aef38a82f9a53dc3f272fb($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('str');
                $buffer .= $this->section0b3fa3291c1baec937d788cfc9a14872($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section360fa77b63b52ba7278a684edb256534(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/emojicategoryactivities';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/emojicategoryactivities';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section184ab53b3f521ce7ed3c645d9a7eb84a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tradecenter, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tradecenter, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ca7c3561f96559872c18620ba0b3cdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="badge badge-danger">{{swapcount}}</span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="badge badge-danger">';
                $value = $this->resolveValue($context->find('swapcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e6e0247d153edee330ccb71e7cfb8c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/email';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/email';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75ed6653788e8990cb6bb66ad4c823e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'offers, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'offers, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section388a8afe52b2396f9b3eef5901bf2197(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<nav>
    <a href="{{tradecenterurl}}" class="nav-button">
        <div>{{#pix}}i/emojicategoryactivities{{/pix}}</div>
        <div>{{#str}}tradecenter, block_stash{{/str}}</div>
    </a>
    <a href="{{offersurl}}" class="nav-button">
        {{#swapcount}}
            <span class="badge badge-danger">{{swapcount}}</span>
        {{/swapcount}}
        <div>{{#pix}}i/email{{/pix}}</div>
        <div>{{#str}}offers, block_stash{{/str}}</div>
    </a>
</nav>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<nav>
';
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('tradecenterurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="nav-button">
';
                $buffer .= $indent . '        <div>';
                $value = $context->find('pix');
                $buffer .= $this->section360fa77b63b52ba7278a684edb256534($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div>';
                $value = $context->find('str');
                $buffer .= $this->section184ab53b3f521ce7ed3c645d9a7eb84a($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('offersurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="nav-button">
';
                $value = $context->find('swapcount');
                $buffer .= $this->section3ca7c3561f96559872c18620ba0b3cdb($context, $indent, $value);
                $buffer .= $indent . '        <div>';
                $value = $context->find('pix');
                $buffer .= $this->section1e6e0247d153edee330ccb71e7cfb8c9($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div>';
                $value = $context->find('str');
                $buffer .= $this->section75ed6653788e8990cb6bb66ad4c823e7($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '</nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section689390fd7a1fdc9ac403b6edc20a5e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'leaderboards, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'leaderboards, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d6056494032953cf45d9f05b5ac8006(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <hr>
    <h5>{{#str}}leaderboards, block_stash{{/str}}</h5>
    {{> block_stash/local/leaderboard_settings/carousel}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <hr>
';
                $buffer .= $indent . '    <h5>';
                $value = $context->find('str');
                $buffer .= $this->section689390fd7a1fdc9ac403b6edc20a5e79($context, $indent, $value);
                $buffer .= '</h5>
';
                if ($partial = $this->mustache->loadPartial('block_stash/local/leaderboard_settings/carousel')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section566525be860283d94d60f537f36815d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'block_stash/stash-area\'
], function($, StashArea) {
    var Area = new StashArea(\'#stash-area-{{id}}\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'block_stash/stash-area\'
';
                $buffer .= $indent . '], function($, StashArea) {
';
                $buffer .= $indent . '    var Area = new StashArea(\'#stash-area-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
