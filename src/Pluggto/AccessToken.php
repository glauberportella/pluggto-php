<?php

namespace Pluggto;

class AccessToken
{
	/**
	 * @var string
	 */
	protected $token;

	/**
	 * @var integer
	 */
	protected $expiresIn;

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var string
	 */
	protected $scope;

	/**
	 * @var string
	 */
	protected $refreshToken;

	public function appAuth($clientId, $clientSecret, $code, $grantType = 'authorization_code')
	{

	}

	public function plugginAuth($clientId, $clientSecret, $username, $password, $grantType = 'password')
	{

	}

	

    /**
     * Gets the value of token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets the value of token.
     *
     * @param string $token the token
     *
     * @return self
     */
    protected function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Gets the value of expiresIn.
     *
     * @return integer
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * Sets the value of expiresIn.
     *
     * @param integer $expiresIn the expires in
     *
     * @return self
     */
    protected function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param string $type the type
     *
     * @return self
     */
    protected function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of scope.
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets the value of scope.
     *
     * @param string $scope the scope
     *
     * @return self
     */
    protected function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Gets the value of refreshToken.
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Sets the value of refreshToken.
     *
     * @param string $refreshToken the refresh token
     *
     * @return self
     */
    protected function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }
}