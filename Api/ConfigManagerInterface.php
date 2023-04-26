<?php declare(strict_types=1);
/**
 * Copyright © 2023 LopezPaul. All rights reserved.
 *
 * @package  LopezPaul_CustomerRegistration
 * @author   Paul Lopez <paul.lopezm@gmail.com>
 */

namespace LopezPaul\CustomerRegistrationApi\Api;

interface ConfigManagerInterface
{
    /**
     * Get configuration value from core_config_data table
     *
     * @param string $path
     * @param string $scopeType
     * @param string|null $scopeCode
     * @return mixed
     */
    public function get(string $path, string $scopeType, string|null $scopeCode):mixed;
}
