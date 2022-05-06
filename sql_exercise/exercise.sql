
SELECT SUM(purch_amt) FROM orders


SELECT customer_id FROM orders GROUP BY salesman_id


SELECT salesman_id, COUNT(customer_id) FROM orders GROUP BY salesman_id;

SELECT MIN(purch_amt) FROM orders;

SELECT customer_id, MAX(purch_amt) FROM orders GROUP BY customer_id;


SELECT order_no, purch_amt, customer_name, city
FROM orders
INNER JOIN customer ON customer_id = customer.customer_id
WHERE SUM(purch_amt) > 500 AND SUM(purch_amt) < 2000;
