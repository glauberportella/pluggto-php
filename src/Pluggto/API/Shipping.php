<?php

namespace Pluggto\API;

use Pluggto\AccessToken;
use Pluggto\ApiRequest;
use Pluggto\ApiResourceInterface;
use Pluggto\FilterInterface;
use Pluggto\PaginationInterface;
use Pluggto\ParamInterface;
use Pluggto\PayloadInterface;

use Pluggto\Exception\RequestException;
use Pluggto\Exception\UnknownException;

class Shipping implements ApiResourceInterface
{
	public function get(AccessToken $token, ParamInterface $params)
	{
		$uri = ApiResourceInterface::shippingEndpoint.'/?access_token='.$token->getToken();
		$uri .= '&'.$params->buildQuery();

		$response = ApiRequest::get($uri)
			->send();

		if ($response->hasErrors()) {
			$body = '';
			if ($response->hasBody()) {
				$body = $response->raw_body;
			}
			throw new RequestException($body);
		}

		if (!$response->hasBody()) {
			throw new UnknownException('Erro desconhecido ao obter recurso da API.');
		}

		return $response->body;
	}

	public function create(AccessToken $token, PayloadInterface $payload)
	{
		throw new RequestException('Requisição a API não permitida. POST shipping.');
	}

	public function delete(AccessToken $token, $id)
	{
		throw new RequestException('Requisição a API não permitida. DELETE shipping.');
	}

	public function all(AccessToken $token, PaginationInterface $pagination = null, FilterInterface $filters = null)
	{
		throw new RequestException('Requisição a API não permitida, obter todos shipping. Use o método Shipping::get().');
	}

	public function one(AccessToken $token, $id)
	{
		throw new RequestException('Requisição a API não permitida. Use o método Shipping::get().');
	}

	public function update(AccessToken $token, $id, PayloadInterface $payload)
	{
		throw new RequestException('Requisição a API não permitida. UPDATE shipping.');
	}
}