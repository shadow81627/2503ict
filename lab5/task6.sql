/*
* returns the names of customers who live in Nathan
*/
SELECT c.NAME FROM CUSTOMERS AS c
WHERE c.ADDRESS LIKE "%Nathan%"; 

/*
* returns the names of customers who have bought Fred's Fries
*/
SELECT c.NAME FROM CUSTOMERS AS c
WHERE c.ID IN(SELECT o.CUSTID FROM ORDERS AS o
    WHERE o.ITEMID IN(SELECT s.ID FROM STOCK AS s
        WHERE s.NAME = 'Fred''s Fries'));