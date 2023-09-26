Society Model:
Fields: name, description, contact_person, etc.
Member Model:
Fields: first_name, last_name, email, phone_number, address, etc.
Consider using roles and permissions to differentiate between member types.
Loan Model:
Fields: amount, interest_rate, status, repayment_plan, etc.
LoanPayment Model:
Fields: member_id, loan_id, amount_paid, payment_date, etc.
SharePayment Model:
Fields: member_id, amount_paid, payment_date, etc.
Withdrawal Model:
Fields: member_id, reason, status, etc.
Report Model:
Fields: name, description, generated_date, etc.
Role Model:
Fields: name, description, etc.
Project Model:
Fields: name, description, start_date, end_date, etc.
ProjectMember Model:
Fields: project_id, member_id, etc.
Notification Model:
Fields: message, recipient_id, timestamp, etc.
Permission Model:
Fields: name, description, etc.
