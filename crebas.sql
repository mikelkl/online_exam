/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2015/12/12 16:13:53                          */
/*==============================================================*/


drop table if exists course;

drop table if exists exam;

drop table if exists item_bank;

drop table if exists participate;

drop table if exists student;

drop table if exists teacher;

drop table if exists test_paper;

drop table if exists test_question;

/*==============================================================*/
/* Table: course                                                */
/*==============================================================*/
create table course
(
   course_id            int not null auto_increment,
   tch_id               int,
   semester             varchar(20) not null,
   course_name          varchar(20),
   course_number        varchar(20),
   primary key (course_id)
);

/*==============================================================*/
/* Table: exam                                                  */
/*==============================================================*/
create table exam
(
   stu_id               int not null,
   tp_id                int not null,
   grade                float(4) not null,
   primary key (stu_id, tp_id)
);

/*==============================================================*/
/* Table: item_bank                                             */
/*==============================================================*/
create table item_bank
(
   ib_id                int not null auto_increment,
   course_id            int,
   ib_name              varchar(10),
   primary key (ib_id)
);

/*==============================================================*/
/* Table: participate                                           */
/*==============================================================*/
create table participate
(
   stu_id               int not null,
   course_id            int not null,
   primary key (stu_id, course_id)
);

/*==============================================================*/
/* Table: student                                               */
/*==============================================================*/
create table student
(
   stu_name             varchar(20) not null,
   stu_number           varchar(20) not null,
   stu_email            varchar(20) not null,
   stu_password         varchar(20) not null,
   stu_id               int not null auto_increment,
   stu_school           varchar(20) not null,
   primary key (stu_id)
);

/*==============================================================*/
/* Table: teacher                                               */
/*==============================================================*/
create table teacher
(
   tch_name             varchar(20) not null,
   tch_email            varchar(20) not null,
   tch_password         varchar(20) not null,
   tch_school           varchar(20) not null,
   tch_id               int not null auto_increment,
   primary key (tch_id)
);

/*==============================================================*/
/* Table: test_paper                                            */
/*==============================================================*/
create table test_paper
(
   tp_id                int not null auto_increment,
   course_id            int,
   duration             float,
   tp_content           text,
   tp_name              varchar(10),
   status               bool,
   tp_number            varchar(20),
   start_time           datetime,
   primary key (tp_id)
);

/*==============================================================*/
/* Table: test_question                                         */
/*==============================================================*/
create table test_question
(
   tq_id                int not null auto_increment,
   ib_id                int,
   tq_content           text not null,
   answer               text,
   primary key (tq_id)
);

alter table course add constraint FK_open foreign key (tch_id)
      references teacher (tch_id) on delete set null on update restrict;

alter table exam add constraint FK_exam foreign key (tp_id)
      references test_paper (tp_id) on delete restrict on update restrict;

alter table exam add constraint FK_exam2 foreign key (stu_id)
      references student (stu_id) on delete restrict on update restrict;

alter table item_bank add constraint FK_own foreign key (course_id)
      references course (course_id) on delete set null on update restrict;

alter table participate add constraint FK_participate foreign key (stu_id)
      references student (stu_id) on delete restrict on update restrict;

alter table participate add constraint FK_participate2 foreign key (course_id)
      references course (course_id) on delete restrict on update restrict;

alter table test_paper add constraint FK_has foreign key (course_id)
      references course (course_id) on delete set null on update restrict;

alter table test_question add constraint FK_belong_to foreign key (ib_id)
      references item_bank (ib_id) on delete set null on update restrict;

