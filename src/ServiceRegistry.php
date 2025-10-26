<?php

namespace Atlas\Plugin\Contracts;

interface ServiceRegistry
{
    public function register(BrowseService $service): void;

    /**
     * @return array<string, BrowseService>
     */
    public function all(): array;

    public function get(string $key): ?BrowseService;
}
