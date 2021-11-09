<?php

declare(strict_types=1);

class CustomerGroupLoader {
    private DataSource $db;

    public function __construct(DataSource $db) {
        $this->db = $db;
    }

    public function getCustomerGroup(): array {
        $result = [];
        $response = $this->db->getCustomerGroup();
        foreach ($response as $key => $v) {
            array_push($result, new CustomerGroup(intval($v['id']), $v['name'], intval($v['parent_id']), intval($v['fixed_discount']), intval($v['variable_discount'])));
        }
        return $result;
    }
}
