<?php

declare(strict_types=1);

class CustomerGroup {
    private int $id;
    private string $name;
    private int $parentId;
    private int $fixedDiscount;
    private int $variableDiscount;

    public function __construct(int $id, string $name, int $parentId, int $fixedDiscount, int $variableDiscount) {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getParentId() {
        return $this->parentId;
    }

    public function getFixedDiscount() {
        return $this->fixedDiscount;
    }

    public function getVariableDiscount() {
        return $this->variableDiscount;
    }
}
