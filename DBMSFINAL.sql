Use GYM;

create table GYM
(
	GYM_ID varchar(10) primary key,
	Address varchar(30),
	Phone_number int
	);

Create table CUSTOMER
(
	Customer_ID int primary key,
	Customer_Name varchar(20),
	DOB date,
	Phone_Number int,
	Address varchar(30),
    	GYM_ID varchar(10),
    	Membership_name varchar(10),
   	foreign key fk_gid(GYM_ID) 
    	references GYM(GYM_ID)
    	on delete cascade on update cascade,
   	foreign key fk_mid(Membership_name) 
    	references MEMBERSHIP(Membership_name)
	on delete cascade on update cascade 
	);


create table TRAINER
 (
	Trainer_ID  varchar(10) primary key, 
	Trainer_Name varchar(25),
	Phone_Number int,
	Address varchar(30),
   	 GYM_ID varchar(10),
   	Customer_ID int,
	foreign key fk_id(GYM_ID)
   	 references GYM(GYM_ID)
    	on delete cascade on update cascade ,
    	foreign key fk_cid(Customer_ID) 
    	references CUSTOMER(Customer_ID)
    	on delete cascade on update cascade
	);


create table EQUIPMENT
(
	id int,
    GYM_ID varchar(10),
	Equipment_id int,
   	Equipment_Name varchar(20),
    	Purchase_Date date,
    	foreign key id(GYM_ID) 
    	references GYM(GYM_ID)
    	on delete cascade on update cascade
    );

create table MEMBERSHIP
(
	Membership_name varchar(10) primary key,
    	Start_date date,
   	 End_date date
    );


