<?php

class __Mustache_4a1894eac73e827522fa8e424a962b98 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="
';
        $buffer .= $indent . '    xp-text-left
';
        $buffer .= $indent . '    xp-flex-row xp-flex-wrap xp-border-0 xp-border-b xp-border-solid xp-border-gray-100 xp-pb-4 xp-gap-2
';
        $buffer .= $indent . '    lg:xp-space-y-1 lg:xp-flex-col lg:xp-flex-nowrap lg:xp-pb-0 lg:xp-border-b-0 lg:xp-gap-0
';
        $buffer .= $indent . '    ">
';
        $value = $context->find('items');
        $buffer .= $this->section52657768e2fc899908fb18f8d8361545($context, $indent, $value);
        $buffer .= $indent . '</nav>';

        return $buffer;
    }

    private function section36e2c56ac6d2c4c0a4b3c6b55f24a00a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            class="lg:xp-w-full xp-no-underline xp-bg-gray-100 xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md xp-gap-1"
            aria-current="page"
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            class="lg:xp-w-full xp-no-underline xp-bg-gray-100 xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md xp-gap-1"
';
                $buffer .= $indent . '            aria-current="page"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF70097e50edeffc98353ee587260508f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> block_xp/addon-tag }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('block_xp/addon-tag')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52657768e2fc899908fb18f8d8361545(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{ url }}"
            {{#current}}
            class="lg:xp-w-full xp-no-underline xp-bg-gray-100 xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md xp-gap-1"
            aria-current="page"
            {{/current}}
            {{^current}}
            class="lg:xp-w-full xp-no-underline xp-text-gray-600 hover:xp-bg-gray-50 hover:xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md"
            {{/current}}
            >
          <span class="xp-grow xp-truncate">{{ text }}</span>
          {{#addonrequired}}{{> block_xp/addon-tag }}{{/addonrequired}}
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $value = $context->find('current');
                $buffer .= $this->section36e2c56ac6d2c4c0a4b3c6b55f24a00a($context, $indent, $value);
                $value = $context->find('current');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            class="lg:xp-w-full xp-no-underline xp-text-gray-600 hover:xp-bg-gray-50 hover:xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md"
';
                }
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '          <span class="xp-grow xp-truncate">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '          ';
                $value = $context->find('addonrequired');
                $buffer .= $this->sectionF70097e50edeffc98353ee587260508f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
