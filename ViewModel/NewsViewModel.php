<?php

namespace Inchoo\Sample04\ViewModel;

use Inchoo\Sample04\Api\NewsRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class NewsViewModel implements ArgumentInterface
{
    /**
     * @var \Inchoo\Sample04\Api\NewsRepositoryInterface
     */
    protected $newsRepository;

    /**
     * @param NewsRepositoryInterface $newsRepository
     */
    public function __construct(
        NewsRepositoryInterface $newsRepository
    ) {
        $this->newsRepository = $newsRepository;
    }

    public function getNewsById($id)
    {
        $news = '';
        try {
            $news = $this->newsRepository->getById($id);
            $id = $news->getId();
        } catch (NoSuchEntityException $e) {
            echo $e->getMessage();
        }
        return $news;
    }
}
