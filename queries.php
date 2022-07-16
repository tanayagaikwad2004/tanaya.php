<?php 
/*
// select all the records and all the columns
select * from users;
// select required columns or fields
select id,first_name,last_name,email from users;
// select first 10 records
select * from users limit 10
// select records in ascending order for a column
select * from users order by first_name asc;
// select last 10 records
select * from users order by id desc limit 10
// select records by ascending on columns [first_name || last_name || email || date]
select * from users order by first_name asc;
// select records by descending on columns [first_name || last_name || email || date]
select * from users order by first_name desc;
// select matching records from the table 
select first_name,last_name,email,dob from users where first_name like'%Eric%'
// find the exact matching record from the tables
select first_name,last_name,email,dob from users where last_name = 'Erickson';
select first_name,last_name,email,dob from users where first_name = 'Eric';
// find the records greater than 10
select * from users where id >= 10;
// find the records greater than 10 and less than 25
select * from users where id >= 10 and id<=25;
// update queries
// update by column
// update users set email='deepak@gmail.com' where email='elit.nulla@yahoo.org'
// update users set email='Vijay' where first_name='nola';
// delete record from the table by any column
delete from users where id=49;
// count the records from the table
select count(*)  from users;
*/
