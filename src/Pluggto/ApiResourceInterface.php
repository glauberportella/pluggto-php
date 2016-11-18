<?php

namespace Pluggto;

interface ApiResourceInterface
{
	const productEndpoint = 'https://api.plugg.to/products';
	const orderEndpoint = 'https://api.plugg.to/order';
	const appInfoEndpoint = 'https://api.plugg.to/clientInfo';
	const shippingEndpoint = 'https://api.plugg.to/shipping';

	public function create(AccessToken $token, PayloadInterface $payload);
	public function delete(AccessToken $token, $id);
	public function all(AccessToken $token, PaginationInterface $pagination = null, FilterInterface $filters = null);
	public function one(AccessToken $token, $id);
	public function update(AccessToken $token, $id, PayloadInterface $payload);
}