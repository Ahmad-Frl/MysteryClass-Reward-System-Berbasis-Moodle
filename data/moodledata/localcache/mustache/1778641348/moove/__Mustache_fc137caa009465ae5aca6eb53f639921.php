<?php

class __Mustache_fc137caa009465ae5aca6eb53f639921 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="leaderBoardCarousel" class="carousel carousel-dark slide" data-interval="false" data-ride="carousel">
';
        $buffer .= $indent . '    <div class="carousel-inner">
';
        $value = $context->find('leaderboards');
        $buffer .= $this->section426f6ba057d20dc13c6906723e70bf4f($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('boardcontrols');
        $buffer .= $this->section76d4bbc226e0689f2ac94b08cb1a0a98($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section426f6ba057d20dc13c6906723e70bf4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> block_stash/local/leaderboard_settings/display}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('block_stash/local/leaderboard_settings/display')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8454078a6b39f2a268b6406f8804a2ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previous, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfd4ecaf7efec26bb1773628b67c3d51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/previous, core, {{#str}}previous, block_stash{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/previous, core, ';
                $value = $context->find('str');
                $buffer .= $this->section8454078a6b39f2a268b6406f8804a2ed($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6494fd8bfaf7749f15b016b8c7646bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'next, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0de62ccc123edcb353d881ca43cece8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/next, core, {{#str}}next, block_stash{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/next, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionF6494fd8bfaf7749f15b016b8c7646bc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76d4bbc226e0689f2ac94b08cb1a0a98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="block_stash-controls carousel-control-prev" href="#leaderBoardCarousel" role="button" data-slide="prev">
        <span>{{#pix}}i/previous, core, {{#str}}previous, block_stash{{/str}}{{/pix}}</span>
        <span class="sr-only">{{#str}}previous, block_stash{{/str}}</span>
    </a>
    <a class="block_stash-controls carousel-control-next" href="#leaderBoardCarousel" role="button" data-slide="next">
        <span>{{#pix}}i/next, core, {{#str}}next, block_stash{{/str}}{{/pix}}</span>
        <span class="sr-only">{{#str}}next, block_stash{{/str}}</span>
    </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a class="block_stash-controls carousel-control-prev" href="#leaderBoardCarousel" role="button" data-slide="prev">
';
                $buffer .= $indent . '        <span>';
                $value = $context->find('pix');
                $buffer .= $this->sectionCfd4ecaf7efec26bb1773628b67c3d51($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section8454078a6b39f2a268b6406f8804a2ed($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <a class="block_stash-controls carousel-control-next" href="#leaderBoardCarousel" role="button" data-slide="next">
';
                $buffer .= $indent . '        <span>';
                $value = $context->find('pix');
                $buffer .= $this->section0de62ccc123edcb353d881ca43cece8c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionF6494fd8bfaf7749f15b016b8c7646bc($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
