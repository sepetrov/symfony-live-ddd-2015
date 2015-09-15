# DDD in Symfony
## Symfony Live London 2015

* `git clone` this repository
* You will have an empty folder with just this README - this is intentional!


# Exercise 1 - Value Objects and Entities

Product Returns
---------------

When a customer returns an item online and drops it off at our store, our tills capture:
 
* A return number (a key for this entity generated by the till)
* Product sku
* Product price at purchase time
* Date of the original purchase
* Date of the return
* Reason for the return

* It can be refunded as store credit no matter when it was purchased
* It can be refunded for cash only if it has been returned within 30 days of purchase
* It can't be refunded or credited more than once
