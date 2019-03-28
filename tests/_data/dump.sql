
-- create the table
create table if not exists dvds (
    id integer primary key AUTO_INCREMENT,
    title text,
    category text,
    price float
);

-- insert some data
insert into dvds values (1, 'jaws','horror',9.99);
insert into dvds values (2, 'jaws2','horror',4);
insert into dvds values (3, 'mama mia','romance',9.99);
insert into dvds values (4, 'forget Pairs','romance',8);