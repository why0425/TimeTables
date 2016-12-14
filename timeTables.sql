create database timeTable;
set names gbk;
use timeTable;
#创建学生表
create table student(
    stu_id int primary key auto_increment comment '学生id',
    stu_name varchar(25) not null default '' comment '学生姓名',
    stu_sex char(25) not null default '' comment '学生性别',
    stu_xuehao bigint not null default 0 comment '学生学号',
    grade_id int not null default 0 comment '年级id',
    class_id int not null default 0 comment '班级id'
);
#创建年级表
create table grade(
    grade_id int primary key auto_increment comment '年级id',
    grade_name varchar(25) not null default '' comment '年级名称'
);
#创建班级表
create table class(
    class_id int primary key auto_increment comment '班级id',
    class_name varchar(25) not null default '' comment '班级名称'
);
#创建星期表
create table week(
    week_id int primary key auto_increment comment '星期id',
    week_name varchar(25) not null default '' comment '星期名称'
);
#创建课程表
create table timeTables(
    time_tables_id int primary key auto_increment comment '课程id',
    grade_id int not null default 0 comment '年级id',
    class_id int not null default 0 comment '班级id',
    week_id int not null default 0 comment '星期id',
    course varchar(255) not null default '' comment '课程名称',
    node int not null default 0 comment '第几节课'
);


