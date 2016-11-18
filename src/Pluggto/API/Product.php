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

class Product implements ApiResourceInterface
{
	const tableDataEndpoint = 'https://api.plugg.to/tableData';

	public function create(AccessToken $token, PayloadInterface $payload)
	{
		$uri = ApiResourceInterface::productEndpoint.'?access_token='.$token->getToken();
		
		$response = ApiRequest::post($uri)
			->body(json_encode($payload))
			->send();

		if ($response->hasErrors()) {
			$body = '';
			if ($response->hasBody()) {
				$body = $response->raw_body;
			}
			throw new RequestException($body);
		}

		return ($response->hasBody()) ? $response->body : true;
	}

	public function delete(AccessToken $token, $id)
	{
		$uri = ApiResourceInterface::productEndpoint.'/'.$id.'?access_token='.$token->getToken();

		$response = ApiRequest::delete($uri)
			->send();

		if ($response->hasErrors()) {
			$body = '';
			if ($response->hasBody()) {
				$body = $response->raw_body;
			}
			throw new RequestException($body);
		}

		return ($response->hasBody()) ? $response->body : true;
	}

	public function all(AccessToken $token, PaginationInterface $pagination = null, FilterInterface $filters = null)
	{
		$uri = ApiResourceInterface::productEndpoint.'?access_token='.$token->getToken();

		if (!is_null($pagination)) {
			$uri .= '&'.$pagination->buildQuery();
		}

		if (!is_null($filters)) {
			$uri .= '&'.$filters->buildQuery();
		}

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

	public function one(AccessToken $token, $id)
	{
		$uri = ApiResourceInterface::productEndpoint.'/'.$id.'?access_token='.$token->getToken();

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

	public function update(AccessToken $token, $id, PayloadInterface $payload)
	{
		$uri = ApiResourceInterface::productEndpoint.'/'.$id.'?access_token='.$token->getToken();

		$response = ApiRequest::put($uri)
			->body(json_encode($payload))
			->send();

		if ($response->hasErrors()) {
			$body = '';
			if ($response->hasBody()) {
				$body = $response->raw_body;
			}
			throw new RequestException($body);
		}

		return ($response->hasBody()) ? $response->body : true;
	}

	public function stockVariationUpdate(AccessToken $token, $id, $vid, PayloadInterface $payload)
	{
		$uri = ApiResourceInterface::productEndpoint.'/'.$id.'/variation/'.$vid.'/stock?access_token='.$token->getToken();

		$response = ApiRequest::put($uri)
			->body(json_encode($payload))
			->send();

		if ($response->hasErrors()) {
			$body = '';
			if ($response->hasBody()) {
				$body = $response->raw_body;
			}
			throw new RequestException($body);
		}

		return ($response->hasBody()) ? $response->body : true;
	}

	public function stockUpdate(AccessToken $token, $id, PayloadInterface $payload)
	{
		$uri = ApiResourceInterface::productEndpoint.'/'.$id.'/stock?access_token='.$token->getToken();

		$response = ApiRequest::put($uri)
			->body(json_encode($payload))
			->send();

		if ($response->hasErrors()) {
			$body = '';
			if ($response->hasBody()) {
				$body = $response->raw_body;
			}
			throw new RequestException($body);
		}

		return ($response->hasBody()) ? $response->body : true;
	}

	public function tableData(AccessToken $token)
	{
		$uri = Product::tableDataEndpoint.'?access_token='.$token->getToken();

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
}