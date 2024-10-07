create table advertisements (id int primary key auto_increment, title varchar(255) not null, description varchar(255) not null, init_date date, repeat_count int min(1));


insert into advertisements (title, description, init_date) values("first advertisement title", "description of first advertisement", "2024-01-01");



insert into advertisements (title, description, init_date, repeat_count) values("first advertisement title", "description of first advertisement", "2024-01-01", 3);



alter table advertisements add column cost decimal;

insert into advertisements (title, description, init_date, repeat_count, cost) values("first advertisement title", "description of first advertisement
", "2024-01-01", 3, 450.50);

alter table advertisements modify column cost decimal(10,2);

update advertisements set cost = 450.50;

-- update advertisements set cost = case when repeat_count = 0 then 300 else repeat_count * 300 + 300 end;

delete from advertisements where id = 3;
