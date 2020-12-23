<?php

namespace Inchoo\Sample04\Block;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class NewsViewBlock extends Template
{
    protected $newsRegistry;

    public function __construct(Context $context, Registry $newsRegistry, array $data = [])
    {
        parent::__construct($context, $data);
        $this->newsRegistry = $newsRegistry;
    }

    public function getNewsId()
    {
        return $this->newsRegistry->registry('news_id');
    }
}
