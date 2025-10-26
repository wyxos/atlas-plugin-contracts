<?php

namespace Atlas\Plugin\Contracts;

interface BrowseService
{
    public static function key(): string;

    public static function label(): string;

    public static function source(): string;

    public static function hotlinkProtected(): bool;

    public function defaultParams(): array;

    public function fetch(array $params = []): array;

    public function transform(array $response, array $params = []): array;

    public function containers(array $listingMetadata = [], array $detailMetadata = []): array;
}
