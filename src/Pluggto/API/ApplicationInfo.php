<?php

namespace Pluggto\API;

use Pluggto\AccessToken;
use Pluggto\ApiRequest;
use Pluggto\ApiResourceInterface;
use Pluggto\FilterInterface;
use Pluggto\PaginationInterface;
use Pluggto\PayloadInterface;

use Pluggto\Exception\RequestException;
use Pluggto\Exception\UnknownException;

class ApplicationInfo implements ApiResourceInterface
{
	public function clientInfo(AccessToken $token, $id)
	{
		$uri = ApiResourceInterface::appInfoEndpoint.'/'.$id.'?access_token='.$token->getToken();

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
		throw new RequestException('Requisição a API não permitida. POST clientInfo.');
	}

	public function delete(AccessToken $token, $id)
	{
		throw new RequestException('Requisição a API não permitida. DELETE clientInfo.');
	}

	public function all(AccessToken $token, PaginationInterface $pagination = null, FilterInterface $filters = null)
	{
		throw new RequestException('Requisição a API não permitida, obter todos clientInfo. GET clientInfo.');
	}

	public function one(AccessToken $token, $id)
	{
		return $this->clientInfo($token, $id);
	}

	public function update(AccessToken $token, $id, PayloadInterface $payload)
	{
		throw new RequestException('Requisição a API não permitida. UPDATE clientInfo.');
	}
}