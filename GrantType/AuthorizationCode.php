<?php
namespace OAuth2\GrantType;

/**
 * Authorization code  Grant Type Validator
 */
class AuthorizationCode implements IGrantType
{
    /**
     * Defines the Grant Type
     * 
     * @var string  Defaults to 'authorization_code'. 
     */
    const GRANT_TYPE = 'authorization_code';

    /**
     * Adds a specific Handling of the parameters
     * 
     * http://tools.ietf.org/html/draft-ietf-oauth-v2-23#section-4.1.1
     * 
     * @return array of Specific parameters to be sent.
     * @param  mixed  $parameters the parameters array (passed by reference)
     */
    public function validateParameters(&$parameters)
    {
        if (!isset($parameters['code']))
        {
            throw new \Exception('The \'code\' parameter must be defined for the Authorization Code grant type');
        }
        elseif (!isset($parameters['client_id']))
        {
            throw new \Exception('The \'client_id\' parameter must be defined for the Authorization Code grant type');
        }
    }
}
