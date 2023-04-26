<?php declare(strict_types=1);
/**
 * Copyright © 2023 LopezPaul. All rights reserved.
 *
 * @package  LopezPaul_CustomerRegistration
 * @author   Paul Lopez <paul.lopezm@gmail.com>
 */

namespace LopezPaul\CustomerRegistrationApi\Api;

use Magento\Customer\Api\Data\CustomerInterface;

interface CustomerEmailsInterface
{

    /**
     * Send an email with basic customer information using custom template
     *
     * @param CustomerInterface $customer
     * @param string $toEmail
     * @param string $toName
     * @return void
     */
    public function notify(CustomerInterface $customer, string $toEmail, string $toName = ''):void;

    /**
     * Send Email in general
     *
     * @param string $template
     * @param string $email
     * @param string $name
     * @param array $vars
     * @return void
     */
    public function sendEmail(string $template, string $email, string $name = '', array $vars = []):void;
}
