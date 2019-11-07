<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\Entity;

class Search {

    /**
     * @var
     */
    private $type;

    /**
     * @var
     */
    private $title;

    /**
     * @var
     */
    private $category;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return Search
     */
    public function setType(?string $type): Search
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Search
     */
    public function setTitle(?string $title): Search
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string|null $category
     * @return Search
     */
    public function setCategory(?string $category): Search
    {
        $this->category = $category;
        return $this;
    }

}