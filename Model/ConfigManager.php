<?php declare(strict_types=1);
/**
 * Copyright © 2023 LopezPaul. All rights reserved.
 *
 * @package  LopezPaul_CustomerRegistration
 * @author   Paul Lopez <paul.lopezm@gmail.com>
 */
namespace LopezPaul\CustomerRegistrationApi\Model;

use LopezPaul\CustomerRegistrationApi\Api\ConfigManagerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class ConfigManager implements ConfigManagerInterface
{
    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        private readonly ScopeConfigInterface $scopeConfig
    ) {
    }

    /**
     * Get config value from path
     *
     * @param string $path
     * @param string $scopeType
     * @param string|null $scopeCode
     * @return mixed
     */
    public function get(
        string $path,
        string $scopeType = ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
        string|null $scopeCode = null
    ):mixed {
        return $this->scopeConfig->getValue($path, $scopeType, $scopeCode);
    }
}
