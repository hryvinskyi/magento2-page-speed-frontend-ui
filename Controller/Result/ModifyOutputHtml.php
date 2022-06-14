<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedFrontendUi\Controller\Result;

use Hryvinskyi\PageSpeedApi\Model\ModifyOutputHtmlInterface;
use Magento\Framework\App\Response\Http;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\Layout;

class ModifyOutputHtml
{
    private ModifyOutputHtmlInterface $modifyOutputHtml;

    /**
     * @param ModifyOutputHtmlInterface $modifyOutputHtml
     */
    public function __construct(ModifyOutputHtmlInterface $modifyOutputHtml)
    {
        $this->modifyOutputHtml = $modifyOutputHtml;
    }

    /**
     * @param Layout $subject
     * @param Layout $result
     * @param ResponseInterface $httpResponse
     * @return Layout
     * @noinspection PhpUnusedParameterInspection
     */
    public function afterRenderResult(Layout $subject, Layout $result, ResponseInterface $httpResponse): Layout
    {
        if ($httpResponse instanceof Http) {
            $content = (string)$httpResponse->getContent();
            $httpResponse->setContent($this->modifyOutputHtml->execute($content));
        }

        return $result;
    }
}
