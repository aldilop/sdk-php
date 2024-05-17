<?php

namespace MercadoPago\Net;

/**
 * Search request class.
 */
class MPSearchRequest
{
    const LIMIT_PARAM = "limit";
    const OFFSET_PARAM = "offset";

    private $limit;
    private $offset;
    private $filters;

    /**
     * MPSearchRequest constructor.
     * @param int $limit limit of the search.
     * @param int $offset offset of the search.
     * @param array $filters filters of the search.
     */
    public function __construct(
        int $limit = null,
        int $offset = null,
        $filters = []
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->filters = $filters;
    }

    /**
     * Get the limit of the search.
     * @return int limit of the search.
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Get the offset of the search.
     * @return int offset of the search.
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Get the filters of the search.
     * @return array filters of the search.
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * Get the parameters of the search.
     * @return array parameters of the search.
     */
    public function getParameters(): array
    {
        $parameters = $this->filters ?: [];

        if (!array_key_exists(self::LIMIT_PARAM, $parameters)) {
            $parameters[self::LIMIT_PARAM] = $this->limit;
        }

        if (!array_key_exists(self::OFFSET_PARAM, $parameters)) {
            $parameters[self::OFFSET_PARAM] = $this->offset;
        }

        return $parameters;
    }
}
