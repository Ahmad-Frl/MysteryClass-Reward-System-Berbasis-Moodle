<?php

class __Mustache_eb284b562378e8bc820c3c9f82fe66b9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="block-stash-snippet-ui-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="block-stash-snippet-ui">
';
        $buffer .= $indent . '    <div style="display: flex">
';
        $buffer .= $indent . '        <div style="flex: 2">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <label for="label-displaytype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section9526729485c82161435936c6b42f516c($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <select name="displaytype" id="label-displaytype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-control">
';
        $buffer .= $indent . '                        <option value="text">';
        $value = $context->find('str');
        $buffer .= $this->section0cd84d2a06788106f846fe2ed02e9d2b($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                        <option value="image">';
        $value = $context->find('str');
        $buffer .= $this->sectionA53539b3f6ae70bc54c052557805ce46($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                        <option value="imageandbutton" selected>';
        $value = $context->find('str');
        $buffer .= $this->sectionF6d2aedd6d053f0ebb397f75b86c6030($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="snippet-label">
';
        $buffer .= $indent . '                <label for="label-label-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section0cd84d2a06788106f846fe2ed02e9d2b($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <input type="text" name="label" class="form-control" id="label-label-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="snippet-actiontext">
';
        $buffer .= $indent . '                <label for="label-actiontext-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->sectionFa5b3523e636c68ce16378c347794780($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <input type="text" name="actiontext" class="form-control" id="label-actiontext-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div style="flex: 1; display: flex; justify-content: center;">
';
        $buffer .= $indent . '            <div class="preview"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <p><strong>';
        $value = $context->find('str');
        $buffer .= $this->section2bb8a761f08bc42fee2ab9ed8315a41c($context, $indent, $value);
        $buffer .= '</strong></p>
';
        $buffer .= $indent . '                <textarea name="snippet" onclick="this.select();" readonly class="form-control">';
        $value = $this->resolveValue($context->find('snippet'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</textarea>
';
        $buffer .= $indent . '                <p><small>';
        $value = $context->find('str');
        $buffer .= $this->section85e67e66781afb350a92b44efd008315($context, $indent, $value);
        $buffer .= '</small></p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('haswarnings');
        $buffer .= $this->sectionFc8327fd0a5ed3c520a5cc1a6faad9e3($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section30d02efd1a31308bcafbf42469978bb8($context, $indent, $value);

        return $buffer;
    }

    private function section9526729485c82161435936c6b42f516c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'appearance, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'appearance, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cd84d2a06788106f846fe2ed02e9d2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA53539b3f6ae70bc54c052557805ce46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'image, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'image, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6d2aedd6d053f0ebb397f75b86c6030(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'imageandbutton, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'imageandbutton, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa5b3523e636c68ce16378c347794780(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'buttontext, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'buttontext, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bb8a761f08bc42fee2ab9ed8315a41c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'snippet, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'snippet, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85e67e66781afb350a92b44efd008315(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'copypaste, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'copypaste, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1859ce199fb9840128a5c35ec7bef204(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="alert alert-warning"><small>{{{.}}}</small></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="alert alert-warning"><small>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</small></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc8327fd0a5ed3c520a5cc1a6faad9e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div>
            {{#warnings}}
                <div class="alert alert-warning"><small>{{{.}}}</small></div>
            {{/warnings}}
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <div>
';
                $value = $context->find('warnings');
                $buffer .= $this->section1859ce199fb9840128a5c35ec7bef204($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb7909975c1938f244fb17690d9425c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '\'{{{.}}}\'';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '\'';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\'';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30d02efd1a31308bcafbf42469978bb8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'block_stash/item\',
    \'block_stash/drop\',
    \'block_stash/drop-snippet-ui\',
    {{#altsnippetmaker}}\'{{{.}}}\'{{/altsnippetmaker}}
    {{^altsnippetmaker}}\'block_stash/drop-snippet-maker\'{{/altsnippetmaker}}
], function(Item, Drop, DropSnippetUI, DropSnippetMaker) {
    var item = new Item({{{itemjson}}});
    var drop = new Drop({{{dropjson}}}, item);
    var dsm = new DropSnippetMaker(drop);
    var ui = new DropSnippetUI(dsm, \'#block-stash-snippet-ui-{{uniqid}}\');
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
                $buffer .= $indent . '    \'block_stash/item\',
';
                $buffer .= $indent . '    \'block_stash/drop\',
';
                $buffer .= $indent . '    \'block_stash/drop-snippet-ui\',
';
                $buffer .= $indent . '    ';
                $value = $context->find('altsnippetmaker');
                $buffer .= $this->sectionAb7909975c1938f244fb17690d9425c1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                $value = $context->find('altsnippetmaker');
                if (empty($value)) {
                    
                    $buffer .= '\'block_stash/drop-snippet-maker\'';
                }
                $buffer .= '
';
                $buffer .= $indent . '], function(Item, Drop, DropSnippetUI, DropSnippetMaker) {
';
                $buffer .= $indent . '    var item = new Item(';
                $value = $this->resolveValue($context->find('itemjson'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');
';
                $buffer .= $indent . '    var drop = new Drop(';
                $value = $this->resolveValue($context->find('dropjson'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ', item);
';
                $buffer .= $indent . '    var dsm = new DropSnippetMaker(drop);
';
                $buffer .= $indent . '    var ui = new DropSnippetUI(dsm, \'#block-stash-snippet-ui-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
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
