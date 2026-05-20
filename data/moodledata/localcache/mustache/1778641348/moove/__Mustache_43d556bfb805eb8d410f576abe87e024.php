<?php

class __Mustache_43d556bfb805eb8d410f576abe87e024 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="xp-flex xp-mb-6 xp-gap-4">
';
        $buffer .= $indent . '    <div class="xp-grow">
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <';
        $value = $context->find('islevel2');
        $buffer .= $this->section62feb52c363bb955b6822d157567101d($context, $indent, $value);
        $value = $context->find('islevel2');
        if (empty($value)) {
            
            $buffer .= 'h3';
        }
        $buffer .= ' class="xp-m-0">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $value = $context->find('hasvisibility');
        $buffer .= $this->section2d6d1886c40ba930450396a92353a55e($context, $indent, $value);
        $buffer .= $indent . '            </';
        $value = $context->find('islevel2');
        $buffer .= $this->section62feb52c363bb955b6822d157567101d($context, $indent, $value);
        $value = $context->find('islevel2');
        if (empty($value)) {
            
            $buffer .= 'h3';
        }
        $buffer .= '>
';
        $value = $context->find('hasintro');
        $buffer .= $this->section9046d3ca2c955e4c07d61d5649ffa24a($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="xp-flex xp-flex-wrap xp-gap-4 xp-items-start xp-whitespace-nowrap" data-region="block_xp-page_menu">
';
        $value = $context->find('actions');
        $buffer .= $this->sectionAec9e99dfcb6b807af3a96a26858b73e($context, $indent, $value);
        $value = $context->find('hasmenu');
        $buffer .= $this->sectionF6e4a07649ef18ed40e2bf2ab2054c60($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section62feb52c363bb955b6822d157567101d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'h2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'h2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfdc436b68480eafb9eb17327d4f66ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pagecurrentvisibletoviewers, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pagecurrentvisibletoviewers, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section446a472ea9e56824c6a659d0f93bf671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span data-bs-toggle="tooltip" data-toggle="tooltip" class="xp-inline-block xp-text-base xp-leading-none"
                                title="{{#str}} pagecurrentvisibletoviewers, block_xp {{/str}}">
                            <span class="xp-sr-only">{{#str}} pagecurrentvisibletoviewers, block_xp {{/str}}</span>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span data-bs-toggle="tooltip" data-toggle="tooltip" class="xp-inline-block xp-text-base xp-leading-none"
';
                $buffer .= $indent . '                                title="';
                $value = $context->find('str');
                $buffer .= $this->sectionEfdc436b68480eafb9eb17327d4f66ee($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <span class="xp-sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionEfdc436b68480eafb9eb17327d4f66ee($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            <i class="fa fa-eye" aria-hidden="true"></i>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7cf1027b44a142ab0dff49a44030382(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pagecurrentnotvisibletoviewers, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pagecurrentnotvisibletoviewers, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d6d1886c40ba930450396a92353a55e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#isvisible}}
                        <span data-bs-toggle="tooltip" data-toggle="tooltip" class="xp-inline-block xp-text-base xp-leading-none"
                                title="{{#str}} pagecurrentvisibletoviewers, block_xp {{/str}}">
                            <span class="xp-sr-only">{{#str}} pagecurrentvisibletoviewers, block_xp {{/str}}</span>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                    {{/isvisible}}
                    {{^isvisible}}
                        <span data-bs-toggle="tooltip" data-toggle="tooltip" class="xp-inline-block xp-text-base xp-leading-none"
                                title="{{#str}} pagecurrentnotvisibletoviewers, block_xp {{/str}}">
                            <span class="xp-sr-only">{{#str}} pagecurrentnotvisibletoviewers, block_xp {{/str}}</span>
                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    {{/isvisible}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isvisible');
                $buffer .= $this->section446a472ea9e56824c6a659d0f93bf671($context, $indent, $value);
                $value = $context->find('isvisible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <span data-bs-toggle="tooltip" data-toggle="tooltip" class="xp-inline-block xp-text-base xp-leading-none"
';
                    $buffer .= $indent . '                                title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionD7cf1027b44a142ab0dff49a44030382($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                            <span class="xp-sr-only">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionD7cf1027b44a142ab0dff49a44030382($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
';
                    $buffer .= $indent . '                        </span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe0e18dddc18a868e6352b5a4248833b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/help_icon }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9046d3ca2c955e4c07d61d5649ffa24a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="xp-text-sm xp-text-gray-500 xp-mt-2">
                {{ intro }}
                {{#helpicon}}
                    {{> core/help_icon }}
                {{/helpicon}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="xp-text-sm xp-text-gray-500 xp-mt-2">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('intro'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $value = $context->find('helpicon');
                $buffer .= $this->sectionBe0e18dddc18a868e6352b5a4248833b($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAec9e99dfcb6b807af3a96a26858b73e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{.}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB67813afea5d27688087b84fe338663a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'menu, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'menu, block_xp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5dcadd4c046d6ae7246de01cd0536384(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="dropdown-divider"></div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="dropdown-divider"></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6167d4ecab2184536287e4e66fb89746(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled xp-not-italic';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled xp-not-italic';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e96ec75439305fc88c78e77946e47bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6805fd502f1e55bd3a63b02c625bf221(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section177752199755f22ee807d95d4436f6a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="xp-flex-0">
                                {{> block_xp/addon-tag }}
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="xp-flex-0">
';
                if ($partial = $this->mustache->loadPartial('block_xp/addon-tag')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6bb6cce07c5507809d58dbfde32986f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#isdivider}}<div class="dropdown-divider"></div>{{/isdivider}}
                    {{^isdivider}}
                    <a class="dropdown-item
                        {{#disabled}}disabled xp-not-italic{{/disabled}}
                        {{#classes}}{{.}} {{/classes}}"
                        {{#attributes}}{{name}}="{{value}}" {{/attributes}}>
                        <div class="xp-flex xp-w-full xp-gap-2">
                            <div class="xp-grow">
                                {{ label }}
                            </div>
                            {{# addonrequired }}
                            <div class="xp-flex-0">
                                {{> block_xp/addon-tag }}
                            </div>
                            {{/ addonrequired }}
                        </div>
                    </a>
                    {{/isdivider}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $context->find('isdivider');
                $buffer .= $this->section5dcadd4c046d6ae7246de01cd0536384($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('isdivider');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a class="dropdown-item
';
                    $buffer .= $indent . '                        ';
                    $value = $context->find('disabled');
                    $buffer .= $this->section6167d4ecab2184536287e4e66fb89746($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                        ';
                    $value = $context->find('classes');
                    $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                        ';
                    $value = $context->find('attributes');
                    $buffer .= $this->section6805fd502f1e55bd3a63b02c625bf221($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '                        <div class="xp-flex xp-w-full xp-gap-2">
';
                    $buffer .= $indent . '                            <div class="xp-grow">
';
                    $buffer .= $indent . '                                ';
                    $value = $this->resolveValue($context->find('label'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                    $buffer .= $indent . '                            </div>
';
                    $value = $context->find('addonrequired');
                    $buffer .= $this->section177752199755f22ee807d95d4436f6a9($context, $indent, $value);
                    $buffer .= $indent . '                        </div>
';
                    $buffer .= $indent . '                    </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6e4a07649ef18ed40e2bf2ab2054c60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="dropdown">
            <button class="btn btn-link btn-icon icon-size-3 rounded-circle xp-no-underline hover:xp-no-underline" data-bs-toggle="dropdown" data-toggle="dropdown" type="button" aria-expanded="false">
                <i class="fa fa-ellipsis-v text-dark py-2" aria-hidden="true"></i>
                <span class="xp-sr-only">{{#str}}menu, block_xp{{/str}}</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-end">
                {{# menuitems }}
                    {{#isdivider}}<div class="dropdown-divider"></div>{{/isdivider}}
                    {{^isdivider}}
                    <a class="dropdown-item
                        {{#disabled}}disabled xp-not-italic{{/disabled}}
                        {{#classes}}{{.}} {{/classes}}"
                        {{#attributes}}{{name}}="{{value}}" {{/attributes}}>
                        <div class="xp-flex xp-w-full xp-gap-2">
                            <div class="xp-grow">
                                {{ label }}
                            </div>
                            {{# addonrequired }}
                            <div class="xp-flex-0">
                                {{> block_xp/addon-tag }}
                            </div>
                            {{/ addonrequired }}
                        </div>
                    </a>
                    {{/isdivider}}
                {{/ menuitems }}
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="dropdown">
';
                $buffer .= $indent . '            <button class="btn btn-link btn-icon icon-size-3 rounded-circle xp-no-underline hover:xp-no-underline" data-bs-toggle="dropdown" data-toggle="dropdown" type="button" aria-expanded="false">
';
                $buffer .= $indent . '                <i class="fa fa-ellipsis-v text-dark py-2" aria-hidden="true"></i>
';
                $buffer .= $indent . '                <span class="xp-sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionB67813afea5d27688087b84fe338663a($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '            <div class="dropdown-menu dropdown-menu-right dropdown-menu-end">
';
                $value = $context->find('menuitems');
                $buffer .= $this->sectionA6bb6cce07c5507809d58dbfde32986f($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
