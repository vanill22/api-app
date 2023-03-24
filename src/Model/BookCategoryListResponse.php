<?php

namespace App\Model;

class BookCategoryListResponse
{
    /**
     * @var BookCategoryListItem[]
     */
    private array $item;

    /**
     * @param BookCategoryListItem[] $items
     */
    public function __construct(array $items)
    {
        $this->item = $items;
    }

    /**
     * @return BookCategoryListItem[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

}
