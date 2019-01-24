<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata[getenv('SSP_SP_ENTITY_ID')] = array(
    'AssertionConsumerService' => getenv('SSP_SP_ACS'),
    'SingleLogoutService' => getenv('SSP_SP_SLS'),
);
