<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedFrontendUi\Plugin;

use Hryvinskyi\PageSpeedApi\Model\ModifyOutputHtmlInterface;
use Magento\Framework\App\Response\Http as HttpResponse;
use Magento\Framework\App\ResponseInterface;
use Magento\PageCache\Controller\Block\Esi;

/**
 * Plugin to apply page-speed HTML modifications to ESI block responses.
 *
 * ESI blocks rendered via the Esi controller bypass the normal Layout::renderResult()
 * pipeline, so the ModifyOutputHtml plugin never fires. This plugin intercepts the
 * ESI controller's execute() method to run the same modification pipeline on ESI HTML.
 */
class EsiModifyOutputPlugin
{
    /**
     * @param ModifyOutputHtmlInterface $modifyOutputHtml
     * @param ResponseInterface $response
     */
    public function __construct(
        private readonly ModifyOutputHtmlInterface $modifyOutputHtml,
        private readonly ResponseInterface $response
    ) {
    }

    /**
     * Apply page-speed modifications to the ESI response body after execution.
     *
     * @param Esi $subject
     * @param mixed $result
     *
     * @return mixed
     *
     * @noinspection PhpUnusedParameterInspection
     */
    public function afterExecute(Esi $subject, mixed $result): mixed
    {
        if ($this->response instanceof HttpResponse) {
            $content = (string)$this->response->getContent();

            if ($content !== '') {
                $this->response->setContent($this->modifyOutputHtml->execute($content));
            }
        }

        return $result;
    }
}
