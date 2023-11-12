**Create Loan Status Table**

CREATE TABLE loan_statuses (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

**Create Loan Plans Table**

CREATE TABLE loan_plans (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    interest_rate DECIMAL(5,2) NOT NULL,
    late_fee DECIMAL(10,2) NOT NULL
);

**Create Loans Table**

CREATE TABLE loans (
    id INT PRIMARY KEY AUTO_INCREMENT,
    loan_plan_id INT NOT NULL,
    total_payable DECIMAL(10,2) NOT NULL,
    paid DECIMAL(10,2) NOT NULL,
    installment DECIMAL(10,2) NOT NULL,
    status ENUM('plan', 'pending', 'active', 'paid', 'closed') NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    FOREIGN KEY (loan_plan_id) REFERENCES loan_plans(id)
);

-- insert

INSERT INTO loan_statuses (name) VALUES
('Pending'),
('Approved'),
('Rejected'),
('Cancelled'),
('Disbursed');


INSERT INTO loan_plans (name, interest_rate, late_fee) VALUES
('Plan A', 3.5, 10.00),
('Plan B', 4.0, 15.00),
('Plan C', 4.5, 20.00),
('Plan D', 5.0, 25.00),
('Plan E', 5.5, 30.00);


INSERT INTO loans (loan_plan_id, total_payable, paid, installment, status, created_at, updated_at) VALUES
(1, 5000.00, 0.00, 1000.00, 'pending', '2023-11-12 10:00:00', '2023-11-12 10:00:00'),
(2, 10000.00, 0.00, 2000.00, 'active', '2023-11-11 12:00:00', '2023-11-11 12:00:00'),
(3, 15000.00, 5000.00, 3000.00, 'paid', '2023-11-10 14:00:00', '2023-11-10 14:00:00'),
(4, 20000.00, 10000.00, 4000.00, 'closed', '2023-11-09 16:00:00', '2023-11-09 16:00:00'),
(5, 25000.00, 15000.00, 5000.00, 'active', '2023-11-08 18:00:00', '2023-11-08 18:00:00');
