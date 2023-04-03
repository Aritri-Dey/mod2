-- Active: 1678687549404@@127.0.0.1@3306@examDB
use  grocery;
CREATE TABLE healthy (item VARCHAR(50) NOT NULL, price INT NOT NULL);
INSERT into healthy
values
('Cucumber',100),
('Yoghurt',100),
('Apple',100),
('Oats',100);
SELECT* from healthy;
-- CREATE DATABASE grocery;
-- use  grocery;