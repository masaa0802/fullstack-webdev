-- セッション2用
start transaction;

update test_db.txn_stocks set amount = 1000
where product_id = 1 and shop_id = 2;

update test_db.txn_stocks set amount = 1000
where product_id = 1 and shop_id = 1;


commit;

select * from test_db.txn_stocks
where (product_id = 1 and shop_id = 1)
or (product_id = 1 and shop_id = 2);

kill 967;