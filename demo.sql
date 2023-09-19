CREATE TABLE orders
(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) NULL,
    email varchar(100) NULL,
    phone varchar(12) NULL,
    address varchar(255) NULL,
    status tinyint DEFAULT '0',
    customer_id int NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at date NULL
);

CREATE TABLE orders_detail
(
    order_id int NOT NULL,
    product_id int NOT NULL,
    price float NOT NULL,
    quanity int NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES product(id),
    PRIMARY KEY(order_id, product_id)
);

