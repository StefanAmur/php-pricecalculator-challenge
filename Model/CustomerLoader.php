<?php

declare(strict_types=1);

class CustomerLoader {
    private DataSource $db;

    public function __construct(DataSource $db) {
        $this->db = $db;
    }

    public function getCustomers(): array {
        $result = [];
        $response = $this->db->getCustomers();
        if ($response->num_rows > 0) {
            while ($row = $response->fetch_assoc()) {
                array_push($result, new Customer(intval($row['id']), $row['firstname'], $row['lastname'], intval($row['group_id']), intval($row['fixed_discount']), intval($row['variable_discount'])));
            }
        }
        return $result;
    }
}
